<?php

include('classes/MCQuestionClass.php');

$x=new McQuestion();
$id=$_GET['id'];

$x->delete_exam($id);
$x->delete_MC($id);
$x->delete_TF($id);

header("location:editdeleteexaminterface.php");   

  
?>