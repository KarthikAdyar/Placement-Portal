<?php

  include('connection.php');

?>
<!DOCTYPE html>
<html>

<head>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
	<link href="css/datatables.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<style>
		table.dataTable thead .sorting:after,
		table.dataTable thead .sorting:before,
		table.dataTable thead .sorting_asc:after,
		table.dataTable thead .sorting_asc:before,
		table.dataTable thead .sorting_asc_disabled:after,
		table.dataTable thead .sorting_asc_disabled:before,
		table.dataTable thead .sorting_desc:after,
		table.dataTable thead .sorting_desc:before,
		table.dataTable thead .sorting_desc_disabled:after,
		table.dataTable thead .sorting_desc_disabled:before {
			bottom: .5em;
		}

	body{
	margin:3%;
	margin-right: 4%;
	background: -webkit-linear-gradient(bottom, #0EC1F1 0%, #1AE6A8 100%);
    background: -moz-linear-gradient(bottom,#0EC1F1 0%, #1AE6A8 100%);
    background: -o-linear-gradient(to left, #0EC1F1 0%, #1AE6A8 100%);
	background: linear-gradient(to left, #0EC1F1 0%, #1AE6A8 100%);
	}
	.th-sm{
		font-family: 'Roboto';
		font-size: 17px;
		color: aqua;
	}
	td{
		color: rgb(200,200,179);
	}
	#dtBasicExample{
	
    margin: 0 auto;
    float: none;
	}

	</style>
</head>

<body>
	<div class="container ">
	<a class="btn" href="admin.php" style=" background-blend-mode: lighten;">Admin Page</a>
		<table align="left" id="dtBasicExample"  class="table table-dark table-striped  table-bordered table-lg" cellspacing="0" ">
			<thead>
				<tr>
					<th class="th-sm ">FirstName
					</th>
					<th class="th-sm ">LastName
					</th>
					<th class="th-sm">USN
					</th>
					<th class="th-sm">Email
					</th>
					<th class="th-sm">Joining Year
					</th>
					<th class="th-sm">Leaving Year
          			</th>
          			<th class="th-sm">C.G.P.A
          			</th>
					<th class="th-sm">Male
					</th>
					<th class="th-sm">Branch
					</th>
					<th class="th-sm">Company
					</th>
					<th class="th-sm">Salary(in LPA)
					</th>
				</tr>
			</thead>
			<tbody>
        <?php
            
            $query = "SELECT * FROM `student` s LEFT JOIN `student_placements` p ON s.s_id = p.s_id LEFT JOIN `company` c ON c.c_id = p.c_id WHERE c.name is NOT NULL";
            $result = mysqli_query($conn,$query);

            // $result = mysqli_fetch_array($result);

            // for($i = 0;$i < count($result);$i++){
            //   $firstName = 
            // }
            while($row = mysqli_fetch_array($result)){
              $firstName = $row['firstname'];
              $lastName = $row['lastname'];
              $usn = $row['usn'];
              $email = $row['email'];
              $yearOfJoining = $row['yearofjoining'];
              $yearOfPassing = $row['yearofpassing'];
              $cgpa = $row['cgpa'];
              $gender = $row['gender'];
              $branch = $row['branch'];
			  $company = $row['name'];
			  $salary = $row['package'];

              echo '
                  <tr>
                      <td>'.$firstName.'</td>
                      <td>'.$lastName.'</td>
                      <td>'.$usn.'</td>
                      <td>'.$email.'</td>
                      <td>'.$yearOfJoining.'</td>
                      <td>'.$yearOfPassing.'</td>
                      <td>'.$cgpa.'</td>
                      <td>'.$gender.'</td>
					  <td>'.$branch.'</td>
					  <td>'.$company.'</td>
					  <td>'.$salary.'</td>
                  </tr>
              ';
            }
        ?>
      </tbody>
		</table>
	</div>
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
	<script src="js/datatables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#dtBasicExample').DataTable();
			$('.dataTables_length').addClass('bs-select');
		});
	</script>
	
</body>

</html>