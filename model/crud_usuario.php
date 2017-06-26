<?php  
/*
* Llamado a la Conexión de la Base de Datos
*/
include('conexion.php');



if(count($data) > 0)  
 {  

      $btn_name = $data->btnName;  
      if($btn_name == "REGISTRAR")  
      { 
           $nombreUsuario = mysqli_real_escape_string($connect, $data->nombreUsuario);   
           $apellidoUsuario = mysqli_real_escape_string($connect, $data->apellidoUsuario);   
           $documentoUsuario = mysqli_real_escape_string($connect, $data->documentoUsuario);   
           $tipoDocumentoUsuario = mysqli_real_escape_string($connect, $data->tipoDocumentoUsuario);   
           $idRolUsuario = mysqli_real_escape_string($connect, $data->idRolUsuario);   
           $generoUsuario = mysqli_real_escape_string($connect, $data->generoUsuario);   
           $fechaNacimientoUsuario = mysqli_real_escape_string($connect, $data->fechaNacimientoUsuario);
           $telefonoUsuario = mysqli_real_escape_string($connect, $data->telefonoUsuario);   
           $celularUsuario = mysqli_real_escape_string($connect, $data->celularUsuario);   
           $correoUsuario = mysqli_real_escape_string($connect, $data->correoUsuario);   
           $contrasenaUsuario = mysqli_real_escape_string($connect, $data->contrasenaUsuario);
      
          
         $query = "INSERT INTO tb_usuario(NOMBRE, APELLIDO, DOCUMENTO, TIPO_DOCUMENTO, ID_ROL, GENERO, FECHA_NACIMIENTO, ID_ESTADO, TELEFONO, CELULAR, CORREO, CONTRASENA) VALUES ('$nombreUsuario', '$apellidoUsuario', '$documentoUsuario', '$tipoDocumentoUsuario', '$idRolUsuario', '$generoUsuario', '$fechaNacimientoUsuario', 1, '$telefonoUsuario', '$celularUsuario', '$correoUsuario','$contrasenaUsuario')";  
           if(mysqli_query($connect, $query))  
           {  
                echo "Registro con éxito. Ingresa a tu cuenta.";  
           }  
           else  
           {  
                echo $query;  
           }
          return;
      }  
      if($btn_name == 'Update')  
      {  
           $nombreUsuario = mysqli_real_escape_string($connect, $data->nombreUsuario);   
           $id = $data->id;  
           $query = "UPDATE tb_usuario SET NOMBRE = '$nombreUsuario' WHERE ID_USUARIO = '$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Data Updated...';  
           }  
           else  
           {  
                echo 'Error';  
           } 
          return;
      }  
         if($btn_name == 'Cerrar')  
      {  
       session_start();
            session_destroy();
          return;
      }  
      if($btn_name == 'deleteData')  
      {  
           $id = $data->id;  
           $query = "DELETE FROM tb_usuario WHERE ID_USUARIO = '$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Data DELETE...';  
           }  
           else  
           {  
                echo 'Error';  
           } 
          return;
      }
      if($btn_name == 'inactivateData')  
      {  
           $id = $data->id;  
           $query = "UPDATE tb_usuario set ID_ESTADO = 2 WHERE ID_USUARIO = '$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'USUARIO ACTIVO...';  
           }  
           else  
           {  
                echo 'Error';
           } 
          return;
      }
     
 }



 $output = array();  
 $query = "SELECT * FROM tb_usuario";  
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 } 


 ?>  