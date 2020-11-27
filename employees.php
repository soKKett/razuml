<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="shortcut icon" type="image/png" href="favicon.gif">

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css?6307">
	<link rel="stylesheet" type="text/css" href="style.css?4263">
	<link rel="stylesheet" type="text/css" href="./css/animate.css?3646">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">

    <title>Сотрудники</title>



<!-- Analytics -->

<!-- Analytics END -->

</head>
<body>
<!-- Main container -->
<div class="page-container">

<!-- bloc-0 -->
<div class="bloc bgc-white none b-parallax sticky-nav full-width-bloc l-bloc" id="bloc-0">
	<div class="container ">
		<div class="row editable">
			<div class="col">
				<div><div class="page-scroll-progress-bar  hide-in-blocs-page-preview-snapshot" style="height: 4px; background-color: rgb(240, 139, 28); background-position: initial initial; background-repeat: initial initial;"></div>
				</div>
				<nav class="navbar row navbar-light" role="navigation">
						<a class="navbar-brand link-style ltc-carrot-orange" href="index.php"><img src="img/logo.svg" alt="logo" /></a>
						<button id="nav-toggle" type="button" class="ui-navbar-toggler navbar-toggler border-0 p-0 ml-auto mr-md-0 menu-icon-rounded-bars" data-toggle="collapse" data-target=".navbar-10605" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse navbar-10605 special-dropdown-nav  sidebar-nav">
							<ul class="site-navigation nav navbar-nav ml-auto">
								<li class="nav-item">
									<a href="index.php" class="nav-link ltc-white">Школа "Разум-Л"</a>
								</li>
								<li class="nav-item">
									<a href="employees.php" class="nav-link a-btn ltc-white">Сотрудники</a>
								</li>
								<li class="nav-item">
									<a href="place.php" class="a-btn nav-link ltc-white">Расположение</a>
								</li>
								<li class="nav-item">
									<a href="cost.php" class="a-btn nav-link ltc-white">Стоимость обучения</a>
								</li>
                <li class="nav-item">
									<a href="news.php" class="a-btn nav-link ltc-white">Новости</a>
								</li>
							</ul>
						</div>
					</nav>
			</div>
		</div>
	</div>
</div>
<!-- bloc-0 END -->

<!-- bloc-1 -->
<div class="bloc bgc-white bloc-bg-texture texture-geometry-shapes l-bloc" id="bloc-1">
	<div class="container ">
		<div class="row">
			<div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
				<h3 class="text-lg-center mg-sm mx-auto d-block text-md-center">
					Важные сообщения
				</h3>
			</div>
		</div>
	</div>
</div>
<!-- bloc-1 END -->

<!-- bloc-1 -->
<?php
include('config.php');
$conn = mysqli_connect($host, $username, $password, $database);
$query1 = "SELECT `headliner`, `url` FROM `news` WHERE `imp_place` = 1";
$query2 = "SELECT `headliner`, `url` FROM `news` WHERE `imp_place` = 2";
$query3 = "SELECT `headliner`, `url` FROM `news` WHERE `imp_place` = 3";
$query4 = "SELECT `headliner`, `url` FROM `news` WHERE `imp_place` = 4";
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
$result3 = mysqli_query($conn, $query3);
$result4 = mysqli_query($conn, $query4);
$res1 = mysqli_fetch_assoc($result1);
$res2 = mysqli_fetch_assoc($result2);
$res3 = mysqli_fetch_assoc($result3);
$res4 = mysqli_fetch_assoc($result4);
$r1 = "";
$r2 = "";
$r3 = "";
$r4 = "";
$w1 = "";
$w2 = "";
$w3 = "";
$w4 = "";
if (isset($res1)) {
  $r1 = $res1['headliner'];
  $w1 = $res1['url'];
}
if (isset($res2)) {
  $r2 = $res2['headliner'];
  $w2 = $res2['url'];
}
if (isset($res3)) {
  $r3 = $res3['headliner'];
  $w3 = $res3['url'];
}
if (isset($res4)) {
  $r4 = $res4['headliner'];
  $w4 = $res4['url'];
}



