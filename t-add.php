<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <title></title>
  <!--bootstrap css-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- bootstrap css ends-->
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">School</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php">Home</a></li>
      <li><a href="#">Change Password</a></li>
      <li><a href="#">Show users</a></li>
      <li><a href="#">Admins</a></li>
    </ul>
  </div>
</nav>
 <!-- End Header -->
  <!-- Start aside -->
<div class="container-fluid">
  <div class="panel panel-default col-sm-5">
    
    <div class="panel-body">
      <div class="panel-heading">Teacher</div>
      <ul class="list-group  display-none">
        <li class="list-group-item"><a href="t-add.php">Current Teacher</a></li>
        <li class="list-group-item"><a href="cat_delete.php">Guest Teacher</a></li>
        <li class="list-group-item"><a href="cat_show.php">Free teacher</a></li>
      </ul>
   

    </div>
    <div class="panel-body">
      <div class="panel-heading">Student</div>
      <ul class="list-group  display-none">
        <li class="list-group-item"><a href="product_add.php">Current</a></li>
        <li class="list-group-item"><a href="product_delete.php">Achivment</a></li>
        <li class="list-group-item"><a href="product_show.php">JSC $ SSC</a></li>
      </ul>
    

    </div>
    <div class="panel-body">
      <div class="panel-heading">Another Emplyee</div>
      <!-- <ul class="list-group  display-none">
        <li class="list-group-item"><a href="company_add.php">Add Company</a></li>
        <li class="list-group-item"><a href="company_delete.php">Delete Company</a></li>
        <li class="list-group-item"><a href="company_show.php">Show Company</a></li>
      </ul> -->
    </div>
    <div class="panel-body">
      <div class="panel-heading"> Registerd Student </div>
      <!-- <ul class="list-group  display-none">
        <li class="list-group-item"><a href="sale_add.php">Add Sale</a></li>
        <li class="list-group-item"><a href="sale_remove.php">Remove sale</a></li>
        <li class="list-group-item"><a href="sale_show.php">Show sale</a></li>
      </ul> -->
    </div>
  </div>
<!-- End aside -->





 <!-- <?php  
    include "config.php";
    include "Database.php";
    ?>

    <?php 
    $id = $_GET['id'];
    $db = new Database();
    $query = "SELECT * FROM c_teacher WHERE id=$id";
    $getData = $db->select($query)->fetch_assoc();

    if(isset($_POST['submit'])){
     $name  = mysqli_real_escape_string($db->link, $_POST['name']);
     $gender = mysqli_real_escape_string($db->link, $_POST['gender']);
     $possition = mysqli_real_escape_string($db->link, $_POST['possition']);
     $mobile  = mysqli_real_escape_string($db->link, $_POST['mobile']);
     $edu  = mysqli_real_escape_string($db->link, $_POST['edu']);
     $s_date  = mysqli_real_escape_string($db->link, $_POST['s_date']);
     if($name == '' || $gender == '' || $possition == ''|| $mobile == '' || $edu == '' || $s_date == ''){
        $error = "Field must not be Empty !!";
  } 
  else {
      $query = "UPDATE c_teacher
      SET
      name  = '$name',
      gender = '$gender',
      possition = '$possition'
      mobile  = '$mobile',
      edu = '$edu',
      s_date = '$s_date'
      WHERE id = $id";
      $update = $db->update($query);
  }
}
?>

<?php
    if(isset($_POST['delete'])){
     $query = "DELETE FROM c_teacher WHERE id=$id";
     $deleteData = $db->delete($query);
}
?>

<?php 
if(isset($error)){
 echo "<span style='color:red'>".$error."</span>";
}
?> -->



   <div class="pull-right col-sm-4">
   <div class="container" >
    <p class="alert alert-success success-edit"> Added to the database</p>
     
    
     <form action="t-add.php" method="POST">
       <div class="form-group">
         <label for="name">Name:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title" value="<?php echo $getData['name'] ?>" name="name">
       </div>
       <div class="form-group">
         <label for="sel1">Gender:</label>
         <select class="form-control input-sm" name="gender" id="sel1">
           <option>male</option>
           <option>female</option>

         </select>
         </div>
         <div class="form-group">
           <label for="sel1">Possition</label>
           <input type="text" class="form-control input-sm" id="sel1" id="title" value="<?php echo $getData['possition'] ?>" name="possition">
           </div>
            <div class="form-group">
                <label for="title">Education Qualification:</label>
                <input type="text" class="form-control input-sm" id="sel1" id="title" value="<?php echo $getData['edu'] ?>" name="edu">
            </div>

            <div class="form-group">
                <label for="title">Mobile:</label>
                <input type="text" class="form-control input-sm" id="sel1" id="title" value="<?php echo $getData['mobile'] ?>" name="mobile">
            </div>
            <div class="form-group">
                <label for="title">Start Date:</label>
                <input type="date" class="form-control input-sm" id="sel1" id="title" value="<?php echo $getData['s_date'] ?>" name="date">
            </div>
       <div class="form-group">
         <label for="image">IMAGE:</label>
         <input type="file" id="image" name="image" accept="image/*">
       </div>
       <input type="submit" name="submit" value="Update"/>
       <input type="reset" Value="Cancel" />
       <input type="submit" name="delete" Value="Delete" />
       <!-- <button type="submit" class="btn btn-default">Submit</button>
       <button type="submit" class="btn btn-default">Submit</button>
       <input type="submit" name="delete" Value="Delete" />
     </form> -->
   </div>

   </div>










<!-- Start Footer -->
        <!-- jquery -->
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <!-- jquery ends -->

  <!-- bootstrap javascript-->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- bootstrap javascript ends -->
</body>
</html>
<!-- End Footer -->