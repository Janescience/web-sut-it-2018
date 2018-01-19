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

	<title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : หลักสูตรที่เปิดสอนระดับปริญญาเอก หลักสูตร 4 ปี"; }else echo "IT SUT : DOCTOR'S DEGREE Course 2.1 - 4 Years";?>  </title>

    <?php  include('header.php') ?>

</head>

<body>


    <?php include("navbar.php") ?>

    	<?php 
    		if($_SESSION['lang'] == 'th'){
    			echo '<div class="container">
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">หลักสูตรปริญญาเอก</h1>
</div>
</div>
<!-- /.row --> <!-- Content Row -->
<div class="row">
<div class="col-lg-12">
<h3>แบบ 2.2 หลักสูตร 4 ปี</h3>
<p><strong> <u> สำหรับผู้สำเร็จการศึกษาระดับปริญญาตรี </u> </strong></p>
<strong>ชื่อหลักสูตร</strong> <br />(ภาษาไทย)<br />หลักสูตรวิทยาการสารสนเทศดุษฎีบัณฑิต <br />สาขาวิชาเทคโนโลยีสารสนเทศชื่อหลักสูตร <br />(ภาษาอังกฤษ)<br />Doctor of Information Science Program <br />in Information Technology
<p><br /><strong>ชื่อปริญญา</strong><br />ภาษาไทย(เต็ม) วิทยาการสารสนเทศดุษฎีบัณฑิต (เทคโนโลยีสารสนเทศ)<br />ภาษาไทย(ย่อ) วส.ด. (เทคโนโลยีสารสนเทศ)<br />ภาษาอังกฤษ(เต็ม) Doctor of Information Science (Information Technology)<br />ภาษาอังกฤษ(ย่อ) D.I.S. (Information Technology)</p>
<p>จำนวนหน่วยกิตรวมตลอดหลักสูตร</p>
<p>จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 102 หน่วยกิต</p>
<p>โครงสร้างหลักสูตร</p>
<p>ศึกษารายวิชาและทำดุษฎีนิพนธ์ จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 102 หน่วยกิต ประกอบด้วย</p>
- รายวิชาบังคับ21 หน่วยกิต- รายวิชาเลือก15 หน่วยกิต- รายวิชาเลือกนอกสาขาวิชาฯ6 หน่วยกิต- ดุษฎีนิพนธ์60 หน่วยกิต
<p>สามารถค้นหารายละเอียดเพิ่มเติมได้ที่ ส่วนส่งเสริมวิชาการ =&gt; <a href="http://www.sut.ac.th/das/t1.htm"> คลิ๊กที่นี้ </a></p>
</div>
</div>
<hr />
</div>
';

    		}else 
    			   			
echo '<div class="container">
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">หลักสูตรปริญญาเอก</h1>
</div>
</div>
<!-- /.row --> <!-- Content Row -->
<div class="row">
<div class="col-lg-12">
<h3>แบบ 2.2 หลักสูตร 4 ปี</h3>
<p><strong> <u> สำหรับผู้สำเร็จการศึกษาระดับปริญญาตรี </u> </strong></p>
<strong>ชื่อหลักสูตร</strong> <br />(ภาษาไทย)<br />หลักสูตรวิทยาการสารสนเทศดุษฎีบัณฑิต <br />สาขาวิชาเทคโนโลยีสารสนเทศชื่อหลักสูตร <br />(ภาษาอังกฤษ)<br />Doctor of Information Science Program <br />in Information Technology
<p><br /><strong>ชื่อปริญญา</strong><br />ภาษาไทย(เต็ม) วิทยาการสารสนเทศดุษฎีบัณฑิต (เทคโนโลยีสารสนเทศ)<br />ภาษาไทย(ย่อ) วส.ด. (เทคโนโลยีสารสนเทศ)<br />ภาษาอังกฤษ(เต็ม) Doctor of Information Science (Information Technology)<br />ภาษาอังกฤษ(ย่อ) D.I.S. (Information Technology)</p>
<p>จำนวนหน่วยกิตรวมตลอดหลักสูตร</p>
<p>จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 102 หน่วยกิต</p>
<p>โครงสร้างหลักสูตร</p>
<p>ศึกษารายวิชาและทำดุษฎีนิพนธ์ จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 102 หน่วยกิต ประกอบด้วย</p>
- รายวิชาบังคับ21 หน่วยกิต- รายวิชาเลือก15 หน่วยกิต- รายวิชาเลือกนอกสาขาวิชาฯ6 หน่วยกิต- ดุษฎีนิพนธ์60 หน่วยกิต
<p>สามารถค้นหารายละเอียดเพิ่มเติมได้ที่ ส่วนส่งเสริมวิชาการ =&gt; <a href="http://www.sut.ac.th/das/t1.htm"> คลิ๊กที่นี้ </a></p>
</div>
</div>
<hr />
</div>
';

    	?>

    <?php include("footer.php"); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
