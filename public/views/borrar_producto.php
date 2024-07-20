<?php
    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto");

    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto");

    // Verificar si se recibió un parámetro 'id_producto' por GET
    if (isset($_GET['id_producto'])) {
        $id_producto = $_GET['id_producto'];
    
        // Sentencia SQL para eliminar el producto
        $query = "DELETE FROM producto WHERE id_producto = $id_producto";
    
        // Ejecutar la consulta
        if (mysqli_query($conexion, $query)) {
            echo "Producto eliminado correctamente.";
        } else {
            echo "Error al eliminar el producto: " . mysqli_error($conexion);
        }
    }

    mysqli_close($conexion);
?>