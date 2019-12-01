<?php 

include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Enquiry</title>
   
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

	</style>
</head>
<body>

<div class="container">
<a class="btn" href="admin.php" style=" background-blend-mode: lighten;">Admin Page</a>
		<table id="dtBasicExample" class="table table-dark table-striped table-bordered table-lg" cellspacing="0" width="100%" >
			<thead>
				<tr>
					<th class="th-sm">Company Name
					</th>
					<th class="th-sm">Company Email
					</th>
					<th class="th-sm">Phone
					</th>
					<th class="th-sm">Looking For
					</th>
					<th class="th-sm">Description
					</th>
					
				</tr>
			</thead>
			<tbody>
        <?php
            
            $query = "SELECT * from company_enquiry";
            $result = mysqli_query($conn,$query);

            // $result = mysqli_fetch_array($result);

            // for($i = 0;$i < count($result);$i++){
            //   $firstName = 
            // }
            while($row = mysqli_fetch_array($result)){
              $companyname = $row['c_name'];
              $companyemail = $row['c_email'];
              $phone = $row['phone'];
              $branch = $row['branch'];
              $description = $row['description'];
             
              echo '
                  <tr>
                      <td>'.$companyname.'</td>
                      <td>'.$companyemail.'</td>
                      <td>'.$phone.'</td>
                      <td>'.$branch.'</td>
                      <td>'.$description.'</td>
                    
                  </tr>
              ';
            }
        ?>
      </tbody>
	</table>

</body>
<script src="js/datatables.min.js"></script>
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
	
</html>

