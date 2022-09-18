<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="CSS/home.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Inicio</title>
    <link rel="icon" href="imagenes/logoD3.png" />
  </head>
  <body>
    <header>
      <div class="container-nav">
        <a href="#"
          ><img class="logo" src="imagenes/logoD1.png" alt="Logo"
        /></a>
        <nav>
          <ul>
            <li><a href="#">INICIO</a></li>
            <li><a href="bd.php">BASE DE DATOS</a></li>
          </ul>
        </nav>
      </div>
    </header>


<?php
  $conn = mysqli_connect("sql112.epizy.com", "epiz_32615811","AS7E6JtYW7Db5Oh", "epiz_32615811_yarashop");
  if(!isset($conn))
  {
    die("Base de Datos no encontrada");
  }

  $sql2="SELECT * FROM usuario";
  $ejecutar2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
  $num_resultados = mysqli_num_rows($ejecutar2);

  echo "<br><br><br><br><br><br>Lista de Usuarios Registrados: <br><br>";

  //$ver2=mysqli_fetch_row($ejecutar2);

  for ($i=0; $i < $num_resultados; $i++){
    $row = mysqli_fetch_array($ejecutar2);   
    echo "Usuario N°: ".$row[0]."<br>";
    echo "Nombre: ".$row[1]."<br>";
    echo "Correo: ".$row[2]."<br><br><br>";
  }

?>


<footer>
      <div class="foot1">
        <div class="row" style="width: 85%; margin: auto">
          <div class="col-sm-5">
            <img src="imagenes/logoD1.png" alt="Logo" class="logoFoot" />
            <p class="textFoot">
              YARASHOP tiene como objetivo ser la plataforma que agrupa todas
              las bodegas del Perú! Disfruta de este viaje con nosotros!!
            </p>
          </div>
          <div class="col-sm-2" weight="20px"></div>
          <div class="col-sm-5">
            <p class="titFoot">Horas de Trabajo</p>
            <p class="textFoot">
              Nuestro soporte está disponible todos los días de la semana
            </p>

            <p class="textFoot">De Lunes a Lunes</p>
          </div>
        </div>
      </div>

      <div class="foot2">
        <br />
        <ul>
          <li><a href="/">Términos y Condiciones</a></li>
          <li><a href="/">Privacidad</a></li>
          <li><a href="/">Contáctanos</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>
