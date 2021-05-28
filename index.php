<?php
    $url = explode('?', $_SERVER['REQUEST_URI'])[0];
    $subPath = $_SERVER['HTTP_HOST'] == 'localhost:8888' ? '/shipping' : '';
    $websiteName = 'Zed Logistic';
    $email = 'info@zedlogisticservices.com';
    $phoneNumber = '';

    if ($url == '/about') {
        include 'about.php';
        exit;
    } else if ($url == '/contact') {
        include 'contact.php';
        exit;
    } else if ($url == '/track') {
        include 'track.php';
        exit;
    } else if ($url == '/all-services') {
        include './services/all.php';
        exit;
    } else if ($url == '/services/domestic-delivery') {
        include './services/demesticDelivery.php';
        exit;
    } else if ($url == '/services/worldwide-delivery') {
        include './services/worldWide.php';
        exit;
    } else if ($url == '/services/ocean-freight') {
        include './services/oceanFrieght.php';
        exit;
    } else if ($url == '/services/logistic') {
        include './services/logistic.php';
        exit;
    } else if ($url == '/services/sameday') {
        include './services/sameDay.php';
        exit;
    } else if ($url == '/services/air-fright') {
        include './services/airfright.php';
        exit;
    }

?>

<html lang="en-US" class="csstransforms csstransforms3d csstransitions js_active  vc_desktop  vc_transform  vc_transform " style="height: 100%;">
    <?php include 'head.php'; ?>
   <body class="home page-template page-template-page-templates page-template-template-canvas page-template-page-templatestemplate-canvas-php page page-id-28 preview1 wpb-js-composer js-comp-ver-6.6.0 vc_responsive" style="position: relative; min-height: 100%; top: 0px;">
      <div id="preloader" style="display: none;"></div>
      <div id="wrapper">
         <!-- header begin -->
         <?php include 'header.php'; ?>
         <!-- header close -->
         <section class="wpb_row vc_row-fluid vc_custom_1453459354945">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper  ">
                            <div class="wpb_revslider_element wpb_content_element">
                                <!-- START home slider REVOLUTION SLIDER 6.1.7 -->
                                <p class="rs-p-wp-fix"></p>
                                <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;">
                                    <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.7">
                                        <rs-slides>
                                            <rs-slide data-key="rs-1" data-title="Slide" data-thumb="//www.zenithlogisticservices.com/wp-content/uploads/2016/01/bg-1-100x50.jpg" data-duration="5000" data-anim="ei:d;eo:d;s:800;r:7;t:fade;sl:d;">
                                                <img src="//www.zenithlogisticservices.com/wp-content/uploads/2016/01/bg-1.jpg" title="Home" class="rev-slidebg" data-no-retina>
                                                <!--
							-->
                                                <rs-layer id="slider-1-slide-1-layer-1" class="h-line" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:20px;y:130px;" data-text="l:22;" data-frame_0="y:-50px;" data-frame_1="e:easeInOutCubic;st:1000;sp:800;"
                                                    data-frame_999="y:-50px;o:0;e:nothing;st:w;" style="z-index:5;font-family:Roboto;">
                                                </rs-layer>
                                                <!--

							-->
                                                <rs-layer id="slider-1-slide-1-layer-2" class="custom-font-1" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:20px;y:180px;" data-text="s:56;l:22;fw:700;" data-frame_0="x:50px;"
                                                    data-frame_1="e:easeInOutCubic;st:800;sp:800;" data-frame_999="x:50px;o:0;e:nothing;st:w;" style="z-index:6;font-family:Montserrat;">BY RAIL
                                                </rs-layer>
                                                <!--

							-->
                                                <rs-layer id="slider-1-slide-1-layer-3" class="custom-font-1" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:20px;y:235px;" data-text="s:56;l:22;fw:700;" data-frame_0="x:50px;"
                                                    data-frame_1="e:easeInOutCubic;st:1000;sp:800;" data-frame_999="x:50px;o:0;e:nothing;st:w;" style="z-index:7;font-family:Montserrat;">BY SEA
                                                </rs-layer>
                                                <!--

							-->
                                                <rs-layer id="slider-1-slide-1-layer-4" class="custom-font-1" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:20px;y:290px;" data-text="s:56;l:22;fw:700;" data-frame_0="x:50px;"
                                                    data-frame_1="e:easeInOutCubic;st:1200;sp:800;" data-frame_999="x:50px;o:0;e:nothing;st:w;" style="z-index:8;font-family:Montserrat;">BY AIR
                                                </rs-layer>
                                                <!--

							-->
                                                <rs-layer id="slider-1-slide-1-layer-5" class="custom-font-2" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:20px;y:345px;" data-text="s:24;l:22;" data-frame_0="y:50px;" data-frame_1="e:easeInOutCubic;st:1400;sp:800;"
                                                    data-frame_999="y:50px;o:0;e:nothing;st:w;" style="z-index:9;font-family:Lato;">Freight Solutions For All Industry
                                                </rs-layer>
                                                <!--
