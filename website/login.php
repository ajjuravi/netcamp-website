<html>
<head>
    <title>Welcome To Netcamp Login Page</title>
</head>
<body>
<center>
    <div align="right"><p><a href="home.php">Logout</a></p></div>
    <h1>USER LOGIN PAGE</h1>
	<br>
	<hr>
	<?php
$a=$_POST['email'];
$b=$_POST['passwd'];
if ( $a=="" || $b=="")
{
	echo "Either Username or Password is Empty";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("website");
$query="SELECT * FROM student WHERE email='$a' AND passwd='$b'";
$result=mysql_query($query);
while ($row=mysql_fetch_array($result,MYSQL_NUM))
{
	echo "Welcome -  ", $row[0];echo "<br><br>";
	echo "Registration Id: ", $row[14];echo "<br>";
	echo "Payment Status: ", $row[15];echo "<br>";
	echo "First Name: ", $row[0];echo "<br>";
	echo "Middle Name: ", $row[1];echo "<br>";
	echo "Last Name: ", $row[2];echo "<br>";
	echo "Sex: ", $row[3];echo "<br>";
	echo "Date of Birth: ", $row[4];echo "<br>";
	echo "Father's Name: ", $row[5];echo "<br>";
	echo "Address: ", $row[6];echo "<br>";
	echo "Mobile: ", $row[7];echo "<br>";
	echo "Alternate Mobile: ", $row[8];echo "<br>";
	echo "College Name: ", $row[9];echo "<br>";
	echo "Branch: ", $row[10];echo "<br>";
	echo "Semester: ", $row[11];echo "<br>";
	echo "Email: ", $row[12];echo "<br>";
	echo "Password: ", $row[13];echo "<br>";
	echo "<br>";
}
$num_rows = mysql_num_rows($result);
if($num_rows==0)
{
	echo "Either Email or Password is incorrect";
}
}
?>
</center>
</body>
</html>