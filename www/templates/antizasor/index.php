<?php defined("_JEXEC") or die("Вы не имеете права доступа к этой странице"); ?>
<?php
$templateparams = JFactory::getApplication()->getTemplate(true)->params;  // Получение доп. параметров шаблона

// Получение дополнительных параметров сайта
$site_slider_1 = $templateparams->get('site_slider_1');

$site_slider_2 = $templateparams->get('site_slider_2');

$site_slider_3 = $templateparams->get('site_slider_3');

$site_slider_4 = $templateparams->get('site_slider_4');

$site_phone_1 = $templateparams->get('site_phone_1');

$site_soc_vk = $templateparams->get('site_soc_vk');
$site_soc_fb = $templateparams->get('site_soc_fb');
$site_soc_tw = $templateparams->get('site_soc_tw');
$site_soc_ig = $templateparams->get('site_soc_ig');

$doc = JFactory::getDocument();
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/vendor.css');
// Подключение скриптов шаблона
$doc->addScript(JUri::base().'templates/'.$doc->template.'/js/vendor/modernizr.js');
$doc->addScript(JUri::base().'templates/'.$doc->template.'/js/vendor.js');
$doc->addScript(JUri::base().'templates/'.$doc->template.'/js/main.js');

$menu = JFactory::getApplication()->getMenu();
$activePage = $menu->getActive()->id;
$defaultPage = $menu->getDefault()->id;
?>
<!doctype html>
<html class="no-js" lang="">
	<head>
		<jdoc:include type="head" />
	</head>
	<body>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div class="wrapper">

			<header class="header">
				<div class="logo">
					<a href="/">
						<span class="top">Общество с ограниченой ответственностью</span>
						<span class="bottom">Антизасор Сервис</span>
					</a>
				</div>
				<nav class="main-menu">
					<!-- <ul class="clearfix">
						<li><a href="#">Прочистка труб</a></li>
						<li><a href="#">О компании</a></li>
						<li><a href="#">Технологии и оборудование</a></li>
						<li><a href="#">Контакты</a></li>
					</ul> -->
					<jdoc:include type="modules" name="position-0" />
				</nav>
				<div class="contact">
					<p class="top">Все виды сантехнических услуг:</p>
					<p class="bottom">Звоните: <span><?php echo $site_phone_1; ?></span></p>
				</div>
			</header><!-- .header-->

			<div class="middle">

				<div class="container">
					<main class="content">
						<?php if($activePage != $defaultPage): //если не главная страница?>
							<div class="wisiwig">
								<jdoc:include type="component" />
							</div>
						<?php else: // если главная страница?>
							<div class="wrap-slider">
								<div class="slider-border"></div>
								<ul class="bxSlider">
									<?php if($site_slider_1): ?>
									<li>
										<?php if($site_slider_1): ?>
											<img src="<?php echo $site_slider_1; ?>" alt="">
										<?php endif; ?>
									</li>
									<?php endif; ?>
									<?php if($site_slider_2): ?>
									<li>
										<?php if($site_slider_2): ?>
											<img src="<?php echo $site_slider_2; ?>" alt="">
										<?php endif; ?>
									</li>
									<?php endif; ?>
									<?php if($site_slider_3): ?>
									<li>
										<?php if($site_slider_3): ?>
											<img src="<?php echo $site_slider_3; ?>" alt="">
										<?php endif; ?>
									</li>
									<?php endif; ?>
									<?php if($site_slider_4): ?>
									<li>
										<?php if($site_slider_4): ?>
											<img src="<?php echo $site_slider_4; ?>" alt="">
										<?php endif; ?>
									</li>
									<?php endif; ?>
									<!-- <li><img src="img/slide-1.jpg" alt=""></li>
									<li><img src="http://lorempixel.com/830/330/city/" alt=""></li>
									<li><img src="http://lorempixel.com/830/330/city/" alt=""></li> -->
								</ul>
							</div>
							<h1>Прочистка ливневой канализации</h1>
							<div class="wisivig">
								<!-- <p>Промывка осуществляется гидродинамическим методом, суть которого заключается в подаче воды под высоким давлением. Этот метод используется в большинстве случаев, потому, что пробку, которая образуется из песка и перекрывает трубу, удобнее и легче пробить с помощью воды.</p>
								<p>Рекомендации:</p>
								<p>Профилактические работы по очистке ливневой канализации проводятся:</p>
								<ol>
									<li>Осенью и весной- это период, когда выпадает максимальное количество осадков.</li>
									<li>При запуске новых канализационных сетей или после проведения каких-либо строительных работ.</li>
								</ol>
								<p>Песок после прочистки не оседает и функции канализационной системы восстанавливаются.</p> -->
								<jdoc:include type="component" />
							</div>
						<?php endif; ?>
					</main><!-- .content -->
				</div><!-- .container-->

				<aside class="left-sidebar">
					<div class="widget">
						<h2>Услуги</h2>
						<div class="widget-content">
							<!-- <ul>
								<li><a href="#">Прочистка канализации</a></li>
								<li><a href="#">Устранение засора</a></li>
								<li><a href="#">Прочистка ливневой канализации</a></li>
								<li><a href="#">Прочистка труб</a></li>
								<li><a href="#">Прочистка систем трубопроводов</a></li>
								<li><a href="#">Очистка производственных бытовых стоков</a></li>
							</ul> -->
							<jdoc:include type="modules" name="position-2" />
						</div>
					</div>
				</aside><!-- .left-sidebar -->

			</div><!-- .middle-->

		</div><!-- .wrapper -->

		<footer class="footer">
			<div class="footer_wrap">
				<div class="left">
					<p class="copy">
						© 2015 ООО "АнтиЗасор". Все права защищены.
					</p>
				</div>
				<div class="right">
					<p>Разработка сайта <a target="_blank" href="http://tipographix.ru/">tipographix.ru</a></p>
				</div>
			</div>
		</footer><!-- .footer -->

	</body>
</html>