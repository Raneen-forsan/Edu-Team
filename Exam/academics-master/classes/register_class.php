<?php  include('../academics-master/includes/DBconnection.php');

        class register extends dbconnection{
            public $full_name;
            public $email;
            public $password;
            public $mobile;
            public $image;
            public $education_level;

        public function insertStudentData(){
            $q  =  "INSERT INTO student(full_name,email,password,mobile,image,education_level)
                    VALUES
                    ('$this->full_name','$this->email','$this->password',
                    $this->mobile,'$this->image','$this->education_level')";

            $this->performQuery($q);        
        }
        



        }




?>