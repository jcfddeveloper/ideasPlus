<?php  

include('conexion.php');







 if(count($data) > 0)  
 {  
         
 
      $btn_name = $data->btnName;  
      if($btn_name == "Registrar")  
      { 
       
           $nombreArea = mysqli_real_escape_string($connect, $data->nombreArea);  
           $descripcionArea = mysqli_real_escape_string($connect, $data->descripcionArea);  
           $query = "INSERT INTO tb_area_interes(NOMBRE_AREA,DESCRIPCION) VALUES ('$nombreArea','$descripcionArea')";  
           if(mysqli_query($connect, $query))  
           {  
                echo "Área de interés, registrada.";  
           }  
           else  
           {  
                echo 'Error';  
           }
          return;
      }  
      if($btn_name == 'Actualizar')  
      {  
           $nombreArea = mysqli_real_escape_string($connect, $data->nombreArea);
            $descripcionArea = mysqli_real_escape_string($connect, $data->descripcionArea);     
           $id = $data->id;  
           $query = "UPDATE tb_area_interes SET NOMBRE_AREA = '$nombreArea', DESCRIPCION='$descripcionArea' WHERE ID_AREAINTERES = '$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Actualizado con éxito.';  
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
           $query = "DELETE FROM tb_area_interes WHERE ID_AREAINTERES = '$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Área eliminada.';  
           }  
           else  
           {  
                echo 'Error';  
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