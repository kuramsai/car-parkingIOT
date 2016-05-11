<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "sk123sk123";
$dbname = "mysql";

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
$discription = mysqli_real_escape_string($conn, $_POST['disc']);
$helpers = mysqli_real_escape_string($conn, $_POST['help']);




$sql = "INSERT INTO gethelp VALUES ('$first_name','$last_name','$email_address','$phone_num'
,'$discription','$helpers')";

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