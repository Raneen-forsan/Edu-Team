<?php
include('classes/classes.php');
    session_start();


    if (!$_SESSION['email']) {
        header("login.php");
    }

    $x      = new classesallfunction();
    $x->id_url = $_GET['id'];
    $result = $x->ReadQuestion();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        img{
            width: 150px;
            height: 150px;
        }

    </style>
</head>
<body>
<form method="post" action="">
    <?php
    $mark = 0;
    foreach ($result as $key => $value) {   
    if ($value['Cquestion'] == "") {
        if ($value['question'] == "") {
        echo"    
            <div>
                <img src='../Admin/images_website/{$value['exam_image']}'><br> 
                 ({$value['mark']} Mark)
                <br><br>
                <label>
                <input type='radio' name='$key' value='{$value['c1']}'>
                {$value['c1']}
                <input type='radio' name='$key' value='{$value['c2']}'>
                {$value['c2']}
                <input type='radio' name='$key' value='{$value['c3']}'>
                {$value['c3']}
                <input type='radio' name='$key' value='{$value['c4']}'>
                {$value['c4']}
                </lable>
                <br><br><br>
            </div>
        ";    
        }else{
        echo"    
            <div>
                {$value['question']}  ({$value['mark']} Mark)
                <br><br>
                <label>
                <input type='radio' name='$key' value='{$value['c1']}'>
                {$value['c1']}
                <input type='radio' name='$key' value='{$value['c2']}'>
                {$value['c2']}
                <input type='radio' name='$key' value='{$value['c3']}'>
                {$value['c3']}
                <input type='radio' name='$key' value='{$value['c4']}'>
                {$value['c4']}
                </lable>
                <br><br><br>
                <hr>
            </div>
        "; 
        } 
    }
       else{
         if ($value['question'] == "") {
        echo"    
            <div>
                <img src='../Admin/images_website/{$value['exam_image']}'><br>
                 ({$value['mark']} Mark)
                <br><br>
                <label>
                <input type='radio' name='$key' value='{$value['Cquestion']}'>
                {$value['Cquestion']}
                <input type='radio' name='$key' value='{$value['Cquestion1']}'>
                {$value['Cquestion1']}
                </lable>
                <br><br><br>
                <hr>
            </div>
        ";

         }else{
        echo"    
            <div>
                {$value['question']}  ({$value['mark']} Mark)
                <br><br>
                <label>
                <input type='radio' name='$key' value='{$value['Cquestion']}'>
                {$value['Cquestion']}
                <input type='radio' name='$key' value='{$value['Cquestion1']}'>
                {$value['Cquestion1']}
                </lable>
                <br><br><br>
                <hr>
            </div>
        ";   }
       }   
        
        if (isset($_POST[$key])) {
            if ($_POST[$key] == $value['correct_a']) {
                 $mark+=$value['mark'];
             }
        }
        $key++;
    }

    ?>
    <input type="submit" name="sub" value="Submit">
</form>


</body>
</html>

<?php
    $row = $x->total_mark();
    foreach ($row as $key => $value) {
         $total_mark_exam = $value['total_marks'];
     } 

    $total=0;
    $total= $total+$mark;
    
    $expression = $total_mark_exam*0.5;
    if ($total >= $expression) {
        $x->res = "PASS";
    }else{
        $x->res = "FAIL";
    }

    $x->mark_totals = $total." / ".$total_mark_exam;

    $x->email_student = $_SESSION['email'];

    $result_id_stu = $x->id_student_give();
    foreach ($result_id_stu as $key => $value) {
        $x->id_student_forign = $value['student_id'];
    } 
    $id = $_GET['id'];
    if (isset($_POST['sub'])) {
        $x->mark_totals;
        $x->res;
        $x->id_student_forign;
        $x->id_courses = $id;
        $x->info_student();
        header("location:index.php");

            
    }
?>