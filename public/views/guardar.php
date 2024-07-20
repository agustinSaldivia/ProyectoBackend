<?php
    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id_producto = $_POST['id_producto'];
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
        
            if (!empty($imagen_nombre)) {
                $imagen_base64 = base64_encode(file_get_contents($imagen_temporal));
                $imagen_base64 = 'data:' . $imagen_tipo . ';base64,' . $imagen_base64;
                
                $query = "UPDATE producto SET nombre_producto = '$nombre_producto', color_producto = '$color_producto', descripcion_producto = '$descripcion_producto', precio_producto = $precio_producto, stock_producto = $stock_producto, seccion_producto = '$seccion_producto', imagen_producto = '$imagen_base64' WHERE id_producto = $id_producto";
            } else {
                $query = "UPDATE producto SET nombre_producto = '$nombre_producto', color_producto = '$color_producto', descripcion_producto = '$descripcion_producto', precio_producto = $precio_producto, stock_producto = $stock_producto, seccion_producto = '$seccion_producto' WHERE id_producto = $id_producto";
            }
                } 

                $resultado = mysqli_query($conexion, $query); {                      
                    if ($resultado) {
                        echo "Producto actualizado correctamente.";
                    } else {
                        echo "Error al actualizar el producto: " . mysqli_error($conexion);
                }
            }


    
    mysqli_close($conexion);
?>



