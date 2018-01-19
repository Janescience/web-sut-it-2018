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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : กลุ่มวิชาสารสนเทศศึกษา"; }else echo "IT SUT : Bachelor of Information Science";?></title>

    <?php  include('header.php') ?> 

</head>
<body>

    <?php include("navbar.php") ?>

    <!-- Thai Content -->
    <?php if($_SESSION['lang'] == 'th'){?>

        <div class="container"><!-- Page Heading/Breadcrumbs -->
        <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header">กลุ่มวิชาสารสนเทศศึกษา <!--   <small>Information Technology</small> --></h1>
        <!-- <ol class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li class="active">Full Width Page</li>
                        </ol> --></div>
        </div>
        <!-- /.row --> <!-- Content Row -->
        <div class="row">
        <div class="col-lg-12">
        <p class="author">ชื่อหลักสูตร</p>
        <p>วิทยาการสารสนเทศบัณฑิต<br /> Bachelor of Information Science</p>
        <p class="author">ชื่อปริญญา</p>
        <p>วิทยาการสารสนเทศบัณฑิต <br />วสบ. <br />Bachelor of Information Science <br />B.I.S.</p>
        <p class="author">ลักษณะวิชาชีพ</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;งานสารสนเทศและห้องสมุด (สารสนเทศศึกษา) เน้นการจัดการทรัพยากรสารสนเทศ การจัดทำเครื่องมือค้นคืนและเข้าถึงสารสนเทศและความรู้ และการให้บริการสารสนเทศที่สอดคล้องกับความต้องการของผู้ใช้งานด้วยการประยุกต์ใช้เทคโนโลยีดิจิทัล</p>
        <p>&nbsp;ลักษณะวิชาที่ศึกษา</p>
        <p>สารสนเทศศึกษา เป็นสาขาวิชาเฉพาะ เน้น</p>
        <ul>
        <li>การจัดการทรัพยากรสารสนเทศ การกำหนด การสร้าง การคัดเลือก การจัดหา การวิเคราะห์&nbsp; การจัดเก็บ&nbsp; การบริการ การเผยแพร่และนำส่งสารสนเทศ&nbsp; โดยคำนึงถึงความต้องการและลักษณะของผู้ใช้เป็นสำคัญ</li>
        <li>การใช้เทคโนโลยีดิจิทัลในการปฏิบัติงานสารสนเทศ การจัดทำสารสนเทศอิเล็กทรอนิกส์&nbsp; การจัดทำฐานข้อมูลและเครื่องมือสำหรับการค้นคืนและเข้าถึงสารสนเทศ การวิเคราะห์และออกแบบระบบสารสนเทศ&nbsp; การพัฒนาระบบอัตโนมัติเพื่อการจัดการงานสารสนเทศและห้องสมุด&nbsp; การพัฒนาระบบการจัดการสารสนเทศในสำนักงาน&nbsp;&nbsp; และการพัฒนาเว็บไซต์เพื่อการเผยแพร่สารสนเทศ</li>
        <li>การออกแบบและการผลิตสื่อในงานสารสนเทศ และการจัดการสื่อคอมพิวเตอร์เพื่อการเรียนรู้</li>
        </ul>
        </div>
        </div>
        <!-- /.row --><hr /></div>

    <!-- Enghlish Content -->
    <?php }else{ ?>

            <div class="container"><!-- Page Heading/Breadcrumbs -->
            <div class="row">
            <div class="col-lg-12">
            <h1 class="page-header">กลุ่มวิชาสารสนเทศศึกษา <!--   <small>Information Technology</small> --></h1>
            <!-- <ol class="breadcrumb">
                                <li><a href="index.html">Home</a>
                                </li>
                                <li class="active">Full Width Page</li>
                            </ol> --></div>
            </div>
            <!-- /.row --> <!-- Content Row -->
            <div class="row">
            <div class="col-lg-12">
            <p class="author">ชื่อหลักสูตร</p>
            <p>วิทยาการสารสนเทศบัณฑิต<br /> Bachelor of Information Science</p>
            <p class="author">ชื่อปริญญา</p>
            <p>วิทยาการสารสนเทศบัณฑิต <br />วสบ. <br />Bachelor of Information Science <br />B.I.S.</p>
            <p class="author">ลักษณะวิชาชีพ</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;งานสารสนเทศและห้องสมุด (สารสนเทศศึกษา) เน้นการจัดการทรัพยากรสารสนเทศ การจัดทำเครื่องมือค้นคืนและเข้าถึงสารสนเทศและความรู้ และการให้บริการสารสนเทศที่สอดคล้องกับความต้องการของผู้ใช้งานด้วยการประยุกต์ใช้เทคโนโลยีดิจิทัล</p>
            <p>&nbsp;ลักษณะวิชาที่ศึกษา</p>
            <p>สารสนเทศศึกษา เป็นสาขาวิชาเฉพาะ เน้น</p>
            <ul>
            <li>การจัดการทรัพยากรสารสนเทศ การกำหนด การสร้าง การคัดเลือก การจัดหา การวิเคราะห์&nbsp; การจัดเก็บ&nbsp; การบริการ การเผยแพร่และนำส่งสารสนเทศ&nbsp; โดยคำนึงถึงความต้องการและลักษณะของผู้ใช้เป็นสำคัญ</li>
            <li>การใช้เทคโนโลยีดิจิทัลในการปฏิบัติงานสารสนเทศ การจัดทำสารสนเทศอิเล็กทรอนิกส์&nbsp; การจัดทำฐานข้อมูลและเครื่องมือสำหรับการค้นคืนและเข้าถึงสารสนเทศ การวิเคราะห์และออกแบบระบบสารสนเทศ&nbsp; การพัฒนาระบบอัตโนมัติเพื่อการจัดการงานสารสนเทศและห้องสมุด&nbsp; การพัฒนาระบบการจัดการสารสนเทศในสำนักงาน&nbsp;&nbsp; และการพัฒนาเว็บไซต์เพื่อการเผยแพร่สารสนเทศ</li>
            <li>การออกแบบและการผลิตสื่อในงานสารสนเทศ และการจัดการสื่อคอมพิวเตอร์เพื่อการเรียนรู้</li>
            </ul>
            </div>
            </div>
            <!-- /.row --><hr /></div>
     
    <?php }?>

    <!-- /.container -->
    <?php  include('footer.php') ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
