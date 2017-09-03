<html>
<center>
<br><br><br>
<?php
$name=$_POST['Id'];
$passwd=$_POST['Password'];
if($name==""||$passwd=="")
echo "All mandatory field values are not filled....!!! Try again";
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("netcamp");
	$query="SELECT * FROM STUDENT WHERE id='$name' AND password='$passwd'";
	$result=mysql_query($query);
	
	while($rows=mysql_fetch_array($result))
	{
		if($rows["id"]==$name && $rows ["password"]==$passwd)
		{
			echo "your details are:";
			echo "<br>";
			echo "NAME:".$rows["id"];echo"<br>";
			echo "LOGIN ID:".$rows["id"];echo"<br>";
			echo "PHONE NO:".$rows["phone"];echo"<br>";
		}
		else
		echo "wrong username or password........try Again";
	}
}
?>