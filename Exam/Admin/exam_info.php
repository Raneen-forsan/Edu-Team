<?php

include('classes/MCQuestionClass.php');


    $x = new McQuestion();

if (isset($_POST['submit'])) {
    $x->exam_name               = $_POST['name'];
    $x->exam_description	    = $_POST['desc'];
    $x->create_exam();
     echo '<meta http-equiv="refresh" content="0">';

}

include('include/header.php');
?>
<div style="padding-top: 100px;">
<div class="row">
<div class="col-lg-2"></div>

           <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">Add Exam Info</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add Exam </h3>
                                        </div>
                                        <hr>
                                        <form action="exam_info.php" method="post" enctype="multipart/form-data">
                                   
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Exam name</label>
                                                <input id="cc-name" name="name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                       <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Exam Description</label>
                                                <input id="cc-name" name="desc" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                                    <span id="payment-button-amount">Add</span>
                                                    
                                                    
                                                   
                                                </button>
                                            
                                             
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                  <div class="col-lg-2"></div>
              </div>
</div>





                        <center><div class="col-lg-8 ml-5"><a href="MCQuiz.php"><button style="margin-top:100px;"id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                                    <span id="payment-button-amount">Continue to add question MC</span>
                                                    
                                                    
                                                   
                                                </button></a>
                         <a href="TrueFalse.php"><button style="margin-top:100px"id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                                    <span id="payment-button-amount">Continue to add question TF</span>
                                                    
                                                    
                                                   
                                                </button></a></div></center>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>



<?php include('include/footer.php');?>
