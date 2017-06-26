<?php  

include('conexion.php');

 if(count($data) > 0)  
 {  
         
      $btn_name = $data->btnName; 
     
      if($btn_name == "Publicar")  
      {
           $tituloIdea = mysqli_real_escape_string($connect, $data->tituloIdea);  
           $areainteresIdea = $data->areainteresIdea;
          
           $descripcionIdea = mysqli_real_escape_string($connect, $data->descripcionIdea);
           $idUsuarioCrea = mysqli_real_escape_string($connect, $data->idUsuarioCrea);
           $privadoIdea = $data->privadoIdea;
          $hoy = date("Y").date("m").date("d") ;
          

           $query = "INSERT INTO tb_idea(TITULO, ID_AREA, DESCRIPCION, PRIVADO, ID_USUARIO_CREA, FECHA_PUBLICACION,ID_ESTADO) VALUES ('$tituloIdea', $areainteresIdea, '$descripcionIdea', $privadoIdea,$idUsuarioCrea,$hoy,2)";  
          
           if(mysqli_query($connect, $query))  
           {  
                echo "Se ha insertado la nueva idea: " . $tituloIdea;  
           }  
           else  
           {  
                echo 'Error ha fallado la inserción la idea: ' . $tituloIdea;  
           }
          return;
      }  
      if($btn_name == 'Update')  
      {  
           $nombreRol = mysqli_real_escape_string($connect, $data->nombreRol);   
           $id = $data->id;  
           $query = "UPDATE tb_rol SET NOMBRE = '$nombreRol' WHERE ID_ROL = '$id'";  
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
      if($btn_name == 'deleteData')  
      {  
           $id = $data->id;  
           $id_idea = $data->id_idea ;  
           $query = "DELETE FROM tb_idea WHERE ID_IDEA = $id_idea AND ID_USUARIO_CREA=$id";  
           if($row= mysqli_query($connect, $query))  
           {  
            if(mysqli_affected_rows($connect)==0){
                echo 'No tienes permiso sobre esta idea.';
            }else{
                echo 'Idea eliminada correctamente';
            }
               
           }  
           else  
           {  
                echo 'Error, no tienes permisos sobre esta idea.';  
           } 
          return;
      }
           if($btn_name == 'Mostrar')  
      {  
           $id = $data->id;  
           $query = "DELETE FROM tb_rol WHERE ID_ROL = '$id'";  
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
        if($btn_name == 'Mostrar')  
      {  
           $id = $data->id;  
           $query = "DELETE FROM tb_rol WHERE ID_ROL = '$id'";  
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
         if($btn_name == 'actualizarIdea') 
      {  
           $id_usuario = $data->id_usuario;  
           $id_idea = $data->id_idea;  
          $query = "SELECT * FROM tb_usuario WHERE ID_USUARIO ='$id_usuario'";  
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {
    while($row = mysqli_fetch_array($result))  
      {  
        $nombre = $row['ID_ROL'];  
      }
     echo $nombre;
     //ESTUDIANTE
     if($nombre==2){
           $query = "UPDATE tb_idea SET ID_ESTUDIANTE = '$id_usuario' WHERE ID_IDEA = '$id_idea'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Idea tomada...';  
           }  
           else  
           {  
                echo 'Error';  
           } 
          return;
         //PROFESOR
     }if($nombre==3){
         $query2 = "UPDATE tb_idea SET ID_DOCENTE= '$id_usuario' WHERE ID_IDEA = '$id_idea'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Idea tomada...';  
           }  
           else  
           {  
                echo 'Error';  
           } 
          return;
         
         
     }
     
     
     
 } 

          
          
          return;
      }
 } 

 $output = array();  
 $query = "SELECT * FROM tb_area_interes";  
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