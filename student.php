<?php
    require 'config.php';

    if(isset($_SESSION['student']))
    {
        $username=$_SESSION['student'];    
    }

    
    //$_SESSION['username']=$username;
    $name="";
    $email="";
    $dob="";
    $courses="";

    $query=mysqli_query($con,"SELECT * FROM tblstudent WHERE name='$username'");
    $row=mysqli_fetch_array($query);
    /*$check=mysqli_query($con,"SELECT * FROM staff WHERE studentid='$stuid'");
    $row2=mysqli_fetch_array($check);
    $completed=explode(",", $row['completed']);*/


    if(isset($_POST['update']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $doj=$_POST['doj'];
        $add=$_POST['address'];
        $mobile=$_POST['mobile'];

        $query=mysqli_query($con,"UPDATE tblstudent SET email='$email',joiningdate='$doj',address='$add',MobileNumber='$mobile' WHERE name='$name'");
        header('Location: '.$_SERVER['REQUEST_URI']);
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student</title>
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
                style="font-size: 22px;font-family: Aleo, serif;">EXPERTISE &nbsp;LEARNING</a>
                <a href="logout.php"><button class="btn btn-primary" type="button">SignOut</button></a>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container"><img class="img-fluid d-block mx-auto mb-5" src="<?php echo $row['Picture']; ?>" style="width: 300px;border-radius: 166px;height: 300px;">
            <h1><?php echo $row['Name']; ?></h1>
            <hr class="star-light">
        </div>
    </header>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">Ongoing Courses</h2>
            <hr class="star-dark mb-5">
            <div class="row">
            	<?php 
            		$querycourse=mysqli_query($con,"SELECT * FROM tblapplied INNER JOIN tblsubjects ON tblapplied.Subject=tblsubjects.Subject WHERE StudentId = (SELECT ID FROM tblstudent WHERE Name='$username') AND Progress < 100");
            		while($res=mysqli_fetch_array($querycourse))
            		{
            			echo '<div class="col-md-6 col-lg-4">
                    		<a class="d-block mx-auto" href="course.php?course='.$res['Subject'].'">
                        	<div class="d-flex">
                           	 <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        	</div><img class="img-fluid" src="admin/admin/images/course/'.$res['Picture'].'" width="400px" height="350px">
                        	<h5>'.$res['Subject'].'</h5>
                        	<div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:'.$res['Progress'].'%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        	</div>
                    		</a>
                			</div>';
                	}
            	?>
                <!--<div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-1" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/ai.png" width="400px" height="350px">
                        <h5>Artificial Intelligence (AI) </h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php //echo $completed[0]; ?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-2" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/machine.png">
                         <h5>Machine Learning (ML)</h5>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php //echo $completed[1]; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-3" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/android.png">
                         <h5>Android Development</h5>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php //echo $completed[2]; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-4" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/deeplearning.png" width="350px" height="200px" ;>
                         <h5>Deep Learning</h5>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-5" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/c.png">
                         <h5>C Programming</h5>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-6" data-toggle="modal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="images/course-logo/python.png">
                         <h5>Python Programming</h5>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>-->
    </section>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">Completed Courses</h2>
            <hr class="star-dark mb-5">
            <div class="row">
            	<?php 
            		$querycourse=mysqli_query($con,"SELECT * FROM tblapplied INNER JOIN tblsubjects ON tblapplied.Subject=tblsubjects.Subject WHERE StudentId = (SELECT ID FROM tblstudent WHERE Name='$username') AND Progress >= 100");
            		while($res=mysqli_fetch_array($querycourse))
            		{
            			echo '<div class="col-md-6 col-lg-4">
                    		<a class="d-block mx-auto portfolio-item" href="certificate.php?id='.$res['StudentId'].'&course='.$res['Subject'].'">
                        	<div class="d-flex">
                           	 <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        	</div><img class="img-fluid" src="admin/admin/images/course/'.$res['Picture'].'" width="400px" height="350px">
                        	<h5>'.$res['Subject'].'</h5>
                        	<div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:'.$res['Progress'].'%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        	</div>
                    		</a>
                			</div>';
                	}
            	?>

                <!--<div class="col-md-6 col-lg-4">
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
        </div>-->
    </section>
    <section id="contact">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Student Information</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form method="post">
                    <div class="control-group">
                        <label>Full Name</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <input class="form-control" type="text" required="" name="name" value="<?php echo $row['Name']; ?>" readonly><small
                                class="form-text text-danger help-block"></small>
                        </div>
                    </div>
                    <div class="control-group">
                        <label>E-Mail</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <input class="form-control" value="<?php echo $row['Email']; ?>" type="text" required="" name="email" id="Email"><small class="form-text text-danger help-block"></small>
                        </div>

                        <div class="control-group">
                        <label>Address</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <input class="form-control" value="<?php echo $row['Address']; ?>" type="text" required="" name="address" id="address"><small class="form-text text-danger help-block"></small>
                        </div>

                        <div class="control-group">
                            <label>Date of Joining</label>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <input class="form-control" name="doj" value="<?php echo $row['joiningdate']; ?>" type="text" required="" id="name"><small
                                    class="form-text text-danger help-block"></small>
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Courses</label>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <input class="form-control" value="<?php echo $row['StudCourse']; ?>" name="courses" type="text" readonly required="" id="Courses"><small
                                    class="form-text text-danger help-block"></small></div>
                        </div>

                        <div class="control-group">
                            <label>Mobile </label>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <input class="form-control" value="<?php echo $row['MobileNumber']; ?>" type="text" required="" id="name" name="mobile"><small class="form-text text-danger help-block"></small>
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Qualifications </label>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <input class="form-control" value="<?php echo $row['Qualifications']; ?>" type="text" required=""
                                    readonly id="name"><small
                                    class="form-text text-danger help-block"></small>
                            </div>
                        </div>
                        <div id="success"></div>
                        <div class="form-group"><button class="btn btn-primary btn-xl" type="submit"
                                id="sendMessageButton" name="update">Update Details</button></div>
                        </form>
                    </div>
                </div>
            </div>
    </section>

</body>

</html>