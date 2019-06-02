<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inicia sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="css/estilos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <form class="form-signin" action="config/loguear.php" method="POST">
        <div class="text-center mb-4">
            <!-- <img class="mb-4" src="images/logo.jpg"> -->
            <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
        </div>

        <div class="form-label-group">
            <input type="text" class="form-control" id="username" name="Usuario" placeholder="Usuario">
            <label for="username">Usuario</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" name="Password" placeholder="Password">
            <label for="password">Password</label>
        </div>
        <p>Sino tienes cuenta registrate <a href="register.php">aquí</a>.</p>
        <div class="text-center mb-4">
            <button class="btn btn-success" type="submit">Ingresar</button>
        </div>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2019</p>
    </form>
</body>

</html>