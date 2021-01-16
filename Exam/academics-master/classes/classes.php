<?php
include('../academics-master/includes/DBconnection.php');


class classesallfunction extends dbconnection
{
	public function ReadExam(){
		$query  = "SELECT * FROM exam";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function ReadQuestion(){
		$query  = "SELECT * FROM QuizTF";
	    $result = $this->performQuery($query);
	    return $this->fetchAll($result);
	}

	public function insertanswerstudent(){

	}
}


?>