
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
                        $topic = $_POST['topic'];
                        $chapter_number = $_POST['chapter_number'];
                        $chapter_title = $_POST['chapter_title'];
                        $chapter_desc = $_POST['chapter_desc'];
                        $visible=$_POST['visible'];
                        
                        
                      $query1="SELECT * FROM chapters WHERE chapter_no='$chapter_number'";
					  $result1=mysqli_query($con, $query1);
					  $nums=mysqli_num_rows($result1);
					  
					  $query2="SELECT * FROM chapters WHERE chapter_title='$chapter_title'";
					  $result2=mysqli_query($con, $query2); 
                      $num=mysqli_num_rows($result2);					  
					  if($nums > 0){
						  $message=urlencode("Duplicate entry for Chapter number ".$chapter_number." ");
	                      header('Location:index.php?id=add_chapter&&message='.$message);
					  }
					 elseif($num > 0){
						  $message=urlencode("Duplicate entry for chapter  ".$chapter_title." ");
	                      header('Location:index.php?id=add_topic&&message='.$message);
					  }
					else{  

					  
                   
						 $sql = "INSERT INTO chapters (chapter_no,topic_no,chapter_title, chapter_description,visible)"
                              . " VALUES('$chapter_number','$topic', '$chapter_title','$chapter_desc','$visible')";

                     mysqli_query($con, $sql) or die(mysqli_error($con));
					header("Location:index.php?id=add_chapter"); 
					   
					} 
                    }
                    ?>     

                    <form class="form-horizontal" action="add_chapter.php" method="POST" enctype="multipart/form-data">


                        <fieldset>

                            <!-- Form Name -->
                            <legend>Add Chapter</legend>

                            <!-- Text input-->
							<div class="form-group">
                                <label class="col-md-4 control-label" for="topic_name">Choose Topic </label>  
                                <div class="col-md-8">
                                    <select name="topic" class="form-control">
                                        <option></option>
                                        <?php
                                        $sel = mysqli_query($con, "SELECT * from topics");
                                        while ($row = mysqli_fetch_array($sel)):
                                            $topic_id = $row['topic_no'];
                                            ?>
                                            <option value="<?php echo $topic_id; ?>"><?php echo $row['topic_name']; ?></option>
                                            <?php
                                        endwhile;
                                        ?>


                                    </select>

                                </div>
                            </div>
                            
                            <div class="form-group">


                                <label class="col-md-4 control-label" for="chapter_number">Chapter Number</label>  
                                <div class="col-md-8">
                                    <input id="chapter_number" name="chapter_number" type="text" placeholder="Chapter Number" class="form-control input-md" value="" required="">

                                </div>
                            </div>
							<div class="form-group">


                                <label class="col-md-4 control-label" for="chapter_title">Chapter Title</label>  
                                <div class="col-md-8">
                                    <input id="chapter_title" name="chapter_title" type="text" placeholder="Chapter Title" class="form-control input-md" value="" required="">

                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-md-4 control-label" for="chapter_desc">Chapter Description</label>  
                                <div class="col-md-8">
                                    <input id="chapter_desc" name="chapter_desc" type="text" placeholder="Chapter Description" class="form-control input-md" value="" required="">

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

