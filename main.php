<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$psw_repeat = $_POST['psw_repeat'];
$gender = $_POST['gender'];


if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($psw) || !empty($psw_repeat) || !empty($gender)) {
  // code...
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "youtube";


  // create a connection
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

   if (mysqli_connect_error()) {
     die('connect Error(' . mysqli_connect_error().')'. mysqli_connect_error());
     // code...
   }else {
      $SELECT = "SELECT email From register where email = ? Limit 1";
      $INSERT = "INSERT Into register (firstname, lastname, email, psw, psw_repeat, gender) values(?, ?, ?, ?, ?, ?)";

     //prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->blind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     if ($rnum==0){
       $stmt->close();


       $stmt = $conn->prepare($INSERT);
       $stmt->blind_param("ssssss", $firstname, $lastname, $email, $psw, $psw_repeat, $gender);
       $stmt->execute();
       echo "New record inserted successfully";
     }else {
       echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
   }



} else {
  echo "ALL are Must required"
}



 ?>
