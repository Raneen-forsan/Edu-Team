<?php 

include('classes/MCQuestionClass.php');


$x=new McQuestion();
     $id=$_GET['id'];
     $data = $x->readById($id);
 

   if(isset($_POST['submit']))
    {
$x->Question       = $_POST['question'];
$x->choice_one	   = $_POST['answerone'];
$x->choice_two     = $_POST['answertwo'];
$x->choice_three   = $_POST['answerthree'];
$x->choice_four    = $_POST['answerfour'];
$x->correct_answer = $_POST['correctanswer'];
$x->category_name  = $_POST['categoryname'];


       
       
       if ($_FILES['exam_image']['name'] != ""){
        $x->exam_image          = $_FILES['exam_image']['name'];
        $temp_name              = $_FILES['exam_image']['tmp_name'];
        $path                   = "images/";
        move_uploaded_file($temp_name,$path.$x->exam_image);      
    }else{
           foreach ($data as $value) {
        $x->exam_image = $value['exam_image'];}
    }
 


     $x->update($id);
        header("location:MCQuiz.php");   
    }

    include('include/header.php');

   
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                          
<div class="row">
    <div class="col-lg-2"></div>

           <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">M/C Quiz</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Update Quiz</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <?php foreach ($data as $value) {?>
                                   
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Write  Question</label>
                                                <input id="cc-name" name="question" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $value['Question']?>">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                              <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Image Question</label>
                                    <br>
                                    <?php echo "<img name='exam_image' src='images/{$value['exam_image']}' width='90px'>" ?>
                                    
                                    <input name="exam_image" type="file"
                                    value="sadasd.jpg" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
                                                </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice one</label>
                                                <input id="cc-number" name="answerone" type="tel" class="form-control cc-number identified visa"  data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" value="<?php echo $value['choice_one']?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                 <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice two</label>
                                                <input id="cc-number" name="answertwo" type="tel" class="form-control cc-number identified visa"  data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" value="<?= $value['choice_two'];?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                                 <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice Three</label>
                                                <input id="cc-number" name="answerthree" type="tel" class="form-control cc-number identified visa" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" value="<?= $value['choice_three'];?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                  <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice Four</label>
                                                <input id="cc-number" name="answerfour" type="tel" class="form-control cc-number identified visa"  data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" value="<?= $value['choice_four'];?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                                <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Correct Answer</label>
                                                <input id="cc-number" name="correctanswer" type="tel" class="form-control cc-number identified visa"  data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" value="<?= $value['correct_answer'];?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choose Category</label><br>
                                               <select class="form-group" id="cc-number" style="width:100%" name="categoryname" value="<?= $value['category_name'];?>">    
                                               <?php
    $products = $x->readcategory(); 
    foreach ($products as $product) { 
        $i=$product['course_name'];
        echo "<option value='$i'";
        if($product['course_id']==$product['course_id']){
             echo "selected";
                echo">";
                echo $product['course_name'];
                echo"</option>";
      }
    else{
               echo "<option value='$i'>";
                echo $product['course_name'];
                 echo"</option>";
    }
    
    }
                                                 ?>     
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="row">
                                        
                                         
                                            </div>
                                            <?php } ?>

                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                                    <span id="payment-button-amount">Update</span>
                                                   
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                  <div class="col-lg-2"></div>

                            
                            
                            
                            
                            
                         
  
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                           

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