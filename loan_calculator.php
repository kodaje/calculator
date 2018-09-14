<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>G-Mart | Insurance Calculator</title>

   	<!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-te.css">
    <link rel="stylesheet" href="css/slick.css">  
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
	
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">


	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
    
    
    
    
     <link href="css/datetimepicker.css" rel="stylesheet" type="text/css"/>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.0/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="js/datetimepicker.js"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <!-- <style>
        body{ background-color: beige; direction: ltr; font-family: 'Roboto';}
        h1 { margin-top: 150px; text-align: center; }
    </style>-->
   
   
   
   <style>
	label, div input, div select {
	display: block;
	margin: 0.5em 0;
}

label {
	font-weight: bold;
}

form p {
	margin: 0.5em 0;
}


#ncdstyle{
	font-size: 36px;
	padding-left: 12px;
	padding: 40px;

	
}

</style>

 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>


<script>
	
	

(function($) {
	$.fn.calculateMortgage = function(options) {
		var defaults = {
			currency: 'RM',
			params: {}
		};
		options = $.extend(defaults, options);
		
		var calculate = function(params) {
			params = $.extend({
				balance: 0,
				rate: 0,
				enggine: 0
				//period: 0
			}, params);
			
			
			
			//var N = params.term * params.period;
			//var I = (params.rate / 100) / params.period;
			//var v = Math.pow((1 + I), N);
			//var t = (I * v) / (v - 1);
			//var result = params.balance * t;
			//1calculate refer NCD % 
			
			var abc = params.rate; //interest rate
			var def= params.balance; //loan amount
			//var ghi = params.enggine;
			
			
					
			
			
			//var result = (params.balance - 1)*26+pricerate;
			//var result1 = result-(result*abc/100);//NCD-55%

			
			var result = (( ( (params.balance * params.rate) /100)*9)+params.balance)/108;
			//var result = params.balance;
			
			
			
			return result;
		
		};
		
		return this.each(function() {
			var $element = $("#loanp");
			var $result = calculate(options.params);
			var output = '<span>'+ options.currency + ' ' + $result.toFixed(2) + '</span>';
			
			
			
			
			//var $sst = $result.toFixed(2) * 0.06;
			//var output2 = '<span>'+ options.currency + ' ' + $sst.toFixed(2) + '</span>';
			
			//var $total = $result+($result * 0.06);
			//var output3 = '<span>'+ options.currency + ' ' + $total.toFixed(2) + '</span>';


			
			//$(output).appendTo($element);
			 $("#loanp").html(output);
		
		});
	
	};


})(jQuery);

