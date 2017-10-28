<?php
session_start();

$j3 = $_GET['rq3'];
if ($j3 != NULL) {
header("Location: index5xdmz.php");
}
$_SESSION['TL3'] = $_GET['rq3'];

?>
<head>
<title>
test
</title>
</head>
<body>
Question3

<form method="GET">
<input name="rq3" type="radio" value="1">1
<input name="rq3" type="radio" value="2">2
<input name="rq3" type="radio" value="3">3
<input name="rq3" type="radio" value="4">4
<input name="r3" type="submit" value="ok">
</form>


</body>