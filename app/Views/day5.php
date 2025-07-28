<?= $this->extend('layout-3') ?>

<?= $this->section('main') ?>
<div class="fixed-overlay">
    <div class="scroll-area">
        <!-- <div class="uk-section uk-section-xlarge uk-container uk-text-center">
            <h2 class="uk-heading-small uk-text-bold" style="color: #fff;">
                Yogyakarta Gamelan Festival 30
            </h2>
            <p class="uk-text-lead uk-margin-medium-top" style="color: #fff;">
                Kami sedang mempersiapkan pengalaman budaya yang luar biasa untuk Anda. 
                <span class="uk-text-bold" style="color: #fff;"></?= $title ?></span> akan hadir sebentar lagi!
            </p>
            <p class="uk-text-muted uk-margin">
                Tandai kalender Anda dan jangan lewatkan perjalanan musikal yang memukau ini.
            </p>
        </div> -->
        <div class="uk-section uk-section-small uk-container uk-text-center">
			<div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small" uk-grid="masonry: true" uk-lightbox="animation: slide">
				<?php
				foreach ($files as $file) {
					$filePath = FCPATH. '/gallery/day5/' . $file;
					if (is_file($filePath)) {
				?>
					<div>
						<a class="uk-inline" href="gallery/day5/<?=$file?>">
							<img class="uk-width-1-1" src="gallery/day5/<?=$file?>" />
						</a>
					</div>
				<?php
					}
				}
				?>
			</div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>