<?php

include('classes/class_QuizTF.php');

$x=new QuizTF();

$id=$_GET['id'];

$x->delete($id);

header("location:ManageQuiz.php");   

?>