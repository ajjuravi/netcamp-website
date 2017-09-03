<html>
<head>
<title>
User Login Page
</title>
</head>
<body>
<center><h1><u>USER LOGIN PAGE</u></h1></center>
<hr>
<h3>
You are still <b><font color="red">not confirmed </font></b>for the program. To confirm your seat please deposit the fee in our bank account or do online transfer or send the fee as Demand Draft.
Your registration would get confirmed by payment of the registration fee of Rs.3000.<br>
<br>
Netcamp Solutions Private Limited<br>
P-130 Lake Terrace,<br>
Ground Floor,<br>
Kolkata - 700 029<br>
West Bengal, India.<br>
+91 93310 90003<br>
+91 93314 90003<br></h3>
</font>
<center>
    <div align="right"><p><a href="home.php">Logout</a></p></div>
    <h1>YOUR LOGIN DETAILS</h1>
	<?php
mysql_connect("localhost","root","");
mysql_select_db("website");
$query="SELECT * FROM student WHERE email='$email'";
$result=mysql_query($query);
while ($row=mysql_fetch_array($result,MYSQL_NUM))
{
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
	echo "Mobile: ", $row[8];echo "<br>";
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