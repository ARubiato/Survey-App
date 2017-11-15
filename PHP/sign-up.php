<?php
	include('connect.php');
		$con = mysqli_connect('localhost','personal','root') or die ("Failed to connect database" .mysqli_error());

		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];

		$query = "INSERT INTO 'name' ('Name', 'Email', 'Password')";

		$result = mysqli_query($query);

if($result) {
    
    echo = "Successfully created patient information"
} else {
    
die("ERROR: Failed to create" .mysql_error($con));
}
?>