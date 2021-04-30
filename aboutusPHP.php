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
   <title>Coffee House - About Us</title>

   <!-- Bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <!-- CSS -->
   <link rel="stylesheet" type="text/css" href="../css/about.css">

	<!-- Webpage Icon -->
	
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html"><img style="height: auto;width: 180px;" src="../img/Logo/logo.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="main-navigation">
				  <ul class="navbar-nav ml-auto">
					  <li class="nav-item">
						<a class="nav-link" href="index.html">HOME</a>
					  </li>
					<li class="nav-item">
						<a class="nav-link" href="aboutus.html">ABOUT</a>
					</li>
					<li class="nav-item dropdown">
						<div class="dropdown">
			  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">SERVICES</a>
			  <div class="dropdown-menu dropdown-content">
				<a href="servWebDev.html">Web Dev</a>
				<a href="servMobileDev.html">Mobile Dev</a>
				<a href="servDatabase.html">Database</a>
				<a href="servLms.html">LMS</a>
				<a href="servEntertainment.html">Entertainment</a>
			  </div>
			</div>
				  </li>
					 <li class="nav-item">
					   <a class="nav-link" href="index.html">MENU</a>
					</li>
					 <li class="nav-item">
					  <a class="nav-link" href="contactus.html">CONTACT</a>
					</li>
					<li class="nav-item">
					  <button class="nav-link show-login-btn btn-outline-danger" type="button">LOGIN</button>
					  <div class="login-box">
						<div class="hide-login-btn"><i style="transform: rotate(43deg); color:red;" class="fa fa-plus"></i></div>
						
							<div class="tabs col-sm-12 my-5 ">
								<ul>
								  <li class="register_li">Register</li>
								  <li class="login_li">login</li>
								</ul>
							  </div>
							<div class="login">	  
								<form id="login-form" class="login-form" action="" method="post">
									<h1>Welcome User</h1>
						 		 		 <div class="field">
											 <input class="txtb" type="email" id="email" name="email" placeholder="Email Address" required>
								 			 <input class="txtb" type="password" id="password" name="password" placeholder="Password" required>
							 			</div>
							  			<div class="content">
											<div class="checkbox">
								 				<input type="checkbox" id="remember-me">
								  				<label for="remember-me">Remember me</label>
											</div>
											<div class="pass-link">
												 <a href="#">Forgot password?</a></div>
								  			</div>
						   					<input class="login-btn" type="submit" name="" value="Login">
						 		</form>
							</div>

							<div class="register">
								<form id="register-form" class="login-form"  method="post" enctype="multipart/form-data">
									<h1>Sign Up User</h1>
						 		 		 <div class="field">
											 <input class="txtb" type="firstname" id="firstname" name="firstname" placeholder="First Name" required>
											  <input class="txtb" type="lastname" id="lastname" name="lastname" placeholder="Last Name" required>
											  <input class="txtb" type="email" id="email" name="email" placeholder="Email Address" required>
											  <input class="txtb" type="password" id="password" name="password" placeholder="Password" required>
							 			</div>
							  			<div class="content">

											<div class="pass-link">
												 <a href="#">Are you done already?</a></div>
								  			</div>
											   <input id="regis" class="login-btn" type="submit" name="save-user" value="Register">
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
    <!-- About title/bg -->
	
	<div class="embed-responsive embed-responsive-21by9">
        <iframe width "560" height "315" src="https://www.youtube.com/embed/t8k71QcArnk"></iframe>
    </div>
   <!-- Description -->
   <section class="company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
      <div class="container text-center">
         <h2>ABOUT US</h2>
         <h3>COFFEE HOUSE</h3>
         <div class="col-md-12 col-md-offset-2">
            <div class="red-border">
               &nbsp;
            </div>
            <p class="ct-u-size20 ct-u-fontWeight300 marginTop40">
               In 2021, COFFEE HOUSE was founded by Rizza Castaneda, together with her teammates near in Quezon City campus located at 20th Avenue, Cubao. COFFEE HOUSE provide a coffee experience that customers will eagerly savor and enjoy. Their goal is to continuously build upon the quality of products, provide a friendly, comfortable atmosphere where the customer can receive quality food, service, and entertainment at a reasonable price.
          <br> <br>
			 For this, COFFEE HOUSE plans to offer products and services to all residents of Quezon City. Aside from coffee, the business will also include food and beverages. The customers purchase our products, must visit the website named “Coffee House” so that the customers can scroll and add to cart their desired products. The business intended to offer the best tasting and quality beverages and food items to the customers. Furthermore, the website of the business is looks approachable, stylish, and creative. It also accessible to all customers, fast load times, has effective navigation, and has usable forms for the visitors to experience a flawless website.
			</p>
			<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="../img/About/coffee1.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="../img/About/coffee2.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="../img/About/coffee3.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="../img/About/coffee4.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
