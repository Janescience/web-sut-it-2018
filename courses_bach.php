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
   	<title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : วิชาที่เปิดสอนระดับปริญญาตร"; }else echo "SUT IT : BACHELOR'S DEGREE";?> </title>
    <?php  include('header.php') ?>
</head>
<body>
    <?php include("navbar.php") ?>
    
	<?php 
		if($_SESSION['lang'] == 'th'){
			echo '<!-- Page Content -->
				<div class="container"><!-- Page Heading/Breadcrumbs -->
				<div class="row">
				<div class="col-lg-12">
				<h1 class="page-header">วิชาที่เปิดสอน<br /> <small>ระดับปริญญาตรี</small></h1>
				<!-- <ol class="breadcrumb">
													<li><a href="index.html">Home</a>
													</li>
													<li class="active">Full Width Page</li>
												</ol> --></div>
				</div>
				<!-- /.row --> <!-- Content Row -->
				<div class="row">
				<div class="col-lg-12">
				<table class="table" style="font-size: 12px;">
				<tbody>
				<tr>
				<td colspan="4" bgcolor="#EEEEEE">1.หมวดวิชาศึกษาทั่วไป 38 หน่วยกิต</td>
				</tr>
				<tr>
				<td colspan="2" align="left" valign="top">1.1 กลุ่มวิชาแกน 12 หน่วยกิต</td>
				<td colspan="2" align="left" valign="top"><a href="subjectDes/IT2555_Description1.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
				</tr>
				<tr>
				<td align="left" valign="top">202 107 &nbsp;</td>
				<td align="left" valign="top">การใช้คอมพิวเตอร์และสารสนเทศ</td>
				<td align="left" valign="top">3(2-2-5)</td>
				<td align="left" valign="top">&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Use of Computer and Information)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>202 211</td>
				<td>การคิดเพื่อการพัฒนา</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Thinking for Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>202 212</td>
				<td>มนุษย์กับวัฒนธรรม</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Man and Culture)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>202 213</td>
				<td>โลกาภิวัตน์</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Globalization)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2">&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2">1.2 กลุ่มวิชาภาษาต่างประเทศ 15 หน่วยกิต</td>
				<td colspan="2"><a href="subjectDes/IT2555_Description2eng.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
				</tr>
				<tr>
				<td>203 101</td>
				<td>ภาษาอังกฤษ 1&nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(English I)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>203 102&nbsp;</td>
				<td>ภาษาอังกฤษ 2&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(English II)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>203 203&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>ภาษาอังกฤษ 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(English III)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>203 204&nbsp;</td>
				<td>ภาษาอังกฤษ 4&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(English IV)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>203 305&nbsp;&nbsp;&nbsp;</td>
				<td>ภาษาอังกฤษ 5<a href="courese_des.html#3305">&nbsp;</a>&nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(English V)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2">&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2">1.3 กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์ 9 หน่วยกิต</td>
				<td colspan="2"><a href="subjectDes/IT2555_Description3manmath.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
				</tr>
				<tr>
				<td>103 113</td>
				<td>&nbsp;คณิตศาสตร์ในชีวิตประจำวัน</td>
				<td>3(3-0-6)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Mathematics in Daily Life)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>104 113</td>
				<td>มนุษย์กับสิ่งแวดล้อม</td>
				<td>3(3-0-6)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Man and Environment)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>105 113</td>
				<td>&nbsp;มนุษย์กับเทคโนโลยี</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Man and Technology)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2">1.4 กลุ่มวิชาสังคมศาสตร์ มนุษยศาสตร์ และสหศาสตร์ 2 หน่วยกิต</td>
				<td colspan="2"><a href="subjectDes/IT2555_Description4social.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
				</tr>
				<tr>
				<td colspan="2"><span class="style13">เลือกเรียน 2 หน่วยกิต จากรายวิชาดังต่อไปนี้</span></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>114 100&nbsp;</td>
				<td>กีฬาและนันทนาการ&nbsp;</td>
				<td>2(1-2-4)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Sport and Recreation)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>202 111</td>
				<td>ภาษาไทยเพื่อการสื่อสาร</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Thai for Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>202 241</td>
				<td>กฎหมายในชีวิตประจำวัน</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Law in Daily Life)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>202 261</td>
				<td>ศาสนากับการดำเนินชีวิต</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Religion for Life)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>202 262</td>
				<td>พุทธธรรม</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Buddhadhamma)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>202 291</td>
				<td>การจัดการสมัยใหม่</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Modern Management)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>202 292</td>
				<td>ผู้ประกอบการธุรกิจเทคโนโลยี</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Technopreneur)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>202 324</td>
				<td>ไทยศึกษาเชิงพหุวัฒนธรรม</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Pluri-Cultural Thai Studies)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>202 354</td>
				<td>ปรัชญาว่าด้วยการศึกษาและการทำงาน</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Philosophy of Education and Working)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="4">&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2" bgcolor="#EEEEEE">2. หมวดวิชาเฉพาะ&nbsp;&nbsp;&nbsp;131&nbsp;&nbsp; หน่วยกิต</td>
				<td colspan="2" bgcolor="#EEEEEE"><a href="subjectDes/IT2555_Description5gertech.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
				</tr>
				<tr>
				<td colspan="4" bgcolor="#EEEEEE">2.1 กลุ่มวิชาเทคโนโลยีพื้นฐาน 47 หน่วยกิต</td>
				</tr>
				<tr>
				<td colspan="4">&nbsp;</td>
				</tr>
				<tr>
				<td>วิชาวิทยาศาสตร์พื้นฐาน</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 102&nbsp;</td>
				<td>คณิตศาสตร์เพื่อคอมพิวเตอร์</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Mathematics for Computer)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 103&nbsp;&nbsp;</td>
				<td>สถิติเพื่อการวิจัยวิทยาการสารสนเทศ<a href="courese_des.html#4103">&nbsp;</a>&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Statistics for Information Science Research)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 301</td>
				<td>วิธีวิจัยเชิงปริมาณ<a href="courese_des.html#4301">&nbsp;</a></td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Quantitative Research Methods)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>วิชาการสื่อสาร</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 104&nbsp;</td>
				<td>การสื่อสารระหว่างบุคคลและกลุ่ม<a href="courese_des.html#4104">&nbsp;</a>&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Interpersonal and Group Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 114</td>
				<td>การสื่อสารมวลชนและการสื่อสารสาธารณะ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Mass and Public Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="4">&nbsp;</td>
				</tr>
				<tr>
				<td colspan="4">วิชาคอมพิวเตอร์และเทคโนโลยี</td>
				</tr>
				<tr>
				<td>204 108&nbsp;</td>
				<td>การเขียนโปรแกรมคอมพิวเตอร์สำหรับระบบสารสนเทศ</td>
				<td>4(3-3-8)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Computer Programming for Information System)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 110 &nbsp;&nbsp;</td>
				<td>การบริหารคอมพิวเตอร์เบื้องต้น&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>1(0-2-1)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Basic Computer Administration)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 111</td>
				<td>การสื่อสารข้อมูลและเครือข่าย&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Data Communications and Networking)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 112</td>
				<td>กฎหมายและจริยธรรมในเทคโนโลยีสารสนเทศ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Laws and Ethics in Information Technology)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 204&nbsp;</td>
				<td>การออกแบบและพัฒนาฐานข้อมูล&nbsp;&nbsp;&nbsp;</td>
				<td>4(3-2-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Database Design and Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 235</td>
				<td>การออกแบบและพัฒนาระบบสารสนเทศ</td>
				<td>4(3-3-8)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Information System Design and Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 236&nbsp;&nbsp;</td>
				<td>การออกแบบและพัฒนาแอนิเมชันและมัลติมีเดีย&nbsp;&nbsp;&nbsp;</td>
				<td>4(2-4-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Animation and Multimedia Design and Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 329</td>
				<td>เทคโนโลยีเว็บ</td>
				<td>3(2-3-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Web Technology)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>วิชาวิทยาการจัดการ</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 113 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>การวิเคราะห์ระบบสารสนเทศ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Information System Analysis)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 225</td>
				<td>การจัดการความรู้&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Knowledge Management)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="4">&nbsp;</td>
				</tr>
				<tr>
				<td colspan="4" bgcolor="#EEEEEE">2.2 หมวดวิชาเฉพาะ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 75&nbsp; หน่วยกิต</td>
				</tr>
				<tr>
				<td colspan="2">1.กลุ่มวิชาซอฟต์แวร์วิสาหกิจ(Enterprise Software)</td>
				<td colspan="2"><a href="subjectDes/IT2555_Description6es.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
				</tr>
				<tr>
				<td colspan="4">วิชาบังคับ</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 226</td>
				<td>สถาปัตยกรรมซอฟต์แวร์วิสาหกิจ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Enterprise Software Architecture)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 238</td>
				<td>โครงสร้างข้อมูลและขั้นตอนวิธี</td>
				<td>3(2-2-5)*</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Data Structure and Algorithms)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 239</td>
				<td>การออกแบบและพัฒนาฐานข้อมูลขั้นสูง</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Advanced Database Design and Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 240</td>
				<td>การโปรแกรมเชิงวัตถุ</td>
				<td>3(2-2-5)*</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Object-Oriented Programming)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 331</td>
				<td>วิศวกรรมซอฟต์แวร์</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Software Engineering)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 335</td>
				<td>การทดสอบซอฟต์แวร์</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Software Testing)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 336</td>
				<td>การจัดการโครงการซอฟต์แวร์</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Software Project Management)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 359</td>
				<td>การพัฒนาโปรแกรมประยุกต์บนเว็บ</td>
				<td>3(2-2-5)*</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Web Application Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 360</td>
				<td>การพัฒนาโปรแกรมประยุกต์วิสาหกิจ</td>
				<td>3(2-3-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Enterprise Application Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 426</td>
				<td>สัมมนาซอฟต์แวร์วิสาหกิจ</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Seminar in Enterprise Software)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 427</td>
				<td>โครงงานซอฟต์แวร์วิสาหกิจ</td>
				<td>4(0-8-4)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Project in Enterprise Software)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2">*รายวิชาบังคับทีี่เรียนร่วมกับกลุ่มวิชาระบบสารสนเทศเพื่อการจัดการ</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>วิชาเลือก</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 228</td>
				<td>ความมั่นคงปลอดภัยของเทคโนโลยีสารสนเทศและการสื่อสาร</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Information and Communication Technology Security)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 232</td>
				<td>หลักการปฏิสัมพันธ์ระหว่างมนุษย์กับคอมพิวเตอร์</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Principles of Human-Computer Interaction)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 332</td>
				<td>การพัฒนาโปรแกรมประยุกต์สำหรับระบบเครือข่าย</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Network Application Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 333</td>
				<td>การพัฒนาซอฟต์แวร์โดยยึดเหตุการณ์</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Event-Driven Software Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 334</td>
				<td>การโปรแกรมภาษาสคริปต์</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Scripting Language Programming)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 337</td>
				<td>การโปรแกรมแบบขนานและแบบกระจาย</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Parallel and Distributed Programming)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 340</td>
				<td>หลักการปัญญาประดิษฐ์</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Principles of Artificial Intelligence)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 347</td>
				<td>การพัฒนาซอฟต์แวร์สื่อประสม</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Multimedia Software Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 348</td>
				<td>การพัฒนาเกมคอมพิวเตอร์</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Computer Game Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 368</td>
				<td>การพัฒนาโปรแกรมประยุกต์เชิงวัตถุขั้นสูง</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Advanced Object-Oriented Application Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 369</td>
				<td>การพัฒนาซีแมนติกเว็บ</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Semantic Web Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 370</td>
				<td>การพัฒนาโปรแกรมประยุกต์สำหรับอุปกรณ์เคลื่อนที่</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Mobile Device Application Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>204 422</td>
				<td>การศึกษาอิสระ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>(Independent Studies)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2">&nbsp;2. กลุ่มวิชาเฉพาะนิเทศศาสตร์(Communication)</td>
				<td colspan="2"><a href="subjectDes/IT2555_Description7ic.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
				</tr>
				<tr>
				<td>วิชาบังคับ</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 206&nbsp;&nbsp;</td>
				<td>หลักการออกแบบและการสร้างสาร&nbsp;<a href="courese_des.html#4206">&nbsp;</a></td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Principles o f Message Design and Writing )</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 208&nbsp;&nbsp;</td>
				<td>เทคโนโลยีการผลิตสื่อมวลชน 1&nbsp;</td>
				<td>3(1-4-4)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Technology of Mass Media Production I)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 224&nbsp;</td>
				<td>การถ่ายภาพเพื่อการสื่อสาร&nbsp;</td>
				<td>3(3&ndash;0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Photography for Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 237</td>
				<td>การสื่อข่าวและการเขียนข่าวหนังสือพิมพ์และข่าวออนไลน์</td>
				<td>3(3&ndash;0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Newspaper and Online News Writing and Reporting)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 241</td>
				<td>การเขียนบทวิทยุกระจายเสียง วิทยุโทรทัศน์ และภาพยนตร์</td>
				<td>3(3&ndash;0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Broadcasting and Film Script Writing)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 302&nbsp;&nbsp;</td>
				<td>เทคโนโลยีการผลิตสื่อมวลชน 2&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>3(1-4-4)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Technology of Mass Media Production II)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 306&nbsp;</td>
				<td>การบริหารองค์การสื่อมวลชน</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Management of Mass Media Organization)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 349</td>
				<td>เทคโนโลยีการผลิตแอนิเมชัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>3(1-4-4)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Technology of Animation Production)&nbsp;&nbsp;&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 401&nbsp;</td>
				<td>กฎหมายและจริยธรรมสื่อสารมวลชน&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Laws and Ethics of Mass Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 431</td>
				<td>สัมมนานิเทศศาสตร์</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Seminar in Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 428</td>
				<td>โครงงานนิเทศศาสตร์</td>
				<td>4(0-8-4)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Project in Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;วิชาเลือก</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 220&nbsp;&nbsp;</td>
				<td>การสื่อสารธุรกิจ&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Business Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 222</td>
				<td>พฤติกรรมภาษากับการสื่อสาร&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Language and Communication Behavior)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 243</td>
				<td>การเขียนบทความและสารคดี</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Article and Documentary Writing)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 303</td>
				<td>เทคโนโลยีสื่อสารมวลชน</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Technology of Mass Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 323&nbsp;</td>
				<td>เทคโนโลยีการสื่อสารทางการเมือง&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Technology in Political Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 325&nbsp;&nbsp;</td>
				<td>การโฆษณาและการประชาสัมพันธ<a href="courese_des.html#4325">์&nbsp;</a></td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Advertising and Public Relations)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 326</td>
				<td>การแปลเพื่องานนิเทศศาสตร<a href="courese_des.html#4326">์</a>&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Translation for Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 341</td>
				<td>การสื่อสารการตลาดเชิงบูรณาการ &nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Integrated Marketing Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 353</td>
				<td>การวิเคราะห์ผู้รับสาร</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Audience Analysis)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 371</td>
				<td>สื่อในประเทศสมาชิกอาเซียน</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Media in ASEAN)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 372</td>
				<td>หลักการเบื้องต้นของสื่อดิจิทัล</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Fundamental of Digital Media)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 376</td>
				<td>จิตวิทยาการสื่อสาร&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Communication Psychology)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 403&nbsp;</td>
				<td>การสื่อสารต่างและระหว่างวัฒนธรรม<a href="courese_des.html#4403">&nbsp;</a>&nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(International and Intercultural Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 413&nbsp;&nbsp;</td>
				<td>การวางแผนสื่อสารมวลชนและการเผยแพร่</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Mass Communication Planning and Dissemination)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 414&nbsp;&nbsp;</td>
				<td>พฤติกรรมและการสื่อสารในองค์การ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Behavior and Organization Communication)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 416</td>
				<td>การวิจัยนิเทศศาสตร<a href="courese_des.html#4416">์&nbsp;</a></td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Communication Research)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 422&nbsp;</td>
				<td>การศึกษาอิสระ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Independent Studies)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 424</td>
				<td>เทคโนโลยีการผลิตสื่อมวลชนขั้นสูง</td>
				<td>3(1&ndash;4-4)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Advanced Technology of Mass Media Production)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 425&nbsp;&nbsp;</td>
				<td>การวิเคราะห์และวิพากษ์สื่อ&nbsp;&nbsp;</td>
				<td>3(3&ndash;0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Media Analysis and Criticism)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2" align="left" valign="top">3. วิชาเฉพาะระบบสารสนเทศเพื่อการจัดการ(Management Information Systems)</td>
				<td colspan="2" align="left" valign="top"><a href="subjectDes/IT2555_Description8mis.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
				</tr>
				<tr>
				<td align="left" valign="top">วิชาบังคับ</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 209&nbsp;&nbsp;&nbsp;</td>
				<td>หลักการจัดการ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Principles of Management)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 238</td>
				<td>โครงสร้างข้อมูลและขั้นตอนวิธี</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Data Structure and Algorithms)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 240</td>
				<td>การโปรแกรมเชิงอ็อบเจกต์</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Object-Oriented Programming)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 308&nbsp;&nbsp;&nbsp;</td>
				<td>การจัดการระบบสารสนเทศ<a href="courese_des.html#4308">&nbsp;</a>&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Management of Information Systems)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 309&nbsp;&nbsp;</td>
				<td>ระบบสารสนเทศทางธุรกิจ<a href="courese_des.html#4309">&nbsp;</a></td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Information Systems for Business)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 351</td>
				<td>ธุรกิจอัจฉริยะ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Business Intelligence)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 355</td>
				<td>การจัดการโครงการสำหรับระบบสารสนเทศเพื่อการจัดการ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Project Management for Management Information Systems)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 359</td>
				<td>การพัฒนาโปรแกรมประยุกต์บนเว็บ</td>
				<td>3(2-3-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Web Application Development)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 361</td>
				<td>การค้นหาความรู้สำหรับฐานข้อมูลธุรกิจ</td>
				<td>3(2-3-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Knowledge Discovery in Business Databases)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 432</td>
				<td>สัมมนาระบบสารสนเทศเพื่อการจัดการ</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Seminar in Management Information Systems)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 429</td>
				<td>โครงงานระบบสารสนเทศเพื่อการจัดการ</td>
				<td>4(0-8-4)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Project in Management Information Systems)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">วิชาเลือก</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 210&nbsp;</td>
				<td>การจัดการสำนักงาน&nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Office Management)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 217&nbsp;</td>
				<td>การตลาด</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Marketing)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 218&nbsp;&nbsp;</td>
				<td>กฎหมายธุรกิจ<a href="courese_des.html#4218">&nbsp;</a></td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Business Laws)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 219&nbsp;&nbsp;</td>
				<td>แรงงานสัมพันธ์<a href="courese_des.html#4219">์</a>&nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Labour Relations)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 221&nbsp;</td>
				<td>การบัญช<a href="courese_des.html#4221">ี</a>&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Accounting)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 229 &nbsp;</td>
				<td>เศรษฐศาสตร์เทคโนโลยีสารสนเทศ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Economics of Information Technology)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 307&nbsp;&nbsp;&nbsp;</td>
				<td>การจัดการทรัพยากรบุคคล&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Human Resource Management)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 317</td>
				<td>การตัดสินใจการจัดการทางธุรกิจ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Business Management Decision Making)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 327&nbsp;</td>
				<td>ระบบสารสนเทศภูมิศาสตร์ &nbsp;&nbsp;</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Geographic Information System)&nbsp;&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 328</td>
				<td>ธุรกิจอิเล็กทรอนิกส์ &nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(e-Business)&nbsp;&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 342</td>
				<td>การบริหารระบบและเครือข่าย</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Network and System Administration)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 343</td>
				<td>เทคโนโลยีการจัดการฐานความรู้</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Knowledge Base Management Technology)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 356</td>
				<td>การจัดการการดำเนินงาน</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Operations Management)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 405</td>
				<td>การจัดการการเงิน</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Financial Management)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 417</td>
				<td>ธุรกิจระหว่างประเทศ&nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(International Business)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 422&nbsp;</td>
				<td>การศึกษาอิสระ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Independent Studies)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="4" align="left" valign="top">&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2" align="left" valign="top">4. กลุ่มวิชาเฉพาะสารสนเทศศึกษา(Information Studies)</td>
				<td colspan="2" align="left" valign="top"><a href="subjectDes/IT2555_Description9is.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
				</tr>
				<tr>
				<td align="left" valign="top">วิชาบังคับ</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 212</td>
				<td>สารสนเทศในบริบทสังคม&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Information in the Society Context)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 215</td>
				<td>การจัดการบริการสารสนเทศ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Information Service Management)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 234</td>
				<td>การจัดระบบสารสนเทศ</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Information Organization)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 242</td>
				<td>การพัฒนาและการจัดการทรัพยากรสารสนเทศ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Collection Development and Management)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 318</td>
				<td>แหล่งสารสนเทศ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Information Sources)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 352</td>
				<td>ห้องสมุดดิจิทัล</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Digital Libraries)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 362</td>
				<td>การทำรายการทรัพยากรสารสนเทศ</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Cataloging of Information Resource)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 363</td>
				<td>การค้นคืนสารสนเทศ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Information Retrieval)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 364</td>
				<td>ฐานข้อมูลงานสารสนเทศและห้องสมุด</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Information and Library Database)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 433</td>
				<td>สัมมนางานสารสนเทศและห้องสมุด</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Seminar in Information and Library Work)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 430</td>
				<td>โครงงานสารสนเทศและห้องสมุด</td>
				<td>4(0-8-4)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>
				<p>(Project in Information and Library Work)</p>
				</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">วิชาเลือก</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 344</td>
				<td>การจัดทำดรรชนีและสาระสังเขป</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Indexing and Abstracting)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 315&nbsp;</td>
				<td>การจัดการศูนย์สารสนเทศ&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Management of Information Centers)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 316&nbsp;</td>
				<td>ผู้ใช้สารสนเทศ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Information Users)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 319&nbsp;</td>
				<td>เศรษฐศาสตร์สารสนเทศ&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Economics of Information)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 320</td>
				<td>การจัดการสารสนเทศสำนักงาน&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Office Information Management)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 344</td>
				<td>จดหมายเหตุมัลติมีเดีย</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Multimedia Archives)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 358</td>
				<td>การออกแบบสารสนเทศและการพิมพ์แบบตั้งโต๊ะ</td>
				<td>3(2-2-5)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Information Design and Desktop Publishing)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 373</td>
				<td>เมทาดาทา</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Metadata)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 374</td>
				<td>ระบบห้องสมุด</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Library Systems)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 375&nbsp;&nbsp;</td>
				<td>การปรุงแต่งสารสนเทศ<a href="courese_des.html#4421">&nbsp;</a>&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Information Consolidation)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 410</td>
				<td>เครือข่ายระบบสารสนเทศ</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Information System Network)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 411</td>
				<td>การวิจัยและประเมินผลงานสารสนเทศ&nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Research and Evaluation of Information Work)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 420</td>
				<td>คอมพิวเตอร์เพื่อการเรียนรู้&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Computer Based Learning)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 422</td>
				<td>การศึกษาอิสระ&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Independent Studies)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="4" align="left" valign="top">&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2" align="left" valign="top">5. รายวิชาหลักสูตรวิทยาการสารสนเทศบัณฑิตแบบก้าวหน้า(Honors Program)</td>
				<td colspan="2" align="left" valign="top"><a href="subjectDes/IT2555_Description10hp.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
				</tr>
				<tr>
				<td align="left" valign="top">วิชาบังคับ</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 366</td>
				<td>การเขียนเพื่อการวิจัย</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Research Writing)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 367</td>
				<td>การวิจัยทางเทคโนโลยีสารสนเทศและการสื่อสาร</td>
				<td>3(3-0-6)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Research in Information and Communication Technology)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 434</td>
				<td>สัมมนา</td>
				<td>2(2-0-4)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Seminar)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="4" align="left" valign="top">&nbsp;</td>
				</tr>
				<tr>
				<td colspan="3" align="left" valign="top">โครงงานวิจัยปริญญาตรีแบบก้าวหน้า</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 435</td>
				<td>โครงงานวิจัยปริญญาตรีแบบก้าวหน้า</td>
				<td>12</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Honors Research Project)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="4" align="left" valign="top">&nbsp;</td>
				</tr>
				<tr>
				<td colspan="2" align="left" valign="top">วิชาเลือก</td>
				<td align="left" valign="top">57 หน่วยกิต</td>
				</tr>
				<tr>
				<td colspan="3" align="left" valign="top">เลือกเรียนจากรายวิชาในหลักสูตรวิทยาการสารสนเทศบัณฑิต และหลักสูตรวิทยาการสารสนเทศมหาบัณฑิต และวิทยาการสารสนเทศดุษฎีบัณฑิต โดยความเห็นชอบของอาจารย์ที่ปรึกษาวิชาการ</td>
				</tr>
				<tr>
				<td colspan="3" align="left" valign="top"><strong><u>หมายเหตุ</u></strong> นักศึกษาหลักสูตรวิทยาการสารสนเทศบัณฑิตแบบก้าวหน้า ให้เรียนรายวิชาหมวดวิชาศึกษาทั่วไป จำนวน 38 หน่วยกิต หมวดวิชาเฉพาะ(กลุ่มวิชาเทคโนโลยีพื้นฐาน) จำนวน 47 หน่วยกิต ตามหลักสูตรวิทยาการสารสนเทศบัณฑิต</td>
				</tr>
				<tr>
				<td class="content1" colspan="2" align="left" valign="top" bgcolor="#EEEEEE">2.3 กลุ่มวิชาสหกิจศึกษา&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp; หน่วยกิต</td>
				<td class="content1" colspan="2" align="left" valign="top" bgcolor="#EEEEEE"><a href="subjectDes/IT2555_Description11coop.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
				</tr>
				<tr>
				<td align="left" valign="top">204 490&nbsp;</td>
				<td>เตรียมสหกิจศึกษา<a href="courese_des.html#4490">&nbsp;</a>&nbsp;&nbsp;&nbsp;</td>
				<td>1(1-0-2)</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Pre-cooperative Education)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 491&nbsp;&nbsp;</td>
				<td>สหกิจศึกษา&nbsp; 1*</td>
				<td>8</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Cooperative Education I)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 492&nbsp;&nbsp;</td>
				<td>สหกิจศึกษา&nbsp; 2**</td>
				<td>8</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Cooperative Education II)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">204 493&nbsp;&nbsp;</td>
				<td>สหกิจศึกษา&nbsp; 3**</td>
				<td>8</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>(Cooperative Education III)</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td colspan="4" align="left" valign="top"><span class="style13"><u>หมายเหตุ</u>&nbsp;* สาขาวิชาโดยความเห็นชอบของคณะกรรมการประจำสำนักวิชา อาจพิจารณาให้เรียนวิชาเลือก<br /> บังคับที่มีหน่วยกิตรวมเท่ากันแทน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ** รายวิชา 204492 สหกิจศึกษา 2 และรายวิชา 204493 สหกิจศึกษา 3 เป็นรายวิชาที่นักศึกษาสามารถลงทะเบียนเรียน เพิ่มเติมหลังจากผ่านรายวิชา 204491 สหกิจศึกษา 1 ซึ่งเป็นวิชาบังคับของหลักสูตร</span></td>
				</tr>
				<tr>
				<td colspan="4" align="left" valign="top" bgcolor="#EEEEEE">3.หมวดวิชาเลือกเสรี 8 หน่วยกิต</td>
				</tr>
				<tr>
				<td colspan="4" align="left" valign="top">ให้เลือกเรียนรายวิชาใดๆ ที่เปิดสอนในมหาวิทยาลัย<br /> <em>ความหมายของเลขรหัสวิชา</em></td>
				</tr>
				<tr>
				<td colspan="4" align="left" valign="top">เลขรหัสวิชาประกอบด้วยเลข 6 ตัว หน้าชื่อรายวิชา มีความหมายดังนี้</td>
				</tr>
				<tr>
				<td align="left" valign="top">ตัวเลขตำแหน่งที่ 1</td>
				<td>หมายถึง สำนักวิชาที่รับผิดชอบในแต่ละวิชา กำหนดรหัสดังนี้</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>&nbsp;1 หมายถึง สำนักวิชาวิทยาศาสตร์<br /> 2 หมายถึง สำนักวิชาเทคโนโลยีสังคม<br /> 3 หมายถึง สำนักวิชาเทคโนโลยีการเกษตร<br /> 4-5 หมายถึง สำนักวิชาวิศวกรรมศาสตร์<br /> 6 หมายถึง สำนักวิชาแพทยศาสตร์<br /> 7 หมายถึง สำนักวิชาพยาบาลศาสตร์</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">ตัวเลขตำแหน่งที่ 2 และ 3&nbsp;</td>
				<td>หมายถึง&nbsp;สาขาวิชา</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">ตัวเลขตำแหน่งที่ 4&nbsp;&nbsp;</td>
				<td>หมายถึง&nbsp;ชั้นปี</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">ตัวเลขตำแหน่งที่ 5 และ 6&nbsp;&nbsp;</td>
				<td>หมายถึง&nbsp;ลำดับรายวิชาของแต่ละชั้นปี</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				</tbody>
				</table>
				</div>
				</div>
				<!-- /.row --><hr /></div>
				<!-- /.container -->
				<p>'; }


		else echo '

			<div class="container">
			<div class="row">
			<div class="col-lg-12">
			<h1 class="page-header">PROGRAMS<br /> <small>BACHELOR\'S DEGREE</small></h1>
			<!-- <ol class="breadcrumb">
			<li><a href="index.html">Home</a>
			</li>
			<li class="active">Full Width Page</li>
			</ol> --></div>
			</div>
			</div>
			<!-- /.row -->
			<p> </p>
			<!-- Content Row -->
			<div class="container"><!-- Page Heading/Breadcrumbs -->
			<div class="row">
			<div class="col-lg-12">
			<table class="table">
			<tbody>
			<tr style="height: 21px;">
			<td class="content1" style="width: 364px; height: 21px;" colspan="3" bgcolor="#EEEEEE">1.General Education    38   credits</td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 300px; height: 21px;" colspan="2" align="left" valign="top">1.1 Core Courses 15 credits.</td>
			<td class="content1" style="width: 64px; height: 21px;" colspan="1" align="left" valign="top" width="86"><a href="subjectDes/IT2555_Description1.pdf">Dowload Description</a></td>
			</tr>
			<tr style="height: 51px;">
			<td style="width: 10px; height: 51px;" align="left" valign="top" width="98">202 107</td>
			<td style="width: 290px; height: 51px;" align="left" valign="top" width="380">
			<p class="content1">Use of Computer and Information    </p>
			</td>
			<td style="width: 64px; height: 51px;" align="left" valign="top">3(2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">202 211</td>
			<td style="width: 290px; height: 21px;">Thinking for Development</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">202 212</td>
			<td style="width: 290px; height: 21px;">Man and Culture</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">202 213</td>
			<td style="width: 290px; height: 21px;">Globalization</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 300px; height: 21px;" colspan="2"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 300px; height: 21px;" colspan="2">1.2 Language Courses 15 credits.</td>
			<td style="width: 64px; height: 21px;" colspan="1"><a href="subjectDes/IT2555_Description2eng.pdf">Dowload Description</a></td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">203 101</td>
			<td style="width: 290px; height: 21px;"> English I</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">203 102 </td>
			<td style="width: 290px; height: 21px;">English II</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">203 203    </td>
			<td style="width: 290px; height: 21px;">English III</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">203 204 </td>
			<td style="width: 290px; height: 21px;">English IV</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">203 305   </td>
			<td style="width: 290px; height: 21px;">English V</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 300px; height: 21px;" colspan="2"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 300px; height: 21px;" colspan="2">1.3 Science and Mathematics 9 credits.</td>
			<td style="width: 64px; height: 21px;" colspan="1"><a href="subjectDes/IT2555_DescriptionEnMathtoger.pdf">Dowload Description</a></td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">103 113</td>
			<td style="width: 290px; height: 21px;"> (Mathematics in Daily Life)</td>
			<td style="width: 64px; height: 21px;">3(3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">104 113</td>
			<td style="width: 290px; height: 21px;">(Man and Environment)</td>
			<td style="width: 64px; height: 21px;">3(3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">105 113</td>
			<td style="width: 290px; height: 21px;"> (Man and Technology)</td>
			<td style="width: 64px; height: 21px;">3(3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 300px; height: 21px;" colspan="2">1.4 Humanities and Social Sciences 2 credits.</td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="style16" style="width: 300px; height: 21px;" colspan="2">select 2 credits from following courses.</td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">114 100 </td>
			<td style="width: 290px; height: 21px;">(Sport and Recreation) </td>
			<td style="width: 64px; height: 21px;">2(1-2-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">202 111</td>
			<td style="width: 290px; height: 21px;">(Thai for Communication)</td>
			<td style="width: 64px; height: 21px;">2(2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">202 241</td>
			<td style="width: 290px; height: 21px;">(Law in Daily Life)</td>
			<td style="width: 64px; height: 21px;">2(2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">202 261</td>
			<td style="width: 290px; height: 21px;">(Religion for Life)</td>
			<td style="width: 64px; height: 21px;">2(2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">202 262</td>
			<td style="width: 290px; height: 21px;">(Buddhadhamma)</td>
			<td style="width: 64px; height: 21px;">2(2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">202 291</td>
			<td style="width: 290px; height: 21px;">(Modern Management)</td>
			<td style="width: 64px; height: 21px;">2(2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">202 292</td>
			<td style="width: 290px; height: 21px;">(Technopreneur)</td>
			<td style="width: 64px; height: 21px;">2(2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">202 324</td>
			<td style="width: 290px; height: 21px;">(Pluri-Cultural Thai Studies)</td>
			<td style="width: 64px; height: 21px;">2(2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">202 354</td>
			<td style="width: 290px; height: 41px;">(Philosophy of Education and Working)</td>
			<td style="width: 64px; height: 41px;">2(2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 374px; height: 21px;" colspan="4"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 300px; height: 21px;" colspan="2" bgcolor="#EEEEEE">2. Specificial subject   131   credits</td>
			<td class="content1" style="width: 64px; height: 21px;" colspan="1" bgcolor="#EEEEEE"><a href="subjectDes/IT2555_Description2-1.pdf">Dowload Description</a></td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 374px; height: 21px;" colspan="4" bgcolor="#EEEEEE">2.1 Basic Technology 47 credits</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 374px; height: 21px;" colspan="4"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="style16" style="width: 10px; height: 21px;">Basic science.</td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">204 102 </td>
			<td style="width: 290px; height: 21px;">Mathematics for Computer</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 103  </td>
			<td style="width: 290px; height: 41px;">Statistics for Information Science Research</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 301</td>
			<td style="width: 290px; height: 41px;">Quantitative Research Methods</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="style16" style="width: 10px; height: 21px;">Communication.</td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 104 </td>
			<td style="width: 290px; height: 41px;">Interpersonal and Group Communication</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">204 105  </td>
			<td style="width: 290px; height: 21px;">Mass Communication</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 374px; height: 21px;" colspan="4"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="style16" style="width: 374px; height: 21px;" colspan="4">Computer and technology.</td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 108 </td>
			<td style="width: 290px; height: 41px;">Computer Programming for Information System</td>
			<td style="width: 64px; height: 41px;">4 (3-3-8)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 110   </td>
			<td style="width: 290px; height: 41px;">Basic Computer Administration</td>
			<td style="width: 64px; height: 41px;">1 (0-2-1)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 111</td>
			<td style="width: 290px; height: 41px;">Data Communications and Networking</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td class="content1" style="width: 10px; height: 41px;">204 112</td>
			<td class="content1" style="width: 290px; height: 41px;">Laws and Ethics in Information Technology</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td class="content1" style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 204 </td>
			<td style="width: 290px; height: 41px;">Database Design and Development</td>
			<td style="width: 64px; height: 41px;">4 (3-2-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td class="content1" style="width: 10px; height: 41px;">204 235</td>
			<td class="content1" style="width: 290px; height: 41px;">Information System Design and Development</td>
			<td style="width: 64px; height: 41px;">4 (3-3-8)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td class="content1" style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 236  </td>
			<td style="width: 290px; height: 41px;">Animation and Multimedia Design and Development</td>
			<td style="width: 64px; height: 41px;">4 (2-4-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">204 329</td>
			<td style="width: 290px; height: 21px;">Web Technology</td>
			<td style="width: 64px; height: 21px;">3 (2-3-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">Management science.</td>
			<td style="width: 290px; height: 41px;"> </td>
			<td style="width: 64px; height: 41px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 113      </td>
			<td style="width: 290px; height: 41px;">Information System Analysis</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">204 225</td>
			<td style="width: 290px; height: 21px;">Knowledge Management</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 374px; height: 21px;" colspan="4"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 374px; height: 21px;" colspan="4" bgcolor="#EEEEEE">2.2 Specificial subject   75   credits</td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 300px; height: 21px;" colspan="2">1.Enterprise Software</td>
			<td class="content1" style="width: 64px; height: 21px;" colspan="1"><a href="subjectDes/IT2555_Description6es.pdf">Dowload Description</a></td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 374px; height: 21px;" colspan="4"><em>Required subject</em></td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 10px; height: 21px;"> </td>
			<td class="content1" style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 226</td>
			<td style="width: 290px; height: 41px;">Enterprise Software Architecture</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 238</td>
			<td style="width: 290px; height: 41px;">Data Structure and Algorithms</td>
			<td style="width: 64px; height: 41px;">3 (2-2-5)*</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 239</td>
			<td style="width: 290px; height: 41px;">Advanced Database Design and Development</td>
			<td style="width: 64px; height: 41px;">3 (2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 240</td>
			<td style="width: 290px; height: 41px;">Object-Oriented Programming</td>
			<td style="width: 64px; height: 41px;">3 (2-2-5)*</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">204 331</td>
			<td style="width: 290px; height: 21px;">Software Engineering</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">204 335</td>
			<td style="width: 290px; height: 21px;">Software Testing</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 336</td>
			<td style="width: 290px; height: 41px;">Software Project Management</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 359</td>
			<td style="width: 290px; height: 41px;">Web Application Development</td>
			<td style="width: 64px; height: 41px;">3 (2-2-5)*</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 360</td>
			<td style="width: 290px; height: 41px;">Enterprise Application Development</td>
			<td style="width: 64px; height: 41px;">3 (2-3-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 426</td>
			<td style="width: 290px; height: 41px;">Seminar in Enterprise Software</td>
			<td style="width: 64px; height: 41px;">2 (2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 427</td>
			<td style="width: 290px; height: 41px;">Project in Enterprise Software</td>
			<td style="width: 64px; height: 41px;">4(0-8-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td class="content1" style="width: 300px; height: 41px;" colspan="2">*learn with a group of management information systems.</td>
			<td style="width: 64px; height: 41px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="style16" style="width: 10px; height: 21px;">Elective subject</td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 61px;">
			<td style="width: 10px; height: 61px;">204 228</td>
			<td style="width: 290px; height: 61px;">Information and Communication Technology Security</td>
			<td style="width: 64px; height: 61px;">3(3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 232</td>
			<td style="width: 290px; height: 41px;">Principles of Human-Computer Interaction</td>
			<td style="width: 64px; height: 41px;">3(3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 332</td>
			<td style="width: 290px; height: 41px;">Network Application Development</td>
			<td style="width: 64px; height: 41px;">3(2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 333</td>
			<td style="width: 290px; height: 41px;">Event-Driven Software Development</td>
			<td style="width: 64px; height: 41px;">3(2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 334</td>
			<td style="width: 290px; height: 41px;">Scripting Language Programming</td>
			<td style="width: 64px; height: 41px;">3(2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 337</td>
			<td style="width: 290px; height: 41px;">Parallel and Distributed Programming</td>
			<td style="width: 64px; height: 41px;">3(2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 340</td>
			<td style="width: 290px; height: 41px;">Principles of Artificial Intelligence</td>
			<td style="width: 64px; height: 41px;">3(3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 347</td>
			<td style="width: 290px; height: 41px;">Multimedia Software Development</td>
			<td style="width: 64px; height: 41px;">3(2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 348</td>
			<td style="width: 290px; height: 41px;">Computer Game Development</td>
			<td style="width: 64px; height: 41px;">3(2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 368</td>
			<td style="width: 290px; height: 41px;">Advanced Object-Oriented Application Development</td>
			<td style="width: 64px; height: 41px;">3(2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 369</td>
			<td style="width: 290px; height: 41px;">Semantic Web Development</td>
			<td style="width: 64px; height: 41px;">3(2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;">204 370</td>
			<td style="width: 290px; height: 41px;">Mobile Device Application Development</td>
			<td style="width: 64px; height: 41px;">3(2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;">204 422</td>
			<td style="width: 290px; height: 21px;">Independent Studies</td>
			<td style="width: 64px; height: 21px;">3(3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 10px; height: 21px;"> </td>
			<td class="content1" style="width: 290px; height: 21px;"> </td>
			<td class="content1" style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 10px; height: 21px;"> </td>
			<td class="content1" style="width: 290px; height: 21px;"> </td>
			<td class="content1" style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 300px; height: 21px;" colspan="2"> 2. Communication</td>
			<td style="width: 64px; height: 21px;" colspan="1"><a href="subjectDes/IT2555_Description7ic.pdf">Dowload Description</a></td>
			</tr>
			<tr style="height: 21px;">
			<td class="style16" style="width: 10px; height: 21px;">Required subject</td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 206  </td>
			<td style="width: 290px; height: 41px;">Principles o f Message Design and Writing</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 208  </td>
			<td style="width: 290px; height: 41px;">Technology of Mass Media Production I</td>
			<td style="width: 64px; height: 41px;">3 (1-4-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 224 </td>
			<td style="width: 290px; height: 41px;">Photography for Communication</td>
			<td style="width: 64px; height: 41px;">3 (3–0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 61px;">
			<td style="width: 10px; height: 61px;" align="left" valign="top">204 237</td>
			<td style="width: 290px; height: 61px;">Newspaper and Online News Writing and Reporting</td>
			<td style="width: 64px; height: 61px;">3 (3–0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 241</td>
			<td style="width: 290px; height: 41px;">Broadcasting and Film Script Writing</td>
			<td style="width: 64px; height: 41px;">3 (3–0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 302  </td>
			<td style="width: 290px; height: 41px;">Technology of Mass Media Production II</td>
			<td style="width: 64px; height: 41px;">3 (1-4-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 306 </td>
			<td style="width: 290px; height: 41px;">Management of Mass Media Organization</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 349</td>
			<td style="width: 290px; height: 41px;">Technology of Animation Production</td>
			<td style="width: 64px; height: 41px;">3 (1-4-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;">   </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 401 </td>
			<td style="width: 290px; height: 41px;">Laws and Ethics of Mass Communication</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 431</td>
			<td style="width: 290px; height: 21px;">Seminar in Communication</td>
			<td style="width: 64px; height: 21px;">2 (2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 428</td>
			<td style="width: 290px; height: 21px;">Project in Communication</td>
			<td style="width: 64px; height: 21px;">4(0-8-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="style16" style="width: 10px; height: 21px;" align="left" valign="top">Elective subject</td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 220  </td>
			<td style="width: 290px; height: 21px;">Business Communication</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 222</td>
			<td style="width: 290px; height: 41px;">Language and Communication Behavior</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 243</td>
			<td style="width: 290px; height: 41px;">Article and Documentary Writing</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 303</td>
			<td style="width: 290px; height: 41px;">Technology of Mass Communication</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 323 </td>
			<td style="width: 290px; height: 41px;">Technology in Political Communication</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 325  </td>
			<td style="width: 290px; height: 41px;">Advertising and Public Relations</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 326</td>
			<td style="width: 290px; height: 41px;">Translation for Communication</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 341</td>
			<td style="width: 290px; height: 41px;">Integrated Marketing Communication</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 353</td>
			<td style="width: 290px; height: 21px;">Audience Analysis</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 371</td>
			<td style="width: 290px; height: 21px;">Media in ASEAN</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 372</td>
			<td style="width: 290px; height: 41px;">Fundamental of Digital Media</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 376</td>
			<td style="width: 290px; height: 41px;">Communication Psychology</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 61px;">
			<td style="width: 10px; height: 61px;" align="left" valign="top">204 403 </td>
			<td style="width: 290px; height: 61px;">International and Intercultural Communication</td>
			<td style="width: 64px; height: 61px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 413  </td>
			<td style="width: 290px; height: 41px;">Mass Communication Planning and Dissemination</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 414  </td>
			<td style="width: 290px; height: 41px;">Behavior and Organization Communication</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 416</td>
			<td style="width: 290px; height: 21px;">Communication Research</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 422 </td>
			<td style="width: 290px; height: 21px;">Independent Studies</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 424</td>
			<td style="width: 290px; height: 41px;">Advanced Technology of Mass Media Production</td>
			<td style="width: 64px; height: 41px;">3 (1–4-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 425  </td>
			<td style="width: 290px; height: 41px;">Media Analysis and Criticism</td>
			<td style="width: 64px; height: 41px;">3 (3–0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 300px; height: 21px;" colspan="2" align="left" valign="top">3. Management Information Systems</td>
			<td style="width: 64px; height: 21px;" colspan="1" align="left" valign="top"><a href="subjectDes/IT2555_Description8mis.pdf">Dowload Description</a></td>
			</tr>
			<tr style="height: 21px;">
			<td class="style16" style="width: 10px; height: 21px;" align="left" valign="top">Required subject</td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 209   </td>
			<td style="width: 290px; height: 21px;">Principles of Management</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 238</td>
			<td style="width: 290px; height: 41px;">Data Structure and Algorithms</td>
			<td style="width: 64px; height: 41px;">3 (2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 240</td>
			<td style="width: 290px; height: 41px;">Object-Oriented Programming</td>
			<td style="width: 64px; height: 41px;">3 (2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 308   </td>
			<td style="width: 290px; height: 41px;">Management of Information Systems</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 309  </td>
			<td style="width: 290px; height: 41px;">Information Systems for Business</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 351</td>
			<td style="width: 290px; height: 21px;">Business Intelligence</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 61px;">
			<td style="width: 10px; height: 61px;" align="left" valign="top">204 355</td>
			<td style="width: 290px; height: 61px;">Project Management for Management Information Systems</td>
			<td style="width: 64px; height: 61px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 359</td>
			<td style="width: 290px; height: 41px;">Web Application Development</td>
			<td style="width: 64px; height: 41px;">3 (2-3-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 361</td>
			<td style="width: 290px; height: 41px;">Knowledge Discovery in Business Databases</td>
			<td style="width: 64px; height: 41px;">3 (2-3-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 432</td>
			<td style="width: 290px; height: 41px;">Seminar in Management Information Systems</td>
			<td style="width: 64px; height: 41px;">2 (2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 429</td>
			<td style="width: 290px; height: 41px;">Project in Management Information Systems</td>
			<td style="width: 64px; height: 41px;">4 (0-8-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="style16" style="width: 10px; height: 21px;" align="left" valign="top">Elective subject</td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 210 </td>
			<td style="width: 290px; height: 21px;">Office Management</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 217 </td>
			<td style="width: 290px; height: 21px;">Marketing</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 218  </td>
			<td style="width: 290px; height: 21px;">Business Laws</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 219  </td>
			<td style="width: 290px; height: 21px;">Labour Relations</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 221 </td>
			<td style="width: 290px; height: 21px;">Accounting</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 229  </td>
			<td style="width: 290px; height: 41px;">Economics of Information Technology</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 307   </td>
			<td style="width: 290px; height: 41px;">Human Resource Management</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 317</td>
			<td style="width: 290px; height: 41px;">Business Management Decision Making</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 327 </td>
			<td style="width: 290px; height: 41px;">Geographic Information System</td>
			<td style="width: 64px; height: 41px;">3 (2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 328</td>
			<td style="width: 290px; height: 21px;">e-Business</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;">  </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 342</td>
			<td style="width: 290px; height: 41px;">Network and System Administration</td>
			<td style="width: 64px; height: 41px;">3 (2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 343</td>
			<td style="width: 290px; height: 41px;">Knowledge Base Management Technology</td>
			<td style="width: 64px; height: 41px;">3 (2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 356</td>
			<td style="width: 290px; height: 21px;">Operations Management</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 405</td>
			<td style="width: 290px; height: 21px;">Financial Management</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 417</td>
			<td style="width: 290px; height: 21px;">International Business</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 422 </td>
			<td style="width: 290px; height: 21px;">Independent Studies</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 374px; height: 21px;" colspan="4" align="left" valign="top"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 300px; height: 21px;" colspan="2" align="left" valign="top">4. Information Studies</td>
			<td style="width: 64px; height: 21px;" colspan="1" align="left" valign="top"><a href="subjectDes/IT2555_Description9is.pdf">Dowload Description</a></td>
			</tr>
			<tr style="height: 21px;">
			<td class="style16" style="width: 10px; height: 21px;" align="left" valign="top">Required subject</td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 212</td>
			<td style="width: 290px; height: 41px;">Information in the Society Context</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 215</td>
			<td style="width: 290px; height: 41px;">Information Service Management</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 234</td>
			<td style="width: 290px; height: 21px;">Information Organization</td>
			<td style="width: 64px; height: 21px;">3 (2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 242</td>
			<td style="width: 290px; height: 41px;">Collection Development and Management</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 318</td>
			<td style="width: 290px; height: 21px;">Information Sources</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 352</td>
			<td style="width: 290px; height: 21px;">Digital Libraries</td>
			<td style="width: 64px; height: 21px;">3 (2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 362</td>
			<td style="width: 290px; height: 41px;">Cataloging of Information Resource</td>
			<td style="width: 64px; height: 41px;">3 (2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 363</td>
			<td style="width: 290px; height: 21px;">Information Retrieval</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 364</td>
			<td style="width: 290px; height: 41px;">Information and Library Database</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 433</td>
			<td style="width: 290px; height: 41px;">Seminar in Information and Library Work</td>
			<td style="width: 64px; height: 41px;">2 (2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 430</td>
			<td style="width: 290px; height: 41px;">Project in Information and Library Work</td>
			<td style="width: 64px; height: 41px;">4 (0-8-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="style16" style="width: 10px; height: 21px;" align="left" valign="top">Elective subject</td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 344</td>
			<td style="width: 290px; height: 21px;">Indexing and Abstracting</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 315 </td>
			<td style="width: 290px; height: 41px;">Management of Information Centers</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 316 </td>
			<td style="width: 290px; height: 21px;">Information Users</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 319 </td>
			<td style="width: 290px; height: 21px;">Economics of Information</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 320</td>
			<td style="width: 290px; height: 41px;">Office Information Management</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 344</td>
			<td style="width: 290px; height: 21px;">Multimedia Archives</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 358</td>
			<td style="width: 290px; height: 41px;">Information Design and Desktop Publishing</td>
			<td style="width: 64px; height: 41px;">3 (2-2-5)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 373</td>
			<td style="width: 290px; height: 21px;">Metadata</td>
			<td style="width: 64px; height: 21px;">3(3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 374</td>
			<td style="width: 290px; height: 21px;">Library Systems</td>
			<td style="width: 64px; height: 21px;">3(3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 375  </td>
			<td style="width: 290px; height: 21px;">Information Consolidation</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 410</td>
			<td style="width: 290px; height: 41px;">Information System Network</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 41px;">
			<td style="width: 10px; height: 41px;" align="left" valign="top">204 411</td>
			<td style="width: 290px; height: 41px;">Research and Evaluation of Information Work</td>
			<td style="width: 64px; height: 41px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 420</td>
			<td style="width: 290px; height: 21px;">Computer Based Learning</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 422</td>
			<td style="width: 290px; height: 21px;">Independent Studies</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 374px; height: 21px;" colspan="4" align="left" valign="top"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 300px; height: 21px;" colspan="2" align="left" valign="top">5. Honors Program</td>
			<td style="width: 64px; height: 21px;" colspan="1" align="left" valign="top"><a href="subjectDes/IT2555_Description10hp.pdf">Dowload Description</a></td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">Required subject</td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 366</td>
			<td style="width: 290px; height: 21px;">Research Writing</td>
			<td style="width: 64px; height: 21px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 61px;">
			<td style="width: 10px; height: 61px;" align="left" valign="top">204 367</td>
			<td style="width: 290px; height: 61px;">Research in Information and Communication Technology</td>
			<td style="width: 64px; height: 61px;">3 (3-0-6)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 434</td>
			<td style="width: 290px; height: 21px;">Seminar</td>
			<td style="width: 64px; height: 21px;">2 (2-0-4)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 374px; height: 21px;" colspan="4" align="left" valign="top"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 364px; height: 21px;" colspan="3" align="left" valign="top">Honors Research Project</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 435</td>
			<td style="width: 290px; height: 21px;">Honors Research Project</td>
			<td style="width: 64px; height: 21px;">12</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 374px; height: 21px;" colspan="4" align="left" valign="top"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 300px; height: 21px;" colspan="2" align="left" valign="top">Elective subject</td>
			<td style="width: 64px; height: 21px;" align="left" valign="top">57 credits</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 374px; height: 21px;" colspan="4" align="left" valign="top"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 300px; height: 21px;" colspan="2" align="left" valign="top" bgcolor="#EEEEEE">2.3 cooperative education 9 credits.</td>
			<td class="content1" style="width: 64px; height: 21px;" colspan="1" align="left" valign="top" bgcolor="#EEEEEE"><a href="subjectDes/IT2555_Description11coop.pdf">Dowload Description</a></td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 490 </td>
			<td style="width: 290px; height: 21px;">Pre-cooperative Education</td>
			<td style="width: 64px; height: 21px;">1 (1-0-2)</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 491  </td>
			<td style="width: 290px; height: 21px;">Cooperative Education I</td>
			<td class="content1" style="width: 64px; height: 21px;">8</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 492  </td>
			<td style="width: 290px; height: 21px;">Cooperative Education II</td>
			<td class="content1" style="width: 64px; height: 21px;">8</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top">204 493  </td>
			<td style="width: 290px; height: 21px;">Cooperative Education III</td>
			<td class="content1" style="width: 64px; height: 21px;">8</td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 10px; height: 21px;" align="left" valign="top"> </td>
			<td style="width: 290px; height: 21px;"> </td>
			<td style="width: 64px; height: 21px;"> </td>
			</tr>
			<tr style="height: 21px;">
			<td style="width: 374px; height: 21px;" colspan="4" align="left" valign="top"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="width: 374px; height: 21px;" colspan="4" align="left" valign="top" bgcolor="#EEEEEE"> </td>
			</tr>
			</tbody>
			</table>
			<p> </p>
			<table class="table_cont">
			<tbody>
			<tr style="height: 21px;">
			<td class="content1" style="height: 21px;" colspan="4" align="left" valign="top" bgcolor="#EEEEEE">3.Elective 8 credits</td>
			</tr>
			<tr style="height: 21px;">
			<td style="height: 21px;" colspan="4" align="left" valign="top">choose to study courses offered on campus.</td>
			</tr>
			<tr style="height: 230px;">
			<td style="height: 230px;" colspan="4" align="left" valign="top">
			<table cellspacing="0" cellpadding="0">
			<tbody>
			<tr style="height: 21px;">
			<td class="content1" style="height: 21px;" colspan="2" align="left" valign="top"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="height: 21px;" colspan="2" align="left" valign="top" bgcolor="#DDDDDD"><em>*The meaning of subject code : </em></td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="height: 21px;" colspan="2" align="left" valign="top"> </td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="height: 21px;" colspan="2" align="left" valign="top">Subject code consist of 6 digits which meaningful.</td>
			</tr>
			<tr style="height: 21px;">
			<td class="content1" style="height: 21px;" align="left" valign="top"><strong>First digit </strong></td>
			<td class="content1" style="height: 21px;">is Social Technology</td>
			</tr>
			<tr style="height: 41px;">
			<td class="content1" style="height: 41px;" align="left" valign="top"><strong>Second and third digits </strong></td>
			<td class="content1" style="height: 41px;">is School of Information Technology</td>
			</tr>
			<tr style="height: 41px;">
			<td class="content1" style="height: 41px;" align="left" valign="top"><strong>Fourth digit </strong></td>
			<td class="content1" style="height: 41px;">is type of subject such as 5 is required subject, 6 is elective subject, 7 is Thesis and freedom in research.</td>
			</tr>
			<tr style="height: 41px;">
			<td class="content1" style="height: 41px;" align="left" valign="top"><strong>Fifth and sixth digits   </strong></td>
			<td class="content1" style="height: 41px;">is sequence of subject in each year</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			<p> </p>
			</div>
			</div>
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
