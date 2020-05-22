<?php
    require 'config.php';

    $stuid=1;
    $name="";
    $email="";
    $dob="";
    $course="";
    $paymentpaid="";
    $rem="";

    $query=mysqli_query($con,"SELECT * FROM students where id='$stuid'");
    $row=mysqli_fetch_array($query);
    $check=mysqli_query($con,"SELECT * FROM staff WHERE studentid='$stuid'");
    $row2=mysqli_fetch_array($check);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almendra+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amarante">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth">
    <style>
        .img-fluid,
        .img-thumbnail {
            max-width: 350px;
            height: 200px;
        }
    </style>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"
                style="font-size: 22px;font-family: Aleo, serif;">EXPERTISE &nbsp;LEARNING</a><button
                class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded"
                data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto"></ul><button class="btn btn-primary" type="button">SignOut</button>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container"><img class="img-fluid d-block mx-auto mb-5" src="assets/img/profile.png">
            <h1>Student Name</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0">Online Courses</h2>
        </div>
    </header>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">Ongoing Courses</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-1" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/ai.png" width="400px" height="350px">
                        <h5>Artificial Intelligence (AI)</h5>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-2" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/machine.png">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-3" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/android.png">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-4" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/deeplearning.png" width="350px" height="200px" ;>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-5" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/c.png">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-6" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/python.png">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">Completed Courses</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-1" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/ai.png" width="400px" height="350px">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-2" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/machine.png">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-3" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/android.png">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-4" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/deeplearning.png" width="350px" height="200px">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-5" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/c.png">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-6" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/python.png">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Student Information</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">

                    <form id="contactForm" name="sentMessage" novalidate="novalidate"></form>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Student Name</label><input class="form-control" type="text" required=""
                                placeholder="Student Name" id="name" value="<?php echo $row['name']; ?>"><small
                                class="form-text text-danger help-block"></small>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email</label><input class="form-control" value="<?php echo $row['email']; ?>" type="text" required="" placeholder="Email" id="Email"><small class="form-text text-danger help-block"></small>
                        </div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Date Of Birth</label><input class="form-control" value="<?php echo $row['dateofbirth']; ?>" type="text" required=""
                                    placeholder="Date Of Birth" id="name"><small
                                    class="form-text text-danger help-block"></small>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Courses</label><input class="form-control" value="<?php echo $row['courses']; ?>" type="text" required=""
                                    placeholder="Courses" id="Courses"><small
                                    class="form-text text-danger help-block"></small></div>
                        </div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Payment Paid</label><input class="form-control" value="<?php echo $row2['amountpaid']; ?>" type="text" required="" readonly
                                    placeholder="Payment Paid" id="name"><small
                                    class="form-text text-danger help-block"></small>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Remaining Payment</label><input class="form-control" value="<?php echo $row2['paymentrem']; ?>" type="text" required=""
                                    readonly placeholder="Remaining Payment" id="name"><small
                                    class="form-text text-danger help-block"></small>
                            </div>
                        </div>
                        <div id="success"></div>
                        <div class="form-group"><button class="btn btn-primary btn-xl" type="reset"
                                id="sendMessageButton">Update Details</button></div>
                        </form>
                    </div>
                </div>
            </div>
    </section>

</body>

</html>