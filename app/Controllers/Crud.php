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
            "datos" => $datos,
            "mensaje" => $mensaje
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

    public function actualizar()
    {
        $datos = [
            "nombreTb_Alumnos" => $_POST['nombre'],
            "emailTb_Alumnos" => $_POST['email'],
            "direccionTb_Alumnos" => $_POST['direccion'],
            "telefonoTb_Alumnos" => $_POST['telefono'],
            "usuarioTb_Alumnos" => $_POST['usuario'],
        ];
        $idNombre = $_POST['idTb_Alumnos'];
        $Crud = new CrudModel();
        $respuesta = $Crud->actualizar($datos, $idNombre);
        if ($respuesta) {
            return redirect()->to(base_url() . '/')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url() . '/')->with('mensaje', '3');
        }
    }

    public function obtenerNombre($idNombre)
    {
        $data = ["idTb_Alumnos" => $idNombre];
        $Crud = new CrudModel();
        $respuesta = $Crud->obtenerNombre($data);

        $datos = ["datos" => $respuesta];


        return view('actualizar', $datos);
    }

    public function eliminar($idNombre)
    {
        $Crud = new CrudModel();
        $data = ["idTb_Alumnos" => $idNombre];

        $respuesta = $Crud->eliminar($data);

        if ($respuesta) {
            return redirect()->to(base_url() . '/')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/')->with('mensaje', '5');
        }
    }
}
