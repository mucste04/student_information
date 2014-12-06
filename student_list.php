<?php session_start();
$student_id=count($_SESSION['students']);
//echo "<pre>";
//print_r($_SERVER);
//print_r($_SESSION);
//print_r($_POST);
//echo "</pre>";

if(isset($_POST["submit"])) {
    
}
//form must be submitted to access this page
if( strtolower($_SERVER['REQUEST_METHOD']) == 'post' ){

    $StudentName = "";
    $StudentFathersName = "";
    $StudentMothersName="";
    $StudentGender=$_POST['StudentGender'];
    $StudentDateOfBirth=$_POST['StudentDateOfBirth'];
    $StudentAddress=$_POST['StudentAddress'];
    $StudentMobile=$_POST['StudentMobile'];
    $StudentEmail=$_POST['StudentEmail'];
    $StudentUrl=$_POST['StudentUrl'];
    $StudentDepartment=$_POST['StudentDepartment'];
    $StudentUserName=$_POST['StudentUserName'];
    $StudentPassword=$_POST['StudentPassword'];


    if(array_key_exists('StudentName', $_POST)){
        $StudentName = $_POST['StudentName'];
    }

    if(array_key_exists('StudentFathersName', $_POST)){
        $StudentFathersName = $_POST['StudentFathersName'];
    }
    if(array_key_exists('StudentMothersName', $_POST)){
        $StudentMothersName = $_POST['StudentMothersName'];
    }





    if(!array_key_exists('students', $_SESSION )){
        $_SESSION['students'] = array();
    }
    //session_destroy();
    $student_id = (count($_SESSION['students'])+1);
    $_SESSION['students'][$student_id] = array('StudentName' => $StudentName, 'StudentFathersName' => $StudentFathersName, 'StudentMothersName' => $StudentMothersName, 'StudentGender' => $StudentGender, 'StudentDateOfBirth' => $StudentDateOfBirth, 'StudentAddress' => $StudentAddress, 'StudentMobile' => $StudentMobile, 'StudentEmail' => $StudentEmail, 'StudentUrl' => $StudentUrl, 'StudentDepartment' => $StudentDepartment, 'StudentUserName' => $StudentUserName, 'StudentPassword' => $StudentPassword);
}
?>
<html>
    <head>
        <title>List of Student</title>
    </head>
    <body>
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <td>SI No </td>
                        <td>Student Name</td>
                        <td>Father Name</td>
                        <td>Mother Name</td>
                        <td>Gender</td>
                        <td>Date of Birth</td>
                        <td>Address</td>
                        <td>Mobile Number</td>
                        <td>Email</td>
                        <td>Website</td>
                        <td>Department</td>
                        <td>User Name</td>
                        <td>Password</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                //for($i=1; $i <= $student_id; $i++):
                foreach($_SESSION['students'] as $student_id => $value){
                ?>
            <tr>
                <td><?php echo $student_id; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentName']; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentFathersName']; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentMothersName']; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentGender']; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentDateOfBirth']; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentAddress']; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentMobile']; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentEmail']; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentUrl']; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentDepartment']; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentUserName']; ?></td>
                <td><?php echo $_SESSION['students'][$student_id]['StudentPassword']; ?></td>
                
                <td><a href='edit_student.php?student_id=<?php echo $student_id; ?>' >Edit</a> | <a href='delete_student.php?student_id=<?php echo $student_id; ?>' >Delete</a> | <a href='show_student.php?student_id=<?php echo $student_id; ?>' >Show</a></td>
            </tr>
        <?php } ?>
                </tbody>
             </table>
            <ul>
                <li><a href="create.php">Add New Student</a></li>
            </ul>
        </div>
    </body>
</html>