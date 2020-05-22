<?php
    require 'config.php';

    if(isset($_SESSION['student']))
    {
        $username=$_SESSION['student'];      
    }
    $course=$_GET['course'];
    $name="";
    $email="";
    $dob="";
    $courses="";

    $query=mysqli_query($con,"SELECT * FROM tblstudent WHERE name='$username'");
    $row=mysqli_fetch_array($query);
    //$id=$row['id'];
    /*$check=mysqli_query($con,"SELECT * FROM staff WHERE studentid='$stuid'");
    $row2=mysqli_fetch_array($check);
    $completed=explode(",", $row['completed']);*/


    if(isset($_POST['done']))
    {
    	//echo '<script> document.getElementById("b1").style.visibility = "hidden"; </script>';
    	$id=$_POST['id'];
    	$cname=strip_tags($_POST['cours']);
    	$yes=array();
    	if($_POST['b1']=='Yes')
    		array_push($yes, $_POST['b1']);
    	if($_POST['b2']=='Yes')
    		array_push($yes, $_POST['b2']);
    	if($_POST['b3']=='Yes')
    		array_push($yes, $_POST['b3']);
    	if($_POST['b4']=='Yes')
    		array_push($yes, $_POST['b4']);
    	if($_POST['b5']=='Yes')
    		array_push($yes, $_POST['b5']);
    	//echo '<script> alert('.$id.'); </script>';
    	$num=count($yes);
    	if($num!=0)
        {
        	$query=mysqli_query($con,"UPDATE tblapplied SET Progress=$num*20 WHERE Subject='$cname' AND StudentId=$id");
            //header("Location : student.php");
        }
        else
        	echo '<script> alert("Please select status of Books"); </script>';
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Course </title>
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
        <a href="student.php"><button class="btn btn-info" type="button">< Go Back</button></a>
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
            <h2 class="text-uppercase text-center text-secondary"><?php echo $course; ?></h2>
            <hr class="star-dark mb-5">
            <form method="POST">
            <input type="hidden" name="id" value='<?php echo $row['ID']; ?>'>
            <input type="text" name="cours" value='<?php echo $course ?>' style="visibility: hidden;">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto" href="resources/cc.pdf">
                        <div class="d-flex">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="resources/pdf.png" width="400px" height="350px">
                        <h5 align="center">Book 1</h5>
                    </a>
                        <center> 
                        	<label class="text-uppercase text-center text-secondary"> Have you read this book </label> 
                        	<select name="b1" class="form-control">
                        		<option value=""> -Select Status- </option>
                        		<option value="Yes"> Yes </option>
                        		<option value="No"> No </option>
                        	</select> 
                    	</center>
                </div>
                
            	<div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto" href="resources/se.pdf">
                        <div class="d-flex">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="resources/pdf.png" width="400px" height="350px">
                        <h5 align="center">Book 2</h5>
                    </a>
                    <center> 
                        	<label class="text-uppercase text-center text-secondary"> Have you read this book </label> 
                        	<select name="b2" class="form-control">
                        		<option value=""> -Select Status- </option>
                        		<option value="Yes"> Yes </option>
                        		<option value="No"> No </option>
                        	</select> 
                    </center>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto" href="resources/df.pdf">
                        <div class="d-flex">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="resources/pdf.png" width="400px" height="350px">
                        <h5 align="center">Book 3</h5>
                    </a>
                    <center> 
                        	<label class="text-uppercase text-center text-secondary"> Have you read this book </label> 
                        	<select name="b3" class="form-control">
                        		<option value=""> -Select Status- </option>
                        		<option value="Yes"> Yes </option>
                        		<option value="No"> No </option>
                        	</select> 
                    </center>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto" href="resources/dmbi.pdf">
                        <div class="d-flex">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="resources/pdf.png" width="400px" height="350px">
                        <h5 align="center">Book 4</h5>
                    </a>
                    <center> 
                        	<label class="text-uppercase text-center text-secondary"> Have you read this book </label> 
                        	<select name="b4" class="form-control">
                        		<option value=""> -Select Status- </option>
                        		<option value="Yes"> Yes </option>
                        		<option value="No"> No </option>
                        	</select> 
                    </center>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto" href="resources/wn.pdf">
                        <div class="d-flex">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i
                                    class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="resources/pdf.png" width="400px" height="350px">
                        <h5 align="center">Book 5</h5>
                    </a>
                    <center> 
                        	<label class="text-uppercase text-center text-secondary"> Have you read this book </label> 
                        	<select name="b5" class="form-control">
                        		<option value=""> -Select Status- </option>
                        		<option value="Yes"> Yes </option>
                        		<option value="No"> No </option>
                        	</select> 
                    </center>
                </div>

                <div class="col-md-6 col-lg-4">
                    
                </div>
                <div class="col-md-6 col-lg-4">
                    
                </div>
                <div class="col-md-6 col-lg-4">
                	<br><br>
                	<center> <input type="submit" name="done" class="btn btn-primary btn-lg" value="Update Course"> </center> 
                	   
                </div>
                <div class="col-md-6 col-lg-4">
                    
                </div>
        </div>
    </div>
</form>
</section>
</body>

</html>