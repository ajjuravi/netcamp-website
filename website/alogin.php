<?php
$a=$_POST['email'];
$b=$_POST['passwd'];
if( $a==admin || $b==admin)
{
    echo "WELCOME ADMIN";
}
else
	die("INVALID ADMIN LOGIN");
?>
<html>
<head>
    <title>Welcome To Netcamp Admin Page</title>
</head>
<body>
<center>
    <div align="right"><p><a href="home.php">Logout</a></p></div>
    <h1>ADMINISTRATOR PAGE</h1>
	
	<form method="POST" action="update.php">
	Registration_Id:
    <input type="text" name="id" size="10"> <br> <br>
	<input type="submit" value="UPDATE PAYMENT STATUS=YES for above Registration_Id">
	</form>
	<br>
	<hr>
	<?php
mysql_connect("localhost","root","");
mysql_select_db("website");
$query="SELECT * FROM student";
$result=mysql_query($query);
while ($row=mysql_fetch_array($result,MYSQL_NUM))
{
	echo "Registration Id: ", $row[14];echo "<br>";
	echo "Payment Status: ", $row[15];echo "<br>";
	echo "First Name: ", $row[0];echo "<br>";
	echo "Last Name: ", $row[2];echo "<br>";
	echo "Sex: ", $row[3];echo "<br>";
	echo "Date of Birth: ", $row[4];echo "<br>";
	echo "Father's Name: ", $row[5];echo "<br>";
	echo "Address: ", $row[6];echo "<br>";
	echo "Mobile: ", $row[7];echo "<br>";
	echo "College Name: ", $row[9];echo "<br>";
	echo "Branch: ", $row[10];echo "<br>";
	echo "Semester: ", $row[11];echo "<br>";
	echo "Email: ", $row[12];echo "<br>";
	echo "<br>";
	}
mysql_free_result($result);
?>
</center>
    </body>
</html>