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

<!-- head started -->
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
<!-- head ended -->

<!-- body started -->
<body>

<!-- Menus started-->
<header>

  <h1>Attendance Management System</h1>
  <div class="navbar">
  <a href="index.php" style="text-decoration:none;">Home</a>
  <a href="report.php" style="text-decoration:none;">Individual Report</a>
  <a href="massreport.php" style="text-decoration:none;">Mass Report</a>
  <a href="../logout.php" style="text-decoration:none;">Logout</a>

</div>

</header>
<!-- Menus ended -->

<center>

<!-- Content, Tables, Forms, Texts, Images started -->
<div class="row">

  <div class="content">
    <h3>Student Report</h3>
    <br>
    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">

  <div class="form-group">

    <label  for="input1" class="col-sm-3 control-label">Select Class</label>
      <div class="col-sm-4">
      <select name="whichclass" id="input1">
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
      </div>

  </div>


          <div class="form-group">
           <label for="input1" class="col-sm-3 control-label">Your Reg. No.</label>
              <div class="col-sm-7">
                  <input type="text" name="sr_id"  class="form-control" id="input1" placeholder="enter your reg. no." />
              </div>
        </div>
        <input type="submit" class="btn btn-danger col-md-3 col-md-offset-7" style="border-radius:0%" value="Find" name="sr_btn" />
    </form>

    <div class="content"><br></div>

    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
    <table class="table table-striped">

   <?php

    //checking the form for ID
    if(isset($_POST['sr_btn'])){

    //initializing ID 
     $sr_id = $_POST['sr_id'];
      $class = $_POST['whichclass'];

     $i=0;
     $count_pre = 0;
     

 $all_query = mysql_query("select stat_id,count(*) as countP from attendance where attendance.stat_id='$sr_id' and attendance.class = '$class' and attendance.st_status='Present'");
     $singleT= mysql_query("select count(*) as countT from attendance where attendance.stat_id='$sr_id' and attendance.class = '$class'");

     $count_tot;
     if ($row=mysql_fetch_row($singleT))
     {
     $count_tot=$row[0];
     }

     while ($data = mysql_fetch_array($all_query)) {
       $i++;
      
       if($i <= 1){
     ?>
        

     <tbody>
      <tr>
          <td>Register No.: </td>
          <td><?php echo $data['stat_id']; ?></td>
      </tr>

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
<!-- Contents, Tables, Forms, Images ended -->

</center>

</body>


</html>
