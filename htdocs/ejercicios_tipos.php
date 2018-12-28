<?php 
    include("sesion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejercicios_tipos.css">    
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="shortcut icon" href="../material/logos e iconos/user.png">
    <title>Tipos de Ejercicios | Musa Inspiradora</title>
</head>
<body>
    <img class="fondo-img" src="../MATERIAL/fondos/hoja-fondo.jpg" alt="">
    <div class="container">
        <header>
            <a href="index.php"><img src="../MATERIAL/logos e iconos/logomusa.png" class="musa" alt="Musa Inspiradora"></a>
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
                    <li class="nav-item"><a "user" href="http://www.google.com"><img class="user" src="../MATERIAL/logos e iconos/user.png" alt="Ingresar"/></a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section id="ejercicios" class="tipos">
                <div class="tipos-ejer">
                    <img src="../material/hand/opcion1.png" alt="Cadaver Exquisito"><a class="ejercicio" href="#">Cadaver Exquisito</a>
                    <div class="ejer-resumen">
                        <p>Este es un antiguo juego, originariamente pensado para ser jugado de manera grupal, cuya idea es
                        sacar a la luz cosas inconscientes a partir de la escritura, escribiendo lo primero que se nos 
                        viene a la cabeza. Si lo jugás en grupo, la idea es que el primer jugador escriba una oración,
                        el siguiente la continue, y así sucesivamente. Siempre con lo primero que le venga a la mente,
                        sin pensar demasiado. Recuerda que ante todo, esto es un juego.</p>
                        <p>Si estás solo frente a tu computadora, no te preocupes, en <b>Musa Inspiradora</b> lo pensamos
                        todo para que no tengas excusas y empieces a crear. Responde cuantas oraciones quieras, y luego 
                        clickea en 'Leer Resultado' para observar qué texto se formó y guárdalo si te gusta.</p>
                        <button id="empezar1" class="actividad">Empezar ahora</button>
                        <div id="mostrar1" class="empezar click" class="formulario">

                        <p><?php

                            $aleatorio = rand(1,59);

                            include("conexion.php");
                            $buscar = "SELECT * FROM ejercicio_cadaver
                                        WHERE id_frase = $aleatorio";

                            $ejecutar = mysqli_query(
                                $conexion,
                                $buscar
                            );

                            if($ejecutar === false){
                                echo "Error";
                            } else {
                                $reg = mysqli_fetch_array($ejecutar);
                                echo $reg["frase"];
                            }

                            ?></p>
                        <form action="ejercicioCadaver.php" method="post">




                            <input type="hidden" name="hidden" value="<?php echo $reg['frase'];?>">
                            <input type="hidden" name="id" value="<?php
                                echo $_SESSION['id']
                            ?>">
                            <input name="frase_creada" class="actividad-texto" type="text" placeholder="Escribe aquí" required>
                            <input class="siguiente" type="submit" value="Siguiente">
                            <!-- La idea es que esto genere un texto con todo lo que se ingresó, de ser posible con
                            conectores copados -quizá aleatorios- y se vea como texto final y de la opción de 
                            guardarlo o no en la pc o en el usuario. -->
                        </form> <!-- Cierra formulario cadaver -->
                    </div> 
                </div> <!-- Cierra Cadaver Exquisito --> 
                <div class="tipos-ejer der">
                    <img src="../material/hand/opcion2.png" alt="preguntas"><a class="ejercicio-dos" href="#">Preguntas</a>  
                    <div class="ejer-resumen der">
                        <p>"Preguntas y respuestas" es un ejercicio no tiene más trampa que la que su nombre indica. Observa a tu alrededor y anota 
                        la primer pregunta que se te venga a la cabeza, y responde con lo primero que se te venga a la 
                        mente también. Pregunta, luego responde, y repite este proceso cuánto quieras. Para observar el resultado 
                        final, haz click en "Leer Resultado".</p>
                        <button id="empezar2" class="actividad">Empezar ahora</button>
                        <div id="mostrar2" class="click" class="formulario">
                            <form action="#">
                                <textarea class="actividad-texto" placeholder="Pregúntate; ¿quién es esa persona? ¿cómo sucedió aquello? ¿De qué hablan esas personas? ¿Cómo llegó eso, allí?, etc." required></textarea>
                                <textarea class="actividad-texto" placeholder="Responde lo primero que se te ocurra, por más absurdo que parezca." required></textarea>
                                <input class="siguiente" type="submit" value="Siguiente Pregunta">
                                <input class="button" type="button" value="Leer Resultado">
                            </form>
                        </div><!-- Cierra formulario preguntas-->
                    </div>
                </div> <!-- Cierra Preguntas-->
                <div class="tipos-ejer">
                    <img src="../material/hand/opcion1.png" alt="Anagrama"><a class="ejercicio" href="#">Anagrama</a>
                    <div class="ejer-resumen">
                        <p>Para llevar a cabo este ejercicio debes pensar una palabra, nombre, apellido, lo que desees, es
                            indistinto. Al escribirla, utiliza sus letras para crear nuevas palabras. Una vez que tengas tu lista de 
                            palabras, escribe una oración que la incluya (las oraciones no tienen que estar relacionadas entre sí, de nuevo,
                            escribe lo primero que te venga a la cabeza).</p>
                        <button id="empezar3" class="actividad">Empezar ahora</button>
                        <form id="mostrar3" class="empezar click" action="#">
                            Escríbela Aquí: <input class="actividad-texto" type="text" placeholder="Recuerda, puede ser cualquier palabra" required>
                            <p>Ahora desglosa sus iniciales, y por cada letra, forma una nueva palabra a partir de ellas:</p>
                            <input type="text" class="actividad-texto peque" placeholder="Primer Letra/Palabra">
                            <input type="text" class="actividad-texto peque" placeholder="Segunda Letra/Palabra">
                            <input type="text" class="actividad-texto peque" placeholder="Tercera Letra/Palabra">
                            <input type="text" class="actividad-texto peque" placeholder="Cuarta Letra/Palabra">
                            <input class="siguiente" type="submit" value="Siguiente">
                            <input class="button" type="button" value="Leer Resultado">
                            <!-- La idea es que el programa le pida una detrás de otra las nuevas palabras, y que
                            cuando el usuario de click en siguiente, aparezcan las nuevas palabras y se le de el 
                            nuevo paso a seguir.-->
                        </form></p> <!-- Cierra formulario Anagrama -->
                    </div>
                </div> <!-- Cierra Anagrama-->
            </section> <!-- Cierra Section Tipos de Ejercicios -->
            <!-- <div class="division">
                <img class="division-linea" src="../MATERIAL/hand/division.png" alt="decoracion">
            </div> -->
        </main>
        <footer>
            <ul class="redes">
                <li><a href="#"><img src="../MATERIAL/social media/fb.png" alt="facebook"></a></li>
                <li><a href="#"><img src="../MATERIAL/social media/i.png" alt="instagram"></a></li>
                <li><a href="#"><img src="../MATERIAL/social media/p.png" alt="pinterest"></a></li>
                <li><a href="#"><img src="../MATERIAL/social media/wp.png" alt="whatsapp"></a></li>
            </ul>
            <!-- <a href="http://www.freepik.com">Designed by starline / Freepik</a> -->
        </footer>
    </div> <!-- Cierra container -->

    <script>
        empezar1.addEventListener(
            "click",
            function (){
                mostrar1.classList.toggle("mostrar");
            }
        )
        empezar2.addEventListener(
            "click",
            function (){
                mostrar2.classList.toggle("mostrar");
            }
        )
        empezar3.addEventListener(
            "click",
            function (){
                mostrar3.classList.toggle("mostrar");
            }
        )
    </script>
</body>
</html>