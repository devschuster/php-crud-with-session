<?php session_start() ?>
<?php $id = filter_input(INPUT_GET, 'id') ?>
<?php $user = $_SESSION['users'][$id] ?>

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
            <h1>Editar Usuario.</h1>
        </header>
        <!-- Edit user table -->
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
                                    <th>Nombre</th>
                                    <th>Apelido</th>
                                    <th>Fecha de Creación</th>
                                </tr>
                            </thead>

                            <tbody>
                                <form action="./updateUser.php" method="POST">
                                <tr>
                                    <td>
                                         <label for="id">
                                            <input type="hidden" class="id form-control" id="id" name="id" value="<?php echo $id?>">
                                        </label>
                                        <label for="first-name">
                                            <input type="text" class="first-name form-control" id="first-name" name="user[first-name]" value="<?php echo $user['first-name']?>">
                                        </label>
                                    </td>
                                    <td>
                                        <label for="last-name">
                                            <input type="text" class="last-name form-control" id="last-name" name="user[last-name]" value="<?php echo $user['last-name']?>">
                                        </label>
                                    </td>
                                    <td>
                                        <label for="creation-date">
                                            <input type="text" class="creation-date form-control" id="creation-date" name="user[creation-date]" value="<?php echo $user['creation-date']?>" readonly>
                                        </label>
                                    </td>
                                    <td><button type="submit" class="update-user btn btn-primary btn-sm">Actualizar</button></td>
                                </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- link back to home -->
        <a href="./" class="btn btn-primary"  >
            Volver al Inicio
        </a>

    </div>
</body>
</html>