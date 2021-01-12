<?php

include('classes/MCQuestionClass.php');


    $x = new McQuestion();

if (isset($_POST['submit'])) {
    $x->Question        = $_POST['question'];
    $x->choice_one	    = $_POST['answerone'];
    $x->choice_two      = $_POST['answertwo'];
    $x->choice_three    = $_POST['answerthree'];
    $x->choice_four     = $_POST['answerfour'];
    $x->correct_answer  = $_POST['correctanswer'];
    $x->category_name   = $_POST['categoryname'];
    $x->exam_image      = $_FILES['exam_image']['name'];
    $x->tmp_name        = $_FILES['exam_image']['tmp_name'];
    $x->path            = 'images_website/';
    move_uploaded_file($x->tmp_name,$x->path.$x->exam_image);
    $x->create();
}

include('include/header.php');
?>
<div style="padding-top: 90px;">
<div class="row">
<div class="col-lg-2"></div>

           <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">M/C Quiz</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add Quiz</h3>
                                        </div>
                                        <hr>
                                        <form action="MCQuiz.php" method="post" enctype="multipart/form-data">
                                   
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Write  Question</label>
                                                <input id="cc-name" name="question" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Image Question</label>
                                    <input name="exam_image" type="file" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
                                       </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice one</label>
                                                <input id="cc-number" name="answerone" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                 <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice two</label>
                                                <input id="cc-number" name="answertwo" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                                 <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice Three</label>
                                                <input id="cc-number" name="answerthree" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                  <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choice Four</label>
                                                <input id="cc-number" name="answerfour" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                                <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Correct Answer</label>
                                                <input id="cc-number" name="correctanswer" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choose Category</label><br>
                                               <select class="form-group" id="cc-number" style="width:100%" name="categoryname">    
                                               <?php  
                                               if($data = $x->readcategory()){
                                               foreach ($data as $key => $value) {
                                              echo " <option>{$value['course_name']}</option>" ;}}
                                                   
                                                ?>     
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="row">
                                        
                                         
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




<div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Question</th>
                                <th>one</th>
                                <th>two</th>
                                <th>three</th>
                                <th>four</th>
                                <th>answer</th>
                                <th>Course</th>
                                <th>Image</th>
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
                                    echo "<td>{$value['Question_id']}</td>";
                                    echo "<td>{$value['Question']}</td>";
                                    echo "<td>{$value['choice_one']}</td>";
                                    echo "<td>{$value['choice_two']}</td>";
                                    echo "<td>{$value['choice_three']}</td>";
                                    echo "<td>{$value['choice_four']}</td>";
                                    echo "<td>{$value['correct_answer']}</td>";
                                    echo "<td>{$value['category_name']}</td>";
                                    echo "<td><img src='images/{$value['exam_image']}' width='150' height='150'></td>";
                                    echo "<td><a href='updatequestion.php?id={$value['Question_id']}' class='btn btn-primary'>Edit</a></td>";
                                   echo "<td><a href='deletequestion.php?id={$value['Question_id']}'
                                   class='btn btn-danger'>Delete</a></td>";                               
                                                            
                                 }
                            }
                          ?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>



<?php include('include/footer.php');?>
