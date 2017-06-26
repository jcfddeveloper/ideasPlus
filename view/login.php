<!DOCTYPE html>
<html  ng-app="myapp">
<head>
  <meta charset="UTF-8">
  <title>Inicio Sesión</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="../recursos/css/style.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
  <script src="../controller/app.js"></script>
<script src="../controller/controlador_usuario.js"></script>
</head>

<body style="background-color:yellow" >
  
<!-- Mixins-->
<!-- Pen Title-->

<div class="pen-title">
 <div align="left"> 
    &nbsp &nbsp<img src="../recursos/uniajc.png" style="width:280px;"/></div>
  <h1><b>IDEASPLUS </b></h1>
      
<br>
    
<div class="container">
  <div class="card"></div>
  <div class="card" ng-controller="controllerForm" lang="es">
    <h1 class="title">Login</h1>
    <form ng-submit="entrar()">
      <div class="input-container">
        <input type="#{type}" id="#{label}" ng-model="txtUsuario" name="email" />
        <label for="#{label}">E-mail</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" ng-model="txtContrasena" name="password" ng-required="true"/>
        <label for="#{label}">Contraseña</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit"><span>Ingresar</span></button>
      </div>
     <!-- <div class="footer"><a href="#">Forgot your password?</a></div>-->
    </form>
      

       
        <div class="alert alert-success alert-dismissible fade in" role="alert" ng-hide="alertaLoginCorrecto">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      
          <strong>Bienvenido!</strong> {{rsJSON | json}}.
        </div>

<div class="error" ng-hide="alertaLoginError" ><span>Ops! No hemos identificado tu usario.</span></div>

  </div>
  <div class="card alt" ng-controller="usercontroller" ng-init="displayData()">
    <div class="toggle"></div>
    <h1 class="title">Registro
      <div class="close"></div>
    </h1>
    <form >
      <div class="input-container">
        <input type="#{type}" id="#{label}" ng-required="true" name="nombreUsuario" ng-model="nombreUsuario"/>
        <label for="#{label}">Nombre</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" ng-required="true" name="apellidoUsuario" ng-model="apellidoUsuario" />
        <label for="#{label}">Apellido</label>
        <div class="bar"></div>
      </div>
    
           <div class="input-container">
           
                       <select name="tipoDocumentoUsuario" ng-model="tipoDocumentoUsuario" ng-required="true" class="form-control form-control-lg" >
                      <option value="" selected>Tipo de documento</option>
                      <option value="cedula">Cédula</option> 
                      <option value="ti">Tarjeta de Identidad</option>
                      <option value="pasaporte">Pasaporte</option>
                      <option value="otro">Otro</option>
                     </select>
     </div>
       <div class="input-container">
        <input type="number" id="#{label}" ng-required="true" name="documentoUsuario" ng-model="documentoUsuario"/>
        <label for="#{label}">Documento</label>
        <div class="bar"></div>
      </div>    
   
     <div class="input-container">
           
                       <select name="idRolUsuario" ng-model="idRolUsuario" ng-required="true" class="form-control form-control-lg" >
                      <option value="" selected>¿Qué eres?</option>
                      <option value="1">Profesor</option> 
                      <option value="2">Estudiante</option>
                       <option value="5">Director</option>
                     </select>
     </div>
     <div class="input-container">
         
                     <select name="generoUsuario" ng-model="generoUsuario" class="form-control form-control-lg"  name="generoUsuario" ng-required="true">
                      <option value="" selected>Elige tu sexo</option>
                      <option value="F">Mujer</option> 
                      <option value="M">Hombre</option>
                     </select>
     </div>

   <div class="input-container">
        <input type="date" id="#{label}" ng-required="true" name="fechaNacimientoUsuario" ng-model="fechaNacimientoUsuario"/>
       <!-- <label for="#{label}">Fecha de Nacimiento</label>-->
        <div class="bar"></div>
      </div>
        <div class="input-container">
        <input type="number" id="#{label}" ng-required="true" name="telefonoUsuario" ng-model="telefonoUsuario"/>
        <label for="#{label}">Teléfono</label>
        <div class="bar"></div>
      </div>  
       <div class="input-container">
        <input type="number" id="#{label}" ng-required="true" name="celularUsuario" ng-model="celularUsuario"/>
        <label for="#{label}">Celular</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" ng-required="true" name="correoUsuario" ng-model="correoUsuario"/>
        <label for="#{label}">Correo</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" ng-required="true" name="contrasenaUsuario" ng-model="contrasenaUsuario"/>
        <label for="#{label}">Contraseña</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
       <input type="hidden" ng-model="id" />  
        <button type="submit" name="btnInsert" 
ng-click="insertData()" value="{{btnName}}"><span>Enviar</span></button>
      </div>
    </form>
  </div>
</div>

<!-- Portfolio--><a id="portfolio" href="./index.php" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><!--<a id="codepen" href="www.google.com" title="Follow me!"><i class="fa fa-codepen"></i></a>-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../recursos/js/index.js"></script>

</body>
</html>
