<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smartpacey</title>
<meta name="description" content="Smartpacey follows a vision of empowering people through IT education, professionals with required competencies, skills and make them employable and winner.">
<meta name="keywords" content="tally, web designing, computer classes, it web">
<link href="new-css\bootstrap.css" rel="stylesheet" type="text/css">
<link href="new-css\custom.css" rel="stylesheet" type="text/css">
<link href="css\smk-accordion.css" rel="stylesheet" type="text/css">
<link href="new-css\responsive.css" rel="stylesheet" type="text/css">
<!-- Js Files -->
<script src="js\jquery.min.js" type="text/javascript"></script>
<script src="js\bootstrap.min.js" type="text/javascript"></script>
<!-- <link href="css\main.css" rel="stylesheet"> -->

</head>
<body>
<header>
    <div class="top-bar">
        <div class="container">
            <div class="row">                   
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul>
                        
                        
                        <li><a href="placement.html">Placement</a></li>
                        <li><a href="https://smartpaceytech.com/">IT Services</a></li>
                        <li><a href="login.html">Student Login</a></li>
                        <li><a href="branch.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand education-logo" href="index.html"><img src="images\logo.png" a></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html"><img class="icon-home" src="images\icon\home.png"></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about_us.html">About Smartpacey</a></li>
                                <li><a href="board-of-directors.html">Board of Directors</a></li>
                                <li><a href="management-team.html">Management Team</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="advance-diploma.html">Advance Diploma Courses</a></li>
                                <li><a href="certificate-courses.html">Certificate Courses</a></li>
                                <li><a href="spoken.html">Spoken English</a></li>
                            </ul>
                        </li>
                        <li><a href="leadership.html">Leadership Camp</a></li>
                        <li><a href="verification.html">Validate Certificate</a></li>
                        <li><a href="download.html">Download</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Franchise <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="partner.html">Franchise Opportunity</a></li>
                                <li><a href="franchise_login.html">Franchise Login</a></li>
                            </ul>
                        </li>
                        <li><a href="grievance.php">Grievance Cell</a> </li>
                    </ul>
                </div><!-- /.navbar-collapse -->  
            </nav>
        </div>
    </div>
</header>
<!-- /header end --> 

<div class="page-banner placeBg">
  <div class="container">
      <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>Grievance Redressal</h1>
            </div>
        </div>
  </div>
</div>
<div class="news-update breadSec">
  <div class="container">
      <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <div class="pageview">
                    <ul>
                         <li><a href="Index-1.htm"><i><img src="images\pageview_img1.png" alt="Index"></i></a></li>
                         <li><i class="fa flaticon-angle2"></i></li>
                         <li><strong>Grievance Redressal</strong></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
  <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <h3>Grievance Redressal Form</h3>
            <div class="titleline1"></div>
            <div class="me-download">
               <form method="post"  id="form1" >
                    <input  type="text" maxlength="50" id="name" tabindex="1" placeholder="Name" >
                    <input  type="text" maxlength="12" id="number" tabindex="3" onkeypress="return IsNumeric(event);" placeholder="Contact Number" >
                    <input id="aid" type="text"  placeholder="Associate Id" >
                    <textarea id="msg"></textarea>
                    <div class="disclaimer text-center">
              Your complaint will be resolved within 45 days.
 You can trace your Complaint Status from your complaint ID.
            </div>
                    <div class="bttn-box">
                      
                        <a onclick="complaint()"  tabindex="6" class="bttn" href="javascript:__doPostBack(&#39;lnkbtn&#39;,&#39;&#39;)">Submit<i class="fa flaticon-envelope4"></i></a>
                        <br>
                        <span id="lblMessage"></span>
                    </div>
                </form>
            </div>
            
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h3>Contact Info</h3>
            <div class="titleline1"></div>
            <ul class="option">
                  <li>
                    <address style="line-height: inherit">
                      <b style="color:red">Address</b><br> 
                      Smartpacey Institute and Technology Solution Pvt. Ltd.<br>
                      Plot No. 6, Kokanwadi, Rajarani DP. Opp Jay Tower<br>
                      Aurangabad, Maharashtra, India - 431001
                    </address>
                  </li>
                   <li>
                    <address style="line-height: inherit">
                      <b style="color:red">Customer Care</b><br> 
                      Contact No. 9922336096<br>
                      Toll Free: 1800-266-5060<br>
                      Timing: 9:00 am to 6:30 pm<br>
                      (On all Working Days)<br>
                      Email: smartpacey@gmail.com
                    </address>
                  </li>
                </ul>
        </div>
        <style type="text/css">
          ul.option li {
            width: inherit;
            }
        </style>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h3>Grievance Redress Committee</h3>
            <div class="titleline1"></div>
            <ul class="option">
                  <li>
                    <address style="line-height: inherit">
                      <i class="fa flaticon-check30"></i><b>Mr. Digambar Sawant </b><br> 
                      <i class="fa flaticon-telephone66"></i>9527788382<br>
                      <i class="fa flaticon-envelope5"></i>smartpaceyhelpline@gmail.com<br>
                    </address>
                  </li>
                  <li>
                    <address style="line-height: inherit">
                      <i class="fa flaticon-check30"></i><b>Mr.kailas Jadhav</b><br> 
                      <i class="fa flaticon-telephone66"></i>9764430222<br>
                      <i class="fa flaticon-envelope5"></i>helpsmartpacey@gmail.com <br>
                    </address>
                  </li>
                  <li>
                    <address style="line-height: inherit">
                      <i class="fa flaticon-check30"></i><b>Mr.Bharat Khilari </b><br> 
                      <i class="fa flaticon-telephone66"></i>7620521012<br>
                      <i class="fa flaticon-envelope5"></i>helpsmartpacey@gmail.com<br>
                    </address>
                  </li>
                </ul>
        </div>
      
  </div>
