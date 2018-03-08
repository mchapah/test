<?php
#include connection
include('db.php');
//include('includes/session.php');
$para=$_GET['para_no'];
$chapter=$_GET['chapter'];

$sql3="DELETE FROM paragraphs WHERE para_no='$para' AND chapter_no='$chapter'";
$results3= mysqli_query($con, $sql3) or die ("Error $sql3.".mysql_error());
$message=urlencode("Paragraph deleted successfully");
header('Location:index.php?id=view_paragraphs&para_no='.$para.'&chapter_no='.$chapter.'&message='.$message);




mysql_close($cnn);


?>


