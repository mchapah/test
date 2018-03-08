
<table class="table table-striped">
<div class="table responsive">
<thead>
<tr>
<th>Chapter No</th>
<th>Topic Name</th>
<th>Chapter Title</th>
<th>Chapter Description</th>
<th>Visibility</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
include'db.php';
$query= "SELECT * FROM chapters";
$res=mysqli_query($con, $query);
$num=mysqli_num_rows($res);
//var_dump($num);
while($rows=mysqli_fetch_array($res)){
?>
<tr>
<td><?php echo $rows['chapter_no'] ;  ?></td>
<td><?php $tp= $rows['topic_no'] ; 
$qry="SELECT * FROM topics WHERE topic_no='$tp'";
$ress=mysqli_query($con, $qry);
$numbers= mysqli_fetch_array($ress);
echo $numbers['topic_name'];

 ?></td>
<td><?php echo $rows['chapter_title'] ;  ?></td>
<td><?php echo $rows['chapter_description'] ;  ?></td>
<td><?php echo $rows['visible'] ;  ?></td>
<td><a href="index.php?id=edit_chapter&chapter_no=<?php echo $rows['chapter_no'] ;  ?>&topic_no=<?php echo $rows['topic_no'] ;  ?>"><img src="img/edit.png"></a></td>
<td><a onclick="return confirmDel()"  href="delete_chapter.php?topic_no=<?php echo $rows['topic_no'] ;  ?>&chapter=<?php echo $rows['chapter_no'] ;  ?>"><img src="img/delete.png"></a></td>
</tr>
<?php
}
?>
</tbody>
</div>
</table>
          