</div>
<div class="container">
  <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>Track Your Complaint</h3>
            <div class="titleline1"></div>
            <div class="me-download">
               <form method="post"  id="form1" >
                    <input name="txtName" type="text" maxlength="50" id="cmpid" tabindex="1" placeholder="Enter Your Complaint ID" required>
                    
                    <div class="disclaimer text-center">
              
            </div>
                    <div class="bttn-box">
                      
                        <a onclick="track();"  tabindex="6" class="bttn" href="javascript:__doPostBack(&#39;lnkbtn&#39;,&#39;&#39;)">Submit<i class="fa flaticon-envelope4"></i></a>
                        <br>
                        <span id="lblMessage"></span>
                    </div>
                </form>
            </div>
            
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="result">
        
      </div>
     
        
      
  </div>
</div>

<section class="container">
  <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Buy Back/ Refund Policy</h3>
            <div class="titleline1"></div>
          <!--   <p><center> <img src="images/ref.jpeg" class="img-responsive"></center></p> -->
        <br>
        <p>If the Student is not satisfied with the service of Company, then the Agreement executed between the Company and the Student can be cancelled by the Student within period of 30 days. After cancelling the agreement, Company should refund the amount received from Student..</p><br>
    </div>
  </div>
</section>



<br>
<footer>
  <iframe frameborder="0" src="footer.html" scrolling="no" marginwidth="0" marginheight="0px"></iframe>
</footer>
<script type="text/javascript">
    function complaint(){
            var name = $('#name').val();
            var number = $("#number").val();
            var aid = $('#aid').val();
            var msg = $("#msg").val();
            // alert(aid + msg);
            // exit();
            $.ajax({
            method :'post',
            data : {name:name, number:number, aid:aid, msg:msg},
            url : 'complaint.php',
            success : function(data){
              // alert(data);
              if (data =='1') {
                alert('Something Went Wrong. Please Try Again Later...');
                location.reload();
              }else{
                if (data =='0') {
                    alert('All Fields are Compulsory...');
                }else{
                  alert('Your Complaint Submitted Successfully');
                  location.reload();
              }
                }
                
              
            }
            });
          }
</script>
<script type="text/javascript">
    function track(){
            var cmpid = $('#cmpid').val();
            // alert(cmpid);
            // exit();
            $.ajax({
            method :'post',
            data : {cmpid:cmpid},
            url : 'track_complaint.php',
            success : function(data){
              if(data=='0'){
                  alert('Invalid Complaint ID..');
                  location.reload();
              }else{
                $('#result').html(data);
              }
              
              
            }
            });
          }
</script>
<script type="text/javascript">
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    },
  function () {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });
    var specialKeys = new Array();
    specialKeys.push(8); //Backspace
    function IsNumeric(evt) {
        //debugger;
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>
<script type="text/javascript" src="js\marquee.js"></script>
</body>
</html>
