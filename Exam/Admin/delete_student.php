<?php
	include('classes/class_student.php');
	$x 		= new student();
	$x->id 	= $_GET['id'];
	$x->DeleteStudent();
	header('location:student.php');
