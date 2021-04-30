<?php
include_once('connection/start.php');
require_once('connection/connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $password = $dst1 = '';
$sql = "SELECT * FROM usertable WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$password = $row['Password'];
		$ds1 = $row["Image"];
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sylutech Solutions Inc. - Home</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<!-- Webpage Icon -->
	<link rel="SHORTCUT ICON" href="../img/Logo/sylutechico.png" type="image/x-icon" />
	<link rel="ICON" href="../img/Logo/sylutechico.png" type="image/ico" />


</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="indexPHP.php"><img style="height: auto;width: 180px;" src="../img/Logo/logo.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="main-navigation">
				  <ul class="navbar-nav ml-auto">
					  <li class="nav-item">
						<a class="nav-link" href="#">HOME</a>
					  </li>
					<li class="nav-item">
						<a class="nav-link" href="aboutusPHP.php">ABOUT</a>
					</li>
					<li class="nav-item dropdown">
						<div class="dropdown">
			  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">SERVICES</a>
			  <div class="dropdown-menu dropdown-content">
				<a href="servWebDevPHP.php">Web Dev</a>
				<a href="servMobileDevPHP.php">Mobile Dev</a>
				<a href="servDatabasePHP.php">Database</a>
				<a href="servLmsPHP.php">LMS</a>
				<a href="servEntertainmentPHP.php">Entertainment</a>
			  </div>
			</div>
				  </li>
					 <li class="nav-item">
					   <a class="nav-link" href="pricingPHP.php">PRICE</a>
					</li>
					 <li class="nav-item">
					  <a class="nav-link" href="contactusPHP.php">CONTACT</a>
					</li>
					<li class="nav-item">
					  <button class="nav-link show-login-btn btn-outline-danger" type="button">ACCOUNT</button>
					  <div class="login-box">
						<div class="hide-login-btn"><i style="transform: rotate(43deg); color:red;" class="fa fa-plus"></i></div>
						
							<div class="tabs2">
								<ul>
								  <li class="login_li">Profile</li>
								  <li class="register_li">Edit</li>
								</ul>
							  </div>

							<div class="MainProfile">	  
								<div class="prof">
								 <div class="card">

									 <?php 
									 	if (empty($ds1)) {
											echo '<img src="../img/mark2.jpg" alt="defaultprofile">';
										}
									  ?>
									<?php if(!empty($ds1)) { ?>
    										<img src="connection/<?php echo $ds1 ?>">
									<?php } ?>

									  <h1><?php echo $fname." ".$lname ?></h1>
									  
									  <p class="title"><?php echo $email; ?></p>
									  <br>
									  <form action="connection/logout_code.php">
									  	<button class="btn">Logout</button>
									  </form>
    							 </div>
								</div>
							</div>
							<div class="register">
							<form id="update-form" action="connection/edit_code.php" class="login-form" method="POST" enctype="multipart/form-data">
									<h1>Edit User Details</h1>
						 		 		 <div class="field">
											 <input class="txtb" type="firstname" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $fname; ?>" required>
											  <input class="txtb" type="lastname" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $lname; ?>" required>
											  <input class="txtb" type="email" id="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>" required>
											  <input class="txtb" type="password" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>" required>
											  <input class="txtb" type="file" id="f1" name="f1" placeholder="Image">
							 			</div>
											   <input id="update" class="login-btn" type="submit" name="update" value="Update">
											   <input id="delete" class="login-btn1" type="" name="delete" value="Delete">	   
								 </form>
							</div>

						</div>
							
					  </div>
					</li>
				  </ul>
			  </div>
		</div>

		<div class="progress-container">
		 <div class="progress-bar" id="myBar"></div>
	   </div>
	 </nav>
	 <!-- End of Navigation -->
	  <!-- Image Slider -->  
      <header>
        <div id="slides" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
					<div class="overlay">
						<img src="../img/Index/mainBG1.png" alt="1st Slide">
					</div>
                    <div class="carousel-caption">
                        <h1 class="display-2">Inspire a true connection</h1>
                        <p>Highly Professional. Affordable & Effective Solutions</p>
                        <button type="button" class="btn btn-primary btn-lg">Get Started</button>
                    </div>
                </div>
                <div class="carousel-item">
					<img src="../img/Index/mainBG2.png" alt="2nd Slide">
                </div>
                <div class="carousel-item">
                    <img src="../img/Index/mainBG3.png" alt="3rd Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
	  </header>
	  <!-- End of Image Slider -->
	  <!-- About Us -->
	  <section class="ab">
	 	 <div class="about">
     		 <div class="inner-section">
        	    <h1>About Us</h1>
         	   <p class="text">
					Sylutech Solutions is fully committed to be the technology industry's first-choice solution partner, 
					offering IT and connectivity services to businesses around the country. 
					We will become an integral part of the success of our clients, working with them to achieve 
					their strategic goals and building long-lasting market value through their technology delivery 
					and management. We are offering:
			   </p>
			   <div class="Pbars">
                <div class="Pbar">
                  <div class="title">Web Development</div>
                  <div class="progress">
                    <div class="progress-bar p1"><span>90%</span></div>
                  </div>
                </div>
                <div class="Pbar">
                  <div class="title">Mobile Development</div>
                  <div class="progress">
                    <div class="progress-bar p2"><span>70%</span></div>
                  </div>
                </div>
                <div class="Pbar">
                  <div class="title">Learning Management System</div>
                  <div class="progress">
                    <div class="progress-bar p3"><span>50%</span></div>
                  </div>
				</div>
				<div class="Pbar">
					<div class="title">Database Management</div>
					<div class="progress">
					  <div class="progress-bar p4"><span>30%</span></div>
					</div>
				  </div>
				  <div class="Pbar">
					<div class="title">Entertainment</div>
					<div class="progress">
					  <div class="progress-bar p5"><span>10%</span></div>
					</div>
				  </div>
           		<div class="skills">
					<form action="aboutus.html">
							<button class="btn">Learn More</button>
					</form>
         		</div>
      	    </div>
	 	  </div>
		</section>
	  <!-- End of About Us -->
      <!-- Services -->
      <section class="section-services">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-md-10 col-lg-8">
					<div class="header-section">
						<h2 class="title">OUR SERVICES</h2>
						<p class="description">Technology is continually changing, making it daunting to navigate. 
							We pride ourselves in our ability to simplify and break through the complexity of digital trends. 
							We will guide you through the best options in the most effective way possible to fulfill your business 
							needs.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="content">
							<span class="icon">
								<i class="far fa-file-code"></i>
							</span>
							<h3 class="title">Web Development</h3>
							<p class="description">By creating templates that display the best of any brand 
								and building websites that engage users, we take web design to the next level. 
								Let us be your partner in our web design business.</p>
							<a href="servWebDevPHP.php" class="learn-more">Learn More</a>
						</div>
						<span class="circle-before"></span>
					</div>
				</div>
				<!-- / End Single Service -->
				<!-- Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="content">
							<span class="icon">
								<i class="fas fa-mobile-alt"></i>
							</span>
							<h3 class="title">Mobile Development</h3>
							<p class="description">Our team will help you build realistic and seamless 
								experiences on IOS and Android and get the best of mobile technology for 
								your company, using solid expertise in the creation of mobile apps.</p>
							<a href="servMobileDevPHP.php" class="learn-more">Learn More</a>
						</div>
						<span class="circle-before"></span>
					</div>
				</div>
				<!-- / End Single Service -->
				<!-- Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="content">
							<span class="icon">
								<i class="fas fa-server"></i>
							</span>
							<h3 class="title">Database Management</h3>
							<p class="description">Our team will help you provide a stable and scalable infrastructure. 
								Our team tracks and manages easy to complicated databases proactively, 
								and collaborates with you for tuning and optimization.</p>
							<a href="servDatabasePHP.php" class="learn-more">Learn More</a>
						</div>
						<span class="circle-before"></span>
					</div>
				</div>
				<!-- / End Single Service -->
				<!-- Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="content">
							<span class="icon">
								<i class="fab fa-leanpub"></i>
							</span>
							<h3 class="title">Learning Management System</h3>
							<p class="description">Our team is has years of working in creating multi-component learning 
								solutions that deliver business value. We will work with you to understand your strategic 
								goals and then design, configure and maintain the Learning Ecosystem to specification so 
								that it delivers as promised.
							</p>
							<a href="servLmsPHP.php" class="learn-more">Learn More</a>
						</div>
						<span class="circle-before"></span>
					</div>
				</div>
				<!-- / End Single Service -->
				<!-- Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="content">
							<span class="icon">
								<i class="fas fa-compact-disc"></i>
							</span>
							<h3 class="title">Media and Entertainment</h3>
							<p class="description">Our team 
								use emerging social, electronic, and web technology, while bringing substantially more value 
								to your offerings. Our services are custom-tuned according to your requirements and help you minimize 
								costs, and introduce strict anti-piracy measures that helps customers.</p>
							<a href="servEntertainmentPHP.php" class="learn-more">Learn More</a>
						</div>
						<span class="circle-before"></span>
					</div>
				</div>
				<!-- / End Single Service -->
			</div>
		</div>
	</section>
	<!-- / END SECTION SERVICES -->
	<!-- Pricing Text -->
	<div class="comtainer-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Why Choose Us</h1>
				<hr>
			</div>
		</div>
	</div>
	<!-- Pricing 3 Column -->
	<div id="cln" class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-palette"></i>
				<h3>Elegant and Modern Design</h3>
				<p>The designs we make are designs that are trending.
					Our team<br> is 100% sure that our solutions will look outstanding.
				</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-desktop"></i>
				<h3>High End Analyzing</h3>
				<p>We carefully analyze the data for the customers.
					Our team<br> assured that our solutions we make are always safe and secure.
				</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-rocket"></i>
				<h3>Our Dedicated Support</h3>
				<p>We are always there for you. We always reply and help at any<br> kind of problems
					and questions related to our services 24/7.
				</p>
			</div>
		</div>
		<hr class="my-4">
	</div>
	<!-- Pricing Description -->
	<div id="Pricing" class="container-fluid padding">
		<div id="Pricingtxt" class="row padding">
			<div class="col-lg-6">
				<h2>Get the best package for your business</h2>
				<br>
				<p>We work systematically to integrate corpororate responsibility in our
					core business <br>and make our expertise available for the benefit of the 
					societies where we operate.
				</p>
				<br>
				<i class="fas fa-check"></i>
				<p>Application that is easy to use and easy for users to understand</p>
				<i class="fas fa-check"></i>
				<p>We have supported libraries that libraries needed</p>
				<i class="fas fa-check"></i>
				<p>Perfect for large sites or agencies that manage many clients</p>
				<br>
				<a href="pricingPHP.php" class="btn btn-primary">Get Started</a>
			</div>
			<div class="col-lg-6">
				<img class="img-fluid" src="../img/Index/IT.png" alt="Pricing picture">
			</div>
		</div>
	</div>
	<!-- End of Pricing -->
	<!-- Fixed background -->
	<hr class="my-4">
	<div id="fixed"></div>
	<!-- Contact Us -->
	<section class="contact">
		<div id="Contact" class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact our Support team</h2>
				<p>Need to get in touch with the team? We're all ears</p>
				<form method="get" action="contactus.html">
					<button class="btn"> Contact Us</button>
				</form>
			</div>
		</div>
	</section>
	<!-- End of Contact Us -->
	<!-- Footer -->
	<footer class="page-footer">
		<div class="container">
		  <div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12">
			<p>Sylutech Solutions Inc. is a company striving to help the customers that are in need of making solutions for web, mobile, learning, database, and entertainment. 
			   Sylutech is trademark or registered trademark of Sylutech Solutions, Inc. Contact Us to recieve web tips every two weeks. </p>
		   
		  </div>
		  <div class="col-lg-4 col-md-4 col-sm-12">
			<h6 class="text-uppercase font-weight-bold">Contact</h6>
			<p>1450 San Mateo, Rizal
			<br/>info@Sylutech.org
			<br/>+ 63 965 643 6742
			<br/>+ 63 969 636 5242</p>
		  </div>
		</div>
		<div class="footer-copyright text-center">© 2020 Copyright: Sylutech.org</div>
	</footer>

	<!-- =======================SCRIPTS======================= -->

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
	
	<!-- Bootstrap -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	
	<!-- SweetAlert2 CDN -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<!-- FontAwesome 5.0.13 -->
	<script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>

	<!-- FOR LOGIN2 -->
	<script type="text/javascript" src="../js/login2.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>


	<!-- Delete Data -->
	<script>
		$("#delete").click(function(){
			Swal.fire({
  			title: 'Are you sure?',
  			text: "You won't be able to revert this!",
  			icon: 'warning',
  			showCancelButton: true,
  			confirmButtonColor: 'red',
  			cancelButtonColor: 'green',
  			confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
  			if (result.isConfirmed) {
    			Swal.fire(
     			 'Deleted!',
     			 'Your Account has been deleted. Wait for the page to reload',
      			'success',
   			 )
			setTimeout(function(){
				window.location.href = `connection/delete_code.php?id=<?php echo $id; ?>`
			}, 3000);
 			 }

			})	

		})

	</script>
</body>
</html>