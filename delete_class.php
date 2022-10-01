<?php
class delete1
{
function connect()
{
$connect=mysqli_connect("localhost","root","","educhamp");

}	
function delete2($id)
{
	$connect=mysqli_connect("localhost","root","","educhamp");
	$delete=mysqli_query($connect,"delete from tbl_register where id='$id' ");
	if($delete){
echo"<script>alert ('delete sucessfully');</script>";		
echo"<script>window.location.assign ('../login.php');</script>";		
		
	}
else{
	echo"<script>alert ('Error in deleting process');</script>";		
	
}

}	
	
}



?>