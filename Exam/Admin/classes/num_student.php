<?php
	include('../Admin/include/DBconnection.php');
	
	class NumStudent extends dbconnection
	{
		public function ReadNumStudent(){
			$query 	= "SELECT student_id, COUNT(student_id) AS num_student FROM student";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
        	public function ReadNumPass(){
			$query 	= "SELECT student_id, COUNT(student_id) AS num_pass FROM info_student where statues_student='PASS'";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
        	public function ReadNumFail(){
			$query 	= "SELECT student_id, COUNT(student_id) AS num_fail FROM info_student where statues_student='FAIL'";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
        
        	public function readcourseall(){
		$query  = "SELECT * FROM course,quiztf where course.course_id=quiztf.course_id";
		$result = $this->performQuery($query);
		return 	  $this->fetchAll($result);		
	}
        
        
        
        	public function TopThreeCategories(){
			$query 	= " SELECT *
FROM quiztf
GROUP BY course_id
ORDER BY COUNT(course_id) DESC
LIMIT 3";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
        
              	public function Toptenexam(){
	
    	$query 	= " SELECT *
FROM quiztf
GROUP BY course_id
ORDER BY COUNT(course_id) DESC
LIMIT 10";
     			$result = $this->performQuery($query);

                    return $this->fetchAll($result);

                    
		}
      
		
	}



        /*$query 	= " SELECT * FROM course,quiztf where course.course_id=quiztf.course_id";*/
	/*$query 	= " SELECT course_id
FROM quiztf
GROUP BY course_id
ORDER BY COUNT(course_id) DESC
LIMIT 3";*/

?>