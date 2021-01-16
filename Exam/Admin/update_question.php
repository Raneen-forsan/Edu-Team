<?php 


include('classes/class_QuizTF.php');


     $x=new QuizTF();
     $id=$_GET['id'];
     $data = $x->readById($id);
 if ($data  = $x->readById($id)) {
         foreach ($data as $key => $value) {
         }
     } 
 

   if(isset($_POST['submit']))
    {
        $x->question        = $_POST['Nquestion'];
        $x->Cquestion       = $_POST['Cquestion'];
        $x->Cquestion1      = $_POST['Cquestion1'];
        $x->c1              = $_POST['c1'];
        $x->c2              = $_POST['c2'];
        $x->c3              =$_POST['c3'];
        $x->c4              =$_POST['c4'];
        $x->correct_a       =$_POST['correct_a'];
        $x->mark            =$_POST['mark'];

  if ($_FILES['exam_image']['name'] != ""){
        $x->exam_image               = $_FILES['exam_image']['name'];
        $temp_name                   = $_FILES['exam_image']['tmp_name'];
        $path                        = "images/";

        move_uploaded_file($temp_name,$path.$x->exam_image);      
    }else
       {
           foreach ($data as $value) {
           $x->exam_image = $value['exam_image'];

       }


        }
        $x->update($id);

        header("location:ManageQuiz.php");   
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
                                         
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Add  Question</label>
                                                <input id="cc-name" name="Nquestion" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $value['question']?>">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">choices (T/F)</label>
                                                    <select name="Cquestion" value="<?php echo $value['Cquestion']?>">
                                                        <option></option>
                                                        <option value="T">T</option>    
                                                        <option value="F">F</option>
                                                    </select>

                                                    <select name="Cquestion1" value="<?php echo $value['Cquestion1']?>">
                                                        <option></option>
                                                        <option value="T">T</option>    
                                                        <option Value="F">F</option>
                                                    </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice(1)</label>
                                                <input id="cc-number" name="c1" type="tel" class="form-control cc-number identified visa"  data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" value="<?php echo $value['c1']?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice(2)</label>
                                                <input id="cc-number" name="c2" type="tel" class="form-control cc-number identified visa"  data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" value="<?php echo $value['c2']?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice(3)</label>
                                                <input id="cc-number" name="c3" type="tel" class="form-control cc-number identified visa"  data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" value="<?php echo $value['c3']?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice(4)</label>
                                                <input id="cc-number" name="c4" type="tel" class="form-control cc-number identified visa" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" value="<?php echo $value['c4']?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>

<!------------------------------------------------------->                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Correct Answer</label>
                                                <input id="cc-number" name="correct_a" type="tel" class="form-control cc-number identified visa"  data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" value="<?php echo $value['correct_a']?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Mark</label>
                                                <input id="cc-number" name="mark" type="tel" class="form-control cc-number identified visa" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" value="<?php echo $value['mark']?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
<!------------------------------------------------------->                                            
                                                  <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Upload  image</label>
                                    <br>
                                    <?php echo "<img name='exam_image' src='images/{$value['exam_image']}' width='90px'>" ?>
                                    
                                    <input name="exam_image" type="file"
                                    value="sadasd.jpg" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
                                                </div>
                                    
                                            <div class="row">
                                        
                                         
                                            </div>
                                            <div>
                                                <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Update</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
<div class="col-lg-2"></div>
</div>
<div class="col-lg-2"></div>
</div>

</div>

<?php include('include/footer.php');?>