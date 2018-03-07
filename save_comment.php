<?php 
	error_reporting(E_ALL);
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	$date = $resp['date'] = date('Y-m-d H:i:s');
	$conexion = ($_SERVER['SERVER_NAME'] == 'localhost') ? 
		new mysqli("localhost", "root", "", "inmo"): 
		new mysqli("localhost", "tc000457_inmo", "PEla06rapo", "tc000457_inmo");
	
	$sql = "INSERT INTO
				comments(blog_id, name, mail, date, comment)
			VALUES('".$_POST['blog_id']."', '".$_POST['name']."', '".$_POST['mail']."', '".$date."', 
					'".$_POST['comment']."')";
	$resp['result'] = mysqli_query($conexion, $sql);
	
	if (!$resp) {
		printf("Errormessage: %s\n", mysqli_error($conexion)."---------".$sql);
	}
	
	$conexion->close();
	
	echo json_encode($resp);
?>