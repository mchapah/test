
    <body>
        <?php //include 'includes/nav.php'; ?>
        
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                    //error_reporting("E_NOTICE");
                    include 'db.php';
					
					
                    If (isset($_POST['button1id'])) {
						$topicnumber=$_GET['no'];
						
						//var_dump($topicnumber);
                        error_reporting("E_NOTICE");
                        $topic = $_POST['topic_name'];
                    //$course_category = $_POST['category'];
                        $description = $_POST['topic_desc'];
                        $order = $_POST['topic_order'];
                        $visible=$_POST['visible'];
             		  $sql2= "UPDATE topics SET 
                                    topic_name='$topic',
                                     topic_description='$description',
                                     visible='$visible'
                                     WHERE topic_no='$topicnumber'";
                          $results3= mysqli_query($con, $sql2);
						  header('Location:index.php?id=edit_topic&topic_no='.$topicnumber.'');
					  
					 
                    }
                    ?>     

                    <form class="form-horizontal" action="edit_topic.php?no=<?php echo $number ?>" method="POST" enctype="multipart/form-data">


                        <fieldset>

                            <!-- Form Name -->
                            <legend>Edit Topic</legend>

                            <!-- Text input-->
                            
                            <div class="form-group">


                                <label class="col-md-4 control-label" for="cat_name">Topic Name</label>  
                                <div class="col-md-8">
                                    <input id="topic_name" name="topic_name" type="text" placeholder="Topic Name" class="form-control input-md" value="<?php echo $rows['topic_name']; ?>" required="">

                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-md-4 control-label" for="topic_desc">Topic Description</label>  
                                <div class="col-md-8">
                                    <input id="topic_desc" name="topic_desc" type="text" placeholder="Topic Description" class="form-control input-md" value="<?php echo $rows['topic_description']; ?>" required="">

                                </div>
                            </div>
							<div class="form-group">

                                <label class="col-md-4 control-label" for="topic_order">Topic Order</label>  
                                <div class="col-md-8">
                                    <input id="topic_order" name="topic_order" type="text" placeholder="Topic Order" class="form-control input-md" value="<?php echo $rows['topic_no']; ?>" required="" readonly="">

                                </div>
                            </div>
							<div class="form-group">

                                <label class="col-md-4 control-label" for="visible">Visible</label>  
                                <div class="col-md-8">
                                    <?php 

									$visible=$rows['visible']; 
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

