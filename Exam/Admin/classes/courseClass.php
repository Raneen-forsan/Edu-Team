
<?php require('include/DBconnection.php')?>

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

        public function deleteData($id){

            $delete_query="delete from course where course_id=$id";
             $this->performQuery($delete_query);
             
             
        }

        public function selectDataForUpdate($id){
            $q = "SELECT * FROM course WHERE course_id=$id";
            return $this->performQuery($q);
        }

        public function updateData($id){

            $q = "UPDATE course SET course_name              = '$this->coursename',
                                    course_description        = '$this->coursedesc'
                                
            WHERE course_id  = $id";
            $this->performQuery($q);
            
        }


    }







?>
