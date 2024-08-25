<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD CodeIgniter4</title>
</head>

<body>
    <div class="container">
        <h1>Crud con CodeIgniter4</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url() . '/crear' ?>">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" id="direccion" class="form-control">
                    <label for="telefono">Telefono</label>
                    <input type="number" name="telefono" id="telefono" class="form-control">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control">
                    <br>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        <hr>
        <h2>Listado de personas</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Usuario</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        <?php foreach ($datos as $key): ?>
                            <tr>
                                <td><?php echo $key->nombreTb_Alumnos ?></td>
                                <td><?php echo $key->emailTb_Alumnos ?></td>
                                <td><?php echo $key->direccionTb_Alumnos ?></td>
                                <td><?php echo $key->telefonoTb_Alumnos ?></td>
                                <td><?php echo $key->usuarioTb_Alumnos ?></td>
                                <td><a href="<?php echo base_url() . '/obtenerNombre/$key->idTb_Alumnos' ?>" class="btn btn-warning btn-sm">Editar</a></td>
                                <td><a href="" class="btn btn-danger btn-sm">Eliminar</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>