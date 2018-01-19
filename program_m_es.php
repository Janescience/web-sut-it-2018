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

    <title><?php 

        if($_SESSION['lang'] == 'th'){
            echo "IT SUT : กลุ่มวิชาระบบวิสาหกิจ  "; 
        }else 
            echo "IT SUT : Enterprise Software";
    ?></title>

    <?php  include('header.php') ?>

</head>

<body>


    <?php include("navbar.php") ?>

    <!-- Page Content -->
    <div class="container"><!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">กลุ่มวิชาระบบวิสาหกิจ <!--   <small>Information Technology</small> --></h1>
<!-- <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Full Width Page</li>
                </ol> --></div>
            </div>
            <!-- /.row --> <!-- Content Row -->
            <div class="row">
                <div class="col-lg-12">
                    <p class="author"><strong>ชื่อหลักสูตร</strong></p>
                    <p><strong>ภาษาไทย </strong><br />วิทยาการสารสนเทศมหาบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ</p>
                    <p><strong>ภาษาอังกฤษ </strong><br />Master of Information Science Program in Information Technology</p>
                    <p> </p>
                    <p class="author"><strong>ชื่อปริญญา</strong></p>
                    <div>
                        <div>
                            <div>
                                <div>ภาษาไทย(เต็ม)<br />วิทยาการสารสนเทศมหาบัณฑิต (เทคโนโลยีสารสนเทศ)</div>
                            </div>
                            <div>
                                <div>ภาษาไทย(ย่อ) <br />วส.ม. (เทคโนโลยีสารสนเทศ)</div>
                            </div>
                            <div>
                                <div>ภาษาอังกฤษ(เต็ม)</div>
                                <div>Master of Information Science (Information Technology)</div>
                            </div>
                            <div>
                                <div>ภาษาอังกฤษ(ย่อ)</div>
                                <div>M.I.S. (Information Technology)</div>
                            </div>
                        </div>
                    </div>
                    <p> </p>
                    <p class="author"><strong>ปรัชญาและวัตถุประสงค์ของหลักสูตร</strong></p>
                    <p>กลุ่มวิชาระบบวิสาหกิจมุ่งเน้นการบูรณาการความรู้ที่ลึกซึ้งทางด้านธุรกิจและองค์การภาค รัฐเข้ากับเทคโนโลยีสารสนเทศ ขั้นสูงเพื่อเพิ่มประสิทธิภาพขององค์การและวิสาหกิจทุก ประเภทให้ยืนหยัดอยู่ได้ในโลกของการแข่งขันตลอดจนปรับตัวต่อ สถานการณ์อย่างรวดเร็ว โดยศึกษาเน้นทฤษฎีและปฏิบัติในการ ออกแบบกระบวนการทางธุรกิจ วิสาหกิจ ข้ามชาติ เครือข่ายคอมพิวเตอร์สำหรับวิสาหกิจ ตลอดจนการพัฒนาระบบสารสนเทศและระบบความรู้ให้เหมาะสมกับวิสาหกิจต่างๆ</p>
                </div>
            </div>
            <!-- /.row --><hr /></div>
            <!-- /.container -->
            <p> </p>

    <?php include("footer.php"); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
