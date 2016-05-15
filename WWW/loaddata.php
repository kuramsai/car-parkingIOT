<html>
<head>
  <title>IOT Car parking</title>
  <!--BootStrap CSS-->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!-- JS-->
  <link href="js/bootstrap.js" rel="stylesheet">

</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "sk123sk123";
    $dbname = 'test';
    $sno=0;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM lotdata";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $val = $row["status"];
            echo $val;
            if($val==1)
            {
              echo "<div class='box1'><h1>P1-Free</h1></div>";
            }
            else {
              echo "<div class='box0'><h1>P1-Full</h1></div>";
            }
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
  </body>
  </html>
