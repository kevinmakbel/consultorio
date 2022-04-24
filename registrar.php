<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $apellido = trim($_POST['apellido']);
		$estudio = trim($_POST['estudio']);
	    $obra_social = trim($_POST['obra_social']);
		$plan = trim($_POST['plan']);
	    $DNI = trim($_POST['DNI']);
		$telefono = trim($_POST['telefono']);
	    $hora = trim($_POST['Hora']);
	    $fecha = trim($_POST['fecha']);
	    $consulta = "INSERT INTO `paciente`(Nombre,Apellido,Estudio,Obra_Social,Plan,Telefono,DNI,Fecha_de_turno,Hora_Del_Turno)  VALUES ('$nombre','$apellido','$estudio','$obra_social','$plan','$DNI','$telefono','$fecha','$hora')";

	    $resultado = mysqli_query($conex,$consulta);
		
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Turno agendado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor completa los campos!</h3>
           <?php
    }
}

?>
<script >
	if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}
</script>