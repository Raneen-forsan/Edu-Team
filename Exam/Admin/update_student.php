<?php
include('classes/class_student.php');

$x = new student();
$x->id = $_GET['id'];


if ($row = $x->SelectUpdateStudent()) {
    foreach ($row as $key => $value) {
    }
}

$rr = $value['image'];

if (isset($_POST['sub'])) {
    $x->email               = $_POST['email'];
    $x->full_name           = $_POST['fullname'];
    $x->password            = $_POST['password'];
    $x->mobile              = $_POST['mobile'];
    $x->education_level     = $_POST['education_level'];

    if ($_FILES['fileimage']['name'] != ""){
        $x->image               = $_FILES['fileimage']['name'];
        $temp_name              = $_FILES['fileimage']['tmp_name'];
        $path                   = "images_website/";
        move_uploaded_file($temp_name,$path.$x->image);      
    }else{
        $rr;             
    }
    $x->UpdateStudent();
    header("location: student.php");
}




include('include/header.php');
?>


<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Update Maneger Student</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Student</h3>
                            </div>
                            <hr>
                            <form action="" method="post" enctype="multipart/form-data">
                              
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Email</label>
                                    <input name="email" type="text" 
                                    value="<?php echo $value['email']; ?>" class="form-control">
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Password</label>
                                    <input name="password"  type="Password" 
                                    value="<?php echo $value['password']; ?>" class="form-control cc-name valid">
                             
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Full Name</label>
                                    <input name="fullname" type="text" 
                                    value="<?php echo $value['full_name']; ?>"
                                     class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
                                </div>


                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Phone</label>
                                    <input name="mobile" type="text" 
                                    value="<?php echo $value['mobile']; ?>" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
                                </div>

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Image Student</label>
                                    <br>
                                    <?php echo "<img name='fileimage' src='images_website/{$value['image']}' width='90px'>" ?>
                                    
                                    <input name="fileimage" type="file"
                                    value="sadasd.jpg" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
                                </div>

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Education Level</label>
                                        
                                    <select name="education_level" class="form-control cc-number identified visa">
                                        <option><?php echo $value['education_level']; ?></option>
                                        </select>

                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
                                </div>

                                <div>
                                    <button id="payment-button" name="sub" type="submit"
                                        class="btn btn-lg btn-info btn-block">
                                        <i class="fas fa-save"></i>&nbsp;
                                        <span id="payment-button-amount">Update</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
            </div>
        </div>
    </div>

    <?php include('include/footer.php');?>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    </body>

    </html>
    <!-- end document-->
