<?php
<!DOCTYPE html>
<html>
	<head>
		<title>Zad - Cars</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Antonio Jakšić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" href="style.css">
		
	</head>

    <body>       
	<div id="ispis">
	</div>
	
	<script>
	/*	fetch("cars.json")
			.then(response => response.json())
			.then(data => {
				console.log(data.Name)
				document.querySelector("#ispis").innerText = data.Name
			})
			*/
			
	</script>
	
	foreach($characters as $character){
		echo 'p' .$character->name . '<span style="font-style:italic">' .$character->year . '</span></p>';
	}
	
      
    </body>    

</html>  
?>