-->
                                            </rs-slide>
                                            <rs-slide data-key="rs-4" data-title="Slide" data-thumb="//www.zenithlogisticservices.com/wp-content/uploads/2021/04/IMG_06081-100x50.jpg" data-duration="5000" data-anim="ei:d;eo:d;s:800;r:7;t:fade;sl:d;">
                                                <img src="//www.zenithlogisticservices.com/wp-content/uploads/2021/04/IMG_06081.jpg" title="IMG_06081" width="1226" height="500" class="rev-slidebg" data-no-retina>
                                                <!--
							-->
                                                <rs-layer id="slider-1-slide-4-layer-1" class="h-line" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:20px;y:130px;" data-text="l:22;" data-frame_0="y:-50px;" data-frame_1="e:easeInOutCubic;st:1000;sp:800;"
                                                    data-frame_999="y:-50px;o:0;e:nothing;st:w;" style="z-index:5;font-family:Roboto;">
                                                </rs-layer>
                                                <!--

							-->
                                                <rs-layer id="slider-1-slide-4-layer-2" class="custom-font-1" data-type="text" data-color="#ff3a2d" data-rsp_ch="on" data-xy="x:20px;y:180px;" data-text="s:56;l:22;fw:700;" data-frame_0="x:50px;" data-frame_1="e:easeInOutCubic;st:800;sp:800;"
                                                    data-frame_999="x:50px;o:0;e:nothing;st:w;" style="z-index:6;font-family:Montserrat;">BY LAND
                                                </rs-layer>
                                                <!--

							-->
                                                <rs-layer id="slider-1-slide-4-layer-3" class="custom-font-1" data-type="text" data-color="#007aff" data-rsp_ch="on" data-xy="x:20px;y:235px;" data-text="s:56;l:22;fw:700;" data-frame_0="x:50px;" data-frame_1="e:easeInOutCubic;st:1000;sp:800;"
                                                    data-frame_999="x:50px;o:0;e:nothing;st:w;" style="z-index:7;font-family:Montserrat;">BY SEA
                                                </rs-layer>
                                                <!--

							-->
                                                <rs-layer id="slider-1-slide-4-layer-4" class="custom-font-1" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:20px;y:290px;" data-text="s:56;l:22;fw:700;" data-frame_0="x:50px;"
                                                    data-frame_1="e:easeInOutCubic;st:1200;sp:800;" data-frame_999="x:50px;o:0;e:nothing;st:w;" style="z-index:8;font-family:Montserrat;">BY AIR
                                                </rs-layer>
                                                <!--

							-->
                                                <rs-layer id="slider-1-slide-4-layer-5" class="custom-font-2" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:20px;y:345px;" data-text="s:24;l:22;" data-frame_0="y:50px;" data-frame_1="e:easeInOutCubic;st:1400;sp:800;"
                                                    data-frame_999="y:50px;o:0;e:nothing;st:w;" style="z-index:9;font-family:Lato;">Freight Solutions For All Industry
                                                </rs-layer>
                                                <!--
-->
                                            </rs-slide>
                                            <rs-slide data-key="rs-6" data-title="Slide" data-thumb="//www.zenithlogisticservices.com/wp-content/uploads/2021/04/MarineTraffic_supply_chain_professionals_coronavirus-1920x1080-1-100x50.png" data-duration="5000" data-anim="ei:d;eo:d;s:800;r:7;t:fade;sl:d;">
                                                <img src="//www.zenithlogisticservices.com/wp-content/uploads/2021/04/MarineTraffic_supply_chain_professionals_coronavirus-1920x1080-1.png" title="MarineTraffic_supply_chain_professionals_coronavirus-1920&#215;1080" width="1920" height="1080" class="rev-slidebg"
                                                    data-no-retina>
                                                <!--
							-->
                                                <rs-layer id="slider-1-slide-6-layer-1" class="h-line" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:20px;y:130px;" data-text="l:22;" data-frame_0="y:-50px;" data-frame_1="e:easeInOutCubic;st:1000;sp:800;"
                                                    data-frame_999="y:-50px;o:0;e:nothing;st:w;" style="z-index:5;font-family:Roboto;">
                                                </rs-layer>
                                                <!--

							-->
                                                <rs-layer id="slider-1-slide-6-layer-3" class="custom-font-1" data-type="text" data-color="#ffffff" data-rsp_ch="on" data-xy="x:20px;y:235px;" data-text="s:56;l:22;fw:700;" data-frame_0="x:50px;" data-frame_1="e:easeInOutCubic;st:1000;sp:800;"
                                                    data-frame_999="x:50px;o:0;e:nothing;st:w;" style="z-index:7;font-family:Montserrat;">ZENITH LOGISTICS
                                                </rs-layer>
                                                <!--

							-->
                                                <rs-layer id="slider-1-slide-6-layer-5" class="custom-font-2" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:20px;y:345px;" data-text="s:24;l:22;" data-frame_0="y:50px;" data-frame_1="e:easeInOutCubic;st:1400;sp:800;"
                                                    data-frame_999="y:50px;o:0;e:nothing;st:w;" style="z-index:9;font-family:Lato;">Freight Solutions For All Industry
                                                </rs-layer>
                                                <!--
