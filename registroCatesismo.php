<?php
    require('header.php');

$msg= $_GET['msg'];
if($msg=1){
    
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error en el registro!</strong> Estudiante ya existe
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
   

   <!-- contenedor principal -->
    
    <div class="container">
        <div class="card">
              <div class="card-header">
                FICHA DEL CATEQUIZANDO - Diócesis De San Cristóbal
Parroquia San Juan Bautista De Ureña
Primera Comunión 2017
              </div>
              <div class="card-body">
               <form action="guardarEstudiantecatequista.php" method="post" name="formularioEstudiante" id="formularioEstudiante">
                 <h3>Datos Personales</h3>
                 <p></p>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Nombres</label>
                      <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante" placeholder="Juan Carlos" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Apellidos</label>
                      <input type="Text" class="form-control" id="apellidoEstudiante" name="apellidoEstudiante" placeholder="Patiño" required>
                    </div>
                  </div>
                  
                   <div class="form-row">
                    <div class="form-group col-md-1">
                      <label for="inputEmail4">Edad</label>
                      <input type="number" class="form-control" id="edadEstudiante" name="edadEstudiante" placeholder="25" required>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputPassword4">Nacionalidad</label>
                      <input type="Text" class="form-control" id="nacionalidadEstudiante" name="nacionalidadEstudiante" placeholder="Venezolana" required>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputPassword4">Tipo Documento:</label>
                      <select class="form-control" name="tipoDocumento" id="tipoDocumento" required>
                          <option value="">Tipo Documento</option>
                          <option value="Cedula">Cedula</option>
                          <option value="Pasaporte">Pasaporte</option>
                          <option value="Cedula Extranjeria">Cedula Extrajeria</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputPassword4">N. Documento</label>
                      <input type="number" class="form-control" id="ndocumento" name="ndocumento" placeholder="00000000" required>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputPassword4">Lugar de nacimiento</label>
                      <input type="text" class="form-control" id="lugarNacimiento" name="lugarNacimiento" placeholder="Pedro María Ureña" required>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputPassword4">Estado</label>
                      <input type="text" class="form-control" id="estadoNacimiento" name="estadoNacimiento" placeholder="Táchira" required>
                    </div>
                    
                    
                     <div class="form-group col-md-3">
                      <label for="inputPassword4">Fecha de nacimiento</label>
                      <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                    </div>
                    
                    <div class="form-group col-md-3">
                      <label for="inputPassword4">Fecha de bautizo</label>
                      <input type="date" class="form-control" id="fechaBautizo" name="fechaBautizo" required>
                    </div>
                    
                    <div class="form-group col-md-3">
                      <label for="inputPassword4">Teléfono fijo</label>
                      <input type="tel" class="form-control" id="telefonoFijo" name="telefonoFijo" placeholder="02760000000" required>
                    </div>
                    
                    <div class="form-group col-md-3">
                      <label for="inputPassword4">Teléfono celular</label>
                      <input type="tel" class="form-control" id="telefonoCelular" name="telefonoCelular" placeholder="04100000000" required>
                    </div>
                    
                    <div class="form-group col-md-12">
                      <label for="direccion">Dirección</label>
                     <textarea class="form-control" name="direccionEstudiante" id="direccionEstudiante" maxlength="100"  ></textarea>
                    </div>
                  </div>
                  
                  <h3>Datos Escolares</h3>
                     <p></p>
                    <div class="form-row">
                     
                     <div class="form-group col-md-6">
                      <label for="inputEmail4">Institución Educativa</label>
                      <input type="text" class="form-control" id="institucionEducativa" name="institucionEducativa" placeholder="Unidad Educativa La Prueba" required>
                     </div>
                    
                    <div class="form-group col-md-3">
                      <label for="inputPassword4">Grado de Intrucción</label>
                      <input type="Text" class="form-control" id="gradoInstruccion" name="gradoInstruccion" placeholder="" required>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputPassword4">Sección</label>
                      <input type="Text" class="form-control" id="seccionInstruccion" name="seccionInstruccion" placeholder="" required>
                    </div>
                    
                  </div>
                  
                  <h3>Datos de los padres</h3>
                     <p></p>
                    <div class="form-row">
                     
                     <div class="form-group col-md-6">
                      <label for="inputEmail4">Nombre Madre</label>
                      <input type="text" class="form-control" id="nombreMadre" name="nombreMadre" placeholder="Unidad Educativa La Prueba" required>
                     </div>
                    
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Apellido Madre</label>
                      <input type="Text" class="form-control" id="apellidoMadre" name="apellidoMadre" placeholder="" required>
                    </div>
                    
                     <div class="form-group col-md-6">
                      <label for="inputEmail4">Nombre Padre</label>
                      <input type="text" class="form-control" id="nombrePadre" name="nombrePadre" placeholder="Unidad Educativa La Prueba" required>
                     </div>
                    
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Apellido Padre</label>
                      <input type="Text" class="form-control" id="apellidoPadre" name="apellidoPadre" placeholder="" required>
                    </div>
                    
                    <div class="form-group col-md-3">
                      <label class="checkbox-inline"><input type="checkbox" name="estadoCivil" id="estadoCivil" value="Casados por lo civil"> Casados por lo civil</label>
                      <label class="checkbox-inline"><input type="checkbox" name="estadoCivil" id="estadoCivil" value="Casados por la iglesia"> Casados por la iglesia</label>
                      <label class="checkbox-inline"><input type="checkbox" name="estadoCivil" id="estadoCivil" value="No estan casados"> No estan casados</label>
                    </div>
                    
                  </div>
                  
                  
                  <h3>Datos del catequista</h3>
                     <p></p>
                    <div class="form-row">
                     
                     <div class="form-group col-md-6">
                      <label for="inputEmail4">Nombre</label>
                      <input type="text" class="form-control" id="nombreCatequista" name="nombreCatequista" placeholder="Unidad Educativa La Prueba" required>
                     </div>
                    
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Apellido</label>
                      <input type="Text" class="form-control" id="apellidoCatequista" name="apellidoCatequista" placeholder="" required>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="direccion">Observaciones</label>
                     <textarea class="form-control" name="observacionesRegistro" id="observacionesRegistro" maxlength="100"  ></textarea>
                    </div>
                  </div>
                  
                  
                  
                  
                  <center><button type="submit" class="btn btn-success">Guardar registro</button></center>
                </form>
              </div>
            </div>
    </div>
    <!-- /.fin del contenedor principal -->

  <?php
    require('footer.php');
?>

    