?>
<div class="bloc none bloc-bg-texture texture-geometry-shapes bgc-white l-bloc" id="bloc-1">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col editable" id="news">
        <?= '<a href="'.$w1.'" class="a-btn a-block text-lg-center text-md-center impnews">'.$r1.'</a>';?>
        <?= '<a href="'.$w2.'" class="a-btn a-block text-lg-center text-md-center impnews">'.$r2.'</a>';?>
        <?= '<a href="'.$w3.'" class="a-btn a-block text-lg-center text-md-center impnews">'.$r3.'</a>';?>
        <?= '<a href="'.$w4.'" class="a-btn a-block text-lg-center text-md-center impnews">'.$r4.'</a>';?>
			</div>
		</div>
	</div>
</div>
<!-- bloc-1 END -->

<!-- bloc-4 -->
<div class="bloc l-bloc" id="bloc-4">
	<div class="container ">
		<div class="row">
			<div class="col">
				<h1 class="mg-md text-center">
					Сотрудники
				</h1>
				<h2 class="text-center">
					Администрация школы
				</h2>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-lg-3 col-md-6">
				<a href="#" data-lightbox="img/pic-2.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic-2.jpg" class="img-fluid mx-auto d-block staffimg lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Корсакова Кристина Игоревна
				</h4>
				<p>
					Помощник директора
				</p>
			</div>
			<div class="col-md-6 mt-1 mt-md-4 mt-lg-0 order-lg-0 align-self-start offset-lg-1 col-lg-4">
				<a href="#" data-lightbox="img/pic.jpg" data-gallery-id="gallery-1" class="lazyload"><img src="img/lazyload-ph.png" data-src="img/pic.jpg" class="img-fluid staffimg mx-auto d-block lazyload " alt="placeholder image" /></a>
				<h4 class="mg-md">
					Литаврина-Махнева Ольга Борисовна
				</h4>
				<p>
					Учредитель
				</p>
			</div>
			<div class="col-lg-3 offset-lg-1">
				<img src="img/lazyload-ph.png" data-src="img/pic-142.jpg" class="img-fluid mx-auto d-block staffimg img-style lazyload" alt="placeholder image" />
				<h3 class="mg-md">
					Малородова Светлана Владимировна
				</h3>
				<p>
					Директор
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-4 END -->

<!-- bloc-5 -->
<div class="bloc l-bloc" id="bloc-5">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col">
				<h2 class="text-center">
					Учителя начальной школы
				</h2>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-lg-3 col-md-6">
				<a href="#" data-lightbox="img/pic-5.JPG" data-gallery-id="gallery-1" data-frame="frameless-lb"><img src="img/lazyload-ph.png" data-src="img/pic-5.JPG" class="img-fluid mx-auto d-block staffimg lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Москаленко Юлия Николаевна
				</h4>
				<p>
					Учитель начальных классов
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-0">
				<a href="#" data-lightbox="img/pic-4.JPG" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic-4.JPG" class="img-fluid mx-auto d-block staffimg lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Панина Светлана Владиславовна
				</h4>
				<p>
					Учитель начальных классов
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="img/pic-3.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic-3.jpg" class="img-fluid mx-auto d-block staffimg img-картин-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Панкратова Людмила Алексеевна
				</h4>
				<p>
					Учитель начальных классов
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="img/pic-6.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic-6.jpg" class="img-fluid mx-auto d-block staffimg img-12-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Пруцова Альбина Викторовна
				</h4>
				<p>
					Учитель начальных классов
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-5 END -->

<!-- bloc-16 -->
<div class="bloc l-bloc" id="bloc-16">
	<div class="container bloc-md">
		<div class="row">
			<div class="col">
				<h2 class="text-center">
					Учителя гуманитарных наук
				</h2>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-lg-3 col-md-6">
				<a href="#" data-lightbox="img/pic-7.jpg" data-gallery-id="gallery-1" data-frame="frameless-lb"><img src="img/lazyload-ph.png" data-src="img/pic-7.jpg" class="img-fluid mx-auto d-block staffimg img-13-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Белкина Светлана Анатольевна
				</h4>
				<p>
					Учитель французского языка
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-0">
				<a href="#" data-lightbox="img/pic-8.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic-8.jpg" class="img-fluid mx-auto d-block staffimg img-14-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Пономарева Елена Анатольевна
				</h4>
				<p>
					Учитель начальных классов
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="img/pic-9.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic-9.jpg" class="img-fluid mx-auto d-block staffimg img-картин-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Назарьева Светлана Николаевна
				</h4>
				<p>
					Учитель начальных классов
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="img/pic-10.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic-10.jpg" class="img-fluid mx-auto d-block staffimg img-12-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Селиванова Лариса Николаевна
				</h4>
				<p>
					Учитель начальных классов
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-16 END -->

