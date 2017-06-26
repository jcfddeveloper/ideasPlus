var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      /*
      * Funcion para realizar la insercion de datos
      */
      $scope.btnName = "REGISTRAR";  
      $scope.insertData = function(){  
      
           if($scope.nombreUsuario == null)  
           {  
                alert("Nombre usuario es requerido");  
           }  
           else  
           {  
                $http.post(  
                     "../model/crud_usuario.php",  
                     {'nombreUsuario':$scope.nombreUsuario, 
                      'btnName':$scope.btnName, 
                      'id':$scope.id,
                      'apellidoUsuario':$scope.apellidoUsuario,
                      'documentoUsuario':$scope.documentoUsuario,
                      'tipoDocumentoUsuario':$scope.tipoDocumentoUsuario,
                      'idRolUsuario':$scope.idRolUsuario,
                      'generoUsuario':$scope.generoUsuario,
                      'fechaNacimientoUsuario':$scope.fechaNacimientoUsuario,
                      'telefonoUsuario':$scope.telefonoUsuario,
                      'celularUsuario':$scope.celularUsuario,
                      'correoUsuario':$scope.correoUsuario,
                      'contrasenaUsuario':$scope.contrasenaUsuario
                     }  
                ).success(function(data){  
                     alert(data);  
                     window.location.href = "./index.php";
                     $scope.nombreUsuario = null;  
                    
                     $scope.btnName = "REGISTRAR";  
                     $scope.displayData();  
                });  
           }  
      }  
        /*
      * Funcion para cerrar sesión usuario.
      */
     $scope.cerrarSesion = function(){  
           // alert("hola papu");
             $scope.btnName = "Cerrar";   
             $http.post("../model/crud_usuario.php", {'btnName':$scope.btnName}).success(function(data){ 
               alert("Sesión finalizada.");
                  window.location.href = "login.php";
           });
      }
      /*
      * Funcion para realizar el listado de datos
      */
      $scope.displayData = function(){  
           $http.get("../model/crud_usuario.php")  
           .success(function(data){  
      
                $scope.names = data;  
           });  
      }       
      /*
      * Funcion para realizar la actualizacion de datos
      */
      $scope.updateData = function(id, nombreUsuario){  
           $scope.id = id;  
           $scope.nombreUsuario = nombreUsuario;  
           
           $scope.btnName = "Update";  
      }  
      
      /*
      * Funcion para realizar la eliminacion de datos
      */
       $scope.deleteData = function(id){  
           $scope.btnName = "deleteData"; 
           $http.post("../model/crud_usuario.php", {'id':id , 'btnName':$scope.btnName}).success(function(data){
             alert(data);  
               $scope.displayData();
           });
//           $scope.id = id;  
//           $scope.nombreUsuario = nombreUsuario;  
//           $scope.btnName = "deleteData";  
      }
       /*
      * Funcion para realizar la activacion o inactivacoin del usuario
      */
       $scope.inactivateData = function(id){  
           $scope.btnName = "inactivateData"; 
           $http.post("../model/crud_usuario.php", {'id':id , 'btnName':$scope.btnName}).success(function(data){
             alert(data);  
               $scope.displayData();
           });
      }
 });  