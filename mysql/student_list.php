

<html>
<head>
   <title>Student Information</title>
   <link rel="stylesheet" type="text/css" href="css3.css">
</head>
<body>
<div>
<a href="create_student.php">Add New Student</a><br><br>
    
</div>
    
<?php
include('db_connection.php');
$query=mysql_query("select StudentID,StudentName,StudentFathersName,StudentMothersName,StudentGender,StudentDateOfBirth,StudentAddress,StudentMobile,StudentEmail,StudentUrl,StudentDepartment,StudentUserName,StudentPassword from students");
 echo "<table border='1'>

<tr>    <td>Student ID </td>
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
        <td>Edit</td>
        <td>Show</td>
        <td>Delete</td>
        </tr>";
while($row=mysql_fetch_array($query))
{
echo "<tr>";  
echo "<tr><td>".$row['StudentID']."</td>";
echo "<td>".$row['StudentName']."</td>";
echo "<td>".$row['StudentFathersName']."</td>";
echo "<td>".$row['StudentMothersName']."</td>";
echo "<td>".$row['StudentGender']."</td>";
echo "<td>".$row['StudentDateOfBirth']."</td>";
echo "<td>".$row['StudentAddress']."</td>";
echo "<td>".$row['StudentMobile']."</td>";
echo "<td>".$row['StudentEmail']."</td>";
echo "<td>".$row['StudentUrl']."</td>";
echo "<td>".$row['StudentDepartment']."</td>";
echo "<td>".$row['StudentUserName']."</td>";
echo "<td>".$row['StudentPassword']."</td>";
echo "<td><a href='edit_student.php?StudentID=".$row['StudentID']."'>Edit</a></td>";
echo "<td><a href='show_student.php?StudentID=".$row['StudentID']."'>Show</a></td>";
echo "<td><a href='delete_student.php?StudentID=".$row['StudentID']."'>Delete</a></td><tr>";
}
echo "</tr>";
?>

</table>
</body>
</html>


