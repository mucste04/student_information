<html>
<body>
<?php
include('db_connection.php');
if(isset($_GET['StudentID']))
{
$id=$_GET['StudentID'];
$query=mysql_query("delete from students where StudentID='$id'");
if($query)
{
echo "Delete data successfully.";	
header('location:student_list.php');
}
}
?>
</body>
</html>