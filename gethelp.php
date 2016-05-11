<html>
<body>
<?php
$servername = "mysql11.000webhost.com";
$username = "a5220582_cuma";
$password = "sk123sk123";
$dbname = a5220582_cuma;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$first_name = mysqli_real_escape_string($conn, $_POST['fname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lname']);
$email_address = mysqli_real_escape_string($conn, $_POST['email']);
$phone_num = mysqli_real_escape_string($conn, $_POST['phone']);
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['pic']['tmp_name'])) {
$pic =addslashes(file_get_contents($_FILES['pic']['tmp_name']));
}else
{
	$pic = NULL;
}
}
$discription = mysqli_real_escape_string($conn, $_POST['disc']);
$helpers = mysqli_real_escape_string($conn, $_POST['help']);




$sql = "INSERT INTO gethelp VALUES ('$first_name','$last_name','$email_address','$phone_num'
,'$pic','$discription')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<center><h2>Data Submitted </br> You Will be redirected un 5 seconds</h2></center>" ;

header( "refresh:5;url=index.html" );

//mysql_close($conn);
?>
</body>
</html>
