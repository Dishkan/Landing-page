<?php
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
	    $error_from = "Ism va familiya yozilmagan";
		$error = true;
   }
      if (strlen($number) == 0){
	    $error_number = "Telefon nomer yozilmagan";
		$error = true;
   }
   if (strlen($subject) == 0){
	    $error_subject = "Mavzu yozilmagan ";
		$error = true;
   }
      if (strlen($message) == 0){
	    $error_message = "Xabarlar yo'q";
		$error = true;
   }
   if (!$error) {
	  $subject = "?windows-1251?B?".base64_encode($subject)."?=";
	  $headers = "From: $name\r\nReply-to: $email\r\nContent-type: text/plain; charset=windows1251\r\n";
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
  <a id="scrollProduct" href="#materials">Materiallar</a>
  <a id="scrollQuality" href="#quality">Sifati</a>
  <a id="scrollContact" href="#contact">Aloqa</a>
</div>
					<div class="lang">
						<a href="index.php">Русский</a>
						<span>|</span>
						<a href="english.php">English</a>
					</div>
					<div class="section-center">
						<p class="logo wow bounce">
							<img src="img/SM2.png" alt="logo">
						</p>
          
						<p class="wow zoomIn">Ushbu kompaniya dunyoning turli burchaklaridan kichik va katta binolarni qurish uchun qurilish materiallari importi bilan shug'ullanadi!</p>
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
					<h2>Kompaniyamizning asosiy vazifalari</h2>
					<p class="large">Biz chet eldan yuqori sifatli qurilish materiallarini olib kelmoqdamiz va mijozlarimizga O'zbekistonda bardoshli va ishonchli binolarni qurish uchun maqbul va arzon narxlarda sotamiz va siz bizning qurilish materiallari dunyodagi eng yaxshilaridan biri ekanligiga ishonch bilan ishonishingiz mumkin va siz ulardan yana foydalanishni xohlaysiz. agar kerak bo'lsa biz bilan bog'laning, buni mijozlarimiz tasdiqlashadi.</p>
				</div>
				<div class="col-md-6 row-item-col wow fadeInDown">
					<div class="section-tabs">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Materiallarimizning sifati kafolati</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content clearfix">
							<div role="tabpanel" class="tab-pane fade in active" id="home">
								<p>Mijozlarimiz buyurtmalardan keyin qoniqish hosil qildilar va uni boshqalarga tavsiya qilmoqdamiz.Biz chet eldan import orqali yuqori sifatli materiallarni sotamiz!</p>
								<ul class="list-unstyled pull-left">
									<li><i class="fa fa-check-circle"></i>Litsenziya</li>
									<li><i class="fa fa-check-circle"></i>Adabiyotlar</li>
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
					<h2>Ish grafigi</h2>
					<p class="large">Biz 9: 00dan 18: 00gacha ishlaymiz, shu vaqt ichida bizning operatorlarimiz ishlaydi, qulay vaqtda qo'ng'iroq qiling!</p>
				</div>
				<div class="col-md-6 wow slideInUp">
					<div class="section-tabs">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#nav18" aria-controls="home" role="tab" data-toggle="tab">Ish grafigi</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content clearfix">
							<div role="tabpanel" class="tab-pane fade in active" id="nav18">
								<p class="tab-collapse clearfix">
									<span class="time">09:00 AM</span>
									<span class="time2">18:00 PM</span>
							</div>

						</div>
					</div><!-- /.section-tabs -->
				</div>
			</div>

			<div class="row row-item about">
				<div class="col-md-12 row-item-col wow fadeInDown">
					<h2>Biz haqimizda</h2>
					<p class="large">Kompaniyamiz dunyoning xorijiy mamlakatlaridan yuqori sifatli qurilish materiallarini import qilish bilan shug'ullanadi.Biz bir necha yildan beri bozorda bo'lib, allaqachon turar joy va murakkab binolarni qurish uchun import qilingan qurilish materiallari orqali bizga o'z loyihalari bilan ishonadigan mijozlarimiz ishonuvchisi ekanligimizni isbotladik.Bu <span>tsement, armatura, dizel, polietilen</span> kompaniyamiz yoki qurilish materiallari haqida biron bir savolingiz bo'lsa, ishonch bilan telefon raqami yoki pochta orqali biz bilan bog'lanishingiz mumkin. Quyida biz bilan uchrashishingiz kerak bo'lgan barcha zarur ma'lumotlar va bizning ofisimizning manzili keltirilgan.</p>
				</div>
			</div>
			
	<div id="myCarousel" class="carousel slide wow zoomIn" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
 <h2 class="wow zoomIn">Biz sotadigan materiallarimiz</h2>
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
				<h2 class="wow zoomIn">Mahsulotlarimiz sifati</h2>
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
<h2 class="wow zoomIn">Biz bilan bog'lanish!</h2>
        <form name="myform" action="uzbek.php" method="post">
<div class="JAVASCRIPT ALERT">
<?php if($_GET["send"] == 1)
{
echo '<script type="text/javascript">';
echo ' alert("Sizning xabaringiz muvaffaqiyatli yuborildi!")';//not showing an alert box.
echo '</script>';
}
if(isset($_POST["send"])) {
 if($_POST["name"] == '' && $_POST["email"] == '' && $_POST["subject"] == '' && $_POST["message"] == '')
{
echo '<script type="text/javascript">';
echo ' alert("Siz kerakli ma`lumotlarni kiritmadingiz!")'; //not showing an alert box.
echo '</script>';
}

}
?>
</div>
  <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1">Ismiz va familiyagiz:</label>
    <input placeholder="Ismiz va familiyagiz"name="from" type="text" class="form-control" id="exampleFormControlInput1">
  </div>
     <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_from;?></label>
  </div>
    <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1">Elektron pochta manzili:</label>
    <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
   <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_email;?></label>
  </div>
    <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1">Qaysi mavzuda:</label>
    <input placeholder="Tsement, armatura, dizel, polietilen" name="subject" type="text" class="form-control" id="exampleFormControlInput1">
  </div>
       <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_subject;?></label>
  </div>
  <div class="form-group wow zoomIn">
    <label for="exampleFormControlTextarea1">Xabarlar</label>
    <textarea placeholder="Sizning xabaringiz" name ="message" class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
  </div>
   <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_message;?></label>
  </div>
  <div class="form-group wow zoomIn">
<input type="submit" name="send" class="btn btn-info" value="Yuborish" />
  </div>
</form>    
	</div>
	</section>


	<section id="contacts">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 row-item-col">
					<h4>Biz bilan bog'lanmoqchimisiz?</h4>
					<p>Agar biz bilan bog'lanishni istasangiz, soat 9.00 dan 18.00 gacha qo'ng'iroq qilishingiz mumkin, shu vaqtning o'zida bizning operatorlarimiz ishlaydi. Biz har kuni ishlaymiz.</p>
				</div>
				<div class="col-md-6 col-sm-6 row-item-col">
					<h4>Biz bilan bog'lanish</h4>
					<div class="contacts">
						<p><i class="fa fa-phone-square"></i> +99871-24453</p>
						<p><i class="glyphicon glyphicon-envelope"></i>Saudmodasir@gmail.com</p>
						<p><i class="glyphicon glyphicon-home"></i>Toshkent shahri, Shayxontohur tumani, 14-17 bino </p>
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