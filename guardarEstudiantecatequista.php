<?php

include("conexiones/conexionesP.php");
$con=conectar();


///datos del cliente y usuario

$nombreEstudiante = $_POST['nombreEstudiante'];
$apellidoEstudiante = $_POST['apellidoEstudiante'];
$edadEstudiante = $_POST['edadEstudiante'];
$nacionalidadEstudiante = $_POST['nacionalidadEstudiante'];
$tipoDocumento = $_POST['tipoDocumento'];
$ndocumento = $_POST['ndocumento'];
$lugarNacimiento = $_POST['lugarNacimiento'];
$estadoNacimiento = $_POST['estadoNacimiento'];
$fechaNacimiento= $_POST['fechaNacimiento'];
$fechaBautizo = $_POST['fechaBautizo'];
$telefonoFijo = $_POST['telefonoFijo'];
$telefonoCelular = $_POST['telefonoCelular'];
$direccionEstudiante = $_POST['direccionEstudiante'];
$institucionEducativa = $_POST['institucionEducativa'];
$gradoInstruccion = $_POST['gradoInstruccion'];
$seccionInstruccion = $_POST['seccionInstruccion'];
$nombreMadre = $_POST['nombreMadre'];
$apellidoMadre = $_POST['apellidoMadre'];
$nombrePadre = $_POST['nombrePadre'];
$apellidoPadre = $_POST['apellidoPadre'];
$estadoCivil = $_POST['estadoCivil'];
$nombreCatequista = $_POST['nombreCatequista'];
$apellidoCatequista = $_POST['apellidoCatequista'];
$observacionesRegistro = $_POST['observacionesRegistro'];



$chekUsuario = "SELECT * from estudiantes_catequesis where ndocumento_estudiante='$ndocumento'";
$resultChekusuario = mysql_query ( $chekUsuario, $con ) or die ( mysql_error () );

$usuarioExiste = mysql_num_rows ( $resultChekusuario );

if($usuarioExiste>0){
    
    echo "<script language='Javascript'> window.location='registroCatesismo.php?msg=1;
                </script>";
}
else{
    
    //insetamos el usuario
    $queryUsuario = "INSERT INTO estudiantes_catequesis (nombres_estudiantes, 	apellidos_estudiantes, edad_estudiante, nacionalidad_estudiante, tipo_documento, ndocumento_estudiante, lugar_nacimiento, estado_nacimiento, fecha_nacimiento, fecha_bautizo, telefono_fijo, 	telefono_celular, direccion_estudiante, institucion_educativa, grado_instruccion, seccion_instruccion, 	nombres_madre, 	apellidos_madre, nombres_padre, apellidos_padre, 	estado_civil, nombre_catequista, apellido_catequista, observaciones) VALUES('$nombreEstudiante','$apellidoEstudiante','$edadEstudiante', '$nacionalidadEstudiante', '$tipoDocumento', '$ndocumento', '$lugarNacimiento','$estadoNacimiento', '$fechaNacimiento', '$fechaBautizo', '$telefonoFijo', '$telefonoCelular', '$direccionEstudiante', '$institucionEducativa', '$gradoInstruccion', '$seccionInstruccion', '$nombreMadre', '$apellidoMadre', '$nombrePadre', '$apellidoPadre', '$estadoCivil', '$nombreCatequista', '$apellidoCatequista', '$observacionesRegistro')";
    mysql_query($queryUsuario,$con) or die(mysql_error());
    
    echo "<script language='Javascript'> window.location='registroSatisfactorio.php' </script>";
    
    
    
}

?>