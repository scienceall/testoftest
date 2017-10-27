<?php
session_start();

$j2 = $_GET['rq2'];
if ($j2 != NULL) {
header("Location: index4xcfje.php");
}
$_SESSION['TL2'] = $_GET['rq2'];

?>
<head>
<title>
test
</title>
</head>
<body>
Question2

<form method="GET">
<input name="rq2" type="radio" value="1">1
<input name="rq2" type="radio" value="2">2
<input name="rq2" type="radio" value="3">3
<input name="rq2" type="radio" value="4">4
<input name="r2" type="submit" value="ok">
</form>

</body>