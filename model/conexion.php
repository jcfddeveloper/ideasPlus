<?php  
 //select.php  
 $connect = mysqli_connect("localhost", "root", "", "ideasplus");  
 $data = json_decode(file_get_contents("php://input"));  
 ?>  