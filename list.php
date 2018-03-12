<?php
    include('config.php');

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
	die('Connection failed: '.$conn->connect_error.'<br>');
    }
?>

<head>
  <title>Dwiddder | List</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
        <div class="container">

 <div class="panel panel-default text-center">
    <div class="panel-heading">
         <h2> Report List </h2>
    </div>
    <div class="panel-body">

  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Reporter Name</th>
        <th>Date and Time Reported</th>
        <th>Report</th>
      </tr>
    </thead>
    <tbody>
	<?php
	    $sql = 'SELECT name, report, date FROM reports';
	    $result = $conn->query($sql);
	    if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
		    echo '<tr><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['report'].'</td></tr>';
		}
	    } else {
		echo 'Found no reports';
	    }
	    $conn->close();
        ?>
	
    </tbody>
  </table>
	<a href="/report.php" class="btn btn-default">Back</a>
  </div>
</div>
</div>
</div>
</div>
</body>
