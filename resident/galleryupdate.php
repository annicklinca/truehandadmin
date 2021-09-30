<?php
 include 'navbar.php';
 include '../connection.php'; 
 include 'admin_session.php';
 $seri_id=$_GET['updategallery'];

 if (isset($_POST['updatgallery'])){
      
   $target="../photos/".basename($_FILES['image']['name']);

   $image=$_FILES['image']['name'];
   
   $title=$_POST['title'];
   $caption=$_POST['caption'];
   $others=$_POST['others'];
    if($image==''){
       $sql=mysqli_query($conn,"UPDATE gallery SET title='$title', caption='$caption' WHERE id=$seri_id;");
    }
    else{
       $sql=mysqli_query($conn,"UPDATE gallery SET title='$title', caption='$caption', photo='$image' WHERE id=$seri_id;");
 }
   if ($sql) {
           
       if (move_uploaded_file($_FILES['image']['tmp_name'],$target)){    
           $successmessage .='update about Successefully';	
       }
       else{
               
        $successmessage .='update about Successefully';	
           }
   }
   else {
    $errormessage .='Update services  failed'; 
   }
   
}

?>
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <!-- <div class="page-header-title">
                                        <h5 class="m-b-10">Home</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Basic Componants</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Navs & tabs</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!--[content section] start-->
                                <div class="col-sm-12">
                                    <h5>Gallery</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <?php
                                                if ( isset($successmessage)) {
                                                    echo '
                                                        <div class="card borderless-card bg-success">
                                                            <div class="card-block success-breadcrumb">
                                                                <div class="breadcrumb-header">
                                                                    <span style="color:white;">'.$successmessage.'</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ';
                                                }
                                                ?>
                                                <?php
                                                if ( isset($errormessage)) {
                                                  echo '
                                                      <div class="card borderless-card  bg-danger">
                                                          <div class="card-block danger-breadcrumb">
                                                              <div class="breadcrumb-header">
                                                                  <span style="color:white;">'.$errormessage.'</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                          <?php
                                                if (isset($_GET['updategallery'])) {
                                                    $ser_id=$_GET['updategallery'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM gallery WHERE gallery.id=$ser_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                    <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">About title</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control form-control-normal"
                                                           >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Caption</label>
                                                        <div class="col-sm-10">                                                                
                                                        <input type="text" name="caption" value="<?php echo $row['caption']; ?>" class="form-control form-control-normal"
                                                           > </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Photo</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" name="image" value="<?php echo $row['photo']; ?>"
                                                            class="form-control form-control-capitalize">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="updatgallery" value="Update gallery"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                                        <?php
                                                    } 
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <?php
include 'footer.php'
?>