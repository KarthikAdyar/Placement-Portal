<?php

include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST['companyname'];
    $company_email = $_POST['email'];
    $company_phone = $_POST['phone'];
    $branch = $_POST['branch'];
    $company_description = $_POST['description'];

    $sql = "INSERT INTO `company_enquiry`(c_name,c_email,phone,branch,description) values ('$company_name','$company_email','$company_phone','$branch','$company_description')";
    mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.11.5, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/download.png" type="image/x-icon">
    <meta name="description" content="">

    <title>Home</title>


    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">






</head>

<body>
    <section class="menu cid-rHIxSArFK3" once="menu" id="menu1-i">



        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <img src="assets/images/sahyadri-logo.png" alt="Sahyadri" style="height: 3.8rem;">
                    </span>
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="#top">
                                <span class=" mbr-iconfont mbr-iconfont-btn"></span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="#bestplacements">
                                <span class=" mbr-iconfont mbr-iconfont-btn"></span>
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="#team">
                                <span class=" mbr-iconfont mbr-iconfont-btn"></span>
                                Team
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="#company">
                                <span class=" mbr-iconfont mbr-iconfont-btn"></span>
                                Companies Visited
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="#bottom">
                                <span class=" mbr-iconfont mbr-iconfont-btn"></span>
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-sm btn-primary display-4" href="login.php">
                        Login
                    </a>
                </div>
            </div>
        </nav>
    </section>
    <br>
    <br>

    <section class="engine"></section>
    <section class="header15 cid-rHIy6tkU67 mbr-fullscreen mbr-parallax-background" id="header15-j">



        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

        <div class="container align-right">
            <div class="row">
                <div class="mbr-white col-lg-9 col-md-7 content-container">
                    <p class="mbr-text pb-3 mbr-fonts-style display-5">
                        The academic year 2018-2019 has reaped rich reward with sizeable number of students recruited by 200+ Companies
                    </p>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="form-container">

                        <div class="media-container-column">
                            <!---Formbuilder Form--->
                            <form action="main.php" method="POST" class="mbr-form form-with-styler"><input type="hidden" name="email" value="wJx1JJfpqN1tx3E+AiLNGJV5DXCsAfdVmfiJG+IvDv0F0UpxK7Doni7zwO9yxIW0sQxRlctpxePbbwmpruoFs5IWVrMwgu+4rKnAGSoFL5bxoobLooPoX6gFgKSredpC">
                                <h1 class="bg-primary" style="color:white;">Company Enquiry</h1>
                                <div class="row">
                                    <div hidden="hidden" class="alert alert-success col-12">Thank you for filling out the form!</div>
                                    <div hidden="hidden" class="alert alert-danger col-12">
                                    </div>
                                </div>
                                <div class="dragArea row">
                                    <div class="col-md-12 form-group ">
                                        <input type="text" name="companyname" placeholder="Company Name" required="required" class="form-control px-3 display-7" id="name-header15-j">
                                    </div>
                                    <div class="col-md-12 form-group ">
                                        <input type="email" name="email" placeholder="Email" required="required" class="form-control px-3 display-7" id="email-header15-j">
                                    </div>
                                    <div class="col-md-12 form-group ">
                                        <input type="tel" name="phone" placeholder="Phone" class="form-control px-3 display-7" id="phone-header15-j">
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <div class="">
                                                <div class="input select"><select name="branch" id="dept" class="form-control" required="required">
                                                        <option value="">Looking For</option>
                                                        <option value="IS">IS</option>
                                                        <option value="CS">CS</option>
                                                        <option value="ME">ME</option>
                                                        <option value="EC">EC</option>
                                                        <option value="MTech">M.Tech</option>
                                                        <option value="MBA">MBA</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div data-for="description" class="col-md-12 form-group ">
                                    <textarea name="description" placeholder="Description" class="form-control px-3 display-7" id="message-header15-j"></textarea>
                                </div>
                                <div class="col-md-12 input-group-btn">
                                    <input type="submit" value="submit" class="btn btn-secondary btn-form display-4"></input>
                                </div>
                        </div>
                        </form>
                        <!---Formbuilder Form--->
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
    </section>

    <section class="features1 cid-rHIyyCr3zr" id="features1-m" style="background:whitesmoke;">




        <div class="container">
            <div class="media-container-row">

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3">
                        <span class="mbri-target mbr-iconfont"></span>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5">
                            Mission
                        </h4>
                        <ul class="mbr-text mbr-fonts-style display-7">

                            <li>To provide all students adequate training / internship opportunities to get placed in the industry of their choice.</li><br>
                            <li>To provide the industry with skilled human resources.</li><br>
                            <li>To make it a joy for all stake holders to work with us.</li><br>
                        </ul>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3">
                        <span class="mbri-preview mbr-iconfont"></span>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5">
                            Vision
                        </h4>
                        <ul class="mbr-text mbr-fonts-style display-7">
                            <li>To ensure that every student leaves the portal of the college with the desired offer in hand.</li>
                        </ul>
                    </div>
                </div>





            </div>

        </div>

    </section>

    <div id="bestplacements" style="background:aliceblue;"><br><br>
        <h2 class="text-center mbr-title pt-8 mbr-fonts-style display-2">
            Best Placement
        </h2>
        <section class="features11 cid-rHIyVTVvfl" id="features11-n" style="background:aliceblue;">
            <div class="col-md-3">

            </div>
            <div class="container">

                <div class="col-md-12">
                    <div class="media-container-row">
                        <div class="mbr-figure mb-7" style="width: 50%;height:90%">
                            <img src="assets/images/placement-group.jpg">
                            <div class="block-content">
                                <div class="card p-3 pr-3">
                                    <div class="media">
                                        <div class=" align-self-center card-img pb-3">
                                            <span class="mbri-quote-left mbr-iconfont"></span>
                                        </div>

                                    </div>

                                    <div class="card-box">
                                        <p class="block-text mbr-fonts-style display-7">
                                            <i>The placement office ensures the best arrangement for the recruiters. Student volunteers make the necessary arrangements on the day of the Company visit.</i>
                                        </p>
                                    </div>
                                    <div class=" align-self-center card-img pb-7">
                                        <span class="mbri-quote-right mbr-iconfont"></span>
                                    </div>
                                </div>

                                <div class="card p-3 pr-3">
                                    <div class="media">
                                        <div class="align-self-center card-img pb-3">
                                            <span class="mbri-quote-left mbr-iconfont"></span>
                                        </div>

                                    </div>

                                    <div class="card-box">
                                        <p class="block-text mbr-fonts-style display-7">
                                            <i>The academic year 2018-19 has reaped rich rewards with a sizeable number of students recruited by 200+ leading companies</i>
                                        </p>
                                    </div>
                                    <div class=" align-self-center card-img pb-7">
                                        <span class="mbri-quote-right mbr-iconfont"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class=" align-left ">


                                <ul class="mbr-text mb-2 pt-3 mbr-light mbr-fonts-style display-5">
                                    Placement Department is highly dynamic and has been efficient in placing students into profiles of their choice. The Placement Department is headed by Dean-Placement and ably supported by Assistant Placement Officers, Staff and Student Coordinators.<br>
                                    Over <b>170</b> companies visit the campus every year for recruitment. Some of the highest packages are offered by - <b>SPG</b> - <b>23</b> LPA, <b>Adobe Systems</b> - <b>20.35</b> LPA, <b>Amazon</b> <b>16</b> LPA, <b>Toppr</b> - <b>15.5</b> LPA, <b>Anglo Eastern</b> -<b>15</b> LPA, <b>Money View</b> - <b>12</b> LPA, <b>Juspay technologies</b>- <b>12</b> LPA, <b>HSBC</b> -<b>12</b> LPA, <b>SAP</b> - <b>10</b> LPA, <b>Accolite Software</b> - <b>10</b> LPA. The average package is <b>4</b> LPA.<br>
                                    The Placement Department also actively takes part in providing internship opportunities to the students. The placement Department has also set up Aptitude Lab for continual assessment of students.<br>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
    </div>
    </section>

    <section class="mbr-section article content3 cid-rHIzd1Lod4" id="content3-o" style="background:aliceblue;">



        <div class="container">
            <div class="media-container-row">
                <div class="row col-12 col-md-12">
                    <div class="col-12 mbr-text mbr-fonts-style col-md-6 display-7">
                        <p><i>The placements are really amazing. There are atleast 200 companies visiting every year with a very good package and students have got very good placements opportunities. Yes there are internships in college. There are many companies in college itself where people interested can join them and learn with them</i></p>
                    </div>
                    <div class="col-12 mbr-text mbr-fonts-style display-7 col-md-6">
                        <p><i>The placement opportunities are really good at our college. There have been around 180 companies who visited our campus to conduct placement. around 530 students have been placed in various companies. there is a separate department for placement which helps in placement.</i></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section article content11 cid-rHIzsFK5ht" id="content11-p" style="background:cornsilk;">

        <h2 class="text-center mbr-title pt-7 mbr-fonts-style display-2">
            Our Facilities
        </h2><br>
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text counter-container col-12 col-md-7 mbr-fonts-style display-4">
                    <ol>
                        <li>600 computers for online test</li>
                        <li>Auditorium with a capacity of seating 800 students</li>
                        <li>The resource to conduct written test for 1000 candidates at one sitting</li>
                        <li>4,000 candidates can be tested in one single day</li>
                        <li>Wireless Internet across the campus with BSNL 300 Mbps leased line</li>
                        <li>LCD, Computer and Technicians for Pre-Placement Talk (PPT)</li>
                        <li>Separate rooms for written tests, group discussions and interviews.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section article content11 cid-rHIzsFK5ht" id="content11-p" style="background:antiquewhite;">

        <h2 class="text-center mbr-title pt-7 mbr-fonts-style display-2">
            Placement Features
        </h2><br>
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text counter-container col-12 col-md-7 mbr-fonts-style display-4">
                    <ol>
                        <li><b>Aptitude, Soft skills, Value-added courses and Training</b>: Sahyadri has in-house skilled training professionals regularly conducting a host of value enhancement training programs for students.</li>
                        <li><b>Internship Programme</b>: Students undergo internship and summer vocational training in companies like Mahindra & Mahindra, MRPL , MCF and others.</li>
                        <li><b>Industry interaction</b>: The department organizes Industry interactions on a weekly basis to groom the students for the corporate world.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="mbr-section content7 cid-rHIzvTWLFd" id="company" style="background:lightcyan;">
        <h1 class="mbr-section-title pb-3 mbr-fonts-style align-center display-2">Company Details</h1>
        <div class="container">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm" style="background:blue;color:white;">Date
                        </th>
                        <th class="th-sm" style="background:blue;color:white;">Company Name
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * from company";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                        $company_date = $row['Date'];
                        $company_name = $row['name'];
                        echo '
                  <tr>
                      <td>' . $company_date . '</td>
                      <td>' . $company_name . '</td>
                  </tr>
              ';
                    }
                    ?>
                </tbody>
            </table>
    </section>
    <section class="bg-dark counters1 counters cid-rHIA986s2d" id="counters1-v">
        <div class="container">

            <div class="container pt-4 mt-2">
                <div class="media-container-row">
                    <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbri-home mbr-iconfont"></span>
                            </div>

                            <div class="card-text">
                                <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                    100+
                                </h3>
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Companies Visited
                                </h4>

                            </div>
                        </div>
                    </div>


                    <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class=" mbri-briefcase mbr-iconfont"></span>
                            </div>
                            <div class="card-text">
                                <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                    200+
                                </h3>
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Students Placed
                                </h4>

                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </section>

 








    <section class="clients cid-rHIAjcdIg6" data-interval="false" id="clients-w">



        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
                        Main Recruiters
                    </h2>
                    <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5">
                        The various companies that visit to our campus for placements.
                    </h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner" data-visible="5">





                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/1.png" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/2.png" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/3.png" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/4.png" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/5.png" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/6.png" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/7.png" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-controls">
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
                        <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next">
                        <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team1 cid-rHIAscC027" style="background:papayawhip;">



        <div class="container align-center">
            <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
                OUR  TEAM
            </h2>
            <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">
                The team which built this placement portal
            </h3>
            <div class="row media-row">

                <div class="team-item col-lg-3 col-md-6">
                    <div class="item-image">
                        <img src="assets/images/karthik1.jpg" alt="" title="">
                    </div>
                    <div class="item-caption py-3">
                        <div class="item-name px-2">
                            <p class="mbr-fonts-style display-5">
                                Karthik Adyar</p>
                        </div>
                        <div class="item-role px-2">
                          
                        </div>
                        <div class="item-social pt-2">

                            <a href="https://www.linkedin.com/in/karthik-adyar-047442139/" target="_blank">
                                <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                            <a href="https://www.facebook.com/karthik.adyar" target="_blank">
                                <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                            <a href="https://www.instagram.com/karthik__adyaar/" target="_blank">
                                <span class="p-1 socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>


                            <a href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw" target="_blank">

                            </a>
                        </div>
                    </div>
                </div>
                <div class="team-item col-lg-3 col-md-6">
                    <div class="item-image">
                        <img src="assets/images/lawrence1.jpg" alt="" title="">
                    </div>
                    <div class="item-caption py-3">
                        <div class="item-name px-2">
                            <p class="mbr-fonts-style display-5">
                                Lawrence DSouza</p>
                        </div>
                        <div class="item-role px-2">
                           
                        </div>
                        <div class="item-social pt-2">

                            <a href="https://www.linkedin.com/in/lawrence-dsouza-1a557418a/" target="_blank">
                                <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                            <a href="https://www.facebook.com/lawrence.dsouza.56" target="_blank">
                                <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                            <a href="https://www.instagram.com/_lawrence_dsouza_/" target="_blank">
                                <span class="p-1 socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>


                            <a href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw" target="_blank">

                            </a>
                        </div>
                    </div>
                </div>
                <div class="team-item col-lg-3 col-md-6">
                    <div class="item-image">
                        <img src="assets/images/adarsh2.jpg" alt="" title="">
                    </div>
                    <div class="item-caption py-3">
                        <div class="item-name px-2">
                            <p class="mbr-fonts-style display-5">
                                Adarsh Shetty</p>
                        </div>
                        <div class="item-role px-2">
                            
                        </div>
                        <div class="item-social pt-2">

                            <a href="https://www.facebook.com/adarshshetty.adarsh.5" target="_blank">
                                <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>

                            <a href="https://www.instagram.com/_adas33_/" target="_blank">
                                <span class="p-1 socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                            <a href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw" target="_blank">

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cid-rHIAtzP9yb" id="footer1-y">





        <div class="container">
            <div class="media-container-row content text-white">
                <div class="col-12 col-md-3">
                    <div class="media-wrap">
                        <a href="main.php">
                            <img src="assets/images/download.png" alt="Mobirise">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Address
                    </h5>
                    <p class="mbr-text">
                        Sahyadri College of Engineering & Management, Sahyadri Campus,
                        <br> Adyar, Mangaluru - 575007, Karnataka, India.
                    </p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Contact
                    </h5>
                    <p class="mbr-text">
                        Email: sahyadri@sahyadri.edu.in,
                        principal@sahyadri.edu.in
                        <br>Phone: + 91 824 2277222/333
                        <br>Mobile: +91 94498 45959
                    </p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">

                    </h5>
                    <p class="mbr-text">
                        <a class="text-primary" href="#"></a>
                        <br><a class="text-primary" href="#></a>
                    <br><a class=" text-primary" href="#"></a>
                    </p>
                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>


    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/parallax/jarallax.min.js"></script>
    <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
    <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/mbr-clients-slider/mbr-clients-slider.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>


</body>

</html>