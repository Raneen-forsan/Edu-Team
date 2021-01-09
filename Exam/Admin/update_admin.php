<?php 


include('classes/class_admin.php');


     $x=new Admin();
     $id=$_GET['id'];
     $data = $x->readById($id);
 

   if(isset($_POST['submit']))
    {
        $x->email      = $_POST['email'];
        $x->password   = $_POST['password'];
        $x->fullname   = $_POST['fullname'];
        $x->update($id);




        header("location:manager_admin.php");   
    }

    include('include/header.php');

   
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Admin Maneger</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Edit Admin</h3>
                            </div>
                            <hr>
                            <form action="" method="post" enctype="multipart/form-data">
                              <?php foreach ($data as $value) {?>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Email Admin</label>
                                    <input name="email" value="<?= $value['email']; ?>"  type="text" class="form-control">
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Password</label>
                                    <input name="password" value="<?= $value['password'] ;?>" type="Password" class="form-control cc-name valid">
                             
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Full Name</label>
                                    <input name="fullname" value="<?= $value['full_name'] ;?>" type="text" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
                                </div>
                            <?php } ?>
                    

                                <div>
                                    <button id="payment-button" name="submit" type="submit"
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