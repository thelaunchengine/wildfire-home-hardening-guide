<!DOCTYPE html>
<html>

    <head>
        <title>WILDFIRE HOME HARDENING GUIDE | Santa Barbara County Fire Safe Council SBFSC</title>
        <link rel="icon" type="image/x-icon" href="https://sbfiresafecouncil.org/wp-content/uploads/2020/05/favicon.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
        <meta name="robots" content="noindex,nofollow">
        <style>
            @-ms-viewport {
                width: device-width;
            }
        </style>
        <link rel="stylesheet" href="vendor/reset.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="assets/lightbox.css">
        <link rel="stylesheet" href="style.css">
        <script src="assets/lightbox.js"></script>


        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@home-hardening">
        <meta name="twitter:creator" content="@home-hardening">

        <meta property="og:url" content="https://sbfiresafecouncil.org/wildfire-home-guide/" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="WILDFIRE HOME HARDENING GUIDE | Santa Barbara County Fire Safe Council SBFSC" />
        <meta property="og:description" content="WILDFIRE HOME HARDENING GUIDE | Santa Barbara County Fire Safe Council SBFSC" />
        <meta property="og:image" content="img/HomeHardening-share.jpg" />
        <script type="text/javascript">
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                console.log("Mobile---" + navigator.userAgent);
                var widthscreen = jQuery(window).width();
                if (widthscreen < 720) {
                    console.log("Mobile--720+---");
                    setTimeout(function () {
                        jQuery(document).find('body').append("<div class='mobilenotification'><p>This guide works best in a larger screen. Some features will be limited when using a phone or a small browser window.<br>Please open this site on your laptop/computer.</p></div>");
                    }, 1000);
                }
            } else {
                var widthscreen = jQuery(window).width();
                if (widthscreen < 720) {
                    console.log("Desktop--720+---");
                    setTimeout(function () {
                        jQuery(document).find('body').append("<div class='desktopnotification'><p>This guide works best in a larger screen. Some features will be limited when using a small browser window.<br>Please maximize your browser window.</p></div>");
                    }, 1000);
                }
            }
        </script>
        <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

        <!-- Google Tag Manager -->
        <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); 
        })(window,document,'script','dataLayer','GTM-NZX9JRG');</script> -->
        <!-- End Google Tag Manager -->


        <!-- Google tag (gtag.js) -->
        <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-3FK4EDG2WD"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-3FK4EDG2WD');
    </script> -->


        <?php /* ?>
          <!-- Google tag (gtag.js) -->
          <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172035403-1"></script>
          <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-172035403-1');
          </script>
          <?php */ ?>
        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s),
                        dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-TQMPQLX');
        </script>
        <!-- End Google Tag Manager -->
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6548ae0d4ba88b0012e52c02&product=sop' async='async'></script>
    </head>

    <body class="multiple-scenes view-control-buttons" onhashchange="myFunction(event)">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQMPQLX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Google Tag Manager (noscript) -->
        <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZX9JRG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
        <!-- End Google Tag Manager (noscript) -->

        <div class="video-front" id="opened-video"></div>
        <style>
            #opened-video.video-front.show img#close-video {
                margin-right: 0px !important;
                margin-top: 70px !important;
                width: 30px !important;
                cursor: pointer;
                height: 30px;
                position: absolute;
            }

            a#showVideo {
                cursor: pointer;
            }

            #opened-video.video-front.show {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 999999;
                background: rgba(0, 0, 0, 0.8);
                display: flex;
                align-items: center;
                justify-content: center;
            }
            @media (min-height: 900px) {
                #sceneList{
                    overflow-y: clip;
                }
            }

        </style>


        <div class="loading"></div>
        <div class="mainheader" style="display: none;">
            <div class="headerleft">
                <div class="hamburgerbtnmobile">
                    <a href="javascript:void(0)" id="sceneListToggle" style="visibility: hidden;">
                        <img class="icon off" src="img/expand.svg">
                        <img class="icon on" src="img/collapse.svg">
                    </a>
                </div>
                <div class="logodesktop">
                    <a href="https://sbfiresafecouncil.org/" id="logoleft" style="width: 220px;position: absolute;">
                        <img class="logo" src="img/SBFSC_logo_wide_white.svg">
                    </a>
                </div>
            </div>
            <div class="headercenter">
                <h1 class="sceneName">
                    <a href="#welcome" class="learn-more-link">WILDFIRE HOME HARDENING GUIDE</a>
                </h1>
                <!-- <div class="sharefeedbackbtn">
                    <a href="https://forms.gle/vq7cEs9D9YK6CK8d6" target="_blank" id="feedBackToggle" class="link-primary">
                        FEEDBACK
                    </a>
                    <a href="https://sbfiresafecouncil.org/donate-membership/" id="feedBackToggle" class="link-primary">
                        DONATE
                    </a>
                </div> -->
                <!-- Language Switcher Dropdown -->
                <!-- <select id="language-switcher" onchange="changeLanguage()">
                    <option value="en">English</option>
                    <option value="es">Spanish</option> -->
                    <!-- Add more languages as needed -->
                <!-- </select> -->
            </div>
            <div class="headerright">
                <div class="sharebtnmaster">
                    <div class="sharebtnicon">
                        <a href="javascript:void(0)" id="sharingToggle">
                            <img class="icon off" src="./assets/images/hh-icon2.png">
                        </a>
                        <div class="shareoptions">
                            <div class="blanktranspdiv" style=""></div>
                            <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                            <div class="addthis_inline_share_toolbox_3rp2"></div>
                        </div>
                    </div>
                </div>

                <div class="fullscreenbtn">
                    <a href="javascript:void(0)" id="fullscreenToggle">
                        <img class="icon off" src="img/fullscreen.png">
                        <img class="icon on" src="img/windowed.png">
                    </a>
                </div>
            </div>
        </div>

        <div id="pano" style="visibility: visible;"></div>
        <div id="sceneList" style="visibility: visible;">
            <div class="sl-wrap">
                <h3>The GUIDE</h3>
                <ul class="scenes">

                    <a href="#welcome" class="scene" data-id="9-welcome">
                        <li class="text">Overview</li>
                    </a>
                    <a href="#roof" class="scene" data-id="0-roof">
                        <li class="text">Roof</li>
                    </a>
                    <a href="#gutters" class="scene" data-id="2-gutters">
                        <li class="text">Gutters</li>
                    </a>
                    <a href="#eaves" class="scene" data-id="1-eaves--soffits">
                        <li class="text">Eaves</li>
                    </a>
                    <a href="#attic" class="scene" data-id="8-attic--crawl-space">
                        <li class="text">Vents</li>
                    </a>
                    <a href="#windows" class="scene" data-id="5-windows">
                        <li class="text">Windows & Skylights</li>
                    </a>
                    <a href="#siding" class="scene" data-id="4-siding">
                        <li class="text">Siding</li>
                    </a>
                    <a href="#fences" class="scene" data-id="6-fences">
                        <li class="text">Fences</li>
                    </a>
                    <a href="#decks" class="scene" data-id="3-deck">
                        <li class="text">Decks</li>
                    </a>
                    <a href="#garage" class="scene" data-id="14-garage">
                        <li class="text">Garage</li>
                    </a>
                    <a href="#landscaping" class="scene" data-id="7-landscaping">
                        <li class="text">Zone 0</li>
                    </a>
                    <a href="#exteriorgelsfoamssprinklers" class="scene" data-id="15-exterior-gels-foams-sprinklers">
                        <li class="text">Coatings & Sprinklers</li>
                    </a>
                </ul>
                <h3>The TOOLKIT</h3>
                <ul class="scenes">
                    <a href="#homeevaluationrequest" class="scene" data-id="16-home-evaluation-request">
                        <li class="text">Home Evaluation Request</li>
                    </a>
                    <a href="#lownocost" class="scene" data-id="11-low-no-cost">
                        <li class="text">No/Low Cost Tips</li>
                    </a>
                    <a href="#codespermits" class="scene" data-id="10-codes-permits">
                        <li class="text">Codes & Permits</li>
                    </a>                
                    <a href="#seasonalchecklist" class="scene" data-id="12-seasonal-checklist" style="display: none;">
                        <li class="text">Seasonal Checklist</li>
                    </a>
                    <a href="#about" class="scene" data-id="13-about" style="visibility: hidden;height: 0;">
                        <li class="text">About</li>
                    </a>

                    <!-- <a href="javascript:void(0)" class="scene">
                            <li class="text">For Renters</li>
                        </a> -->
                </ul>

            </div>
            <div class="next-button">
            </div>
        </div>

        <a href="javascript:void(0)" id="autorotateToggle" style="visibility: hidden; display: none !important;">
            <!--<img class="icon off" src="img/play.png">
                    <img class="icon on" src="img/pause.png">-->
        </a>


        <a href="javascript:void(0)" id="viewUp" class="viewControlButton viewControlButton-1">
            <img class="icon" src="img/up.png">
        </a>
        <a href="javascript:void(0)" id="viewDown" class="viewControlButton viewControlButton-2">
            <img class="icon" src="img/down.png">
        </a>
        <a href="javascript:void(0)" id="viewLeft" class="viewControlButton viewControlButton-3">
            <img class="icon" src="img/left.png">
        </a>
        <a href="javascript:void(0)" id="viewRight" class="viewControlButton viewControlButton-4">
            <img class="icon" src="img/right.png">
        </a>
        <a href="javascript:void(0)" id="viewIn" class="viewControlButton viewControlButton-5">
            <img class="icon" src="img/plus.png">
        </a>
        <a href="javascript:void(0)" id="viewOut" class="viewControlButton viewControlButton-6">
            <img class="icon" src="img/minus.png">
        </a>
        <?php /* ?>
          <div id="titleBar" style="visibility: hidden;display: none !important;">
          <h1 class="sceneName"></h1>
          </div>



          <!-- <a href="javascript:void(0)" id="pdfToggle" style="visibility: hidden;">
          <img class="icon off" src="./assets/images/hh-icon3.png">
          </a> -->


          <!-- Button trigger modal -->


          <a href="javascript:void(0)" id="calanderToggle" style="visibility: hidden;display: none !important;">
          <img class="icon off" src="./assets/images/hh-icon1.png">
          </a>





          <div class="headerclsmaster">
          <a href="https://sbfiresafecouncil.org/" id="logoleft" style="width: 220px;position: absolute;">
          <img class="logo" src="img/SBFSC_logo_wide_white.svg">
          </a>
          </div>



          <?php */ ?>

        <script src="vendor/screenfull.min.js"></script>
        <script src="vendor/bowser.min.js"></script>
        <script src="vendor/marzipano.js"></script>

        <script src="data.js"></script>
        <script src="index.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery("#pano").find(".info-hotspot-text").remove();
                urlhas = window.location.hash;
                 if (urlhas.indexOf("#") != -1) {} else {
                     jQuery(document).find(".videomastercls").find("video").attr("src", "https://res.cloudinary.com/dmezibcae/video/upload/q_auto:eco/v1673436722/HomeHardening-sites-Drones-speed_changes-Christinas-1080_12mbps.mp4");
                     jQuery(document).find("#myVideo").find("source").attr("src", "https://res.cloudinary.com/dmezibcae/video/upload/q_auto:eco/v1673436722/HomeHardening-sites-Drones-speed_changes-Christinas-1080_12mbps.mp4");
                 }
                 jQuery(document).find(".content").delay(1000).fadeIn(1000);
                 jQuery(document).find("#myVideo").css("visibility", "visible");
                 jQuery(document).find(".videomastercls").css("visibility", "visible");
                jQuery(document).find(".mainheader").show();
                jQuery(document).find(".customfooter").show();
                jQuery(document).find(".loading").remove();
            });
        </script>

        <div class="videomastercls" style="visibility: hidden;">

            <video id="myVideo" poster="img/homehardening _cover.jpeg" style="visibility: hidden;" autoplay muted loop>
                <source src="" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="content video_overlay" style="display: none">
                <h1>WELCOME <br>to the <br>WILDFIRE HOME HARDENING GUIDE</h1>
                <p>An interactive guide on how to protect your home from wildfire</p>
                <!-- <button id="myBtn" onclick="myFunction()">Pause</button> -->
                <button id="myBtnForGetStarted">GET STARTED</button>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="feedBack" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="feedBackLabel" aria-hidden="true" style="color: #000;z-index: 999999 !important;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="feedBackLabel">CONTACT US</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="feedBackForm" method="post" action="?" name="feedBack" role="form" class="g-3">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-3">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="first-name" name='first-name' class="form-control" placeholder="First Name">
                                <!-- <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please add value here.
                                </div> -->
                            </div>
                            <div class="md-form mb-3">
                                <i class="fas fa-tag prefix grey-text"></i>
                                <input type="text" id="last-name" name='last-name' class="form-control" placeholder="Last Name">
                                <!-- <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please add value here.
                                </div> -->
                            </div>
                            <div class="md-form mb-3">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="email" id="email" name='email' class="form-control" placeholder="Email">
                                <!-- <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please add value here.
                                </div> -->
                            </div>
                            <div class="md-form mb-3">
                                <i class="fas fa-pencil prefix grey-text"></i>
                                <textarea type="text" id="feedback" name='feedback' class="md-textarea form-control" rows="4" placeholder="Feedback"></textarea>
                                <!-- <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please add value here.
                                </div> -->
                            </div>
                            <?php /* ?>
                              <div class="md-form" style="display:none">
                              <div class="g-recaptcha" data-sitekey="6Ld5BSolAAAAAOAjNhhiP5MJMeVRTIENuX4Q7BOH" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                              <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                              <div class="help-block with-errors invalid-feedback"></div>
                              </div>
                              <?php */ ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary" value="Send">
                        </div>
                    </form>
                    <p id="fbRes"></p>
                </div>
            </div>
        </div>

        <script>
            var video = document.getElementById("myVideo");
            var btn = document.getElementById("myBtn");

            function myFunction() {
                if (video.paused) {
                    video.play();
                    btn.innerHTML = "Pause";
                } else {
                    video.pause();
                    btn.innerHTML = "Play";
                }
            }

            jQuery(document).ready(function () {
                var currentUrl = window.location.href;
                var showvideo = 1;

                if (document.cookie.length > 0) {
                    
                     var vidoescookie = document.cookie;
                     var text = 'videoWatched=done';
                     var result = text.indexOf(vidoescookie);
                     if (result != -1) {
                     showvideo = 0;
                     }
                     
                }
                if (showvideo > 0) {
                     jQuery(document).find(".content").delay(2000).fadeIn(1000);
                     jQuery(document).find("#myVideo").css("visibility", "visible");
                     jQuery(document).find(".videomastercls").css("visibility", "visible");
                } else {
                    jQuery(document).find("#myVideo").remove();
                    jQuery(document).find(".content").remove();
                    jQuery(document).find(".videomastercls").remove();
                    jQuery(document).find("#pano").css("visibility", "visible");
                    jQuery(document).find("#sceneList").css("visibility", "visible");
                    jQuery(document).find("#titleBar").css("visibility", "visible");
                    jQuery(document).find("#autorotateToggle").css("visibility", "visible");
                    jQuery(document).find("#fullscreenToggle").css("visibility", "visible");
                    jQuery(document).find("#sceneListToggle").css("visibility", "visible");

                    jQuery(document).find("#pdfToggle").css("visibility", "visible");
                    jQuery(document).find("#sharingToggle").css("visibility", "visible");
                    jQuery(document).find("#feedBackToggle").css("visibility", "visible");
                    jQuery(document).find("#calanderToggle").css("visibility", "visible");

                }

                jQuery(document).find(".info-hotspot-title").each(function () {
                    var pagescreen = jQuery(this).html();
                    switch (pagescreen.toLowerCase()) {
                        case "overview":
                            var rooftooltip = '<div class="info-tooltip-text" data-id="#welcome-overview"><div class="info-tooltip-text-inner"><p>Click here to start the Guide.</p><span class="info-next-icon-warp"><img src="./assets/images/orange-arrow.png" class="info-hotspot-icon"></span></div></div>';
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "roof":
                            var rooftooltip = '<div class="info-tooltip-text" data-id="#roof-overview"><div class="info-tooltip-text-inner"><p>Confirm you have a Class A roof in good condition</p><span class="info-next-icon-warp"><img src="./assets/images/orange-arrow.png" class="info-hotspot-icon"></span></div></div>';
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "eaves and soffits":
                            var rooftooltip = "<div class='info-tooltip-text' data-id='#eaves-overview'><div class='info-tooltip-text-inner'><p>The area under the eave of your roof is an often overlooked way fire can enter your home.</p><span class='info-next-icon-warp'><img src='./assets/images/orange-arrow.png' class='info-hotspot-icon'></span></div></div>";
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "gutters":
                            var rooftooltip = "<div class='info-tooltip-text' data-id='#gutters-overview'><div class='info-tooltip-text-inner'><p>Gutters can be a conduit for fire</p> <span class='info-next-icon-warp'><img src='./assets/images/orange-arrow.png' class='info-hotspot-icon'></span> </div > </div > ";
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "vents":
                            var rooftooltip = "<div class='info-tooltip-text' data-id='#attic-overview'><div class='info-tooltip-text-inner'><p>Wind-blown embers are the principal cause of building ignition and can readily enter attic and crawl space vents.</p><span class='info-next-icon-warp'><img src='./assets/images/orange-arrow.png' class='info-hotspot-icon'></span></div></div>";
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "windows &amp; skylights":
                            var rooftooltip = "<div class='info-tooltip-text' data-id='#windows-overview'><div class='info-tooltip-text-inner'><p>Heat from a wildfire can cause windows to burst and break even before the home is on fire.</p><span class='info-next-icon-warp'><img src='./assets/images/orange-arrow.png' class='info-hotspot-icon'></span></div></div>";
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "siding":
                            var rooftooltip = "<div class='info-tooltip-text' data-id='#siding-overview'><div class='info-tooltip-text-inner'><p>The type of siding on your home is an important component of fire protection.</p><span class='info-next-icon-warp'><img src='./assets/images/orange-arrow.png' class='info-hotspot-icon'></span></div></div>";
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "fencing":
                            var rooftooltip = "<div class='info-tooltip-text' data-id='#fences-overview'><div class='info-tooltip-text-inner'><p>Your fences can be a major threat to home ignition carrying fire directly to your eaves and siding or even to the home nearest to you.</p><span class='info-next-icon-warp'><img src='./assets/images/orange-arrow.png' class='info-hotspot-icon'></span></div></div>";
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "decks":
                            var rooftooltip = "<div class='info-tooltip-text' data-id='#decks-overview'><div class='info-tooltip-text-inner'><p>Decks can be an unnoticed fire hazard and are often the most vulnerable part of the home</p><span class='info-next-icon-warp'><img src='./assets/images/orange-arrow.png' class='info-hotspot-icon'></span></div></div>";
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "garage":
                            var rooftooltip = "<div class='info-tooltip-text' data-id='#garage-overview'><div class='info-tooltip-text-inner'><p>Recent California wildfires have shown that garage doors can be a vulnerable entry point for embers and cause home ignition.</p><span class='info-next-icon-warp'><img src='./assets/images/orange-arrow.png' class='info-hotspot-icon'></span></div></div>";
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "codes &amp; permits":
                            var rooftooltip = "";
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "exterior gels, foams &amp; sprinklers":
                            var rooftooltip = "";
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        case "zone 0 (0-5 feet from your home)":
                            var rooftooltip = "<div class='info-tooltip-text' data-id='#landscaping-overview'><div class='info-tooltip-text-inner'><p>(0-5 feet from your home) The Zone 0 area, the zone within 5 feet of your home, is critical to protecting your home from ember ignition</p><span class='info-next-icon-warp'><img src='./assets/images/orange-arrow.png' class='info-hotspot-icon'></span></div></div>";
                            jQuery(this).closest(".info-hotspot-header").parent().append(rooftooltip);
                            break;
                        default:
                            break;
                    }
                });

                jQuery(document).on("click", ".info-tooltip-text", function () {
                    jQuery(this).parent().find(".info-hotspot-header").trigger("click");
                });

                jQuery(document).on("click", "ul.scenes>a", function () {
                    jQuery(document).find(".info-hotspot-modal.visible").find(".info-hotspot-close-wrapper").trigger("click");
                });

                jQuery(document).on("click", ".link-hotspot.nextupmaster", function () {
                    jQuery(document).find(".info-hotspot-modal.visible").find(".info-hotspot-close-wrapper").trigger("click");
                });

                jQuery(document).on("click", "#myBtnForGetStarted", function () {
                    var now = new Date();
                    now.setTime(now.getTime() + 50 * 3600 * 1000);
                    document.cookie = 'videoWatched=done; expires=' + now.toGMTString() + '; path=/';
                    jQuery(document).find("#myVideo").remove();
                    jQuery(document).find(".content").remove();
                    jQuery(document).find(".videomastercls").remove();
                    jQuery(document).find("#pano").css("visibility", "visible");
                    jQuery(document).find("#sceneList").css("visibility", "visible");
                    jQuery(document).find("#titleBar").css("visibility", "visible");
                    jQuery(document).find("#autorotateToggle").css("visibility", "visible");
                    jQuery(document).find("#fullscreenToggle").css("visibility", "visible");
                    jQuery(document).find("#sceneListToggle").css("visibility", "visible");

                    jQuery(document).find("#pdfToggle").css("visibility", "visible");
                    jQuery(document).find("#sharingToggle").css("visibility", "visible");
                    jQuery(document).find("#feedBackToggle").css("visibility", "visible");
                    jQuery(document).find("#calanderToggle").css("visibility", "visible");
                    //jQuery(".info-tooltip-text").parent().find(".info-hotspot-header").trigger("click");

                });

                jQuery(document).on("click", "#v-pills-home-tab-roof", function () {
                    window.location.hash = 'roof-overview';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-messages-tab-roof", function () {
                    window.location.hash = 'roof-take-action';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-signup-tab-roof", function () {
                    window.location.hash = 'roof-signup';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-maintenance-tab-roof", function () {
                    window.location.hash = 'roof-maintenance';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-code-tab-roof", function () {
                    window.location.hash = 'roof-code-permitting';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-home-tab-gutters", function () {
                    window.location.hash = 'gutters-overview';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-messages-tab-gutters", function () {
                    window.location.hash = 'gutters-take-action';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-signup-tab-gutters", function () {
                    window.location.hash = 'gutters-signup';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-maintenance-tab-gutters", function () {
                    window.location.hash = 'gutters-maintenance';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-code-tab-gutters", function () {
                    window.location.hash = 'gutters-code-permitting';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-home-tab-fences", function () {
                    window.location.hash = 'fences-overview';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-messages-tab-fences", function () {
                    window.location.hash = 'fences-take-action';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-maintenance-tab-fences", function () {
                    window.location.hash = 'fences-maintenance';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-code-tab-fences", function () {
                    window.location.hash = 'fences-code-permitting';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-signup-tab-fences", function () {
                    window.location.hash = 'fences-signup';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-home-tab-eaves", function () {
                    window.location.hash = 'eaves-overview';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-messages-tab-eaves", function () {
                    window.location.hash = 'eaves-take-action';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-maintenance-tab-eaves", function () {
                    window.location.hash = 'eaves-maintenance';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-code-tab-eaves", function () {
                    window.location.hash = 'eaves-code-permitting';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-signup-tab-eaves", function () {
                    window.location.hash = 'eaves-signup';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-home-tab-windows", function () {
                    window.location.hash = 'windows-overview';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-messages-tab-windows", function () {
                    window.location.hash = 'windows-take-action';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-code-tab-windows", function () {
                    window.location.hash = 'windows-code-permitting';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-maintenance-tab-windows", function () {
                    window.location.hash = 'windows-maintenance';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-signup-tab-windows", function () {
                    window.location.hash = 'windows-signup';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-home-tab-attic", function () {
                    window.location.hash = 'attic-overview';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-messages-tab-attic", function () {
                    window.location.hash = 'attic-take-action';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-maintenance-tab-attic", function () {
                    window.location.hash = 'attic-maintenance';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-code-tab-attic", function () {
                    window.location.hash = 'attic-code-permitting';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-signup-tab-attic", function () {
                    window.location.hash = 'attic-signup';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-home-tab-decks", function () {
                    window.location.hash = 'decks-overview';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-messages-tab-decks", function () {
                    window.location.hash = 'decks-take-action';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-code-tab-decks", function () {
                    window.location.hash = 'decks-code-permitting';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-maintenance-tab-decks", function () {
                    window.location.hash = 'decks-maintenance';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-signup-tab-decks", function () {
                    window.location.hash = 'decks-signup';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-home-tab-garage", function () {
                    window.location.hash = 'garage-overview';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-messages-tab-garage", function () {
                    window.location.hash = 'garage-take-action';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-maintenance-tab-garage", function () {
                    window.location.hash = 'garage-maintenance';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-code-tab-garage", function () {
                    window.location.hash = 'garage-code-permitting';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-home-tab-siding", function () {
                    window.location.hash = 'siding-overview';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-messages-tab-siding", function () {
                    window.location.hash = 'siding-take-action';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-maintenance-tab-siding", function () {
                    window.location.hash = 'siding-maintenance';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-code-tab-siding", function () {
                    window.location.hash = 'siding-code-permitting';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-signup-tab-siding", function () {
                    window.location.hash = 'siding-signup';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-home-tab-landscaping", function () {
                    window.location.hash = 'landscaping-overview';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-messages-tab-landscaping", function () {
                    window.location.hash = 'landscaping-take-action';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-maintenance-tab-landscaping", function () {
                    window.location.hash = 'landscaping-maintenance';
                    return false;
                });
                jQuery(document).on("click", "#v-pills-signup-tab-landscaping", function () {
                    window.location.hash = 'landscaping-signup';
                    return false;
                });
            });
        </script>
        <script>
            document.getElementById('pano').addEventListener('click', function (e) {
                console.log(marzipano_viewer.view().screenToCoordinates({
                    x: e.clientX,
                    y: e.clientY
                }));
            });
            jQuery(document).find("#pano > div > div").each(function () {
                //if(jQuery(this).css("display")=="block"){
                var lastone = jQuery(this).find("div.link-hotspot").last().html();
                var lastonecaption = jQuery(this).find("div.link-hotspot").last().find(".hotspot-tooltip.link-hotspot-tooltip").html();
                var blankhref = '#welcome';
                jQuery(document).find(".text").each(function () {
                    if (typeof jQuery(this).html() != "undefined" && jQuery(this).html() != "") {
                        if (jQuery(this).html() == lastonecaption) {
                            blankhref = jQuery(this).closest('a').attr("href");
                        }
                    }
                });
                if (typeof lastonecaption != "undefined") {
                    if ("WILDFIRE HOME HARDENING GUIDE" == lastonecaption.toUpperCase()) {
                        lastonecaption = "OVERVIEW";
                    }
                }
                jQuery(this).find("div.link-hotspot").last().html('<a href="' + blankhref + '"><span class="nextupcls">NEXT UP: ' + lastonecaption + '<span>&gt;</span></span></a>');
                jQuery(this).find("div.link-hotspot").last().addClass("nextupmaster");
                jQuery(this).find("div.link-hotspot").last().before('<div class="prevbtn"><a class="prevarrow" onclick="window.history.go(-1);"></a></div>');

                //}
            });

            jQuery(document).on("click", ".hotspot.link-hotspot.nextupmaster", function () {
                jQuery(document).find(".info-hotspot-modal.visible").removeClass("visible");
                stopVideos();
            });

            function stopVideos() {
                var videos = document.querySelectorAll('iframe, video');
                Array.prototype.forEach.call(videos, function (video) {
                    if (video.tagName.toLowerCase() === 'video') {
                        video.pause();
                    } else {
                        var src = video.src;
                        video.src = src;
                    }
                });
            }
        </script>
        <style type="text/css">
            .info-hotspot-modal.visible .info-tooltip-text {
                display: none;
            }

            .info-hotspot-modal .info-tooltip-text {
                display: none;
            }

            .lb-data .lb-caption {
                font-size: 20px !important;
            }
        </style>

        <div class="customfooter" style="display: none;">
            <div class="footerleft">
                <ul>
                    <li>
                        <a href="#about" class="learn-more-link">ABOUT THE GUIDE</a>
                    </li>
                    <li>
                        <a class="guidez3rdpjs-modal" data-key="xtzzj8cn4w-ijrzopz9ho" data-mtype="g">HELP</a> <!-- <a href="#">HELP</a> -->
                        <!-- <a class="helpbtn" data-bs-toggle="modal" data-bs-target="#helpvideo">HELP</a> <a href="#">HELP</a> -->
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="contactusbtncls" data-bs-toggle="modal" data-bs-target="#feedBack">CONTACT US</a>
                    </li>
                    <li> 
                        <a href="https://forms.gle/vq7cEs9D9YK6CK8d6" target="_blank" id="feedBackToggle">FEEDBACK</a>
                    </li>
                    <li>
                        <a href="https://sbfiresafecouncil.org/donate-membership/" id="feedBackToggle">DONATE</a>
                    </li>
                </ul>
            </div>
            <div class="footerright">
                <p><a href="https://sbfiresafecouncil.org/">&copy; <?php echo date('Y'); ?> SANTA BARBARA COUNTY FIRE SAFE COUNCIL</a></p>
            </div>
        </div>

    </body>
    <script>
        function includeHTML() {
            var z, i, elmnt, file, xhttp;
            /* Loop through a collection of all HTML elements: */
            z = document.getElementsByTagName("*");
            for (i = 0; i < z.length; i++) {
                elmnt = z[i];
                /*search for elements with a certain atrribute:*/
                file = elmnt.getAttribute("hh-include-html");
                if (file) {
                    /* Make an HTTP request using the attribute value as the file name: */
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4) {
                            if (this.status == 200) {
                                elmnt.innerHTML = this.responseText;
                            }
                            if (this.status == 404) {
                                elmnt.innerHTML = "Page not found.";
                            }
                            /* Remove the attribute, and call this function once more: */
                            elmnt.removeAttribute("hh-include-html");
                            includeHTML();
                        }
                    }
                    xhttp.open("GET", file, true);
                    xhttp.send();
                    /* Exit the function: */
                    return;
                }
            }
        }
        includeHTML();



        jQuery(window).on("load", function () {
            var valhash = document.location.hash;
            console.log(valhash);
             if ((typeof valhash != "undefined") && (valhash != "")) {
                 if (typeof jQuery(document).find("#myBtnForGetStarted").get(0) != "undefined") {
                     jQuery(document).find("#myBtnForGetStarted").get(0).click();
                 } else {
                     jQuery(document).find(".content").delay(1000).fadeIn(1000);
                     jQuery(document).find("#myVideo").css("visibility", "visible");
                     jQuery(document).find(".videomastercls").css("visibility", "visible");
                 }
             } else {
                 jQuery(document).find(".content").delay(1000).fadeIn(1000);
                 jQuery(document).find("#myVideo").css("visibility", "visible");
                 jQuery(document).find(".videomastercls").css("visibility", "visible");
             }
            if (valhash.indexOf("-") !== -1) {
                const myArray = valhash.split("-");
                if (typeof myArray[1] !== "overview") {
                    jQuery(document).find('[href="' + myArray[0] + '"]').get(0).click();
                    jQuery(document).find('[data-id="' + myArray[0] + '-overview"]').get(0).click();
                    setTimeout(function () {
                        var deepid = jQuery(document).find('[data-id="' + valhash + '"]').attr('id');
                        jQuery(document).find('#' + deepid).get(0).click();
                    }, 500);
                } else {
                    jQuery(document).find('[href="' + myArray[0] + '"]').get(0).click();
                    jQuery(document).find('[data-id="' + valhash + '"]').get(0).click();
                }
            } else {
                if ((typeof valhash != "undefined") && (valhash != "")) {
                    jQuery(document).find('[href="' + valhash + '"]').get(0).click();
                }
            }
        });


        jQuery(window).on('hashchange', function (e) {
            jQuery(document).find(".info-hotspot-title").each(function () {
                var fds = jQuery(this).html();
                if ((fds != "") && (typeof fds != "undefined")) {
                    if (fds.indexOf("codespermits") !== -1) {
                        if (fds == '<span class=\"codespermits\">Codes &amp; Permits</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#codespermits") {
                                        jQuery(this).trigger("click");
                                    }
                                }
                            }
                        }
                    }
                    if (fds.indexOf("lownocost") !== -1) {
                        if (fds == '<span class=\"lownocost\">Low to no-cost</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#lownocost") {
                                        jQuery(this).trigger("click");
                                    }
                                }
                            }
                        }
                    }
                    if (fds.indexOf("seasonalchecklist") !== -1) {
                        if (fds == '<span class=\"seasonalchecklist\">Seasonal Checklist</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#seasonalchecklist") {
                                        jQuery(this).trigger("click");
                                    }
                                }
                            }
                        }
                    }
                    if (fds.indexOf("about") !== -1) {
                        if (fds == '<span class=\"about\">ABOUT THE GUIDE</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#about") {
                                        jQuery(this).trigger("click");
                                    }
                                }
                                jQuery(document).find('span.about').closest('div.hotspot.info-hotspot').removeClass('visible');
                            }
                        }
                    }

                    if (fds.indexOf("exteriorgelsfoamssprinklers") !== -1) {
                        if (fds == '<span class="\exteriorgelsfoamssprinklers\">Exterior Coatings, Gels, Foams &amp; Sprinklers</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#exteriorgelsfoamssprinklers") {
                                        jQuery(this).trigger("click");
                                    }
                                }
                            }
                        }
                    }

                    if (fds.indexOf("homeevaluationrequest") !== -1) {
                        if (fds == '<span class="\homeevaluationrequest\">Home Evaluation Request</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#homeevaluationrequest") {
                                        jQuery(this).trigger("click");
                                    }
                                }
                            }
                        }
                    }
                }



            });

            jQuery(document).find('[property="og:url"]').attr("content", location.href);
            if (location.hash == "#roof") {
                jQuery(document).find('[property="og:title"]').attr("content", "Roof");
                jQuery(document).find('[property="og:image"]').attr("content", "https://sbfiresafecouncil.org/wildfire-home-guide/img/roof.png");
            }

            console.log("TEST-------" + document.location.hash);
            console.log("type--" + e.type);

            //window.history.pushState({urlPath:document.location.hash},"",document.location.hash);
            // window.history.pushState({urlPath: window.location.href }, window.location.hash, window.location.hash);
            /*
             var valhash = window.location.hash;
             if ((typeof valhash != "undefined") && (valhash != "")) {
             if (valhash.indexOf("-") !== -1) {
             const myArray = valhash.split("-");
             if (typeof myArray[1] !== "overview") {
             jQuery(document).find('[href="' + myArray[0] + '"]').get(0).click();
             jQuery(document).find('[data-id="' + myArray[0] + '-overview"]').get(0).click();
             setTimeout(function() {
             var deepid = jQuery(document).find('[data-id="' + valhash + '"]').attr('id');
             jQuery(document).find('#' + deepid).get(0).click();
             }, 500);
             } else {
             jQuery(document).find('[href="' + myArray[0] + '"]').get(0).click();
             jQuery(document).find('[data-id="' + valhash + '"]').get(0).click();
             }
             }else{ 
             jQuery(document).find('[href="' + valhash + '"]').get(0).click();
             }
             }         
             */
        });

        jQuery(window).on('load', function (e) {
            jQuery(document).find(".info-hotspot-title").each(function () {
                var fds = jQuery(this).html();
                if ((fds != "") && (typeof fds != "undefined")) {
                    if (fds.indexOf("homeevaluationrequest") !== -1) {
                        if (fds == '<span class=\"homeevaluationrequest\">Home Evaluation Request</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#homeevaluationrequest") {
                                        jQuery(this).trigger("click");
                                    }
                                }
                            }
                        }
                    }
                    if (fds.indexOf("exteriorgelsfoamssprinklers") !== -1) {
                        if (fds == '<span class=\"exteriorgelsfoamssprinklers\">Exterior Coatings, Gels, Foams &amp; Sprinklers</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#exteriorgelsfoamssprinklers") {
                                        jQuery(this).trigger("click");
                                    }
                                }
                            }
                        }
                    }
                    if (fds.indexOf("codespermits") !== -1) {
                        if (fds == '<span class=\"codespermits\">Codes &amp; Permits</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#codespermits") {
                                        jQuery(this).trigger("click");
                                    }
                                }
                            }
                        }
                    }
                    if (fds.indexOf("lownocost") !== -1) {
                        if (fds == '<span class=\"lownocost\">Low to no-cost</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#lownocost") {
                                        jQuery(this).trigger("click");
                                    }
                                }
                            }
                        }
                    }
                    if (fds.indexOf("seasonalchecklist") !== -1) {
                        if (fds == '<span class=\"seasonalchecklist\">Seasonal Checklist</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#seasonalchecklist") {
                                        jQuery(this).trigger("click");
                                    }
                                }
                            }
                        }
                    }
                    if (fds.indexOf("about") !== -1) {
                        if (fds == '<span class=\"about\">ABOUT THE GUIDE</span>') {
                            if (jQuery(this).parents("div").hasClass("info-hotspot-modal")) {

                            } else {
                                jQuery(this).parents(".hotspot.info-hotspot").css('visibility', 'hidden');
                                if (location.hash != "") {
                                    if (location.hash == "#about") {
                                        if (typeof jQuery(document).find('span.about').closest('div.info-hotspot-modal') != "undefined") {
                                            if (jQuery(document).find('span.about').closest('div.info-hotspot-modal').hasClass('visible')) {

                                            } else {
                                                jQuery(this).trigger("click");
                                            }
                                        } else {
                                            jQuery(this).trigger("click");
                                        }
                                        jQuery(document).find('span.about').closest('div.hotspot.info-hotspot').removeClass('visible');
                                    }
                                }
                            }
                        }
                    }
                }
            });
            jQuery(document).find(".loading").remove();
            jQuery(document).find(".mainheader").show();
            jQuery(document).find(".customfooter").show();
        });
    </script>
    <script>

    </script>
    <style>
        /* Absolute Center Spinner */
        .loading {
            position: fixed;
            z-index: 999999999;
            height: 2em;
            width: 2em;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        /* Transparent Overlay */
        .loading:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(rgba(255, 255, 255), rgba(255, 255, 255));
            background: -webkit-radial-gradient(rgba(255, 255, 255), rgba(255, 255, 255));
        }

        /* :not(:required) hides these rules from IE9 and below */
        .loading:not(:required) {
            /* hide "loading..." text */
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .loading:not(:required):after {
            content: '';
            display: block;
            font-size: 10px;
            width: 1em;
            height: 1em;
            margin-top: -0.5em;
            -webkit-animation: spinner 150ms infinite linear;
            -moz-animation: spinner 150ms infinite linear;
            -ms-animation: spinner 150ms infinite linear;
            -o-animation: spinner 150ms infinite linear;
            animation: spinner 150ms infinite linear;
            border-radius: 0.5em;
            -webkit-box-shadow: rgba(30, 30, 30, 0.7) 1.5em 0 0 0, rgba(30, 30, 30, 0.7) 1.1em 1.1em 0 0, rgba(30, 30, 30, 0.7) 0 1.5em 0 0, rgba(30, 30, 30, 0.7) -1.1em 1.1em 0 0, rgba(30, 30, 30, 0.7) -1.5em 0 0 0, rgba(30, 30, 30, 0.7) -1.1em -1.1em 0 0, rgba(30, 30, 30, 0.7) 0 -1.5em 0 0, rgba(30, 30, 30, 0.7) 1.1em -1.1em 0 0;
            box-shadow: rgba(30, 30, 30, 0.7) 1.5em 0 0 0, rgba(30, 30, 30, 0.7) 1.1em 1.1em 0 0, rgba(30, 30, 30, 0.7) 0 1.5em 0 0, rgba(30, 30, 30, 0.7) -1.1em 1.1em 0 0, rgba(30, 30, 30, 0.7) -1.5em 0 0 0, rgba(30, 30, 30, 0.7) -1.1em -1.1em 0 0, rgba(30, 30, 30, 0.7) 0 -1.5em 0 0, rgba(30, 30, 30, 0.7) 1.1em -1.1em 0 0;
        }

        /* Animation */

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-moz-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-o-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(document).on("click", ".nav-link", function () {
                jQuery(document).find(".info-hotspot-modal").find(".info-hotspot-text").animate({
                    scrollTop: 0
                }, 'slow');
            });
            jQuery(document).find('span.about').closest('div.info-hotspot-header').find('.info-hotspot-close-wrapper').attr("style", "display:none !important;");

        });

        jQuery(window).on('popstate', function () {
            /*
             var valhash = window.location.hash;
             if ((typeof valhash != "undefined") && (valhash != "")) {
             if (valhash.indexOf("-") !== -1) {
             const myArray = valhash.split("-");
             if (typeof myArray[1] !== "overview") {
             jQuery(document).find('[href="' + myArray[0] + '"]').get(0).click();
             jQuery(document).find('[data-id="' + myArray[0] + '-overview"]').get(0).click();
             setTimeout(function() {
             var deepid = jQuery(document).find('[data-id="' + valhash + '"]').attr('id');
             jQuery(document).find('#' + deepid).get(0).click();
             }, 500);
             } else {
             jQuery(document).find('[href="' + myArray[0] + '"]').get(0).click();
             jQuery(document).find('[data-id="' + valhash + '"]').get(0).click();
             }
             }else{ 
             jQuery(document).find('[href="' + valhash + '"]').get(0).click();
             }
             } 
             */
        });

        jQuery(document).on('click', '.learn-more-link', function () {
            // console.log(jQuery(this).attr('href'));
            jQuery(document).find('ul.scenes').find('[href="' + jQuery(this).attr('href') + '"]').get(0).click();
        });

        var windowsizedefault = jQuery(window).width();
        if (windowsizedefault > 1200) {

        }
        jQuery(window).resize(function () {
            var windowsize = jQuery(window).width();
            if (windowsizedefault > 1200) {

            }
        });

        function myFunction() {

            /*
             console.log("Previous URL: " + event.oldURL + "<br>New URL: " + event.newURL);
             var hasholdURL = event.oldURL;
             var newhashurl = event.newURL;
             var valhash = window.location.hash;
             console.log("location---"+valhash);
             
             var hasholdURL = hasholdURL.replace("https://sbfiresafecouncil.org/wildfire-home-hardening-guide/", "");
             var newhashurl = newhashurl.replace("https://sbfiresafecouncil.org/wildfire-home-hardening-guide/", "");
             
             if(typeof newhashurl.length != "undefined" && newhashurl != ""){
             if(valhash == newhashurl){
             if ((typeof valhash != "undefined") && (valhash != "")) {
             if (valhash.indexOf("-") !== -1) { 
             const myArray = valhash.split("-");
             setTimeout(function() {
             if(typeof jQuery(document).find('[href="' + valhash + '"]').get(0) == "undefined"){
             jQuery(document).find('[href="' + myArray[0] + '"]').get(0).click();
             }
             }, 200);
             }else{
             jQuery(document).find('[href="' + valhash + '"]').get(0).click();
             }
             }
             }  
             }
             
             
             /*
             if(typeof newhashurl.length != "undefined" && newhashurl != ""){
             if(valhash == newhashurl){
             if ((typeof valhash != "undefined") && (valhash != "")) {
             if (valhash.indexOf("-") !== -1) {
             const myArray = valhash.split("-");
             if (typeof myArray[1] !== "overview") {
             jQuery(document).find('[href="' + myArray[0] + '"]').get(0).click();
             jQuery(document).find('[data-id="' + myArray[0] + '-overview"]').get(0).click();
             setTimeout(function() {
             var deepid = jQuery(document).find('[data-id="' + valhash + '"]').attr('id');
             jQuery(document).find('#' + deepid).get(0).click();
             }, 500);
             } else {
             jQuery(document).find('[href="' + myArray[0] + '"]').get(0).click();
             jQuery(document).find('[data-id="' + valhash + '"]').get(0).click();
             }
             }else{ 
             jQuery(document).find('[href="' + valhash + '"]').get(0).click();
             }
             } 
             }
             } 
             */
        }

        jQuery(document).on('click', '.prevarrow', function () {
            setTimeout(function () {
                var valhash = window.location.hash;
                if ((typeof valhash != "undefined") && (valhash != "")) {
                    if (valhash.indexOf("-") !== -1) {
                        const myArray = valhash.split("-");
                        if (typeof myArray[1] !== "overview") {
                            var dataid = jQuery(document).find('#sceneList').find('[href="' + myArray[0] + '"]').attr("data-id");
                            jQuery(document).find('[data-id="' + dataid + '"]').get(0).click();
                            jQuery(document).find('[data-id="' + myArray[0] + '-overview"]').get(0).click();

                            setTimeout(function () {
                                var deepid = jQuery(document).find('[data-id="' + valhash + '"]').attr('id');
                                jQuery(document).find('#' + deepid).get(0).click();
                            }, 500);

                        } else {
                            var dataid = jQuery(document).find('#sceneList').find('[href="' + myArray[0] + '"]').attr("data-id");
                            jQuery(document).find('[data-id="' + dataid + '"]').get(0).click();
                            //jQuery(document).find('[href="' + myArray[0] + '"]').get(0).click();
                            jQuery(document).find('[data-id="' + valhash + '"]').get(0).click();
                        }
                    } else {
                        var dataid = jQuery(document).find('#sceneList').find('[href="' + valhash + '"]').attr("data-id");
                        jQuery(document).find('[data-id="' + dataid + '"]').get(0).click();
                        //jQuery(document).find('[href="' + valhash + '"]').get(0).click();
                    }
                }
            }, 500);
        });

        jQuery(document).on('click', '.info-hotspot-close-wrapper', function () {
            if (typeof jQuery(this).prev('div').find('span') != "undefined") {
                if (jQuery(this).prev('div').find('span').hasClass('about')) {
                    // jQuery(document).find('[data-id="9-welcome"]').get(0).click();
                }
            }
        });
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-593fa3d4a103ea37"></script>

    <script src="https://sdk.fleeq.io/fleeq-sdk-light.js"></script>
    <?php /* ?> 
      <div class="modal" id="helpvideo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="helpvideoLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="btn-close iframeclosecls" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      </div>
      <div class="modal-body">
      <iframe src="https://embed.fleeq.io/l/xtzzj8cn4w-ijrzopz9ho" frameborder="0" allowfullscreen="true"></iframe>
      </div>
      </div>
      </div>
      <?php */ ?>
    <script>
        function closeDiv() {
            var openedVideo = document.getElementById('opened-video');
            openedVideo.style.display = "none";
            openedVideo.classList.remove('show');

            var iframes = document.querySelectorAll('iframe');
            for (var i = 0; i < iframes.length; i++) {
                var src = iframes[i].getAttribute('src');
                iframes[i].setAttribute('src', '');
                iframes[i].setAttribute('src', src);
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            document.addEventListener('click', function (event) {
                if (event.target.id === 'showVideo') {
                    var openedVideo = document.getElementById('opened-video');
                    openedVideo.innerHTML = '<div class="videopopupwarp" style="position: relative;"><iframe src="https://player.vimeo.com/video/854458218?h=09f3118960" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe><img src="img/close.png" class="info-hotspot-close-icon" alt="Close video" onClick="closeDiv()" id="close-video" /></div>';
                    openedVideo.style.display = 'flex';
                    openedVideo.classList.add('show'); // Added this line
                }
            });
        });
    </script>
    <!-- <script>
        // Function to change the language content
        function changeLanguage() {
            var selectedLanguage = document.getElementById("language-switcher").value;
            if(selectedLanguage == 'es'){
                window.location.pathname = 'wildfire-home-hardening-guide-spanish';
            }else{
                window.location.pathname = 'wildfire-home-hardening-guide';
            }
//            console.log(selectedLanguage);
        }
    </script> -->
</html>