<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Coderscrew - Admin Panel</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <script type="text/javascript">
 
/*  function confirmDelete()
{
    return confirm("Are you sure want remove spouse?");
} */

 function confirmDel()
{
    return confirm("Are you sure want to delete?");
}
  
  
  /////for client properties
   
  
  
 
 
</script>
<script src="//cdn.ckeditor.com/4.5.9/full/ckeditor.js"></script>
<style type="text/css">
.errormsg{

color:#FF0000;

font-size:9px;

font-weight:bold;

}

#errmsgbox{

border:dotted #FFCC66 1px;

background-color:#FFFFCC;

width:400px;

height:30px;

color:#FF0000;

font-size:15px;

font-weight:bold;

}
</style>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">Coders <span class="lite">Crew</span></a>
      <!--logo end-->

   
     
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Topics Management</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="index.php?id=add_topic">Add Topic</a></li>
              <li><a class="" href="index.php?id=view_topic">View All Topics</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Chapters management</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="index.php?id=add_chapter">Add Chapter</a></li>
              <li><a class="" href="index.php?id=view_chapter">View Chapters</a></li>
              
            </ul>
          </li>
		  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>Paragraph Management</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="index.php?id=add_paragraph">Add Paragraph</a></li>
              <li><a class="" href="index.php?id=view_paragraph">View Paragraphs</a></li>
              
            </ul>
          </li>
         
         

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        
        <div class="row">
            <?php
                    
					include('db.php');
					$id = @$_GET['id'];
                    switch ($id) {
                        case '':
						?>
						<div class="row">
          <div class="col-lg-12">
            
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>
						<?php
                            include('main.php');
                            break;
                        case 'add_topic':
						?>
						<div class="row">
                            <div class="col-lg-12">
                               <ol class="breadcrumb">
                               <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                               <li><i class="fa fa-laptop"></i>Add Topic</li>
                               </ol>
                            </div>
                        </div>
		                <div id="errmsgbox">
                           <div id="divError" class="divError"><span> 
	                       <?php
	                       if( !empty( $_REQUEST['message'] ) )
                                {
                                  echo sprintf( '<p>%s</p>', $_REQUEST['message'] );
                                }
	
	                          ?>	
	                     </span></div>

                         </div>
						<?php
						 
                            include('add_topic.php');
                            break;
                        case 'view_topic':
						?>
						<div class="row">
                        <div class="col-lg-12">
            
                              <ol class="breadcrumb">
                                  <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                  <li><i class="fa fa-laptop"></i>View Topics</li>
                              </ol>
                          </div>
                          </div>
		                   <div id="errmsgbox">
                           <div id="divError" class="divError"><span> 
	                       <?php
	                       if( !empty( $_REQUEST['message'] ) )
                                {
                                  echo sprintf( '<p>%s</p>', $_REQUEST['message'] );
                                }
	
	                          ?>	
	                     </span></div>

                         </div>
						<?php
                           include('view_topics.php');
                            break;
                        case 'edit_topic':
						      $number=$_GET['topic_no'];
						      $sql1="SELECT * FROM topics WHERE topic_no='$number' ";
						     $results= mysqli_query($con, $sql1);
						     $rows=mysqli_fetch_array($results);
                           include('edit_topic.php');
                            break;
                        case 'add_chapter':
						?>
						<div class="row">
                            <div class="col-lg-12">
                               <ol class="breadcrumb">
                               <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                               <li><i class="fa fa-laptop"></i>Add Chapter</li>
                               </ol>
                            </div>
                        </div>
		                <div id="errmsgbox">
                           <div id="divError" class="divError"><span> 
	                       <?php
	                       if( !empty( $_REQUEST['message'] ) )
                                {
                                  echo sprintf( '<p>%s</p>', $_REQUEST['message'] );
                                }
	
	                          ?>	
	                     </span></div>

                         </div>
						 <?php
                           include('add_chapter.php');
                            break;
                        case 'view_chapter':
						?>
						<div class="row">
                            <div class="col-lg-12">
                               <ol class="breadcrumb">
                               <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                               <li><i class="fa fa-laptop"></i>View Chapters</li>
                               </ol>
                            </div>
                        </div>
		                <div id="errmsgbox">
                           <div id="divError" class="divError"><span> 
	                       <?php
	                       if( !empty( $_REQUEST['message'] ) )
                                {
                                  echo sprintf( '<p>%s</p>', $_REQUEST['message'] );
                                }
	
	                          ?>	
	                     </span></div>

                         </div>
						 <?php
                           include('view_chapters.php');
                            break;
                         case 'edit_chapter':
						     $topic_no=$_GET['topic_no'];
							 $chapter=$_GET['chapter_no'];
						     $sql2="SELECT * FROM chapters WHERE chapter_no='$chapter' AND topic_no='$topic_no' ";
						     $results1= mysqli_query($con, $sql2);
						     $rowss=mysqli_fetch_array($results1);
                           include('edit_chapter.php');
                            break;
                        case 'add_paragraph':
						?>
						<div class="row">
                            <div class="col-lg-12">
                               <ol class="breadcrumb">
                               <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                               <li><i class="fa fa-laptop"></i>Add Paragraph</li>
                               </ol>
                            </div>
                        </div>
		                <div id="errmsgbox">
                           <div id="divError" class="divError"><span> 
	                       <?php
	                       if( !empty( $_REQUEST['message'] ) )
                                {
                                  echo sprintf( '<p>%s</p>', $_REQUEST['message'] );
                                }
	
	                          ?>	
	                     </span></div>

                         </div>
						 <?php
                           include('add_paragraph.php');
                            break;
                        case 'view_paragraph':
						?>
						<div class="row">
                            <div class="col-lg-12">
                               <ol class="breadcrumb">
                               <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                               <li><i class="fa fa-laptop"></i>View Paragraph</li>
                               </ol>
                            </div>
                        </div>
		                <div id="errmsgbox">
                           <div id="divError" class="divError"><span> 
	                       <?php
	                       if( !empty( $_REQUEST['message'] ) )
                                {
                                  echo sprintf( '<p>%s</p>', $_REQUEST['message'] );
                                }
	
	                          ?>	
	                     </span></div>

                         </div>
						 <?php
                      include('view_paragraph.php');
                            break;
                        case 'edit_paragraph':
                             $para_no=$_GET['parag_no'];
							 $chapter_no=$_GET['chapter_no'];
						     $sql3="SELECT * FROM paragraphs WHERE para_no='$para_no' AND chapter_no='$chapter_no' ";
						     $results2= mysqli_query($con, $sql3);
						     $rowx=mysqli_fetch_array($results2);
                           include('edit_paragraph.php');
                            break;
                        case 'allservicecharges':
                      include('services.php');
                            break;
                         case 'request':
                           // include('requests.php');
                            break;
                        case 'add_products':
                           // include('add_products.php');
                            break;
                        case 'add_employees':
                           // include('employees.php');
                            break;
                    }
                    ?>
          

          
          
        </div>
		
      

  

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <a href="#">Coderscrew</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
