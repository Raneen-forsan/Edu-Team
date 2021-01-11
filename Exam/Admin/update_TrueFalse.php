<?php 


include('classes/class_QuizTF.php');


     $x=new QuizTF();
     $id=$_GET['id'];
     $data = $x->readById($id);
 

   if(isset($_POST['submit']))
    {
        $x->Nquestion   = $_POST['Nquestion'];
        $x->Cquestion   = $_POST['Cquestion'];
        $x->Iquestion   = $_POST['Iquestion'];

  

        $x->exam_image  = $_FILES['exam_image']['name'];
        $tmp_name       = $_FILES['exam_image']['tmp_name'];
        $path           = 'images/';
        
        move_uploaded_file($tmp_name,$path.$x->exam_image);

        $x->update($id);

        header("location:TrueFalse.php");   
    }

    include('include/header.php');

   
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">T/F Quiz</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Update Quiz</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" enctype="multipart/form-data" >

                                             <?php foreach ($data as $value) {?>
                                         
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Add  Question</label>
                                                <input id="cc-name" name="Nquestion" type="text"
                                                value="<?= $value['question'];?>" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Correct answer</label>
                                                <input id="cc-number" name="Cquestion" type="tel" 
                                                value="<?= $value['Correct_answer'];?>"class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                 <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Incorrect Answer</label>
                                                <input id="cc-number" name="Iquestion" type="tel"
                                                 value="<?= $value['Incorrect_Answer'];?>"
                                                 class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                             
                                                <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Upload Your Question</label>
                                                <input id="cc-number" name="exam_image" type="file" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choose Category</label><br>
                                               <select id="cc-number" name="" 
                                               style="width:100%;height:30px;">
                                                    <?php
                                                       $data=$x->readcourse();
         
                                                       foreach ($data as  $value) {
                                                          
                                                          echo "<option>"
                                                          .$value['course_name']."</option>";
                                                       }
                                                    ?>
                                                  
                                                   
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>

                                           </div>
                                            <div class="row">
                                        
                                         
                                            </div>
                                                
                                            <div>
                                                 <?php } ?>
                                                <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Update</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>

                                        <div class="row m-t-30">
            <div class="col-md-12">
             
            </div>
        </div>
    </div>

                                    </div>
                                </div>
                            </div>
<div class="col-lg-2"></div>
</div>

</div>

<?php include('include/footer.php');?>