<?= $this->extend('layout-3') ?>

<?= $this->section('main') ?>
<div class="fixed-overlay">
    <div class="scroll-area">
        <div class="uk-section uk-section-small uk-container uk-text-center">
			<div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small" uk-grid="masonry: true" uk-lightbox="animation: slide">
				<?php
				foreach ($files as $file) {
					$filePath = FCPATH. '/gallery/day1/' . $file;
					if (is_file($filePath)) {
				?>
					<div>
						<a class="uk-inline" href="gallery/day1/<?=$file?>">
							<img class="uk-width-1-1" src="gallery/day1/<?=$file?>" />
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