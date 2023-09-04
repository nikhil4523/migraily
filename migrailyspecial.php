<?php
@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location: login.php');
}

// Check if the user_type is not "admin" and redirect to subscription.php
if ($_SESSION['user_type'] !== 'admin') {
   header('location: subscription.php');
   exit; // Exit to prevent further execution
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_users = $conn->prepare("DELETE FROM `users` WHERE id = ?");
   $delete_users->execute([$delete_id]);
   header('location: admin_users.php');
}
?>