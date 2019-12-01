<?php

include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $student_first_name = $_POST['firstname'];
  $student_last_name = $_POST['lastname'];
  $student_usn = $_POST['usn'];
  $student_email = $_POST['emailid'];
  $student_join_year = $_POST['yearofjoining'];
  $student_pass_year = $_POST['yearofpassing'];
  $student_cgpa = $_POST['cgpa'];
  $student_gender = $_POST['gender'];
  $student_branch = $_POST['branch'];
  $student_placed_company = $_POST['company'];

  $sql1 = "INSERT INTO student (firstname,lastname,usn,email,yearofjoining,yearofpassing,cgpa,gender,branch) VALUES 
    ('$student_first_name','$student_last_name','$student_usn','$student_email','$student_join_year','$student_pass_year',
    '$student_cgpa','$student_gender','$student_branch')";
  $result = mysqli_query($conn, $sql1);

  $query = "SELECT s_id FROM `student` WHERE usn = '$student_usn'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $s_id = $row['s_id'];
  $sql2 = "INSERT INTO `student_placements` (s_id,c_id) VALUES ('$s_id','$student_placed_company')";

  if (mysqli_query($conn, $sql2)) {
    header("location:add_students.php");
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
          <h2 class="title" align="center">Add Students</h2>
          <form method="POST" action="add_students.php">
            <div class="input-group">
              <input class="input--style-3" type="text" placeholder="Firstname" name="firstname">
            </div>
            <div class="input-group">
              <input class="input--style-3" type="text" placeholder="Lastname" name="lastname">
            </div>
            <div class="input-group">
              <input class="input--style-3" type="text" placeholder="USN" name="usn" id="usn" size="10">
            </div>
            <div class="input-group">
              <input class="input--style-3" type="email" placeholder="Email" name="emailid" id="emailid" size="30">
            </div>

            <div class="input-group">
              <div class="rs-select2 js-select-simple select--no-search">
                <select name="yearofjoining">
                  <option disabled="disabled" selected="selected">Year Of Joining</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>

                </select>
                <div class="select-dropdown"></div>
              </div>
            </div>
            <div class="input-group">
              <div class="rs-select2 js-select-simple select--no-search">
                <select name="yearofpassing">
                  <option disabled="disabled" selected="selected">Year Of Passing</option>
                  <option value="2025">2025</option>
                  <option value="2024">2024</option>
                  <option value="2023">2023</option>
                  <option value="2022">2022</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>

                </select>
                <div class="select-dropdown"></div>
              </div>
            </div>

            <div class="input-group">
              <input class="input--style-3" type="number" placeholder="C.G.P.A" name="cgpa" min="0" max="10" step=".01">
            </div>
            <div class="input-group">
              <div class="rs-select2 js-select-simple select--no-search">
                <select name="gender">
                  <option disabled="disabled" selected="selected">Gender</option>
                  <option value="M">M</option>
                  <option value="F">F</option>
                </select>
                <div class="select-dropdown"></div>
              </div>
            </div>
            <div class="input-group">
              <div class="rs-select2 js-select-simple select--no-search">
                <select name="branch">
                  <option disabled="disabled" selected="selected">Branch</option>
                  <option value="C.S.E">C.S.E</option>
                  <option value="E.C.E">E.C.E</option>
                  <option value="I.S.E">I.S.E</option>
                  <option value="CIVIL">CIVIL</option>
                  <option value="MECH">MECH</option>
                </select>
                <div class="select-dropdown"></div>
              </div>
            </div>
            <div class="input-group">
              <div class="rs-select2 js-select-simple select--no-search">
                <select name="company">

                  <option value="-1" selected>Company</option>
                  <?php
                  $query = "SELECT c_id,name FROM company";
                  $result = mysqli_query($conn, $query);

                  while ($row = mysqli_fetch_array($result)) {
                    $c_id = $row['c_id'];
                    $companyname = $row['name'];

                    echo "<option value=" . $c_id . ">" . $companyname . "</option>";
                  }
                  ''
                  ?>
                </select>
                <div class="select-dropdown"></div>
              </div>
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