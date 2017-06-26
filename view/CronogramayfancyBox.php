<?php 

include('../model/conexion.php');

session_start();
$id_usuario = $_SESSION['id']; 

 $output = array();  
 $query = " select * from cronograma where id_estudiante = ".$id_usuario." or id_docente = ".$id_usuario." and id_estado=1; ";  

echo $query;

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

<!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>-->
	<script>
		!window.jQuery && document.write('<script src="../recursos/fancybox/jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="../recursos/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../recursos/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="../recursos/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="../recursos/fancybox/style.css" />

<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/
			$('#calendar').fullCalendar({
			defaultDate: '<?php echo date('Y-m-d'); ?>',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
			<?php 	foreach($output as $posicion=>$jugador)	{ ?>		
				{
					title: '<?php echo $jugador['TITULO']; ?>',
					url: 'http://google.com/',
					start: '<?php echo $jugador['FECHA_INICIO']; ?>',
					end: '<?php echo $jugador['FECHA_FIN']; ?>'
				},
			<?php } ?>
			]
		});


			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			

			
		});
	</script>


<script>

	$(document).ready(function() {

		
		
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

	<div id='calendar'></div>

<ul>
		<li><a id="various1" href="#inline1" title="Lorem ipsum dolor sit amet">Inline</a></li>
		<li><a id="various2" href="ajax.txt">Ajax</a></li>
		<li><a id="various3" href="http://localhost/ideasplus/view/Cronograma.php">Iframe</a></li>
		<li><a id="various4" href="http://www.adobe.com/jp/events/cs3_web_edition_tour/swfs/perform.swf">Swf</a></li>
	</ul>


</body>



</html>
