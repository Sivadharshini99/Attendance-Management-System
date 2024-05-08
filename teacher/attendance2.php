<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: login.php');
}
?>

<?php
    include('connect.php');
    try{
      
    if(isset($_POST['att'])){

      $class = $_POST['whichclass'];

      foreach ($_POST['st_status'] as $i => $st_status) {
        
        //$st_id = $_POST['st_id'][$i];
        //$stat_id = $_POST['st_id'][$i];
         $stat_id = $_POST['stat_id'][$i];
        $dp = date('Y-m-d');
        $class = $_POST['whichclass'];
        
        //$stat = mysql_query("insert into attendance(st_id,class,st_status,stat_date) values('$stat_id','$class','$st_status','$dp')");
        $stat = mysql_query("insert into attendance(stat_id,class,st_status,stat_date) values('$stat_id','$class','$st_status','$dp')");
        $att_msg = "Attendance Recorded.";

      }



    }
  }
  catch(Execption $e){
    $error_msg = $e->$getMessage();
  }
 ?>

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


<style type="text/css">
  .status{
    font-size: 10px;
  }

</style>

</head>
<body>

<header>

  <h1>Attendance Management System</h1>
  <div class="navbar">
  <a href="index.php" style="text-decoration:none;">Home</a>
 <!-- <a href="students.php" style="text-decoration:none;">Students</a>
  <a href="teachers.php" style="text-decoration:none;">Faculties</a>
  <a href="attendance.php" style="text-decoration:none;">Attendance</a>
  <a href="report.php" style="text-decoration:none;">Report</a>-->
  <a href="../logout.php" style="text-decoration:none;">Logout</a>

</div>

</header>

<center>

<div class="row">

  <div class="content">
    <h3>Attendance of <?php echo date('Y-m-d'); ?></h3>
    <br>

    <center><p><?php if(isset($att_msg)) echo $att_msg; if(isset($error_msg)) echo $error_msg; ?></p></center> 
    
    <form action="" method="post" class="form-horizontal col-md-6 col-md-offset-3">

     <div class="form-group">

               <!-- <label>Select Batch</label>
                
                <select name="whichbatch" id="input1">
                      <option name="eight" value="38">38</option>
                      <option name="seven" value="37">37</option>
                </select>-->


                <label>Enter class</label>
                <input type="text" name="enterclass" id="input2" placeholder="ex.11B">
              </div>
               
     <input type="submit" class="btn btn-danger col-md-2 col-md-offset-5" style="border-radius:0%" value="Search" name="batch" />

    </form>

    <div class="content"></div>
    <form action="" method="post">

      <div class="form-group">

        <label >Select Class</label>
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

      <!--</div>
      <input type="submit" class="btn btn-danger col-md-2 col-md-offset-5" style="border-radius:0%" value="Search" name="batch" />-->

    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">Reg. No.</th>
          <th scope="col">Name</th>
          <th scope="col">Class</th>
          <th scope="col">Email</th>
          <th scope="col">Status</th>
          
        </tr>
      </thead>
   <?php

    if(isset($_POST['batch'])){

     $i=0;
     $radio = 0;
     $batch = $_POST['enterclass'];
     //$batch = $_POST['whichclass'];
     $all_query = mysql_query("select * from students where students.st_cls = '$batch' order by st_id asc");

     while ($data = mysql_fetch_array($all_query)) {
       $i++;
     ?>
  <body>
     <tr>
       <td><?php echo $data['st_id']; ?> <input type="hidden" name="stat_id[]" value="<?php echo $data['st_id']; ?>"> </td>
       <td><?php echo $data['st_name']; ?></td>
       <td><?php echo $data['st_cls']; ?></td>
       <td><?php echo $data['st_email']; ?></td>
       <td>
         <label>Present</label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Present" >
         <label>Absent </label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Absent" checked>
       </td>
     </tr>
  </body>

     <?php

        $radio++;
      } 
}
      ?>
    </table>

    <center><br>
    <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Save!" name="att" />
  </center>

</form>
  </div>

</div>

</center>

</body>
</html>
