<?php
$a=$_POST['fname'];
$b=$_POST['mname'];
$c=$_POST['lname'];
$d=$_POST['sex'];
$e=$_POST['bday'];
$f=$_POST['fthname'];
$g=$_POST['addr'];
$h=$_POST['mob'];
$i=$_POST['amob'];
$j=$_POST['college'];
$k=$_POST['branch'];
$l=$_POST['sem'];
$m=$_POST['email'];
$n=$_POST['passwd'];
if( $a=="" || $c=="" || $d=="" || $e=="" || $f=="" || $g=="" || $h=="" || $j=="" || $k=="" || $l=="" || $m=="" || $n=="")
{
	echo "All mandatory fields values are not filled.....! Try again";
}
	else
{
mysql_connect("localhost","root","");
mysql_select_db("website");
$query="INSERT INTO student(fname,mname,lname,sex,bday,fthname,addr,mob,amob,college,branch,sem,email,passwd) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
$result=mysql_query($query);
if(!$result)
{
echo "query error";
echo "$query";
}
else
echo "Thankyou for registering........!!!!";
}
?>