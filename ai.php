<?php 
 
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>


<!-- Page Title -->
<title>Artificial Intelligence (AI)</title>

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
              <img src="images/Courses/ai.png" alt="AI">
                <h3 class="text-theme-colored">Artificial Intelligence (AI)</h3>
              <h5><em><span class="text-theme-color-2">Artificial Intelligence (AI)</span> <br></em></h5>
                <p class="more"><span class="text-theme-color-2">Artificial Intelligence (AI) </span>  refers to the simulation of human intelligence in machines that are programmed to think like humans and mimic their actions. The term may also be applied to any machine that exhibits traits associated with a human mind such as learning and problem-solving.
                The ideal characteristic of artificial intelligence is its ability to rationalize and take actions that have the best chance of achieving a specific goal. <br>
              <span class="text-theme-color-2"> </span> <br>
                Artificial intelligence is based on the principle that human intelligence can be defined in a way that a machine can easily mimic it and execute tasks, from the most simple to those that are even more complex. The goals of artificial intelligence include learning, reasoning, and perception.
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
                      <p>1. To have an appreciation for and understanding of both the achievements of AI and the theory underlying those achievements. <br>
                        2. To have an appreciation for the engineering issues underlying the design of AI systems. <br>
                        3. To have a basic proficiency in a traditional AI language including an ability to write simple to intermediate programs and an ability to understand code written in that language. <br>
                        4. To have an understanding of the basic issues of knowledge representation and blind and heuristic search, as well as an understanding of other topics such as minimax, resolution, etc. that play an important role in AI programs. <br>
                        5. To have a basic understanding of some of the more advanced topics of AI such as learning, natural language processing, agents and robotics, expert systems, and planning.<br></p>
                    </div>
                    <div class="tab-pane fade" id="profile2">
                      <p>Artificial intelligence is the science that studies and develops methods of making computers more /intelligent/. The focus of this course is on AI fundamental, AI techniques for knowledge representation, search, reasoning, learning and designing intelligent agents.</p>
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
                    <li class="active"><a href="#">Artificial Intelligence (AI) </a></li>
                    <li><a href="ml.php">Machine Learning (ML) </a></li>
                    <li><a href="python.php">Python Programming </a></li>
                    <li><a href="java.php">Java Programming </a></li>
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
                    <li class="clearfix"> <span> Predicate Calculus  </span>
                    </li>
                    <li class="clearfix"> <span> Predicate & Atomic Sentences </span>
                    </li>
                    <li class="clearfix"> <span> State Space Search </span>
                    </li>
                    <li class="clearfix"> <span> Design and Implement Search Algorithms </span>
                    </li>
                    <li class="clearfix"> <span></span>
                      <div class="value pull-right"><span class="text-theme-color-2"> & Many more...</span></div>
                    </li>
                    <li class="clearfix"> <span> Duration of Course : </span>
                      <div class="value pull-right">  12 Months </div>
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