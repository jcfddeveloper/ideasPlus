<?php  

include('conexion.php');


 $output = array();  
 $query = "SELECT * FROM tb_idea INNER JOIN tb_usuario ON tb_usuario.ID_USUARIO = tb_idea.ID_USUARIO_CREA INNER JOIN tb_area_interes ON tb_idea.ID_AREA=tb_area_interes.ID_AREAINTERES";  
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