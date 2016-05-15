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
  <div id="show"></div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#show').load('loaddata.php')
			}, 1000);

  	});
	</script>

</body>
</html>
