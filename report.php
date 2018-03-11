<?php
    //This is report.php
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
  <form action="/action_page.php">
  <div class="report-form">
    <label for="name">Enter Your Name:</label>
    <input type="name" class="report-form" id="name">
  </div>
  <div class="report-form">
    <label for="report">Where is Dr. Evil?</label>
    <input type="report" class="report-form" id="report">
  </div>
  <button type="report" class="btn btn-default">Report</button>
  </form>
  </div>
  </div>
</body>
