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
$countries = array();
foreach ($countriesarr as $countryarr) {
    $countries[] = $countryarr['name']['common'];
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
        <div class="uk-grid-small" uk-grid>
            <!-- <div class="uk-width-3-4@m uk-height-large uk-margin uk-margin-top uk-flex uk-flex middle uk-flex-center">
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
            </div> -->
            <div class="uk-width-3-4@m uk-flex uk-flex-bottom">
                <div class="uk-width-1-1 uk-margin uk-margin-top embed-container">
                    <iframe src="https://www.youtube.com/embed/u0REhx29iLA?modestbranding=1&autoplay=1&mute=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- <div class="uk-width-1-1 uk-height-large uk-flex uk-flex-middle uk-flex-center uk-margin-top">
                    <div class="uk-h1 uk-text-center uk-light">THANK YOU!<br/><br/>See you next year..</div>
                </div> -->
            </div>
            <div class="uk-width-1-4@m">
                <!-- <div style="background-color: #ff00ff;">
                    <div id="showmessage" class="uk-margin-top uk-panel uk-panel-scrollable" style="height:500px; border:none;">
                    </div>
                    <script type="application/javascript">
                        setInterval(function(){
                            $('#showmessage').load('showmessage');
                            $('#showmessage').scrollTop($('#showmessage')[0].scrollHeight);
                        }, 10000);
                    </script>
                    <div class="uk-padding-small uk-margin-top">
                        <div id="messagecontainer" class="uk-margin-top uk-padding-small uk-light" style="border: 2px solid #d9e021; border-radius: 10px;" <?php echo $unhide; ?>>
                            <form id="messageform" class="uk-form-stacked" method="post" accept-charset="utf-8" style="background-color: #d9e021; color: #000 !important; border-radius: 10px;">
                                <div class="uk-margin" hidden>
                                    <div class="uk-form-controls">
                                        <input id="messagename" class="uk-input" name="name" type="text" placeholder="Name" <?php echo $name; ?>>
                                    </div>
                                </div>
                                <div class="uk-margin" hidden>
                                    <div class="uk-form-controls">
                                        <input id="messageemail" class="uk-input" name="email" type="email" placeholder="Email" <?php echo $email; ?>>
                                    </div>
                                </div>
                                <div class="uk-margin" hidden>
                                    <div class="uk-form-controls">
                                        <input id="messagecountry" class="uk-input" name="country" type="text" placeholder="Country" <?php echo $country; ?>>
                                    </div>
                                </div>
                                <div class="uk-margin" hidden>
                                    <div class="uk-form-controls">
                                        <input id="messageage" class="uk-input" name="age" type="number" placeholder="Age" <?php echo $age; ?>>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-form-controls">
                                        <input id="messagetext" class="uk-input uk-text-right" name="message" type="text" placeholder="Message" required>
                                    </div>
                                </div>
                                <button class="uk-button uk-button-default" type="submit" hidden>Submit</button>
                            </form>
                            <script type="application/javascript">
                                $(document).ready(function() {
                                    $('#messageform').submit(function(event) {
                                        var formData = {
                                            'name'			: $('input[name="name"]').val(),
                                            'email'			: $('input[name="email"]').val(),
                                            'country'		: $('input[name="country"]').val(),
                                            'age'			: $('input[name="age"]').val(),
                                            'message'		: $('input[name="message"]').val()
                                        };
                                        
                                        $.ajax({
                                            type        : 'POST',
                                            url         : 'sendmessage',
                                            data        : formData,
                                            dataType    : 'text',
                                            //encode      : true,
                                            error: function () {
                                                console.log('error', arguments);
                                            },
                                            complete: function () {
                                                console.log('complete', arguments);
                                                var name = document.getElementById("messagename");
                                                var email = document.getElementById("messageemail");
                                                var country = document.getElementById("messagecountry");
                                                var age = document.getElementById("messageage");
                                                var text = document.getElementById("messagetext");
                                                
                                                name.setAttribute('hidden', '');
                                                email.setAttribute('hidden', '');
                                                country.setAttribute('hidden', '');
                                                age.setAttribute('hidden', '');
                                                text.value = '';
                                            }
                                        })
                                        .done(function(data) {
                                            console.log(data);
                                        })
                                        .fail(function(data) {
                                            console.log(data);
                                        });
                                        event.preventDefault();
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <style>
                        #openingmessage::placeholder {
                            color: #000;
                        }
                        #openingmessage::-webkit-input-placeholder { /* Chrome/Opera/Safari */
                            color: #000;
                        }
                        #openingmessage::-moz-placeholder { /* Firefox 19+ */
                            color: #000;
                        }
                        #openingmessage:-ms-input-placeholder { /* IE 10+ */
                            color: #000;
                        }
                        #openingmessage:-moz-placeholder { /* Firefox 18- */
                            color: #000;
                        }
                    </style>
                    <div class="uk-padding-small uk-margin-top">
                        <div id="openingformcontainer" class="uk-margin-bottom uk-padding-small uk-light" style="border: 2px solid #d9e021; border-radius: 10px;" <?php echo $hidden; ?>>
                            <form id="openingform" class="uk-form-stacked" style="background-color: #d9e021; color: #000; border-radius: 10px;">
                                <div>
                                    <div class="uk-form-controls">
                                        <input id="openingmessage" class="uk-input uk-text-right" name="openingmessage" type="text" placeholder="Message" required onkeydown="popup()" style="font-weight:700;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
				<div class="uk-position-relative uk-visible-toggle uk-margin-top" tabindex="-1" uk-slideshow="animation: pull; autoplay: true; ratio: 9:16">
					<ul class="uk-slideshow-items">
						<li>
							<a href="program#gaung-gamelan"><img src="images/slideshow/gaung_gamelan.jpg" alt="Gaung Gamelan" uk-cover></a>
						</li>
						<li>
							<a href="program#panggung-slenthem"><img src="images/slideshow/panggung_slenthem.jpg" alt="Panggung Slenthem" uk-cover></a>
						</li>
						<li>
							<a href="program#pasar-cokekan"><img src="images/slideshow/panggung_cokekan.jpg" alt="Pasar Cokekan" uk-cover></a>
						</li>
						<!-- <li>
							<a href="program#kongres-gamelan"><img src="images/slideshow/kongres_gamelan.jpg" alt="Kongres Gamelan" uk-cover></a>
						</li> -->
						<li>
							<a href="program#lokakarya-gamelan"><img src="images/slideshow/lokakarya.jpg" alt="Lokakarya" uk-cover></a>
						</li>
						<li>
							<a href="program#sorot-sumirat"><img src="images/slideshow/sorot_sumirat.jpg" alt="Sorot Sumirat" uk-cover></a>
						</li>
						<li>
							<a href="program#konser-maestro"><img src="images/slideshow/konser_maestro.jpg" alt="Konser Maestro" uk-cover></a>
						</li>
						<li>
							<a href="program#konser-gamelan"><img src="images/slideshow/konser_gamelan.jpg" alt="Konser Gamelan" uk-cover></a>
						</li>
						<li>
							<a href="program#exhibition"><img src="images/slideshow/exhibition.jpg" alt="Exhibition" uk-cover></a>
						</li>
					</ul>
					<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
					<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
				</div>
                <!-- <div id="datacontainer" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light" style="background-color:#000; border:2px solid #fff; width:350px;">
                        <p>Mohon masukkan data diri anda untuk bisa memulai mengirim pesan</p>
                        <form id="dataform" class="uk-form-stacked">
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input id="dataname" class="uk-input" name="dataname" type="text" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input id="dataemail" class="uk-input" name="dataemail" type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <select id="datacountry" class="uk-select" name="datacountry">
                                        <option value="" disabled selected>-- Select Country --</option>
                                        </?php
                                        foreach ($countries as $country) {
                                            echo '<option value="'.$country.'">'.$country.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input id="dataage" class="uk-input" name="dataage" type="number" placeholder="Age" required>
                                </div>
                            </div>
                            <div class="uk-margin uk-text-center">
                                <button class="uk-button uk-button-default" type="submit" onclick="closemodal()">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script type="application/javascript">
                    function popup() {
                        if (event.keyCode == 13) {
                            UIkit.modal('#datacontainer').show();
                            event.preventDefault();
                        }
                    };
                    function closemodal() {
                        UIkit.modal('#datacontainer').hide();
                    };
                    $(document).ready(function() {
                        $('#dataform').submit(function(event) {
                            document.getElementById("messagename").setAttribute('value', $('input[name="dataname"]').val());
                            document.getElementById("messageemail").setAttribute('value', $('input[name="dataemail"]').val());
                            document.getElementById("messagecountry").setAttribute('value', $('select[name="datacountry"]').val());
                            document.getElementById("messageage").setAttribute('value', $('input[name="dataage"]').val());
                            document.getElementById("messagecontainer").removeAttribute('hidden');
                            document.getElementById("openingformcontainer").setAttribute('hidden', '');
                            event.preventDefault();
                        });
                    });
                </script> -->
            </div>
        </div>
        <div>
            <style>
                .button-home {
                    display: block;
                    /* background-color: #f05a25; */
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-radius: 10px;
                    /* color: #fff; */
                    padding: 10px;
                    font-size: 20px;
                    line-height: 1;
                    font-weight: 700;
                    position: relative;
                    overflow: hidden;
                }
                .button-home:hover,
                .button-home:active {
                    color: #000 !important;
                    text-decoration: none;
                }
            </style>
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
            <div class="uk-margin uk-grid-small uk-child-width-auto <?=$menu?>" uk-grid>
                <div>
                    <a class="button-home" style="background-color:#f05a25; color:#fff;" href="program#lokakarya">Gaung Gamelan</a>
                </div>
                <div>
                    <a class="button-home" style="background-color:#d9e021; color:#0000ff;" href="program#panggung-slenthem">Panggung Slenthem</a>
                </div>
                <div>
                    <a class="button-home" style="background-color:#0071bc; color:#fff;" href="program#pasar-cokekan">Pasar Cokekan</a>
                </div>
                <div>
                    <a class="button-home" style="background-color:#9e005d; color:#fff;" href="program#kongres-gamelan">Kongres Gamelan</a>
                </div>
                <div>
                    <a class="button-home" style="background-color:#662d91; color:#fff;" href="program#lokakarya">Lokakarya</a>
                </div>
                <div>
                    <a class="button-home" style="background-color:#ac25f7; color:#fff;" href="program#sorot-sumirat">Sorot Sumirat</a>
                </div>
                <div>
                    <a class="button-home" style="background-color:#f05a25; color:#fff;" href="program#konser-maestro">Konser Maestro</a>
                </div>
                <div>
                    <a class="button-home" style="background-color:#f05a25; color:#fff;" href="program#konser-gamelan">Konser Gamelan</a>
                </div>
            </div>
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