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
				background-color: #FFF2CC;
				background-image: url(../images/sec1/footer-1-1.svg), url(../images/sec1/hero-cloud.svg);
				background-position: bottom center, bottom;
				background-repeat: no-repeat, no-repeat;
				background-size: cover, cover;
				background-attachment: fixed, fixed;
			}
		</style>
    </head>
    <body>
		<div class="home-section" uk-height-viewport>
			<?= $this->renderSection('main') ?>
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