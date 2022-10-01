<?php
$id=$_GET['id'];
include"delete_class.php";
$dle=new delete1();
$dle-> connect();
$dle->delete2($id);

?>