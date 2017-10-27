<?php

$dh = "trtrtrtrtrthhhjj";
$du = "mysql";
$dp = "mysql";
$dn = "rryyuu";

$l = mysql_connect($dh, $du, $dp);

mysql_select_db($dn, $l);

$add = "insert into ttttrrrrtrttest(name, result) values('gue','100')";

mysql_query($add);

mysql_close($l);

?>