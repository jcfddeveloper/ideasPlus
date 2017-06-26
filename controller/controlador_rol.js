var app = angular.module("myapp",[]);  

 app.controller("usercontroller", function($scope, $http){  
      $scope.btnName = "Agregar";  
 
     
      $scope.insertData = function(){
        
           if($scope.nombreRol == null)  
           {  
                alert("Nombre rol es requerido");  
           }  
         
           else  
           {  
                $http.post(  
                     "../model/crud_rol.php",  
                     {'nombreRol':$scope.nombreRol, 'btnName':$scope.btnName, 'id':$scope.id}  
                ).success(function(data){ 
                    alert(data);
                 
                  var result = $.trim(data);
                    
                    if(result=='1'){
                             $('.exitoRol').show(300);
                    }else if(result=='2'){
                        alert("Actualizado con éxito");  
                    }else{
                        $('.errorRol').show(300);
                        
                    }
                    
                    
    //$scope.alertaLoginError = false;  
                     $scope.nombreRol = null;  
                    
                     $scope.btnName = " Agregar";  
                     $scope.displayData();  
                });  
           }  
      }  
      $scope.displayData = function(){  
           $http.get("../model/crud_rol.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }
      /*
      * Listado de roles
      */
      $scope.displayDataRol = function(){  
           $http.get("../model/crud_rol.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  
      $scope.updateData = function(id, nombreRol){  
           $scope.id = id;  
           $scope.nombreRol = nombreRol;  
           
           $scope.btnName = "Actualizar";  
      }  
       $scope.deleteData = function(id){  
           $scope.btnName = "Eliminar"; 
           $http.post("../model/crud_rol.php", {'id':id , 'btnName':$scope.btnName}).success(function(data){
             alert(data);  
               $scope.displayData();
           });
//           $scope.id = id;  
//           $scope.nombreRol = nombreRol;  
//           
//           $scope.btnName = "deleteData";  
      } 
 });  