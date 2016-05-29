<html>
<head>
  <title>IOT Car parking</title>
  <!--BootStrap CSS-->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style-1.css" rel="stylesheet">
  <!-- JS-->
  <link href="js/bootstrap.js" rel="stylesheet">

</head>
<body>

    <div class="mid">
      <div class='vbox0'><p>P7-Full</p></div>
  	<div class='vbox1'><p>P6-Free</p></div>
  	<div class='vbox0'><p>P5-Full</p></div>
    </div>

    <div class="left">
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
                  if($val==1)
                  {
                    echo "<div class='box1'><h1>P3-Free</h1></div><div class='counter'><p class='center'>count</p><br>
                    <p class='center'> 5</p></div>";
                  }
                  else {
                    echo "<div class='box0'><h1>P3-Full</h1></div><div class='counter'><p class='center'>count</p><br>
                    <p class='center'> 4</p></div>";
                  }
              }
          } else {
              echo "0 results";
          }
          $conn->close();
          ?>
    <div class='box1'><p>P2-Free</p></div>
    <div class='box0'><p>P1-Full</p></div>

    </div>

    <div class="right">
    <div class='box1'><p>P9-Free</p></div>
    <div class='box1'><p>P10-Free</p></div>
    <div class='box0'><p>P11-Full</p></div>

    </div>
    <div class="up">
      <h2 class="center">----------Entry---------------Exit----------</h2>
    </div>
  </body>
  </html>
