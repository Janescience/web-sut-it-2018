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
            echo "IT SUT : กลุ่มวิชาการจัดการความรู้ "; 
        }else 
            echo "IT SUT : Knowledge Management";
    ?></title>

    <?php  include('header.php') ?>

</head>

<body>


    <?php include("navbar.php") ?>

    <? 
        if($_SESSION['lang'] == 'th'){

            echo '<!-- Page Content -->
<div class="container"><!-- Page Heading/Breadcrumbs -->
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">กลุ่มวิชาการจัดการความรู้ <strong><!-- <small>Information Technology</small> --></strong></h1>
<strong><!-- <ol class="breadcrumb">
 <li><a href="index.html">Home</a>
 </li>
 <li class="active">Full Width Page</li>
 </ol> --></strong></div>
</div>
<strong><!-- /.row --> <!-- Content Row --></strong>
<div class="row">
<div class="col-lg-12">
<article id="telstra">
<p class="author"><strong>ชื่อหลักสูตร</strong></p>
ภาษาไทย <br />วิทยาการสารสนเทศมหาบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ <br />ภาษาอังกฤษ <br />Master of Information Science Program in Information Technology
<p> </p>
<p class="author"><strong>ชื่อปริญญา </strong></p>
ภาษาไทย(เต็ม) วิทยาการสารสนเทศมหาบัณฑิต (เทคโนโลยีสารสนเทศ) <br />ภาษาไทย(ย่อ) วส.ม. (เทคโนโลยีสารสนเทศ) <br />ภาษาอังกฤษ(เต็ม) Master of Information Science (Information Technology) <br />ภาษาอังกฤษ(ย่อ) M.I.S. (Information Technology)
<p> </p>
<p class="author"><strong>ปรัชญาและวัตถุประสงค์ของหลักสูตร</strong></p>
<p>กลุ่มวิชาการจัดการความรู้มุ่งเน้นการสร้างและบริหารจัดการองค์ความรู้อย่างเป็นระบบทุกระดับอันเป็นการตอบสนองต่อการพัฒนา <br/> นำสังคมไทยสู่สังคมแห่งภูมิปัญญาและการเรียนรู้ โดยศึกษาเน้นการสร้างและการจัดการองค์ความรู้ เทคโนโลยีและเครื่องมือในการจัดการความรู้ <br>การจัดการความรู้เชิงกลยุทธ์ เศรษฐกิจฐานความรู้ ฯลฯ</p>
</article>
</div>
</div>
<!-- /.row --><hr /></div>
<!-- /.container -->';


        }else

            echo '<!-- Page Content -->
<div class="container"><!-- Page Heading/Breadcrumbs -->
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">กลุ่มวิชาการจัดการความรู้ <strong><!-- <small>Information Technology</small> --></strong></h1>
<strong><!-- <ol class="breadcrumb">
 <li><a href="index.html">Home</a>
 </li>
 <li class="active">Full Width Page</li>
 </ol> --></strong></div>
</div>
<strong><!-- /.row --> <!-- Content Row --></strong>
<div class="row">
<div class="col-lg-12">
<article id="telstra">
<p class="author"><strong>ชื่อหลักสูตร</strong></p>
ภาษาไทย <br />วิทยาการสารสนเทศมหาบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ <br />ภาษาอังกฤษ <br />Master of Information Science Program in Information Technology
<p> </p>
<p class="author"><strong>ชื่อปริญญา </strong></p>
ภาษาไทย(เต็ม) วิทยาการสารสนเทศมหาบัณฑิต (เทคโนโลยีสารสนเทศ) <br />ภาษาไทย(ย่อ) วส.ม. (เทคโนโลยีสารสนเทศ) <br />ภาษาอังกฤษ(เต็ม) Master of Information Science (Information Technology) <br />ภาษาอังกฤษ(ย่อ) M.I.S. (Information Technology)
<p> </p>
<p class="author"><strong>ปรัชญาและวัตถุประสงค์ของหลักสูตร</strong></p>
<p>กลุ่มวิชาการจัดการความรู้มุ่งเน้นการสร้างและบริหารจัดการองค์ความรู้อย่างเป็นระบบทุกระดับอันเป็นการตอบสนองต่อการพัฒนา <br/>นำสังคมไทยสู่สังคมแห่งภูมิปัญญาและการเรียนรู้ โดยศึกษาเน้นการสร้างและการจัดการองค์ความรู้ เทคโนโลยีและเครื่องมือในการจัดการความรู้ <br/>การจัดการความรู้เชิงกลยุทธ์ เศรษฐกิจฐานความรู้ ฯลฯ</p>
</article>
</div>
</div>
<!-- /.row --><hr /></div>
<!-- /.container -->';


    ?>

    <?php include("footer.php"); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
