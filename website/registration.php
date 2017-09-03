<html>
<head>
<title>NETCAMP REGISTRATION PAGE</title>
</head>
<body>
<center>
<form method="POST" action="dataentry.php">
<h1><u><font color="blue">NETCAMP REGISTRATION</font></u></h1>

<br><fieldset>
<u><b><legend> Personal Details</legend></b></u><br>
First Name: <font color="red">*</font> <input type="text" name="fname" size="30" placeholder="Enter Your First Name"><br><br>
Middle Name: <input type="text" name="mname" size="30"placeholder="Enter your Middle Name"><br><br>
Last Name:<font color="red">*</font> <input type="text" name="lname" size="30"placeholder="Enter your Last Name"><br><br>
Sex: <font color="red">*</font><input type="radio" name="sex" value="male" checked> Male <input type="radio" name="sex" value="female"> Female <br> <br>
Date of Birth: <font color="red">*</font> <input type="date" name="bday"><br><br>
Father's Name:<font color="red">*</font> <input type="text" name="fthname" size="30" placeholder="Enter your Father's Name"><br><br>
Permanent Address: <font color="red">*</font> <textarea name="addr" rows="3" cols="20"> </textarea><br><br>
Mobile Number:<font color="red">*</font> <input type="text" name="mob" size="20" placeholder="Enter your Mobile Number"><br><br>
Alternate Mobile Number: <input type="text" name="amob" size="30" placeholder="Enter your Alternate Mobile Number"><br><br>
</fieldset>
<br>
<fieldset>
<u><b><legend>Academic Details</legend></b></u> <br> 
College:<font color="red">*</font> <input type="text" name="college" size="30" placeholder="College in which you are currently studying"><br><br>
Branch: <font color="red">*</font> <input type="text" name="branch" size="30" placeholder="Enter your Department/Branch/Stream/Trade"><br><br>
Semester: <font color="red">*</font><input type="text" name="sem" size="30" placeholder="Enter your current undergoing semester"><br><br>
</fieldset>
<br>
<fieldset>
<u><b><legend>Login Details </legend></b></u><br> 
Email id: <font color="red">*</font> <input type="text" name="email" size="30" placeholder="Enter your Email_id"><br><br>
Password: <font color="red">*</font> <input type="password" name="passwd" size="30" placeholder="Set your password"><br><br> 
</fieldset><br>
<input type="submit" value="Submit"> <input type="reset" value="Reset"><br><br>
</form>

<h4><i>"Note: Fields marked with <font color="red">*</font> are mandatory"</i></h4>
</center>
</html>