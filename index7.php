<?php
session_start();
?>


<title>
errors
</title>
<body>
My errors.<br>

<?php

if ($_SESSION['TL'] != 4) {
$lin1 = 1;
}
else {
 if ($_SESSION['TL2'] != 3) {
 $lin1 = 2;
 }
 else {
  if ($_SESSION['TL3'] != 2) {
  $lin1 = 3;
  }
  else {
   if ($_SESSION['TL4'] != 1) {
   $lin1 = 4;
   }
  }
 }
}


if ($_SESSION['TL2'] != 3 and $lin1 != 2) {
$lin2 = 2;
}
else {
 if ($_SESSION['TL3'] != 2 and $lin1 != 3) {
 $lin2 = 3;
 }
 else {
  if ($_SESSION['TL4'] != 1 and $lin1 != 4) {
  $lin2 = 4;
  }
 }
}


if ($_SESSION['TL3'] != 2 and $lin1 != 3 and $lin2 !=3) {
$lin3 = 3;
}
else {
 if ($_SESSION['TL4'] != 1 and $lin1 != 4 and $lin2 != 4) {
 $lin3 = 4;
 }
}


if ($_SESSION['TL4'] != 1 and $lin1 != 4 and $lin2 != 4 and $lin3 != 4) {
$lin4 = 4;
}

$ut = "Bla bla bla";
$nt = "Bla bla bla";



?>
<?php
if ($lin1 == NULL and $lin2 == NULL and $lin3 == NULL and $lin4 == NULL) {
echo "Bla bla bla";
}
?>
<font size = 30><b>
<?php
echo $lin1;
?></b></font>

<font color = red>
<?php
if ($lin1 != NULL) {
echo $ut;
}
if ($lin1 == 1) {
echo $_SESSION['TL'];
}
if ($lin1 == 2) {
echo $_SESSION['TL2'];
}
if ($lin1 == 3) {
echo $_SESSION['TL3'];
}
if ($lin1 == 4) {
echo $_SESSION['TL4'];
}
?>
</font>
<font color = green>
<?php
if ($lin1 !=NULL) {
echo $nt;
}
if ($lin1 == 1) {
echo 4;
}
if ($lin1 == 2) {
echo 3;
}
if ($lin1 == 3) {
echo 2;
}
if ($lin1 == 4) {
echo 1;
}
?>
</font>

<font size = 30><b>
<br><?php
echo $lin2;
?></b></font>

<font color = red>
<?php
if ($lin2 != NULL) {
echo $ut;
}
if ($lin2 == 1) {
echo $_SESSION['TL'];
}
if ($lin2 == 2) {
echo $_SESSION['TL2'];
}
if ($lin2 == 3) {
echo $_SESSION['TL3'];
}
if ($lin2 == 4) {
echo $_SESSION['TL4'];
}
?>
</font>
<font color = green>
<?php
if ($lin2 !=NULL) {
echo $nt;
}
if ($lin2 == 1) {
echo 4;
}
if ($lin2 == 2) {
echo 3;
}
if ($lin2 == 3) {
echo 2;
}
if ($lin2 == 4) {
echo 1;
}
?>
</font>

<font size = 30><b>
<br><?php
echo $lin3;
?></b></font>

<font color = red>
<?php
if ($lin3 != NULL) {
echo $ut;
}
if ($lin3 == 1) {
echo $_SESSION['TL'];
}
if ($lin3 == 2) {
echo $_SESSION['TL2'];
}
if ($lin3 == 3) {
echo $_SESSION['TL3'];
}
if ($lin3 == 4) {
echo $_SESSION['TL4'];
}
?>
</font>
<font color = green>
<?php
if ($lin3 !=NULL) {
echo $nt;
}
if ($lin3 == 1) {
echo 4;
}
if ($lin3 == 2) {
echo 3;
}
if ($lin3 == 3) {
echo 2;
}
if ($lin3 == 4) {
echo 1;
}
?>
</font>


<font size = 30><b>
<br><?php
echo $lin4;
?></b></font>

<font color = red>
<?php
if ($lin4 != NULL) {
echo $ut;
}
if ($lin4 == 1) {
echo $_SESSION['TL'];
}
if ($lin4 == 2) {
echo $_SESSION['TL2'];
}
if ($lin4 == 3) {
echo $_SESSION['TL3'];
}
if ($lin4 == 4) {
echo $_SESSION['TL4'];
}
?>
</font>
<font color = green>
<?php
if ($lin4 !=NULL) {
echo $nt;
}
if ($lin4 == 1) {
echo 4;
}
if ($lin4 == 2) {
echo 3;
}
if ($lin4 == 3) {
echo 2;
}
if ($lin4 == 4) {
echo 1;
}
?>
</font>





</b></font>


<a href="index6.php">back</a>




</body>