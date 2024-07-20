<?php

    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre_producto = $_POST['nombre_producto'];
            $color_producto = $_POST['color_producto'];
            $descripcion_producto = $_POST['descripcion_producto'];
            $precio_producto = $_POST['precio_producto'];
            $stock_producto = $_POST['stock_producto'];
            $seccion_producto = $_POST['seccion_producto'];

            $imagen_nombre = $_FILES['imagen_producto']['name']; 
            $imagen_temporal = $_FILES['imagen_producto']['tmp_name'];
            $imagen_tipo = $_FILES['imagen_producto']['type']; 
            $imagen_tamano = $_FILES['imagen_producto']['size']; 

            $imagen_base64 = base64_encode(file_get_contents($imagen_temporal));
            $imagen_base64 = 'data:' . $imagen_tipo . ';base64,' . $imagen_base64;

            $query = "INSERT INTO producto (nombre_producto, color_producto, descripcion_producto, precio_producto, stock_producto, seccion_producto, imagen_producto) 
                    VALUES ('$nombre_producto', '$color_producto', '$descripcion_producto', $precio_producto, $stock_producto, '$seccion_producto', '$imagen_base64')";

            $resultado = mysqli_query($conexion, $query);

            if ($resultado) {
                echo "Producto agregado correctamente.";
            } else {
                echo "Error al agregar el producto: " . mysqli_error($conexion);
            }
        }

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Alta</title>
    <link rel="stylesheet" href="public/css-views/alta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <section class="container-alta">
        <h1 class="h1-alta">Edición de Producto</h1>
        <form method="post" action="nuevo.php" enctype="multipart/form-data">
            <input type="hidden" name="id_producto">
            <div class="div-alta">
                <label for="nombre">Nombre del Producto:</label>
                <input type="text" name="nombre_producto" class="input-alta" required>
            </div>
            <div class="div-alta">
                <label for="colores">Colores del Producto (separar con " / "):</label>
                <input type="text" name="color_producto" class="input-alta" required>
            </div>
            <div class="div-alta">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion_producto" class="input-alta" required> </textarea>
            </div>
            <div class="div-alta">
                <label for="precio">Precio $ars:</label>
                <input type="number" name="precio_producto" class="input-alta" required>
            </div>
            <div class="div-alta">
                <label for="stock">Cantidad en Stock:</label>
                <input type="number" name="stock_producto"  class="input-alta" required>
            </div>
            <div class="div-alta">
                <h5 class="importante-h5">¡Importante! Las secciones son Spinning Y Fly Fishing! Escribirlos tal cual estan escritos aca, con las primeras letras mayusculas, de lo contrario el codigo podria no funcionar!.</h5>
                <label for="seccion">A qué sección pertenece?
                </label>
                <input type="text" name="seccion_producto" class="input-alta" required>
            </div>
            <div class="div-alta">
                <label for="imagen">Imagen del Producto:</label>
                <input type="file" name="imagen_producto" accept="image/*" required>
            </div>
            <div class="div-alta">
                <h5 class="importante-h5">¡Importante! Si el producto o compra tiene un valor superior a $50.000 y es dentro del país, el envío es Gratis!</h5>
                <div class="envio-gratis">
                    <label> ¿Envío Gratis? </label>
                    <input type="checkbox" class="envio" name="envioGratis">
                </div>
            </div>
            <div class="div-alta button-alta">
                <button class="btn-alta" type="submit">Guardar Cambios</button>
            </div>
        </form>
    </section>
</body>
</html>