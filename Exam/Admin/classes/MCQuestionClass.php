<?php 
require('include/DBconnection.php');

class McQuestion extends dbconnection{

	

    public $question;
    public $id;
    public $Cquestion;
    public $Cquestion1;
    public $c1;
    public $c2;
    public $c3;
    public $c4;
    public $correct_a;
    public $mark;
    public $exam_image;
    public $course_id ;
    
public function create(){

			$query = "INSERT INTO mcquiz(Question,choice_one,choice_two,choice_three,choice_four,
	               correct_answer,category_name,exam_image,exam_id)
					 VALUES('$this->Question','$this->choice_one','$this->choice_two','$this->choice_three',
					 		'$this->choice_four','$this->correct_answer','$this->category_name',
					 		'$this->exam_image','$this->exam_id')";
			$this->performQuery($query);           
	}
    
public function create_exam(){

			$query = "INSERT INTO exam(exam_name,exam_description)
					 VALUES('$this->exam_name','$this->exam_description')";
			$this->performQuery($query);           
	}
    /*$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));*/
    
	public function readAll(){
		$query  = "SELECT * FROM exam,mcquiz where exam.exam_id=mcquiz.exam_id";
		$result = $this->performQuery($query);
		return    $this->fetchAll($result);
	}
    	public function readexam(){
		$query  = "SELECT * FROM exam";
		$result = $this->performQuery($query);
		return    $this->fetchAll($result);
	}
    	public function readmcquiz(){
		$query  = "SELECT * FROM mcquiz";
		$result = $this->performQuery($query);
		return    $this->fetchAll($result);
	}

    public function ReadNumQuestion(){
			$query 	= "SELECT Question_id ,COUNT(Question_id) AS num_Question FROM mcquiz";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
    public function readcategory(){
		$query  = "SELECT * FROM course";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
  


	public function readById($id){
		$query  = "SELECT * FROM  quiztf WHERE id = '$id' ";
		$result = $this->performQuery($query);
		return    $this->fetchAll($result);	
	}
    public function readexambyid($id){
		$query  = "SELECT * FROM  exam WHERE exam_id = '$id' ";
		$result = $this->performQuery($query);
		return    $this->fetchAll($result);	
	}


    	public function updateQuestion($id){ 
		$query = "UPDATE quiztf SET question       = '$this->question',
                                    
								    WHERE id       = $id";
		$this->performQuery($query);
	}
    	public function update_exam($id){ 
		$query = "UPDATE exam SET   exam_name            = '$this->exam_name',
								    exam_description     = '$this->exam_description'
								    WHERE exam_id        = $id";
		$this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM quiztf WHERE id = $id";
		$this->performQuery($query);
	}
public function delete_exam($id){
		$query = "DELETE FROM exam where exam_id=$id ";
		$this->performQuery($query);
	}
public function delete_MC($id){
		$query = "DELETE FROM mcquiz where exam_id=$id ";
		$this->performQuery($query);
	}
    public function delete_TF($id){
		$query = "DELETE FROM quiztf where exam_id=$id ";
		$this->performQuery($query);
	}
	public function view_course(){
        $q  = "SELECT course_name FROM course";
        return $this->performQuery($q);
            
    }

}

?>
