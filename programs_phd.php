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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : หลักสูตรปริญญาเอก"; }else echo "IT SUT : DOCTOR'S DEGREE";?>  </title>

    <?php  include('header.php') ?>

</head>

<body>


    <?php include("navbar.php") ?>

    	<?php 
			if($_SESSION['lang'] == 'th'){
				echo '<!-- Page Content -->
				<div class="container">

					<!-- Page Heading/Breadcrumbs -->
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">หลักสูตรปริญญาเอก
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
								<p><strong>หลักสูตรวิทยาการสารสนเทศมหาบัณฑิตและวิทยาการสารสนเทศดุษฎีบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ หลักสูตรปรับปรุง  พ.ศ. 2553</strong>

									<a class="btn btn-info" href="courses_doctor.php?lang=th"> <span class="glyphicon glyphicon-book"></span> &nbsp วิชาที่เปิดสอน </a>
									<br><br>เน้นผลิตมหาบัณฑิตและดุษฎีบัณฑิตที่มีความรู้ความสามารถในการวิจัย และพัฒนาด้านเทคโนโลยีสารสนเทศและการสื่อสาร 
									เพื่อผลิตมหาบัณฑิตและดุษฎีบัณฑิตที่มีความคิดวิเคราะห์ และสามารถบูรณาการองค์ความรู้ด้านเทคโนโลยีสารสนเทศและการสื่อสารในการแก้ปัญหา
									เพื่อผลิตมหาบัณฑิตและดุษฎีบัณฑิตที่มีจิตสำนึก ตระหนักถึงความสำคัญ และยึดมั่นในคุณธรรม จริยธรรม และความรับผิดชอบต่อวิชาการวิชาชีพ ตนเอง และสังคม

									<br>สาขาวิชาเทคโนโลยีสารสนเทศ สำนักวิชาเทคโนโลยีสังคม จึงได้พัฒนาหลักสูตรวิทยาการสารสนเทศดุษฎีบัณฑิต
									(Doctor of Information Science ) ประกอบด้วยการเรียน 3 แบบ คือ
								</p>

								<p class="author">หลักสูตรระดับดุษฎีบัณฑิต</p>
								<p>
								</p><ul>
								<li><a href="">    แบบ 1.1  หลักสูตร 3  ปี     </a></li>
								<li><a href="programs_phd_2.php">    แบบ 2.1  หลักสูตร 3  ปี     </a></li>
								<li><a href="programs_phd_3.php">    แบบ 2.2  หลักสูตร 4  ปี     </a></li>
							</ul>
							<p></p>
							<p><a href="file/doctor.pdf">ดาวน์โหลดแผนการเรียนสำหรับระดับดุษฎีบัณฑิตสาขาวิชาเทคโนโลยีสารสนเทศ</a></p>

							<p class="author">อาชีพที่สามารถประกอบได้หลังสำเร็จการศึกษา</p>
							<p>
								(1)  ผู้เชี่ยวชาญด้านเทคโนโลยีสารสนเทศและการสื่อสาร<br>
								(2)  นักวิชาการด้านเทคโนโลยีสารสนเทศและการสื่อสาร<br>
								(3)  นักวิจัยด้านเทคโนโลยีสารสนเทศและการสื่อสาร<br>
								(4)  นักวิเคราะห์และออกแบบระบบงานสารสนเทศ<br>
								(5)  อาจารย์ในสาขาวิชาที่เกี่ยวข้องกับเทคโนโลยีและการสื่อสาร<br>
								(6)  ผู้ดูแลระบบ<br>
								(7)  ผู้ดูแลเครือข่าย<br>
								(8)  ผู้จัดการโครงการสารสนเทศ<br>
								(9)  ผู้บริหารด้านการจัดการความรู้<br>
								(10) นักวิชาชีพในสถานประกอบการที่มีการใช้เทคโนโลยีสารสนเทศและการสื่อสาร
							</p>


							<p class="author"><br>**ดาวน์โหลดแบบฟอร์ต่างๆ</p>
							<p>
							</p><ul>
							<li><a href="file/ELOsDoctor2558.pdf">ผลการเรียนรู้กับวัตถุประสงค์ในแต่ละด้าน (ELOs)</a></li>
							<li><a href="file/Doctor2553.doc">เอกสารแนะนำเกี่ยวกับหลักสูตร</a></li>
							<li><a href="file/course_description_doc2015.pdf">คำอธิบายรายวิชาระดับดุษฎีบัณฑิต (Course description)</a></li>
							<li><a href="file/itref.pdf">รูปแบบการเขียนอ้างอิงในการทำเล่มวิทยานิพนธ์</a></li>
						</ul>
						<p></p>

						<p>
							สามารถค้นหารายละเอียดเพิ่มเติมได้ที่ ส่วนส่งเสริมวิชาการ =&gt; <a href="http://www.sut.ac.th/das/t1.htm">คลิ๊กที่นี้</a>
						</p>
					</blockquote>
				</div>  
					</div>
					<!-- /.row -->

					<hr>

				</div>
				<!-- /.container -->';
 
			}else 
				echo '<div class="container"><!-- Page Heading/Breadcrumbs -->
						<div class="row">
						<div class="col-lg-12">
						<h3>DOCTOR\'S DEGREE<br /><!--   <small>Information Technology</small> --></h3>
						<!-- <ol class="breadcrumb">
															<li><a href="index.html">Home</a>
															</li>
															<li class="active">Full Width Page</li>
														</ol> --></div>
						</div>
						<!-- /.row --> <!-- Content Row -->
						<div class="row">
						<div class="col-lg-12">
						<p><strong>Doctor of Information Science Program in Information Technology 2010.</strong> <br /><br />Ph.D. production focuses on the knowledge available in research. And development of information technology and communications. To produce Ph.D. in analytical thinking. And to integrate knowledge, information and communications technology in solving problems. To produce Ph.D. Conscious. Recognizing the importance. And adhering to ethical and moral responsibility for their academic and professional society.</p>
						<p>School of Information Technology. Social of Technology has developed information science Ph.D. program. (Doctor of Information Science) course consists of 3 types.<br /><br /></p>
						<p class="author">Doctor of Information Science (Information Technology)</p>
						<ul>
						<li><a href="">Course 1.1 - 3 Years</a></li>
						<li><a href="programs_phd_2.php">Course 2.1 - 3 Years</a></li>
						<li><a href="programs_phd_3.php">Course 2.1 - 4 Years</a></li>
						</ul>
						<p> Opportunity in occupation</p>
						<p>(1) IT professionals and communications.<br />(2) Academics of information technology and communications.<br />(3) Researchers of information technology and communications.<br />(4) Analysts and information system design.<br />(5) Teachers in subject areas related to technology and communications.<br />(6) Administrator.<br />(7) Network administrator.<br />(8) IT project manager.<br />(9) Executive knowledge management.<br />(10) Professional in the workplace, the use of information technology and communications.<br /><br />**Form download... </p>
						<ul>
						<li><a href="http://soctech.sut.ac.th/it/web56_backup/file/Doctor2553.doc">Introducttion Documentary</a></li>
						</ul>
						<p>Contact us for more information<br />Information Technology Tel. 0-4422-4273 e-mail : infotech@sut.ac.th<br />Or <a href="http://www.sut.ac.th/ces">http://www.sut.ac.th/ces</a></p>
						</div>
						</div>
						</div>';

    	?>

    <?php include("footer.php"); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
