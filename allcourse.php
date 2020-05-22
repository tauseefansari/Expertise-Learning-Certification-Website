<option value="">- Select Course -</option>
<?php
	require 'config.php';
	$name = $_GET['name'];
	$query = "SELECT * FROM tblapplied INNER JOIN tblstudent ON tblapplied.StudentId=tblstudent.ID WHERE tblstudent.ID=$name AND tblapplied.Progress=100";
	$table = mysqli_query($con,$query);
	for($x=0;$x<mysqli_num_rows($table);$x++)
	{
		$query2=mysqli_fetch_assoc($table);
		$cour=$query2['Subject'];
		echo '<option value="'.$cour.'">'.$cour.'</option>';							
	}
?>