<?php 

include('../model/conexion.php');

session_start();
$id_usuario = $_SESSION['id']; 

$output = array();  
$query = " select * from cronograma where id_estudiante = ".$id_usuario." or id_docente = ".$id_usuario." and id_estado=1; ";  

 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
 } 


?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='../recursos/fullcalendar.min.css' rel='stylesheet' />
<link href='../recursos/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='../recursos/moment.min.js'></script>
<script src='../recursos/jquery.min.js'></script>
<script src='../recursos/fullcalendar.min.js'></script>



<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../recursos/css/estilo.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/




			$('#calendar').fullCalendar({

				eventClick: function(calEvent, jsEvent, view) {
		        alert('Titulo: ' + calEvent.title);
		        // change the border color just for fun
		        $(this).css('border-color', 'red');

		         if (calEvent.url) {
			            // window.open(calEvent.url);
			            window.open(calEvent.url, "", "width=500,height=400");
			            return false;
			        }

		    },


				defaultDate: '<?php echo date('Y-m-d'); ?>',
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [
				<?php 	foreach($output as $posicion=>$cronograma)	{ ?>		
					{
						title: '<?php echo $cronograma['TITULO'] . ' Descripción: ' . $cronograma['DESCRIPCION']; ?>',
						url: '../view/CronogramaView.php',
						start: '<?php echo $cronograma['FECHA_INICIO']; ?>',
						end: '<?php echo $cronograma['FECHA_FIN']; ?>'
					},

				<?php } ?>

				]
			});
		});
	</script>

<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>
<button type="button" class="btn btn-primary" onclick="window.open('../view/cronogramaView.php','', 'width=500,height=600');">Crear Actividad +</button>


	<div id='calendar'></div>


</body>



</html>
