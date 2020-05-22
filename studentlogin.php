<?php 
  require 'config.php';

  if(isset($_SESSION['username']))
  {
    header("Location : student.php");
  }

    $username="";
    $password="";
    
    if(isset($_POST['login']))
    {
      $username=strip_tags($_POST['uname']);
      $password=strip_tags($_POST['pass']);
      $check_database_query=mysqli_query($con,"SELECT * FROM tblstudent WHERE email='$username' AND pass='$password'");
      if(mysqli_num_rows($check_database_query) == 1)
      {
        $row=mysqli_fetch_array($check_database_query);
        $name=$row['Name'];
        //$username=$row['name'];
        $_SESSION['student']=$name;
        header("Location: student.php");
        //exit();
      }
      else
      {
        echo '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong> Username or Password is incorrect!</div>';
      }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login to Expertise Learning</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>  
	<div class="row">
		<div class="col-md-12 text-center">
			<a href="index.php"><img src="images/logo.jpg" alt="Expertise Studies Logo" style="max-height:74px !important;"></a>
			<h4><i>Welcome to Expertise Learning</i></h4>
		</div>
	</div>
<div class="pen-title">
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Student Login</h1>
    <form method="post">
      <div class="input-container">
        <input type="#{type}" id="#{label}" name="uname" required="required"/>
        <label for="#{label}">Student E-mail</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" name="pass" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button name="login"><span>Go</span></button>
      </div>
    </form>
  </div>
  </div>
</div>

</body>
</html>