
<?php include('classes/courseClass.php');?>
<?php

     $x=new Course();
     $dta=$x->selectDataForUpdate($_GET['id']);
     $dtta=$x->fetchAll($dta);
     $id = $_GET['id'];
     if(isset($_POST['save'])){
        $x->coursename = $_POST['course_name'];
        $x->coursedesc = $_POST['course_description'];
        $x->updateData($id);
        header("location:createCousre.php");
    }

    include('include/header.php');
    ?>
        $x->updateData($_GET['id']);

        header("location:createCousre.php");
       
     }
     ?>
     <?php include('include/header.php');?>

    
    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Courses</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Update Course</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post">
                                        <?php foreach ($dtta as $value) {?>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Course Name</label>
                                                <input id="cc-pament" name="course_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $value['course_name'] ?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Course Description</label>
                                                <input id="cc-name" name="course_description" type="text" value="<?php echo $value['course_description'] ?>" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <?php } ?>
                                             <div>
                                                <button id="payment-button" type="submit" name="save" class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-amount">Update</span>
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

<?php include('include/footer.php');?>