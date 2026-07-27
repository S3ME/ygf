<?= $this->extend('layout') ?>

<?= $this->section('pageStyles') ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
    #showmessage {
        height: 500px;
        border: none;
        padding: 20px;
        box-sizing: border-box;
        text-align: left; 
        font-family: Arial, sans-serif;
        font-weight: bold;
        font-size: 14px;
        line-height: 1.8;
    }

    .chat-bubble {
        background-color: #fbcbc9;
        color: #000000;
        padding: 2px 6px;
        margin-bottom: 15px;
        display: inline;
        box-decoration-break: clone;
        -webkit-box-decoration-break: clone;
    }

    .message-row {
        margin-bottom: 15px;
        display: block; 
    }

    #messagetext, #openingmessage {
        background-color: #fbcbc9 !important;
        color: #000000 !important;
        font-weight: bold;
        border: none;
    }

    #messagetext::placeholder, #openingmessage::placeholder {
        color: #000000;
        opacity: 0.6;
    }
    #messagetext::-webkit-input-placeholder, #openingmessage::-webkit-input-placeholder {
        color: #000000;
        opacity: 0.6;
    }
</style>
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
    <div class="uk-grid-small uk-flex-middle" uk-grid>
        <!-- <div class="uk-width-3-4@m uk-height-large uk-margin uk-margin-top uk-flex uk-flex middle uk-flex-center">
            <div class="uk-flex uk-flex-middle">
                <div class="uk-grid-small uk-child-width-auto uk-light" uk-grid uk-countdown="date: 2026-07-21T15:00:00+07:00">
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
                <iframe src="https://www.youtube.com/embed/lRGw_ElYyFQ?si=DUL5v6dQtpbgo_aq?modestbranding=1&autoplay=1&mute=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <!-- <div class="uk-width-1-1 uk-height-large uk-flex uk-flex-middle uk-flex-center uk-margin-top">
                <div class="uk-h1 uk-text-center uk-light">THANK YOU!<br/><br/>See you next year..</div>
            </div> -->
        </div>
        <div class="uk-width-1-4@m">
            <!-- <div style="background-color: #ffff00;">
                <div id="showmessage" class="uk-margin-top uk-panel uk-panel-scrollable" style="height:500px; border:none;"></div>
                <script type="application/javascript">
                    setInterval(function(){
                        $('#showmessage').load('showmessage');
                        $('#showmessage').scrollTop($('#showmessage')[0].scrollHeight);
                    }, 10000);
                </script>
                <div class="uk-padding-small uk-margin-top">
                    <div id="messagecontainer" class="uk-margin-top uk-padding-small uk-light" style="border: 2px solid #d9e021; border-radius: 10px;" </?php echo $unhide; ?>>
                        <form id="messageform" class="uk-form-stacked" method="post" accept-charset="utf-8" style="background-color: #d9e021; color: #000 !important; border-radius: 10px;">
                            <div class="uk-margin" hidden>
                                <div class="uk-form-controls">
                                    <input id="messagename" class="uk-input" name="name" type="text" placeholder="Name" </?php echo $name; ?>>
                                </div>
                            </div>
                            <div class="uk-margin" hidden>
                                <div class="uk-form-controls">
                                    <input id="messageemail" class="uk-input" name="email" type="email" placeholder="Email" </?php echo $email; ?>>
                                </div>
                            </div>
                            <div class="uk-margin" hidden>
                                <div class="uk-form-controls">
                                    <input id="messagecountry" class="uk-input" name="country" type="text" placeholder="Country" </?php echo $country; ?>>
                                </div>
                            </div>
                            <div class="uk-margin" hidden>
                                <div class="uk-form-controls">
                                    <input id="messageage" class="uk-input" name="age" type="number" placeholder="Age" </?php echo $age; ?>>
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
                                        'name'          : $('input[name="name"]').val(),
                                        'email'         : $('input[name="email"]').val(),
                                        'country'       : $('input[name="country"]').val(),
                                        'age'           : $('input[name="age"]').val(),
                                        'message'       : $('input[name="message"]').val()
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
                    <div id="openingformcontainer" class="uk-margin-bottom uk-padding-small uk-light" style="border: 2px solid #d9e021; border-radius: 10px;" </?php echo $hidden; ?>>
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
            <div class="uk-position-relative uk-visible-toggle uk-margin-top" tabindex="-1" uk-slideshow="animation: pull; autoplay: true; ratio: 9:16" style="border: 2px solid #000;">
                <ul class="uk-slideshow-items">
                    <!-- <li>
                        <a href="program#gaung-gamelan"><img src="images/slideshow/gaung_gamelan.jpg" alt="Gaung Gamelan" uk-cover></a>
                    </li>
                    <li>
                        <a href="program#panggung-slenthem"><img src="images/slideshow/panggung_slenthem.jpg" alt="Panggung Slenthem" uk-cover></a>
                    </li>
                    <li>
                        <a href="program#pasar-cokekan"><img src="images/slideshow/panggung_cokekan.jpg" alt="Pasar Cokekan" uk-cover></a>
                    </li>
                    <li>
                        <a href="program#kongres-gamelan"><img src="images/slideshow/kongres_gamelan.jpg" alt="Kongres Gamelan" uk-cover></a>
                    </li> -->
                    <li>
                        <a href="program#lokakarya"><img src="images/slideshow/lokakarya.jpg" alt="Lokakarya" uk-cover></a>
                    </li>
                    <li>
                        <a href="program#rembug-budaya"><img src="images/slideshow/rembug-budaya.jpg" alt="Rembug Budaya" uk-cover></a>
                    </li>
                    <!-- <li>
                        <a href="program#sorot-sumirat"><img src="images/slideshow/sorot_sumirat.jpg" alt="Sorot Sumirat" uk-cover></a>
                    </li>
                    <li>
                        <a href="program#konser-maestro"><img src="images/slideshow/konser_maestro.jpg" alt="Konser Maestro" uk-cover></a>
                    </li> -->
                    <li>
                        <a href="program#konser-gamelan"><img src="images/slideshow/konser-gamelan.jpg" alt="Konser Gamelan" uk-cover></a>
                    </li>
                    <!-- <li>
                        <a href="program#exhibition"><img src="images/slideshow/exhibition.jpg" alt="Exhibition" uk-cover></a>
                    </li> -->
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
</section>
<?= $this->endSection() ?>