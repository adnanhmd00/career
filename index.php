
<?php
    if (isset($_POST['upload'])) {
        $target= "uploads/".basename($_FILES['cv']['name']);
        $db = mysqli_connect('localhost', 'root', 'asdf1234', 'oregonix_ts');

        $cv = $_FILES['cv']['name'];
        $full_name = $_POST['full_name'];
        $dob_date = $_POST['dob_date'];
        $dob_month = $_POST['dob_month'];
        $dob_year = $_POST['dob_year'];
        $gender = $_POST['gender'];
        $home_address = $_POST['home_address'];
        $landmark = $_POST['landmark'];
        $mobile = $_POST['mobile'];
        $degree = $_POST['degree'];
        $work_experience = $_POST['work_experience'];
        $school_name = $_POST['school_name'];
        $referral_person = $_POST['referral_person'];
        $job_department = $_POST['job_department'];
     
        $sql = "INSERT INTO jobs (full_name,dob_date,dob_month,dob_year,gender,
        home_address, landmark, mobile,degree, work_experience, school_name, referral_person, job_department, cv)
        VALUES ('$full_name','$dob_date','$dob_month','$dob_year','$gender','$home_address','$landmark','$mobile','$degree','$work_experience',
        '$school_name','$referral_person','$job_department','$cv')";

        mysqli_query($db, $sql);

        if(move_uploaded_file($_FILES['cv']['tmp_name'], $target)){
            $msg = "Uploaded";
        }else{
            $msg = "Failed";
        }
   }
       ?>      
                 
<!DOCTYPE html>
<html>
<!--<![endif]-->
<head>
    <!-- Page Title -->

    <title>Jobs | The Travel Square</title>
       
    <!-- Meta Tags -->
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="The Travel Square">
    <meta name="description" content="">
    <meta name="distribution" content="global">
    <meta name="country" content="india">
    <meta name="copyright" content="The Travel Square">
    <meta name="revisit-after" content="1 hour">
    <meta name="designer" content="The Travel Square">
    <meta name="language" content="english">
    <meta name="robots" content="index, follow">
    <meta name="rating" content="general">
    <meta name="publisher" content="The Travel Square">

    <meta property="og:title" content="The Travel Square">
    <meta property="og:description" content="The Travel Square is a Unique B2B Platform For Travel Agents to Get Best Quotes For Their Travel Booking Leads . Our Network is a Profesional B2B Connection of More Than 5000+ Travel Agents Around the Globe at More Than 250+ Destinations in the World . The Travel Square is Simple to Use , Efficient and Cost Savvy , Which Can Make More Margins in Travel Sales and Make Travel Agents Earn 150% More Profits.">
    <meta property="og:image" content="">
  
    <meta name="twitter:card" content="The Travel Square is a Unique B2B Platform For Travel Agents to Get Best Quotes For Their Travel Booking Leads . Our Network is a Profesional B2B Connection of More Than 5000+ Travel Agents Around the Globe at More Than 250+ Destinations in the World . The Travel Square is Simple to Use , Efficient and Cost Savvy , Which Can Make More Margins in Travel Sales and Make Travel Agents Earn 150% More Profits.">
  
    <meta name="keywords" content="The Travel Square is a Unique B2B Platform For Travel Agents to Get Best Quotes For Their Travel Booking Leads . Our Network is a Profesional B2B Connection of More Than 5000+ Travel Agents Around the Globe at More Than 250+ Destinations in the World . The Travel Square is Simple to Use , Efficient and Cost Savvy , Which Can Make More Margins in Travel Sales and Make Travel Agents Earn 150% More Profits.">
    <meta name="format-detection" content="7428558566">
    
    
    <link rel="shortcut icon" href="" type="image/x-icon">

   
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="http://thetravelsquare.in/files/bootstrap.min.css">
    <link rel="stylesheet" href="http://thetravelsquare.in/files/font-awesome.min.css">
    <link href="http://thetravelsquare.in/files/css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://thetravelsquare.in/files/animate.min.css">
    <link href="stylesheet" href="http://thetravelsquare.in/font/flaticon.css">
    
    <!-- Current Page Styles -->



    <link id="main-style" rel="stylesheet" href="http://thetravelsquare.in/files/style-light-yellow.css">    
    
    
    
    <!-- Updated Styles -->
    <link rel="stylesheet" href="/files/updates.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://thetravelsquare.in/files/custom.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="http://thetravelsquare.in/files/responsive.css">
    
