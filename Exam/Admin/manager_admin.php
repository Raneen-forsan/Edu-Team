<?php
include('include/header.php');
include('classes/class_admin.php');


$x=new Admin();

if (isset($_POST['submit'])) {

    $x->email     = $_POST['email'];
    $x->password  = $_POST['password'];
    $x->fullname  = $_POST['fullname'];

    $x->create();
 
}



?>


<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Admin Maneger</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create Admin</h3>
                            </div>
                            <hr>
                            <form action="manager_admin.php" method="post">
                              
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Email </label>
                                    <input name="email" type="text" class="form-control">
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Password</label>
                                    <input name="password" type="Password" class="form-control cc-name valid">
                             
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Full Name</label>
                                    <input name="fullname" type="text" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
                                </div>

                                <div>
                                    <button id="payment-button" name="submit" type="submit"
                                        class="btn btn-lg btn-info btn-block">
                                        <i class="fas fa-save"></i>&nbsp;
                                        <span id="payment-button-amount">Save</span>
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
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Full Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                       <tbody>
                        
                          <?php

                             if($data = $x->readAll()){
                           

                                foreach ($data as $key => $value) {

                                echo "<tr>";
                                echo "<td>{$value['admin_id']}</td>";
                                echo "<td>{$value['email']}</td>";
                                echo "<td>{$value['full_name']}</td>";
                            
                                echo "<td><a href='update_admin.php?id={$value['admin_id']}' class='btn btn-primary'>Edit</a></td>";
                                echo "<td><a href='delete.php?id={$value['admin_id']}' class='btn btn-danger'>Delete</a></td>";
                                echo "</tr>";                               
                             }
                            
                    
}
                          ?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
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
