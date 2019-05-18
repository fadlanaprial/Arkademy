<?php
require "config.php";
if($_GET['mode']=="edit"){
	$username_text=$_GET['username'];
	$sql=mysqli_query($koneksi,"select * from data_profile where username='$username_text'");
	$r=mysqli_fetch_assoc($sql);
	$username=$r['username'];
	$skill=$r['skill'];
	
	$execute="edit";
}else{
	$username=$r['username'];
	$skill=$r['skill'];
	$execute="tambah";
}
?>
<html>
<head>
	<title>data programmers dan skills</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>


</head>
<body>
	<?php
		$sql=mysqli_query($koneksi,"select *from data_profile");
		while($r=mysqli_fetch_assoc($sql)){
	?>

<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			
			<form method="post" action="proses.php?mode=<?php echo $execute?>">
		<tr>
				<th>Username: <input type="text" name="username" value="<?php echo $username?>"></th>
		
	
		<th><button class="btn btn-primary">submit</button></th>
	</tr>
	</form>

</table>
</div>


<div class="container">
		<div class="jumbotron">
<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<form method="post" action="proses.php?mode=<?php echo $execute?>">

			<tr>
					<th><?php echo $r['username']?></th>
					<th>Skill: <input type="text" name="skill" value="<?php echo $skill?>" ></th>
					<th><button class="btn btn-primary">submit</button></th>			
				</tr>
<tr>

<td><?php echo $r['skill']?>
</td></tr>

<?php
	}
	?>
</table>
</div>
</div>

</body>
</html>