
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
                        $topic = $_POST['topic_name'];
                    //$course_category = $_POST['category'];
                        $description = $_POST['topic_desc'];
                        $order = $_POST['topic_order'];
                        $visible=$_POST['visible'];
                        
                        
                      $query1="SELECT * FROM topics WHERE topic_no='$order'";
					  $result1=mysqli_query($con, $query1);
					  $nums=mysqli_num_rows($result1);
					  
					  $query2="SELECT * FROM topics WHERE topic_name='$topic'";
					  $result2=mysqli_query($con, $query2); 
                      $num=mysqli_num_rows($result2);					  
					  if($nums > 0){
						  $message=urlencode("Duplicate entry for topic number ".$order." ");
	                      header('Location:index.php?id=add_topic&&message='.$message);
					  }
					 elseif($num > 0){
						  $message=urlencode("Duplicate entry for topic  ".$topic." ");
	                      header('Location:index.php?id=add_topic&&message='.$message);
					  }
					else{  

					  
                   
						 $sql = "INSERT INTO topics (topic_no,topic_name,topic_description,visible)"
                              . " VALUES('$order','$topic','$description','$visible')";

                     mysqli_query($con, $sql) or die(mysqli_error($con));
					header("Location:index.php?id=add_topic"); 
					   
					} 
                    }
                    ?>     

                    <form class="form-horizontal" action="add_topic.php" method="POST" enctype="multipart/form-data">


                        <fieldset>

                            <!-- Form Name -->
                            <legend>Add Topic</legend>

                            <!-- Text input-->
                            
                            <div class="form-group">


                                <label class="col-md-4 control-label" for="cat_name">Topic Name</label>  
                                <div class="col-md-8">
                                    <input id="topic_name" name="topic_name" type="text" placeholder="Topic Name" class="form-control input-md" value="" required="">

                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-md-4 control-label" for="topic_desc">Topic Description</label>  
                                <div class="col-md-8">
                                    <input id="topic_desc" name="topic_desc" type="text" placeholder="Topic Description" class="form-control input-md" value="" required="">

                                </div>
                            </div>
							<div class="form-group">

                                <label class="col-md-4 control-label" for="topic_order">Topic Order</label>  
                                <div class="col-md-8">
                                    <input id="topic_order" name="topic_order" type="text" placeholder="Topic Order" class="form-control input-md" value="" required="" >

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

