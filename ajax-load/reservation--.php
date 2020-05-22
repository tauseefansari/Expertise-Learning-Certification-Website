<?php


  include('../academy_admin/source/config.php');
  
  try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  } catch(PDOException $e){
    
   die($e->getMessage());
  } 
  ?>
<?php
  header('Content-type: application/json');
  
  $response = array();

  if ($_POST) {
    
    $name = trim($_POST['reservation_name']);
    $email = trim($_POST['reservation_email']);
    $phone = trim($_POST['reservation_phone']);
    $date = trim($_POST['reservation_date']);
    $course= trim($_POST['car_select']);
    
    $full_name = strip_tags($name);
    $user_email = strip_tags($email);
    $user_phone = strip_tags($phone);
    $user_course = strip_tags($course);
    $user_date = strip_tags($date);

    
    // sha256 password hashing
    // $hashed_password = hash('sha256', $user_pass);
    
    $query = "INSERT INTO register_online(name,email,phone,course,date,update_date) VALUES(:name, :email, :phone, :course, :date, now())";
    
    $stmt = $conn->prepare( $query );
    $stmt->bindParam(':name', $full_name);
    $stmt->bindParam(':email', $user_email);
    $stmt->bindParam(':phone', $user_phone);
    $stmt->bindParam(':course', $user_course);
    $stmt->bindParam(':date', $user_date);

    
    // check for successfull registration
        if ( $stmt->execute() ) {
      $response['status'] = 'success';
      $response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; registered sucessfully, will contact you as soon as possible';
      
        } else {
            $response['status'] = 'error'; // could not register
      $response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; could not register, try again later';
        } 
  }
  
  echo json_encode($response);
  