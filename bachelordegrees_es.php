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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : กลุ่มวิชาซอฟต์ แวร์วิสาหกิจ "; }else echo "SUT IT : Enterprise Software";?> </title>

    <?php  include('header.php') ?>

</head>

<body>


    <?php include("navbar.php") ?>

    <?php

    if($_SESSION['lang'] == "th"){

          echo '
            <!-- Page Content -->
            <div class="container">
                <!-- Page Heading/Breadcrumbs -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">กลุ่มวิชาซอฟต์แวร์วิสาหกิจ
                          <!--   <small>Information Technology</small> -->
                        </h1>
                    </div>
                </div>
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

                          <p class="author">ลักษณะวิชาชีพ</p>
                          <p>นักพัฒนาซอฟต์แวร์ให้กับองค์กรวิสาหกิจ นักวิเคราะห์ระบบ ผู้ทดสอบระบบ (Tester) <br> 
                          นักพัฒนาโปรแกรมประยุกต์บนเว็บ (Web Programmer) <br> 
                          ผู้จัดการโครงการซอฟต์แวร์ ผู้ดูแลระบบ ผู้ดูแลระบบเว็บ (Web Master)<br> 
                           และผู้ดูแลระบบฐานข้อมูล (Database Administrator) เป็นต้น</p>

                          <p class="author">ลักษณะวิชาที่ศึกษา</p>
                          <p>
                          </p><ul>
                          <li>กระบวนการในการวิเคราะห์ ออกแบบ และพัฒนาซอฟต์แวร์ หลักการในการทวนสอบและทดสอบซอฟต์แวร์ การประกันคุณภาพซอฟต์แวร์</li>
                          <li>การวางแผนโครงการซอฟต์แวร์ การติดตามความก้าวหน้าในการพัฒนา และการประเมินโครงการซอฟต์แวร์</li>
                          <li>การออกแบบและพัฒนาระบบฐานข้อมูลสำหรับองค์กรวิสาหกิจ และการจัดการระบบรักษาความปลอดภัยของข้อมูล</li>
                          <li>การศึกษา ปรับใช้ หรือพัฒนาโปรแกรมประยุกต์ต่างๆ ที่ใช้ในองค์กรวิสาหกิจ</li>
                          </ul>
                    </div>
                </div>
                <!-- /.row -->
                <hr>
            </div>
            <!-- /.container -->';
        }else{
            echo '
            <!-- Page Content -->
            <div class="container">
                <!-- Page Heading/Breadcrumbs -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">กลุ่มวิชาซอฟแวร์วิสาหกิจ
                          <!--   <small>Information Technology</small> -->
                        </h1>
                    </div>
                </div>
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

                          <p class="author">ลักษณะวิชาชีพ</p>
                          <p>นักพัฒนาซอฟต์แวร์ให้กับองค์กรวิสาหกิจ นักวิเคราะห์ระบบ ผู้ทดสอบระบบ (Tester) <br> 
                          นักพัฒนาโปรแกรมประยุกต์บนเว็บ (Web Programmer) <br> 
                          ผู้จัดการโครงการซอฟต์แวร์ ผู้ดูแลระบบ ผู้ดูแลระบบเว็บ (Web Master)<br> 
                           และผู้ดูแลระบบฐานข้อมูล (Database Administrator) เป็นต้น</p>

                          <p class="author">ลักษณะวิชาที่ศึกษา</p>
                          <p>
                          </p><ul>
                          <li>กระบวนการในการวิเคราะห์ ออกแบบ และพัฒนาซอฟต์แวร์ หลักการในการทวนสอบและทดสอบซอฟต์แวร์ การประกันคุณภาพซอฟต์แวร์</li>
                          <li>การวางแผนโครงการซอฟต์แวร์ การติดตามความก้าวหน้าในการพัฒนา และการประเมินโครงการซอฟต์แวร์</li>
                          <li>การออกแบบและพัฒนาระบบฐานข้อมูลสำหรับองค์กรวิสาหกิจ และการจัดการระบบรักษาความปลอดภัยของข้อมูล</li>
                          <li>การศึกษา ปรับใช้ หรือพัฒนาโปรแกรมประยุกต์ต่างๆ ที่ใช้ในองค์กรวิสาหกิจ</li>
                          </ul>
                    </div>
                </div>
                <!-- /.row -->
                <hr>
            </div>
            <!-- /.container -->';
        }

    ?>


    <?php include("footer.php"); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
