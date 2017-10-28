<?php
session_start();
?>
<head>
<title>
total
</title>
</head>
<body>
TOTAL:<br><font color="blue" size="17">
<?php


if ($_SESSION['TL'] == 4) {
$i1 = 1;
}
else {
$i1 = 0;
}

if ($_SESSION['TL2'] == 3) {
$i2 = 1;
}
else {
$i2 = 0;
}

if ($_SESSION['TL3'] == 2) {
$i3 = 1;
}
else {
$i3 = 0;
}

if ($_SESSION['TL4'] == 1) {
$i4 = 1;
}
else {
$i4 = 0;
}
$I = $i1 + $i2 + $i3 + $i4;

$Nme = $_SESSION['Nm'];
$Oda = $_SESSION['Od'];

$dh = "localhost";
$du = "mysql";
$dp = "mysql";
$dn = "rrrrtttytyyyty";
$l = mysql_connect($dh, $du, $dp);

mysql_select_db($dn, $l);
$add = "insert into aiq(name, age, result) values('$Nme','$Oda','$I')";

mysql_query($add);
mysql_close($l);

?>THANK YOU&nbsp;<?php
echo $_SESSION['Nm'];?>,YOUR RESULT&nbsp;</font><font color="red" size="17">
<?php
echo $I;?></font><font color="green"><?php
echo $_SESSION['nm1'];
?></font>

</font>
<br>
My Error
<a href="index7.php">check errors</a>
</body>