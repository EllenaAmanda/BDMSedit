<?php
$name=$_POST['fullname'];
$number=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood'];
$address=$_POST['address'];
$conn=mysqli_connect("sql12.freesqldatabase.com","sql12671714","PkgXzm3Scs","sql12671714") or die("Connection error");
$sql= "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: https://bloodbankusu.azurewebsites.net/index.php");

mysqli_close($conn);
 ?>
