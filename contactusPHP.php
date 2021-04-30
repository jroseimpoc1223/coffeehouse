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
    <title>Sylutech Solutions Inc. - About Us</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  <!-- FontAwesome 4.7.0 -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../css/contact.css">

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
                      <a class="nav-link" href="indexPHP.php">HOME</a>
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
                    <a class="nav-link" href="#">CONTACT</a>
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
  <!-- About title/bg -->
    <div id="about">
      <div class="landing-text">
        <h1>Contact US</h1>
      </div>
    </div>

    <section class="company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
      <div class="container text-center">
         <h2>FAQ</h2>
         <h3>We hope we can answer your question below, but if not, feel free to contact us!</h3>
      </div>
   </section>

   <!-- Accordian -->
   <div class="accordian">
    <h2>SERVICES</h2>
    <div class="card">
        <div class="card-header">
           <h3>What services do you offer for Web Development?</h3>
           <span class="fa fa-plus"></span>
        </div>
        <div class="card-body">
            <p>About creating Healthcare and food delivery website is our priority,
              but we are open in creating different websites for the customer.
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
           <h3>What does your healthcare system offers?</h3>
           <span class="fa fa-plus"></span>
        </div>
        <div class="card-body">
            <p>We offer a Workout and meal planner guide for healthy living lifestyle</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
           <h3>What is a food delivery system?</h3>
           <span class="fa fa-plus"></span>
        </div>
        <div class="card-body">
            <p>It is a courier service in which a restaurant, store or independent 
              food-delivery company delivers food to a customer.
            </p>
        </div>
    </div>
    <div class="card">
      <div class="card-header">
         <h3>What services do you offer for Mobile Application?</h3>
         <span class="fa fa-plus"></span>
      </div>
      <div class="card-body">
          <p>We are offering mobile development mainly in Android App Service, 
            and iOS App Services.
          </p>
      </div>
  </div>
      <div class="card">
        <div class="card-header">
           <h3>What is a Database Monitoring System?</h3>
           <span class="fa fa-plus"></span>
        </div>
        <div class="card-body">
            <p>Our DMS tracks the database performance and resources in order to create and maintain
               a high performance and highly available application infrastructure.
            </p>
        </div>
    </div>
    <div class="card">
      <div class="card-header">
         <h3>What is a Learning Management System?</h3>
         <span class="fa fa-plus"></span>
      </div>
      <div class="card-body">
          <p>It is used to support learning by providing a 
            space where materials can be stored and organized wherein 
            students and teachers can interact using forums and so on.
          </p>
      </div>
  </div>
    <div class="card">
      <div class="card-header">
         <h3>What is E-sports?</h3>
         <span class="fa fa-plus"></span>
      </div>
      <div class="card-body">
          <p>Our DMS tracks the database performance and resources in order to create and maintain
             a high performance and highly available application infrastructure.
          </p>
      </div>
  </div>
  <div class="card">
    <div class="card-header">
       <h3>What does your E-sport website offer?</h3>
       <span class="fa fa-plus"></span>
    </div>
    <div class="card-body">
        <p>Gamer fans can buy tickets online to watch a live E-sports competition in arena or watch 
          live streams for free in this website.
        </p>
    </div>
</div>
</div>

</div>

<div style="margin-top: 9.5%;" class="accordian">
  <h2 >OTHERS</h2>
  <div class="card">
      <div class="card-header">
         <h3>Where can I see the prices? </h3>
         <span class="fa fa-plus"></span>
      </div>
      <div class="card-body">
          <p>You can check it on the Prices Page.
          </p>
      </div>
  </div>
  <div class="card">
      <div class="card-header">
         <h3>Do you have packages?</h3>
         <span class="fa fa-plus"></span>
      </div>
      <div class="card-body">
          <p>Yes, it’s on the Pricing Page</p>
      </div>
  </div>
  <div class="card">
      <div class="card-header">
         <h3>Do you provide price matching or adjustments?</h3>
         <span class="fa fa-plus"></span>
      </div>
      <div class="card-body">
          <p>Sorry, Sylutech Solutions does not offer price matching or adjustments at this time.</p>
      </div>
  </div>
  <div class="card">
    <div class="card-header">
       <h3>How can I reach out to you?</h3>
       <span class="fa fa-plus"></span>
    </div>
    <div class="card-body">
        <p>You can email us at info@sylutech.org</p>
    </div>
</div>
<div class="card">
  <div class="card-header">
     <h3>How to order??</h3>
     <span class="fa fa-plus"></span>
  </div>
  <div class="card-body">
      <p>Fill-up the form in the contacts tab and we’ll rspond to you right away.</p>
  </div>
</div>
</div>

	<!-- Contact Us -->
	<section class="contact">
		<div id="Contact" class="contact-box">
			<div class="left"></div>
			<div class="right">
        <h4 class="contactP">CAN'T FIND THE ANSWER TO YOUR QUESTION?</h4>
				<h2>WE'RE HERE TO HELP</h2>
				<p>Whether you have question about features, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions</p>
				<input type="text" class="field" placeholder="Your Name">
				<input type="text" class="field" placeholder="Your Email">
				<input type="text" class="field" placeholder="Phone">
				<textarea placeholder="Message" class="field"></textarea>
				<button class="btn">Send</button>
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
	
	<!-- SweetAlert2 CDN -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- SweetAlert CDN -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  
  <!-- contact.js -->
  <script type="text/javascript" src="../js/login2.js"></script>
  <script type="text/javascript" src="../js/contact.js"></script>

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