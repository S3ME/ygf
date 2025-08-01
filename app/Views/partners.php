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

		<style>
			html, body {
				margin: 0;
				padding: 0;
				height: 100%;
				overflow: hidden;
			}

			.about-container {
				display: flex;
				flex-direction: column;
				height: 100vh;
				background-color: #fff714;
				background-image: url(../images/sec2/bg-2.svg);
				background-position: bottom;
				background-repeat: no-repeat;
				background-size: cover;
				background-attachment: fixed;
				overflow: hidden;
			}

			.fixed-overlay {
				position: fixed;
				left: 50%;
				transform: translateX(-50%);
				width: 90%;
				max-width: 1200px;
				background-color: rgba(255, 255, 231, 0.8);
				border: 4px solid #fff;
				border-radius: 20px;
				z-index: 10;
				display: flex;
				flex-direction: column;
				overflow: hidden;
				box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
				transition: top 0.3s ease;
			}

			.scroll-area {
				flex: 1;
				overflow-y: auto;
				padding: 20px;
				scrollbar-width: none; /* Firefox */
				-ms-overflow-style: none;  /* IE 10+ */
			}
			.scroll-area::-webkit-scrollbar {
				display: none; /* Chrome, Safari, Opera */
			}

			/* Desktop: center overlay vertically */
			@media (min-width: 769px) {
				.fixed-overlay {
					top: 50%;
					transform: translate(-50%, -50%);
					max-height: 75vh;
				}
			}

			/* Mobile */
			@media (max-width: 768px) {
				.fixed-overlay {
					top: 100px;
					max-height: 80vh;
					border-radius: 12px;
				}

				.scroll-area {
					padding: 16px;
					max-height: 60vh;
				}

				html.uk-offcanvas-page .fixed-overlay {
					transform: translateX(30%);
				}
				html.uk-offcanvas-page footer {
					transform: translateX(80%);
				}
			}
		</style>
        <?= $this->renderSection('pageStyles') ?>
    </head>
    <body>
		<div class="about-container" uk-height-viewport>
			<?php if ($ismobile === false) { ?>
				<div class="tm-header" style="z-index:2;" uk-header>
					<div class="uk-navbar-container" style="background: transparent;">
						<div class="uk-container uk-container-expand" style="padding-top:15px; padding-bottom:15px;">
							<nav uk-navbar>
								<div class="uk-navbar-left">
									<img src="images/sec1/kmg1.svg" style="height:70px;"/>
								</div>
								<div class="uk-navbar-center">
									<ul class="uk-navbar-nav">
										<li><a href="<?php echo base_url(); ?>" style="background-color: #ff00ff; color: #fff;">Home</a></li>
										<li><a href="about" style="background-color: #ff00ff; color: #fff;">About</a></li>
										<!--<li><a href="schedule" style="background-color: #ff00ff; color: #fff;">Schedule</a></li>
										<li><a href="artist" style="background-color: #ff00ff; color: #fff;">Artist</a></li>-->
										<li><a href="program" style="background-color: #ff00ff; color: #fff;">Program</a></li>
										<li><a href="news" style="background-color: #ff00ff; color: #fff;">News</a></li>
										<li><a href="galeri" style="background-color: #ff00ff; color: #fff;">Gallery</a></li>
										<!-- <li><a href="merchandise" style="background-color: #ff00ff; color: #fff;">Merchandise</a></li> -->
										<li><a href="partners" style="background-color: #ff00ff; color: #fff;">Partners</a></li>
									</ul>
								</div>
								<div class="uk-navbar-right">
									<a href="<?php echo base_url(); ?>"><img src="images/sec1/ygf-top-right-1.svg" style="height:75px;"/></a>
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
									<a class="uk-navbar-toggle" href="#offcanvas" uk-toggle uk-navbar-toggle-icon></a>
								</div>
								<div class="uk-navbar-center">
									<img src="images/sec1/kmg1.svg" style="height:40px;"/>
								</div>
								<div class="uk-navbar-right">
									<a href="<?php echo base_url(); ?>"><img src="images/sec1/ygf-top-right-1.svg" style="height:40px; color: #000;" uk-svg/></a>
								</div>
							</nav>
						</div>
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
													<!-- <li><a href="merchandise">Merchandise</a></li> -->
													<li><a href="partners">Partners</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<!-- </?= view('Views/menu') ?> -->
    		<div class="fixed-overlay">
				<div class="scroll-area">
					<section>
						<!-- <div class="uk-margin uk-child-width-auto uk-flex-center uk-flex-bottom" uk-grid>
							<div><img src="images/logos/dinas-kebudayaan.png" /></div>
							<div><img src="images/logos/danais.png" /></div>
							<div><a href="https://www.djarumfoundation.org/aktivitas/kegiatan/budaya/" target="_blank"><img src="images/logos/djarum-foundation.png" /></a></div>
							<div><img src="images/logos/ambarrukmo.png" /></div>
						</div>
						<div class="uk-margin-large uk-child-width-auto uk-flex-center uk-flex-middle" uk-grid>
							<div><img src="images/logos/jogfest.png" /></div>
							<div><img src="images/logos/ppi.png" /></div>
							<div><img src="images/logos/saab.png" /></div>
							<div><img src="images/logos/dc-pro.png" /></div>
							<div><img src="images/logos/koran-merapi.png" /></div>
							<div><img src="images/logos/eventweb.png" /></div>
							<div><img src="images/logos/korambernas.png" /></div>
							<div><img src="images/logos/krjogja.png" /></div>
							<div><img src="images/logos/ekbizz.png" /></div>
							<div><img src="images/logos/liputan6.png" /></div>
							<div><img src="images/logos/lensajogja.png" /></div>
							<div><img src="images/logos/geronimo.png" /></div>
							<div><img src="images/logos/jogjafamily.png" /></div>
							<div><img src="images/logos/sonora.png" /></div>
							<div><img src="images/logos/swaragama.png" /></div>
							<div><img src="images/logos/acaraseni.png" /></div>
							<div><img src="images/logos/jaringacara.png" /></div>
							<div><img src="images/logos/prodvokator.png" /></div>
							<div><img src="images/logos/paijo.png" /></div>
							<div><img src="images/logos/pyy.png" /></div>
							<div><img src="images/logos/nyatanya.png" /></div>
							<div><img src="images/logos/uma.png" /></div>
						</div> -->
						<?php if ($ismobile) { ?>
							<img class="uk-width-1-1" src="images/partner-mobile.svg" uk-svg/>
						<?php } else { ?>
							<img class="uk-width-1-1" src="images/partner-desktop.svg" uk-svg/>
						<?php } ?>
					</section>
				</div>
			</div>
			<footer style="position:fixed; bottom: 0; left: 0; right: 0;">
				<div class="uk-container uk-text-center uk-margin-top uk-padding-small" style="background-color: #f05a25; color: #fff; border-radius: 20px;">
					<?php
					if ($ismobile) {
						$socmed = 'uk-flex-center';
					$copyright = 'uk-text-center';
					} else {
						$socmed = 'uk-flex-left';
						$copyright = 'uk-text-left';
					}
					?>
					<div class="uk-margin-small uk-grid-small uk-light uk-child-width-auto uk-flex-center" uk-grid>
						<div>
							<a class="uk-link-text" href="https://www.facebook.com/YogyakartaGamelanFestival" target="_blank"><i class="fa-brands fa-facebook"></i> YogyakartaGamelanFestival</a>
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
							<a class="uk-link-text" href="/" target="_blank">#YGF30</a>
						</div>
					</div>
					<div class="uk-light uk-text-center">
						Developed by <a class="uk-text-bold" href="https://binary111.com" target="_blank">Kodebiner Teknologi Indonesia</a>
					</div>
				</div>
			</footer>
		</div>
    </body>
</html>