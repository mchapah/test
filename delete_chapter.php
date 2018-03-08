<?php
#include connection
include('db.php');
//include('includes/session.php');
$topic=$_GET['topic_no'];
$chapter=$_GET['chapter'];

$sql3="DELETE FROM chapters WHERE topic_no='$topic' AND chapter_no='$chapter'";
$results3= mysqli_query($con, $sql3) or die ("Error $sql3.".mysql_error());
$message=urlencode("Chapter deleted successfully");
header('Location:index.php?id=view_chapter&topic_no='.$topic.'&chapter_no='.$chapter.'&message='.$message);




mysql_close($cnn);


?>


