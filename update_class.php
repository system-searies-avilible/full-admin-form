<?php
class update1
{
function list_update()
{
$connect=mysqli_connect("localhost","root","","educhamp");
$select=mysqli_query($connect,"select * from tbl_register");

$row=mysqli_fetch_array($select);
}	
function update2($id,$uname,$fname,$age,$course,$gender,$email,$phone_num,$pass,$add,$pic)
{
	$connect=mysqli_connect("localhost","root","","educhamp");
if(strlen($pic)>0){
	
$update=mysqli_query($connect,"update tbl_register set username='$uname',f_name='$fname',age='$age',course_c='$course',gender_y='$gender',email='$email',phone_number='$phone_num',password_pass='$pass',address='$add',image_f='$pic' where id='$id' ");


if($update){
echo"<script>alert('data Updated');</script>";
echo"<script>window.location.assign('index.php')</script>";
}
else{
echo"<script>alert('data not Updated');</script>";

}	

}
else{
echo"<script>alert('please select a image');</script>";	
}
}	
	
	
}

?>