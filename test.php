<?php
// login.php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'] ?? '';
  $pass  = $_POST['password'] ?? '';
  if ($email === 'demo@example.com' && $pass === 'secret') {
    session_regenerate_id(true);
    $_SESSION['user'] = ['id' => 42, 'email' => $email];
    header('Location: dashboard.php');
    exit;
  }
}
