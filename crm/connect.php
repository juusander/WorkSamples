
<?php
$con = mysql_connect("localhost","root","");
mysql_set_charset('utf8',$con);

if (!$con)
{
         die('Could not connect: ' . mysql_error());
}

mysql_select_db("crm", $con);
?>