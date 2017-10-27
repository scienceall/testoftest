<?php
session_start();



$j = $_GET['rq1'];
if ($j != NULL) {
header("Location: index3xwyn.php");
}
$_SESSION['TL'] = $_GET['rq1'];


?>
<head>
<title>
test
</title>
</head>
<body>
Question1

<form method="GET">
<input name="rq1" type="radio" value="1">1
<input name="rq1" type="radio" value="2">2
<input name="rq1" type="radio" value="3">3
<input name="rq1" type="radio" value="4">4
<input name="r1" type="submit" value="ok">
</form>


</body>