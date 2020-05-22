<?php
	include("config.php");
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<script src=https://assistant-web.watsonplatform.net/loadWatsonAssistantChat.js></script>
<script>
  window.loadWatsonAssistantChat({
    integrationID: "3363352c-6f60-4812-9179-950bcad01a5a", // The ID of this integration.
    region: "eu-gb" // The region your integration is hosted in.
  }).then(function(instance){
    instance.render();
  });
</script>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<!-- Page Title -->
<title>Home</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<style>
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
   /* position: abso;
    top: 0;*/
  /*  right: 25px;
    font-size: 36px;
    margin-left: 50px;*/
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.hover-link{
  left: 33% !important;
}
.fb_iframe_widget > span{
  max-height:348px !important;
}
iframe{
  max-height: 348px !important;
}
.myevent{
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 200px;
}
.overall-rating{font-size: 14px;margin-top: 5px;color: #8e8d8d;}

.codexworld_rating_widget{
    padding: 0px;
    margin: 0px;
    float: left;
    background-size: 46px;
}
.codexworld_rating_widget li{
    line-height: 0px;
    width: 49px;
    height: 50px;
    padding: 0px;
    margin: 0px;
    margin-left: 2px;
    list-style: none;
    float: left;
    cursor: pointer;
    border-radius: 24px;
}
.codexworld_rating_widget li span{
    display: none;
}

.modal-promo-box {
    max-width: 350px;
    }
    .modal-promo-box{
      padding: 0px 0px !important;
    }
</style>

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>



<style type="text/css">
 /*.project-details{
    border-bottom: 1px solid rgb(2, 132, 132) !important;
  }*/
  .border-2px{
    border: 2px solid rgb(2, 132, 132) !important;
  }
  .project{
    border-bottom: 2px solid rgb(2, 132, 132) !important;
  }
  .errColor{
    color: red !important;
  }
  @media (min-width: 768px){
    .modal-dialog {
        margin: 20% auto;
    }
  }
  @media (max-width: 541px ){
    .modal-dialog {
        margin: 40% auto !important;
    }
  }
</style>
</script>

</head>
<body class="">
<div id="wrapper" class="clearfix">
  
  <!-- Header -->
  <?php 
      include_once('header.php');
  ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
        
      <!-- Slider Revolution Start -->
      <div class="rev_slider_wrapper">
        <div class="rev_slider" data-version="5.0">
          <ul>

            <!-- SLIDE 1 -->
            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg5.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/bg/bg5.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-1-layer-1"

                data-x="['left']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-110']" 
                data-fontsize="['100']"
                data-lineheight="['110']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:100;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700;">Education
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                id="rs-1-layer-2"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']" 
                data-fontsize="['35']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:100;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">Education For EveryOne 
              </div>
              
              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white" 
                id="rs-1-layer-3"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['35']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:100;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best education for our students and  always<br> try to achieve our student's trust and satisfaction
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" 
                id="rs-1-layer-4"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['100']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:200;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"> 
              </div>
            </li>

            <!-- SLIDE 2 -->
            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg7.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/bg/bg7.jpg"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                id="rs-2-layer-1"
              
                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-90']" 
                data-fontsize="['28']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:100;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Feed Your Knowledge
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                id="rs-2-layer-2"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-20']"
                data-fontsize="['48']"
                data-lineheight="['70']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:100;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;"> Best Courses to be Learn
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white text-center" 
                id="rs-2-layer-3"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['50']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:100;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We Will Help You Reach To The TOP/GOAL/HIGHEST Rank.
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" 
                id="rs-2-layer-4"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['115']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:200;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:100;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
              </div>
            </li>

            <!-- SLIDE 3 -->
            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/bg/bg1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                id="rs-3-layer-1"

                data-x="['right']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-90']" 
                data-fontsize="['64']"
                data-lineheight="['72']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:100;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">Best Education
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-3-layer-2"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']" 
                data-fontsize="['32']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:100;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">For Your Better Future 
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white text-right" 
                id="rs-3-layer-3"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['30']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:100;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Your child's future begins here.
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" 
                id="rs-3-layer-4"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['95']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:200;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:100;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
              </div>

            </li>
            
          </ul>
        </div>
        <!-- end .rev_slider -->
      </div>
      <!-- end .rev_slider_wrapper -->
      <script>
        $(document).ready(function(e) {
          $(".rev_slider").revolution({
            sliderType:"standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
              arrows: {
                style:"zeus",
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                }
              },
              bullets: {
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                style:"metis",
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:30,
                space:5,
                tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
              }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [650, 768, 960, 720],
            lazyType: "none",
            parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
          });
        });
      </script>
      <!-- Slider Revolution Ends -->

    </section>

    <div class="article-list">
    <div class="container-fluid text-center" style="background: linear-gradient(#4d94ff, #001433);">
        <div class="intro text-center">
            <h2 class="text-center title text-white text-uppercase mt-0 mb-30">Our Top Courses</h2>
        </div>
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><a href="ai.php"><img class="img-fluid" src="images/Courses/ai.png" height="255" style="border-radius: 20px;" /></a>
                <h3 class="name text-white">Artificial Intelligence</h3>
                <p class="description text-white">Artificial intelligence (AI) refers to the simulation of human intelligence in machines that are programmed to think like humans and mimic their actions.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-4 item text-white"><a href="ml.php"><img class="img-fluid" src="images/Courses/ml.png" height="255" style="border-radius: 20px;"/></a>
                <h3 class="name text-white">Machine Learning</h3>
                <p class="description text-white">Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed</p><a href="ml.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
        <div
            class="col-sm-6 col-md-4 item"><a href="dl.php"><img class="img-fluid" src="images/Courses/dl.jpeg" height="255" style="border-radius: 20px;"/></a>
            <h3 class="name text-white">Deep Learning</h3>
            <p class="description text-white">Deep learning is a subset of machine learning in artificial intelligence (AI) that has networks capable of learning unsupervised from data that is unstructured or unlabeled.</p><a href="dl.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