</head>

    <body >

    <div>
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs">
                <div class="container">
                    <!-- <ul class="quick-menu pull-left">
                        
						<li class="ribbon currency">
                            <a href="" title="">INR</a>
                            <ul class="menu mini left">
                            </ul>
                        </li>
                        <li class="ribbon">
                            <a href="">English</a>
                            <ul class="menu mini">
                            </ul>
                        </li>
						<li class="ribbon">
                            <a href="">India</a>
                            <ul class="menu mini">
                            </ul>
                        </li>
                    </ul> -->
                    <!-- <ul class="quick-menu pull-right">
                        <li><a href="" class="button yellow btn-small" style="height: 30px; font-size: 1em;">
						<i class="soap-icon-shopping"></i> SIGN UP</a></li>
                        <li><a href="#" class="soap-popupbox">LOGIN</a></li>
						<li><a href="">Business CAPITAL</a></li>
                        <li><a href="#" class="soap-popupbox">Customer Care</a></li>

                    </ul> -->
                </div>
            </div>
            
            <div class="main-header">
                
               
                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
        
                </a>


                <div class="container">
                   
                    <h1 class="navbar-brand" style="height: 0%">
                        <a href="http://thetravelsquare.in" title="The Travel Square">
                            <img src="http://thetravelsquare.in/images/the-travel-square-india-logo.png" alt="The Travel Square">
                        </a>
                    </h1>
                    
                    
                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item-has-children">
                                <a href="http://thetravelsquare.in/packages">Holidays</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="http://thetravelsquare.in/hotel">Hotels</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="http://business.thetravelsquare.in/coming-soon">Flights</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="http://business.thetravelsquare.in/coming-soon">Experiences</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="http://business.thetravelsquare.in/coming-soon">Cabs</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="http://business.thetravelsquare.in/coming-soon">Visa</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="http://business.thetravelsquare.in/coming-soon">Buses</a>
                            </li>
                           
                        </ul>
                    </nav>
                </div>
                
                <nav id="mobile-menu-01" class="mobile-menu collapse" aria-expanded="false" style="height: 0px;">
                    <ul id="mobile-primary-menu" class="menu">
                        <li class="menu-item-has-children">
                            <a href="http://thetravelsquare.in/packages">Holidays</a><button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu-submenu-item-0"></button>
                        </li>
                        <li class="menu-item-has-children active">
                            <a href="http://thetravelsquare.in/hotel">Hotels</a><button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu-submenu-item-1"></button>
                           
                        </li>
                        <li class="menu-item-has-children">
                            <a href="/flight">Flights</a><button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu-submenu-item-2"></button>
                            
                        </li>
                        <li class="menu-item-has-children">
                            <a href="/restaurant">Experiences</a><button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu-submenu-item-0"></button><button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu-submenu-item-0"></button><button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu-submenu-item-0"></button>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="/cab">Cabs</a><button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu-submenu-item-3"></button>
                            
                        </li>
                        <li class="menu-item-has-children">
                            <a href="/cruise">Visa</a><button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu-submenu-item-4"></button>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="/tour">Buses</a><button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu-submenu-item-5"></button>
                    
                        </li>
                        
                    </ul>
                    
                </nav>
            </div>
               

        </header>
    

        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Job Application | The Travel Square
                </div>
                <ul class="breadcrumbs pull-right">
                    
                    <li class="active">Internship & Permanent Jobs</li>
                </ul>
            </div>
        </div>

       <section id="content">
            <div class="container">
			
			
			
                <div class="row">
                    <div id="main" class="col-sm-8 col-md-9">
					
					
					
                        <div class="travelo-box booking-section">
                            <form class="booking-form" method="POST" enctype="multipart/form-data">
                                <div class="person-information">
								<!-- <center><img src="http://thetravelsquare.in/images/The-Travel-Square-Logo.png"></center><br><br> -->
								
                                    <h2>Personal Details</h2>
									<p>Please Enter Your Personal Details Below. The Personal Data in Any Terms Will Not Be Misused or Publicised .<br>
                                    <!-- <a href=""><span class="skin-color">Personal Data Storage Policy | We are Data Protection Law Approved |</span></a></p> -->
                                    <br>
                                  
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-md-10">
                                            <label>Full Name</label>
                                            <input type="text" name="full_name" class="input-text full-width" value="" placeholder="Enter Your Full Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xs-12 col-md-5 constant-column-3">
                                            <div>
                                                <label>Date of Birth</label>
                                                <div class="selector">
                                                    <select class="full-width" name="dob_date" required>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                        <option>06</option>
                                                        <option>07</option>
                                                        <option>08</option>
                                                        <option>09</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                        <option>31</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div>
                                                <label>Month</label>
                                                <div class="selector">
                                                    <select class="full-width" name="dob_month" required>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                        <option>06</option>
                                                        <option>07</option>
                                                        <option>08</option>
                                                        <option>09</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div>
                                                <label>Year</label>
                                                <div class="selector">
                                                    <select class="full-width" name="dob_year" required>
                                                        <option>1980</option>
                                                        <option>1981</option>
                                                        <option>1982</option>
                                                        <option>1983</option>
                                                        <option>1984</option>
                                                        <option>1985</option>
                                                        <option>1986</option>
                                                        <option>1987</option>
                                                        <option>1988</option>
                                                        <option>1989</option>
                                                        <option>1990</option>
                                                        <option>1991</option>
                                                        <option>1992</option>
                                                        <option>1993</option>
                                                        <option>1994</option>
                                                        <option>1995</option>
                                                        <option>1996</option>
                                                        <option>1997</option>
                                                        <option>1998</option>
                                                        <option>1999</option>
                                                        <option>2000</option>
                                                        <option>2001</option>
                                                        <option>2002</option>
                                                        <option>2003</option>
                                                        <option>2004</option>
                                                        <option>2005</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>GENDER</label>
                                            <div class="selector">
                                                <select name="gender" autocomplete="off"  required class="full-width">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Unspecified</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>Home Address</label>
                                            <input type="text" name="home_address" class="input-text full-width" value="" placeholder="Enter Home Address" required>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Nearest Landmark</label>
                                            <input type="text" name="landmark" class="input-text full-width" value="" placeholder="Enter Nearest Landmark" required>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>E-mail Address</label>
                                            <input type="text" name="email" class="input-text full-width" value="" placeholder="Enter Email Address" required>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Contact Number</label>
                                            <input type="text" name="mobile" class="input-text full-width" value="" placeholder="Enter Contact Number" required>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>Qualification</label>
                                            <div class="selector">
                                                <select class="full-width" name="degree" required>
                                                    <option>10+</option>
                                                    <option>12+</option>
                                                    <option>Diploma</option>
                                                    <option>Under Graduate</option>
                                                    <option>Post Graduate</option>
                                                    <option>Masters </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Work Experience</label>
                                            <div class="selector">
                                                <select class="full-width" name="work_experience" required>
                                                    <option>0 to 1 Year</option>
                                                    <option>2+ Year</option>
                                                    <option>3+ Year</option>
                                                    <option>4+ Year</option>
                                                    <option>5+ Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>College/School Name</label>
                                            <input type="text" name="school_name" class="input-text full-width" value="" placeholder="Enter Your School or College Name" required>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Refferal Person</label>
                                            <input type="text" name="referral_person" class="input-text full-width" value="" placeholder="Enter Refferal Person" required>
                                        </div>
                                    </div>
									
                                        <!-- <a href="" class="button btn-medium sky-blue1 uppercase">Submit Personal Details</a> -->
                                </div>
                                <hr>
                                <div class="group-details">
                                    <h2>Job & Internship Details</h2>
									<p>Please Fill Up The Job & Internship Details Application and Select The Job You Are Applying For .</p>
									<div class="form-group row">
										
                                        <div class="col-sm-6 col-md-5">
                                            <label>Job Department</label>
                                            <div class="selector">
                                                <select class="full-width" name="job_department" required>
                                                    <option>Technical Dept.</option>
                                                    <option>Data Management Dept.</option>
                                                    <option>Marketing Dept.</option>
                                                    <option>Server Management</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="col-sm-6 col-md-5">
                                           
                                        </div>
                                        
                                    </div>
									
									
                                </div>
                                <hr>
                                <div class="booking-type">
                                    <h2>Document Upload</h2>
									<p>Upload Your Resume</p>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>Applicants Resume (PDF Only)</label>
                                            <!-- <input type="file" name="cv" class="input-text full-width" value="" placeholder=""> -->
                                            <input required type="hidden" name="ccv" value="<?php echo $cv; ?>" hidden> <a href="<?php echo $cv; ?>" target="_blank"></a> <input type="file" name="cv"><br>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <hr>
                                
                                
                                <!-- <hr> -->
                                <div class="form-group">
                                    <div class="">
                                        <label>
                                        <label>Your Details Will Be Verified & Interview Will Be Scheduled Over Call</label>
                                            <!-- <input type="checkbox"> By Continuing , You Agree the Internship & Job Agreement <a href=""><span class="skin-color">Terms and Conditions</span></a>. -->
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <div class="col-sm-6 col-md-5">
                                        
                                        <button type="submit" name="upload" class="full-width btn-large">SUBMIT FORM</button>
                                    </div>
									
   
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar col-sm-4 col-md-3">
                        <div class="travelo-box contact-box">
                            <center><h4>Need Some Help ?</h4>
                            <p>Our HR Executives Are Always Ready Help You 24/7 .</p>
                            <address class="contact-details">
                                <span class="contact-phone">+91-9650333567</span><br>
                                <br>
                                <a class="contact-email" href="">jobs@thetravelsquare.in</a>
                            </address></center>
                        </div>
						<div class="travelo-box book-with-us-box">
                            <center><h4>Why Join Us ?</h4></center>
                            <ul>
                                <li>
                                    <i class="soap-icon-hotel-1 circle"></i>
                                    <h5 class="title"><a href="" class="skin-color">20+ Industrial Tie-Ups</a></h5>
                                    <p>The Travel Square is Recognised Amongst Top International DMC Worldwide .</p>
                                </li>
                                <li>
                                    <i class="soap-icon-savings circle"></i>
                                    <h5 class="title"><a href="" class="skin-color">Recognised Trainnings</a></h5>
                                    <p>The Travel Square Provides Recognised Trainnings From Certified Professionals.</p>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="travelo-box">
                            <center><h4 class="box-title">Our Partners & Recognitions</h4></center><br>
                            <div class="image-box style14">
                                <article class="box">
                                    <figure><a href="" title=""><img width="63" height="59" src="http://thetravelsquare.in/images/The-Travel-Square-Partners-With-The-Leela-Palaces-Hotels-and-Resorts.jpg" alt=""></a></figure>
                                    <div class="details">
                                        <h5 class="box-title"><a href="">The Leela</a></h5>
                                    </div>
                                </article>
                                <article class="box">
                                    <figure><a href="" title=""><img width="63" height="59" src="http://thetravelsquare.in/images/The-Travel-Square-Partners-With-OYO.png" alt=""></a></figure>
                                    <div class="details">
                                        <h5 class="box-title"><a href="">OYO Rooms</a></h5>
                                    </div>
                                </article>
								<article class="box">
                                    <figure><a href="" title=""><img width="63" height="59" src="http://thetravelsquare.in/images/The-Travel-Square-Partners-With-Club-Mahindra.png" alt=""></a></figure>
                                    <div class="details">
                                        <h5 class="box-title"><a href="">Club Mahindra</a></h5>
                                    </div>
                                </article>
						
								<article class="box">
                                    <figure><a href="" title=""><img width="63" height="59" src="http://thetravelsquare.in/images/The-Travel-Square-Partners-With-Go-Ibibo-Go-Stays.jpg" alt=""></a></figure>
                                    <div class="details">
                                        <h5 class="box-title"><a href="">Go Ibibo</a></h5>
                                    </div>
                                </article>
								
								                                <article class="box">
                                    <figure><a href="" title=""><img width="63" height="59" src="http://thetravelsquare.in/images/start-up-india-the-travel-square.png" alt=""></a></figure>
                                    <div class="details">
                                        <h5 class="box-title"><a href="">Startup India</a></h5>
                                    </div>
                                </article>
                                <article class="box">
                                    <figure><a href="" title=""><img width="63" height="59" src="http://thetravelsquare.in/images/The-Travel-Square-AIC-Bimtech.png" alt=""></a></figure>
                                    <div class="details">
                                        <h5 class="box-title"><a href="">AIC Bimtech</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
     </div>
    


             <footer id="footer" class="style5">
                <div class="footer-wrapper">
                    <div class="container">
                        <div class="row">
    
    
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <h2>The Travel Square</h2>
                                <ul class="discover triangle hover row">
                                    <li class="col-xs-6"><a href="http://www.thetravelsquare.in/about">About Company</a>
                                    </li>
                                    <li class="col-xs-6"><a href="http://www.thetravelsquare.in/jobs">Jobs & Carreers</a>
                                    </li>
                                    <li class="col-xs-6"><a href="http://www.thetravelsquare.in/about">Corporate Office</a>
                                    </li>
                                    <li class="col-xs-6"><a href="http://www.thetravelsquare.in/legal">Legal Info</a></li>
                                    <li class="col-xs-6"><a href="http://www.thetravelsquare.in/press-release">Press
                                            Release</a></li>
                                    <li class="col-xs-6"><a href="http://www.thetravelsquare.in/terms-and-conditions">T &
                                            C</a></li>
                                    <li class="col-xs-6"><a href="http://www.thetravelsquare.in/customer-care">Customer
                                            Care</a></li>
                                    <li class="col-xs-6"><a href="http://www.thetravelsquare.in/privacy-policy">Privacy
                                            Policies</a></li>
                                    <li class="col-xs-6"><a href="http://www.thetravelsquare.in/partner-care">Partner
                                            Help</a></li>
                                    <li class="col-xs-6"><a href="http://www.thetravelsquare.in/faq">FAQ's</a></li>
                                    <li class="col-xs-6"><a href="http://www.business.thetravelsquare.in/site-map">Site
                                            Map</a></li>
                                    <li class="col-xs-6"><a href="http://www.thetravelsquare.in/contact-us">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <h2>More of us !</h2>
                                <ul class="discover triangle hover row">
                                    <li class="col-xs-6"><a href="http://www.signatureclubmembership.com/"
                                            target="_blank">Signature Club</a></li><br><br>
                                    <li class="col-xs-6"><a href="http://www.cruisader.com/" target="_blank">Cruisader</a>
                                    </li><br><br>
                                    <li class="col-xs-6"><a href="http://www.cruisingindia.in/" target="_blank">Cruising
                                            India</a></li><br><br>
                                    <li class="col-xs-6"><a href="http://www.happenings.ind.in/"
                                            target="_blank">Happenings</a></li><br><br>
                                    <li class="col-xs-6"><a href="http://www.shoppist.in/" target="_blank">Shoppist</a></li>
                                    <br><br>
    
                                </ul>
                            </div>
                            <hr>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <h2>About Us</h2>
                                <b>
                                    <p>The Travel Square is a Network of 10000+ Travel Suppliers , DMC & Hotel Chains
                                        Inspiring the World to Travel In Style With Luxury at Affordable Pricing . </p>
                                </b>
                                <br>
                                <ul class="social-icons clearfix">
                                    <li class="twitter"><a title="Join Us on Twitter"
                                            href="https://twitter.com/travelsquareb2b" rel="nofollow" data-toggle="tooltip"
                                            Target="_blank" data-original-title="twitter"><i
                                                class="soap-icon-twitter"></i></a></li>
                                    <li class="facebook"><a title="Join Us on Facebook"
                                            href="https://www.facebook.com/thetravelsquareb2b/" rel="nofollow"
                                            Target="_blank" data-toggle="tooltip" data-original-title="facebook"><i
                                                class="soap-icon-facebook"></i></a></li>
                                    <li class="linkedin"><a title="Join Us on Linked In"
                                            href="https://www.linkedin.com/company/thetravelsquareb2b" rel="nofollow"
                                            Target="_blank" data-toggle="tooltip" data-original-title="linkedin"><i
                                                class="soap-icon-linkedin"></i></a></li>
                                    <li class="vimeo"><a title="Join Us on Instagram"
                                            href="https://www.instagram.com/thetravelsquareb2b/" data-toggle="tooltip"
                                            rel="nofollow" Target="_blank" data-original-title="vimeo"><i
                                                class="soap-icon-instagram"></i></a></li>
                                    <li class="dribble"><a title="Join Us on Youtube"
                                            href="https://www.youtube.com/channel/UCqi_w8JlO-1VEmVUItvr8og" rel="nofollow"
                                            Target="_blank" data-toggle="tooltip" data-original-title="dribble"><i
                                                class="soap-icon-youtube"></i></a></li>
    
                                </ul><br><br>
    
                            </div>
                            <center>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <br>
                                    <img src="http://thetravelsquare.in/images/the-travel-square-logo-200x200.png"
                                        alt="the travel square b2b" title="the travel square b2b">
                                    <br><br>
                                    <div class="row">
                                        <a rel="nofollow" href="https://play.google.com/store?hl=en"><img
                                                src="http://thetravelsquare.in/images/the-travel-square-google-playstore.png"
                                                alt="the travel square b2b" title="the travel square b2b" height="35"
                                                width="100">
                                            <a rel="nofollow" href="https://www.apple.com/in/"><img
                                                    src="http://thetravelsquare.in/images/the-travel-square-apple-store-ios.png"
                                                    alt="the travel square b2b" title="the travel square b2b" height="35"
                                                    width="100"></div>
                                </div>
                            </center>
                        </div>
    
                    </div>
    
                    <center>
                        <a rel="nofollow" href="https://www.paypal.com/in/home"><img alt="the travel square b2b"
                                title="the travel square b2b"
                                src="http://thetravelsquare.in/images/the-travel-square-visa-debit-credit-card.png"
                                height="70" width="350">
                            <a rel="nofollow" href="https://www.payumoney.com/"><img alt="the travel square b2b"
                                    title="the travel square b2b"
                                    src="http://thetravelsquare.in/images/the-travel-square-payu-paypal.png" height="70"
                                    width="300">
                    </center><br>
                </div>
    
    
                <div class="bottom gray-area">
                    <div class="container">
    
                        <div class="pull-right">
                            <a id="back-to-top" href="" class="animated bounce" data-animation-type="bounce"
                                style="animation-duration: 1s; visibility: visible;"><i
                                    class="soap-icon-longarrow-up circle"></i></a>
                        </div>
                        <div class="copyright pull-right">
                            <p>© 2019 Copyright | The Travel Square</p>
                        </div>
                    </div>
                </div>
            </footer>
    
        </div>
    
        </div>
    
    
    
        <!-- Javascript -->
        <script type="text/javascript" src="http://thetravelsquare.in/files/jquery-1.11.1.min.js.download"></script>
        <script type="text/javascript" src="http://thetravelsquare.in/files/jquery.noconflict.js.download"></script>
        <script type="text/javascript" src="http://thetravelsquare.in/files/modernizr.2.7.1.min.js.download"></script>
        <script type="text/javascript" src="http://thetravelsquare.in/files/jquery-migrate-1.2.1.min.js.download"></script>
        <script type="text/javascript" src="http://thetravelsquare.in/files/jquery.placeholder.js.download"></script>
        <script type="text/javascript" src="http://thetravelsquare.in/files/jquery-ui.1.10.4.min.js.download"></script>
    
        <!-- Twitter Bootstrap -->
        <script type="text/javascript" src="http://thetravelsquare.in/files/bootstrap.js.download"></script>
    
        <!-- parallax -->
        <script type="text/javascript" src="http://thetravelsquare.in/files/jquery.stellar.min.js.download"></script>
    
        <!-- waypoint -->
        <script type="text/javascript" src="http://thetravelsquare.in/files/waypoints.min.js.download"></script>
    
        <!-- load page Javascript -->
        <script type="text/javascript" src="http://thetravelsquare.in/files/theme-scripts.js.download"></script>
        <script type="text/javascript" src="http://thetravelsquare.in/files/scripts.js.download"></script>
    
    
    </html>
    </body>
    


<?php
if (isset($_POST['upload']))
{   
?>
<script type="text/javascript">
window.location = "/thanks.php";
</script>      
<?php
}
?>
