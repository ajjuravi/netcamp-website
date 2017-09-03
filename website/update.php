<?php
$a=$_POST['id'];
mysql_connect("localhost","root","");
mysql_select_db("website");
$query="UPDATE student SET payment='Yes' WHERE id='$a'";
mysql_query($query);
echo "PAYMENT STATUS UPDATED";
?>