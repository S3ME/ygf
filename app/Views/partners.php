<?= $this->extend('layout-2') ?>

<?= $this->section('pageStyles') ?>
<?= $this->endSection() ?>

<?= $this->section('main') ?>
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
<?= $this->endSection() ?>