<!-- bloc-17 -->
<div class="bloc l-bloc" id="bloc-17">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col">
				<h2 class="text-center">
					Учителя естественных наук
				</h2>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-md-6 col-lg-3 offset-lg-3">
				<a href="#" data-lightbox="img/pic-7.jpg" data-gallery-id="gallery-1" data-frame="frameless-lb"><img src="img/lazyload-ph.png" data-src="img/pic-7.jpg" class="img-fluid mx-auto d-block staffimg img-13-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Белкина Светлана Анатольевна
				</h4>
				<p>
					Учитель географии
				</p>
			</div>
			<div class="col-md-6 mt-1 mt-md-0 col-lg-3 offset-lg--1">
				<a href="#" data-lightbox="img/pic-11.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic-11.jpg" class="img-fluid staffimg img-14-style mx-auto d-block lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Антоневич Александр Николаевич
				</h4>
				<p>
					Учитель химии и биологии
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-17 END -->

<!-- bloc-18 -->
<div class="bloc l-bloc" id="bloc-18">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col">
				<h2 class="text-center">
					Учителя эстетических наук
				</h2>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-lg-3 col-md-6">
				<a href="#" data-lightbox="img/pic-7.jpg" data-gallery-id="gallery-1" data-frame="frameless-lb"><img src="img/lazyload-ph.png" data-src="img/pic-7.jpg" class="img-fluid mx-auto d-block staffimg img-13-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Белкина Светлана Анатольевна
				</h4>
				<p>
					Учитель ОБЖ
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-0">
				<a href="#" data-lightbox="img/pic-12.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic-12.jpg" class="img-fluid mx-auto d-block staffimg img-14-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Алаев Григорий Викторович
				</h4>
				<p>
					Учитель физкультуры
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="img/pic-14.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic-14.jpg" class="img-fluid mx-auto d-block staffimg img-картин-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Головщикова Ирина Ивановна
				</h4>
				<p>
					Учитель физкультуры
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="img/pic-13.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic-13.jpg" class="img-fluid mx-auto d-block staffimg img-12-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Васильева Инна Викторовна
				</h4>
				<p>
					Учитель ИЗО и технологии
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-18 END -->

<!-- bloc-19 -->
<div class="bloc l-bloc" id="bloc-19">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col">
				<h2 class="text-center">
					Сотрудники дошкольного отделения
				</h2>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-lg-3 col-md-6">
				<a href="#" data-lightbox="img/pic1-7.JPG" data-gallery-id="gallery-1" data-frame="frameless-lb"><img src="img/lazyload-ph.png" data-src="img/pic1-7.JPG" class="img-fluid mx-auto d-block staffimg img-13-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Смирнова Наталья Владимировна
				</h4>
				<p>
					Воспитатель старшей группы
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-0">
				<a href="#" data-lightbox="img/pic1-6.JPG" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic1-6.JPG" class="img-fluid mx-auto d-block staffimg img-14-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Рыжкова Людмила Михайловна
				</h4>
				<p>
					Воспитатель старшей группы
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="img/pic1-5.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic1-5.jpg" class="img-fluid mx-auto d-block staffimg img-картин-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Шулыгина Татьяна Алексеевна
				</h4>
				<p>
					Логопед
				</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-1 mt-md-4 mt-lg-0">
				<a href="#" data-lightbox="img/pic1.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic1.jpg" class="img-fluid mx-auto d-block staffimg img-12-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Кувыркова Елена Александровна
				</h4>
				<p>
					Воспитатель младшей группы
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-19 END -->

<!-- bloc-20 -->
<div class="bloc l-bloc" id="bloc-20">
	<div class="container bloc-sm">
		<div class="row voffset">
			<div class="col-lg-3 col-md-6 order-lg-0 offset-lg-3">
				<a href="#" data-lightbox="img/pic1-2.jpg" data-gallery-id="gallery-1" data-frame="frameless-lb"><img src="img/lazyload-ph.png" data-src="img/pic1-2.jpg" class="img-fluid mx-auto d-block staffimg img-13-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md">
					Долбанова Ирина Викторовна
				</h4>
				<p>
					Воспитатель младшей группы
				</p>
			</div>
			<div class="col-md-6 mt-1 mt-md-0 col-lg-3 offset-lg-0">
				<a href="#" data-lightbox="img/pic1-3.jpg" data-gallery-id="gallery-1"><img src="img/lazyload-ph.png" data-src="img/pic1-3.jpg" class="img-fluid mx-auto d-block staffimg img-14-style lazyload" alt="placeholder image" /></a>
				<h4 class="mg-md text-lg-left">
					Платонова Валентина Николаевна
				</h4>
				<p class="text-lg-left">
					Помощник воспитателя старшей группы
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-20 END -->

