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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : กลุ่มวิชาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล"; }else echo "IT SUT : Business Intelligence and Data Analytics";?></title>

    <?php  include('header.php') ?> 

</head>
<body>

    <?php include("navbar.php") ?>

    <!-- Thai Content -->
    <?php if($_SESSION['lang'] == 'th'){?>

            <div class="container"><!-- Page Heading/Breadcrumbs -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">กลุ่มวิชาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล <!--   <small>Information Technology</small> --></h1>
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
                    <p class="author">&nbsp;</p>
                    <p class="author">ลักษณะวิชาชีพ</p>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;งานธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล เน้นการนำเทคโนโลยีดิจิทัลด้านธุรกิจอัจฉริยะมาประยุกต์ใช้ เพื่อการดำเนินการและการบริหารเชิงกลยุทธ์ทางธุรกิจได้อย่างมีประสิทธิภาพ และเน้นการวิเคราะห์ข้อมูลทางธุรกิจเพื่อใช้ประกอบการดำเนินงานขององค์การ</p>
                    <p class="author">ลักษณะวิชาที่ศึกษา</p>
                    <p>ธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล &nbsp;เป็นสาขาวิชาเฉพาะ เน้น</p>
                    <ul>
                        <li>วิธีการนำเทคโนโลยีดิจิทัลด้านธุรกิจอัจฉริยะมาประยุกต์ใช้ เพื่อเพิ่มประสิทธิภาพในการจัดการองค์การได้</li>
                        <li>กระบวนการในการวิเคราะห์ข้อมูลทางธุรกิจด้วยเทคนิคและโปรแกรมคอมพิวเตอร์ เพื่อใช้ประกอบการดำเนินกิจการ และเพิ่มประสิทธิภาพให้องค์การ</li>
                        <li>หลักในการดำเนินการและบริหารเชิงกลยุทธ์ทางธุรกิจได้อย่างมีประสิทธิภาพและมีประสิทธิผล</li>
                    </ul>
                </div>
                </div>
                <!-- /.row -->
            <hr />
            </div>

    <!-- Enghlish Content -->
    <?php }else{ ?>
     
             <div class="container"><!-- Page Heading/Breadcrumbs -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">กลุ่มวิชาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล <!--   <small>Information Technology</small> --></h1>
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
                    <p class="author">&nbsp;</p>
                    <p class="author">ลักษณะวิชาชีพ</p>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;งานธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล เน้นการนำเทคโนโลยีดิจิทัลด้านธุรกิจอัจฉริยะมาประยุกต์ใช้ เพื่อการดำเนินการและการบริหารเชิงกลยุทธ์ทางธุรกิจได้อย่างมีประสิทธิภาพ และเน้นการวิเคราะห์ข้อมูลทางธุรกิจเพื่อใช้ประกอบการดำเนินงานขององค์การ</p>
                    <p class="author">ลักษณะวิชาที่ศึกษา</p>
                    <p>ธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล &nbsp;เป็นสาขาวิชาเฉพาะ เน้น</p>
                    <ul>
                        <li>วิธีการนำเทคโนโลยีดิจิทัลด้านธุรกิจอัจฉริยะมาประยุกต์ใช้ เพื่อเพิ่มประสิทธิภาพในการจัดการองค์การได้</li>
                        <li>กระบวนการในการวิเคราะห์ข้อมูลทางธุรกิจด้วยเทคนิคและโปรแกรมคอมพิวเตอร์ เพื่อใช้ประกอบการดำเนินกิจการ และเพิ่มประสิทธิภาพให้องค์การ</li>
                        <li>หลักในการดำเนินการและบริหารเชิงกลยุทธ์ทางธุรกิจได้อย่างมีประสิทธิภาพและมีประสิทธิผล</li>
                    </ul>
                </div>
                </div>
                <!-- /.row -->
            <hr />
            </div>
    <?php }?>

    <!-- /.container -->
    <?php  include('footer.php') ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
