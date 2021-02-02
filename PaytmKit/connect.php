
<?php
$server="localhost:3308";
$username="root";
$password="";
$dbname="intern_db";

$conn = mysqli_connect($server, $username ,$password, $dbname);
if(!$conn){
    die('Could not Connect My Sql:'.mysqli_error(''));
 }
 

 if(isset($_POST['submit']))
{	 
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
     $location = $_POST['location'];
     $college = $_POST['college'];
     $email = $_POST['email'];
     $number = $_POST['number'];
     $status= $_POST['status'];

	 $sql = "INSERT INTO users (fname,lname,location,college,email,number,status)
	 VALUES ('$fname','$lname','$location','$college','$email','$number','$status')";
	 if (mysqli_query($conn, $sql)) {
		echo "Form Submitted successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
