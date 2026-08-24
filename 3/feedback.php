/* 1) Create feedback form with given fields like
id,
username,
email,
feedback_message
and once user submit it, should be added to feedback table in database */

<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'college';


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$usname=$_POST['usn'];
	$email=$_POST['em'];
	$fdm=$_POST['fdm'];
	

}
$sql = "INSERT INTO feedback (username, email, feedback_message)
VALUES ('$usname', '$email', '$fdm')";

echo $sql;
if (mysqli_query($conn, $sql)) {
  header("Location:index.html");
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>