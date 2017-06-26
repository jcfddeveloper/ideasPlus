<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
           <link rel="stylesheet" href="../css/estilos.css" />   
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
           <script src="../controller/controlador_usuario.js"></script>
           <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
      </head>  
      <body>  
           <div class="ideasplusTitle">
            <span>Administrar ideas</span>
        </div>
           <div class="container">  
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                    
                     <!--
                     <label>Nombre Usuario</label>  
                     <input type="text" name="nombreUsuario" ng-model="nombreUsuario" class="form-control" />  
                         <br />  
                         -->

                         <input type="hidden" ng-model="id" />  
                         <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}"/>  
                     <br /><br />  
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Nombre Usuario</th>  
                               <th>Actualizar</th>  
                               <th>Eliminar</th>
                          </tr>  
                          <tr ng-repeat="x in names">  
                               <td>{{x.NOMBRE}}</td>  
                               <td><button ng-click="updateData(x.ID_USUARIO, x.NOMBRE)" class="btn btn-info btn-xs">Actualizar</button></td>
                               <td><button ng-click="inactivateData(x.ID_USUARIO)" class="btn btn-info btn-xs">Eliminar</button></td>  
                          </tr>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  