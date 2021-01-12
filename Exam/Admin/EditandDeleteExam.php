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


          
<div class="row" style="margin-top:400px;">
            <div class="col-md-12">
                <div><center><h4> Multiple Choice Exam</h4></center></div>

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
                                    echo "<td><a href='updatequestion.php ?id={$value['Question_id']}' class='btn btn-primary'>Edit</a></td>";
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
