<?php
   if(isset($_POST["send"])) {
   $name = $_POST["from"];
   $number = $_POST["number"];
   $to = "DH.17@mail.ru";
   $subject = $_POST["subject"];
   $message = $name . " оставил/а сообщение и номер телефона:" .$number. "\n\n" . $_POST['message'];
    //$headers = "From:" . $from;
    //$headers2 = "From:" . $to;
   $error_from = "";
   $error_number = "";
   $error_subject = "";
   $error_message = "";
   $error = false;
      if (strlen($name) == 0){
	    $error_from = "Не написано имя и фамилия";
		$error = true;
   }
      if (strlen($number) == 0){
	    $error_number = "Не написан номер телефона";
		$error = true;
   }
   if (strlen($subject) == 0){
	    $error_subject = "Не написано тема";
		$error = true;
   }
      if (strlen($message) == 0){
	    $error_message = "Нет сообщений";
		$error = true;
   }
   if (!$error) {
	  //$subject = "?utf-8?B?".base64_encode($subject)."?=";
	  //$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
      mail($to, $subject, $message);
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
  <a id="scrollProduct" href="#materials">Материалы</a>
  <a id="scrollQuality" href="#quality">Качество</a>
  <a id="scrollContact" href="#contact">Связаться</a>
</div>
					<div class="lang">
						<a href="uzbek.php">Uzbek</a>
						<span>|</span>
						<a href="english.php">English</a>
					</div>
					<div class="section-center">
						<p class="logo wow bounce">
							<img src="img/SM2.png" alt="logo">
						</p>
          
						<p class="wow zoomIn">Это компания занимается импортом строительных материалов из разных стран мира для строительства малых и крупных зданий!</p>
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
					<h2>Главные задачи нашей компании</h2>
					<p class="large">Мы импортируем качественные строительные материалы из зарубежных стран и продаем нашим клиентам по оптимальной и низкой цене для строительства прочных и надежных зданий в Узбекистане.Вы можете с уверенностью положиться на то что наши строительные материалы одни из лучших во всем мире и применив их вы захочете еще раз к нам обратиться если будет необходимость.Это доказывает наши клиенты</p>
				</div>
				<div class="col-md-6 row-item-col wow fadeInDown">
					<div class="section-tabs">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Гарантия на качество наших материалов</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content clearfix">
							<div role="tabpanel" class="tab-pane fade in active" id="home">
								<p>Наши клиенты остались довольны после заказов и рекомендуют также другим.Мы продаем материалы высшего качество посредством импорта из зарубежных стран!</p>
								<ul class="list-unstyled pull-left">
									<li><i class="fa fa-check-circle"></i>Лицензия</li>
									<li><i class="fa fa-check-circle"></i>Справки</li>
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
					<h2>График работы</h2>
					<p class="large">Мы работаем с 9:00 до 18:00.Наши операторы доступны в течении этого времени,звоните в доступное время!</p>
				</div>
				<div class="col-md-6 wow slideInUp">
					<div class="section-tabs">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#nav18" aria-controls="home" role="tab" data-toggle="tab">График</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content clearfix">
							<div role="tabpanel" class="tab-pane fade in active" id="nav18">
								<p class="tab-collapse clearfix">
									<span class="beg">C</span>
									<span class="time">09:00 AM</span>
									<span class="aft">до</span>
									<span class="time2">18:00 PM</span>
							</div>

						</div>
					</div><!-- /.section-tabs -->
				</div>
			</div>

			<div class="row row-item about">
				<div class="col-md-12 row-item-col wow fadeInDown">
					<h2>О нас</h2>
					<p class="large">Наша компания занимается импортом качественных строительных материалов из зарубежных стран мира.Мы на рынке на протяжений нескольких лет и уже проявили себя как доверенное лицо наших клиентов которые доверяют нам свои проекты посредством наших импортных строй-материалов для строительство жилых и комплексных зданий.Это <span>цемент, арматура, дизель, полиэтилен</span> и многое другое.Если у вас возникнут какие-то вопросы по поводу нашей фирмы или строительных материалов, вы можете смело обратиться к нам по номеру телефона или же через почту.Внизу указаны все необходимые данные и адрес нашего офиса при необходимости встречи с нами.</p>
				</div>
			</div>
			
	<div id="myCarousel" class="carousel slide wow zoomIn" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
 <h2 class="wow zoomIn">Наши материалы которые мы продаем</h2>
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
				<h2 class="wow zoomIn">Качество наших продуктов</h2>
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
<h2 class="wow zoomIn">Свяжитесь с нами!</h2>
        <form name="myform" action="index.php" method="post">
<div class="JAVASCRIPT ALERT">
<?php if($_GET["send"] == 1)
{
echo '<script type="text/javascript">';
echo ' alert("Ваше сообщения отправлено успешно!")'; //not showing an alert box.
echo '</script>';
}
if(isset($_POST["send"])) {
 if($_POST["name"] == '' && $_POST["number"] == '' && $_POST["subject"] == '' && $_POST["message"] == '')
{
echo '<script type="text/javascript">';
echo ' alert("Вы не ввели необходимые данные!")'; //not showing an alert box.
echo '</script>';
}

}
?>
</div>
  <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1">Имя и Фамилия:</label>
    <input placeholder="Ваше имя и фамилия"name="from" type="text" class="form-control" id="exampleFormControlInput1">
  </div>
     <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_from;?></label>
  </div>
    <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1">Номер телефона:</label>
    <input name="number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="+998..">
  </div>
   <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_number;?></label>
  </div>
    <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1">На какую тему:</label>
    <input placeholder="Цемент, арматура, дизель, полиэтилен" name="subject" type="text" class="form-control" id="exampleFormControlInput1">
  </div>
       <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_subject;?></label>
  </div>
  <div class="form-group wow zoomIn">
    <label for="exampleFormControlTextarea1">Сообщения</label>
    <textarea placeholder="Тут ваше сообщение" name ="message" class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
  </div>
   <div class="form-group wow zoomIn">
    <label for="exampleFormControlInput1" style="color: red;"><?php echo $error_message;?></label>
  </div>
  <div class="form-group wow zoomIn">
<input type="submit" name="send" class="btn btn-info" value="Отправить" />
  </div>
</form>    
	</div>
	</section>


	<section id="contacts">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 row-item-col">
					<h4>Хотите к нам обратиться?</h4>
					<p>Если хотите связаться с нами,вы можете позвонить нам с 9 утра до 18:00 вечера,наши оперторы будут доступны в это время.Мы работаем каждый день.</p>
				</div>
				<div class="col-md-6 col-sm-6 row-item-col">
					<h4>Свяжитесь с нами</h4>
					<div class="contacts">
						<p><i class="fa fa-phone-square"></i> +99871-24453</p>
						<p><i class="glyphicon glyphicon-envelope"></i>Saudmodasir@gmail.com</p>
						<p><i class="glyphicon glyphicon-home"></i>город Ташкент, Шайхонтохурский район, 14-17 дом </p>
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