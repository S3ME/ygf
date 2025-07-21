<?= $this->extend('layout-3') ?>

<?= $this->section('main') ?>
<style>
    .outline-text {
        color: #fff;
        text-shadow:
            -1px -1px 0 #000,  
            1px -1px 0 #000,
            -1px  1px 0 #000,
            1px  1px 0 #000;
        font-weight: bold;
    }
</style>
<div class="fixed-overlay">
    <div class="scroll-area">
        <div class="uk-section uk-section-small">
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
            <div id="gaung-gamelan" class="uk-margin">
                <h2 class="uk-text-uppercase outline-text">GAUNG GAMELAN</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/gaung_gamelan.jpg" alt="Gaung Gamelan" />
                </div>
                <p class="outline-text">Gaung Gamelan, sebagai pembuka rangkaian Yogyakarta Gamelan Festival 30 dan merupakan program andalan yang merangkum beberapa desa budaya di Yogyakarta untuk memainkan beberapa komposisi 3 gending gaya Yogyakarta secara bersamaan. Gending-gending ini sebelumnya akan dibagikan kepada publik dan dilatih bersama Komunitas Gayam 16.</p>
                <p class="outline-text">Perpaduan bunyi gamelan dari berbagai laras akan menghasilkan simfoni yang sangat indah dan kompleks. Kompleksitas orkestrasi bunyi gamelan ini tidak akan diamplifikasi oleh tata suara modern. Hal ini bertujuan agar simfoni yang tercipta dapat terdengar secara langsung oleh telinga.</p>
                <div class="uk-h5 outline-text">
                    Senin, 21 Juli 2025<br/>
                    15.30 WIB<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/iGSNmpLeqN3t9U9n8" target="_blank">Taman Budaya Embung Giwangan</a></b>
                </div>
            </div>
            <hr class="uk-divider-icon">
            <div id="panggung-slenthem" class="uk-margin">
                <h2 class="uk-text-uppercase outline-text">PANGGUNG SLENTHEM</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/panggung_slenthem.jpg" alt="Panggung Slenthem" />
                </div>
                <p class="outline-text">Salah satu wahana bagi beberapa penampil di Yogyakarta Gamelan Festival ke-30 tahun ini bernama Panggung Slenthem.</p>
                <p class="outline-text">Panggung ini akan menampilkan keberagaman musik dengan performa mantap dari tiap penampilnya. Dan akan ada rekan-rekan @simaksiar juga di sana.</p>
                <div class="uk-h5 outline-text">
                    Selasa - Kamis,<br/>
                    22 - 24 Juli 2025<br/>
                    16.00 WIB<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/iGSNmpLeqN3t9U9n8" target="_blank">Panggung Utama Taman Budaya Embung Giwangan</a></b>
                </div>
            </div>
            <hr class="uk-divider-icon">
            <div id="pasar-cokekan" class="uk-margin">
                <h2 class="uk-text-uppercase outline-text">PASAR COKEKAN</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/panggung_cokekan.jpg" alt="Panggung Cokekan" />
                </div>
                <p class="outline-text">Ada yang menarik di Yogyakarta Gamelan Festival ke-30 tahun ini, beda juga dari penyelenggaraan sebelum-sebelumnya, adalah hadirnya Panggung Cokekan yang memanggungkan banyak penampil unik setiap harinya.</p>
                <p class="outline-text">Dan Pasar Cokekan yang akan memenuhi kebutuhan kulinermu.</p>
                <div class="uk-h5 outline-text">
                    Senin - Minggu,<br/>
                    21 - 27 Juli 2025<br/>
                    15.00 - 22.00 WIB<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/iGSNmpLeqN3t9U9n8" target="_blank">Street stage area Pasar Cokekan, Taman Budaya Embung Giwangan.</a></b>
                </div>
            </div>
            <hr class="uk-divider-icon">
            <div id="lokakarya" class="uk-margin">
                <h2 class="uk-text-uppercase outline-text">LOKAKARYA</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/lokakarya.jpg" alt="Lokakarya" />
                </div>
                <p class="outline-text">Lokakarya Gamelan yang menjadi salah satu rangkaian acara Yogyakarta Gamelan Festival (YGF)#30. Dengan mengangkat tema "Gamelan Tanpa Tembok" diharap mampu menjadi ruang partisipatif yang menjembatani generasi muda dan masyarakat luas untuk lebih dekat, mengenal, dan  turut melestarikan gamelan sebagai warisan budaya yang hidup dan relevan dengan zaman.</p>
                <p class="outline-text">Seorang lelaki bernama Sahrul Yuliyanto yang mencintai gamelan & karawitan ini disematkan “Kepek–nama dusunnya” dan populer sebagai @sahrul_kepek.<br/>Dan di program Lokakarya nanti, Mas Sahrul akan menjadi narasumbernya, dengan benefit mantep yang bisa kamu dapat.</p>
                <div class="uk-h5 outline-text">
                    Selasa - Kamis,<br/>
                    22 - 24 Juli 2025<br/>
                    13.00 - 16.00 WIB<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/iGSNmpLeqN3t9U9n8" target="_blank">selasar kawasan Taman Budaya Embung Giwangan</a></b>
                </div>
                <p class="outline-text">
                    <span class="uk-text-bold uk-text-large">LIMITED PARTICIPANT!</span><br/>
                    Link pendaftaran : <a href="https://wa.me/6285183013381" target="_blank">+6285183013381</a><br/>
                    <!-- Fasilitas : Sertifikat, Konsumsi -->
                </p>
                <!-- <p class="outline-text">CP; <a href="https://wa.me/6285183013381" target="_blank">+6285183013381</a></p> -->
            </div>
            <hr class="uk-divider-icon">
            <div id="konser-maestro" class="uk-margin">
                <h2 class="uk-text-uppercase outline-text">KONSER MAESTRO</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/konser_maestro.jpg" alt="Konser Maestro" />
                </div>
                <p class="outline-text">Yogyakarta Gamelan Festival dan Gayam16 ingin kembali menghidupkan karya – karya dari para maestro yang pernah menjadi bagian dari tumbuh dan berprosesnya mereka hari ini.</p>
                <p class="outline-text">Merayakan tiga dekade perjalanan Yogyakarta Gamelan Festival, Konser Maestro menghadirkan karya-karya ikonik dari tiga tokoh penting dunia gamelan: Sapto Raharjo bersama Gayam16, Harry Roesli bersama Rumah Musik Harry Roesli, dan Djaduk Ferianto bersama Kuaetnika.</p>
                <p class="outline-text">Konser ini menjadi ruang penghormatan sekaligus pengalaman musikal yang menggabungkan warisan, keberanian bereksperimen, dan semangat lintas zaman.</p>
                <div class="uk-h5 outline-text">
                    Rabu, 23 Juli 2025<br/>
                    20.00 WIB<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/iGSNmpLeqN3t9U9n8" target="_blank">Gedung Grha Budaya (Concert Hall) Taman Budaya Embung Giwangan</a></b>
                </div>
                <p class="outline-text">
                    <!-- <span class="uk-text-bold uk-text-large">LIMITED PARTICIPANT!</span><br/> -->
                    Link Pembelian Tiket Konser Maestro : <a href="https://artatix.co.id/event/konser-maestro-yogyakarta-gamelan-festival " target="_blank">https://artatix.co.id/event/konser-maestro-yogyakarta-gamelan-festival </a>
                </p>
                <!-- <p>CP; <a href="https://wa.me/6282227862104" target="_blank">+6282227862104</a></p> -->
            </div>
            <!-- <hr class="uk-divider-icon">
            <div id="rembug-budaya" class="uk-margin">
                <h2 class="uk-text-uppercase">REMBUG BUDAYA</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/rembug_budaya.jpg" alt="Rembug Budaya" />
                </div>
                <div class="uk-h5">
                    6 Agustus 2024<br/>
                    15.00 WIB - selesai<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/hDz4qVVTySqL1o7Q6" target="_blank">OKID Cafe</a></b>
                </div>
                <h4>“Arsip musik sebagai warisan”</h4>
                <p>Mengelola arsip musik dapat juga dianggap sebagai usaha dalam merawat sebuah warisan. Merawat bukan hanya bersifat fisik namun berupa upaya mengembangkan semangat-semangat masa lalu sebagai bekal masa depan.</p>
                <p class="uk-margin-remove-bottom">Pembicara :</p>
                <ol class="uk-margin-remove-top">
                    <li>Jody Diamond (American Gamelan Institute/SUNY New Paltz)</li>
                    <li>Danang Rusdy (Lokananta)</li>
                </ol>
                <p>Moderator : Himan (Jogja Sonic Index)</p>
                <p>
                    <span class="uk-text-bold uk-text-large">LIMITED PARTICIPANT!</span><br/>
                    Link pendaftaran : <a href="https://bit.ly/LKYGF29" target="_blank">bit.ly/LKYGF29</a>
                </p>
                <p>CP; <a href="https://wa.me/6282227862104" target="_blank">+6282227862104</a></p>
            </div> -->
            <hr class="uk-divider-icon">
            <div id="konser-gamelan" class="uk-margin">
                <h2 class="uk-text-uppercase outline-text">KONSER GAMELAN</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/konser_gamelan.jpg" alt="Konser Gamelan" />
                </div>
                <p class="outline-text">Konser Gamelan merupakan salah satu program yang menjadi wadah pertemuan antara para pelaku, pecinta, dan penikmat Gamelan dari berbagai penjuru dunia.</p>
                <p class="outline-text">Melalui konser ini, tradisi dan inovasi dalam dunia Gamelan saling bersilangan, menciptakan ruang apresiasi,  kolaborasi, dan dialog budaya yang hidup.</p>
                <div class="uk-h5 outline-text">
                    Jumat - Minggu,<br/>
                    25 - 27 Juli 2025<br/>
                    19.00 - 22.00 WIB<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/iGSNmpLeqN3t9U9n8" target="_blank">Panggung Utama Taman Budaya Embung Giwangan</a></b>
                </div>
                <!-- <p><span class="uk-text-bold uk-text-large">GRATIS!</span></p> -->
            </div>
            <hr class="uk-divider-icon">
            <div id="exhibition" class="uk-margin">
                <h2 class="uk-text-uppercase outline-text">EXHIBITION</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/exhibition.jpg" alt="Exhibition" />
                </div>
                <p class="outline-text">Satu program Yogyakarta Gamelan Festival ini juga menarik untuk dikunjungi dan disaksikan, adalah Exhibition atau pameran. Dan berikut mereka para seniman yang akan berpameran beserta karyanya:</p>
                <ol class="uk-list uk-list-decimal outline-text">
                    <li>
                        “Gamelan Kyai Setrodinomo”, kolaborasi antara Seniman :
                        <ul class="uk-list uk-list-hyphen outline-text">
                            <li>@jompetkuswidananto,</li>
                            <li>Wibowo S.sn @mastergamelan,</li>
                            <li>@ikballubys.</li>
                        </ul>
                    </li>
                    <li>“Gameltron” - Departemen Teknik Elektro dan Teknologi Informasi Fakultas Teknik UGM dan Gayam16.</li>
                    <li>Parafrase Trilogi - Mading Arsip 25 Tahun Gayam16 - Gayam16.</li>
                </ol>
                <p class="outline-text">Dan pada 25 Juli 2025 juga akan ada sesi Bincang Seniman bersama Jompet Kuswidananto & Wibowo S.Sn.</p>
                <div class="uk-h5 outline-text">
                    Senin - Minggu,<br/>
                    21 - 27 Juli 2025<br/>
                    15.00 - 22.00 WIB<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/iGSNmpLeqN3t9U9n8" target="_blank">Exhibition Hall Taman Budaya Embung Giwangan</a></b>
                </div>
                <!-- <p><span class="uk-text-bold uk-text-large">GRATIS!</span></p> -->
            </div>
        </div>
    </div>
