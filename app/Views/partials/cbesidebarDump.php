<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The CBE Rules and Regs</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body> -->
<!-- <link rel="stylesheet" href="assets/css/cbe-rules.css" /> -->

<div class="sidebar">
    <div class="student-pic mt-2 mb-1">
        <!-- <img src="../student/media/student_passport/<?php //echo $_SESSION['passport']; ?>" alt="User Picture"> -->
        <img src="./assets/img/author.jpg" alt="User Picture">
    </div>
    <h1 class="text-green text-center student-name mt-1 mb-1">
        <span class="surname"><?php echo $_SESSION['surname']; ?></span><br>
        <span class="firstname"><?php echo $_SESSION['firstname']; ?></span><br>
        <span class="middlename"><?php echo $_SESSION['othername']; ?></span>
    </h1>
    <div class="student-details">
        <div class="student-detail">
            <span class="text-grey-400 regNum">Application Number</span>
            <p class="text-grey-700"><?php echo $_SESSION['appnum']; ?></p>
        </div>
        <div class="student-detail">
            <span class="text-grey-400 regNum">Course Title</span>
            <p class="text-grey-700"><?php echo $_SESSION['course']; ?></p>
        </div>
        <div class="student-detail">
            <span class="text-grey-400 regNum">Course Code</span>
            <p class="text-grey-700">CFWD</p>
        </div>
        <div class="student-detail">
            <span class="text-grey-400 regNum">Session</span>
            <p class="text-grey-700"><?php echo $_SESSION['session']; ?> Session</p>
        </div>
    </div>

    <footer class="main-footer">
        <p class="text-light text-center">&copy; 2022 <br> JETA Communications TechHub</p>
    </footer>
</div>