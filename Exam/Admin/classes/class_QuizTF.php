<?php 
require('include/DBconnection.php');

class QuizTF extends dbconnection{

    public $admin_id;
	public $Nquestion;
	public $Cquestion;
    public $Iquestion;
    public $exam_image;
 


	public function create()
	{
	$query = "INSERT INTO QuizTF(question,Correct_answer,Incorrect_Answer,exam_image)
				  VALUES('$this->Nquestion','$this->Cquestion','$this->Iquestion','$this->exam_image')";
		$this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM QuizTF";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
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
