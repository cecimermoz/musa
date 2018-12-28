<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index_mediaq.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="shortcut icon" href="../material/logos e iconos/user.png">
    <title>Musa Inspiradora</title>
</head>
<body>
    <div class="container">
        <div class="cabecera">
            <img class="papiro" src="../material/fondos/main.png" alt="">
            <header>
                <div class="barra-nav">
                    <a href="index.php">}<img src="../MATERIAL/logos e iconos/logomusa.png" class="musa" alt="Musa Inspiradora"></a>
                    <nav class="nav-menu">
                        <ul>
                            <li class="nav-item desplegable"><a href="#">Impulso Creativo</a>
                                <ul class="submenu">
                                    <li><a class="submenu-item" href="ejercicios.html">Ejercicios</a></li>
                                    <li><a class="submenu-item" href="#">Imágenes Disparadoras</a></li>
                                    <li><a class="submenu-item" href="#">Generador de Personaje</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item desplegable"><a href="#">Herramientas del Escritor</a>
                                <ul class="submenu">
                                    <li><a href="#" class="submenu-item">Diccionario</a></li>
                                    <li><a href="#" class="submenu-item">Sinónimo y Antónimos</a></li>
                                    <li><a href="#" class="submenu-item">Nombres de personajes</a></li>
                                    <li><a href="#" class="submenu-item">Páginas amigas</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="nav-item desplegable"><a href="#">Organizador de Ideas</a>
                                <ul class="submenu">
                                    <li><a href="#" class="submenu-item">Infogramas</a></li>
                                    <li><a href="#" class="submenu-item">Storyplaner</a></li>
                                    <li><a href="#" class="submenu-item">Genealogía de Personaje</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item desplegable"><a href="ayuda.php">Cómo ayudarte</a></li>
                            <li class="nav-item"><a "user" href="http://www.google.com" alt="ingresar"><img class="user" src="../MATERIAL/logos e iconos/user.png" alt="Ingresar"/></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="titulo">
                    <div class="c-izq">
                        <img src="../material/hand/corch-izq.png" alt="decoracion">
                    </div>
                    <ul class="titulo-aparece">
                            <li class="titulo-principal">Musa inspiradora</li>
                            <li class="titulo-secundario">te ayuda cuando tu musa descansa</li>
                    </ul>
                    <div class="c-der">
                        <img src="../material/hand/corch-der.png" alt="decoracion">
                    </div>
                </div>
            </header>
        </div><!-- Cierra cabecera -->
        <div class="cuerpo">
            <main>
                <section class="usuario">        
                    <?php
                        // Levanto la frase que tipeó el usuario
                        $nombre = $_POST['nombre'];
                        $apellido = $_POST['apellido'];
                        $nick = $_POST['nick'];
                        $mail = $_POST['mail'];
                        $clave = md5($_POST['clave']);

                        // Me conecto a la bd para incluirla
                        include("conexion.php");
                        $insertar = "INSERT INTO `usuarios`
                                    VALUES ( 
                                        NULL, '$clave', '$nombre', '$apellido', '$nick', '$mail')";

                        $ejecutar = mysqli_query(
                            $conexion,
                            $insertar
                        );

                        if($ejecutar === true){
                            header("location:index.php");
                        } else {
                            echo "<h4>Falló el registro. Mandar mail a ...</h4>";
                        }
                        ?>
                        
                    <div class="division">
                        <img class="division-linea" src="../MATERIAL/hand/division.png" alt="">
                    </div>  <!-- CIERRA principal-->
                </section>
            </main>
        </div> <!-- Cierra cuerpo -->
        <div class="pie">
            <footer>
                <ul class="redes">
                    <li><a href="#"><img class="redes-img" src="../MATERIAL/social media/fb.png" alt="facebook"></a></li>
                    <li><a href="#"><img class="redes-img" src="../MATERIAL/social media/i.png" alt="instagram"></a></li>
                    <li><a href="#"><img class="redes-img" src="../MATERIAL/social media/p.png" alt="pinterest"></a></li>
                    <li><a href="#"><img class="redes-img" src="../MATERIAL/social media/wp.png" alt="whatsapp"></a></li>
                </ul>
                <!-- <a href="http://www.freepik.com">Designed by starline / Freepik</a> -->
            </footer>
        </div><!-- Cierra pie -->
    </div> <!-- Cierra container -->

</body>
</html>