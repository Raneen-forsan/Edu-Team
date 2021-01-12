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
<div style="padding-top:160px;">

</div>




<div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>Exam ID</th>
                                <th>Exam Name</th>
                                <th>Exam Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                       <tbody>
                        
                          <?php

                                if($data = $x->readexam()){
                                foreach ($data as $key =>$value) {
                                    echo "<tr>";
                                    echo "<td>{$value['exam_id']}</td>";
                                    echo "<td>{$value['exam_name']}</td>";
                                    echo "<td>{$value['exam_description']}</td>";
                                     echo "<td><a href='updateexam.php?
                                     id={$value['exam_id']}'
                                     class='btn btn-primary'>Edit</a></td>";
                                     echo "<td><a href='delete_exam.php?
                                     id={$value['exam_id']}'
                                     class='btn btn-danger'>Delete</a></td>";
                                                      
                                                            
                                 }
                            }
                          ?>
                        </tbody>
                   

                    </table>
                  
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>



<?php include('include/footer.php');?>
