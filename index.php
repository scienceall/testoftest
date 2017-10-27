<?php
session_start();
$nmq = mt_rand(1, 3);
if ($_GET['F3'] == NULL) {
$_SESSION['nm1'] = $nmq;
}
else {
$_SESSION['nm1'] != $nmq;
}
$_SESSION['Nm'] = $_GET['F1'];
$_SESSION['Od'] = $_GET['F2'];
$_SESSION['Sx'] = $_GET['Fr1'];
$Qn1 = $nmq;

if ($Qn1 == 1) {
$Qn = "Bla bla bla";
}
if ($Qn1 == 2) {
$Qn = "Bla bla bla";
}
if ($Qn1 == 3) {
$Qn = "Bla bla bla";
}

if ($_SESSION['nm1'] == 1) {
$NN = "Bla bla bla";
}
if ($_SESSION['nm1'] == 2) {
$NN = "Bla bla bla";
}
if ($_SESSION['nm1'] == 3) {
$NN = "Bla bla bla";
}




if ($NN == $_GET['F3'] and $_GET['F1'] != NULL) {
header("Location: index2xplh.php");
}
else {
 if ($_GET['FR'] == ok and $_GET['F3'] == NULL) {
 header("Location: index.php");
 $_SESSION['chwd'] = "Bla bla bla";

 }

if ($_GET['F3'] != NULL and $_GET['F3'] != $NN and $_GET['F1'] != NULL) {
header("Location: index.php");
$_SESSION['chwd'] = "Bla bla bla";
}
else {
   if ($_GET['FR'] == ok and $_GET['F1'] == NULL) {
   $_SESSION['chwd'] = "Bla bla bla";
     }
    
}
}





?>
<head>
<title>
Start
</title>
</head>
<body>
<font color = red>
<?php
echo $_SESSION['chwd'];
?>
<br>
<?php
echo $_SESSION['chwd2'];
?>

</font>

<form method="GET">
<input name="F1" type="text" value="">enter your name.<br><br>
<input name="F2" type="text" value="">how old are you?<br><br><br>
your sex:
<input name="Fr1" type="radio" value="0">F
<input name="Fr1" type="radio" value="1">M<br><br><br>
<input name="F3" type="text" value=""><?php echo $Qn ?><br><br>
<input name="FR" type="submit" value="ok">
</form>
</body>