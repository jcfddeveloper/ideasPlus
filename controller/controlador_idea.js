var app = angular.module("myapp",[]);
var areaId;
  var usuarioID;
$(document).ready(function(){
usuarioID= $('#userCrea').val(); 
   
});


 app.controller("ideacontroller", function($scope, $http){

     $scope.btnName = "Publicar";

     $scope.insertData = function(){
      
           if($scope.tituloIdea == null)
           {
               alert("El titulo de la idea es requerido");
               return;
           }

         if(areaId == null)
           {
               alert("debe elegir un area de interes");
               return;
           }

         if($scope.descripcionIdea.trim() == null || $scope.descripcionIdea.trim() == '')
           {
               alert("La descripcion es requerida");
               return;
           }

         $http.post(
                     "../model/crud_idea.php",
                     {
                       
                        'tituloIdea':$scope.tituloIdea,
                        'areainteresIdea':areaId,
                        'descripcionIdea':$scope.descripcionIdea.trim(),
                        'privadoIdea':$scope.privadoIdea,
                         'idUsuarioCrea':usuarioID,
                        'btnName':$scope.btnName
                     }
                ).success(function(data){
                     alert(data);

                     $scope.tituloIdea = null;
                     $scope.areainteresIdea = null;
                     $scope.descripcionIdea = null;
                     $scope.privadoIdea = null;
                     $scope.btnName = null;

                     $scope.btnName = "Publicar";
                $scope.displayIdea();  
                });
      }

      $scope.displayData = function(){
           $http.get("../model/crud_idea.php")
           .success(function(data){
                $scope.areas = data;
           });

                                                        
      }
      
          $scope.displayIdea = function(){
           $http.get("../model/crud_publicaciones.php")
           .success(function(data){
                $scope.ideas = data;
           });

                                                        
      }
      
              $scope.cerrarSesion = function(){  
           // alert("hola papu");
             $scope.btnName = "Cerrar";   
             $http.post("../model/crud_usuario.php", {'btnName':$scope.btnName}).success(function(data){ 
               alert("Sesión finalizada.");
                  window.location.href = "login.php";
           });
      }
  
    $scope.mostrar = function(id, nombreRol){  
       areaId=id;
    
      } 
      $scope.tomarIdea = function(id_idea, id_usuario){  
                 //$scope.btnName = "deleteData";
$http.post("../model/crud_idea.php", {'id_usuario':id_usuario,'id_idea':id_idea, 'btnName':"actualizarIdea"}).success(function(data){
             alert(data);
               //$scope.btnName = "ADD";
    // $scope.displayIdea();
              
   
           });
      } 
       
    
$scope.deleteData = function(id, id_idea){
           //$scope.btnName = "deleteData";
$http.post("../model/crud_idea.php", {'id':usuarioID     ,'id_idea':id_idea, 'btnName':"deleteData"}).success(function(data){
             alert(data);
               //$scope.btnName = "ADD";
     $scope.displayIdea();
              
   
           });
      }
      /*$scope.updateData = function(id, nombreRol){  s
           $scope.id = id;
           $scope.nombreRol = nombreRol;

           $scope.btnName = "Update";
      } */
       /*$scope.deleteData = function(id){
           //$scope.btnName = "deleteData";
           $http.post("../model/crud_rol.php", {'id':id , 'btnName':"deleteData"}).success(function(data){
             alert(data);
               //$scope.btnName = "ADD";
               $scope.displayData();
           });
      } */
 });