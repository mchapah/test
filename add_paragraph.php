
    <body>
        <?php //include 'includes/nav.php'; ?>
        
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                    //error_reporting("E_NOTICE");
                    include 'db.php';
					
					
                    If (isset($_POST['button1id'])) {
										
						//var_dump($topicnumber);
                        error_reporting("E_NOTICE");
                        $chapter = $_POST['chapter'];
                        $para_number = $_POST['para_number'];
                        $para_title = $_POST['para_title'];
                        $para_desc = $_POST['para_desc'];
						$keywords=$_POST['para_keywords'];;
                        $keySplit= explode(",", $keywords);
                        
                         
						$content =mysqli_real_escape_string($con,$_POST["myeditor"]);
                        $visible=$_POST['visible'];
                        
                        
                      $query1="SELECT * FROM paragraphs WHERE para_no='$para_number' AND chapter_no='$chapter'";
					  $result1=mysqli_query($con, $query1);
					  $nums=mysqli_num_rows($result1);
					  
					  $query2="SELECT * FROM paragraphs WHERE para_title='$para_title' AND chapter_no='$chapter'";
					  $result2=mysqli_query($con, $query2); 
                      $num=mysqli_num_rows($result2);					  
					  if($nums > 0){
						  $message=urlencode("Duplicate entry for Paragraph number ".$para_number." ");
	                      header('Location:index.php?id=add_paragraph&message='.$message);
					  }
					 elseif($num > 0){
						  $message=urlencode("Duplicate entry for Paragraph  ".$para_title." ");
	                      header('Location:index.php?id=add_paragraph&message='.$message);
					  }
					else{  

					 /*  $cnt=count($keySplit);
					   for($i=0;$i<$cnt;$i++){
                          $key[]=$keySplit[$i]; */
						 $sql = "INSERT INTO paragraphs (para_no,chapter_no,para_title,para_description,para_keywords,content,visible)"
                              . " VALUES('$para_number','$chapter','$para_title','$para_desc','" . implode(',', $keySplit) . "','$content','$visible')";
							  
						//var_dump($sql); die();
                     mysqli_query($con, $sql) or die(mysqli_error($con));
					header("Location:index.php?id=add_paragraph"); 
					   
					} 
                    }
                    ?>     

                    <form class="form-horizontal" action="add_paragraph.php" method="POST" enctype="multipart/form-data">


                        <fieldset>

                            <!-- Form Name -->
                            <legend>Add Paragraph</legend>

                            <!-- Text input-->
							<div class="form-group">
                                <label class="col-md-4 control-label" for="topic_name">Choose Chapter </label>  
                                <div class="col-md-8">
                                    <select name="chapter" class="form-control">
                                        <option></option>
                                        <?php
                                        $sel = mysqli_query($con, "SELECT * from chapters");
                                        while ($row = mysqli_fetch_array($sel)):
                                            $chap_id = $row['chapter_no'];
                                            ?>
                                            <option value="<?php echo $chap_id; ?>"><?php echo $row['chapter_title']; ?></option>
                                            <?php
                                        endwhile;
                                        ?>


                                    </select>

                                </div>
                            </div>
                            
                            <div class="form-group">


                                <label class="col-md-4 control-label" for="para_number">Paragraph Number</label>  
                                <div class="col-md-8">
                                    <input id="para_number" name="para_number" type="text" placeholder="Paragraph Number" class="form-control input-md" value="" required="">

                                </div>
                            </div>
							<div class="form-group">


                                <label class="col-md-4 control-label" for="para_title">Paragraph Title</label>  
                                <div class="col-md-8">
                                    <input id="para_title" name="para_title" type="text" placeholder="Paragraph Title" class="form-control input-md" value="" required="">

                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-md-4 control-label" for="para_desc">Paragraph Description</label>  
                                <div class="col-md-8">
                                    <input id="para_desc" name="para_desc" type="text" placeholder="Paragraph Description" class="form-control input-md" value="" required="">

                                </div>
                            </div>
							<div class="form-group">

                                <label class="col-md-4 control-label" for="para_keywords">Paragraph Keywords</label>  
                                <div class="col-md-8">
                                    <input id="para_keywords" name="para_keywords" type="text" placeholder="keywords are separated by commas" class="form-control input-md" value="" required="">

                                </div>
                            </div>
							<div class="form-group">

                                <label class="col-md-4 control-label" for="para_content">Paragraph Content</label>  
                                <div class="col-md-8">
                                    <textarea name="myeditor" id="myeditor" rows="40" cols="80">
                                     </textarea>
                                       <script>
                                      CKEDITOR.replace('myeditor');
                                        </script>
                                </div>
                            </div>
							
							<div class="form-group">

                                <label class="col-md-4 control-label" for="visible">Visible</label>  
                                <div class="col-md-8">
                                    
										<input id="visible" name="visible" type="checkbox" value="1" class="form-control input-md" >
										

                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="button1id"></label>
                                <div class="col-md-8">
                                    <button type="submit" id="button1id" name="button1id" class="btn btn-success" style="width:20%">Save</button>
                                    <button id="save" name="save" class="btn btn-warning">Clear</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div></div></div>
<script type="text/javascript">

function updateText(type) { 
    var programmes=new array();
   // programmes[]
 //var id = type+'Text';
 //document.getElementById(id).value = document.getElementById(type).value;
}
</script>

    </body>

