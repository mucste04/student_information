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
    <form class="form-horizontal" role="form" action="add.php" method="post">
       <!-- <div class="form-group">
            <label for="inputID" class="col-sm-2 control-label">ID</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputID" name="StudentId" placeholder="XXXX">
            </div>
        </div>  -->
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="StudentName" placeholder="Jone Larry">
            </div>
        </div>
        <div class="form-group">
            <label for="inputFatherName" class="col-sm-2 control-label">Father's Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputFatherName" name="StudentFathersName" placeholder="Father's Name of Jone Larry">
            </div>
        </div>
        <div class="form-group">
            <label for="inputMotherName" class="col-sm-2 control-label">Mother's Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputMotherName" name="StudentMothersName" placeholder="Mother's Name of Jone Larry">
            </div>
        </div>
        <div class="form-group">
            <label for="inputGender" class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
                <input type="radio"  id="inputGender" name="StudentGender" checked value="Male"/>Male
                <input type="radio"  id="inputGender" name="StudentGender" value="Female"/>Female
            </div>
        </div>

        <div class="form-group">
            <label for="inputDateOfBirth" class="col-sm-2 control-label">Date of Birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputDateOfBirth" name="StudentDateOfBirth" placeholder="DD/MM/YYYY">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputAddress" placeholder="Address" name="StudentAddress"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="inputMobile" class="col-sm-2 control-label">Mobile Number</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputMobile" name="StudentMoblie" placeholder="01XXXXXXXXX">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="StudentName" placeholder="user@yourcompany.com">
            </div>
        </div>
        <div class="form-group">
            <label for="inputURL" class="col-sm-2 control-label">Website</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" id="inputURL" name="StudntURL" placeholder="www.xyz.com">
            </div>
        </div>
       <!-- <div class="form-group">
            <label for="inputEducation" class="col-sm-2 control-label">Education Degree</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEducation" name="StudentDegree" placeholder="Bachelor, Masters etc.">
            </div>
        </div>  -->
        <div class="form-group">
            <label for="inputDepartment" class="col-sm-2 control-label">Department</label>
            <div class="col-sm-10">
                <select class="form-control" id="inputGender" name="StudentDepartment">
                    <option value="1">Select Department</option>
                    <option value="1">CSE</option>
                    <option value="2">EEE</option>
                    <option value="2">ICT</option>
                    <option value="2">Pharmacy</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputGender" class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
                <input type="radio"  id="inputGender" name="StudentGender" checked value="Male"/>Male
                <input type="radio"  id="inputGender" name="StudentGender" value="Female"/>Female
            </div>
        </div>
        <div class="form-group">
            <label for="inputImage" class="col-sm-2 control-label">Student Image</label>
            <div class="col-sm-10">
                <input type="file" id="inputImage">
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">User Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="StudentUserName" placeholder="User Name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputName" name="StudentPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>