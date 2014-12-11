<?php
session_start();
//echo "<pre>";
    //print_r($_SERVER);
    //print_r($_SESSION);  
    //print_r($_POST);
//echo "</pre>";
 
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
     
        $student_id = $_SESSION['PON'];
       // echo $student_id;
 
        $OldRecord=$_SESSION['students'][$student_id];
        $NewRecord=array('StudentName' => $StudentName, 'StudentFathersName' => $StudentFathersName, 'StudentMothersName' => $StudentMothersName, 'StudentGender' => $StudentGender, 'StudentDateOfBirth' => $StudentDateOfBirth, 'StudentAddress' => $StudentAddress, 'StudentMobile' => $StudentMobile, 'StudentEmail' => $StudentEmail, 'StudentUrl' => $StudentUrl, 'StudentDepartment' => $StudentDepartment, 'StudentUserName' => $StudentUserName, 'StudentPassword' => $StudentPassword);
       // echo "<pre>";
           // print_r($_SESSION['students'][$student_id]);
         //   print_r($NewRecord);
            $EditRecord=array_replace($OldRecord, $NewRecord);
           // print_r(array_replace($OldRecord, $NewRecord));
        //echo "</pre/>";  
        $_SESSION['students'][$student_id]=$EditRecord;
        //session_destroy();
        header('location:student_list.php');
}else{
    header('location:http://localhost/stinfo/submit_student.php');
}
?>
