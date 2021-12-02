<!DOCTYPE HTML>
<html>
	<head>
		<title>Zad1 - Auti</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Antonio Jakšić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" href="style.css">
		
	</head>

    <body>       
	
	
	
        <?php
		
		
           function add($x, $y){
			$result = $x + $y;
			$text = .$x. ' + ' .$y. ' = ' .$result;
			return $text;
		   }
		   echo add(1,16);
		   echo add(4,16);
        ?>
    </body>    

</html>  