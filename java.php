<?php 
 
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<!-- Page Title -->
<title>Java Programming</title>

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

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
<style type="text/css">
  .form-control{
    color: #1F386B !important;
  }
  .hide {
  display: none;
}
.panel-group .panel-title a.active{
  color: #fff !important;
}
.nav-pills li.active > a{
  background: #1f386b !important;
    color: #f6f7f9 !important;
}
  .morecontent span {
    display: none;
}
.morelink {
    display: block;
    color: #ff0000 !important;
}
.fb_iframe_widget > span{
  max-height:348px !important;
}
iframe{
  max-height: 348px !important;
}
</style>

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>


</head>
<body class="">
<div id="wrapper" class="clearfix">
  
  
  <!-- Header -->
  <?php include_once('header.php'); ?>
  
      
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
   
    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-0 pt-30 pb-30">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="images/Courses/java.jpg" alt="Java" height="375" width="750">
                <h3 class="text-theme-colored">Java Programming</h3>
              <h5><em><span class="text-theme-color-2">Java Programming</span> <br></em></h5>
                <p class="more"><span class="text-theme-color-2">Java </span> is one of the most popular and widely used programming language and platform. A platform is an environment that helps to develop and run programs written in any programming language.<br>
              <span class="text-theme-color-2"> </span> <br>
                Java is fast, reliable and secure. From desktop to web applications, scientific supercomputers to gaming consoles, cell phones to the Internet, Java is used in every nook and corner.
              </p>

              <div class="separator">
                <i class="fa fa-graduation-cap"></i>
              </div>
              <script type="text/javascript">
                $(document).ready(function() {
                  // Configure/customize these variables.
                  var showChar = 200;  // How many characters are shown by default
                  var ellipsestext = "...";
                  var moretext = "Read more &#8594;";
                  var lesstext = "Show less &#8592;";
                  

                  $('.more').each(function() {
                      var content = $(this).html();
               
                      if(content.length > showChar) {
               
                          var c = content.substr(0, showChar);
                          var h = content.substr(showChar, content.length - showChar);
               
                          var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
               
                          $(this).html(html);
                      }
               
                  });
               
                  $(".morelink").click(function(){
                      if($(this).hasClass("less")) {
                          $(this).removeClass("less");
                          $(this).html(moretext);
                      } else {
                          $(this).addClass("less");
                          $(this).html(lesstext);
                      }
                      $(this).parent().prev().toggle();
                      $(this).prev().toggle();
                      return false;
                  });
              });
              </script>
              <div class="row">
                <div class="col-md-12">
                  <ul id="myTab2" class="nav nav-pills boot-tabs">
                    <li class="active"><a href="#home2" data-toggle="tab">Objective</a></li>
                    <li><a href="#profile2" data-toggle="tab">Details</a></li>
                    

                  </ul>
                  <div id="myTabContent2" class="tab-content">
                    <div class="tab-pane fade in active" id="home2">
                      <p>1. Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)<br>
                        2. It is one of the most popular programming language in the world <br>
                        3. It is easy to learn and simple to use <br>
                        4. It is open-source and free <br>
                        5. It is secure, fast and powerful <br>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile2">
                      <p>Java is a powerful general-purpose programming language. It is used to develop desktop and mobile applications, big data processing, embedded systems, and so on. According to Oracle, the company that owns Java, Java runs on 3 billion devices worldwide, which makes Java one of the most popular programming languages.</p>
                    </div>
                    <!-- </div> -->
                    

                  </div>

                </div>
              </div>          
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
              <div class="widget">
                <h4 class="widget-title line-bottom">Courses List</h4>
                <div class="services-list">
                  <ul class="list list-border angle-double-right">
                    <li><a href="ai.php">Artificial Intelligence (AI) </a></li>
                    <li><a href="ml.php">Machine Learning (ML) </a></li>
                    <li><a href="python.php">Python Programming </a></li>
                    <li class="active"><a href="java.php">Java Programming </a></li>
                    <li><a href="android.php">Android Programming </a></li>
                    <li><a href="dl.php">Deep Learning </a></li>
                  </ul>
                </div>
              </div>

              <br><br><br><br>
              
              <div class="widget">
                <h4 class="widget-title line-bottom">Course Syllabus</h4>
                <div class="opening-hours">
                  <ul class="list-border">
                    <li class="clearfix"> <span> JVM Architecture  </span>
                    </li>
                    <li class="clearfix"> <span> Classes & Objects in Java </span>
                    </li>
                    <li class="clearfix"> <span> Data Types & Variables </span>
                    </li>
                    <li class="clearfix"> <span> Functions & Packages </span>
                    </li>
                    <li class="clearfix"> <span></span>
                      <div class="value pull-right"><span class="text-theme-color-2"> & Many more...</span></div>
                    </li>
                    <li class="clearfix"> <span> Duration of Course : </span>
                      <div class="value pull-right">  6 Months </div>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
<section id="foot">
  <?php include_once('footer.php'); ?>
</section>
</div>

</body>

</html>