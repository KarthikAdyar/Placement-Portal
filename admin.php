
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <h1 align="center"  style="color:white; text-shadow: 2px 2px 4px #000000;">Admin Panel</h1><br><br>
</head>
<style>
.mycard{
    font-family: 'Roboto';
    font-size:25px;
    color:#272343;

}
.mycard1{
    font-family: 'Roboto';
    font-size:15px;
    color:#272343;
}
.mybutton{
    color:#465881;
    background-color: rgb(223, 220, 228);
    font-family: 'Roboto';
    border-color: #465881;
}
#card:hover{
  
  -moz-box-shadow:    3px 3px 5px 6px #ccc;
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
  box-shadow:         3px 3px 5px 6px rgb(95, 48, 102);
}

</style>

<body style="background-image:url('background.png');background-size: cover;" >
    <div  align="center">
        <div class="row">
            <div class="col-sm-7" style="margin-bottom: 5%;">
                <div class="card rounded" id="card" style="width: 18rem;background-color: rgb(220 ,224, 228,0.75);">
                   
                    <div class="card-body">
                        <h5 class="card-title mycard" >Add Student Details</h5>
                        <p class="card-text mycard1">Click on the link below to add the student details</p>
                        <a href="add_students.php" class="btn  btn-lg  mybutton" >Add Students</a>
                    </div>
                </div>
            </div>
            
            <div align="center">
                <div class="card" id="card" style="width: 18rem;background-color: rgb(220 ,224, 228,0.8);">
                   
                    <div class="card-body">
                        <h5 class="card-title mycard" >View Student Details</h5>
                        <p class="card-text mycard1" >View all the information relating to the 
                            student placements</p>
                        <a href="view.php" class="btn  btn-lg mybutton">View Student Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div align="center">

        <div class="row ">
            <div class="mt-4 col-sm-7">
                <div class="card" id="card" style="width: 18rem;background-color: rgb(220 ,224, 228,0.75);">
            
                    <div class="card-body">
                        <h5 class="card-title mycard" >Add Company Details</h5>
                        <p class="card-text mycard1" >Add all the information of the companies that visited the college</p>
                        <a href="company_details.php" class="btn btn-lg mybutton" >Company Details</a>
                    </div>
                </div>
            </div>

            <div align="center">
                <div class="mt-4">
                    <div class="card" id="card" style="width: 18rem;background-color: rgb(220 ,224, 228,0.8);">
                       
                        <div class="card-body">
                            <h5 class="card-title mycard">Company Enquiry</h5>
                            <p class="card-text mycard1" >Get the information of those companies trying to reach college</p>
                            <a href="company_enquiry.php" class="btn  btn-lg mybutton">Company Enquiry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>

</html>