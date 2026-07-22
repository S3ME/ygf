<?= $this->extend('layout-2') ?>

<?= $this->section('pageStyles') ?>
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="fixed-overlay">
	<div class="scroll-area">
		<section>
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
			<div class="uk-text-center uk-margin">
				<img class="uk-width-1-2 uk-width-1-3@m" src="images/logo-about.svg" />
			</div>
			<h2 class="outline-text uk-text-center">Yogyakarta Gamelan Festival (YGF) ke-31</br>“Sukacita” (Joy) Merayakan Gamelan sebagai Spirit Kebersamaan</h2>
			<p class="outline-text">Komunitas Gayam 16 kembali menghadirkan Yogyakarta Gamelan Festival (YGF) ke-31, festival gamelan internasional yang telah menjadi ruang pertemuan para pelaku dan penikmat gamelan dari berbagai penjuru dunia sejak 1995.</p>
			<p class="outline-text">Mengusung tema “Sukacita” (Joy), YGF 31 mengajak masyarakat merasakan kembali gamelan bukan sekadar sebagai instrumen musik, melainkan sebagai sumber sukacita, ruang kebersamaan, dan penyegaran batin.</p>
			<p class="outline-text">Sebagai bagian dari Bulan Warisan Dunia DIY, YGF 31 turut memperkuat upaya pelestarian dan pengembangan warisan budaya yang telah diakui UNESCO. Festival ini menghadirkan rangkaian program yang berlangsung mulai 21 Juli hingga 2 Agustus 2026, meliputi Lokakarya Gamelan, Rembug Budaya, dan Konser Gamelan.</p>
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
				<div>
					<a href="https://ygf30.ygflive.com" target="_blank" style="font-weight: 600 !important;" class="outline-text">YGF 30</a>
				</div>
			</div>
		</section>
	</div>
</div>
<?= $this->endSection() ?>