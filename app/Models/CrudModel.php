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

    public function obtenerNombre($data)
    {
        $Nombres = $this->db->table('tb_alumnos');
        $Nombres->where($data);
        return $Nombres->get()->getResultArray();
    }

    public function actualizar($data, $idNombre)
    {
        $Nombres = $this->db->table('tb_alumnos');
        $Nombres->set($data);
        $Nombres->where('idTb_Alumnos', $idNombre);
        return $Nombres->update();
    }

    public function eliminar($data)
    {
        $Nombres = $this->db->table('tb_alumnos');
        $Nombres->where($data);
        return $Nombres->delete();
    }
}
