<?php 
require('include/DBconnection.php');

class QuizTF extends dbconnection{

    public $admin_id;
	public $Nquestion;
	public $Cquestion;
    public $Iquestion;
    public $category_name;
    public $exam_image;
    public $exam_id; 
 


	public function create()
	{
	$query = "INSERT INTO QuizTF(  
	              question,Correct_answer,Incorrect_Answer,category_name,exam_image,exam_id)
				  VALUES('$this->Nquestion','$this->Cquestion','$this->Iquestion','$this->category_name','$this->exam_image','$this->exam_id')";
		$this->performQuery($query);
	}

	public function readAll(){
        $query  = "SELECT * FROM exam,QuizTF where exam.exam_id=QuizTF.exam_id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
   	public function readexam(){
		$query  = "SELECT * FROM exam";
		$result = $this->performQuery($query);
		return    $this->fetchAll($result);
	}
	public function readcourse(){
		$query  = "SELECT * FROM course";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function readById($id){
		$query  = "SELECT * FROM QuizTF WHERE id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}


	public function update($id){ 
		$query = "UPDATE QuizTF SET question              = '$this->Nquestion',
								    Correct_answer        = '$this->Cquestion',
								    Incorrect_Answer      = '$this->Iquestion',
								    category_name         = '$this->category_name',
								    exam_image            = '$this->exam_image'
								    WHERE id              =  $id";
		$this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM QuizTF WHERE id = $id";
		$this->performQuery($query);
	}



}

?>