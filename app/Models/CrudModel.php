<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    public function listarNombres()
    {
        $Nombres = $this->db->query("SELECT * FROM tb_alumnos");
        return $Nombres->getResult();
    }

    public function insertar($datos)
    {
        $Nombres = $this->db->table('tb_alumnos');
        $Nombres->insert($datos);

        return $this->db->insertID();
    }
}
