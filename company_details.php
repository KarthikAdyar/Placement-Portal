<?php

include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $company_name = $_POST['companyname'];
  $company_date = $_POST['date'];
  $company_package = $_POST['salary'];
  $query = "INSERT INTO `company` (name,date,package) VALUES ('$company_name','$company_date','$company_package')";

  if (mysqli_query($conn, $query)) {
    header("location:company_details.php");
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link href="vendor2/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor2/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Vendor CSS-->
  <link href="vendor2/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor2/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="add_students.css">
</head>

<body>
  <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
  <a class="btn" href="admin.php" style=" background-blend-mode: lighten;">Admin Page</a>
    <div class="wrapper wrapper--w780">
      <div class="card card-3">
        <div class="card-heading"></div>
        <div class="card-body">
          <h2 class="title" align="center">Add Company Details</h2>
          <form action="company_details.php" method="POST">

            <div class="input-group">
              <input class="input--style-3" type="text" placeholder="Companyname" name="companyname">
            </div>

            <div class="input-group">
              <input class="input--style-3" type="date" placeholder="Date" name="date">

            </div>
            <div class="input-group">
              <input class="input--style-3" type="number" placeholder="Salary Offered(in LPA)" name="salary" step=".01">
            </div>
            <div class="p-t-10" align="center">
              <button class="btn btn--pill btn--red" type="reset">Reset</button>
              <button class="btn btn--pill btn--green" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="vendor2/jquery/jquery.min.js"></script>
  <!-- Vendor JS-->
  <script src="vendor2/select2/select2.min.js"></script>
  <script src="vendor2/datepicker/moment.min.js"></script>
  <script src="vendor2/datepicker/daterangepicker.js"></script>

  <!-- Main JS-->
  <script src="js/global.js"></script>
 
</body>

</html>