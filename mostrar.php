<?php

   session_start();
   session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/sociales.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/header_responsive.js"></script>
    <title>Juegos de Persona</title>
</head>
<body id="fondo">

<header>
        
        <nav id='cssmenu'>
        <div class="logo"><a href="index.html">Beneath the Persona</a></div>
        <div id="head-mobile"></div>
        <div class="button"></div>
        <ul>
        <li class='active'><a href='index.html'>Inicio</a></li>
        <li><a href='Nosotros.html'>Sobre nosotros</a></li>
        <li><a href='#'>Contacto</a></li>
        <li><a href='login.php'>Ingresar</a></li>
        <li><a href='registrate.php'>Registrate</a></li>
        </ul>
        </nav>
    </header>

    <center>
        
        <table>
            <div style="background: #d3d3d3">
                <h1>INDICE DE JUEGOS</h1>
            </div>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>JUEGO</th>
                    <th>ESTRENO (JP)</th>
                    <th>ESTRENO (US)</th>
                    <th>GÉNERO</th>
                    <th>AÑO</th>
                    <th>CLASIFICACIÓN</th>
                    <th>IMAGENES</th>
                </tr>
            </thead>
            <!--------------------TITULOS-------------------->
            <tbody>
                <?php
                    include ("open.php");
                    $consulta = "SELECT * FROM persona_j";
                    $resultado = $conexion->query($consulta);

                    while($row = $resultado->fetch_assoc()){
                ?>
                        <tr>
                            <td>    <?php   echo $row['id'];  ?>  </td>
                            <td>    <?php   echo $row['game'];  ?>  </td>
                            <td>    <?php   echo $row['r-jp'];  ?>  </td>
                            <td>    <?php   echo $row['r-us'];  ?>  </td>
                            <td>    <?php   echo $row['gen'];  ?>  </td>
                            <td>    <?php   echo $row['anio'];  ?>  </td>
                            <td>    <?php   echo $row['clasif'];  ?>  </td>
                            <td>   <img height="100px" src="data:image/jpg;base64,<?php   echo base64_encode($row['Imagen']);  ?>">   </td>
                        </tr>

                    <?php
                    }
                    ?>
                
            </tbody>
        </table>
    </center>
    <footer>
        <aside id="foot_izq">
            <div id="redes">
                <h3>Siguenos en:</h3>
                <ul id="sociales">
                    <li><a href="https://wwww.facebook"><img src="./img/fac.png" width="25px" height="25px"></a></li>
                    <li><a href="https://wwww.twitter"><img src="./img/twi.png" width="25px" height="25px"></a></li>
                    <li><a href="https://wwww.youtube"><img src="./img/you.png" width="25px" height="25px" alt=""></a></li>
                    <li><a href="https://wwww.linkedin"><img src="./img/lin.png" width="25px" height="25px" alt=""></a></li>
                    <li><a href="https://wwww.instagram"><img src="./img/ins.png" width="25px" height="25px" alt=""></a></li>
                </ul>
            </div>
        </aside>
        <div id="qr">
            <img src="" > 
        </div>
        <aside id="foot_der">
        <ul>
            <strong><h3>Contactanos</h3></strong>
            <li>Contacto: <br> Edgar Alain Acosta / alainacosta64@gmail.com</li>
            <li>Repositorio: <br>https://github.com/AlainAcosta03</li><br>
            <li>UACJ - IADA</li>
        </ul>
        </aside>
    </footer>
</body>
</html>