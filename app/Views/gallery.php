<?= $this->extend('layout-3') ?>

<?= $this->section('main') ?>
<div class="fixed-overlay">
    <div class="scroll-area">
        <div class="uk-section uk-section-small uk-container uk-text-center">
            <!-- <h2 class="uk-heading-small uk-text-bold" style="color: #fff;">
                Yogyakarta Gamelan Festival 30
            </h2>
            <p class="uk-text-lead uk-margin-medium-top" style="color: #fff;">
                Kami sedang mempersiapkan pengalaman budaya yang luar biasa untuk Anda. 
                <span class="uk-text-bold" style="color: #fff;"></?= $title ?></span> akan hadir sebentar lagi!
            </p>
            <p class="uk-text-muted uk-margin">
                Tandai kalender Anda dan jangan lewatkan perjalanan musikal yang memukau ini.
            </p> -->
            
			<!-- <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small" uk-grid="masonry: true" uk-lightbox="animation: slide">
				</?php
				foreach ($files as $file) {
					$filePath = FCPATH. '/gallery/' . $file;
					if (is_file($filePath)) {
				?>
					<div>
						<a class="uk-inline" href="gallery/</?=$file?>">
							<img class="uk-width-1-1" src="gallery/</?=$file?>" />
						</a>
					</div>
				</?php
					}
				}
				?>
			</div> -->
            
			<div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-3@m" uk-grid uk-height-match="target: > div > a > .folder-card">
                <div>
                    <a href="galeri/day1">
                        <div class="folder-card uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-center">
                            <div class="folder-tab">Day 1</div>
                            <img class="uk-width-1-1" src="gallery/day1/01-01.jpg" alt="Day 1" />
                        </div>
                    </a>
                </div>
                <div>
                    <a href="galeri/day2">
                        <div class="folder-card uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-center">
                            <div class="folder-tab">Day 2</div>
                            <img class="uk-width-1-1" src="gallery/day2/02-01.jpg" alt="Day 2" />
                        </div>
                    </a>
                </div>
                <div>
                    <a href="galeri/day3">
                        <div class="folder-card uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-center">
                            <div class="folder-tab">Day 3</div>
                            <img class="uk-width-1-1" src="gallery/day3/03-01.jpg" alt="Day 3" />
                        </div>
                    </a>
                </div>
                <div>
                    <a href="galeri/day4">
                        <div class="folder-card uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-center">
                            <div class="folder-tab">Day 4</div>
                            <img class="uk-width-1-1" src="gallery/day4/04-01.jpg" alt="Day 4" />
                        </div>
                    </a>
                </div>
                <div>
                    <a href="galeri/day5">
                        <div class="folder-card uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-center">
                            <div class="folder-tab">Day 5</div>
                            <img class="uk-width-1-1" src="gallery/day5/05-01.jpg" alt="Day 5" />
                        </div>
                    </a>
                </div>
            </div>

            <style>
            .folder-card {
                position: relative;
                padding-top: 40px; /* ruang untuk tab */
                background-color: #f8f8f8;
                border-radius: 6px;
                overflow: hidden;
                transition: 0.3s ease;
            }
            .folder-tab {
                position: absolute;
                top: 0;
                left: 0;
                background: #dcdcdc;
                padding: 6px 12px;
                border-top-left-radius: 6px;
                border-bottom-right-radius: 10px;
                font-weight: bold;
                font-size: 14px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            }
            .folder-card img {
                border-radius: 4px;
                object-fit: cover;
                max-height: 200px;
            }
            </style>
        </div>
    </div>
</div>
<!-- <section class="uk-section uk-padding-remove-bottom">
    <div class="uk-container uk-light" style="background-color:rgba(4,1,51,0.6); border: 4px solid #fff; border-radius:20px;">
        <div class="uk-section-small">
			<div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small" uk-grid="masonry: true" uk-lightbox="animation: slide">
				</?php
				foreach ($files as $file) {
					$filePath = FCPATH. '/gallery/' . $file;
					if (is_file($filePath)) {
				?>
					<div>
						<a class="uk-inline" href="gallery/</?=$file?>">
							<img class="uk-width-1-1" src="gallery/</?=$file?>" />
						</a>
					</div>
				</?php
					}
				}
				?>
			</div>
        </div>
    </div>
</section>
<footer class="uk-section uk-section-small">
    <div class="uk-container">
        </?php
        if ($ismobile) {
            $socmed = 'uk-flex-center';
        $copyright = 'uk-text-center';
        } else {
            $socmed = 'uk-flex-left';
            $copyright = 'uk-text-left';
        }
        ?>
        <div class="uk-margin uk-light uk-child-width-auto uk-flex-center" uk-grid>
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
        </div>
        <div class="uk-margin uk-light uk-text-center">
            Developed by <a class="uk-text-bold" href="https://binary111.com" target="_blank">Kodebiner Teknologi Indonesia</a>
        </div>
    </div>
</footer> -->
<?= $this->endSection() ?>