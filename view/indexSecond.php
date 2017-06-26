

<?php 
session_start();
  if (isset($_SESSION['usuario']) && $_SESSION['usuario']=='YES') 
  {?>


<!DOCTYPE html>
<html>
<title>Usuario</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../recursos/css/estilo.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

             <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
             
           <script src="../controller/controlador_idea.js"></script>
          
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>

<body class="w3-theme-l5"   ng-app="myapp" ng-controller="ideacontroller">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>IdeasPlus</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">Mi notificacion</a>
      <a href="#" class="w3-bar-item w3-button">Otra notificación</a>
      <a href="#" class="w3-bar-item w3-button">Otra...</a>
    </div>
  </div>
  <button class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"  ng-click="cerrarSesion()"><img src="../recursos/avatar2.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"><span>Cerrar Sesión</span></button>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Mi Perfil</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"> <?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></h4>
         <p class="w3-center"><img src="../recursos/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>

         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo $_SESSION['correo']; ?></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php echo $_SESSION['telefono']; ?></p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo $_SESSION['fecha']; ?></p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card-2 w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Universidad Antonio José Camacho</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p><cursive> Calidad, excelencia y compromiso social</cursive></p>
          </div>
          
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Logo</button>
          <div id="Demo3" class="w3-hide w3-container">
                <div align="center"> 
                    <img src="../recursos/uniajc.png"/>
                </div>
          </div>

<button onclick="myFunction('DivCronograma')" class="w3-button w3-block w3-theme-l1 w3-left-align"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Cronograma</button>



          <div id="DivCronograma" class="w3-hide w3-container">
            <a style="cursor: pointer;" onclick="window.open('../view/Cronograma.php','', 'width=1200,height=600');"><cursive> Mi Cronograma de Actividades</cursive></a>
            <!--<p><cursive> Administrar Mi Cronograma de Actividades</cursive></p>-->
          </div>

        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card-2 w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Areas de interés</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey! <?php echo $_SESSION['nombre'];?></strong></p>
        <p>Cómo estás?</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding"  ng-init="displayData()">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding ">
              <h3 class="w3-opacity">Publica tu idea</h3>
              <input type="text" value="<?php echo $_SESSION['id']; ?>"  name="userCrea" class="userCrea" id="userCrea" hidden>
             <input type="text"  class="form-control" placeholder="Ingresa el título de tu idea." name="tituloIdea" ng-model="tituloIdea"><br>
             <textarea rows="3" class="form-control underlined" placeholder="Describe tu idea. Máximo 100 caracteres."  ng-model="descripcionIdea" name="descripcionIdea" ></textarea >
                  
                 
                <h5 class="w3-opacity"  >Elige el área de interés de tu idea, presionando click sobre el tag.</h5>
                         <p>
                          <span ng-repeat="x in areas" class="w3-tag w3-small w3-theme-d5"  >  
                              
                               <option  ng-click="mostrar(x.ID_AREAINTERES, x.NOMBRE)"  ng-model="areainteresIdea" >{{x.NOMBRE_AREA}}</option>  

                          </span> 
                          </p>     
         
             
                     <div class="col-xs-12 col-md-2">
             <input type="radio" name="gender" value="1" ng-model="privadoIdea">Privada<br>
                     </div>
                      <div class="col-xs-12 col-md-2">
            <input type="radio" name="gender" value="2" ng-model="privadoIdea">Pública<br>
                      </div>
              
             <div class="col-xs-12 mike-ButtonIdea">
                 <br>
              <button type="submit" class="w3-button w3-theme" name="btnInsert" ng-click="insertData()" value="{{btnName}}"> <i class="fa fa-pencil"></i>  Publicar idea</button>   
              </div>
            </div>
          </div>
        </div>
      </div>
      <div ng-init="displayIdea()">
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"  ng-repeat="x in ideas"><br>
        <img src="../recursos/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4>{{x.NOMBRE}} {{x.APELLIDO}}</h4><br>
        <hr class="w3-clear">
        <h3>{{x.TITULO}} </h3>
        <p>{{x.DESCRIPCION}}</p>
         
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
         
            </div>
            <div class="w3-half">
            
          </div>
        </div>
    
              <p><span class="w3-tag w3-small w3-theme-d5"  >  
                              
                               <option>{{x.NOMBRE_AREA}}</option>  

                          </span> </p>
               
      
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Me gusta</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comentario</button>
        <button ng-click="tomarIdea(x.ID_IDEA, x.ID_USUARIO)" type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><span class="glyphicon glyphicon-hand-up"></span> Tomar Idea</button>
        <div class="mike-BotonElimnar">
        <button type="button" id="butonEliminar" class="w3-button w3-margin-bottom" ng-click="deleteData(x.ID_USUARIO_CREA, x.ID_IDEA)"><span class="glyphicon glyphicon-trash"></span>  Eliminar idea</button> 
          </div>
      </div>
      </div>
    
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    
      <br>
      
      <div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center">
        <p>Atrevete a marcar diferencia publicando y desarrollando tu propia Idea de Tesis</p>
      </div>
      <br>
      
      <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center">
        <p> <div align="center"> 
    <img src="../recursos/uniajc.png"/></div></p>
      </div>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5 align="center">Desarrollo por Brainiac Developers- Ingeniería de Sistemas</h5>
</footer>

<script>

    
   

</script>
 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>

 <?php

  }
  else
  {
    header("location: ./login.php");
  }
 ?> 
