<?php
session_start();
 
        $student_id=$_GET['student_id'];
        //echo $orderNo;
        unset($_SESSION['students'][$student_id]);  
        
        //echo 'delete successfully.';
        header('location:student_list.php');
?>   