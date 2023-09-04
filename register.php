<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = md5($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);
   $id = $_POST['id'];
   $id = strtoupper($id); // Convert ID to uppercase
   $id = preg_replace("/[^A-Z]/", "", $id); // Remove non-alphabetic characters from ID
   $id .= "MG"; // Append "MG" at the end of ID

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select->execute([$email]);

   if($select->rowCount() > 0){
      $message[] = 'User email already exists!';
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm password does not match!';
      }else{
         $insert = $conn->prepare("INSERT INTO `users`(name, email, password, id) VALUES(?,?,?,?)");
         $insert->execute([$name, $email, $pass, $id]);

         if($insert){
            $message[] = 'Registered successfully!';
            header('location: login.php');
         } else {
            $message[] = 'Registration failed!';
         }
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Get into the world of Migraily</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/components.css">

   <style>
       body{
         background-image: url('project images/Untitled design (5).png');
      }
      h3{
         font-family:fantasy;
      }
   </style>
</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
   
<section class="form-container">

   <form action="" method="POST">
      <h3>LET'S START THE JOURNEY OF MIGRAILY</h3>
      <input type="text" name="name" class="box" placeholder="Enter your name" required>
      <input type="email" name="email" class="box" placeholder="Enter your email" required>
      <input type="password" name="pass" class="box" placeholder="Enter your password" required>
      <input type="password" name="cpass" class="box" placeholder="Confirm your password" required>
      <input type="text" name="id" class="box" placeholder="Enter your ID" required>
      
      <input type="submit" style="background-color:#f1c40f ; color: black; "  value="Register now" class="btn" name="submit">
      <p>Already have an account? <a href="login.php">Login now</a></p>
   </form>

</section>


</body>
</html>

