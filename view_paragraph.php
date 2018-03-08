
<table class="table table-striped">
<div class="table responsive">
<thead>
<tr>
<th>Paragraph No</th>
<th>Chapter Name</th>
<th>Paragraph Title</th>
<th>Paragraph Description</th>
<th>Paragraph Keywords</th>
<th>Paragraph Content</th>
<th>Visibility</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
include'db.php';
$query= "SELECT * FROM paragraphs";
$res=mysqli_query($con, $query);
$num=mysqli_num_rows($res);
//var_dump($num);
while($rows=mysqli_fetch_array($res)){
?>
<tr>
<td><?php echo $rows['para_no'] ;  ?></td>
<td><?php $tp= $rows['chapter_no'] ; 
$qry="SELECT * FROM chapters WHERE chapter_no='$tp'";
$ress=mysqli_query($con, $qry);
$numbers= mysqli_fetch_array($ress);
echo $numbers['chapter_title'];

 ?></td>
<td><?php echo $rows['para_title'] ;  ?></td>
<td><?php echo $rows['para_description'] ;  ?></td>
<td><?php echo $rows['para_keywords'] ;  ?></td>
<td><?php echo $rows['content'] ;  ?></td>
<td><?php echo $rows['visible'] ;  ?></td>
<td><a href="index.php?id=edit_paragraph&parag_no=<?php echo $rows['para_no'] ;  ?>&chapter_no=<?php echo $rows['chapter_no'] ;  ?>"><img src="img/edit.png"></a></td>
<td><a onclick="return confirmDel()"  href="delete_paragraph.php?para_no=<?php echo $rows['para_no'] ;  ?>&chapter=<?php echo $rows['chapter_no'] ;  ?>"><img src="img/delete.png"></a></td>
</tr>
<?php
}
?>
</tbody>
</div>
</table>
          