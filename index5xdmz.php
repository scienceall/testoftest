<?php
session_start();

$j4 = $_GET['rq4'];
if ($j4 != NULL) {
header("Location: index6.php");
}
$_SESSION['TL4'] = $_GET['rq4'];

?>
<head>
<title>
test
</title>
</head>
<body>
Question4

<form method="GET">
<input name="rq4" type="radio" value="1">1
<input name="rq4" type="radio" value="2">2
<input name="rq4" type="radio" value="3">3
<input name="rq4" type="radio" value="4">4
<input name="r4" type="submit" value="ok">
</form>


</body>