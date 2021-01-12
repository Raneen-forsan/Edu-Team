<?php 
require('include/DBconnection.php');

class McQuestion extends dbconnection{

    public $Question;
	public $choice_one;
    public $choice_two;
    public $choice_three;
    public $choice_four;
    public $correct_answer;
    public $category_name;
    public $exam_image;
    public $tmp_name;
    public $path;
    public $Question_id;
    public $exam_id;
    public $exam_name;
    public $exam_description;
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
	
    public function readcategory(){
		$query  = "SELECT * FROM course";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
  


	public function readById($id){
		$query  = "SELECT * FROM  mcquiz WHERE Question_id = '$id' ";
		$result = $this->performQuery($query);
		return    $this->fetchAll($result);	
	}
    public function readexambyid($id){
		$query  = "SELECT * FROM  exam WHERE exam_id = '$id' ";
		$result = $this->performQuery($query);
		return    $this->fetchAll($result);	
	}

	public function update($id){ 
		$query = "UPDATE mcquiz SET Question       = '$this->Question',
								    choice_one     = '$this->choice_one',
								    choice_two     = '$this->choice_two',
								    choice_three   = '$this->choice_three',
								    choice_four    = '$this->choice_four',
								    correct_answer = '$this->correct_answer',
								    category_name  = '$this->category_name',
								    exam_image     = '$this->exam_image'
								    WHERE Question_id   = $id";
		$this->performQuery($query);
	}
    	public function update_exam($id){ 
		$query = "UPDATE exam SET   exam_name            = '$this->exam_name',
								    exam_description     = '$this->exam_description'
								    WHERE exam_id        = $id";
		$this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM mcquiz WHERE Question_id = $id";
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