-->
                                            </rs-slide>
                                        </rs-slides>
                                        <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
                                    </rs-module>
                                    <script type="text/javascript">
                                        setREVStartSize({
                                            c: 'rev_slider_1_1',
                                            rl: [1240, 1024, 778, 480],
                                            el: [500],
                                            gw: [1170],
                                            gh: [500],
                                            type: 'standard',
                                            justify: '',
                                            layout: 'fullscreen',
                                            offsetContainer: '',
                                            offset: '',
                                            mh: "0"
                                        });
                                        var revapi1,
                                            tpj;
                                        jQuery(function() {
                                            tpj = jQuery;
                                            if (tpj("#rev_slider_1_1").revolution == undefined) {
                                                revslider_showDoubleJqueryError("#rev_slider_1_1");
                                            } else {
                                                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                                    jsFileLocation: "//www.zenithlogisticservices.com/wp-content/plugins/revslider/public/assets/js/",
                                                    sliderLayout: "fullscreen",
                                                    duration: 7000,
                                                    visibilityLevels: "1240,1024,778,480",
                                                    gridwidth: 1170,
                                                    gridheight: 500,
                                                    spinner: "spinner0",
                                                    editorheight: "500,768,960,720",
                                                    responsiveLevels: "1240,1024,778,480",
                                                    disableProgressBar: "on",
                                                    navigation: {
                                                        mouseScrollNavigation: false,
                                                        onHoverStop: false,
                                                        touch: {
                                                            touchenabled: true
                                                        },
                                                        arrows: {
                                                            enable: true,
                                                            style: "hesperiden",
                                                            hide_onleave: true,
                                                            left: {

                                                            },
                                                            right: {

                                                            }
                                                        }
                                                    },
                                                    fallbacks: {
                                                        ignoreHeightChanges: "",
                                                        allowHTML5AutoPlayOnAndroid: true
                                                    },
                                                });
                                            }

                                        });
                                    </script>
                                    <script>
                                        var htmlDivCss = unescape("%23rev_slider_1_1_wrapper%20.hesperiden.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A1000%3B%0A%20%20%20%20border-radius%3A%2050%25%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hesperiden.tparrows%3Ahover%20%7B%0A%09background%3A%23000000%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hesperiden.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%27revicons%27%3B%0A%09font-size%3A20px%3B%0A%09color%3A%23ffffff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hesperiden.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce82c%27%3B%0A%20%20%20%20margin-left%3A-3px%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hesperiden.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce82d%27%3B%0A%20%20%20%20margin-right%3A-3px%3B%0A%7D%0A");
                                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        } else {
                                            var htmlDiv = document.createElement('div');
                                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                    <script>
                                        var htmlDivCss = unescape("%0A%0A%0A");
                                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        } else {
                                            var htmlDiv = document.createElement('div');
                                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                </rs-module-wrap>
                                <!-- END REVOLUTION SLIDER -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>

         <section class="wpb_row vc_row-fluid vc_custom_1462165553035 vc_row-has-fill">
            <div class="row">
               <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                     <div class="wpb_wrapper  ">
                        <div class="wpb_text_column wpb_content_element  vc_custom_1462173238616">
                           <div class="wpb_wrapper">
                              <div class="container">
                                 <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                       <div id="search-container" data-wow-duration="1s" data-wow-delay="0s" class="cta-form wow fadeIn" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeIn;">
                                          
                                             <input type="text" value="" name="s" id="s" placeholder="Insert tracking number here...">
                                             <input type="submit" onclick="track()" value="TRACK IT" name="submit"> 

                                             <input type="hidden" name="post_type" value="gocargo_shipment"> 
                                          
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="light-text" id="section-tracking-result"></div>
                           </div>
                        </div>
                        <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                        <div class="row-service">
                           <div style="background-image:url('https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/bg_service_1.jpg');" class="service-table-cell box-one-third services-box light-text">
                              <div class="inner wow animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s;">
                                 <h2 class="wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">SAME DAY DELIVERIES</h2>
                                 <div class="wow fadeIn" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                    <p>With crossdocking facilities in most major metropolitan areas in the Northeast and Midwest, Zenith Logistics Service helps our customers enhance delivery efficiency and labor utilization while reducing storage and handling costs amid changing capacity demands and geographic requirements.</p>
                                 </div>
                                 <div class="divider-single"></div>
                                 <a href="https://www.zenithlogisticservices.com/services/custom-brokerage/" class="btn-border-light wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".3s" style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.4s; animation-name: fadeInUp;">Read More</a>
                              </div>
                           </div>
                           <div style="background-image:url('https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/bg_service_2.jpg');" class="service-table-cell box-one-third services-box light-text">
                              <div class="inner wow animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s;">
                                 <h2 class="wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">DOMESTIC DELIVERIES</h2>
                                 <div class="wow fadeIn" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                    <p>If your delivery doesn’t fit within the regular daily routes of our network of professionals, we’ll create custom scalable delivery routes that maximize efficiency and productivity to help keep your business running smoothly. Whether it’s one stop or a thousand, same-day or next-day delivery, no route is too complex for our network of expert delivery professionals and vehicle fleets.</p>
                                 </div>
                                 <div class="divider-single"></div>
                                 <a href="https://www.zenithlogisticservices.com/services/warehousing/" class="btn-border-light wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".3s" style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.4s; animation-name: fadeInUp;">Read More</a>
                              </div>
                           </div>
                           <div style="background-image:url('https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/bg_service_3.jpg');" class="service-table-cell box-one-third services-box light-text">
                              <div class="inner wow animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s;">
                                 <h2 class="wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">WORLDWIDE DELIVERIES</h2>
                                 <div class="wow fadeIn" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                    <p>No matter where you need to deliver, NY, DC, Chicago, LA or anywhere else across the country, we have access to a network of professionals whose vans and lift-gate trucks will get your package to its destination, same-day.
                                       On-demand is in-demand and Zenith Logistics Service delivers.
                                    </p>
                                 </div>
                                 <div class="divider-single"></div>
                                 <a href="https://www.zenithlogisticservices.com/services/cargo-express/" class="btn-border-light wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".3s" style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.4s; animation-name: fadeInUp;">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </section>
         <section class="wpb_row vc_row-fluid">
            <div class="container">
               <div class="row">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper  ">
                           <div class="text-center">
                              <h2 class="heading wow fadeInUp" data-wow-delay="0" style="visibility: visible; animation-name: fadeInUp;">Why Choose Us? <strong>Find reasons to choose us as your freight partner</strong></h2>
                              <div class="small-border wow flipInY" data-wow-delay=".2s" data-wow-duration=".8s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: flipInY;"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper  ">
                           <div class="feature-box ">
                              <i class="fas fa-tools wow zoomIn" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: zoomIn;"></i>
                              <div class="text wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                 <h3>
                                    Customer Satisfication Tools				 
                                 </h3>
                                 From Europe to Asutralia, by air or sea? We offer fast, reliable and accurate worldwide delivery directly to your doors, factory and warehouses. We are dedicated in serving our clients with the latest technologies in the logistics industry.        
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper  ">
                           <div class="feature-box ">
                              <i class="fas fa-chart-bar wow zoomIn" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: zoomIn;"></i>
                              <div class="text wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                 <h3>
                                    Management &amp; Reporting				 
                                 </h3>
                                 Don’t know what mean of transportation would be right for you, or you need someone for full supply chain management? Please contact us. Our team of professionals will be happy to help. Our management and reporting teams are top notch.        
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper  ">
                           <div class="feature-box ">
                              <i class="fas fa-tag wow zoomIn" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: zoomIn;"></i>
                              <div class="text wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                 <h3>
                                    Freight Payment Options				 
                                 </h3>
                                 Safety of your cargo is one of our top priorities. Every package is handled with most care by our trained and high skilled personnel. You can be sure that your cargo will travel and arrive safely. We are rated 5 star in terms of compliance to our customers need        
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper  ">
                           <div class="feature-box ">
                              <i class="fa fa-refresh wow zoomIn" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: zoomIn;"></i>
                              <div class="text wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                 <h3>
                                    Compliance Solutions				 
                                 </h3>
                                 The word cargo refers in particular to goods or produce being conveyed generally for commercial gain by ship, boat, or aircraft, although the term is now often extended to cover all types of freight, including that carried by train, van, truck, or intermodal container.        
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </section>
         <section class="wpb_row vc_row-fluid vc_custom_1452761221692 vc_row-has-fill">
            <div class="container">
               <div class="row">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper  ">
                           <div class="gallery full-gallery ex-gallery zoom-gallery-60a9d3745f1e7 pf_full_width pf_3_cols isotope" style="position: relative; overflow: hidden; height: 239.125px;">
                              <div class="item isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                 <div class="picframe">
                                    <a href="https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/pic-1-1.jpg" data-source="https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/pic-1-1.jpg" title="Service with a Smile">
                                    <span class="overlay" style="opacity: 0; width: 370.5px; height: 237.125px;"></span>
                                    <span class="pf_text" style="width: 370.5px; height: 237.125px;">
                                    <span class="project-name">Service with a Smile</span>
                                    <span class="small-border"></span>
                                    </span>
                                    <img src="https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/pic-1-1.jpg" alt="" style="width: 100%; height: auto;">
                                    </a>
                                 </div>
                              </div>
                              <div class="item isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(373px, 0px, 0px);">
                                 <div class="picframe">
                                    <a href="https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/pic-2-1.jpg" data-source="https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/pic-2-1.jpg" title="Land Delivery by Truck">
                                    <span class="overlay" style="opacity: 0; width: 370.5px; height: 237.125px;"></span>
                                    <span class="pf_text" style="width: 370.5px; height: 237.125px;">
                                    <span class="project-name" style="margin-top: 20px;">Land Delivery by Truck</span>
                                    <span class="small-border" style="width: 50px;"></span>
                                    </span>
                                    <img src="https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/pic-2-1.jpg" alt="" style="width: 100%; height: auto;">
                                    </a>
                                 </div>
                              </div>
                              <div class="item isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(745px, 0px, 0px);">
                                 <div class="picframe">
                                    <a href="https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/pic-3-1.jpg" data-source="https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/pic-3-1.jpg" title="Land Delivery by Train">
                                    <span class="overlay" style="width: 370.5px; height: 237.125px; opacity: 0;"></span>
                                    <span class="pf_text" style="width: 370.5px; height: 237.125px;">
                                    <span class="project-name">Land Delivery by Train</span>
                                    <span class="small-border"></span>
                                    </span>
                                    <img src="https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/pic-3-1.jpg" alt="" style="width: 100%; height: auto;">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <script type="text/javascript">
                              (function($) { "use strict";
                              jQuery(document).ready(function () {
                                'use strict'; // use strict mode
                               	jQuery('.zoom-gallery-60a9d3745f1e7').magnificPopup({
                                    delegate: 'a',
                                    type: 'image',
                                    closeOnContentClick: false,
                                    closeBtnInside: false,
                                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                                    image: {
                                        verticalFit: true,
                                        titleSrc: function (item) {
                                            //return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
                                            return item.el.attr('title');
                                        }
                                    },
                                    gallery: {
                                        enabled: true
                                    },
                                    zoom: {
                                        enabled: true,
                                        duration: 300, // don't foget to change the duration also in CSS
                                        opener: function (element) {
                                            return element.find('img');
                                        }
                                    }
                                });
                               });
                              })(jQuery); 
                           </script>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </section>
         <section class="wpb_row vc_row-fluid vc_custom_1619016451075 vc_row-has-fill side-bg">
            <div class="image-container col-md-6 col-md-offset-6 pull-right">
               <div class="background-image" style="background: url(https://www.zenithlogisticservices.com/wp-content/uploads/2021/04/zkl.jpg) ;"></div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-5">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper  ">
                           <div id="testi-carousel-60a9d37460d06" class="testi-slider testi-carousel wow fadeIn owl-carousel owl-theme" data-wow-delay="0s" data-wow-duration="1s" style="opacity: 1; display: block; visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeIn;">
                              <div class="owl-wrapper-outer autoHeight" style="height: 260px;">
                                 <div class="owl-wrapper" style="width: 2748px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 458px;">
                                       <div class="item">
                                          <blockquote>
                                             <p>Multi-modal container units, designed as reusable carriers to facilitate unit load handling of the goods contained, are also referred to as cargo, specially by shipping lines and logistics operators.</p>
                                          </blockquote>
                                          <span class="testi-by">
                                          <strong>Marina Leopold</strong>                     				</span>
                                       </div>
                                    </div>
                                    <div class="owl-item" style="width: 458px;">
                                       <div class="item">
                                          <blockquote>
                                             <p>Multi-modal container units, designed as reusable carriers to facilitate unit load handling of the goods contained, are also referred to as cargo, specially by shipping lines and logistics operators.</p>
                                          </blockquote>
                                          <span class="testi-by">
                                          <strong>Mortimer Elmo</strong>                     				</span>
                                       </div>
                                    </div>
                                    <div class="owl-item" style="width: 458px;">
                                       <div class="item">
                                          <blockquote>
                                             <p>Multi-modal container units, designed as reusable carriers to facilitate unit load handling of the goods contained, are also referred to as cargo, specially by shipping lines and logistics operators.</p>
                                          </blockquote>
                                          <span class="testi-by">
                                          <strong>Aline Drummond</strong>                     				</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="owl-controls clickable">
                                 <div class="owl-pagination">
                                    <div class="owl-page active"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                 </div>
                              </div>
                           </div>
                           <script type="text/javascript">
                              jQuery(document).ready(function() {		
                              'use strict';
                              jQuery("#testi-carousel-60a9d37460d06").owlCarousel({
                                items : 1,
                              itemsDesktop : [1199,1],
                              itemsDesktopSmall : [980,1],
                                itemsTablet: [768,1],
                                itemsTabletSmall: false,
                                itemsMobile : [479,1],
                                navigation : false,
                              autoHeight : true,
                               });
                              });
                           </script>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </section>
         <section class="wpb_row vc_row-fluid light-text vc_custom_1452679771317 vc_row-has-fill">
            <div class="container">
               <div class="row">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                     <div class="vc_column-inner vc_custom_1452746710490">
                        <div class="wpb_wrapper  ">
                           <div class="text-center">
                              <h2 class="heading wow fadeInUp" data-wow-delay="0" style="visibility: visible; animation-name: fadeInUp;">FAQ <strong>Frequently Asked Questions</strong></h2>
                              <div class="small-border wow flipInY" data-wow-delay=".2s" data-wow-duration=".8s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: flipInY;"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-6">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                           <div class="vc_tta-container" data-vc-action="collapseAll">
                              <div class="vc_general vc_tta vc_tta-accordion vc_tta-color-sky vc_tta-style-flat vc_tta-shape-square vc_tta-o-shape-group vc_tta-controls-align-left vc_tta-o-all-clickable  bg_transparent">
                                 <div class="vc_tta-panels-container">
                                    <div class="vc_tta-panels">
                                       <div class="vc_tta-panel" id="1452746268810-d3399842-afc6" data-vc-content=".vc_tta-panel-body">
                                          <div class="vc_tta-panel-heading">
                                             <h4 class="vc_tta-panel-title"><a href="#1452746268810-d3399842-afc6" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Why are the shipping rates so volatile?</span></a></h4>
                                          </div>
                                          <div class="vc_tta-panel-body" style="height: 0px;">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <div id="1452746268810-d3399842-afc6" class="vc_tta-panel vc_active" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-body" style="height: 0px;">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                               <p>Shipping rate varies depending on the location and forex rate at the moment.</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div id="1452746268922-8d359aac-b4c2" class="vc_tta-panel" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-heading">
                                                         <h4 class="vc_tta-panel-title"></h4>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="vc_tta-panel" id="1452746268922-8d359aac-b4c2" data-vc-content=".vc_tta-panel-body">
                                          <div class="vc_tta-panel-heading">
                                             <h4 class="vc_tta-panel-title"><a href="#1452746268922-8d359aac-b4c2" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">What are the usual methods of freight payment?</span></a></h4>
                                          </div>
                                          <div class="vc_tta-panel-body">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <div id="1452746268922-8d359aac-b4c2" class="vc_tta-panel vc_active" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-body">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                               <p>Methods of freight payments includes, Cash transfer, wire transfer, Cryptocurrencies etc</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div id="1452746269039-1155fd79-52c5" class="vc_tta-panel" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-heading">
                                                         <h4 class="vc_tta-panel-title"></h4>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="vc_tta-panel" id="1452746269039-1155fd79-52c5" data-vc-content=".vc_tta-panel-body">
                                          <div class="vc_tta-panel-heading">
                                             <h4 class="vc_tta-panel-title"><a href="#1452746269039-1155fd79-52c5" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Do you handle international household moves?</span></a></h4>
                                          </div>
                                          <div class="vc_tta-panel-body">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <div id="1452746269039-1155fd79-52c5" class="vc_tta-panel vc_active" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-body">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                               <p>Yes we handle international household moves with uttermost care with a customer satisfied orientation.</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div id="1452746269152-d5e7e379-e38d" class="vc_tta-panel" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-heading">
                                                         <h4 class="vc_tta-panel-title"></h4>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="vc_tta-panel" id="1452746269152-d5e7e379-e38d" data-vc-content=".vc_tta-panel-body">
                                          <div class="vc_tta-panel-heading">
                                             <h4 class="vc_tta-panel-title"><a href="#1452746269152-d5e7e379-e38d" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">How and where can we pick up the cargo at destination?</span></a></h4>
                                          </div>
                                          <div class="vc_tta-panel-body">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <div class="wpb_column vc_column_container vc_col-sm-6">
                                                      <div class="vc_column-inner ">
                                                         <div class="wpb_wrapper wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                                            <div class="vc_tta-container" data-vc-action="collapseAll">
                                                               <div class="vc_general vc_tta vc_tta-accordion vc_tta-color-sky vc_tta-style-flat vc_tta-shape-square vc_tta-o-shape-group vc_tta-controls-align-left vc_tta-o-all-clickable bg_transparent">
                                                                  <div class="vc_tta-panels-container">
                                                                     <div class="vc_tta-panels">
                                                                        <div id="1452746269152-d5e7e379-e38d" class="vc_tta-panel vc_active" data-vc-content=".vc_tta-panel-body">
                                                                           <div class="vc_tta-panel-body">
                                                                              <div class="wpb_text_column wpb_content_element ">
                                                                                 <div class="wpb_wrapper">
                                                                                    <p>You can pick up your cargo at our office or as mentioned in the tracking info</p>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="wpb_column vc_column_container vc_col-sm-6">
                                                      <div class="vc_column-inner ">
                                                         <div class="wpb_wrapper wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                                                            <div class="vc_tta-container" data-vc-action="collapseAll">
                                                               <div class="vc_general vc_tta vc_tta-accordion vc_tta-color-sky vc_tta-style-flat vc_tta-shape-square vc_tta-o-shape-group vc_tta-controls-align-left vc_tta-o-all-clickable bg_transparent">
                                                                  <div class="vc_tta-panels-container">
                                                                     <div class="vc_tta-panels">
                                                                        <div id="1452745952618-4e5a7952-f85e" class="vc_tta-panel vc_active" data-vc-content=".vc_tta-panel-body">
                                                                           <div class="vc_tta-panel-heading">
                                                                              <h4 class="vc_tta-panel-title"></h4>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-6">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                           <div class="vc_tta-container" data-vc-action="collapseAll">
                              <div class="vc_general vc_tta vc_tta-accordion vc_tta-color-sky vc_tta-style-flat vc_tta-shape-square vc_tta-o-shape-group vc_tta-controls-align-left vc_tta-o-all-clickable  bg_transparent">
                                 <div class="vc_tta-panels-container">
                                    <div class="vc_tta-panels">
                                       <div class="vc_tta-panel" id="1452745952618-4e5a7952-f85e" data-vc-content=".vc_tta-panel-body">
                                          <div class="vc_tta-panel-heading">
                                             <h4 class="vc_tta-panel-title"><a href="#1452745952618-4e5a7952-f85e" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Why are the shipping rates so volatile?</span></a></h4>
                                          </div>
                                          <div class="vc_tta-panel-body">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <div id="1452746268810-d3399842-afc6" class="vc_tta-panel vc_active" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-body">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                               <p>Shipping rate varies depending on the location and forex rate at the moment.</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div id="1452746268922-8d359aac-b4c2" class="vc_tta-panel" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-heading">
                                                         <h4 class="vc_tta-panel-title"></h4>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="vc_tta-panel" id="1452746034063-4f22372a-4346" data-vc-content=".vc_tta-panel-body">
                                          <div class="vc_tta-panel-heading">
                                             <h4 class="vc_tta-panel-title"><a href="#1452746034063-4f22372a-4346" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">What are the usual methods of freight payment?</span></a></h4>
                                          </div>
                                          <div class="vc_tta-panel-body">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <div id="1452746268922-8d359aac-b4c2" class="vc_tta-panel vc_active" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-body">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                               <p>Methods of freight payments includes, Cash transfer, wire transfer, Cryptocurrencies etc</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div id="1452746269039-1155fd79-52c5" class="vc_tta-panel" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-heading">
                                                         <h4 class="vc_tta-panel-title"></h4>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="vc_tta-panel" id="1452746031536-3c3d73b0-d638" data-vc-content=".vc_tta-panel-body">
                                          <div class="vc_tta-panel-heading">
                                             <h4 class="vc_tta-panel-title"><a href="#1452746031536-3c3d73b0-d638" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Do you handle international household moves?</span></a></h4>
                                          </div>
                                          <div class="vc_tta-panel-body">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <div id="1452746269039-1155fd79-52c5" class="vc_tta-panel vc_active" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-body">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                               <p>Yes we handle international household moves with uttermost care with a customer satisfied orientation.</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div id="1452746269152-d5e7e379-e38d" class="vc_tta-panel" data-vc-content=".vc_tta-panel-body">
                                                      <div class="vc_tta-panel-heading">
                                                         <h4 class="vc_tta-panel-title"></h4>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="vc_tta-panel" id="1452746029748-1ae2afef-b73d" data-vc-content=".vc_tta-panel-body">
                                          <div class="vc_tta-panel-heading">
                                             <h4 class="vc_tta-panel-title"><a href="#1452746029748-1ae2afef-b73d" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">How and where can we pick up the cargo at destination?</span></a></h4>
                                          </div>
                                          <div class="vc_tta-panel-body">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <div class="wpb_column vc_column_container vc_col-sm-6">
                                                      <div class="vc_column-inner ">
                                                         <div class="wpb_wrapper wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                                            <div class="vc_tta-container" data-vc-action="collapseAll">
                                                               <div class="vc_general vc_tta vc_tta-accordion vc_tta-color-sky vc_tta-style-flat vc_tta-shape-square vc_tta-o-shape-group vc_tta-controls-align-left vc_tta-o-all-clickable bg_transparent">
                                                                  <div class="vc_tta-panels-container">
                                                                     <div class="vc_tta-panels">
                                                                        <div id="1452746269152-d5e7e379-e38d" class="vc_tta-panel vc_active" data-vc-content=".vc_tta-panel-body">
                                                                           <div class="vc_tta-panel-body">
                                                                              <div class="wpb_text_column wpb_content_element ">
                                                                                 <div class="wpb_wrapper">
                                                                                    <p>You can pick up your cargo at our office or as mentioned in the tracking info</p>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="wpb_column vc_column_container vc_col-sm-6">
                                                      <div class="vc_column-inner ">
                                                         <div class="wpb_wrapper wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                                                            <div class="vc_tta-container" data-vc-action="collapseAll">
                                                               <div class="vc_general vc_tta vc_tta-accordion vc_tta-color-sky vc_tta-style-flat vc_tta-shape-square vc_tta-o-shape-group vc_tta-controls-align-left vc_tta-o-all-clickable bg_transparent">
                                                                  <div class="vc_tta-panels-container">
                                                                     <div class="vc_tta-panels">
                                                                        <div id="1452745952618-4e5a7952-f85e" class="vc_tta-panel vc_active" data-vc-content=".vc_tta-panel-body">
                                                                           <div class="vc_tta-panel-heading">
                                                                              <h4 class="vc_tta-panel-title"></h4>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="text-center wpb_column vc_column_container vc_col-sm-12">
                     <div class="vc_column-inner vc_custom_1452746647286">
                        <div class="wpb_wrapper wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">			
                           <a class=" btn-border-light " href="#" title="Have More Questions?" target="_blank">Have More Questions?</a>	
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </section>
         <section class="wpb_row vc_row-fluid call-to-action vc_custom_1456218140549">
            <div class="row">
               <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                     <div class="wpb_wrapper  ">
                        <div class="call-to-action text-light  ">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-9">
                                    <h2>Expecting a consignment? Know the status of your parcel now.</h2>
                                 </div>
                                 <div class="col-md-3">
                                    <a class="btn-border-light" href="#" title="Contact Us" target="_self">Contact Us</a>                
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </section>
         <!-- footer begin -->
         <footer>
            <div class="main-footer">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4">
                        <div id="text-3" class="widget footer-widget widget_text">
                           <h3>Our Services</h3>
                           <div class="tiny-border"></div>
                           <div class="textwidget">
                              <ul>
                                 <li><a href="#">Ocean Freight</a></li>
                                 <li><a href="#">Sky Freight</a></li>
                                 <li><a href="#">Cargo Express</a></li>
                                 <li><a href="#">Logistics</a></li>
                                 <li><a href="#">Warehousing</a></li>
                                 <li><a href="#">Custom Brokerage</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4">
                        <div id="text-4" class="widget footer-widget widget_text">
                           <h3>Location</h3>
                           <div class="tiny-border"></div>
                           <div class="textwidget">
                              Somewhere Over Rainbow <br>
                              Green World Rainbow Green World <br>
                              T. +44 7441449170 <br>
                              T. (209) 771-4803 <br>
                              E. <?=$email?> <br>
                              <div class="divider-single"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4">
                        <div id="text-5" class="widget footer-widget widget_text">
                           <h3>About Us</h3>
                           <div class="tiny-border"></div>
                           <div class="textwidget">
                              <p>At Zed Logistics Services, we аrе making research continuously аnd improving оur ѕеrvісеѕ to thе hіghеѕt ѕtаndаrdѕ. Wе оffеr dіffеrеnt ѕеrvісеs rаngіng frоm logistics, warehousing, cargo, transport and other related services..</p>
                              <a class="btn-border-light" href="#">About Us</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="subfooter">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 text-center">
                        Copyright 2021 - Zed Logistic Services  
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- footer close -->
      </div>
      <!-- #wrapper -->
      <?php include 'script.php'; ?>
      <script>
         function track() {
            window.location = '/track';
         }
      </script>
   </body>
</html>