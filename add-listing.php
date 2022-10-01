<?php
session_start();
isset($_SESSION['email'])or die (header('location: ../login.php'));
include"head.php";
include"nav.php";
include"sidebar.php";

include "update_class.php";
$upd=new update1();
$upd->list_update();
$id=$_GET['id'];
$connect=mysqli_connect("localhost","root","","educhamp");
$select=mysqli_query($connect,"select * from tbl_register where id='$id' ");

$row=mysqli_fetch_array($select);
if(isset($_POST['btn_upd'])){
    $uname=$_POST['txtname'];
	$fname=$_POST['txtfname'];
	$age=$_POST['txtage'];
	$course=$_POST['txtcourse'];
	$gender=$_POST['txtgen'];
	$email=$_POST['txtemail'];
	$phone_num=$_POST['txtnum_phone'];
	$pass=$_POST['txtpass1'];
	$pass=md5($pass);
	$add=$_POST['txtadd'];
        $pic=$_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'],'../newpic/'.$pic);
$upd->update2($id,$uname,$fname,$age,$course,$gender,$email,$phone_num,$pass,$add,$pic);	
	
	
}
?>

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Update your account information</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>UPDATE</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>UPDATE</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Basic info</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Username</label>
										<div>
											<input class="form-control" type="text" name="txtname" value="<?php echo $row[1]; ?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Father name</label>
										<div>
											<input class="form-control" type="text" name="txtfname" value="<?php echo  $row[2]; ?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Age</label>
										<div>
											<input class="form-control" type="text" name="txtage" value="<?php echo  $row[3]; ?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Course name</label>
										<div>
											<input class="form-control" type="text" name="txtcourse" value="<?php echo  $row[4]; ?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Gender</label>
										<div>
											<input class="form-control" type="text" name="txtgen" value="<?php  echo $row[5]; ?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Email</label>
										<div>
											<input class="form-control" type="email" name="txtemail" value="<?php  echo $row[6]; ?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Phone number</label>
										<div>
											<input class="form-control" type="number" name="txtnum_phone" value="<?php  echo $row[7]; ?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Password</label>
										<div>
											<input class="form-control" type="password" name="txtpass1" value="<?php echo $row[8]; ?>">
										</div>
									</div>
									
									<div class="seperator"></div>
									
									
									<div class="form-group col-12">
										<label class="col-form-label">Address</label>
										<div>
											<textarea class="form-control" name="txtadd" value="<?php echo $row[9]; ?>"> </textarea>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Image</label>
										<div>
											<input class="form-control" type="file" name="img" value="<?php echo  $row[10]; ?>">
										</div>
									</div>
									
									<div class="col-12">
										
										<button type="submit" class="btn" name="btn_upd">Save changes</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='assets/vendors/scroll/scrollbar.min.js'></script>
<script src="assets/js/functions.js"></script>
<script src="assets/vendors/chart/chart.min.js"></script>
<script src="assets/js/admin.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
<script>
// Pricing add
	function newMenuItem() {
		var newElem = $('tr.list-item').first().clone();
		newElem.find('input').val('');
		newElem.appendTo('table#item-add');
	}
	if ($("table#item-add").is('*')) {
		$('.add-item').on('click', function (e) {
			e.preventDefault();
			newMenuItem();
		});
		$(document).on("click", "#item-add .delete", function (e) {
			e.preventDefault();
			$(this).parent().parent().parent().parent().remove();
		});
	}
</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>