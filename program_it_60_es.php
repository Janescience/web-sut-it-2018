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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : กลุ่มวิชาซอฟต์แวร์วิสาหกิจ "; }else echo "IT SUT : Enterprise Software";?></title>

    <?php  include('header.php') ?> 

</head>
<body>

    <?php include("navbar.php") ?>

    <!-- Thai Content -->
    <?php if($_SESSION['lang'] == 'th'){?>
        <div class="container"><!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">กลุ่มวิชาซอฟต์แวร์วิสาหกิจ <!-- <small>Information Technology</small> --></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="author">ชื่อหลักสูตร</p>
                <p>วิทยาการสารสนเทศบัณฑิต<br /> Bachelor of Information Science</p>
                <p class="author">ชื่อปริญญา</p>
                <p>วิทยาการสารสนเทศบัณฑิต <br />วสบ. <br />Bachelor of Information Science <br />B.I.S.</p>
                <p class="author">ลักษณะวิชาชีพ</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;งานพัฒนาซอฟต์แวร์ เน้นการวิเคราะห์ ออกแบบ และพัฒนาซอฟต์แวร์ เพื่องานด้านนิเทศศาสตร์ดิจิทัล ด้านธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล และด้านสารสนเทศและห้องสมุด</p>
                <p class="author">ลักษณะวิชาที่ศึกษา</p>
                <ul>
                    <li>&nbsp;กระบวนการในการวิเคราะห์ ออกแบบ และพัฒนาซอฟต์แวร์ ด้วยภาษาการโปรแกรมรูปแบบต่าง ๆ ทั้งที่เป็นโปรแกรมประยุกต์บนเว็บ และบนอุปกรณ์เคลื่อนที่</li>
                    <li>หลักการในการทวนสอบและทดสอบซอฟต์แวร์ และการประกันคุณภาพซอฟต์แวร์</li>
                    <li>การวางแผนโครงการซอฟต์แวร์ การติดตามความก้าวหน้าในการพัฒนา และการประเมินโครงการซอฟต์แวร์</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
        <hr /></div>    
    <!-- Enghlish Content -->
    <?php }else{ ?>
        <div class="container"><!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">กลุ่มวิชาซอฟต์แวร์วิสาหกิจ <!-- <small>Information Technology</small> --></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="author">ชื่อหลักสูตร</p>
                <p>วิทยาการสารสนเทศบัณฑิต<br /> Bachelor of Information Science</p>
                <p class="author">ชื่อปริญญา</p>
                <p>วิทยาการสารสนเทศบัณฑิต <br />วสบ. <br />Bachelor of Information Science <br />B.I.S.</p>
                <p class="author">ลักษณะวิชาชีพ</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;งานพัฒนาซอฟต์แวร์ เน้นการวิเคราะห์ ออกแบบ และพัฒนาซอฟต์แวร์ เพื่องานด้านนิเทศศาสตร์ดิจิทัล ด้านธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล และด้านสารสนเทศและห้องสมุด</p>
                <p class="author">ลักษณะวิชาที่ศึกษา</p>
                <ul>
                    <li>&nbsp;กระบวนการในการวิเคราะห์ ออกแบบ และพัฒนาซอฟต์แวร์ ด้วยภาษาการโปรแกรมรูปแบบต่าง ๆ ทั้งที่เป็นโปรแกรมประยุกต์บนเว็บ และบนอุปกรณ์เคลื่อนที่</li>
                    <li>หลักการในการทวนสอบและทดสอบซอฟต์แวร์ และการประกันคุณภาพซอฟต์แวร์</li>
                    <li>การวางแผนโครงการซอฟต์แวร์ การติดตามความก้าวหน้าในการพัฒนา และการประเมินโครงการซอฟต์แวร์</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
        <hr /></div>    
    <?php }?>

    <!-- /.container -->
    <?php  include('footer.php') ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
