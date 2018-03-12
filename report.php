<?php
    include('config.php');
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
	die('Connection failed: '.$conn->connect_error.'<br>');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    	$timestamp = date('m/d/Y').' at '.date('h:ia');
    	$stmt = $conn->prepare('INSERT INTO reports (name, report, date) VALUES (?, ?, ?)');
    	$stmt->bind_param('sss', $_POST['user-name'], $_POST['user-report'], $timestamp);
    	$stmt->execute();
    	$stmt->close();
	header('Location: /list.php');
    }

    $conn->close();
?>

<head>
  <title>Dwiddder | Report</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
  <div class="panel panel-default text-center">
  <div class="panel-heading">
  <h2>Report Page</h2>
  </div>
  <div class="panel-body"> Fill in the required information then submit report</div>
  <form method="post" action="/report.php">
  <div class="report-form">
    <label for="name">Enter Your Name:</label>
    <input type="text" class="report-form" name="user-name" required>
	
  </div>
  <div class="report-form">
    <label for="report">Where is Dr. Evil?</label>
    <input type="text" class="report-form" name="user-report" required>
  </div>
  <button type="submit" class="btn btn-default" name="btnSubmit">Report</button>
 <a href="/index.php" class="btn btn-default">Back</a> 
 </form>
  </div>
  </div>
</body>