</div>
			
         </div>
      </div>
   </section>
  <br> <br>
   <!-- OUR TEAM -->
<div class = "team container">
<h1>OUR TEAM</h1>
<div class="col-md-12 col-md-offset-2">
            <div class="red-border">
               &nbsp;
            </div>
<br>
<div class="row">

<div class="column">
      <div class="card">
        <div class="container">
      <img src="../img/About/sayper.jpg" alt="Rizza" style="width:100%">
       <div class="overlay">
	    <div class="social-links">
		<p>"Manager of being single <br> <br> HAHAHAHA jk."</p>
		<p><span>- Rizza Castaneda</span></p>
        <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/camusdancarlo/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/cdancarlo/"  target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>

      </div>
	  </div>           
        <h5>Rizza Castaneda </h5>
        <h6>Manager</h6>
        
      </div>
    </div>
  </div>


  <div class="column">
      <div class="card">
        <div class="container">
      <img src="../img/About/bertol.jpg" alt="Bertol" style="width:100%">
       <div class="overlay">
	    <div class="social-links">
		<p>"War is 90% information"</p>
		<p><span>- Rex Gabriel Bertol </span></p>
        <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/camusdancarlo/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/cdancarlo/"  target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>

      </div>
	  </div>           
        <h5>Rex Gabriel Bertol </h5>
        <h6>Web Analyst</h6>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">   
      <div class="container">
        <img src="./images/angela" alt="angela" style="width:100%">
       <div class="overlay">
	    <div class="social-links">
		<p>"Creativity is nothing but a mind set free"</p>
		<p><span>-Angela Boniza</span></p>
        <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/pandainok" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/"  target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>

      </div>
	  </div>    
        <h5>Angela Boniza</h5>
        <h6>Web Designer</h6>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
     <div class="container">
      <img src="../img/About/jolo.jpg" alt="Jolo" style="width:100%">
       <div class="overlay">
	    <div class="social-links">
		<p>"Data that is love tends to <br><br>survive"</p>
		<p><span>-John Lorenz Briones</span></p>
        <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100008818478628" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/"  target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>

      </div>
	  </div>  
        <h5>John Lorenz Briones</h5>
        <h6>Web analyst</h6>
       
       
      </div>
    </div>
  </div>


 <div class="column">
    <div class="card">
     <div class="container">
      <img src="../img/About/kyle.jpg" alt="kyle" style="width:100%">
       <div class="overlay">
	    <div class="social-links">
		<p>"Give me a break."</p>
		<p><span>-Kyle Bojo Cruz</span></p>
        <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/jhepoybangud" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/"  target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>

      </div>
	  </div>  
        <h5>Kyle Bojo Cruz </h5>
        <h6>HTML programmer</h6>
       
        
      </div>
    </div>
  </div>


 <div class="column">
    <div class="card">
      <div class="container">
      <img src="../img/About/julia.jpg" alt="Julia" style="width:100%">
       <div class="overlay">
	    <div class="social-links">
		<p>"Do the one thing you think <br><br> you cannot do."</p>
		<p><span>-Juliana Rose Impoc</span></p>
        <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/julianarose.impoc" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/"  target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>

      </div>
	  </div>  
        <h5>Juliana Rose Impoc </h5>
        <h6>Content Creator</h6>
        
   
      </div>
    </div>
  </div>


   <div class="column">
    <div class="card">
      <div class="container">
      <img src="../img/About/samson.jpg" height="315"alt="samson" style="width:100%">
        <div class="overlay">
	    <div class="social-links">
		<p>"You are the CSS to my HTML."</p>
		<p><span>-Gabriel Samson</span></p>
        <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/xJyonasx" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/"  target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>

      </div>
	  </div>  
        <h5>Gabriel Samson</h5>
        <h6>HTML Programmer</h6>
        
   
        
      </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
      <div class="container">
      <img src="./images/mamon.jpg" height="315"alt="John" style="width:100%">
        <div class="overlay">
	    <div class="social-links">
		<p>"What gets measured gets improved."</p>
		<p><span>-Charl Vince Versoza</span></p>
        <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/xJyonasx" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/"  target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>

      </div>
	  </div>  
        <h5>Charl Vince Versoza</h5>
        <h6>Web Analyst</h6>
        
   
        
      </div>
    </div>
  </div>
  </div>
</div>
</main>
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
	<!-- SweetAlert2 CDN -->
	<script src="sweetalert2.all.min.js"></script>
	<!-- SweetAlert CDN -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
   <!-- FontAwesome 5.0.13 -->
   <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
   
   <!-- about.js -->
   <script type="text/javascript" src="../js/about.js"></script>

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