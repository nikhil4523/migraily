<?php

@include 'config2.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($admin_id)){
   header('location:subcription.php');
};

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_message = $conn->prepare("DELETE FROM `message` WHERE id = ?");
   $delete_message->execute([$delete_id]);
   header('location:admin_contacts.php');

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>We Are Available</title>
  <style>

    body {
      color: #000000; /* Change the text color as desired */
      font-family: Verdana, Geneva, Tahoma, sans-serif; /* Change the font family as desired */
      background-color: #000000; /* Set background color to black */
    }
    
    h1 {
      color: #000000; /* Change the text color to white */
      font-family: Helvetica, sans-serif; /* Change the font family as desired */
    }
    
    .city-list li {
      color: #000000; /* Change the text color as desired */
      font-family: Verdana, sans-serif; /* Change the font family as desired */
    }

    header {
      position: sticky;
      top: 0;
      background-color: #08BD80; /* Set header background color to #08BD80 */
      padding: 20px;
      text-align: center;
      z-index: 100;
    }

    h1 {
      font-size: 24px;
      margin: 0;
    }

    .city-list {
      list-style: none;
      padding: 0;
      margin: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .city-list li {
      width: 200px;
      margin: 10px;
      padding: 10px;
      background-color: #08BD80;
      border-radius: 5px;
      text-align: center;
      cursor: pointer;
      position: relative;
    }

    .city-list li::before {
      content: "";
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      transform: translateY(-50%);
      background-color: #08BD80; /* Set the header line color to white */
      height: 2px;
    }

    .city-list li h3 {
      margin: 0;
      position: relative;
      z-index: 1;
    }
  </style>
  <script>
    function goToNewPage(url) {
      window.location.href = url;
    }
  </script>
</head>
<body>
  <header>
    <h1>Which magical part are u interested in?</h1>
  </header>

  <ul class="city-list">
    <li onclick="goToNewPage('Ghodhbunder.html')">
      <h3>Kapurbawdi</h3>
    </li>
    <li onclick="goToNewPage('Manpada.html')">
      <h3>Manpada</h3>
    </li>
  </ul>
  <ul class="city-list">
    <li onclick="goToNewPage('Patlipada.html')">
      <h3>Patlipada</h3>
    </li>
    <li onclick="goToNewPage('Waghbil.html')">
      <h3>Waghbil</h3>
    </li>
    <!-- Add more city items as needed -->
  </ul>
  <ul class="city-list">
    <li onclick="goToNewPage('Bata company.html')">
      <h3>Batata company</h3>
    </li>
    <li onclick="goToNewPage('Muchalla colony.html')">
      <h3>Muchalla colony</h3>
    </li>
  </ul>
  <ul class="city-list">
    <li onclick="goToNewPage('Anand Nagar.html')">
      <h3>Anand NAGAR</h3>
    </li>
    <li onclick="goToNewPage('Sainath nagar.html')">
      <h3>Sainath nagar</h3>
    </li>
  </ul>
  <ul class="city-list">
    <li onclick="goToNewPage('Kasarvadali.html')">
      <h3>Kasarvadali</h3>
    </li>
    <li onclick="goToNewPage('Owale.html')">
      <h3>Owale</h3>
    </li>
  </ul>
</body>
</html>
