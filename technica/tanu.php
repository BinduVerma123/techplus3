<?php
error_reporting(0);
mysql_connect('localhost','root','');
mysql_select_db("ankita");
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['gender'];
//echo $gender;
$mob=$_POST['mobile'];
//echo $mob;
$dob=$_POST['dob'];
//echo $dob;
$mail=$_POST['email'];
//echo $mail;
$pass=$_POST['password'];
//echo $pass
$cpass=$_POST['cpassword'];
//echo $cpass;
$add=$_POST['address'];
$file_name=$_FILES['photo']['name'];
//echo $file_name;
$file_size=$_FILES['photo']['size'];

//echo $file_size;
$cap=rand(10000,99999);

if($pass==$cpass)
{if($file_size<=500000){
$query="insert into registrationas(name,fname,mobileno,email,pass,dob,gender,address,photo) values('$name','$fname','$mob','$mail','$pass','$dob','$add','$gender','$file_name')";
mysql_query($query);

	}
else{
	?>
	<script>
	alert("file size exceed");
	window.location.href="tanu.php"
	</script>
<?php
}
}

else{
?>
<script>
alert("password did not match");
window.location.href="tanu.php"</script><?php
}
?>
<html>
<head>

<style>
*{margin:0;
padding:0;
text-align:center;
 background-repeat:no-repeat;
 background-size:cover;
 }

#contact{margin-top:100px;
color:blue;
text transform:uppercase;
}
form{
margin-top:50px;
}
#forms{
border:none;
outline:none;
border-bottom:1px solid grey;
color:black;
font-size:18px;
margin-top:50;
}
</style>
</head>.
<body background="balloon.png">
<div id="contact">
<h1>
Say Hello
</h1>
<h2>
We Are Always Ready to Serve You!!!
</h2>
</div>
<div id="forms">
<form method="post" action="" enctype="multipart/form-data">
<fieldset>
<legend><font size="30px">Registration form</font></legend>
Name<input type="text" name="name" placeholder="your name" required/>
</br></br>
Father's Name<input type="text" name="fname" placeholder="father name" required/>
</br></br>
Date of Birth<input type="date" name="dob" placeholder="date of birth"/>
<br></br>
Select Gender</br></br>
<input type="radio" name="gender" value="male"/>Male
<input type="radio" name="gender" value="female"/>Female
</select>
</br></br>
Address:
<textarea name="address"></textarea>
</br></br>
Email<input type="email" name="email" placeholder="email"/>
</br></br>
Mobile<input type="number" name="mobile" placeholder="mobile"/>
</br></br>
Create Password<input type="password" name="cpassword"/>
</br></br>
Confirm Password<input type="password" name="password"/>
</br></br>
Upload photo:
<input type="file" name="photo"/>

<br></br>
<input type="submit" value="register"/>
<input type="reset" value="clear"/></fieldset>
</form></div>
</body>
</html>