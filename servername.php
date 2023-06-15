<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
  die ("failed to connect".$conn);
}
else {
echo"succefully connected";

$firstname=$_POST['Firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql = "INSERT INTO contact (firstname, lastname, email, message)
VALUES ('$firstname', '$lastname', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
?>

