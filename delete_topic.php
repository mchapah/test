<?php
#include connection
include('db.php');
//include('includes/session.php');
$id=$_GET['topic_no'];

$sql3="DELETE FROM topics WHERE topic_no=$id";
$results3= mysqli_query($con, $sql3) or die ("Error $sql3.".mysql_error());
$message=urlencode("Topic deleted successfully");
header('Location:index.php?id=view_topic&topic_no='.$id.'&message='.$message);




mysql_close($cnn);


?>


