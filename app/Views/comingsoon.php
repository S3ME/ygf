<!DOCTYPE html>
<html dir="ltr" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $desc; ?>">
		<base href="<?php echo base_url() ?>">
		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link rel='stylesheet' href='/css/theme.css' type='text/css' media='all' />
		<script type='text/javascript' src='/js/uikit.min.js'></script>
		<script type='text/javascript' src='/js/uikit-icons.min.js' defer></script>
		<script type='text/javascript' src='/js/theme.js' defer></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-QFPERZQMRJ"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-QFPERZQMRJ');
		</script>
		<style>
			.home-section {
				background-image: url(../images/coming-soon/bg-2.svg);
				background-position: bottom center;
				background-repeat: no-repeat;
				background-size: content;
				background-attachment: fixed;
			}
		</style>
    </head>
    <body class="uk-width-1-1 uk-background-cover" uk-height-viewport style="background-image: url(images/coming-soon/comingsoon-bg-1.svg);">
		<div class="home-section uk-padding" uk-height-viewport>
			<div class="uk-container uk-container-xlarge">
				<?php if ($ismobile === false) { ?>
					<div class="tm-header" style="z-index:2;" uk-header>
						<div class="uk-navbar-container" style="background: transparent;">
							<div class="uk-container uk-container-expand" style="padding-top:15px; padding-bottom:15px;">
								<nav uk-navbar>
									<div class="uk-navbar-left">
										<img src="images/coming-soon/kg-1.svg" style="height:70px;"/>
									</div>
									<div class="uk-navbar-right">
										<a href="<?php echo base_url(); ?>"><img src="images/coming-soon/ygf-right.svg" style="height:75px;"/></a>
									</div>
								</nav>
							</div>
						</div>
					</div>
				<?php } else { ?>
					<div class="tm-header-mobile" style="z-index:2;">
						<div>
							<div class="uk-navbar-container" style="background-color:transparent;">
								<nav uk-navbar>
									<div class="uk-navbar-left">
										<img src="images/coming-soon/kg-1.svg" style="height:40px;" />
									</div>
									<div class="uk-navbar-right">
										<a href="<?php echo base_url(); ?>"><img src="images/coming-soon/ygf-right.svg" style="height:40px; color: #000;" /></a>
									</div>
								</nav>
							</div>
						</div>
					</div>
				<?php } ?>

				<div class="uk-position-center">
					<div>
						<img src="images/coming-soon/main-hero.svg" style="height:450px;"/>
					</div>
					<div class="uk-text-center uk-margin-large">
						<a href="https://drive.google.com/drive/folders/1HEP1bDuQAlfX3IOUy1QBc2QoKzVHWgmH?usp=sharing" target="_blank" class="uk-button uk-button-large uk-button-primary">MEDIA KIT</a>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>