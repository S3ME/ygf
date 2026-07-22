<?= $this->extend('layout-2') ?>

<?= $this->section('pageStyles') ?>
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="fixed-overlay">
	<div class="scroll-area">
		<section class="uk-text-center">
			<h2 class="uk-heading-small uk-text-bold">
				Yogyakarta Gamelan Festival 31
			</h2>
			<p class="uk-text-lead uk-margin-medium-top">
				Kami sedang mempersiapkan pengalaman budaya yang luar biasa untuk Anda. 
				<span class="uk-text-bold"><?= $title ?></span> akan hadir sebentar lagi!
			</p>
			<p class="uk-margin uk-text-bold" style="color: #61879f;">
				Tandai kalender Anda dan jangan lewatkan perjalanan musikal yang memukau ini.
			</p>
			<!-- <div class="uk-container">
				<img class="uk-width-1-1" src="images/merchandise/header.jpg" />
				<div class="uk-margin uk-child-width-1-1 uk-child-width-1-3@m" uk-grid>
					</?php foreach ($merchendises as $merch) { ?>
						<div>
							<img class="uk-width-1-1" src="images/merchandise/</?= $merch['picture'] ?>" alt="</?= $merch['name'] ?>" />
							<div class="uk-margin-small uk-text-center uk-light">
								<a class="uk-button uk-button-primary uk-text-uppercase" href="https://wa.me/6287738656664?text=Halo%2C%20saya%20ingin%20pesan%20merchandise%20YGF" target="_blank">Order</a>
							</div>
						</div>
					</?php } ?>
				</div>
				<img class="uk-width-1-1" src="images/merchandise/footer.png" />
			</div>
			<div class="uk-margin uk-text-right uk-light uk-container">
				Developed by<br/><a class="uk-link-reset uk-text-bold" href="https://binary111.com" target="_blank">PT. Kodebiner Teknologi Indonesia</a>
			</div> -->
		</section>
	</div>
</div>
<?= $this->endSection() ?>