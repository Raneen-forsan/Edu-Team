<?php 
require('include/DBconnection.php');

class QuizTF extends dbconnection{

    public $admin_id;
	public $Nquestion;
	public $Cquestion;
    public $Cquestion1;
    public $c1;
	public $c2;
	public $c3;
	public $c4;
	public $correct_a;
	public $mark;
    public $exam_image;
    public $id_for_insert_course_id;
    public $course_name;


	// public $category_name;

	public function create()
	{
		$query = "INSERT INTO quiztf
		(question,Cquestion,Cquestion1,c1,c2,c3,c4,correct_a,mark,exam_image,course_id)

		VALUES('$this->Nquestion','$this->Cquestion','$this->Cquestion1','$this->c1','$this->c2','$this->c3',
		'$this->c4','$this->correct_a','$this->mark','$this->exam_image',
		'$this->id_for_insert_course_id')";
		 $this->performQuery($query);
	}

	public function readcourse(){
		$query  = "SELECT course_id FROM course where course_name = '$this->course_name' ";
		$result = $this->performQuery($query);
		return    $this->fetchAll($result);	
	}

	public function readcourseall(){
		$query  = "SELECT * FROM course";
		$result = $this->performQuery($query);
		return 	  $this->fetchAll($result);		
	}

	public function ReadQuestion(){
		$query  = "SELECT * FROM quiztf";
		$result = $this->performQuery($query);
		return    $this->fetchAll($result);
	}

	public function readById($id){
		$query  = "SELECT * FROM QuizTF WHERE id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}


	public function update($id){ 
		// $query = "UPDATE QuizTF SET question              = '$this->Nquestion',
		// 						    Correct_answer        = '$this->Cquestion',
		// 						    Incorrect_Answer      = '$this->Iquestion',
		// 						    category_name         = '$this->category_name',
		// 						    exam_image            = '$this->exam_image'
		// 						    WHERE id              =  $id";
		// $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM QuizTF WHERE id = $id";
		$this->performQuery($query);
	}
}




?>