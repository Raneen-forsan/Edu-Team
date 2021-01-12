<?php 

include('classes/MCQuestionClass.php');


     $x     = new McQuestion();

     $id    = $_GET['id'];
     
    if ($data  = $x->readexambyid($id)) {
         foreach ($data as $key => $value) {
         }
     } 


   if(isset($_POST['submit']))
    {
     $x->exam_name               = $_POST['name'];
     $x->exam_description	    = $_POST['desc'];
 
     $x->update_exam($id);
        header("location:editdeleteexaminterface.php");   
    }

    include('include/header.php');

   
?>

 <div style="padding-top: 100px;">
<div class="row">
<div class="col-lg-2"></div>

           <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">Update Exam Info</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Update Exam </h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" enctype="multipart/form-data">
                                   
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Exam name</label>
                                                <input id="cc-name" name="name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $value["exam_name"]?>">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                       <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Exam Description</label>
                                                <input id="cc-name" name="desc" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $value["exam_description"]?>">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                                    <span id="payment-button-amount">Update</span>
                                                    
                                                    
                                                   
                                                </button>
                                            
                                             
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                  <div class="col-lg-2"></div>
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