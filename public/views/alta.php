<?php
    
    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto");


    if (isset($_GET['id_producto'])) {
        $id_producto = $_GET['id_producto'];

        $query = "SELECT * FROM producto WHERE id_producto = $id_producto";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            $filas = mysqli_fetch_assoc($resultado);

        } else {
            echo "Error al obtener el producto: " . mysqli_error($conexion);
            exit; 
        }
    } else {
        echo "No se recibió un parámetro 'id_producto' para editar.";
        exit; 
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
        <form method="post" action="guardar.php" enctype="multipart/form-data">
            <input type="hidden" name="id_producto" value="<?php echo $filas['id_producto']; ?>">
            <div class="div-alta">
                <label for="nombre">Nombre del Producto:</label>
                <input type="text" name="nombre_producto" value="<?php echo $filas['nombre_producto']; ?>" class="input-alta" required>
            </div>
            <div class="div-alta">
                <label for="colores">Colores del Producto (separar con " / "):</label>
                <input type="text" name="color_producto" value="<?php echo $filas['color_producto']; ?>" class="input-alta" required>
            </div>
            <div class="div-alta">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion_producto" class="input-alta" required><?php echo $filas['descripcion_producto']; ?></textarea>
            </div>
            <div class="div-alta">
                <label for="precio">Precio $ars:</label>
                <input type="number" name="precio_producto" value="<?php echo $filas['precio_producto']; ?>" class="input-alta" required>
            </div>
            <div class="div-alta">
                <label for="stock">Cantidad en Stock:</label>
                <input type="number" name="stock_producto" value="<?php echo $filas['stock_producto']; ?>" class="input-alta" required>
            </div>
            <div class="div-alta">
                <h5 class="importante-h5">¡Importante! Las secciones son Spinning Y Fly Fishing! Escribirlos tal cual estan escritos aca con las primeras letras mayusculas, de lo contrario el codigo podria no funcionar!.</h5>
                <label for="seccion">A qué sección pertenece?</label>
                <input type="text" name="seccion_producto" value="<?php echo $filas['seccion_producto']; ?>" class="input-alta" required>
            </div>
            <div class="div-alta">
                <label for="imagen">Imagen del Producto:</label>
                <input type="file" name="imagen_producto" accept="image/*">
            </div>
            <div class="div-alta">
                <h4 class="importante-h5">¡Importante! Si el producto o compra tiene un valor superior a $50.000 y es dentro del país, el envío es Gratis!</h4>
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


