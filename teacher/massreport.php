<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: login.php');
}
?>
<?php include('connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<header>

  <h1>Attendance Management System</h1>
  <div class="navbar">
  <a href="index.php" style="text-decoration:none;">Home</a>
 <!-- <a href="students.php" style="text-decoration:none;">Students</a>
  <a href="teachers.php" style="text-decoration:none;">Faculties</a>
  <a href="attendance.php" style="text-decoration:none;">Attendance</a>-->
    <a href="report.php" style="text-decoration:none;">Individual Report</a>
  <a href="massreport.php" style="text-decoration:none;">Mass Report</a>
  <a href="../logout.php" style="text-decoration:none;">Logout</a>

</div>

</header>

<center>

<div class="row">

  <div class="content">
  
    <h3>Mass Report</h3>

    <form method="post" action="">


    <label>Select Class</label>
    <select name="whichclass">

        <option  value="1A">1A Grade</option>
        <option  value="1B">1B Grade</option>
        <option  value="1C">1C Grade</option>
        <option   value="2A">2A  Grade</option>
        <option   value="2B">2B  Grade</option>
        <option   value="2C">2C  Grade</option>
        <option   value="3A">3A  Grade</option>
        <option   value="3B">3B  Grade</option>
        <option   value="3C">3C  Grade</option>
        <option   value="4A">4A  Grade</option>
        <option   value="4B">4B  Grade</option>
        <option   value="4C">4C  Grade</option>
        <option   value="5A">5A  Grade</option>
        <option   value="5B">5B  Grade</option>
        <option   value="5C">5C  Grade</option>
        <option   value="6A">6A  Grade</option>
        <option   value="6B">6B  Grade</option>
        <option   value="6C">6C  Grade</option>
        <option   value="7A">7A  Grade</option>
        <option   value="7B">7B  Grade</option>
        <option   value="7C">7C  Grade</option>
        <option   value="8A">8A  Grade</option>
        <option   value="8B">8B  Grade</option>
        <option   value="8C">8C  Grade</option>
        <option   value="9A">9A  Grade</option>
        <option   value="9B">9B  Grade</option>
        <option   value="9C">9C  Grade</option>
        <option  value="10A">10A Grade</option>
        <option  value="10B">10B Grade</option>
        <option  value="10C">10C Grade</option>
        <option  value="11A">11A Grade</option>
        <option  value="11B">11B Grade</option>
        <option  value="11C">11C Grade</option>
        <option  value="12A">12A Grade</option>
        <option  value="12B">12B Grade</option>
        <option  value="12C">12C Grade</option>

   </select>


    <p>  </p>
      <label>Date ( yyyy-mm-dd )</label>
      <input type="text" name="date">
      <input type="submit" name="sr_date" class="btn btn-danger " style="border-radius:0%" value="Go!" >
    </form>

    <br>

    <br>

<?php
   
    if(isset($_POST['sr_date'])){

     $sdate = $_POST['date'];
     $class = $_POST['whichclass'];

     $all_query = mysql_query("select * from attendance where attendance.stat_date='$sdate' and attendance.class = '$class'");

    }
    if(isset($_POST['sr_date'])){

      ?>

    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">Reg. No.</th>
          <!--<th scope="col">Name</th>-->
          <th scope="col">class</th>
          <th scope="col">Date</th>
          <th scope="col">Attendance Status</th>
        </tr>
     </thead>


    <?php

     $i=0;
     while ($data = mysql_fetch_array($all_query)) {

       $i++;

     ?>
        <tbody>
           <tr>
             <td><?php echo $data['stat_id']; ?></td>
             <!--<td><?php echo $data['st_name']; ?></td>-->
             <td><?php echo $data['class']; ?></td>
             <td><?php echo $data['stat_date']; ?></td>
             <td><?php echo $data['st_status']; ?></td>
           </tr>
        </tbody>

     <?php 
   } 
  }
     ?>
     
    </table>


    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
    <table class="table table-striped">

    <?php


    if(isset($_POST['sr_btn'])){

       $count_pre = 0;
       $i= 0;
       $count_tot;
       if ($row=mysql_fetch_row($singleT))
       {
       $count_tot=$row[0];
       }
       while ($data = mysql_fetch_array($single)) {
       $i++;
       
       if($i <= 1){
     ?>


     <tbody>
      <tr>
          <td>Student Reg. No: </td>
          <td><?php echo $data['stat_id']; ?></td>
      </tr>

           <?php
         //}
        
        // }

      ?>
      
      <tr>
        <td>Total Class (Days): </td>
        <td><?php echo $count_tot; ?> </td>
      </tr>

      <tr>
        <td>Present (Days): </td>
        <td><?php echo $data[1]; ?> </td>
      </tr>

      <tr>
        <td>Absent (Days): </td>
        <td><?php echo $count_tot -  $data[1]; ?> </td>
      </tr>

        <tr>
        <td>Totalpercentage (Days): </td>
        <td><?php echo $count_tot * $data[1]; ?> </td>
      </tr>

    </tbody>

   <?php

     }  
    }}
     ?>
    </table>
  </form>

  </div>

</div>

</center>

</body>
</html>
