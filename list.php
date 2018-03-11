<?php
    include('config.php');

    $conn = new mysqli($db_host, $db_name, $db_user, $db_pass);
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
      <tr>
        <td>Morgan Freeman</td>
        <td>9:00 am 03/10/18</td>
        <td>I spotted Dr. Evil inhaling illegal substance by the Hempstead Tpke</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
</div>
</div>
</div>
</body>
