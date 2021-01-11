<?php 
include('include/header.php');
include('classes/class_QuizTF.php');


$x=new QuizTF();


if(isset($_POST['submit']))

{
   
$x->Nquestion   = $_POST['Nquestion'];
$x->Cquestion   = $_POST['Cquestion'];
$x->Iquestion   = $_POST['Iquestion'];

$x->exam_image  = $_FILES['exam_image']['name'];
$tmp_name       = $_FILES['exam_image']['tmp_name'];
$path           = "images/";
move_uploaded_file($tmp_name,$path.$x->exam_image);

$x->create();
echo '<meta http-equiv="refresh" content="0">';

    

}


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
                                            <h3 class="text-center title-2">Add Quiz</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post"enctype="multipart/form-data" >
                                         
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Add  Question</label>
                                                <input id="cc-name" name="Nquestion" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Correct answer</label>
                                                <input id="cc-number" name="Cquestion" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                 <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Incorrect Answer</label>
                                                <input id="cc-number" name="Iquestion" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
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
                                               <select id="cc-number" name="cc-number" style="width:100%;height:30px;">
                                                <?php

                                                $data = $x->readcourse();
                                                  
                                                  foreach ($data as  $value) {
                                                    
                                                echo " <option>".$value['course_name']."</option>  ";
                                                }?>     
                                                </select>
                                            
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                               
                                            </div>

                                            <div class="row">
                                        
                                         
                                            </div>
                                            <div>
                                                <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Add</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
<div class="col-lg-2"></div>
</div>
 <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>question</th>
                                <th>Correct_answer</th>
                                <th>Incorrect_Answer</th>
                                <th>exam_image</th>
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
                                echo "<td>{$value['id']}</td>";
                                echo "<td>{$value['question']}</td>";
                                echo "<td>{$value['Correct_answer']}</td>";
                                echo "<td>{$value['Incorrect_Answer']}</td>";
                                echo "<td><img src='images/{$value['exam_image']}' width='150' height='150'></td>";
                                echo "<td><a href='update_TrueFalse.php?id={$value['id']}' class='btn btn-primary'>Edit</a></td>";
                                echo "<td><a href='delete_TrueFalse.php?id={$value['id']}' class='btn btn-danger'>Delete</a></td>";
                                echo "</tr>";                               
                             }
                            
                    
}
                          ?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
</div>
<?php include('include/footer.php');?>