$(function() {
	$('#test').on('submit', function(e) {
		e.preventDefault();
		var $params = {
			balance: $('#balance').val(),
			rate: $('#rate').val()
			//enggine: $('#enggine').val()
			//period: $('option:selected', '#period').val()
		};
		
		$(this).calculateMortgage({
			params: $params
		})
	
	});	


});


	
</script>
    
   

  </head>
  <body class="job-post-page">
	<header class="tr-header">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://cars.g-mart.my/"><img class="img-responsive" src="images/gmart2018.png" alt="Logo"></a>
				</div>
				<!-- /.navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<!--<li class="tr-dropdown"><a href="#">Home</a>
								<ul class="tr-dropdown-menu left tr-list fadeInUp" role="menu">
							        <li><a href="index.html">Home Page V-1</a></li>
							        <li><a href="index1.html">Home Page V-2</a></li>
								</ul>
							</li>-->
							<!--<li class="active"><a href="job-post.html">Perodua</a></li>
							<li><a href="listing.html">Honda</a></li>
							<li><a href="job-details.html">Toyota</a></li>
							<!--<li class="tr-dropdown"><a href="#">Pages</a>
								<ul class="tr-dropdown-menu tr-list fadeInUp" role="menu">
							        <li><a href="employee-profile.html">Employee Profile</a></li>
							        <li><a href="employer-profile.html">Employer Profile</a></li>
							        <li><a href="view-compnay.html">View Compnay</a></li>
							        <li><a href="view-resume.html">View Resume</a></li>
							        <li><a href="coming-soon.html">Coming Soon</a></li>
							        <li><a href="notification.html">Notification</a></li>
							        <li><a href="contact.html">Contact</a></li>
							        <li><a href="pricing.html">Pricing</a></li>
							        <li><a href="signup.html">Sign Up</a></li>
							        <li><a href="signin.html">Sign In</a></li>
							        <li><a href="500.html">500 Opsss</a></li>
							        <li><a href="404.html">404 Error</a></li>
								</ul>
							</li>-->
						</ul>
					</div>
				</div><!-- /.navbar-left -->

				<div class="navbar-right">			
					<div class="dropdown tr-change-dropdown">
 						<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">PERODUA</span><i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu tr-change tr-list">
							<li><a href="#">ALL MODEL CATALOG</a></li>
							<li><a href="#">PERODUA SERVICE</a></li>
						</ul>								
					</div><!-- /.language-dropdown -->					
					
					<div class="dropdown tr-change-dropdown">
 						<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">HONDA</span><i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu tr-change tr-list">
							<li><a href="#">SALOON CAR CATALOG</a></li>
							<li><a href="#">CROSSOVER-SUV-MPV</a></li>
							<li><a href="#">HONDA SERVICE</a></li>

						</ul>								
					</div><!-- /.language-dropdown -->	
					
					<div class="dropdown tr-change-dropdown">
 						<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">TOYOTA</span><i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu tr-change tr-list">
							<li><a href="#">SEDAN CAR CATALOG</a></li>
							<li><a href="#">MPV CATALOG</a></li>
							<li><a href="#">4WD-SUV-VAN</a></li>
							<li><a href="#">TOYOTA SERVICE</a></li>


						</ul>	 					
					</div><!-- /.language-dropdown -->	
					
					<div class="dropdown tr-change-dropdown">
 						<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">HOME</span><i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu tr-change tr-list">
							<li><a href="#">LOAN APPLICATION</a></li>
							<li><a href="#">MEMBERSHIP</a></li>


						</ul>	 					
					</div><!-- /.language-dropdown -->	
					
					
					<!--<div class="dropdown tr-change-dropdown">
 						<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">MORE</span><i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu tr-change tr-list">
							<li><a href="testdrive.php">BOOK A TEST DRIVE</a></li>
							<li><a href="loancalc.php">LOAN CALCULATOR</a></li>
							<li><a href="appointment.php">MAKE SERVICE APPOINTMENT</a></li>



						</ul>	 					
					</div><!-- /.language-dropdown -->	
					
					
									

				</div><!-- /.nav-right -->
			</div><!-- /.container -->
		</nav><!-- /.navbar -->
	</header><!-- /.tr-header -->

	<div class="tr-breadcrumb bg-image section-before">
		<div class="container">
			<div class="breadcrumb-info text-center">
				<div class="page-title">
					<h1>Car <br> <font color='yellow'>Loan Calculator</font></h1>
				</div>		
				
			</div>
		</div><!-- /.container -->
	</div><!-- /.tr-breadcrumb -->

	<div class="tr-post-job page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="short-info code-edit-small">
						<div class="section">
							
							
							<form action="#" method="post" id="test">
							<span class="tr-title">Estimate Payment Per Month</span>
							<div class="row">
								<div class="col-sm-3">
									<label>Loan Amount</label>
								</div>
								<div class="col-xs-2">
									<input name="balance" id="balance" type="text" value ="100000" class="form-control"/>
 								</div>
							</div><!-- /.row -->
							
							
							
							<!--<div class="row">
								<div class="col-sm-3">
									<label>Down Payment</label>
								</div>
								<div class="col-sm-9">
									 
									<div class="row">
										<div class="col-sm-6">
											<!--<select name="engine" id="enggine" class="form-control">	
											<option value ="1">>1400cc</option>
											<option value ="2">1401cc-1650cc</option>
											<option value ="3">1651cc-2200cc</option>
											<option value ="4">2201cc-3050cc</option>
											<option value ="5">3051cc-4100cc</option>
											</select>-->
											<!--<input type ="text" name ="dp" class ="dp">
										</div>
									</div>									
								</div>
							</div><!-- /.row -->
							
						<div class="row">
								<div class="col-sm-3">
									<label>Interest Rate</label>
								</div>
								<div class="col-sm-9">
									 
									<div class="row">
										<div class="col-sm-6">
											<select name="rate" id="rate" class="form-control">	
											<option value ="2.5">2.5%</option>
											<option value ="2.8">2.8%</option>
											<option value ="3.05">3.05%</option>
											<option value ="3.5">3.5%</option>
 											</select>
										</div>
									</div>									
								</div>
							</div><!-- /.row -->
							
							
							
							<!--<div class="row">
								<div class="col-sm-3">
									<label>Loan Period</label>
								</div>
								<div class="col-sm-9">
									 
									<div class="row">
										<div class="col-sm-6">
											<select name="period" id="period" class="form-control">	
											<option value ="5">5</option>
											<option value ="7">7</option>
											<option value ="9">9</option>
 											</select>
										</div>
									</div>									
								</div>
							</div><!-- /.row -->

							
							
						<p><input type="submit" id="submit" name="submit" value="Calculate" class="btn btn-primary"/></p>	
    					
					</form>	


