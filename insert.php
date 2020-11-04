<?php 
		$con = mysqli_connect("127.0.0.1", "root", "", "firstproject");
		$query_text = "SELECT * FROM firstproject";
		$query = mysqli_query($con, $query_text);
		mysqli_query($con, "INSERT INTO firstproject (title, description, img, price) 
		VALUES ('{$_GET['title']}', '{$_GET['description']}', '{$_GET['img']}', '{$_GET['price']}')");
		header( 'Location: http://firstproject/index.php', true, 301 );
	 ?>
