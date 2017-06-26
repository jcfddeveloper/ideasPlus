var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.btnName = "Registrar";  
     $scope.btnCancel = "Cancelar";  
     
      $scope.insertData = function(){  
           if($scope.nombreArea == null)  
           {  
                alert("Nombre Area es requerido");  
           }  
          if($scope.descripcionArea == null)  
           {  
                alert("Descripcion del area es requerido");  
           } 
         
           else  
           {  
                $http.post(  
                     "../model/crud_areas_interes.php",  
                     {'nombreArea':$scope.nombreArea, 'descripcionArea':$scope.descripcionArea,'btnName':$scope.btnName, 'id':$scope.id}  
                ).success(function(data){  
                     alert(data);  
                     $scope.nombreArea = null;  
                     $scope.descripcionArea = null;  
                    
                     $scope.btnName = "Registrar";  
                     $scope.displayData();  
                });  
           }  
      }  
      $scope.displayData = function(){  
           $http.get("../model/crud_areas_interes.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  
      $scope.updateData = function(id, nombreArea, descripcionArea){  
          
          $scope.btnCancel.show = true;
          $scope.id = id;  
          $scope.nombreArea = nombreArea;
          $scope.descripcionArea = descripcionArea;

          $scope.btnName = "Actualizar";  
      }  
      $scope.deleteData = function(id){  
           $scope.btnName = "deleteData"; 
           $http.post("../model/crud_areas_interes.php", {'id':id , 'btnName':$scope.btnName}).success(function(data){
             alert(data);  
               $scope.displayData();
           });
  
      } 
      
      
      $scope.cancelOperation = function(){  
          
          $scope.btnName = "Registrar"; 
          $scope.id = null;  
          $scope.nombreArea = "";
          $scope.descripcionArea = "";
  
      }
 });  