</div>
<!-- <section class="uk-section uk-padding-remove-bottom">
    <div class="uk-container uk-light" style="background-color:rgba(4,1,51,0.6); border: 4px solid #fff; border-radius:20px;">
        <div class="uk-section-small">
            <div id="lokakarya" class="uk-margin">
                <h2 class="uk-text-uppercase">Lokakarya</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/lokakarya.jpg" alt="Lokakarya" />
                </div>
                <div class="uk-h5">
                    5-7 Agustus 2024<br/>
                    14.00 - 17.00 WIB<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/tbu7ASgiUphx54cLA" target="_blank">Pendopo Gayam 16</a></b>
                </div>
                <h4>“Metode Sariswara Ki Hadjar Dewantara”</h4>
                <p>Merupakan workshop bagi semua orang, khususnya yang sama sekali belum pernah bermain gamelan. Menggunakan metode Sari Swara dalam proses pembelajarannya. Sari Swara sengaja dipilih karena merupakan metode yang telah lama dikembangkan dan efektif dalam proses pembelajaran seni, khususnya gamelan. Lokakarya akan dipandu dan didampingi oleh teman-teman Taman Kesenian. Materinya adalah 2 gending klasik yang kemudian akan dipentaskan di YGF hari kedua.</p>
                <p>Pemateri: Listyo Hari Krisnarjo (Lab. Sariswara) dan Taman Kesenian</p>
                <p class="uk-margin-remove-bottom">Tujuan :</p>
                <ol class="uk-margin-remove-top">
                    <li>Mengenalkan metode sari swara</li>
                    <li>Berlatih gamelan menggunakan metode sari swara</li>
                </ol>
                <p class="uk-margin-remove-bottom">Manfaat :</p>
                <ol class="uk-margin-remove-top">
                    <li>Peserta dapat memahami metode sari swara</li>
                    <li>Peserta berlatih gamelan menggunakan metode sari swara</li>
                    <li>Peserta akan berpartisipasi di YGF</li>
                </ol>
                <p class="uk-margin-remove-bottom">Partisipasi YGF :</p>
                <ol class="uk-margin-remove-top">
                    <li>Peserta akan memainkan 2 gending klasik hasil workshop pada hari ke 2 konser gamelan</li>
                    <li>Peserta dapat berkolaborasi dengan pendamping dalam pementasan</li>
                </ol>
                <p>
                    <span class="uk-text-bold uk-text-large">LIMITED PARTICIPANT!</span><br/>
                    Link pendaftaran : <a href="https://bit.ly/LKYGF29" target="_blank">bit.ly/LKYGF29</a><br/>
                    Fasilitas : Sertifikat, Konsumsi
                </p>
                <p>CP; <a href="https://wa.me/6282227862104" target="_blank">+6282227862104</a></p>
            </div>
            <hr class="uk-divider-icon">
            <div id="rembug-budaya" class="uk-margin">
                <h2 class="uk-text-uppercase">REMBUG BUDAYA</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/rembug_budaya.jpg" alt="Rembug Budaya" />
                </div>
                <div class="uk-h5">
                    6 Agustus 2024<br/>
                    15.00 WIB - selesai<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/hDz4qVVTySqL1o7Q6" target="_blank">OKID Cafe</a></b>
                </div>
                <h4>“Arsip musik sebagai warisan”</h4>
                <p>Mengelola arsip musik dapat juga dianggap sebagai usaha dalam merawat sebuah warisan. Merawat bukan hanya bersifat fisik namun berupa upaya mengembangkan semangat-semangat masa lalu sebagai bekal masa depan.</p>
                <p class="uk-margin-remove-bottom">Pembicara :</p>
                <ol class="uk-margin-remove-top">
                    <li>Jody Diamond (American Gamelan Institute/SUNY New Paltz)</li>
                    <li>Danang Rusdy (Lokananta)</li>
                </ol>
                <p>Moderator : Himan (Jogja Sonic Index)</p>
                <p>
                    <span class="uk-text-bold uk-text-large">LIMITED PARTICIPANT!</span><br/>
                    Link pendaftaran : <a href="https://bit.ly/LKYGF29" target="_blank">bit.ly/LKYGF29</a>
                </p>
                <p>CP; <a href="https://wa.me/6282227862104" target="_blank">+6282227862104</a></p>
            </div>
            <hr class="uk-divider-icon">
            <div id="konser-gamelan" class="uk-margin">
                <h2 class="uk-text-uppercase">KONSER GAMELAN</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/konser_gamelan.jpg" alt="Konser Gamelan" />
                </div>
                <div class="uk-h5">
                    8 - 10 Agustus 2024<br/>
                    19.00 WIB - selesai<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/z1pGYyUapEATSBSQ9" target="_blank">Plaza Pasar Ngasem</a></b>
                </div>
                <h4>“Piweling”</h4>
                <p class="uk-margin-remove-bottom">Konser pertunjukan gamelan yang akan menampilkan kelompok gamelan dari kategori anak-anak / pelajar, kategori kreasi baru / kontemporer, kategori internasional, dan kategori klasik / tradisi. Tiap kategori ini akan dihadirkan selama 3 hari berturut-turut, Tahun ini selain dari Indonesia, juga akan tampil seniman gamelan dari Prancis dan Kanada, antara lain :</p>
                <ol class="uk-margin-remove-top">
                    <li>Canasia - Canada & Indonesia</li>
                    <li>Gamelan Kotekan - France</li>
                    <li>Sanggar Kawindra (anak) - Kediri</li>
                    <li>Harry Roesli Music School - Bandung</li>
                    <li>Rebanana - Banyuwangi</li>
                </ol>
                <p><span class="uk-text-bold uk-text-large">GRATIS!</span></p>
            </div>
            <hr class="uk-divider-icon">
            <div id="gaung-gamelan" class="uk-margin">
                <h2 class="uk-text-uppercase">GAUNG GAMELAN</h2>
                <div class="uk-text-center">
                    <img class="uk-width-2-3@m" src="images/gaung_gamelan.jpg" alt="Gaung Gamelan" />
                </div>
                <div class="uk-h5">
                    11 Agustus 2024<br/>
                    19.00 WIB - selesai<br/>
                    <b><a class="uk-link-text" href="https://maps.app.goo.gl/KzmWjcK9DNqqJnwM8" target="_blank">Stadion Kridosono</a></b>
                </div>
                <h4>Closing Ceremony of 29th Yogyakarta Gamelan Festival</h4>
                <p class="uk-margin-remove-bottom">Akan digelar di Stadion Kridosono, pertunjukan gamelan yang dimainkan oleh ratusan pemain gamelan secara bersamaan yang tergabung dalam kelompok karawitan dari 14 Desa Budaya* binaan Dinas Kebudayaan "Kundha Kabudayan" DIY dan kelompok gamelan komunitas antara lain Kyai Kanjeng dan AKNSB (Akademi Komunitas Negeri Seni dan Budaya);</p>
                <ol class="uk-margin-remove-top">
                    <li>Kalurahan Argodadi, Sedayu, Bantul</li>
                    <li>Kalurahan Panggungharjo, Sewon, Bantul</li>
                    <li>Kalurahan Parangtritis, Kretek, Bantul</li>
                    <li>Kalurahan Bangunjiwo, Kasihan, Bantul</li>
                    <li>Kalurahan Gilangharjo, Pandak, Bantul</li>
                    <li>Kalurahan Petir, Rongkop, Gunung Kidul</li>
                    <li>Kalurahan Girisekar, Panggang, Gunung Kidul</li>
                    <li>Kalurahan Taman martani, Kalasan, Sleman</li>
                    <li>Kalurahan Sidoluhur, Godean, Sleman</li>
                    <li>Kalurahan Widodomartani, Ngempal, Sleman</li>
                    <li>Kalurahan Sendangmulyo, Minggir, Sleman</li>
                    <li>Kalurahan Pagerharjo, Samigaluh, Kulon Progo</li>
                    <li>Kalurahan Kalirejo, Kokap, Kulon Progo</li>
                    <li>Kalurahan Brosot, Lendah, Kulon Progo</li>
                </ol>
                <p>Pertunjukan ini akan memainkan 4 gending klasik gaya Yogyakarta yang akan dibagikan sebulan sebelumnya, serta disebarkan melalui berbagai media dengan tujuan agar dapat dipelajari (dibaca) oleh masyarakat luas sebagai pengetahuan atau dapat dipakai untuk berpartisipasi di dalam program ini. Selain pertunjukan utama Gaung Gamelan, akan ada performance dari Gayam16 (Yogyakarta), DGYK (Yogyakarta), Anteng Kitiran (Yogyakarta), Sanggar Sritanjung (Banyuwangi). Gaung Gamelan akan menutup rangkaian Yogyakarta Gamelan Festival ke-29. Seluruh rangkaian program YGF adalah gratis dan terbuka untuk masyarakat umum.</p>
                <p><span class="uk-text-bold uk-text-large">GRATIS!</span></p>
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