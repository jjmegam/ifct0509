<?php include '_header.php' ?>

<div class="well">login</div>

<div class="row">
      <form action="procesa_datos.php" method="post">
            <div class="col-md-offset-5 col-md-3">
                  <div class="form-login">
                        <br>
                         <label for="Fecha">La fecha de hoy es: <br><input type="text" name="fecha" value=""  /><br><br>
            		<label for="usuario">Escribe tu nombre:     <input type="text" name="nombredecliente" value="Juanjo" placeholder="nombre" /><br>
                        <label for="usuario">Tu fecha de nacimiento:     <input type="text" name="fnacimiento" value=""  /><br>
                         
                        <!-- label for="Direccion">Dirección:     <input type="text" name="Direccion" value=""  /><br>
                                   
                        <label for="usuario">Provincia:     <input type="text" name="Provincia" value=""  /><br>
                        <label for="usuario">Teléfono:     <input type="text" name="Teléfono" value=""  /><br>
                        <label for="usuario">E-mail:     <input type="text" name="E-mail" value=""  /><br>
            		<label for="password">Contraseña:  <input type="text" name="password" value="" /><br>
                        <label for="password">Confirmar contraseña:  <input type="text" name="password2" value="" /><br  -->            
            		<br>
            		<input type="submit" name="submit" value="Enviar" />
                  </div>
            </div>
      </form>
</div>

<div class="row">
      <form action="procesa_datos.php" method="post">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
            <A href="edit.html" >Edit Profile</A>
            <A href="edit.html" >Logout</A>
       <br>


      </div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
    
          <div class="panel panel-info">
            <div class="panel-heading">

                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><h3 class="panel-title">Juan José Merino</h3></td>
                        <td><input type="text"  class="search-query" placeholder="Search"></td>
                      </tr>
                      </tbody>
                      </table>

            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre del cliente:</td>
                        <td><input type="text" name="nombredecliente" value="Juanjo" placeholder="nombre" class="form-control input-sm chat-input" /></td>
                      </tr>
                      <tr>
                        <td>D.N.I.</td>
                        <td><input type="text" name="dni" value="" class="form-control input-sm chat-input" /></td>
                      </tr>
                      <tr>
                        <td>Dirección</td>
                        <td><input type="text" name="Direccion" value="" class="form-control input-sm chat-input" /></td>
                      </tr>
                      <tr>
                        <tr>
                        <td>Población</td>
                        <td><input type="text" name="Poblacion" value="" class="form-control input-sm chat-input" /></td>
                      </tr>
                        <tr>
                        <td>Provincia</td>
                        <td><input type="text" name="Provincia" value="" class="form-control input-sm chat-input" /></td>
                      </tr>
                       <tr>
                        <td>Teléfono</td>
                        <td><input type="text" name="Telefono" value="" class="form-control input-sm chat-input" /></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><input type="text" name="E-mail" value="" class="form-control input-sm chat-input" /></td>
                   <!--     <td><a href="mailto:info@support.com">info@support.com</a></td> -->
                      </tr>
                        <td>Contraseña<br><br>Confirmar Contraseña:</td>
                        <td><input type="text" name="password" value="" class="form-control input-sm chat-input" /><br>
                        <input type="text" name="password2" value="" class="form-control input-sm chat-input" />
                        </td>
                       </tr>
                     
                    </tbody>
                  </table>
                  
                  <input type="submit" name="submit" value="Nuevo Usuario" class="btn btn-primary"/>
                  <input type="submit" name="submit" value="Guardar Usuario" class="btn btn-primary"/>
                </div>
              </div>
            </div>
                 <!-- div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div -->
            
          </div>
        </div>
 	</form>
</div>      

<?php include '_footer.php' ?>










