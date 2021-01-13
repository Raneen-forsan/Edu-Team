<?php
	include('../Admin/include/DBconnection.php');

	class student extends dbconnection
	{
		public $email;
		public $full_name;
		public $password;
		public $mobile;
		public $image;
		public $education_level;	
		public $id;

		public function CreateStudent(){
			$query  = "INSERT INTO student(email,full_name,password,mobile,image,education_level) 
			VALUES('$this->email','$this->full_name','$this->password','$this->mobile','$this->image',
			'$this->education_level') ";
			$this->performQuery($query);
		} 

		public function ReadStudentInformation(){
			$query  = "SELECT * FROM student";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		public function DeleteStudent(){
			$query = "DELETE FROM student where student_id = '$this->id' ";
			return $this->performQuery($query);
		}

		public function UpdateStudent(){
			$query = "UPDATE student SET 
										email  				= '$this->email',
										full_name  			= '$this->full_name',
										password  			= '$this->password',
										mobile 				= '$this->mobile',
										image 				= '$this->image',
										education_level		= '$this->education_level'
					 WHERE student_id = '$this->id' "; 
			$this->performQuery($query);
		}

		public function SelectUpdateStudent(){
			$query  = "SELECT * FROM student WHERE student_id = '$this->id' ";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		


	}






?>