<!-- bloc-16 -->
<div class="bloc l-bloc" id="bloc-16">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-md-12 col-lg-6 offset-lg-3">
				<h3 class="mg-md text-center">
					Остальные сотрудники<br>
				</h3>
			</div>
			<div class="col-md-6">
				<div class="row voffset">
					<div class="col order-1 align-self-center">
						<h4 class="text-center mg-sm text-lg-left">
							Дука Оксана Николаевна
						</h4>
						<p class="text-center text-lg-left">
							Повар
						</p>
					</div>
					<div class="col-lg-3">
						<img src="img/lazyload-ph.png" data-src="img/pic-22.JPG" class="img-fluid rounded-circle img-31-style lazyload" alt="placeholder user" />
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-12">
						<div class="row voffset">
							<div class="col-lg-3">
								<img src="img/lazyload-ph.png" data-src="img/pic-21.jpg" class="img-fluid rounded-circle lazyload" alt="placeholder user" />
							</div>
							<div class="col align-self-center">
								<h4 class="text-center text-lg-left mg-sm">
									Рябошапко Лариса Михайловна
								</h4>
								<p class="text-center text-lg-left">
									Медицинский сотрудник
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bloc-16 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1',this)"><span class="fa fa-chevron-up"></span></a>
<!-- ScrollToTop Button END-->


<!-- bloc-18 -->
<div class="bloc bloc-bg-texture texture-geometry-shapes l-bloc" id="bloc-18">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-4 col">
				<h1 class="mg-md threeD-t btn-resize-mode h1-4-style">
					Нам важно Ваше мнение!
				</h1>
			</div>
			<div class="col-sm-8 editable col" id="fld">
				<form id="form_2" data-form-type="blocs-form" novalidate data-success-msg="Ваш отзыв отправлен" data-fail-msg="Кажется, наш почтовый сервер не может отправить ваш отзыв. Подождите немного и попробуйте заново.">
					<div class="form-group">
						<label class="label-style text-sm-left">
							Напишите ваш отзыв о новой версии сайта<br>
						</label><textarea id="message" class="form-control textareaform" rows="7" cols="50" required></textarea>
					</div>
					<button class="bloc-button btn btn-lg btn-white-2 float-lg-right formbtn float-md-right float-sm-right" type="submit">
						Отправить
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- bloc-18 END -->

<!-- bloc-29 -->
<div class="bloc l-bloc none" id="bloc-29">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-12 col-sm-4 offset-md-8 offset-sm-8 offset-0 offset-lg-8">
				<div><div class="phonewrapper"  ><div class="phline right"><div class="phone"><a href="tel:+7 (499) 186-56-10" data-inter="1" data-phnum="tel:+11234567890"><span class="fa icon-md hidden" data-pisize="1" data-pilnht="58.35" data-picolor="616161" style="line-height: 58.35%;"></span><span class="phtext" data-phsize="1.06" data-phlnht="100" data-phcolor="#5C5FD5" style="color: rgb(92, 95, 213); font-size: 1.06em;">+7 (499) 186-56-10</span></a></div></div></div>
				</div>
				<h4 class="mg-md text-sm-left text-right text-lg-right">
						Школа "Разум-Л"
					</h4><a href="index.php" class="a-btn footer-link float-right">2020, все права защищены<br></a>
			</div>
		</div>
	</div>
</div>
<!-- bloc-29 END -->

</div>
<!-- Main container END -->


<!-- Additional JS -->
<script src="./js/jquery-3.5.1.js?4857"></script>
<script src="./js/bootstrap.bundle.js?9590"></script>
<script src="./js/blocs.js?9530"></script>
<script src="./js/jqBootstrapValidation.js"></script>
<script src="./js/formHandler.js?4805"></script>
<script src="./js/jquery.touchSwipe.min.js" defer></script>
<script src="./js/lazysizes.min.js" defer></script>
<script src="./js/page-scroll-progress.js?1331"></script>
<script src="./js/phone_publish.js?8179"></script>
<!-- Additional JS END -->



<!-- Preloader -->
<div id="page-loading-blocs-notifaction" class="page-preloader"></div>
<!-- Preloader END -->

</body>
</html>