</div>
</div>
</div>

    <section id="about" style="background:#f7f7f7;" >
      <div class="container pt-0 pb-0">
        <div class="row">
        	<div class="col-md-5">
            <img src="images/about/6.png" alt="">
          </div>
          <div class="col-md-7">
            <div class="p-40 pl-0">
                <div id="errorDiv"></div>

              <!-- Reservation Form Start-->
              <form id="reservation_form" name="reservation_form" class="reservation-form" method="post" action="#"><h3 class="mt-0 line-bottom mb-40">Connect Us for<span class="text-theme-color-2"> More Info!</span></h3>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group mb-30">
                      <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                    </div>
                    <span class="help-block" id="error"></span> 

                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <div class="styled-select">
                      <select id="car_select" name="car_select" class="form-control" required="">
                      <option value="">- Select Your  Course -</option>
                      <option value="Machine Learning">Machine Learning</option>
                      <option value="Artificial Intelligence">Artificial Intelligence </option>
                      <option value="Python Programming">Python Programming</option>
                      <option value="Java Programming">Java Programming</option>
                      <option value="Android Programming">Android Programming</option>
                      <option value="Deep Learning">Deep Learning</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-0 mt-0">
                      <input name="form_botcheck" class="form-control" type="hidden" value="">
                      <button type="submit" class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-color-2-4px" data-loading-text="Please wait...">Submit Now</button>
                    </div>
                  </div>
                </div>
              </form>
              <!-- Reservation Form End-->

              <!-- Application Form Validation Start-->
              <script type="text/javascript">
              $('document').ready(function()
{      

     // name validation
     var nameregex = /^[a-zA-Z ]+$/;
     
     $.validator.addMethod("validname", function( value, element ) {
         return this.optional( element ) || nameregex.test( value );
     }); 
     
     // valid email pattern
     var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     
     $.validator.addMethod("validemail", function( value, element ) {
         return this.optional( element ) || eregex.test( value );
     });

      // valid phone No pattern
     var phonegex = /^[0-9-+]+$/;
     $.validator.addMethod("validnumber", function( value, element ) {
         return this.optional( element ) || phonegex.test( value );
     });
     
     $("#reservation_form").validate({
          
      rules:
      {
        reservation_name: {
          required: true,
          validname: true,
          minlength: 4
        },
        reservation_email : {
        required : true,
           /* email: true,
                remote: {
                    url: "check_email.php",
                    type: "post"
                 }*/
        },
        reservation_phone: {
          required: true,
          validnumber:true,
          minlength: 10,
          maxlength: 12
        },
        car_select:{
          required: true,
        },
        reservation_date: {
          required: true,
        },

        
       },
       messages:
       {
        reservation_name: {
          required: "Name is required",
          validname: "Name must contain only alphabets and space",
          minlength: "your name is too short"
            },
        reservation_email : {
          required : "Email is required",
          validemail : "Please enter valid email address",
         // remote : "Email already exists"
          },
        reservation_phone:{
          required: "Phone number is required",
          validnumber: "Phone number must contain only Number.",
          minlength: "phone number at least have 10 no",
          maxlength: "Phone number less than 12 No"
          },
        car_select:{
          required: "Course is required",
          
          }
       
        
       },
       errorPlacement : function(error, element) {
        $(element).closest('.form-group').find('.help-block').html(error.html());
       },
       highlight : function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
       },
       unhighlight: function(element, errorClass, validClass) {
        $(element).closest('.form-group').removeClass('has-error');
        $(element).closest('.form-group').find('.help-block').html('');
       },
        submitHandler: submitForm
       }); 
 
       function submitForm(){
         
         $.ajax({
            url: 'ajax-load/reservation.php',
            type: 'POST',
            data: $('#reservation_form').serialize(),
            dataType: 'json'
         })
         .done(function(data){
            
            $('#btn-signup').html('<img src="ajax-load/ajax-loader.gif" /> &nbsp; Please wait...').prop('disabled', true);
            $('input[type=text],input[type=email]').prop('disabled', true);
            
            setTimeout(function(){
                   
            if ( data.status==='success' ) {
              
              $('#errorDiv').slideDown('fast', function(){
                $('#errorDiv').html('<div class="alert alert-info">'+data.message+'</div>');
                $("#reservation_form").trigger('reset');
                $('input[type=text],input[type=email]').prop('disabled', false);
                $('#btn-signup').html('Submit Now').prop('disabled', false);
              }).delay(3000).slideUp('fast');
              
                     
              } else {
                     
                $('#errorDiv').slideDown('fast', function(){
                    $('#error').html('<div class="alert alert-danger">'+data.message+'</div>');
                  $("#reservation_form").trigger('reset');
                  $('input[type=text],input[type=email]').prop('disabled', false);
                  $('#btn-signup').html('Submit Now').prop('disabled', false);
              }).delay(3000).slideUp('fast');
            }
                  
          },3000);
            
         })
         .fail(function(){
            $("#reservation_form").trigger('reset');
            alert('An unknown error occoured, Please try again Later...');
         });
       }
});
              </script>
              
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>

    <!-- Section: Mission -->
    <section id="mission">
      <div class="container-fluid pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-sm-6 col-md-6 pull-right xs-pull-none bg-theme-colored wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="pt-60 pb-40 pl-90 pr-160 p-md-30">
              <h2 class="title text-white text-uppercase line-bottom mt-0 mb-30">Our Mission</h2>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none"> 
                  <i class="fa fa-desktop text-theme-color-2 font-36"></i> 
                </a>
                <div class="ml-120 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Quality Education</h4>
                  <p class="text-white">A good quality education is one that provides all learners with capabilities they require to become economically productive, develop sustainable livelihoods, contribute to peaceful and democratic societies and enhance individual well-being.</p>
                </div>
              </div>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-user text-theme-color-2 font-36"></i> 
                </a>
                <div class="ml-120 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">All-Round Development Of Student</h4>
                  <p class="text-white">All Round Development" means that we focus and emphasize more than the academic development of the child.  Instead, while that remains a key focus, we also undestand the essence in emphasizing the social-emotional learning/development; the development of varying artisistic skills; cognitivie development; character development etc.</p>
              </div>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-money text-theme-color-2 font-36"></i> 
                </a>
                <div class="ml-120 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Low Cost Educatiom</h4>
                  <p class="text-white">Our mission is to offer low cost and affordable education to our students. </p>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="col-sm-6 col-md-6 p-0 bg-img-cover wow fadeInRight hidden-xs" data-bg-img="images/photos/mission.jpg" data-wow-duration="1s" data-wow-delay="0.3s" style="background-image: url('./images/photos/mission.jpg'); min-height: 58.07em; visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
          </div>
        </div>
      </div>
    </section>

<!-- end wrapper -->
<!-- Footer -->
<section id="foot">
  <?php include_once('footer.php'); ?>
</section>



    

    

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
++
</body>
</html>