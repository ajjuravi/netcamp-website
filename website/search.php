<html>
<title>
Password Finding Page
</title>
<body>
<center><br><br>
<h3>
<?php
$a=$_POST['email'];
if ( $a=="")
{
	echo "Email is Empty";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("website");
$query="SELECT * FROM student WHERE email='$a'";
$result=mysql_query($query);
while ($row=mysql_fetch_array($result,MYSQL_NUM))
{
	echo "Registration Id: ", $row[14];echo "<br>";
	echo "First Name: ", $row[0];echo "<br>";
	echo "Email: ", $row[12];echo "<br>";
	echo "Password: ", $row[13];echo "<br>";
	echo "<br>";
}
$num_rows = mysql_num_rows($result);
if($num_rows==0)
{
	echo "Sorry, This Email_id is not registered with us";
}
}
?>
</h3>
</body>
</html>