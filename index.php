<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tienda online especializada en productos de la Patagonia. Encuentra todos los equipos de pesca, Reeles, cañas, señuelos entre otras cosas!.">
    <meta name="keywords" content="Patagonia, tienda online, tienda Patagonica, Salidas de Pesca.">
    <meta name="author" content="Patagonia Pesca">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Tienda de pesca en la Patagonia">
    <meta property="og:description" content="Descubre productos únicos para la pesca en la Patagonia en nuestra tienda online. cañas, señuelos, equipos y más.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="#">
    <meta property="og:site_name" content="Patagonia Pesca">
    <script src="https://kit.fontawesome.com/9293a98292.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5d53f0bc1c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Top - Bar -->
    <div class="container-topbar">
        <div class="contac-topbar">
            <div class="contac-ico">
                <small class="small-ico"> <i class="fa fa-phone-alt"></i>+54 9 2966499442</small>
                <small class="small-ico separador">|</small>
                <small class="small-ico"> <i class="fa fa-envelope"></i>agus.importante09@gmail.com</small>
            </div>
        </div>
        <div class="div-redes">
            <div class="icon-redes">
                <a class="icon-der" href="#">
                <i class="fab fa-facebook-f"></i>
                </a>
                <a class="icon-der" href="https://www.instagram.com/agustinnn0909/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="header-menu container-header">
            <br>
            <input type="checkbox" id="menu-header"/>
            <label for="menu-header">
                <img src="public/imagenes/menu.png" class="menu-icono" alt=Pesca-Patagonia>
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#INICIO">INICIO</a></li>
                    <li><a href="#PRODUCTOS">PRODUCTOS</a></li>
                    <li><a href="public/views/login.php">PANEL</a></li>
                    <li><a href="#CONTACTO">CONTACTO</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container-header">
            <h1>Patagonia Pesca!</h1>
            <p>Descubre la esencia de la pesca en la Patagonia en nuestro e-commerce especializado. Equipos, accesorios para vivir experiencias únicas en los lagos y ríos más impresionantes de la región. </p>
        </div>
    </header>

    <!-- Introduccion! -->
    
    <section class="container-intro" id="INICIO">
        <div class="content-intro">
            <h2>Patagonia <span> Pesca</span>!</h2>
            <p class="txt-intro">
                Bienvenidos a Patagonia Pesca, tu tienda especializada en  los mejores productos y equipos para la pesca deportiva!, diseñado para satisfacer tanto a pescadores experimentados como a aquellos que recién comienzan su aventura!. <br>
            </p>
            <p class="txt-intro">
                En Patagonia Pesca entendemos que la pesca en la Patagonia es más que una actividad, es una experiencia única rodeada de paisajes impresionantes y aguas cristalinas, Explora nuestra amplia selección de productos y prepárate para vivir la emoción de la pesca deportiva en uno de los destinos más espectaculares del mundo.
            </p>
        </div>
            <div class="especialidades">
                <h2>Nuestras especialidades</h2>
                <div class="div-especialidades">
                    <div class="especialidad">
                        <img src="public/imagenes/señuelo-removebg-preview.png" alt="cafe-#">
                        <h3>Spinning</h3>
                        <p>Es una técnica de pesca que usa señuelos más pesados, que generalmente simulan un pez pequeño, utilizan cañas mas comunes y lineas livianas.</p>
                    </div>
                    <div class="especialidad">
                        <img src="public/imagenes/mosca-removebg-preview.png" alt="cafe-#">
                        <h3>Fly Fishing</h3>
                        <p>Es una forma de pescar donde se utilizan señuelos ligeros llamados "moscas" que imitan insectos. Se lanzan con una caña especial y una línea pesada.</p>
                    </div>
                </div>
            </div>
    </section>

    <!-- Codigo Php -->

<?php

        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto");

        $query_spinning = "SELECT * FROM producto WHERE seccion_producto = 'Spinning'";
        $query_flyfishing = "SELECT * FROM producto WHERE seccion_producto = 'Fly Fishing'";

        $resultado_spinning = mysqli_query($conexion, $query_spinning);
        $resultado_flyfishing = mysqli_query($conexion, $query_flyfishing);

        if (!$resultado_spinning) {
            echo "Error al consultar productos de Spinning: " . mysqli_error($conexion);
            exit;
        }

        if (!$resultado_flyfishing) {
            echo "Error al consultar productos de Fly Fishing: " . mysqli_error($conexion);
            exit;
}

        mysqli_close($conexion);
?>

    <!-- PRODUCTOS -->

    <!-- SPINNING -->

    <section class="container-products" id="PRODUCTOS_SPINNING">
        <h4 class="products-h4">Los Mejores Productos de Spinning</h4>
        <div class="products-list">
            <?php while ($filas = mysqli_fetch_assoc($resultado_spinning)) : ?>
                <div class="products">
                    <img src="<?php echo $filas['imagen_producto']; ?>" alt="<?php echo $filas['nombre_producto']; ?>">
                    <h4><?php echo $filas['nombre_producto']; ?></h4>
                    <p class="price-products">$<?php echo $filas['precio_producto']; ?></p>
                    <a href="#" class="buy-button">Comprar</a>
                    <button class="cart-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            <?php endwhile; ?>
        </div>
    </section>


    <!-- Fly Fishing -->

    <section class="container-products" id="PRODUCTOS_FLYFISHING">
        <h4 class="products-h4">Los Mejores Productos de Fly Fishing</h4>
        <div class="products-list">
            <?php while ($filas = mysqli_fetch_assoc($resultado_flyfishing)) : ?>
                <div class="products">
                    <img src="<?php echo $filas['imagen_producto']; ?>" alt="<?php echo $filas['nombre_producto']; ?>">
                    <h4><?php echo $filas['nombre_producto']; ?></h4>
                    <p class="price-products">$<?php echo $filas['precio_producto']; ?></p>
                    <a href="#" class="buy-button">Comprar</a>
                    <button class="cart-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            <?php endwhile; ?>
        </div>
    </section>


<!-- FOOTER -->

<footer class="footer-container" id="CONTACTO">
    <div class="footer-izq">
        <h4> Patagonia Pesca</h4>  
        <p class="footer-links">
            Somos una pequeña tienda de la Patagonia, la cual busca brindar la mejor experiencia a nuestro clientes, con nuestros productos y atención vamos a hacerte sentir como en tu hogar. 
        </p>
    </div>
    <div class="footer-center" id="contac">
        <h4>Ubicacion y números de contactos</h4>
        <div>
            <i class="fa-solid fa-location-dot"></i>
            <p>Av Libertador #**#</p>
        </div>
        <div>
            <i class="fa-solid fa-phone"></i>
            <p>Llamanos al 2966*******!</p>
        </div>
    </div>
    <div class="footer-der">
        <h4> 
            Seguinos!
        </h4>
        <div class="footer-icons">
                <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.instagram.com/agustinnn0909"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
</footer>
</body>
</html>
