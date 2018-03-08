
    <body>
        <?php //include 'includes/nav.php'; ?>
        
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                    //error_reporting("E_NOTICE");
                    include 'db.php';
					
					
                    If (isset($_POST['button1id'])) {
						$topno=$_GET['topic'];
						$chapno=$_GET['chapter'];
						
						//var_dump($chapno); die();
                        error_reporting("E_NOTICE");
                       
                        $topic = $_POST['topic'];
                        $chapter_number = $_POST['chapter_number'];
                        $chapter_title = $_POST['chapter_title'];
                        $chapter_desc = $_POST['chapter_desc'];
                        $visible=$_POST['visible'];
             		  $sql2= "UPDATE chapters SET 
					                 chapter_title='$chapter_title',
                                     chapter_description='$chapter_desc',
                                     visible='$visible'
                                     WHERE chapter_no='$chapno' AND topic_no='$topno'";
                          $results3= mysqli_query($con, $sql2);
						  header('Location:index.php?id=edit_chapter&topic_no='.$topno.'&chapter_no='.$chapno.'');
					  
					 
                    }
                    ?>     

                    <form class="form-horizontal" action="edit_chapter.php?topic=<?php echo $topic_no ?>&chapter=<?php echo $chapter; ?>" method="POST" enctype="multipart/form-data">


                        <fieldset>

                            <!-- Form Name -->
                            <legend>Edit Chapter</legend>

                            <!-- Text input-->
							<div class="form-group">
                                <label class="col-md-4 control-label" for="topic_name">Choose Topic </label>  
                                <div class="col-md-8">
                                    <select name="topic" class="form-control">
									<?php
									if(!empty($topic_no)){
									?>
                                        <option value="<?php echo $topic_no; ?>">
										<?php
										$ss="SELECT * FROM topics WHERE topic_no='$topic_no'";
										$rs= mysqli_query($con, $ss);
										$rss=mysqli_fetch_array($rs);
										echo $rss['topic_name'];
										
										?>
										</option>
                                        <?php
									}
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
                                    <input id="chapter_number" name="chapter_number" type="text" placeholder="Chapter Number" class="form-control input-md" value="<?php echo $chapter; ?>" required="">

                                </div>
                            </div>
							<div class="form-group">


                                <label class="col-md-4 control-label" for="chapter_title">Chapter Title</label>  
                                <div class="col-md-8">
                                    <input id="chapter_title" name="chapter_title" type="text" placeholder="Chapter Title" class="form-control input-md" value="<?php echo $rowss['chapter_title']; ?>" required="">

                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-md-4 control-label" for="chapter_desc">Chapter Description</label>  
                                <div class="col-md-8">
                                    <input id="chapter_desc" name="chapter_desc" type="text" placeholder="Chapter Description" class="form-control input-md" value="<?php echo $rowss['chapter_description']; ?>" required="">

                                </div>
                            </div>
							
							<div class="form-group">

                                <label class="col-md-4 control-label" for="visible">Visible</label>  
                                <div class="col-md-8">
                                    <?php 

									$visible=$rowss['visible']; 
									if($visible==1){
										?>
										<input id="visible" name="visible" type="checkbox" value="1" class="form-control input-md" checked>
										<?php
									}
									else{
										?>
										<input id="visible" name="visible" type="checkbox" value="1" class="form-control input-md">
										<?php
									}
									
									
									?>

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

