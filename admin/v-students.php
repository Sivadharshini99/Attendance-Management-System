<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{

  header('location: ../index.php');
}
?>


<?php

//establishing connection
include('connect.php');

  try{

    //validation of empty fields
      if(isset($_POST['signup'])){

        if(empty($_POST['email'])){
          throw new Exception("Email cann't be empty.");
        }

          if(empty($_POST['uname'])){
             throw new Exception("Username cann't be empty.");
          }

            if(empty($_POST['pass'])){
               throw new Exception("Password cann't be empty.");
            }
              
              if(empty($_POST['fname'])){
                 throw new Exception("Fullname cann't be empty.");
              }

               if(empty($_POST['type'])){
                     throw new Exception("Usertype cann't be empty.");
                  }

        //insertion of data to database table admininfo
        $result = mysql_query("insert into admininfo(username,password,email,fname,type) values('$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[fname]','$_POST[type]')");
        $success_msg="Signup Successfully!";

  
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


    <center>

<div class="row">

  <div class="content">
    <h3>Student List</h3>
    <br>

   <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Class</label>
            <div class="col-sm-7">
                <input type="text" name="sr_cls"  class="form-control" id="input1" placeholder="ex.11B" />
                
            </div>

      </div>
      <input type="submit" class="btn btn-danger col-md-3 col-md-offset-7" style="border-radius:0%" value="Search" name="sr_btn" />
      
   </form>

   <div class="content"></div>
   
    <table class="table table-striped table-hover">
      
        <thead>
        <tr>
          <th scope="col">Register No.</th>
          <th scope="col">Name</th>
          <th scope="col">Class</th>
          <th scope="col">Email</th>
          
        </tr>
        </thead>
     <?php
       
       if(isset($_POST['sr_btn'])){
     
     $srcls = $_POST['sr_cls'];
       $i=0;
       

     $all_query = mysql_query("select * from students where students.st_cls = '$srcls' order by st_id asc");
       
       while ($data = mysql_fetch_array($all_query)) {
         $i++;
       
       ?>
  
       <tr>
         <td><?php echo $data['st_id']; ?></td>
         <td><?php echo $data['st_name']; ?></td>
         <td><?php echo $data['st_cls']; ?></td>
         <td><?php echo $data['st_email']; ?></td>
      
       </tr>
  
       <?php 
            } 
          }
              
        ?>
      </table>
    
  </div>
    

</div>

</center>

</body>
<!-- Body ended  -->

</html>
