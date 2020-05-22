<?php
if(isset($_POST['reservation_email'])) {
    $email = $_POST['reservation_email'];
    $query = $conn->prepare("SELECT email FROM register_online WHERE email = ?");
    $query->execute(array($email));
    $rows = $query->fetchAll();
    $num_rows = count($rows);
    if( $num_rows > 0 ){
        echo 'true - email exists';
    } else {
        echo 'false - email does not exist';
    }
}

?>