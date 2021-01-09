
<?php require('../include/DBconnection.php')?>

<?php

    class Course extends dbconnection{

       

        public function CreateCourse($courseName,$cousreDescription){

            $q = "INSERT INTO course(course_name,course_description)VALUES('$courseName','$cousreDescription') ";
             $this->performQuery($q);

        }

        public function selectCourseData(){

            $q  = "SELECT * FROM course";
            return $this->performQuery($q);
            
        }




    }







?>
