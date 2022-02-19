<?php include './globals.php' ?>

<!DOCTYPE html>
<html lang="ES">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous" 
    />
    <title>CRUD usando solo _SESSION</title>
</head>

<body>
    <div class="container py-5">
        <header>
            <h1>CRUD usando solo _SESSION.</h1>
        </header>

        <!-- Modal new user -->
        <div class="modal fade" id="modal-new-user" tabindex="-1" aria-labelledby="modal-new-user-label"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="./newUser.php" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-new-user-label">Agregar Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul id="new-user-form-error-list"></ul>

                            <div class="form-group mb3">
                                <label for="first-name">Nombre</label>
                                <input type="text" class="first-name form-control" id="first-name" name="user[first-name]">
                            </div>

                            <div class="form-group mb3">
                                <label for="last-name">Apellido</label>
                                <input type="text" class="last-name form-control" id="last-name" name="user[last-name]">
                            </div>
                            
                            <div class="form-group mb3">
                                <label for="creation-date"></label>
                                <input type="hidden" class="creation-date form-control" value="<?php echo $dateAndTime ?>" id="creation-date" name="user[creation-date]">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cerrar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Guardar Usuario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Registered user table -->
        <div class="row">
            <div class="col-md-12">
                <div id="success_message"></div>
                <div class="user-table">
                    <div class="user-table-header">
                        <h4>Usuarios Registrados</h4>
                    </div>
                    <div class="user-table-body">
                        <table class="table table-bordered table-stipred">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apelido</th>
                                    <th>Fecha de Creación</th>
                                    <th>Actualizar</th>
                                    <th>Borrar</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($users as $id => $user): ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $user['first-name']?></td>
                                    <td><?php echo $user['last-name']?></td>
                                    <td><?php echo $user['creation-date']?></td>
                                    <td><a href="./editUser.php?id=<?php echo $id ?>" class="update-user btn btn-primary btn-sm">Editar</a></td>
                                    <td><a href="javascript:deleteUser(<?php echo $id ?>)" class="delete-user btn btn-danger btn-sm">Eliminar</a></td>

                                </tr>
                                <?php $i++ ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal new user -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-new-user">
            Agregar Nuevo Usuario
        </button>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
    </script>
    <script src="./delete.js"></script>
</body>

</html>