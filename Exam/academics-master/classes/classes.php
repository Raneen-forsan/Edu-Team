<?php
include('../academics-master/includes/DBconnection.php');


class classesallfunction extends dbconnection
{
	public $id_url;
	public $mark_totals;
	public $res;
	public $email_student;
	public $id_student_forign;
	public $id_courses;

	public function ReadQuestion(){
		$query  = "SELECT * FROM quiztf WHERE course_id = '$this->id_url' ";
	    $result = $this->performQuery($query);
	    return    $this->fetchAll($result);
	}

	public function ReadCourse(){
		$query  = "SELECT * FROM course";
	    $result = $this->performQuery($query);
	    return    $this->fetchAll($result);
	}

	public function total_mark(){
		$query  = "SELECT SUM(mark) AS total_marks FROM quiztf";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function id_student_give(){
		$query = "SELECT student_id FROM student where 
				email = '$this->email_student' ";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
    public function idforstudent(){
		$query = "SELECT* FROM student";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function info_student(){
		$query = "INSERT INTO info_student(mark_total,statues_student,student_id,course_id)
		values('$this->mark_totals','$this->res','$this->id_student_forign',
		'$this->id_courses')";
		$this->performQuery($query);
	}
}


?>