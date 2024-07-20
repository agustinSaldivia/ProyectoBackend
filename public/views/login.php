<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_valido = "admin3010";
    $contraseña_valida = "admin0404";
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['password'];
    $alerta = "¡Datos inválidos. Por favor, verifica tu usuario y contraseña!";
    if ($usuario == $usuario_valido && $contraseña == $contraseña_valida) {
        header('Location: tabla.php');
        exit;
    } else {
        echo '<script>alert("Usuario o clave incorrectos. Por favor, intenta nuevamente.");</script>';
        header('location: login.php');
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="public/css-views/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <main id="container-login">
        <div class="content-login">
            <div class="login">
                <form class="form-login" action="login.php" method="post">
                    <label for="usuario">Usuario</label>
                    <input class="usuario-login" type="text" name="usuario" placeholder="introduzca su Nombre" required  autocomplete="off">                
                    <label for="password">Contraseña</label>
                    <input class="usuario-login" type="password" placeholder="introduzca su Contraseña" name="password" required>                
                    <button class="btn-login" type="submit" title="Ingresar" name="Ingresar">Login</button>
                </form>
            </div>
            <div class="login-der">
                <img src="public/Imagenes!/perfil.jpg" class="logo-empresa">
                <div class="titulo-login">
                    <h2>Patagonia Pesca</h2>
                </div>
                <hr>
                <div class="pie-form">
                    <h4>Tu Tienda de Pesca!</h4>
                    <hr>
                </div>
            </div>
        </div>
    </main>
</body>
</html>