<style>
table {
  border-collapse: collapse;
  width: 80%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}
</style>
<?php 
include('classes/MCQuestionClass.php');
/*$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));*/
    $x = new McQuestion();


?>
<html>
<head>
	<title> Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<h3><?php 
                    $exams = $x->readexam(); 
                    foreach ($exams as $value) {
                        echo $value['exam_name'];
                        
                    }?> Quizer</h3>
		</div><br><br>
	</header>




<center><table>
  <tr>
    <th>Exam Name</th>
    <th>Exam Description</th>
    <th>Number of Question </th>
    <th> Choose Exam</th>
  </tr>
  <tr>
    <td><?php 
                    $exams = $x->readexam(); 
                    foreach ($exams as $value) {
                        echo $value['exam_name'];
                        
                    }?></td>
    <td>   <?php
                  $exams = $x->readexam(); 
                    foreach ($exams as $value) {
                        echo $value['exam_description'];
                        
                    }
                    ?></td>
                                                <td><?php    
                                                $printer = $x->ReadNumQuestion();
                                                foreach ($printer as $key => $value) {
                                                   echo  "{$value['num_Question']}";
                                                }
                                                ?></td>
      <td>
                                              				<a href="question.php?n=1" class="start">Start Quize</a>

                                              
      </td>
      
  </tr>
 
</table>
</center>
</body>
</html>

