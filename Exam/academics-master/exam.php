<?php
include('classes/classes.php');
    session_start();
    $x      = new classesallfunction();
    $x->id_url = $_GET['id'];
    $result = $x->ReadQuestion();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title></title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif
        }

        body {
            background: teal
        }

        .wrapper {
            max-width: 600px;
            margin: 80px auto 50px;
            padding: 30px;
            border-radius: 20px;
            background: #c0e2df;
            position: relative;
            min-height: 400px;
            overflow: hidden
        }

        .wrapper .wrap {
            width: 500px;
            position: absolute;
            left: 50px;
            transition: 0.6s
        }

        #q2,
        #q3 {
            left: 650px
        }

        .h4 {
            margin: 0
        }

        label {
            display: block;
            margin-bottom: 15px;
            font-size: 1.2rem;
            cursor: pointer
        }

        .options {
            position: relative;
            padding-left: 30px
        }

        .options input {
            opacity: 0
        }

        .checkmark {
            position: absolute;
            top: 4px;
            left: 3px;
            height: 20px;
            width: 20px;
            background-color: #c0e2df;
            border: 2px solid #444;
            border-radius: 50%
        }

        .options input:checked~.checkmark:after {
            display: block
        }

        .options .checkmark:after {
            content: "";
            width: 9px;
            height: 9px;
            display: block;
            background: white;
            position: absolute;
            top: 51%;
            left: 51%;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: 300ms ease-in-out 0s
        }

        .options input[type="radio"]:checked~.checkmark {
            background: #590995;
            border: 2px solid #590995;
            transition: 300ms ease-in-out 0s
        }

        .options input[type="radio"]:checked~.checkmark:after {
            transform: translate(-50%, -50%) scale(1)
        }

        .btn.btn-primary {
            background-color: rgb(63, 139, 139);
            border: 1px solid rgb(63, 139, 139)
        }

        .btn {
            background-color: inherit;
            border: 1px solid rgb(63, 139, 139);
            border-radius: 20px
        }

        .btn:focus {
            box-shadow: none
        }

        .btn:hover {
            background-color: teal;
            color: #fff
        }

        .fa-arrow-right,
        .fa-arrow-left {
            transition: 0.2s ease-in all
        }

        .btn.btn-primary:hover .fa-arrow-right {
            transform: translate(8px)
        }

        .btn.btn-primary:hover .fa-arrow-left {
            transform: translate(-8px)
        }

        @media(max-width: 767px) {
            .wrapper {
                margin: 30px 10px;
                height: 420px
            }

            .wrapper .wrap {
                width: 280px;
                left: 15px
            }
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 28px;
            background-color: inherit
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 4px;
            bottom: 4px;
            background-color: #590995;
            -webkit-transition: .4s;
            transition: .4s
        }

        input:checked+.slider {
            background-color: #000
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3
        }

        input:checked+.slider:before {
            transform: translateX(30px);
            background-color: #fff
        }

        .slider.round {
            border-radius: 34px
        }

        .slider.round:before {
            border-radius: 50%
        }

        .dark-theme {
            background-color: #222
        }

        .hide-class {
            display: none;
        }

        .imgquestion{
            width: 470px !important;
            height: 150px !important;
        }
    </style>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="wrapper">
        <form>
        <?php
        $key = 1;
        $count = count($result);
        foreach ($result as $k => $value) { ?>

                <div class="text-center pb-4">
                    <div class="h5 font-weight-bold"><span id="number"> </span><?= $key ?> of <?= $count ?> </div>
                </div>
                <?php if($value['question'] == ""){ ?>
                    <div class="h4 font-weight-bold "> 
                    <?= $key ?>. <?="<img class='imgquestion' src='../Admin/images_website/{$value['exam_image']}'>" ?></div>
                <?php 
                    }else{
                ?>
                <div class="h4 font-weight-bold "> <?= $key ?>. <?=$value['question'] ?>?</div>
               <?php 
                    } 
                ?>
            <div class="pt-4">
                    <?php
                        if ($value['Cquestion'] == "") {
                    ?>
            <label class="options"><?=$_SESSION['cq1']=$value['c1'] ?> <input type="radio" 
                name="$k"> 
                <span class="checkmark"></span> 
            </label>
                <label class="options"><?=$_SESSION['cq2']=$value['c2'] ?> <input type="radio" name="$k"> 
                <span class="checkmark">
                </span> 
                </label>

                <label class="options"><?=$_SESSION['cq3']=$value['c3'] ?> <input type="radio" name="$k"> 
                <span class="checkmark">
                </span> 
                </label>

                <label class="options"><?=$_SESSION['cq4']=$value['c4'] ?> <input type="radio" name="$k"> 
                <span class="checkmark">
                </span> 
                </label>

                </div>
    
        <?php } else{?>

            <label class="options"><?=$_SESSION['ct_f1'] = $value['Cquestion'] ?> <input type="radio" name="$k"> 
                <span class="checkmark"></span> 
            </label>
                <label class="options"><?=$_SESSION['ct_f2'] = $value['Cquestion1'] ?> <input type="radio" name="$k"> <span class="checkmark"></span> </label>
             
        <?php 
        }
        ?>
            
        <?php
            $k++;
            $key++;
        } ?>

        <div class="d-flex justify-content-end pt-2">       
            <button class="btn btn-primary">
                Submit
                <span class="fas fa-arrow-right"></span> 
            </button>
        </div>
    </form>
</div> 
</div>

    </div>
    <div class="d-flex flex-column align-items-center">
        <div class="h3 font-weight-bold text-white">Go Dark</div> <label class="switch"> <input type="checkbox"> <span class="slider round"></span> </label>
    </div>
    <script>
        function next() {

            var ele_id = $('.active-q').attr('id');
            ele_id = parseInt(ele_id);
            $('.active-q').addClass('hide-class');
            $("#" + ele_id + "").removeClass('active-q');
            $("#" + ((ele_id) + 1) + "").addClass('active-q');
            $("#" + ((ele_id) + 1) + "").removeClass('hide-class');
        }

        function back() {
            var ele_id = $('.active-q').attr('id');
            ele_id = parseInt(ele_id);
            $('.active-q').addClass('hide-class');
            $("#" + ele_id + "").removeClass('active-q');
            $("#" + ((ele_id) - 1) + "").addClass('active-q');
            $("#" + ((ele_id) - 1) + "").removeClass('hide-class');
        }


        function uncheck() {
            var rad = document.getElementById('rd')
            rad.removeAttribute('checked')
        }
        document.addEventListener('DOMContentLoaded', function() {
            const main = document.querySelector('body')
            const toggleSwitch = document.querySelector('.slider')
            toggleSwitch.addEventListener('click', () => {
                main.classList.toggle('dark-theme')
            })
        })
    </script>
</body>

</html>