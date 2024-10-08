<?php
$idNombre = $datos[0]['idTb_Alumnos'];
$nombre = $datos[0]['nombreTb_Alumnos'];
$email = $datos[0]['emailTb_Alumnos'];
$direccion = $datos[0]['direccionTb_Alumnos'];
$telefono = $datos[0]['telefonoTb_Alumnos'];
$usuario = $datos[0]['usuarioTb_Alumnos'];



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualizar alumno</title>
</head>

<body>

    <div class="container">
        <h1>Crud con CodeIgniter4</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url() . '/actualizar' ?>">
                    <input type="text" name="idTb_Alumnos" id="idTb_Alumnos" hidden=""
                        value="<?php echo $idNombre ?>">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"
                        value="<?php echo $nombre ?>">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        value="<?php echo $email ?>">

                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" id="direccion" class="form-control"
                        value="<?php echo $direccion ?>">

                    <label for="telefono">Telefono</label>
                    <input type="number" name="telefono" id="telefono" class="form-control"
                        value="<?php echo $telefono ?>">

                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control"
                        value="<?php echo $usuario ?>">

                    <br>
                    <button class="btn btn-warning">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>