
<?php include('classes/courseClass.php');?>
<?php

    $x=new Course();
    $x->deleteData($_GET['id']);
    
    
    header("location:createCousre.php");


?>


