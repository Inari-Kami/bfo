<?php
<<<<<<< HEAD
	$name = " ";
	if (isset($_GET['name'])){
		$name = $_GET['name'];
	}
=======
	$name = "Inari";
>>>>>>> ea7fe2119f3e6ecbdd6af7261e34fba7b4c6cfbe
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php
	echo "<h1>Hallo ".$name."</h1>";
	?>
	<form>
		<input type="text" name="name">
		<input type="submit">
	</form>
</body>
</html>
