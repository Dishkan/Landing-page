<?php
   session_start();
   if(isset($_POST["send"])) {
   $name = $_POST["from"];
   $number = $_POST["number"];
   $to = "DH.17@mail.ru";
   $subject = $_POST["subject"];
   $message = $_POST["message"];
   $error_from = "";
   $error_number = "";
   $error_subject = "";
   $error_message = "";
   $error = false;
      if (strlen($name) == 0){
	    $error_from = "The name and surname are not written";
		$error = true;
   }
      if (strlen($number) == 0){
	    $error_number = "There is no phone number";
		$error = true;
   }
   if (strlen($subject) == 0){
	    $error_subject = "There is no written topic";
		$error = true;
   }
      if (strlen($message) == 0){
	    $error_message = "There is no written message";
		$error = true;
   }
   if (!$error) {
	 // $subject = "?windows-1251?B?".base64_encode($subject)."?=";
	 // $headers = "From: $name\r\nReply-to: $email\r\nContent-type: text/plain; charset=windows1251\r\n";
      mail($to, $subject, $message, $headers);
	  header("Location: index.php?send=1");
	  exit;
  }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saud Modasir</title>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="fancybox/jquery.fancybox.css" />
</head>
<body>
	<section id="header">
		<div class="section-table">
			<div class="section-row">
				<div class="section-cell">
<div class="topnav wow zoomIn">
  <a id="scrollProduct" href="#materials">Materials</a>
  <a id="scrollQuality" href="#quality">Quality</a>
  <a id="scrollContact" href="#contact">Contact</a>
</div>
					<div class="lang">
						<a href="uzbek.php">Uzbek</a>
						<span>|</span>
						<a href="index.php">Russian</a>
					</div>
					<div class="section-center">
						<p class="logo wow bounce">
							<img src="img/SM2.png" alt="logo">
						</p>
          
						<p class="wow zoomIn">This company is engaged in the import of building materials from around the world for the construction of small and large buildings!</p>
					</div>
	    <div class="slide-down" id="scrollDown">
	    	<i class="glyphicon glyphicon-menu-down"></i>
            <div class="line"></div>
        </div>
        <button id="back2Top" title="Back to top">^</button>
				</div>
			</div>
		</div>
	</section>
	
	<section id="speakers">
		<div class="container">
			<div class="row">
				<div class="col-md-6 wow slideInUp">
					<h2>The main tasks of our company</h2>
					<p class="large">We import high-quality building materials from foreign countries and sell to our customers at an optimal and low price for the construction of durable and reliable buildings in Uzbekistan. You can confidently rely on the fact that our building materials are among the best in the world and you will want to use them again contact us if necessary. This is proved by our customers.</p>
				</div>
				<div class="col-md-6 row-item-col wow fadeInDown">
					<div class="section-tabs">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Guaranteed quality of our materials</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content clearfix">
							<div role="tabpanel" class="tab-pane fade in active" id="home">
								<p>Our customers were satisfied after orders and recommend it to others. We sell top quality materials through import from foreign countries!</p>
								<ul class="list-unstyled pull-left">
									<li><i class="fa fa-check-circle"></i>License</li>
									<li><i class="fa fa-check-circle"></i>References</li>
								</ul>
							</div>
						</div>
					</div><!-- /.section-tabs -->
				</div>
			</div>
		</div>
	</section>

	<section id="events">
		<div class="container">
			<div class="row">
				<div class="col-md-6 row-item-col wow fadeInDown">
					<h2>Schedule</h2>
					<p class="large">We work from 9:00 am to 6:00 pm. Our operators are available during this time, call at an affordable time!</p>
				</div>
				<div class="col-md-6 wow slideInUp">
					<div class="section-tabs">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#nav18" aria-controls="home" role="tab" data-toggle="tab">Schedule</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content clearfix">
							<div role="tabpanel" class="tab-pane fade in active" id="nav18">
								<p class="tab-collapse clearfix">
									<span class="beg">From</span>
									<span class="time">09:00 AM</span>
									<span class="aft">to</span>
									<span class="time2">6:00 PM</span>
							</div>

						</div>
					</div><!-- /.section-tabs -->
				</div>
			</div>

			<div class="row row-item about">
				<div class="col-md-12 row-item-col wow fadeInDown">
					<h2>About us</h2>
					<p class="large">Our company is engaged in the import of high-quality building materials from foreign countries of the world. We have been on the market for several years and have already proved to be the trustee of our customers who trust us with their projects through our imported building materials for the construction of residential and complex buildings.There are <span>cement, fittings, diesel, polyethylene</span> and much more.If you have any questions about our company or building materials, you can feel free to contact us by phone number or by mail. Below are all the necessary data and the address of our office if you need to meet with us.</p>
				</div>
			</div>
			
	<div id="myCarousel" class="carousel slide wow zoomIn" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
 <h2 class="wow zoomIn">Our materials that we sell</h2>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">	
      <img src="img/armatura.jpg" alt="Armatura">
    </div>

    <div class="item">
      <img src="img/cement.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/poliatilen.jpg" alt="Flower">
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

		</div>


 <div class="table quality">
	<div class="row">
			<div class="col-md-12 block">
				<h2 class="wow zoomIn">The quality of our products</h2>
				<div class="row">
					<div class="col-sm-4 wow zoomIn">
						<div class="panel">
							<a href="img/11.jpg">
							<img src="img/11.jpg">
						    </a>
						</div>
					</div>
					<div class="col-sm-4 wow zoomIn">
						<div class="panel">
							<a href="img/10.jpg">
							<img src="img/10.jpg">
						</a>
						</div>
					</div>
					<div class="col-sm-4 wow zoomIn">
						<div class="panel">
							<a href="img/8.jpg">
							<img src="img/8.jpg">
						</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 wow zoomIn">
						<div class="panel">
							<a href="img/4.jpg">
							<img src="img/4.jpg">
						</a>
						</div>
					</div>
					<div class="col-sm-4 wow zoomIn">
						<div class="panel">
							<a href="img/5.jpg">
							<img src="img/5.jpg">
						</a>
						</div>
					</div>
					<div class="col-sm-4 wow zoomIn">
						<div class="panel">
							<a href="img/9.jpg">
							<img src="img/9.jpg">
						</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="table contact">
<h2 class="wow zoomIn">Contact us!</h2>
        <form name="myform" action="english.php" method="post">
<div class="JAVASCRIPT ALERT">
<?php if($_GET["send"] == 1)
{
echo '<script type="text/javascript">';
echo ' alert("Your message has been sent successfully!")'; //not showing an alert box.
echo '</script>';
}
if(isset($_POST["send"])) {
 if($_POST["name"] == '' && $_POST["email"] == '' && $_POST["subject"] == '' && $_POST["message"] == '')
{
echo '<script type="text/javascript">';
echo ' alert("You have not entered the required data!")'; //not showing an alert box.
echo '</script>';
}

}
?>
</div>
  <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1">Name and Surname:</label>
    <input placeholder="Your name and surname:"name="from" type="text" class="form-control" id="exampleFormControlInput1">
  </div>
     <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_from;?></label>
  </div>
    <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1">Phone number:</label>
    <input name="number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="+998..">
  </div>
   <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_email;?></label>
  </div>
    <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1">What topic:</label>
    <input placeholder="Cement, fittings, diesel, polyethylene" name="subject" type="text" class="form-control" id="exampleFormControlInput1">
  </div>
       <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_subject;?></label>
  </div>
  <div class="form-group wow zoomIn">
    <label for="exampleFormControlTextarea1">Messages</label>
    <textarea placeholder="Here is your message" name ="message" class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
  </div>
   <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_message;?></label>
  </div>
  <div class="form-group wow zoomIn">
<input type="submit" name="send" class="btn btn-info" value="Send" />
  </div>
</form>    
	</div>
	</section>


	<section id="contacts">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 row-item-col">
					<h4>Do you want to contact us?</h4>
					<p>If you want to contact us, you can call us from 9 am to 6:00 pm, our operators will be available at this time. We work every day.</p>
				</div>
				<div class="col-md-6 col-sm-6 row-item-col">
					<h4>Contact us</h4>
					<div class="contacts">
						<p><i class="fa fa-phone-square"></i> +99871-24453</p>
						<p><i class="glyphicon glyphicon-envelope"></i>Saudmodasir@gmail.com</p>
						<p><i class="glyphicon glyphicon-home"></i>Tashkent City, Shaykhontohur District, 14-17 Building</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="copy">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> </p>
                 </div>
            <div class="col-md-6">
			<a href="https://www.instagram.com/dishkan/">Created by Dishkan</a>
                 </div>
		 </div>
		</div>
	</section>
<!-- Bu sizning hududingiz emas. Bizning bosh murabbiyi Dishkan!  -->
<!-- Это не твоя территория. Наш босс Дишкан!  -->
<!-- This is not your territory. Our boss is Dishkan!  -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/scripts.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>
</body>
</html>