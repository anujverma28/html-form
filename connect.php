<?php
$GLOBALS["msg"] = "Congratulations!!" ;
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
if (!empty($name)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "UCD@upes1";
$dbname = "ucd";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO DATA (name, email)
values ('$name', '$email')";
if ($conn->query($sql)){
echo '<center><h1>' . $GLOBALS["msg"] . '</h1>You are subscribed to UCD</center>';	
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "name should not be empty";
die();
}
}
else{
echo "email should not be empty";
die();
}
?>
