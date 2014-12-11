<?php
include('db_connection.php');
if(isset($_GET['StudentID']))
{
$id=$_GET['StudentID'];
$query1=mysql_query("select*from students where StudentID='$id'");
$query2=mysql_fetch_array($query1);
}
?>


<html>
<head>
    <title>Student Information System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
</head>
<body>
<header>
    <h1 class="text-center"> Details Student Information</h1>
</header>
<section class="col-sm-6 col-sm-offset-3">
    <form class="form-horizontal" role="form" action="submit_edit_student.php" method="post">
       
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
               <?php echo $query2['StudentName']; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputFatherName" class="col-sm-2 control-label">Father's Name</label>
            <div class="col-sm-10 ">
              <?php echo $query2['StudentFathersName']; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputMotherName" class="col-sm-2 control-label">Mother's Name</label>
            <div class="col-sm-10">
              <?php echo $query2['StudentMothersName']; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputGender" class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
               <?php echo $query2['StudentGender']; ?>
          </div>
        </div>  
       
        <div class="form-group">
            <label for="inputDateOfBirth" class="col-sm-2 control-label">Date of Birth</label>
            <div class="col-sm-10">
               <?php echo $query2['StudentDateOfBirth']; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress" class="col-sm-2 control-label">Address</label>
           
            <div class="col-sm-10">
               <?php echo $query2['StudentAddress']; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputMobile" class="col-sm-2 control-label">Mobile Number</label>
            <div class="col-sm-10 ">
          <?php echo $query2['StudentMobile']; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
             <?php echo $query2['StudentEmail']; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputURL" class="col-sm-2 control-label">Website</label>
            <div class="col-sm-10">
                <?php echo $query2['StudentUrl']; ?>
            </div>
        </div>
       
        <div class="form-group">
            <label for="inputDepartment" class="col-sm-2 control-label">Department</label>
            <div class="col-sm-10">
                
                 <?php echo $query2['StudentDepartment']; ?>
                    
            </div>
        </div>
        
        
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">User Name</label>
            <div class="col-sm-10">
              <?php echo $query2['StudentUserName']; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <?php echo $query2['StudentPassword']; ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <li><a href="student_list.php">Go to Student List</a></li>
            </div>
        </div>
    </form>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>