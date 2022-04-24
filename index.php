<!DOCTYPE html>
<html>
<head>
	<title>Registrar Turnos</title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="jquery-ui-1.13.1.custom/jquery-ui.css">
  <script src="jquery-3.6.0.min.js"></script>
  <script src="jquery-ui-1.13.1.custom/jquery-ui.js"></script>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form method="post">
    
		<label>Nombre</label>
		<input type="text" name="nombre" required="" >

    	<label>Apellido</label>
		<input type="text" name="apellido" required="" >

		<label>Estudio</label>
		<input type="text" name="estudio" required="" >

		<label>Obra Social</label>
		<input type="text" name="obra_social" required="" >

		<label>Plan</label>
		<input type="text" name="plan" >

		<label for="guestname" >DNI</label>
		<input type="text" name="DNI" required="" >

		<label  >Telefono/Celular</label>
		<input type="text" name="telefono" required="" >

		<label for="guestname" >Hora del turno</label>
		<select id="hora" name="Hora"> 
      <option>10:30</option>
      <option>10:45</option>
      <option>11:00</option>
      <option>11:15</option>
      <option>11:30</option>
      <option>11:45</option>
      <option>12:00</option>
      <option>12:15</option>
      <option>12:30</option>
      <option>12:45</option>
      <option>13:00</option>
      <option>13:15</option>
      <option>13:30</option>
      <option>13:45</option>
      <option>14:00</option>
      <option>14:15</option>
      <option>14:30</option>
      <option>14:45</option>
      <option>15:00</option>
      <option>15:15</option>
      <option>15:30</option>
      <option>15:45</option>
      <option>16:00</option>
      <option>16:15</option>
      <option>16:30</option>
      <option>16:45</option>
      <option>17:00</option>
      <option>17:15</option>
      <option>17:30</option>
      <option>17:45</option>
      <option>18:00</option>
</select>

		<label for="guestname" >Fecha del turno</label>
		<input type="text" id="calendario" name="fecha" readonly required>
    	<input type="submit" name="register">



      <script>
  $( function() {
    $( "#calendario" ).datepicker({dateFormat: 'yy-mm-dd'});
   
  } );
 
  </script>
    </form>
   
        <?php 
        include("registrar.php");
        include("con_db.php");
        ?>
         <BR>
  <h2>Turnos de hoy</h2>

  <table border="1">
    <tr>
      <td>Nombre</td>
      <td>Apellido</td>
      <td>Estudio</td>
      <td>Obra Social</td>
      <td>Plan</td>
      <td>Telefono</td>
      <td>DNI</td>
      <td>Hora del Turno</td>
    </tr>
<?php

$hoy = date("Y-m-d");
$sql="select * from paciente where Fecha_de_turno between '$hoy' and '$hoy' order by Hora_Del_Turno asc";
$result=mysqli_query($conex,$sql);
while($mostrar=mysqli_fetch_array($result)){
  ?>

    <tr>
      <td><?php echo $mostrar['Nombre']?></td>
      <td><?php echo $mostrar['Apellido']?></td>
      <td><?php echo $mostrar['Estudio']?></td>
      <td><?php echo $mostrar['Obra_Social']?></td>
      <td><?php echo $mostrar['Plan']?></td>
      <td><?php echo $mostrar['Telefono']?></td>
      <td><?php echo $mostrar['DNI']?></td>
      <td><?php echo $mostrar['Hora_Del_Turno']?></td>
    </tr>
    <?php 
}
    ?>
</table>
</body>
</html>