



<?php
include("connect.php");

?>

<!--youtube video: htts://www.youtube.com/watch?v=GS1edGcflcY -->

<!DOCTYPE HTML>


<!--	Licensed to Educo International School	-->



<html>

	<head>
		<title>Educo International School</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel='icon' href="images/logo.png"/>

	</head>


	<body>


		<!-- Header -->
			<!-- Header -->
			<header id="header">
				<div class="logo"> <a href="" title="Homepage"> <img src="images/logo.png" alt="Educo International School"/><span></span></a></div>


<ul class="sp-megamenu-parent menu-rotate hidden-sm hidden-xs">
	<li class=""><a  href="admin_profile.php"  >Home</a></li>
	<li class="sp-menu-item sp-has-child">
		<a  href="add.php"  >Insert</a><div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;"><div class="sp-dropdown-inner">
			<ul class="sp-dropdown-items">

				<li class="sp-menu-item"><a  href="addteacher.php.php"  >Add teacher </a></li>
				<li class="sp-menu-item"><a  href="addstudent.php"  >Add student</a></li></ul></div></div></li>

<li class="sp-menu-item sp-has-child"><a  href="search.php"  >Srarch</a><div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;"><div class="sp-dropdown-inner">
					<ul class="sp-dropdown-items"><li class="sp-menu-item"><a  href="studentsearch.html"  >Search Student</a></li>
						<li class="sp-menu-item"><a  href="teachersearch.html" >Search teacher</a></li></ul></div></div></li>

						<li class="sp-menu-item current-item active"><a  href="delete.php"  >Delete</a></li>

				<li class="sp-menu-item"><a  href="admin_validate.php"  >Logout</a></li>


						</div>




			</header>



			<section id="main">
				<div class="inner">

















<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">


				<?php
				$conn= mysqli_connect("localhost","root","","educo");
				if(isset($_POST['search'])){
					$searchKey= $_POST['search'];
					$sql= "SELECT * FROM uname WHERE usname LIKE '%$searchKey%'";
				}else{


				$sql= "SELECT * FROM uname";
				$searchKey="";

				}

				if(isset($_POST['delete'])){
					$key= $_POST['delete'];
					$sql= "DELETE FROM uname WHERE usname LIKE'$key'";
					$result= mysqli_query($conn,$sql);


				}





				$result= mysqli_query($conn,$sql);


				?>


				<form action="" method="POST">


					<div class="col-md-6">
						<input type="text" name="delete" class='form-control' placeholder="Search By Name" value="" >
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Delete</button>
					</div>

				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>User name</th>
						<th>Pass</th>
						<th>class</th>
						<th>Roll</th>

					</tr>

					<?php while($row = mysqli_fetch_object($result)) { ?>


					<tr>
						<td><?php echo $row->usname ?></td>
						<td><?php echo $row->pass ?></td>
						<td><?php echo $row->class ?></td>
						<td><?php echo $row->roll ?></td>


					</tr>
					 <?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>








<?php
//connect with mysql
$con=mysqli_connect("localhost","root","","educo");
$name=$_POST["delete"];
//mysqli_select_database($con,);
//select query

$sql="DELETE FROM uname WHERE usname LIKE '$name' ";
//Execute the query

//$sql = "DELETE FROM MyGuests WHERE id=3";
if (mysqli_query($con, $sql)) {
echo "Record deleted successfully";

} else {
echo "Error deleting record: " . mysqli_error($con);

}
?>
