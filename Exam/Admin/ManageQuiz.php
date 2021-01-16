<?php 
include('include/header.php');
include('classes/class_QuizTF.php');


    $x = new QuizTF();


if(isset($_POST['submit'])){
           
        $x->Nquestion       = $_POST['Nquestion'];
        $x->Cquestion       = $_POST['Cquestion'];
        $x->Cquestion1      = $_POST['Cquestion1'];
        
        $x->c1              = $_POST['c1'];
        $x->c2              = $_POST['c2'];
        $x->c3              = $_POST['c3'];
        $x->c4              = $_POST['c4'];
        $x->correct_a       = $_POST['correct_a'];
        $x->mark            = $_POST['mark'];


        $x->course_name   = $_POST['course_name'];
        $x->exam_image    = $_FILES['exam_image']['name'];
        $tmp_name         = $_FILES['exam_image']['tmp_name'];
        $path             = "images_website/";
        move_uploaded_file($tmp_name,$path.$x->exam_image);
        
        $courssss_id = $x->readcourse();
        foreach ($courssss_id as $key => $value) {
           $x->id_for_insert_course_id =  $value['course_id'];
        }

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
                                        <form action="" method="post" enctype="multipart/form-data" >
                                         
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Add  Question</label>
                                                <input id="cc-name" name="Nquestion" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">choices (T/F)</label>
                                                    <select name="Cquestion">
                                                        <option></option>
                                                        <option>T</option>    
                                                        <option>F</option>
                                                    </select>

                                                    <select name="Cquestion1">
                                                        <option></option>
                                                        <option>T</option>    
                                                        <option>F</option>
                                                    </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice(1)</label>
                                                <input id="cc-number" name="c1" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice(2)</label>
                                                <input id="cc-number" name="c2" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice(3)</label>
                                                <input id="cc-number" name="c3" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice(4)</label>
                                                <input id="cc-number" name="c4" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>

<!------------------------------------------------------->                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Correct Answer</label>
                                                <input id="cc-number" name="correct_a" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Mark</label>
                                                <input id="cc-number" name="mark" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
<!------------------------------------------------------->                                            
                                                   <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Upload Your Question</label>
                                                <input id="cc-number" name="exam_image" type="file" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choose Course</label><br>
                                               <select id="cc-number" name="course_name" style="width:100%;height:30px;">
                                                <?php

                                                $data = $x->readcourseall();
                                                  
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
                                <th>Question</th>
                                <th>Choice T/F</th>
                                <th>Choice T/F</th>
                                <th>Choice 1</th>
                                <th>Choice 2</th>
                                <th>Choice 3</th>
                                <th>Choice 4</th>
                                <th>Correct Answer</th>
                                <th>Mark</th>
                                <th>Image</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                       <tbody>
                        
                          <?php

                        if($printer = $x->ReadQuestion()){
                                foreach ($printer as $key => $value) {
                                    echo"
                                    <tr>
                                        <td> {$value['id']} </td>
                                        <td> {$value['question']} </td>
                                        <td> {$value['Cquestion']} </td>
                                        <td> {$value['Cquestion1']} </td>
                                        <td> {$value['c1']} </td>
                                        <td> {$value['c2']} </td>
                                        <td> {$value['c3']} </td>
                                        <td> {$value['c4']} </td>
                                        <td> {$value['correct_a']} </td>
                                        <td> {$value['mark']} </td>
                                        <td> <img src='images_website/{$value['exam_image']}'></td>"; 
                                        
                                         echo "<td><a href='update_question.php?id={$value['id']}' class='btn btn-primary'>Edit</a></td>";
                                      echo "<td><a href='delete_question.php?id={$value['id']}'
                                       class='btn btn-danger'>Delete</a></td>"; 
                                        
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