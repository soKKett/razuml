<?php
include('config.php');
$form1 = '"'.$_POST['headliner'].'"';
$form2 = '"'.$_POST['description'].'"';
$form3 = '"'.$_POST['formeditor'].'"';
$form4 = '"'.$_POST['zag'].'"';
$url1 = "/razuml/news/{$_POST['headliner']}.html";
$url2 = '"'.$url1.'"';
$zag = '"'.$_POST['zag'].'"';
$conn = mysqli_connect($host, $username, $password, $database);
$quer = "UPDATE `news` SET `url` = {$url2} WHERE `headliner` = {$zag}";
mysqli_query($conn, $quer);

$zag = '"'.$_POST['zag'].'"';
$query ="
UPDATE `news`
SET `headliner` = {$form1}, `description` = {$form2}, `contents` = {$form3}
WHERE `headliner` = {$form4}
";
mysqli_query($conn, $query);





$article = '
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="shortcut icon" type="image/png" href="favicon.gif">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css?6009">
	<link rel="stylesheet" type="text/css" href="../style1.css?6415">
	<link rel="stylesheet" type="text/css" href="../css/animate.css?7610">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">

    <title>Новости</title>



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
						<a class="navbar-brand link-style ltc-carrot-orange" href="../index.php"><img src="../img/logo.svg" alt="logo" /></a>
						<button id="nav-toggle" type="button" class="ui-navbar-toggler navbar-toggler border-0 p-0 ml-auto mr-md-0 menu-icon-rounded-bars" data-toggle="collapse" data-target=".navbar-10605" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse navbar-10605 special-dropdown-nav  sidebar-nav">
							<ul class="site-navigation nav navbar-nav ml-auto">
								<li class="nav-item">
									<a href="../index.php" class="nav-link ltc-white">Школа "Разум-Л"</a>
								</li>
								<li class="nav-item">
									<a href="../employees.php" class="nav-link a-btn ltc-white">Сотрудники</a>
								</li>
								<li class="nav-item">
									<a href="../place.php" class="a-btn nav-link ltc-white">Расположение</a>
								</li>
								<li class="nav-item">
									<a href="../cost.php" class="a-btn nav-link ltc-white">Стоимость обучения</a>
								</li>
								<li class="nav-item">
									<a href="../news.php" class="a-btn nav-link ltc-white">Новости</a>
								</li>
							</ul>
						</div>
					</nav>
			</div>
		</div>
	</div>
</div>
<!-- bloc-0 END -->

<!-- bloc-22 -->
<div class="container-lg p-5">
	<div class="grad mx-auto container-md bgc-white shdw rnd p-3">
		<h1 class="font-weight-bold text-white">
			'.$_POST['headliner'].'
		</h1>

	</div>

	<div class="container-md mt-5 bgc-white shadow rnd p-3">
		<h4>
			'.$_POST['description'].'
		</h4>
	</div>

	<div class="container-md mt-5 bgc-white rnd shadow-lg p-4" >
		<span class="font-weight-light" style="font-size: 25px;">
			'.$_POST['formeditor'].'
		</span>
	</div>
</div>
<!-- bloc-22 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget("1",this)"><span class="fa fa-chevron-up"></span></a>
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
<script src="../js/jquery-3.5.1.js?4857"></script>
<script src="../js/bootstrap.bundle.js?9590"></script>
<script src="../js/blocs.js?9530"></script>
<script src="../js/jqBootstrapValidation.js"></script>
<script src="../js/formHandler.js?9328"></script>
<script src="../js/lazysizes.min.js" defer></script>
<script src="../js/page-scroll-progress.js?4966"></script>
<script src="../js/phone_publish.js?7297"></script>
<!-- Additional JS END -->



<!-- Preloader -->
<div id="page-loading-blocs-notifaction" class="page-preloader"></div>
<!-- Preloader END -->

</body>
</html>
';


$filename = "../news/{$_POST['zag']}.html";
$fcon = fopen($filename, "r+");
$wrt = fwrite($fcon, $article);
rename($filename, "../news/{$_POST['headliner']}.html");
if (!$wrt) {
  echo "Ошибка";
} else {
echo '
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css?2690">
	<link rel="stylesheet" type="text/css" href="style.css?5068">
	<link rel="stylesheet" type="text/css" href="./css/animate.css?623">
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
    </head>
    <body>
        <div class="container-md bg-light p-5 rounded formbtn">
            <center><h4>Новость '.$form1.' успешно изменена</h4></center>
        <form action="index.php">
        <div class="m-5">
        <button type="submit" autofocus class="btn btn-outline-success btn-block">
        Вернуться назад
        </button>
        </div>
        </form>
        </div>
    <body>
</html>
';
}
?>
