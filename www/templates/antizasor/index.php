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
$doc->addScript(JUri::base().'templates/'.$doc->template.'/js/modernizr.js');
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
							</ul>
						</div>
						<div class="wisivig">
							<jdoc:include type="component" />
						</div>
					</main><!-- .content -->
				</div><!-- .container-->

				<aside class="left-sidebar">
					<div class="widget">
						<h2>Услуги</h2>
						<div class="widget-content">
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