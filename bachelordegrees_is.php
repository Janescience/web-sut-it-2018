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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : กลุ่มวิชาระบบสารสนเทศเพื่อการจัดการ "; } else echo "SUT IT : Management Information Systems"; ?> </title>

    <?php  include('header.php') ?>

</head>

<body>


    <?php include("navbar.php") ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">กลุ่มวิชาสารสนเทศศึกษา
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
                                          <p>งานสารสนเทศ ซึ่งเป็นงานจัดหา จัดระบบ สร้างตัวแทน เผยแพร่ และบริการสารสนเทศ ที่อาศัยเทคโนโลยีระดับสูง</p>
                                          
                                          <p class="author">ลักษณะวิชาชีพ</p>
                                          <p>นักสารสนเทศ ผู้จัดการสารสนเทศ ปฏิบัติงานในศูนย์สารสนเทศ หน่วยงานบริการสารสนเทศของหน่วยงานภาครัฐ เอกชน สื่อสารมวลชน ที่นับวันจะต้องอาศัยเทคโนโลยีระดับสูงเพิ่มขึ้น</p>
                                          
                                          <p class="author">ลักษณะวิชาที่ศึกษา</p>
                                          <p>
                                              นิเทศศาสตร์ เป็นสาขาวิชาเฉพาะ เน้น 
                                          </p><ul>
                                          <li>การจัดหา จัดระบบ สร้างตัวแทน จัดเก็บและค้นคืน เผยแพร่ และบริการสารสนเทศ โดยคำนึงถึงความต้องการ และลักษณะของผู้ใช้เป็นสำคัญ</li>
                                          <li>เน้นการใช้เทคโนโลยีในการปฏิบัติงานสารสนเทศต่างๆ ในข้างต้น การจัดการสารสนเทศอิเล็กทรอนิกส์ จดหมายเหตุมัลติมีเดีย การวิเคราะห์และออกแบบระบบฐานข้อมูลงานสารสนเทศ ระบบห้องสมุดอัตโนมัติ ระบบห้องสมุดดิจิทัล </li>
                                          <li>การใช้เทคโนโลยีในการออกแบบ ผลิตสื่อสารสนเทศ และสื่อคอมพิวเตอร์เพื่อการเรียนรู้ </li>
                                      </ul>
                                      <p></p>
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
