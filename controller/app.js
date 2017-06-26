
var angularTodo = angular.module('myapp', []);
function controllerForm($scope, $http) {
      $scope.r
      $scope.alertaLoginCorrecto = true;
      $scope.alertaLoginError    = true;

      $scope.entrar = function() {
        consultarUsuario($http,$scope);
      };
      // obtenemos el evento click del boton limpiar ng-click="limpiar()"
      $scope.limpiar = function() {
        limpiarForm($scope);
      };
 }
  function limpiarForm($scope){
    $scope.alertaLoginError    = true;   
    $scope.alertaLoginCorrecto = true;   
    $scope.txtUsuario    = '';
    $scope.txtContrasena = '';   
  }
 
  function consultarUsuario($http,$scope){
       
    $http.post('../model/index.php',{ usuario : $scope.txtUsuario , contrasena : $scope.txtContrasena })
        .success(function(data) {
    
           // si no existe el usuario nos muestre un alerta de error
           if (data==0){
             $scope.alertaLoginError = false;   
             $scope.alertaLoginCorrecto = true;   
             $scope.txtUsuario    = '';
             $scope.txtContrasena = '';   
           }else if(data==1){
              
            window.location.href = "./index.php";
             // si existe ya la hicimos y que nos ponga un mensaje de bienvenida
             $scope.rsJSON = data.usuario;
             $scope.alertaLoginCorrecto = false;            
             $scope.alertaLoginError = true;   
           }else if(data==2){
                window.location.href = "./indexSecond.php";
             // si existe ya la hicimos y que nos ponga un mensaje de bienvenida
             $scope.rsJSON = data.usuario;
             $scope.alertaLoginCorrecto = false;            
             $scope.alertaLoginError = true; 
           }
        })
        .error(function(data) {
            console.log('Error: ' + data);
        });   
        
  }


