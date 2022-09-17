<?php
  $conn = mysqli_connect("sql112.epizy.com", "epiz_32615811","AS7E6JtYW7Db5Oh", "epiz_32615811_yarashop");
  if(!isset($conn))
  {
    die("Base de Datos no encontrada");
  }

  $sql2="SELECT * FROM usuario";
  $ejecutar2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
  $ver2=mysqli_fetch_row($ejecutar2);
  if($ejecutar2)
  {
    echo "Usuario N°: ".$ver2[0]."<br>";
    echo "Nombre: ".$ver2[1]."<br>";
    echo "Correo: ".$ver2[2]."<br>";
  }

?>