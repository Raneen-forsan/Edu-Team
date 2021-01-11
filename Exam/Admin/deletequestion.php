<?php

include('classes/MCQuestionClass.php');

$x=new McQuestion();
$id=$_GET['id'];

$x->delete($id);
header("location:MCQuiz.php");   

  
?>
