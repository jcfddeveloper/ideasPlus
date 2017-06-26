

<?php 
session_start();
  if (isset($_SESSION['administrador']) && $_SESSION['administrador']=='YES') 
  {?>


<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="../recursos/css/vendor.css">
        <link rel="stylesheet" href="../recursos/css/app.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
          <script src="../controller/controlador_rol.js"></script>
         <!--      <script src="../controller/controlador_usuario.js"></script>-->
        <script>
    $(document).ready(function(){
         $('.errorRol').hide();
          $('.exitoRol').hide();
    });
           

    </script>
      
    </head>

  
       
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
    			<i class="fa fa-bars"></i>
    		</button> </div>
                    <div class="header-block header-block-search hidden-sm-down">
                        <form role="search">
                            <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
                   <div class="header-block header-block-buttons">
                            <a href="https://github.com/pipeolis/ideasplus" target="_blank" class="btn btn-sm header-btn"> <i class="fa fa-github-alt"></i> <span>Ver en GitHub</span> </a>

                            <a href="https://github.com/pipeolis/ideasplus/archive/master.zip" class="btn btn-sm header-btn"> <i class="fa fa-cloud-download"></i> <span>Download .zip</span> </a>
                        </div>
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="notifications new">
                                <a href="" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <sup>
    			      <span class="counter">8</span>
    			    </sup> </a>
                                <div class="dropdown-menu notifications-dropdown-menu">
                                    <ul class="notifications-container">
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/5.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Amaya Hatsumi</span> started new task: <span class="accent">Dashboard UI design.</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Andy Nouman</span> deployed new version of <span class="accent">NodeJS REST Api V3</span> </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <footer>
                                        <ul>
                                            <li> <a href="">
    			            View All
    			          </a> </li>
                                        </ul>
                                    </footer>
                                </div>
                            </li>
                            <li class="profile dropdown">
                                                               <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <div class="img" > </div> <span class="name">
                          <?php echo $_SESSION['nombre']; ?>
                        </span> </a>
                                 <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <a class="dropdown-item" href="#"> <i class="fa fa-user icon"></i> Perfil </a>
                                       
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="login.html"> <i class="fa fa-power-off icon"></i> Cerrar Sesión </a>
                                    </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                           <img src="../recursos/logoF.png" width="40px" alt="">Administrar cuenta </div>
                        </div>
                         <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">
                                <li class="active">
                                    <a href="index.php"> <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                             
                             <li>
                                        <a href=""> <i class="fa fa-table"></i>Control <i class="fa arrow"></i> </a>
                                        <ul>


                                        <li> <a href="rolView.php">
                                        Roles
                                    </a> </li>

    <li> <a href="areaInteresView.php"    >
                                        Áreas de Interés
                                    </a> </li>
                                      <li> <a href="usuarioView.php"    >
                                        Usuarios
                                    </a> </li>
                                       <li> <a href="usuarioControlView.php"    >
                                        Activación Usuarios
                                    </a> </li>
                                       
                                        </ul>
                                    </li>

                               
                               
                              
                               
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                        <ul class="nav metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-xs-4"> </div>
                                                <div class="col-xs-4"> <label class="title">fixed</label> </div>
                                                <div class="col-xs-4"> <label class="title">static</label> </div>
                                            </div>
                                            <div class="row hidden-md-down">
                                                <div class="col-xs-4"> <label class="title">Sidebar:</label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed" >
    				                        <span></span>
    				                    </label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="sidebarPosition" value="">
    				                        <span></span>
    				                    </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Header:</label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
    				                        <span></span>
    				                    </label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="headerPosition" value="">
    				                        <span></span>
    				                    </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Footer:</label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
    				                        <span></span>
    				                    </label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="footerPosition" value="">
    				                        <span></span>
    				                    </label> </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li> <span class="color-item color-red" data-theme="red"></span> </li>
                                                <li> <span class="color-item color-orange" data-theme="orange"></span> </li>
                                                <li> <span class="color-item color-green active" data-theme=""></span> </li>
                                                <li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
                                                <li> <span class="color-item color-blue" data-theme="blue"></span> </li>
                                                <li> <span class="color-item color-purple" data-theme="purple"></span> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <a href=""> <i class="fa fa-cog"></i> <Personalizar></Personalizar> </a>
                            </li>
                        </ul>
                    </footer>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content forms-page">
                    <div class="title-block">
                        <h3 class="title"> Roles </h3>
                        <p class="title-description"> </p>
                    </div>
                    <div class="subtitle-block">
                        <h3 class="subtitle">Creación de Roles</h3>
                    </div>
                    <section class="section" ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">
                        <div class="row sameheight-container">
                            <div class="col-md-6">
                                <div class="card card-block sameheight-item">
                                  
                                    <form role="form">
                                           <input type="hidden" ng-model="id" />      
                                        <div class="form-group"> <label class="control-label" >Ingresa un Rol</label> <input type="text" class="form-control underlined" placeholder="Ejemplo: Profesor, Estudiante, Administrador..." name="nombreRol" ng-model="nombreRol"> </div>
                                 
                                    
                                
                                        <input type="submit" class="btn btn-success" name="btnInsert"  ng-click="insertData()" value="{{btnName}}"></input>
                                    
                                    
              
                      <div class="errorRol"  ><span>Ops! Ocurrió un error en el registro.</span></div>
                 <div class="exitoRol"  ><span>Rol creado con éxito.</span></div>
                                    </form>
                                </div>
                            </div>
                   <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title">Mi lista de Roles </h3>
                                        </div>
                                        <section class="example">
                                            <table class="table table-hover">
                                        <tr>  
                               <th>Nombre rol</th>  
                          
                               <th>Actualizar</th>  
                               
                                <th>Eliminar</th>
                          </tr>  
                          <tr ng-repeat="x in names">  
                               <td>{{x.NOMBRE_ROL}}</td>  
                            
                               <td><button ng-click="updateData(x.ID_ROL, x.NOMBRE_ROL)" class="btn btn-info btn-xs">Actualizar</button></td>
                                <td><button ng-click="deleteData(x.ID_ROL)" class="btn  btn-danger btn-xs">Eliminar</button></td>  
                          </tr> 
                                            </table>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                
    
           
         
            <!-- /.modal -->
 
            <!-- /.modal -->
        </div>    
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <style>
            
        .exitoRol {
color: #4F8A10;
padding: 20px;
    position: relative;
    top: 30px;
background-color: #DFF2BF;
    
background-image: url('exito.png');
    background-size: contain;
    background-repeat: no-repeat;
}
.exitoRol span{
    padding: 0 50px;
    font-size: 18px;
    font-weight: bolder;
}    
        </style>
        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-2', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="../recursos/js/vendor.js"></script>
        <script src="../recursos/js/app.js"></script>
    </body>

</html>
<?php

  }
  else
  {
    header("location: ./login.php");
  }
 ?>