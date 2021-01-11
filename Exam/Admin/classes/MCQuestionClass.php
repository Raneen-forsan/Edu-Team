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
    public $Question_id;
    public $exam_image;
    public $tmp_name;
    public $path;
   
    
		public function create(){
		$query = "INSERT INTO mcquiz(Question,choice_one,choice_two,choice_three,choice_four,
               correct_answer,category_name,exam_image)
				 VALUES('$this->Question','$this->choice_one',
                        '$this->choice_two',
                        '$this->choice_three','$this->choice_four',
                        '$this->correct_answer','$this->category_name','$this->exam_image')";
		$this->performQuery($query);

           
	}

	public function readAll(){
		$query  = "SELECT * FROM mcquiz";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
    	public function readcategory(){
		$query  = "SELECT * FROM course";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
		}
	public function readById($id){
		$query  = "SELECT * FROM  mcquiz WHERE Question_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
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
	public function delete($id){
		$query = "DELETE FROM mcquiz WHERE Question_id = $id";
		$this->performQuery($query);
	}

}

?>
