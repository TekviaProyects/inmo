<?php 
	$dir_subida = 'estate_data/';
	$image = $dir_subida . date('Y-m-d--H-i-s').basename($_FILES['image']['name']);
	$pdf = $dir_subida . date('Y-m-d--H-i-s').basename($_FILES['pdf']['name']);
	
	move_uploaded_file($_FILES['image']['tmp_name'], $image);
	move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf);
	
	error_reporting(E_ALL);
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	$conexion = ($_SERVER['SERVER_NAME'] == 'localhost') ? 
		new mysqli("localhost", "root", "", "inmo"): 
		new mysqli("localhost", "tc000457_inmo", "PEla06rapo", "tc000457_inmo");
	
	$sql = "INSERT INTO
				inmuebles(title, num_room, num_bathroom, levels, parking, surface, construction, description, image, pdf, price,
					address, type, lat, lng)
			VALUES('".$_POST['title']."', '".$_POST['num_room']."', '".$_POST['num_bathroom']."', '".$_POST['levels']."', 
			'".$_POST['parking']."', '".$_POST['surface']."', '".$_POST['construction']."', '".$_POST['description']."', 
			'".$image."', '".$pdf."', '".$_POST['price']."', '".$_POST['address']."', '".$_POST['type']."', '".$_POST['lat']."', 
			'".$_POST['lng']."')";
	$resp = mysqli_query($conexion, $sql);
	
	if (!$resp) {
		printf("Errormessage: %s\n", mysqli_error($conexion));
	}
	
	$conexion->close();
	
	echo json_encode($resp);
?>