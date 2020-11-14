<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="shortcut icon" type="image/png" href="favicon.gif">

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css?6009">
	<link rel="stylesheet" type="text/css" href="style.css?6415">
	<link rel="stylesheet" type="text/css" href="./css/animate.css?7610">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">


    <title>Новости</title>



<!-- Analytics -->

<!-- Analytics END -->

</head>
<body>
<?php
  include('config.php');
  $conn = mysqli_connect($host, $username, $password, $database);
  $query = "SELECT `headliner`, `description`, `url` FROM `news`";
  $res = mysqli_query($conn, $query);
  while ($array = mysqli_fetch_assoc($res)) {
  	$newsres[] = $array;
  }
  $query1 = "SELECT `headliner` FROM `news` WHERE `imp_place` = 1";
  $query2 = "SELECT `headliner` FROM `news` WHERE `imp_place` = 2";
  $query3 = "SELECT `headliner` FROM `news` WHERE `imp_place` = 3";
  $query4 = "SELECT `headliner` FROM `news` WHERE `imp_place` = 4";
  $result1 = mysqli_query($conn, $query1);
  $result2 = mysqli_query($conn, $query2);
  $result3 = mysqli_query($conn, $query3);
  $result4 = mysqli_query($conn, $query4);
  $res1 = mysqli_fetch_row($result1);
  $res2 = mysqli_fetch_row($result2);
  $res3 = mysqli_fetch_row($result3);
  $res4 = mysqli_fetch_row($result4);
  mysqli_close($conn);
  ?>
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
<div class="bloc none bloc-bg-texture texture-geometry-shapes bgc-white l-bloc" id="bloc-1">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col editable" id="news">
        <?= '<a href="news.php" class="a-btn a-block text-lg-center text-md-center impnews">'.$res1[0].'</a>';?>
        <?= '<a href="news.php" class="a-btn a-block text-lg-center text-md-center impnews">'.$res2[0].'</a>';?>
        <?= '<a href="news.php" class="a-btn a-block text-lg-center text-md-center impnews">'.$res3[0].'</a>';?>
        <?= '<a href="news.php" class="a-btn a-block text-lg-center text-md-center impnews">'.$res4[0].'</a>';?>
			</div>
		</div>
	</div>
</div>
<!-- bloc-1 END -->

<!-- bloc-22 -->
<?php
foreach ($newsres as $v) {
	echo
	'<div class="bloc l-bloc" id="bloc-22">
		<div class="container bloc-md">
			<div class="row">
				<div class="col">
					<a href="'.$v['url'].'" class="a-btn link-color a-block">'.$v['headliner'].'</a>
					<p>
						'.$v['description'].'
					</p>
				</div>
			</div>
		</div>
	</div>';
}
?>
<!-- bloc-22 END -->

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
<script src="./js/formHandler.js?9328"></script>
<script src="./js/lazysizes.min.js" defer></script>
<script src="./js/page-scroll-progress.js?4966"></script>
<script src="./js/phone_publish.js?7297"></script>
<!-- Additional JS END -->



<!-- Preloader -->
<div id="page-loading-blocs-notifaction" class="page-preloader"></div>
<!-- Preloader END -->

</body>
</html>
