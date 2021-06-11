
<?php
 $consulta = "SELECT * FROM datos";

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Datos de paises </title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="group">
  <form action="index.php" method="POST">
  <h2><em>Formulario de Registro</em></h2>  
  
     
      <label for="nombre">Nombre <span></em></span></label>
      <input type="text" name="nombre"  id= "nombre" class="form-input" />   
      <br> 
      </br>
      
      <label for="codigo_dane">codigo_dane  <span></em></span></label>
      <input type="text" name="codigo_dane" id= "codigo_dane" class="form-input" />         
      <br> 
      </br>

      <label for="tipo_degobierno ">tipo_degobierno <span><em></em></span></label>
      <input type="text" name="tipo_degobierno"id= "tipo de gobierno" class="form-input" />
      <br> 
      </br>

      <label for="num_poblacion">num_poblacion <span> </span></label>
      <input type="text" name="num_poblacion" id= "num_poblacion" class="form-input" />
      <br> 
      </br>

      <label for="moneda">moneda <span> </span></label>
      <input type="text" name="moneda" id= "tipo de gobierno" class="form-input" />
      <br> 
      </br>

      <label for="num_departamentos"> num_departamentos <span> </span></label>
      <input type="text" name="num_departamentos" id= "num_departamentos" class="form-input" />
      <br> 
      </br>

      <label for="sector_economico">sector_economico <span> </span></label>
      <input type="text" name="sector_economico" id= "sector_economico " class="form-input" />
      <br> 
      </br>

      

    
     <center> <input class="form-btn" name="submit" type="submit" value="guardar" /></center>
    </p>
  </form>
</div>
</body>
</html>

