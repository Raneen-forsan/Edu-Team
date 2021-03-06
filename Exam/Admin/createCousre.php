<?php include('include/header.php');?>
<?php include('classes/courseClass.php');?>


<?php

    $x=new Course();

    if(isset($_POST['submit'])){

        $courseName = $_POST['course_name'];
        $cousreDescription = $_POST['course_description'];
        
        echo $x->CreateCourse($courseName,$cousreDescription);
        echo '<meta http-equiv="refresh" content="0">';

    }
?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Courses</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Credit Course</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Course Name</label>
                                                <input id="cc-pament" name="course_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Course Description</label>
                                                <input id="cc-name" name="course_description" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                             <div>
                                                <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-amount">Create</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Course ID</th>
                                                <th>Course Name</th>
                                                <th>Course Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $x=new Course();
                                                $rslt=$x->selectCourseData();
                                                
                                                while($data=$x->fetchAll($rslt)){
                                                    foreach ($data as $key => $value){
                                                echo "<tr>";
                                                echo "<td>{$value['course_id']}</td>";
                                                echo "<td>{$value['course_name']}</td>";
                                                echo "<td>{$value['course_description']}</td>";
                                                echo "<td><a href='editCourse.php?id={$value['course_id']}' class='btn btn-primary'>Edit</a></td>";
                                                echo "<td><a href='deleteCourse.php?id={$value['course_id']}' class='btn btn-danger'>Delete</a></td>";
                                                echo "</tr>";
                                                    }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

                        </div>
                    </div>
                </div>

           

<?php include('include/footer.php');?>