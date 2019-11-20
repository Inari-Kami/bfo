<?php

$x = 0;
$y = 0;
if (isset($_GET['x'])&& is_numeric($_GET['x'])) {
    $x = $_GET['x'];
}
if (isset($_GET['y'])&& is_numeric($_GET['y'])) {
    $y = $_GET['y'];
}

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$z = $x * $y;
?>
<form>
    <input type="number" name="x">
	<input type="number" name="y">
	<input type="submit">
</form>

<?php
echo $z
?>

</body>
</html>