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
		<link rel='stylesheet' href='/css/fontawesome.min.css' type='text/css' media='all' />
		<script type='text/javascript' src='/js/uikit.min.js'></script>
		<script type='text/javascript' src='/js/fontawesome.min.js'></script>
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
        <?= $this->renderSection('pageStyles') ?>
		<style>
			.home-section {
				background-color: #009389;
				background-image: url(../images/sec-1/bg-1.svg);
				/* background-image: url(../images/sec1/footer-1-1.svg), url(../images/sec1/hero-cloud.svg); */
				background-position: bottom center;
				background-repeat: no-repeat;
				background-size: content;
				background-attachment: fixed;
			}
			
			.uk-navbar-nav {
				gap: 8px;
			}

			.uk-navbar-nav > li > a.nav-btn {
				display: inline-flex !important;
				align-items: center;
				justify-content: center;
				height: auto !important;
				min-height: initial !important;
				padding: 8px 18px !important;
				border-radius: 10px;
				text-decoration: none !important;
				border: 2px solid #ffffff; 
				box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
				transition: all 0.2s ease-in-out;
			}
			
			.uk-navbar-nav > li > a.nav-btn span {
				font-family: Arial, sans-serif;
				font-weight: bold;
				font-size: 14px;
				letter-spacing: 0.5px;
				padding: 2px 6px;
				display: inline-block;
				line-height: 1.2;
				text-transform: uppercase;
			}
			
			.uk-navbar-nav > li > a.nav-btn:hover {
				transform: translateY(-2px);
				box-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 6px 12px rgba(0, 0, 0, 0.15);
			}
			
			.uk-navbar-nav > li > a.nav-btn:active {
				transform: translateY(0);
				box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			}

			.button-home {
				display: block;
				background-size: cover;
				background-repeat: no-repeat;
				border-radius: 10px;
				padding: 10px 20px;
				font-size: 20px;
				line-height: 1;
				font-weight: 700;
				position: relative;
				overflow: hidden;
				text-align: center;
			}
			.button-home:hover,
			.button-home:active {
				color: #000 !important;
				text-decoration: none;
			}
			/* .button-home span {
				background-color: #fbcbc9;
				padding: 2px 6px;
			} */
		</style>
    </head>
    <body>
		<div class="uk-container uk-container-expand home-section" uk-height-viewport>
			<?php if ($ismobile === false) { ?>
				<div class="tm-header" style="z-index:2;" uk-header>
					<div class="uk-container uk-container-expand" style="padding-top:15px; padding-bottom:15px;">
						<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
							<div class="uk-navbar-left">
								<img src="images/sec-1/kmg1.svg" style="height:50px; margin-right:10px;"/>
								<img src="images/sec-1/bwdd.svg" style="height:50px;"/>
							</div>
							<div class="uk-navbar-center">
								<ul class="uk-navbar-nav">
									<li><a href="<?php echo base_url(); ?>" class="nav-btn" style="background-color:#FD6119"><span style="color:#000000;">Home</span></a></li>
									<li><a href="about" class="nav-btn" style="background-color:#fe891c"><span style="color:#000000;">About</span></a></li>
									<!--<li><a href="schedule" class="nav-btn" style="background-color:#00ffff"><span style="color:#000000;">Schedule</span></a></li>
									<li><a href="artist" class="nav-btn" style="background-color:#00ffff"><span style="color:#000000;">Artist</span></a></li>-->
									<li><a href="program" class="nav-btn" style="background-color:#ffd84d"><span style="color:#000000;">Program</span></a></li>
									<li><a href="news" class="nav-btn" style="background-color:#ffff00"><span style="color:#000000;">News</span></a></li>
									<li><a href="galeri" class="nav-btn" style="background-color:#cccf5d"><span style="color:#000000;">Gallery</span></a></li>
									<li><a href="merchandise" class="nav-btn" style="background-color:#ffffff"><span style="color:#000000;">Merchandise</span></a></li>
									<li><a href="partners" class="nav-btn" style="background-color:#000000; color:#fd6119;"><span style="color:#fd6119;">Partners</span></a></li>
								</ul>
							</div>
							<div class="uk-navbar-right">
								<a href="<?php echo base_url(); ?>"><img src="images/sec-1/ygf-logo-1.svg"/></a>
							</div>
						</nav>
					</div>
				</div>
			<?php } else { ?>
				<div class="tm-header-mobile" style="z-index:2;">
					<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
						<div class="uk-navbar-left">
							<a class="uk-navbar-toggle" href="#offcanvas" uk-toggle uk-navbar-toggle-icon></a>
						</div>
						<div class="uk-navbar-center" uk-grid>
							<div>
								<img src="images/sec-1/kmg1.svg" style="height:40px;" />
							</div>
							<div>
								<img src="images/sec-1/bwdd.svg" style="height:60px;" />
							</div>
						</div>
						<div class="uk-navbar-right">
							<a href="<?php echo base_url(); ?>"><img src="images/sec-1/ygf-logo-1.svg" style="height:40px; color: #000;" /></a>
						</div>
					</nav>
					<div id="offcanvas" uk-offcanvas mode="push" overlay>
						<div class="uk-offcanvas-bar uk-flex">
							<button class="uk-offcanvas-close" type="button" uk-close></button>
							<div class="uk-margin-auto-vertical uk-width-1-1">
								<div class="uk-child-width-1-1" uk-grid>
									<div>
										<div class="uk-panel" id="module-menu-mobile">
											<ul class="uk-nav uk-nav-primary">
												<li><a href="<?php echo base_url(); ?>">Home</a></li>
												<li><a href="about">About</a></li>
												<!--<li><a href="schedule">Schedule</a></li>
												<li><a href="artist">Artist</a></li>-->
												<li><a href="program">Program</a></li>
												<li><a href="news">News</a></li>
												<li><a href="galeri">Gallery</a></li>
												<li><a href="merchandise">Merchandise</a></li>
												<li><a href="partners">Partners</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<main>
				<?= $this->renderSection('main') ?>
			</main>
			<footer class="uk-margin">
				<?php
				if ($ismobile) {
					$menu = 'uk-flex-center';
					$socmed = 'uk-flex-center';
					$copyright = 'uk-text-center';
				} else {
					$menu = 'uk-flex-left';
					$socmed = 'uk-flex-left';
					$copyright = 'uk-text-left';
				}
				?>
				
				<div class="uk-margin uk-grid-small uk-child-width-auto <?=$menu?>" uk-grid>
					<!-- <div>
						<a class="button-home" style="background-color:#f05a25;" href="program#lokakarya"><span style="color:#ffffff;">Gaung Gamelan</span></a>
					</div> -->
					<!-- <div>
						<a class="button-home" style="background-color:#ffff00;" href="program#panggung-slenthem"><span style="color:#0000ff;">Panggung Slenthem</span></a>
					</div> -->
					<!-- <div>
						<a class="button-home" style="background-color:#0071bc;" href="program#pasar-cokekan"><span style="color:#ffffff;">Pasar Cokekan</span></a>
					</div> -->
					<!-- <div>
						<a class="button-home" style="background-color:#9e005d;" href="program#kongres-gamelan"><span style="color:#ffffff;">Kongres Gamelan</span></a>
					</div> -->
					<div>
						<a class="button-home" style="background-color:#f05a25;" href="program#lokakarya"><span style="color:#ffffff;">LOKAKARYA</span></a>
					</div>
					<div>
						<a class="button-home" style="background-color:#ffff00;" href="program#rembug-budaya"><span style="color:#0000ff;">REMBUG BUDAYA</span></a>
					</div>
					<!-- <div>
						<a class="button-home" style="background-color:#ac25f7;" href="program#sorot-sumirat"><span style="color:#ffffff;">Sorot Sumirat</span></a>
					</div> -->
					<!-- <div>
						<a class="button-home" style="background-color:#f05a25;" href="program#konser-maestro"><span style="color:#ffffff;">Konser Maestro</span></a>
					</div> -->
					<div>
						<a class="button-home" style="background-color:#000000;" href="program#konser-gamelan"><span style="color:#ffffff; background-color: transparent; padding: 0;">KONSER GAMELAN</span></a>
					</div>
				</div>
				
				<div class="uk-margin uk-light uk-child-width-auto uk-grid-medium <?=$socmed?>" uk-grid style="font-size: 20px;">
					<div>
						<a class="uk-link-text" href="https://www.facebook.com/YogyakartaGamelanFestival" target="_blank"><i class="fa-brands fa-facebook"></i> komunitasgayam16</a>
					</div>
					<div>
						<a class="uk-link-text" href="https://www.instagram.com/komunitasgayam16/" target="_blank"><i class="fa-brands fa-instagram"></i> komunitasgayam16</a>
					</div>
					<div>
						<a class="uk-link-text" href="https://x.com/Gayam16" target="_blank"><i class="fa-brands fa-x-twitter"></i> @Gayam16</a>
					</div>
					<div>
						<a class="uk-link-text" href="https://www.youtube.com/@Gayam16" target="_blank"><i class="fa-brands fa-youtube"></i> Gayam16</a>
					</div>
					<div>
						<a class="uk-link-text" href="https://www.tiktok.com/@gayam16" target="_blank"><i class="fa-brands fa-tiktok"></i> gayam16</a>
					</div>
					<div>
						<a class="uk-link-text" style="font-weight: bold; cursor: default;">#YGF31</a>
					</div>
				</div>

				<div class="uk-margin uk-light <?=$copyright?>" style="margin-top: 25px !important;">
					Developed by <a class="uk-text-bold" href="https://binary111.com" target="_blank">Kodebiner Teknologi Indonesia</a>
				</div>
			</footer>
		</div>
		<!-- <footer class="tm-footer uk-section-small">
			<div class="uk-container">
						<div class="uk-child-auto uk-flex-center" uk-grid style="color:#21080c;">
							<div class="uk-text-center uk-text-left@m">
								<a class="uk-link-reset" href="https://www.facebook.com/YogyakartaGamelanFestival" target="_blank"><span uk-icon="facebook"></span> YogyakartaGamelanFestival</a>
							</div>
							<div class="uk-text-center uk-text-left@m">
								<a class="uk-link-reset" href="https://www.instagram.com/komunitasgayam16/" target="_blank"><span uk-icon="instagram"></span> komunitasgayam16</a>
							</div>
							<div class="uk-text-center uk-text-left@m">
								<a class="uk-link-reset" href="https://twitter.com/gayam16" target="_blank">
									<svg width="22" height="22" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1668.56 1221.19" style="enable-background:new 0 0 1668.56 1221.19;" xml:space="preserve">
										<g id="layer1" transform="translate(52.390088,-25.058597)">
											<path id="path1009" d="M283.94,167.31l386.39,516.64L281.5,1104h87.51l340.42-367.76L984.48,1104h297.8L874.15,558.3l361.92-390.99
												h-87.51l-313.51,338.7l-253.31-338.7H283.94z M412.63,231.77h136.81l604.13,807.76h-136.81L412.63,231.77z"/>
										</g>
									</svg> @Gayam16</a>
							</div>
							<div class="uk-text-center uk-text-left@m">
								<a class="uk-link-reset" href="https://www.youtube.com/c/Gayam16" target="_blank"><span uk-icon="youtube"></span> Gayam 16</a>
							</div>
							<div class="uk-text-center uk-text-left@m">
								#YGF28
							</div>
							<div class="uk-text-center uk-text-left@m">
								#GamelanBeyondSound
							</div>
						</div>
			</div>
		</footer> -->
    </body>
</html>