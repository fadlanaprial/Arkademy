<?php
switch($_GET['mode']){
	case "tambah":
		echo tambah_form();
	break;
	case "edit":
		echo edit_form();
	break;
	case "hapus":
		echo hapus_data();
	break;
}
function tambah_form(){
require "config.php";
	$username=$_POST['username'];
	$pass=$_POST['skill'];
	
	$sql=mysqli_query($koneksi,"insert into data_profile (username,skill) values ('$username','$skill')");
	echo "<script>window.location='index.php'</script>";
}

function edit_form(){
	require "config.php";
	$username=$_POST['username'];
	$skill=$_POST['skill'];
	
	$sql=mysqli_query($koneksi,"update data_profile set username='$username',skill='$skill' where username='$username','$skill'");
	echo "<script>window.location='index.php'</script>";
}

function hapus_data(){
	require "config.php";
	$username=$_GET['username'];
	$sql=mysqli_query($koneksi,"delete from data_profile where username='$username'");
	echo "<script>window.location='index.php'</script>";
}
?>