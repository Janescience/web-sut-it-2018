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
	<title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : หลักสูตรที่เปิดสอนระดับปริญญาเอก หลักสูตร 3 ปี"; }else echo "IT SUT : DOCTOR'S DEGREE Course 2.1 - 3 Years";?>  </title>
    <?php  include('header.php') ?>
</head>
<body>
    <?php include("navbar.php") ?>
    <?php 
    
    	if($_SESSION['lang'] == 'th'){
    		
echo ' <!-- Page Content -->
<div class="container"><!-- Page Heading/Breadcrumbs -->
<div class="row">
<div class="col-lg-12">
<h1>หลักสูตรปริญญาเอก <!--   <small>Information Technology</small> --></h1>
<!-- <ol class="breadcrumb">
<li><a href="index.html">Home</a>
</li>
<li class="active">Full Width Page</li>
</ol> --></div>
</div>
<!-- /.row --><!-- Content Row -->

<div class="row">
<div class="col-lg-12">
<h3>แบบ 2.1 หลักสูตร 3 ปี</h3>

<p><strong><u>สำหรับผู้สำเร็จการศึกษาระดับปริญญาโท</u></strong><br />
<br />
<span><strong>ชื่อหลักสูตร&nbsp;</strong></span><br />
<span>(ภาษาไทย)</span><br />
<span>หลักสูตรวิทยาการสารสนเทศดุษฎีบัณฑิต&nbsp;</span><br />
<span>สาขาวิชาเทคโนโลยีสารสนเทศชื่อหลักสูตร&nbsp;</span></p>
(ภาษาอังกฤษ)<br />
Doctor of Information Science Program in Information Technology
<br/><br/><p><strong>ชื่อปริญญา</strong><br />
<span>ภาษาไทย(เต็ม)</span><br />
<span>วิทยาการสารสนเทศดุษฎีบัณฑิต&nbsp;</span><span>(เทคโนโลยีสารสนเทศ)</span></p>

<p>ภาษาไทย(ย่อ)<br />
วส.ด. (เทคโนโลยีสารสนเทศ)</p>

<p>ภาษาอังกฤษ(เต็ม)<br />
Doctor of Information Science (Information Technology)</p>

<p>ภาษาอังกฤษ(ย่อ)<br />
D.I.S. (Information Technology)</p>

<p>จำนวนหน่วยกิตรวมตลอดหลักสูตร</p>

<p>จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 63 หน่วยกิต</p>

<p>โครงสร้างหลักสูตร</p>

<p>ศึกษารายวิชาและทำดุษฎีนิพนธ์ จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 63 หน่วยกิต ประกอบด้วย</p>
- รายวิชาบังคับ3 หน่วยกิต- รายวิชาเลือก9 หน่วยกิต- รายวิชาเลือกนอกสาขาวิชาฯ6 หน่วยกิต- ดุษฎีนิพนธ์45 หน่วยกิต

<p>สามารถค้นหารายละเอียดเพิ่มเติมได้ที่ ส่วนส่งเสริมวิชาการ =&gt; <a href="http://www.sut.ac.th/das/t1.htm"> คลิ๊กที่นี้ </a></p>
</div>
</div>
<!-- /.row -->

<hr /></div>
<!-- /.container -->
';

    	}else 
echo ' <!-- Page Content -->
<div class="container"><!-- Page Heading/Breadcrumbs -->
<div class="row">
<div class="col-lg-12">
<h1>หลักสูตรปริญญาเอก <!--   <small>Information Technology</small> --></h1>
<!-- <ol class="breadcrumb">
<li><a href="index.html">Home</a>
</li>
<li class="active">Full Width Page</li>
</ol> --></div>
</div>
<!-- /.row --><!-- Content Row -->

<div class="row">
<div class="col-lg-12">
<h3>แบบ 2.1 หลักสูตร 3 ปี</h3>

<p><strong><u>สำหรับผู้สำเร็จการศึกษาระดับปริญญาโท</u></strong><br />
<br />
<span><strong>ชื่อหลักสูตร&nbsp;</strong></span><br />
<span>(ภาษาไทย)</span><br />
<span>หลักสูตรวิทยาการสารสนเทศดุษฎีบัณฑิต&nbsp;</span><br />
<span>สาขาวิชาเทคโนโลยีสารสนเทศชื่อหลักสูตร&nbsp;</span></p>
(ภาษาอังกฤษ)<br />
Doctor of Information Science Program in Information Technology
<br/><br/><p><strong>ชื่อปริญญา</strong><br />
<span>ภาษาไทย(เต็ม)</span><br />
<span>วิทยาการสารสนเทศดุษฎีบัณฑิต&nbsp;</span><span>(เทคโนโลยีสารสนเทศ)</span></p>

<p>ภาษาไทย(ย่อ)<br />
วส.ด. (เทคโนโลยีสารสนเทศ)</p>

<p>ภาษาอังกฤษ(เต็ม)<br />
Doctor of Information Science (Information Technology)</p>

<p>ภาษาอังกฤษ(ย่อ)<br />
D.I.S. (Information Technology)</p>

<p>จำนวนหน่วยกิตรวมตลอดหลักสูตร</p>

<p>จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 63 หน่วยกิต</p>

<p>โครงสร้างหลักสูตร</p>

<p>ศึกษารายวิชาและทำดุษฎีนิพนธ์ จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 63 หน่วยกิต ประกอบด้วย</p>
- รายวิชาบังคับ3 หน่วยกิต- รายวิชาเลือก9 หน่วยกิต- รายวิชาเลือกนอกสาขาวิชาฯ6 หน่วยกิต- ดุษฎีนิพนธ์45 หน่วยกิต

<p>สามารถค้นหารายละเอียดเพิ่มเติมได้ที่ ส่วนส่งเสริมวิชาการ =&gt; <a href="http://www.sut.ac.th/das/t1.htm"> คลิ๊กที่นี้ </a></p>
</div>
</div>
<!-- /.row -->

<hr /></div>
<!-- /.container -->
';

    ?>
    <?php include("footer.php"); ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
