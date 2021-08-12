<?php 
include('connect.php');
$flag=0;

if(isset($_POST['submit']))
{
	foreach ($_POST['attendance_status'] as $id => $attendance_status) {
		# code...
		$id=$_POST['id'][$id];
		$student_name=$_POST['student_name'][$id];
		$student_roll=$_POST['student_roll'][$id];
		$class=$_POST['class'][$id];
		//$attendance_status=$_POST['attendance_status'][$id];
		$date=date("Y-m-d H:i:s");
 
			$result=mysqli_query($conn,"insert into
			 student_attendance(id,student_name,student_roll,class,attendance_status,date)

			values('$id','$student_name','$student_roll','$class','$attendance_status','$date')");

			if($result){
				$flag=1;
			}


	}


}



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Attendance</title>
</head>
<body>
	<a href="teachers_profile.php" class="active">Home</a>
<?php if($flag==1){ ?>
<div><strong>Attendance data inserted successfully</strong></div>
 
<?php } ?>
<h2>Today's Date: <div><?php echo date("d-m-y"); ?></div></h2>


 <form action="student_attendance.php" method="post">
 	
<table border="2">
	<tr>
	<th>Student Serial Number</th>
	<th>Student Id</th>
	<th>Student Name</th>
	<th>Student Roll</th>
	<th>Class</th>
	<th>Attendance Status</th>
	</tr>
<?php $result=mysqli_query($conn,"select * from student_attendance"); 
$serialnumber=0;
$counter=0;
while($row= mysqli_fetch_array($result)){
	
$serialnumber++;

 ?>
<tr>
	<td><?php echo $serialnumber; ?> </td>
	<td><?php echo $row['id']; ?> </td>
	<input type="hidden" name="id[]" value="<?php $row['id']; ?>">
	<td><?php echo $row['student_name']; ?> </td>
	<input type="hidden" name="student_name[]" value="<?php $row['student_name']; ?>">
	<td><?php echo $row['student_roll']; ?> </td>
	<input type="hidden" name="student_roll[]" value="<?php $row['student_roll']; ?>">

	<td><?php echo $row['class']; ?> </td>
	<input type="hidden" name="class[]" value="<?php $row['class']; ?>">

	<td><input type="checkbox" name="attendance_status[<?php $counter; ?>]" value="present">Present
	<input type="checkbox" name="attendance_status[<?php $counter; ?>]" value="absent">Absent</td>
	</tr>

<?php
$counter++;

 } ?>




</table>

<input type="submit" name="submit" value="submit">


 </form>


</body>
</html>