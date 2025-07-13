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
			body, .uk-offcanvas-page body {
				overflow: hidden;
			}

			.scroll-area {
				overflow-y: auto;
				scrollbar-width: none;         /* Firefox */
				-ms-overflow-style: none;      /* IE/Edge */
			}
			.scroll-area::-webkit-scrollbar {
				display: none;                /* Chrome/Safari */
			}

			@media (max-width: 768px) {
				footer {
					position: fixed;
					bottom: 0;
					left: 0;
					right: 0;
					transition: transform 0.3s ease;
					z-index: 9;
				}

				html.uk-offcanvas-page footer {
					transform: translateX(270px);
				}
			}
		</style>
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
									<img src="images/sec1/kmg1.svg" style="height:40px;" uk-svg/>
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
			<?php if ($ismobile) {
				$sectionclass = '';
			} else {
				$sectionclass = 'uk-section uk-padding-remove-bottom';
			} ?>
			<section class="<?= $sectionclass; ?>">
				<style>
					.outline-text {
						color: #000;
						text-shadow:
							-1px -1px 0 #fff,  
							1px -1px 0 #fff,
							-1px  1px 0 #fff,
							1px  1px 0 #fff;
						font-weight: bold;
					}
				</style>
				<div class="uk-container" style="background-color: rgba(255, 255, 231, 0.8); border: 4px solid #fff; border-radius:20px; font-weight: 600;">
					<div class="uk-section-small">
						<div class="uk-text-center uk-margin">
							<img class="uk-width-1-2 uk-width-1-3@m" src="images/sec1/ygf1.svg" />
						</div>
						<p class="outline-text">Yogyakarta Gamelan Festival (YGF) merupakan festival yang mempertemukan pemain dan pencinta gamelan. Beberapa tahun yang lalu dunia dilanda pandemi, dan di masa-masa itu dunia seakan reset, kembali seperti semula, lalu setelah berhasil “bangkit’ dari masa pandemi yang merupakan masa kegelapan bagi seluruh dunia.</p>
						<h3 class="outline-text" style="font-weight: 800 !important;">"PIWELING"</h3>
						<p class="outline-text">Bahwa manusia mulai merindukan asalnya, natural, alami, mendengarkan hati dan berterima kasih, menjaga kebersamaan, untuk merawat dan berkembang.</p>
						<div class="uk-margin-large-top uk-grid-small uk-grid-divider uk-flex-center uk-child-width-auto" uk-grid>
							<div>
								<a href="https://ygf25.ygflive.com" target="_blank" style="font-weight: 600 !important;" class="outline-text">YGF 25</a>
							</div>
							<div>
								<a href="https://ygf26.ygflive.com" target="_blank" style="font-weight: 600 !important;" class="outline-text">YGF 26</a>
							</div>
							<div>
								<a href="https://ygf27.ygflive.com" target="_blank" style="font-weight: 600 !important;" class="outline-text">YGF 27</a>
							</div>
							<div>
								<a href="https://ygf28.ygflive.com" target="_blank" style="font-weight: 600 !important;" class="outline-text">YGF 28</a>
							</div>
							<div>
								<a href="https://ygf29.ygflive.com" target="_blank" style="font-weight: 600 !important;" class="outline-text">YGF 29</a>
							</div>
						</div>
					</div>
				</div>
			</section>
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