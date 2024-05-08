<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>

<header>

  <h1>Attendance Management System</h1>
  <div class="navbar">
  <a href="index.php" style="text-decoration:none;">Home</a>
  <a href="addstudents.php" style="text-decoration:none;">Add Students</a>
  <a href="account.php" style="text-decoration:none;">Student Account</a> 
  <a href="students.php" style="text-decoration:none;">Students</a>
  <a href="attendance.php" style="text-decoration:none;">Attendance</a>
  <a href="report.php" style="text-decoration:none;">Report</a>
  <a href="../logout.php" style="text-decoration:none;">Logout</a>

</div>

</header>

<center>
<font size=40>
<div class="row">
    <div class="content">
      <br>
   <img src="../img/teacher.jpg" width="400px" />


  </div>

</div>

</center>

</body>
</html>
