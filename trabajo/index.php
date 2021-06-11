<?php
 $servidor = 'localhost' ;
 $usuario = 'root';
 $clave = '' ;
 $baseDedatos = 'prog3_parcial';
 $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDedatos);




  if (isset ($_POST["nombre"])) {
      $nombre= $_POST["nombre"];
      $codigo_dane= $_POST["codigo_dane"];
      $tipo_degobierno= $_POST["tipo_degobierno"];
      $num_poblacion= $_POST["num_poblacion"];
      $moneda= $_POST["moneda"];
      $num_departamentos= $_POST["num_departamentos"];
      $sector_economico= $_POST["sector_economico"];
      
      $insertardatos= "INSERT INTO paises VALUES ('$nombre','$codigo_dane', '$tipo_degobierno',$num_poblacion, '$moneda',$num_departamentos,'$sector_economico')";
       
      $ejecutarinsertar =mysqli_query ($enlace, $insertardatos) or die("Error en la Consulta SQL: " . $insertardatos);



    }


?>