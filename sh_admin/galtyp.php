<?php
 ob_start();
session_start();
include("autoload.php");
include("session.php");
$pasid  =   $_SESSION["LogUserID"];
$ad_name    =   $_SESSION["Loguser_name"];
$db     =   new MySql();
$db->connect();
$objA   =   new Admin();
$data   =   $objA->getAdmin($pasid);

$cat    =   new Galtyp();

$records    =   $cat->listGaltyp();
//print_r($records); 

$totalRecords   =   count($records);
//$pageRecords  =   $cat->pageRecords;

If(isset($_POST["submit"])){
     
       $name       =   $_POST['name'];
     
      
     
       $status      =   $_POST['status'];
      
       
       if(empty($name) ){
        header("location:galtyp.php");
            $message    =   new Message('Enter mandatory fields','error');
            $message->setMessage();
            exit;
       }else/*{
          
        if($obj->uploadFile("upload")){ 
                 $image =   $obj->getUploadname();
        
                
                 }*/
       
                  $inputs   =   array('name'=>$name,
                                       
                                      
                                      /*'photo'=>$image,*/
                                       'status'=>$status
                                      );
                                      
                                      //print_r($inputs);exit;
                if($cat->addGaltyp($inputs)){
                
                    
                    $message    =   new Message('New News Added ','message');
                    $message->setMessage();
                    header('Location:galtyp.php');
                    exit;
                    
                }else{
                    
                    $message    =   new Message('Unknown error','error');
                    $message->setMessage();
                }
                
        
       }
      
/*}*/ 
?> 

<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8" />
   <title>Sky High Inn</title>

    <meta name="description" content="blank page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="#" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300"
          rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="assets/css/beyond.min.css" rel="stylesheet" />
    <link href="assets/css/demo.min.css" rel="stylesheet" />
    <link href="assets/css/typicons.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="#" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="assets/js/skins.min.js"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>
   
    <!-- Navbar -->
    <?php include('header.php') ?>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <?php include('menu.php') ?>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->

            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">

                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                         Gallery Type                     </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>                        </a>
                        <a class="refresh" id="refresh-toggler" href="#">
                            <i class="glyphicon glyphicon-refresh"></i>                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>                        </a>                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    
                <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-top bordered-palegreen">
                                            <span class="widget-caption">Galtyp</span>
                                        </div>
                                        <div class="widget-body">
                                                 <form role="form" method="post" enctype="multipart/form-data">
                                                   


                                               
                                                    <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="sminput">Gallery Name</label>
                                                        <input type="text" name="name" class="form-control input-sm" id="sminput" >
                                                    </div></div>

                                                   
                                                 

                                                 
                                                
                                                
                                                    <div class="row">
                                                    <div class="col-sm-12">
                                                     <label>Status</label>
                                                    </div>
                                                        <div class="col-sm-8">
                                                            <div class="input-group">
                                                        <select name="status" class="form-control select2" style="width: 100%;">
                                                             
                                                                                <option value="1">Publish</option>
                                                                                 <option value="2">Unpublish</option>
                                                                               
                                                            </select>
                                                                
                                                            

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="submit">
                                                        
                                                        </div>
                                                        </div>
                                                   
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                <div class="row">


                    
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                           
                          
                          
                             <div style=" padding-left:80%;font-size:25px">
                                    
                                     <a href="testi_add.php" class="btn btn-primary shiny">+Add New</a>
                                      
                                </div>       
                            <div class="well with-header with-footer">
                                
                                <div class="header bordered-pink">
                                 Gallery Type
                                </div>
                            
                                         <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                               #
                                            </th>
                                          
                                              <th >
                                            Galler Name
                                            </th>
                                          
                                          
                                              <th >
                                           Status
                                            </th>
                                              <th >
                                            </th>
                                              <th >
                                           
                                            </th>
                                             <th >
                                           
                                            </th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php 
                                    for($i=0;$i<$totalRecords;$i++){
                                        ?>
                                    
                                          <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $records[$i]["galtyp_name"];?></td>
                                            
                                            
                                            
                                            <td><?php $st= $records[$i]["galtyp_stus"];
                                            if($st==1){echo "Published"; }else{ echo "unpublished";}?></td>
                                           
                                            <td><center>
                                                <a href="galtyp_edit.php?n_id=<?php echo $records[$i]
                                                ["galtyp_id"];?>" style="width:100%" class="btn btn-block btn-info fa fa-trash">Edit</a>
                                              </center></td>
                                    <td><a href="galtyp_delete.php?a_id=<?php echo $records[$i]
                                            ["galtyp_id"];?>"  style="width:100%" class="btn btn-block btn-info fa fa-trash">Delete</a>
                                              </center></td>
                                          </tr>
                                         
                                        <?php 
                                         } 
                                ?>   

                                                                </tbody>
                                </table>

                               
                            </div>
                               </div></div>  
                             
                            
                            </div>
                        </div>
                    </div>
   









                            
                            </div>






                        </div>
                    </div>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->
    </div>

    <!--Basic Scripts-->
    <script src="assets/js/jquery-2.0.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="assets/js/beyond.min.js"></script>
<script src="assets/js/datetime/bootstrap-datepicker.js"></script>

    <!--Bootstrap Time Picker-->
    <script src="assets/js/datetime/bootstrap-timepicker.js"></script>
<script>
   $('.date-picker').datepicker();

        //--Bootstrap Time Picker--
        $('#timepicker1').timepicker();
</script>
    <!--Page Related Scripts-->
    <!--Summernote Scripts-->
    <script src="assets/js/editors/summernote/summernote.js"></script>
    <script>
        $('#summernote').summernote({ height: 300 });
    </script>
    <!--Google Analytics::Demo Only-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-60412744-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
<!--  /Body -->

<!-- Mirrored from beyondadmin-v1.3.s3-website-us-east-1.amazonaws.com/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2015 06:07:50 GMT -->
</html>
