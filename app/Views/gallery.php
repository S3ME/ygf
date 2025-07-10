<?= $this->extend('layout') ?>

<?= $this->section('main') ?>
<section class="uk-section uk-padding-remove-bottom">
    <div class="uk-container uk-light" style="background-color:rgba(4,1,51,0.6); border: 4px solid #fff; border-radius:20px;">
        <div class="uk-section-small">
			<div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small" uk-grid="masonry: true" uk-lightbox="animation: slide">
				<?php
				foreach ($files as $file) {
					$filePath = FCPATH. '/gallery/' . $file;
					if (is_file($filePath)) {
				?>
					<div>
						<a class="uk-inline" href="gallery/<?=$file?>">
							<img class="uk-width-1-1" src="gallery/<?=$file?>" />
						</a>
					</div>
				<?php
					}
				}
				?>
			</div>
        </div>
    </div>
</section>
<footer class="uk-section uk-section-small">
    <div class="uk-container">
        <?php
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
</footer>
<?= $this->endSection() ?>