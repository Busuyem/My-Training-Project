<?php
include 'include/db.php';
include 'index.php';


?>

<?php
if(isset($_POST['submit'])){
	$full_name=mysqli_real_escape_string($con, $_POST['full_name']);
	$time_arrived=mysqli_real_escape_string($con,$_POST['time_arrived']);
	$time_closed=mysqli_real_escape_string($con,$_POST['time_closed']);


	if(empty($full_name) || empty($time_arrived) || empty($time_closed)){

		echo "<p>All fields must be supplied</p>";
	}else{

	$sql="INSERT INTO users (full_name,time_arrived,time_closed) Values ('$full_name', '$time_arrived','$time_closed')";

	$result=mysqli_query($con, $sql);


if($result){

	echo "Your record has been successfully taken. Thanks.";
}else{
	echo "Data fail to connect";
}
}
}
?>

<table border="2px solid grey">
	<thead>
		<tr>
			<td>S/N</td>
			<td>Full Name</td>
			<td>Arrival Time</td>
			<td>Closing Time</td>
			<td>delete</td>
			<td>edit</td>
		</tr>
	</thead>

<?php
$sql="SELECT * FROM users";
$query=mysqli_query($con, $sql);

	while($row=mysqli_fetch_assoc($query)){?>
	<tbody>
	<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['full_name'];?></td>
	<td><?php echo $row['time_arrived'];?></td>
	<td><?php echo $row['time_closed'];?></td>
	<td><a href="action.php?delete=<?php echo $row['id'];?>">del</a></td>
	<td><a href="action.php?update=<?php echo $row['id'];?>">update</a></td>
	</tr>
<?php };?>

<?php
if(isset($_GET['id'])){

	$id=$_GET['id'];

	$del="DELETE FROM users WHERE id=$id";
	mysqli_query($con, $del);

	$up="UPDATE users SET 
	full_name='$full_name',
	time_arrived='$time_arrived',
	$time_closed='$time_closed' WHERE id=$id";

	$upq=mysqli_query($con, $up);



	?>

	<table border="2px solid grey">
	<thead>
		<tr>
			<td>S/N</td>
			<td>Full Name</td>
			<td>Arrival Time</td>
			<td>Closing Time</td>
			<td>delete</td>
			<td>edit</td>
		</tr>
	</thead>
	 
	<tbody>
	<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['full_name'];?></td>
	<td><?php echo $row['time_arrived'];?></td>
	<td><?php echo $row['time_closed'];?></td>
	<td><a href="action.php?delete=<?php echo $row['id'];?>">del</a></td>
	<td><a href="action.php?update=<?php echo $row['id'];?>">update</a></td>
	</tr>
<?php };?>

</tbody>
</table>



