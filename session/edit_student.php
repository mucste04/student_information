<?php session_start();
    $student_id=$_GET['student_id'];
    $_SESSION['PON']=$student_id;
?>
<html>
<head>
    <title>Student Information System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
</head>
<body>
<header>
    <h1 class="text-center">Student Information Form</h1>
</header>
<section class="col-sm-6 col-sm-offset-3">
    <form class="form-horizontal" role="form" action="submit_edit_student.php" method="post">
       
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="StudentName" value="<?php echo $_SESSION['students'][$student_id]['StudentName']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputFatherName" class="col-sm-2 control-label">Father's Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputFatherName" name="StudentFathersName" value="<?php echo $_SESSION['students'][$student_id]['StudentFathersName']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputMotherName" class="col-sm-2 control-label">Mother's Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputMotherName" name="StudentMothersName" value="<?php echo $_SESSION['students'][$student_id]['StudentMothersName']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputGender" class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
               <?php
                if($_SESSION['students'][$student_id]['StudentGender']=='Male') { ?>
              <input type="radio"  id="inputGender" name="StudentGender" checked='checked' value="Male"/>Male
                <?php }else{ ?>
                <input type="radio" name="StudentGender" value="Male"  />Male
                    <?php } if($_SESSION['students'][$student_id]['StudentGender']=='Female'){ ?>
                <input type="radio" id="inputGender" name="StudentGender" value="Female" checked='checked'  />Female
                <?php }else{ ?>
                <input type="radio" id="inputGender" name="StudentGender" value="Female"  />Female
                    <?php }?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputDateOfBirth" class="col-sm-2 control-label">Date of Birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputDateOfBirth" name="StudentDateOfBirth" value="<?php echo $_SESSION['students'][$student_id]['StudentDateOfBirth']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputAddress"  name="StudentAddress" ><?php echo $_SESSION['students'][$student_id]['StudentAddress']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="inputMobile" class="col-sm-2 control-label">Mobile Number</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputMobile" name="StudentMobile" value="<?php echo $_SESSION['students'][$student_id]['StudentMobile']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="StudentEmail" value="<?php echo $_SESSION['students'][$student_id]['StudentEmail']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputURL" class="col-sm-2 control-label">Website</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" id="inputURL" name="StudentUrl" value="<?php echo $_SESSION['students'][$student_id]['StudentUrl']; ?>">
            </div>
        </div>
       
        <div class="form-group">
            <label for="inputDepartment" class="col-sm-2 control-label">Department</label>
            <div class="col-sm-10">
                <select class="form-control" id="inputGender" name="StudentDepartment" value="">
                    <option><?php echo $_SESSION['students'][$student_id]['StudentDepartment']; ?></option>
                    <option>CSE</option>
                    <option>EEE</option>
                    <option>ICT</option>
                    <option>Pharmacy</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputImage" class="col-sm-2 control-label">Student Image</label>
            <div class="col-sm-10">
                <input type="file" id="inputImage" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">User Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="StudentUserName" value="<?php echo $_SESSION['students'][$student_id]['StudentUserName']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputName" name="StudentPassword" value="<?php echo $_SESSION['students'][$student_id]['StudentPassword']; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Update</button>
            </div>
        </div>
    </form>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>