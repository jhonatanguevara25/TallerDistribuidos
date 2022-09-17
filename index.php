<?php
  $conn = mysqli_connect("sql112.epizy.com", "epiz_32615811","AS7E6JtYW7Db5Oh", "epiz_32615811_yarashop");
  if(!isset($conn))
  {
    die("Base de Datos no encontrada");
  }

  $sql2="SELECT * FROM usuario";
  $ejecutar2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
  $num_resultados = mysqli_num_rows($ejecutar2);

  echo "Lista de Usuarios Registrados: <br><br>";

  //$ver2=mysqli_fetch_row($ejecutar2);

  for ($i=0; $i < $num_resultados; $i++){
    $row = mysqli_fetch_array($ejecutar2);   
    echo "Usuario N°: ".$row[0]."<br>";
    echo "Nombre: ".$row[1]."<br>";
    echo "Correo: ".$row[2]."<br><br><br>";
  }

?>