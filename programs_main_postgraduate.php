<?php
     if(isset($_GET['lang']))
           $_SESSION['lang'] = $_GET['lang'];
     else
           $_SESSION['lang'] = 'th';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : หลักสูตร ป.โท"; }else echo "Programs Postgraduate";?></title>

    <?php  include('header.php') ?> 

</head>
<body>

    <?php include("navbar.php") ?>

     <!-- Page Content -->
    <?php 

    if($_SESSION['lang'] == 'th'){
       echo '<div class="container">
<div class="row">
    <h2 class="page-header">หลักสูตรที่เปิดสอน</h2>
</div>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">ระดับปริญญาโท</h2>
    </div>
    <div class="col-md-3 text-center">
        <div class="thumbnail">

            <i class="fa fa-book fa-5x"></i>
            <!-- <h4>หลักสูตรระดับปริญญาตรี</h4> -->
            <div class="caption">
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <ul>
            <li style="font-size: 16px;"><a href="programs_master.php" target="_blank">หลักสูตรวิทยาการสารสนเทศมหาบัณฑิต (หลักสูตรปรับปรุง พ.ศ. 2553) </a></li>
            <li style="font-size: 16px;"><a href="programs_master_2016.php" target="_blank">หลักสูตรวิทยาการสารสนเทศมหาบัณฑิต (หลักสูตรปรับปรุง พ.ศ. 2558)</a></li>
        </ul>
    </div>
</div>

<hr>
</div>';

    }else 
        echo '<div class="container">
<div class="row">
    <h2 class="page-header">หลักสูตรที่เปิดสอน</h2>
</div>
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">ระดับปริญญาโท</h2>
    </div>
    <div class="col-md-3 text-center">
        <div class="thumbnail">

            <i class="fa fa-book fa-5x"></i>
            <!-- <h4>หลักสูตรระดับปริญญาตรี</h4> -->
            <div class="caption">
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <ul>
            <li style="font-size: 16px;"><a href="programs_master.php" target="_blank">หลักสูตรวิทยาการสารสนเทศมหาบัณฑิต (หลักสูตรปรับปรุง พ.ศ. 2553) </a></li>
            <li style="font-size: 16px;"><a href="programs_master_2016.php" target="_blank">หลักสูตรวิทยาการสารสนเทศมหาบัณฑิต (หลักสูตรปรับปรุง พ.ศ. 2558)</a></li>
        </ul>
    </div>
</div>
<hr>
</div>';

    ?>

    <!-- /.container -->
    <?php  include('footer.php') ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
