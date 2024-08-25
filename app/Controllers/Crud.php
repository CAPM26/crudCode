<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{
    public function index(): string
    {

        $Crud = new CrudModel();
        $datos = $Crud->listarNombres();

        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos
        ];

        return view('listado', $data);
    }

    public function crear()
    {
        $datos = [

            "nombreTb_Alumnos" => $_POST['nombre'],
            "emailTb_Alumnos" => $_POST['email'],
            "direccionTb_Alumnos" => $_POST['direccion'],
            "telefonoTb_Alumnos" => $_POST['telefono'],
            "usuarioTb_Alumnos" => $_POST['usuario'],
        ];
        $Crud = new CrudModel();
        $respuesta = $Crud->insertar($datos);

        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/')->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/')->with('mensaje', '0');
        }
    }

    public function actualizar() {}

    public function obtenerNombre($idNombre) {}

    public function eliminar($idNombre) {}
}
