<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Productos</title>
    <link rel="stylesheet" href="public/css-views/tabla.css">
    <script src="https://kit.fontawesome.com/5d53f0bc1c.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="table-container">
        <div class="table-title">Productos de la Tienda</div>
        <a href="nuevo.php">
            <button class="add-btn">Agregar Nuevo Producto</button>
        </a>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Color</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Seccion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto");

                    $query = "SELECT * FROM producto";
                    $resultado = mysqli_query($conexion, $query); 

                    while($filas = mysqli_fetch_assoc($resultado)){
                        echo '
                        <td>'.$filas["nombre_producto"].'</td>
                        <td>'.$filas["color_producto"].'</td>
                        <td>'.$filas["descripcion_producto"].'</td>
                        <td>'.$filas["precio_producto"].'</td>
                        <td>'.$filas["stock_producto"].'</td>
                        <td>'.$filas["seccion_producto"].'</td>
                        <td>
                            <a href="alta.php?id_producto='.$filas["id_producto"].'">
                                <span class="action-btn edit-btn"><i class="fas fa-pencil-alt"></i></span>
                            </a>
                            <a href="borrar_producto.php?id_producto='.$filas["id_producto"].'">
                                <span class="action-btn delete-btn"><i class="fas fa-times"></i></span>
                            </a>
                        </td>
                        </tr>
                        ';
                    }


                    mysqli_close($conexion);
                ?>
            </tbody>   
        </table>
    </div>
</body>
</html>