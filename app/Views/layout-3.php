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
				font-family: Arial, sans-serif;
			}

			/* Container Utama (Latar Belakang Oranye) */
			.section-3 {
				display: flex;
				flex-direction: column;
				height: 100vh;
				width: 100vw;
				background-color: #ff8819;
				/* Jika memakai SVG pattern oranye */
				background-image: url('../images/sec-3/bg-3.svg'); 
				background-position: center center;
				background-repeat: repeat;
				background-size: cover;
				position: relative;
				overflow: hidden;
			}

			/* Fixed Overlay (Card Tengah Berwarna Biru dengan Lis Putih) */
			.fixed-overlay {
				position: absolute;
				left: 50%;
				top: 52%;
				transform: translate(-50%, -50%);
				width: 88%;
				max-width: 1280px;
				height: 68vh;
				background-color: #00a99d;
				border: 4px solid #ffffff;
				border-radius: 32px;
				z-index: 10;
				display: flex;
				flex-direction: column;
				overflow: hidden;
				box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
			}

			/* Scrollable Content Inside Overlay */
			.scroll-area {
				flex: 1;
				overflow-y: auto;
				padding: 24px;
				scrollbar-width: none; /* Firefox */
				-ms-overflow-style: none; /* IE 10+ */
			}
			.scroll-area::-webkit-scrollbar {
				display: none; /* Chrome, Safari, Opera */
			}

			/* Navbar Button Styles (Menyesuaikan Warna Tosca Gambar 1) */
			.uk-navbar-nav {
				gap: 8px;
			}

			.uk-navbar-nav > li > a.nav-btn {
				display: inline-flex !important;
				align-items: center;
				justify-content: center;
				height: auto !important;
				min-height: initial !important;
				background-color: #00a8a8;
                padding: 8px 18px !important;
                border-radius: 10px;
                text-decoration: none !important;
				border: 1px solid rgba(255, 255, 255, 0.6); 
				box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15); 
				transition: all 0.2s ease-in-out;
			}
			
			.uk-navbar-nav > li > a.nav-btn span {
				background-color: transparent;
				color: #ffffff;
				font-family: Arial, sans-serif;
				font-weight: bold;
				font-size: 14px;
				letter-spacing: 0.8px;
				padding: 2px 6px;
				display: inline-block;
				line-height: 1.2;
				text-transform: uppercase;
			}
			
			/* State Hover & Active Navbar */
			.uk-navbar-nav > li > a.nav-btn:hover {
				background-color: #008080; /* Tosca lebih gelap saat hover */
				transform: translateY(-2px);
				box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
			}
			
			.uk-navbar-nav > li > a.nav-btn:hover span {
				color: #ffffff;
			}

			.uk-navbar-nav > li > a.nav-btn:active {
				transform: translateY(0);
				box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
			}

			/* Responsive adjustments */
			@media (max-width: 768px) {
				.fixed-overlay {
					width: 92%;
					height: 50vh;
					top: 45%;
					transform: translate(-50%, -50%);
					border-radius: 20px;
					border-width: 3px;
				}
			}
        </style>
    </head>
    <body>
        <div class="section-3" uk-height-viewport>
            <!-- Navbar -->
            <?php if ($ismobile === false) { ?>
                <div class="tm-header uk-margin-top" style="z-index:2;" uk-header>
                    <div class="uk-navbar-container" style="background: transparent;">
                        <div class="uk-container uk-container-expand" style="padding-top:15px; padding-bottom:15px;">
                            <nav uk-navbar>
                                <!-- <div class="uk-navbar-left">
                                    <img src="images/sec1/kmg1.svg" style="height:70px;"/>
                                </div> -->
                                <div class="uk-navbar-center">
                                    <ul class="uk-navbar-nav">
                                        <li><a href="<?php echo base_url(); ?>" class="nav-btn"><span>Home</span></a></li>
                                        <li><a href="about" class="nav-btn"><span>About</span></a></li>
                                        <!--<li><a href="schedule" class="nav-btn"><span>Schedule</span></a></li>
                                        <li><a href="artist" class="nav-btn"><span>Artist</span></a></li>-->
                                        <li><a href="program" class="nav-btn"><span>Program</span></a></li>
                                        <li><a href="news" class="nav-btn"><span>News</span></a></li>
                                        <li><a href="galeri" class="nav-btn"><span>Gallery</span></a></li>
                                        <li><a href="merchandise" class="nav-btn"><span>Merchandise</span></a></li>
                                        <li><a href="partners" class="nav-btn"><span>Partners</span></a></li>
                                    </ul>
                                </div>
                                <!-- <div class="uk-navbar-right">
                                    <a href="</?php echo base_url(); ?>"><img src="images/sec1/ygf-top-right-1.svg" style="height:75px;"/></a>
                                </div> -->
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
                </div>
            <?php } ?>

            <!-- Main Section -->
            <?= $this->renderSection('main') ?>

            <!-- Footer -->
            <footer style="position:fixed; bottom: 0; left: 0; right: 0;">
                <div class="uk-container uk-text-center uk-margin-top uk-padding-small" style="color: #fff">
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
                            <a class="uk-link-text" href="https://www.tiktok.com/@gayam16" target="_blank"><i class="fa-brands fa-tiktok"></i> gayam16</a>
                        </div>
                        <div>
                            <a class="uk-link-text" href="/" target="_blank">#YGF31</a>
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