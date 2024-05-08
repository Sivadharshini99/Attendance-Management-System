  <?php

  ob_start();
  session_start();

  //checking if the session is valid
  if($_SESSION['name']!='oasis')
  {
    header('location: ../login.php');
  }
  ?>

  <?php include('connect.php');?>


<?php 
try{

         //checking form data and empty fields
          if(isset($_POST['done'])){

          if (empty($_POST['name'])) {
            throw new Exception("Name cannot be empty");
            
          }
              if (empty($_POST['cls'])) {
               
                throw new Exception("Class cannot be empty");
                
              }

                      if(empty($_POST['email']))
                      {
                        throw new Exception("Email cannot be empty");
                        
                      }

                   
  //initializing the student id
  $sid = $_POST['id'];

  //udating students information to database table "students"
  $result = mysql_query("update students set st_name='$_POST[name]',st_cls='$_POST[cls]',st_email ='$_POST[email]' where st_id='$sid'");

  $success_msg = 'Updated  successfully';
  
  }

}
catch(Exception $e){

  $error_msg =$e->getMessage();
}


?>



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
  <a href="../logout.php" style="text-decoration:none;">Logout</a>

</div>

</header>
<!-- Menus ended -->

<!-- Content, Tables, Forms, Texts, Images started -->
<!--<center>
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
 </div>-->

<center>

<div class="row">
    <div class="content">

          <h3>Update Account</h3>
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


          <!-- Error or Success Message printint started --><p>
      <?php

          if(isset($success_msg))
          {
            echo $success_msg;
          }
          if(isset($error_msg))
          {
            echo $error_msg;
          }

        ?>
          </p><!-- Error or Success Message printint ended -->

          <br>
   
          <!--<form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
            <div class="form-group">-->
                <label for="input1" class="col-sm-3 control-label">Register No.</label>
                <div class="col-sm-7">
                  <input type="text" name="sr_id"  class="form-control" id="input1" placeholder="enter your reg. no. to continue" />
                </div>
            </div>
            <input type="submit" class="btn btn-primary col-md-3 col-md-offset-7" value="Go!" name="sr_btn" />
          </form>
          <div class="content"></div>


      <?php

      if(isset($_POST['sr_btn'])){

      //initializing student ID from form data
       $sr_id = $_POST['sr_id'];
      $class = $_POST['whichclass'];
       $i=0;

       //searching students information respected to the particular ID
       $all_query = mysql_query("select * from students where students.st_id='$sr_id' and students.st_cls='$class'");
       while ($data = mysql_fetch_array($all_query)) {
         $i++;
       
       ?>
<form action="" method="post" class="form-horizontal col-md-6 col-md-offset-3">
   <table class="table table-striped">
  
          <tr>
            <td>Register No.:</td>
            <td><?php echo $data['st_id']; ?></td>
          </tr>

          <tr>
              <td>Student's Name:</td>
              <td><input type="text" name="name" value="<?php echo $data['st_name']; ?>"></input></td>
          </tr>

          <tr>
              <td>Class:</td>
              <td><input type="text" name="cls" value="<?php echo $data['st_cls']; ?>"></input></td>
          </tr>

          <tr>
              <td>Email:</td>
              <td><input type="text" name="email" value="<?php echo $data['st_email']; ?>"></input></td>
          </tr>

          <input type="hidden" name="id" value="<?php echo $sr_id; ?>">
          
          <tr><td></td></tr>
          <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary col-md-3 col-md-offset-7" value="Update" name="done" /></td>
                
          </tr>

    </table>
</form>
     <?php 
   } 
     }  
     ?>


      </div>

  </div>

  </center>
<!-- Contents, Tables, Forms, Images ended -->

</body>
<!-- Menus ended -->

</html>
