<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sai Kiran">

    <title>CuMa - Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    	function show(nr) {
        document.getElementById("table1").style.display="none";
      document.getElementById("table2").style.display="none";
      /*  document.getElementById("table3").style.display="none";
    		document.getElementById("table4").style.display="none";
    		document.getElementById("table5").style.display="none";*/
        document.getElementById("table"+nr).style.display="block";
    }
    	</script>
      <style>
td {
    vertical-align: top;
}
#table1, #table2, #table3, #table4 {
    display: none;
}</style>


</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">CuMa</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#slide1">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#slide2">Detils</a>
                    </li>  <li>
                          <a class="page-scroll" href="#slide3">DataBase</a>
                      </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="title" class="home slide header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><u>About CuMa</u></h1>
                    <p><strong>CuMa- Clean Up My Area</strong><br/><br/>
                      This project is about ReInnovationg an public area.I personally experienced this problem in my locality.
                      I see people throwing garbage and unrinating in public places.
                      This happens because that location untidy or no one to take care of it.
                      If we could develop an app which gives 2 options.
                      <ol><li>Take help from NGO's or any socail welfare organisations or from students who wish to help us to clean the area and reinnovate it by adding some paintings or planting tress.
                        <br> similar example: http://www.thebetterindia.com/42396/ugly-indian-250-flyovers-bangalore/ </li>
                      <li>Takes information from people who need help in cleaning up the area and link it to people in 1st point.</li></ol></p>
                    <a class="btn btn-default page-scroll" href="#slide1">Know More!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="slide1" class="slide">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color:white;">Together Build a Better India!</h1>
                    <div class="panels">
                      <div class="panel panel-Green panels">
            <div class="panel-heading">
              <h3 class="panel-title">Provide Help</h3>
            </div>
            <div class="panel-body">
                This section Takes information from people who wanted to provide help.<br><br>
                Put your hand together for a better India.We need help from people who are intrested
                in cleaning up an area.<br>
                submit your details here.<br><br>
                <a class="btn btn-success page-scroll" href="#slide2">Know More!</a>

            </div>
          </div>
          <div class="panel panel-Yellow panels">
            <div class="panel-heading">
              <h3 class="panel-title">Get Help</h3>
            </div>
            <div class="panel-body">
              This section takes information from people who are looking for help.<br><br>
              Are you looking for help?<br>
              Submit your details here and we will find someone who will help you.<br><br><br>
              <a class="btn btn-success page-scroll" href="#slide2">Know More!</a>

            </div>
          </div>
          </div>
                  <div class="panel panel-primary details" >
                    <div class="panel-heading">
                      <h3 class="panel-title">Search DataBase</h3>
                    </div>
                    <div class="panel-body">
                      Check our Database for previously submitted details?
                      <a class="btn btn-success page-scroll" href="#slide3">Go to DB Center</a>

                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="slide2" class="slide">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 center1">
                    <h1>Provide Help</h1>
                  <form class="center1" method="post" action="provide.php">
                    <div class="form-group" >
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="fname">
                    </div>  <div class="form-group" >
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name" name="lname">
                      </div>
                  <div class="form-group" >
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">phone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="phone number" name="phone">
                  </div>
                  <label >Description</label>

                  <textarea class="form-control" rows="3" name="disc" placeholder="Give description about your team and tell us how would you like to help us"></textarea>
                  <div class="form-group">
                    <label >Number of Helpers</label>

                    <select class="form-control" name="help">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    </div>

                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
                </div>
                <div class="col-lg-6 center1">
                    <h1>Get Help</h1>
                  <form class="center1" method="post" action="gethelp.php">
                    <div class="form-group" >
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="fname">
                    </div>  <div class="form-group" >
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name" name="lname">
                      </div>
                    <div class="form-group" >
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                    </div>

                    <div class="form-group">
                    <label for="exampleInputPassword1">phone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="phone number" name="phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Pictures of the place</label>
                    <input type="file" id="exampleInputFile" name="pic">
                    <p class="help-block">Upload the pictures showing the area you want to clean up</p>
                  </div>
                  <label >Description</label>

                  <textarea class="form-control" rows="3" name="disc" placeholder="Give description about your problem and place.How you wanted to to be cleaned out"></textarea>

                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="slide3" class="slide">
        <div class="container">
            <div class="row">

              <input type="button" class="btn btn-primary bttn" value="List of people who Want to help" onclick="show(1);">
              <input type="button" class="btn btn-primary bttn" value="List of people who Wannted help" onclick="show(2);">

              <div id="table1">
                <h2 style="color:white">Details of People who want to help</h2>
            <?php
                $servername = "mysql11.000webhost.com";
                $username = "a5220582_cuma";
                $password = "sk123sk123";
                $dbname = a5220582_cuma;
                $sno=0;
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM provide";
                $result = $conn->query($sql);
				echo "<table class='table table-hover'><tr><th>S.no</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Discription</th>
							<th>Helpers</th>
						</tr>";
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>".$sno."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"] ."</td><td>". $row["phone"] ."</td><td> " .  $row["disc"] ."</td><td> ".$row["help"] . "</td><tr>";
                        $sno=$sno+1;
                    }
					echo "</table>";
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
            <div id="table2">
              <h2  style="color:white">Details of people who are looking for help</h2>
              <?php
                  $servername = "mysql11.000webhost.com";
                  $username = "a5220582_cuma";
                  $password = "sk123sk123";
                  $dbname = a5220582_cuma;
                  $sno=0;
                  // Create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  // Check connection
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  }

                  $sql = "SELECT * FROM gethelp";
                  $result = $conn->query($sql);
  				echo "<table class='table table-hover'><tr><th>S.no</th>
  							<th>First Name</th>
  							<th>Last Name</th>
  							<th>Email</th>
  							<th>Phone</th>
                <th>images</th>
  							<th>Discription</th>
  						</tr>";
                  if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                          echo "<tr><td>".$sno."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"] ."</td><td>". $row["phone"] ."</td><td> " .  $row["img"] ."</td><td> ".$row["disc"] . "</td><tr>";
                          $sno=$sno+1;
                      }
  					echo "</table>";
                  } else {
                      echo "0 results";
                  }
                  $conn->close();
                  ?>
          </div>

              </div>
            </div>
          </section>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
