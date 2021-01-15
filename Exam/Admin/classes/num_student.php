<?php
	include('../Admin/include/DBconnection.php');
	
	class NumStudent extends dbconnection
	{
		public function ReadNumStudent(){
			$query 	= "SELECT student_id, COUNT(student_id) AS num_student FROM student";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
	}

?>