<?= $this->extend('layout') ?>

<?= $this->section('pageStyles') ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<?php
if (isset($messagesession)) {
    $unhide = '';
    $hidden = 'hidden';
    $name = 'value="'.$messagesession['name'].'"';
    $email = 'value="'.$messagesession['email'].'"';
    $country = 'value="'.$messagesession['country'].'"';
    $age = 'value="'.$messagesession['age'].'"';
} else {
    $unhide = 'hidden';
    $hidden = '';
    $name = '';
    $email = '';
    $country = '';
    $age = '';
}
?>

<section>
    <div class="uk-container uk-container-expand">
        <?php if ($ismobile === false) { ?>
            <div class="tm-header" style="z-index:2;" uk-header>
                <div class="uk-navbar-container" style="background: transparent;">
                    <div class="uk-container uk-container-expand" style="padding-top:15px; padding-bottom:15px;">
                        <nav uk-navbar>
                            <div class="uk-navbar-left">
                                <img src="images/sec1/kmg1.svg" style="height:70px;"/>
                            </div>
                            <div class="uk-navbar-center">
                                <ul class="uk-navbar-nav">
                                    <li><a href="<?php echo base_url(); ?>" style="background-color:#00ffff; color:#000;">Home</a></li>
                                    <li><a href="about" style="background-color:#00ffff; color:#000;">About</a></li>
                                    <!--<li><a href="schedule" style="background-color:#00ffff; color:#000;">Schedule</a></li>
                                    <li><a href="artist" style="background-color:#00ffff; color:#000;">Artist</a></li>-->
                                    <li><a href="program" style="background-color:#00ffff; color:#000;">Program</a></li>
                                    <li><a href="news" style="background-color:#00ffff; color:#000;">News</a></li>
                                    <li><a href="galeri" style="background-color:#00ffff; color:#000;">Gallery</a></li>
                                    <!-- <li><a href="merchandise" style="background-color:#00ffff; color:#000;">Merchandise</a></li> -->
                                    <li><a href="partners" style="background-color:#00ffff; color:#000;">Partners</a></li>
                                </ul>
                            </div>
                            <div class="uk-navbar-right">
                                <a href="<?php echo base_url(); ?>"><img src="images/sec1/ygf-top-right-1.svg" style="height:75px;"/></a>
                            </div>
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
                            <div class="uk-navbar-center">
                                <img src="images/sec1/kmg1.svg" style="height:40px;" />
                            </div>
                            <div class="uk-navbar-right">
                                <a href="<?php echo base_url(); ?>"><img src="images/sec1/ygf-top-right-1.svg" style="height:40px; color: #000;" /></a>
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
                                                <!-- <li><a href="merchandise">Merchandise</a></li> -->
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
        <div class="uk-section uk-flex uk-flex-middle uk-flex-center uk-text-center" style="padding: 20px;">
            <div class="uk-width-3-4@m">
                <h2 class="uk-heading-small uk-text-bold" style="color: #000;">
                    Yogyakarta Gamelan Festival 30
                </h2>
                <p class="uk-text-lead uk-margin-medium-top" style="color: #333;">
                    Kami sedang mempersiapkan pengalaman budaya yang luar biasa untuk Anda. 
                    <span class="uk-text-bold" style="color: #f05a25;">YGF30</span> akan hadir sebentar lagi!
                </p>
                <p class="uk-text-muted uk-margin">
                    Tandai kalender Anda dan jangan lewatkan perjalanan musikal yang memukau ini.
                </p>
            </div>
        </div>

        <div class="uk-height-large uk-flex uk-flex middle uk-flex-center">
            <div class="uk-flex uk-flex-middle">
                <div class="uk-grid-small uk-child-width-auto uk-light" uk-grid uk-countdown="date: 2025-07-21T15:00:00+07:00">
                    <div>
                        <div class="uk-countdown-number uk-countdown-days" style="color:#000 !important;"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s" style="color:#000 !important;">Days</div>
                    </div>
                    <div class="uk-countdown-separator" style="color:#000 !important;">:</div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-hours" style="color:#000 !important;"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s" style="color:#000 !important;">Hours</div>
                    </div>
                    <div class="uk-countdown-separator" style="color:#000 !important;">:</div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-minutes" style="color:#000 !important;"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s" style="color:#000 !important;">Minutes</div>
                    </div>
                    <div class="uk-countdown-separator" style="color:#000 !important;">:</div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-seconds" style="color:#000 !important;"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s" style="color:#000 !important;">Seconds</div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <?php
            if ($ismobile) {
                $menu = 'uk-flex-center';
                $socmed = 'uk-flex-center';
                $copyright = 'uk-text-center';
            } else {
                $menu = 'uk-flex-between';
                $socmed = 'uk-flex-left';
                $copyright = 'uk-text-left';
            }
            ?>
            <div class="uk-margin uk-light uk-child-width-auto <?=$socmed?>" uk-grid>
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
                    <a class="uk-link-text" href="" target="_blank">#YGF30</a>
                </div>
            </div>
            <div class="uk-margin uk-light <?=$copyright?>">
                Developed by <a class="uk-text-bold" href="https://binary111.com" target="_blank">Kodebiner Teknologi Indonesia</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>