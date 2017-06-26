var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.btnName = "Registrar";  
     $scope.btnCancel = "Cancelar";  
     
      $scope.insertData = function(){  
           if($scope.tituloCronograma == null)  
           {  
                alert("Titulo de la actividad es requerida");  
           }  
          if($scope.descripcionCronograma == null)  
           {  
                alert("Descripcion de la actividad es requerida");
           } 
         
           else  
           {                    

                $http.post(  
                     "../model/crud_cronograma.php",  
                     {'tituloCronograma':$scope.tituloCronograma, 
                     'descripcionCronograma':$scope.descripcionCronograma,
                     'btnName':$scope.btnName, 
                     'fechaInicialCronograma':$scope.fechaInicialCronograma,
                     'fechaFinalCronograma':$scope.fechaFinalCronograma,
                     'id':$scope.id
                   }  
                ).success(function(data){  
                     alert(data);  
                     $scope.tituloCronograma = null;  
                     $scope.descripcionCronograma = null;  
                     $scope.fechaInicialCronograma = null;  
                     $scope.fechaFinalCronograma = null;  
                    
                     $scope.btnName = "Registrar";  
                     $scope.displayData();

                     //parent.window.document.location.href = "http://example.com";
                     header.location='../view/Cronograma.php';
                       
                });  
           }  
      }  
      $scope.displayData = function(){  
           $http.get("../model/crud_cronograma.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  
      $scope.updateData = function(id, tituloCronograma, descripcionCronograma){  
          
          $scope.btnCancel.show = true;
          $scope.id = id;  
          $scope.tituloCronograma = tituloCronograma;
          $scope.descripcionCronograma = descripcionCronograma;

          $scope.btnName = "Actualizar";  
      }  
      $scope.deleteData = function(id){  
           $scope.btnName = "deleteData"; 
           $http.post("../model/crud_cronograma.php", {'id':id , 'btnName':$scope.btnName}).success(function(data){
             alert(data);  
               $scope.displayData();
           });
  
      } 
      
      
      $scope.cancelOperation = function(){  
          
          $scope.btnName = "Registrar"; 
          $scope.id = null;  
          $scope.tituloCronograma = "";
          $scope.descripcionCronograma = "";
          $scope.fechaInicialCronograma = "";
          $scope.fechaFinalCronograma = "";
  
      }
 });  