<p align="right" class="ncdstyle">Payment Per Month is: <span id="loanp"></span></p>

							
						</div>
					</div>
					
					
	
				</div>
				
							
				<div class="col-sm-3">
					<div class="section quick-rules">
						<span class="tr-title">Location of Services</span>
	<p>For information about Service location,please visit <a href="http://g-mart.my/gmartcorporation/contact-us/" target="_blank">here</a></p>


						
						
						<span class="tr-title">General Information</span>
						
						<p>Service Hour(Perodua)</p>
						
						<p><strong>Monday-Friday<br>
						8.30 am - 4.30 pm</strong>
						</p>
						
						
						<p><strong>Saturday<br>
						8.30 am - 4.30 pm</strong>
						</p>	


							<li><a href="index.php">NCD Calculator</a></li>
							<li><a href="loan_calculator.php">Loan Calculator</a></li>
						
						<!--<ul class="tr-list">
							<li>Make sure you post in the correct category.</li>
							<li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
							<li>Do not upload pictures with watermarks.</li>
							<li>Do not post ads containing multiple items unless it's a package deal.</li>
							<li>Do not put your email or phone numbers in the title or description.</li>
						</ul>-->
						
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.tr-post-job -->

		

	<div class="footer">
		
		<div class="footer-top section-padding">
			<!--<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>About Us</h3>
							<ul class="tr-list">
								<li><a href="#">About Seeker</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">International Partners</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Feedback</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>Job Seekers</h3>
							<ul class="tr-list">
								<li><a href="#">Create Account</a></li>
								<li><a href="#">Career Counseling</a></li>
								<li><a href="#">My Bdjobs</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Video Guides</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>Employers</h3>
							<ul class="tr-list">
								<li><a href="#">Create Account</a></li>
								<li><a href="#">Products/Service</a></li>
								<li><a href="#">Post a Job</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>Newsletter</h3>
							<p>Earum cumque doloribus, incidunt! Tempora voluptatibus</p>
							<form class="contact-form" method="post" action="">
								<div class="form-group">
								    <input type="email" class="form-control" placeholder="Your email Id">
								</div>             
							    <div class="form-group">
							        <button type="submit" class="btn btn-primary">Sign Up</button>
							    </div>
							</form>
						</div>
					</div>
				</div><!-- /.row --
			</div><!-- /.container -->
		</div><!-- /.footer-top -->
		
		<div class="footer-bottom">
			<div class="container">
				<div class="copyright">
					<p>Copyright © 2018 <a href="#">cars.g-mart.my</a> All rights reserved.</p>
				</div>
				<div class="footer-social pull-right">
					<ul class="tr-list">
						<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div><!-- /.footer-bottom -->
	</div><!-- /.footer -->



    <!-- JS -->
   <!--<script src="js/jquery.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/inview.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery-te.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
    
        <!--<script src="js/jquery-1.6.3.min.js"></script>-->

    
    
    
    
    
    
  </body>
</html>	
