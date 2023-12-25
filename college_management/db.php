<?php
$a=$_POST["u"];
$b=$_POST["p"];
$c=$_POST["s"];

$con=mysql_connect("localhost","root","");
mysql_select_db("leavedb");
mysql_query("insert into stu(u,p,s)
values('$a','$b','$c')");
echo("Registered Successfully");
include("sign.php");
mysql_close($con);
?>
