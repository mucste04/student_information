<?php
include('db_connection.php');
    $StudentName = $_POST['StudentName'];;
    $StudentFathersName = $_POST['StudentFathersName'];;
    $StudentMothersName=$_POST['StudentMothersName'];;
    $StudentGender=$_POST['StudentGender'];
    $StudentDateOfBirth=$_POST['StudentDateOfBirth'];
    $StudentAddress=$_POST['StudentAddress'];
    $StudentMobile=$_POST['StudentMobile'];
    $StudentEmail=$_POST['StudentEmail'];
    $StudentUrl=$_POST['StudentUrl'];
    $StudentDepartment=$_POST['StudentDepartment'];
    $StudentUserName=$_POST['StudentUserName'];
    $StudentPassword=$_POST['StudentPassword'];

$sql = "INSERT INTO `students` (`StudentName`,`StudentFathersName`,`StudentMothersName`,`StudentGender`,`StudentDateOfBirth`,`StudentAddress`,`StudentMobile`,`StudentEmail`,`StudentUrl`,`StudentDepartment`,`StudentUserName`,`StudentPassword`)
 VALUES ('$StudentName','$StudentFathersName','$StudentMothersName','$StudentGender','$StudentDateOfBirth','$StudentAddress','$StudentMobile','$StudentEmail','$StudentUrl','$StudentDepartment','$StudentUserName','$StudentPassword')";

if(mysql_query($sql))
{
	
    header('location:student_list.php');
}
else
echo "Something Error";
	mysql_close();

?>
