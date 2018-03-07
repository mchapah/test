
<table class="table table-striped">
<div class="table responsive">
<thead>
<tr>
<th>Topic No</th>
<th>Topic Name</th>
<th>Topic Description</th>
<th>Topic Visibility</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
include'db.php';
$query= "SELECT * FROM topics";
$res=mysqli_query($con, $query);
$num=mysqli_num_rows($res);
//var_dump($num);
while($rows=mysqli_fetch_array($res)){
?>
<tr>
<td><?php echo $rows['topic_no'] ;  ?></td>
<td><?php echo $rows['topic_name'] ;  ?></td>
<td><?php echo $rows['topic_description'] ;  ?></td>
<td><?php echo $rows['visible'] ;  ?></td>
<td><a href="index.php?id=edit_topic&topic_no=<?php echo $rows['topic_no'] ;  ?>"><img src="img/edit.png"></a></td>
<td><a onclick="return confirmDel()"  href="delete_topic.php?topic_no=<?php echo $rows['topic_no'] ;  ?>"><img src="img/delete.png"></a></td>
</tr>
<?php
}
?>
</tbody>
</div>
</table>
          