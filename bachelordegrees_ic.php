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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : กลุ่มวิชานิเทศศาสตร์ "; } else echo "SUT IT : Communication"; ?> </title>

    <?php  include('header.php') ?>

</head>

<body>


    <?php include("navbar.php") ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">กลุ่มวิชานิเทศศาสตร์
                  <!--   <small>Information Technology</small> -->
                </h1>
                <!-- <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Full Width Page</li>
                </ol> -->
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <p class="author">ชื่อหลักสูตร</p>
                <p>วิทยาการสารสนเทศบัณฑิต<br>
                    Bachelor of Information Science </p>
                    <p class="author">ชื่อปริญญา</p>
                    <p>วิทยาการสารสนเทศบัณฑิต
                        <br>วสบ.
                        <br>Bachelor of Information Science
                        <br>B.I.S.</p>
                        
                        <p class="author">ปรัชญาและวัตถุประสงค์ของหลักสูตร</p>
                        <p>งานนิเทศศาสตร์ ซึ่งเน้นการผลิต ถ่ายทอด และเผยแพร่สารสนเทศและ ความรู้ แก่มวลชนโดยใช้เทคโนโลยีสมัยใหม่</p>
                        
                        <p class="author">ลักษณะวิชาชีพ</p>
                        <p>งานนิเทศศาสตร์ ซึ่งเน้นการผลิต ถ่ายทอดและเผยแพร่สารสนเทศและความรู้ แก่มวลชนโดยใช้เทคโนโลยีสมัยใหม่</p>
                        
                        <p class="author">ลักษณะวิชาที่ศึกษา</p>
                        <p>
                            นิเทศศาสตร์ เป็นสาขาวิชาเฉพาะ เน้น 
                        </p><ul>
                        <li>การผลิตสื่อ การวิเคราะห์กลุ่มเป้าหมาย การออกแบบ การสร้างสาร การเขียน บทวิทยุโทรทัศน์ ภาพยนตร์ บทความสารคดี การวางแผน สื่อมวลชน และการ เผยแพร่ </li>
                        <li>เทคโนโลยีสื่อสารมวลชน เทคโนโลยีที่ใช้เพื่อการสื่อสารสังคม และประชานิเทศ</li>
                        <li>เทคโนโลยีการผลิตและจัดรายการ และเทคโนโลยีในการสื่อสารทางการเมือง</li>
                    </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->

    <?php include("footer.php"); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
