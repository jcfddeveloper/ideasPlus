<?php  

include('conexion.php');


session_start();
$id_usuario = $_SESSION['id']; 
$rol = $_SESSION['rol']; 


if($rol=='Estudiante'){
  $cadena_campo = 'ID_ESTUDIANTE';
}
if($rol=='Profesor'){
  $cadena_campo = 'ID_DOCENTE';
}





 if(count($data) > 0)  
 {  
         
 
      $btn_name = $data->btnName;  
      if($btn_name == "Registrar")  
      { 
       
           $tituloCronograma = mysqli_real_escape_string($connect, $data->tituloCronograma);  
           $descripcionCronograma = mysqli_real_escape_string($connect, $data->descripcionCronograma);  
           $fechaInicialCronograma = mysqli_real_escape_string($connect, $data->fechaInicialCronograma);  
           $fechaFinalCronograma = mysqli_real_escape_string($connect, $data->fechaFinalCronograma);  
           $query = "INSERT INTO cronograma(TITULO,DESCRIPCION,FECHA_INICIO,FECHA_FIN,".$cadena_campo.",ID_ESTADO) VALUES ('$tituloCronograma','$descripcionCronograma','$fechaInicialCronograma','$fechaFinalCronograma','$id_usuario',1)";  
           if(mysqli_query($connect, $query))  
           {  
                echo "Actividad, registrada.";  
           }  
           else  
           {  
                echo 'Error';  
           }
          return;
      }  
      if($btn_name == 'Actualizar')  
      {  
           $tituloCronograma = mysqli_real_escape_string($connect, $data->tituloCronograma);
            $descripcionCronograma = mysqli_real_escape_string($connect, $data->descripcionCronograma);     
           $id = $data->id;  
           $query = "UPDATE cronograma SET TITULO = '$tituloCronograma', DESCRIPCION='$descripcionCronograma' WHERE ID_AREAINTERES = '$id'";  
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
           $query = "DELETE FROM cronograma WHERE ID_AREAINTERES = '$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Actividad eliminada.';  
           }  
           else  
           {  
                echo 'Error';  
           } 
          return;
      }
 } 

 $output = array();  
 $query = "SELECT * FROM cronograma";  
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