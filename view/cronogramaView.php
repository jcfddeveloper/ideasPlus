<?php 
session_start();
  if (isset($_SESSION['id'])) 
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
               <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
           <script src="../controller/controlador_cronograma.js"></script>
        <!-- Theme initialization -->
    
    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <article class="content forms-page">
                    <section class="section" ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">
                        <div class="row sameheight-container">
                            <div class="col-md-6">
                                <div class="card card-block sameheight-item">
                                    <div class="title-block">
                                    </div>
                                    <form role="form">
                                    
                                        <div class="form-group"> <label class="control-label" >Ingresa una actividad</label> <input type="text" class="form-control underlined" placeholder="Ejemplo: Diseño gráfico, Tecnología, Investigación" name="tituloCronograma" ng-model="tituloCronograma"> </div>


                                         <div class="form-group"> <label class="control-label" >Ingresa la fecha inicial</label> <input type="date" class="form-control underlined" placeholder="Ejemplo: 31/12/2017" name="fechaInicialCronograma" ng-model="fechaInicialCronograma"> </div>
                                       


                                        <div class="form-group"> <label class="control-label" >Ingresa la fecha final</label> <input type="date" class="form-control underlined" placeholder="Ejemplo: 31/12/2017" name="fechaFinalCronograma" ng-model="fechaFinalCronograma"> </div>

                                    
                                        <div class="form-group"> <label class="control-label">Descripción</label> <textarea rows="3" class="form-control underlined" placeholder="Descripción breve de la actividad. Máximo de 300 caracteres." name="descripcionCronograma" ng-model="descripcionCronograma"></textarea > </div>
                                         <input type="hidden" ng-model="id" />  
                                                     <input type="submit" class="btn btn-success" name="btnInsert" ng-click="insertData()" value="{{btnName}}">
                                                     </input>
                                                     <button  class="btn btn-danger btn-xs" name="btnCancel" ng-click="cancelOperation()" ng-show="true" value="{{btnCancel}}">Cancelar
                                                     </button>
                                      
                                    </form>
                                </div>
                            </div>
                          
                                                      
              
                          
                        </div>
                    </section>
                  
    
            
        </div>
        </div>
        <!-- Reference block for JS -->
      
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