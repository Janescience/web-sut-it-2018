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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : หลักสูตรระดับปริญญาโท "; }else echo "SUT IT : MASTER'S DEGREE";?> </title>

    <?php  include('header.php') ?> 

</head>

<body>

    <?php include("navbar.php") ?>
    <!-- Page Content -->
    <?php 

        if($_SESSION['lang'] == 'th'){
           echo '<div class="container">

                <!-- Page Heading/Breadcrumbs -->
                <div class="row">
                    <div class="col-lg-12">
                         <h1 class="page-header">หลักสูตร<br>
                            <small>ระดับปริญญาโท</smal> <br/>  หลักสูตรวิทยาการสารสนเทศมหาบัณฑิต (หลักสูตรปรับปรุง พ.ศ. 2553) </a> <br/></h1> 
                        </h1>
                        <h5>
                            <strong>ลักษณะเด่นของหลักสูตรวิทยาการสารสนเทศมหาบัณฑิต</strong><br><br>
                            <strong>เน้น</strong> แบบจำจองข้อมูล การจัดการฐานข้อมูล การจัดการเทคโนโลยีสารสนเทศเชิงกลยุทธ์ <br>การจัดการโครงการเทคโนโลยีสารสนเทศ
                            วิศวกรรมเว็บ ความมั่นคงของเทคโนโลยีสารสนเทศ <br>และวิธีการวิจัยและสถิติสำหรับเทคโนโลยีสารสนเทศ
                            <br><strong>เจาะลึก</strong> กลุ่มเนื้อหาสื่อดิจิทัล ระบบวิสาหกิจ และการจัดการความรู้
                            <br>
                            <br>สาขาวิชาเทคโนโลยีสารสนเทศ สำนักวิชาเทคโนโลยีสังคม <br>จึงได้พัฒนาหลักสูตรวิทยาการสารสนเทศมหาบัณฑิต
                            (Master of Information Science) ประกอบด้วย 3 กลุ่มวิชา คือ 

                        </h5>
                       <!--  <ol class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li class="active">About</li>
                        </ol> -->

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="well">
                        <div class="text-left"> <span class="glyphicon glyphicon-star"></span> วิชาที่เปิดสอน ระดับปริญญาโท &nbsp <a class="btn btn-info" href="courses_master.php?lang=th"> <span class="glyphicon glyphicon-book"></span> รายวิชาที่เปิดสอน </a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                    </div>
                </div>

                <!-- Intro Content -->
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/master_media-02.jpg" alt="">
                    </div>
                    <div class="col-md-6">

                      

                        <h3> 1. กลุ่มวิชาสื่อดิจิทัล</h3>
                        <p>
                        ศึกษามุ่งเน้นการสร้างและเสนอองค์ความรู้ในรูปลักษณ์สื่อใหม่ (new media) ที่ใช้เทคโนโลยีสารสนเทศ และการสื่อสาร
                        โดยเฉพาะคอมพิวเตอร์โดยเน้นสาระ (information) ที่สื่อนำเสนอและการปฏิสัมพันธ์ (interaction) ระหว่างมนุษย์
                        และคอมพิวเตอร์ ซึ่งรวมถึงแอนิเมชัน เกมคอมพิวเตอร์และการจำลอง การออกแบบกราฟิก การเรียนรู้อิเล็กทรอนิกส์ เป็นต้น
                        </p>
                        <a class="btn btn-default" href="program_m_ic.php" role="button"> รายละเอียด » </a>
                    </div>
                </div>
                <!-- /.row -->
                <hr>
                <!-- Intro Content -->
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/m_es-02.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3> 2. กลุ่มวิชาระบบวิสาหกิจ <span class="text-muted"> </span> </h3>
                            เป็น   กลุ่มวิชาเฉพาะ เน้น
                            <p>
                            มุ่งเน้นการบูรณาการความรู้ที่ลึกซึ้งทางด้านธุรกิจและองค์การภาครัฐเข้ากับเทคโนโลยีสารสนเทศขั้นสูงเพื่อเพิ่มประสิทธิภาพ
                            ขององค์การและวิสาหกิจทุกประเภทให้ยืนหยัดอยู่ได้ในโลกของการแข่งขันตลอดจนปรับตัวต่อสถานการณ์อย่างรวดเร็วโดย
                            ศึกษาเน้นทฤษฎีและปฏิบัติในการออกแบบกระบวนการทางธุรกิจวิสาหกิจข้ามชาติ เครือข่าย คอมพิวเตอร์สำหรับวิสาหกิจ ตลอด
                            จนการพัฒนาระบบสารสนเทศและระบบความรู้ให้เหมาะสมกับวิสาหกิจต่างๆ 
                            </p>
                        <a class="btn btn-default" href="program_m_es.php" role="button"> รายละเอียด » </a>
                    </div>
                </div>
                <!-- /.row -->
                <hr>
                <!-- Intro Content -->
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/master_km-02.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                       <h3> 3. กลุ่มวิชาการจัดการความรู้  <span class="text-muted"> <br></span> </h3>
                           <p>
                               มุ่งเน้นการสร้างและบริหารจัดการองค์ความรู้อย่างเป็นระบบทุกระดับ อันเป็นการตอบสนองต่อการพัฒนา นำสังคมไทยสู่สังคม
                               แห่งภูมิปัญญาและการเรียนรู้ โดยศึกษาเน้นการสร้างและการจัดการองค์ความรู้เทคโนโลยีและเครื่องมือ ในการจัดการความรู้
                               การจัดการความรู้เชิงกลยุทธ์ เศรษฐกิจฐานความรู้ ฯลฯ
                           </p>
                           <a class="btn btn-default" href="program_m_km.php" role="button"> รายละเอียด » </a>
                           </div>
                </div>
                <!-- /.row -->
                <hr>
               
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-md-6">

                    <h3> โครงสร้างหลักสูตรระดับมหาบัณฑิต </h3>
                    <table class="table_cont">
                    <tbody><tr>
                    <td colspan="2">
                    <strong>(1)  จำนวนหน่วยกิตรวมตลอดหลักสูตร</strong>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2">
                    จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า  45  หน่วยกิต
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2">
                    <strong>(2)  โครงสร้างหลักสูตร</strong>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2">
                    แผน ก แบบ ก 2 ศึกษารายวิชาและทำวิทยานิพนธ์   ประกอบด้วย
                    </td>
                    </tr>
                    <tr>
                    <td>
                    -  รายวิชาบังคับ<br>
                    -  รายวิชาเลือกตามกลุ่มวิชา<br>
                    -  วิทยานิพนธ์<br>
                    </td>
                    <td class="right">
                    21  หน่วยกิต<br>
                    9  หน่วยกิต<br>
                    15  หน่วยกิต<br>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2">
                    แผน ข ศึกษารายวิชาและการค้นคว้าอิสระ   ประกอบด้วย
                    </td>
                    </tr>
                    <tr>
                    <td>
                    -  รายวิชาบังคับ<br>
                    -  รายวิชาเลือกตามกลุ่มวิชา<br>
                    -  การค้นคว้าอิสระ<br>
                    </td>
                    <td class="right">
                    21  หน่วยกิต<br>
                    18  หน่วยกิต<br>
                    6  หน่วยกิต<br>
                    </td>
                    </tr>
                    </tbody></table>

                    <li><a href="file/ELOsMaster2558.pdf">ผลการเรียนรู้กับวัตถุประสงค์ในแต่ละด้าน (ELOs)</a></li>
                    <li><a href="file/master1.pdf">ดาวน์โหลดแผนการเรียนสำหรับระดับมหาบัณฑิตสาขาวิชาเทคโนโลยีสารสนเทศ </a></li>
                    <li><a href="file/course_description_master2015.pdf">คำอธิบายรายวิชาระดับมหาบัณฑิต (Course description)</a></li>

                           
                    </div>
                    <div class="col-md-6">
                            <h3> ** ขั้นตอนและแบบฟอร์มการสอบโครงร่างวิทยานิพนธ์   <span class="text-muted"> </span> </h3>
                            <div class="detailssProgram">
                            <p>
                                </p><ul>
                                    <li><a href="file/step.pdf">ขั้นตอนการขอสอบโครงร่างวิทยานิพนธ์</a></li>
                                    <li><a href="file/formthesisproposal.pdf">รูปแบบของโครงร่างวิทยานิพนธ์</a></li>
                                    <li><a href="file/1.pdf">แบบเสนอแต่งตั้งคณะกรรมการฯ</a></li>
                                    <li><a href="file/2.pdf">แบบบันทึกผลการพิจารณาโครงร่างฯ</a></li>
                                    <li><a href="file/3.pdf">แบบขออนุมัติสอบโครงร่างฯ</a></li>
                                    <li><a href="ProposalTemplate.rar">ส่วนประกอบของวิทยานิพนธ์‏</a></li>
                                </ul>
                            <p></p>
                            
                            <p class="author"><br></p><h3>**ดาวน์โหลดแบบฟอร์มอื่นๆ</h3><p></p>
                            <p>
                                </p><ul>
                                    <li><a href="file/T99.doc">ฟอร์มคำร้องทั่วไป (ท.99)</a></li>
                                    <li><a href="file/2._RegisterForm.pdf">ใบแจ้งการลงทะเบียนเรียน</a></li>
                                    <li><a href="file/Major.doc">แบบแจ้งความจำนงการเลือกกลุ่มวิชา</a></li>
                                    <li><a href="file/research_advi_master.doc">แบบแจ้งรายชื่ออาจารย์ที่ปรึกษาวิทยานิพนธ์</a></li>
                                    <li><a href="file/5._LectureProposalThesis.doc">แบบฟอร์มแต่งตั้งกรรมการสอบโครงร่าง‏</a></li>
                                    <li><a href="file/TB21.doc">แบบรายงานความคืบหน้าของการทำวิทยานิพนธ์ (ทบ.21)</a></li>
                                    <li><a href="file/7._Defence.doc">คำขอนัดสอบวิทยานิพนธ์ (ทบ.22)</a></li>
                                    <li><a href="file/8._CommitteeOfDefence.doc">แบบเสนอแต่งตั้งกรรมการสอบวิทยานิพนธ์‏</a></li>
                                    
                                </ul>
                            <p></p>
                            
                            <p>
                                สามารถค้นหารายละเอียดเพิ่มเติมได้ที่ ส่วนส่งเสริมวิชาการ =&gt; <a href="http://www.sut.ac.th/das/t1.htm">คลิ๊กที่นี้</a>
                            </p>

                             <div style="text-align:center;">
                        
                             <a href="file/Thesis_IT_Template_FinalVersion9-1-57.zip"> Download Template </a> 

                             นักศึกษาบัณฑิตศึกษาที่จะทำวิทยานิพนธ์ให้ใช้เทมเพลตนี้ทุกคน 
                             <br>ถ้าไม่ใช้สาขาจะไม่ตรวจรูปเล่มให้

                            </div>
                        </div>
                    </div>
                </div>
                <hr>

            </div>
            <!-- /.container -->';
 
        }else 
            echo '<div class="container"><!-- Page Heading/Breadcrumbs -->
            <div class="row">
            <div class="col-lg-12">
            <h2>PROGRAMS</h2>
            <h3>MASTER\'S DEGREE</h3>
            <h5><strong>Features of the course Master of Science Information. <br />Hmhag-oriented information. Database management; IT strategic management. IT project management. <br />Engineering of Web security technology. And research methods and statistics for information technology. <br />Insights into the digital media content systems and enterprise knowledge management. <br />   School of Information Technology Office Technology Course Society. Has developed the Master of Information Science course. <br />(Master of Information Science) group consists of 3 subjects. <br />Download Master of Information Science Program flap 

            <a href="http://soctech.sut.ac.th/it/web56_backup/file/page1_RGB.jpg">here</a><br /></strong></h5>
            <p> </p>
            </div>
            </div>
            <!-- /.row --> <!-- Intro Content -->
            <div class="row">
            <div class="col-md-6"><img class="img-responsive" src="images/master_media-02.jpg" alt="" /></div>
            <div class="col-md-6">
            <h4 class="author"><a href="http://soctech.sut.ac.th/it/web56_backup/index.php?nav=program&amp;page=program_m_ic">1. Subjects the digital media group.</a></h4>
            <p>Study focused on the creation of knowledge and offer the look of the new media (new media) to use information technology. And communications. Particularly with emphasis on computer message. (information) to offer media and interaction. (interaction) between human And computer Including Admidtion. Computer games and simulations. Graphic Design. E-learning.</p>
            <a class="btn btn-default" href="program_m_ic.php?lang=en"> See more details » </a></div>
            </div>
            <!-- /.row --><hr/><!-- Intro Content -->
            <div class="row">
            <div class="col-md-6"><img class="img-responsive" src="images/m_es-02.jpg" alt="" /></div>
            <div class="col-md-6">
            <h4 class="author"><a href="http://soctech.sut.ac.th/it/web56_backup/index.php?nav=program&amp;page=program_m_es">2. Enterprise systems group subjects.</a></h4>
            <p>Focused on integrating the knowledge-depth business and public sector organizations with advanced information technology to improve efficiency <br />Organizations and enterprises of all types to stand in the world of competitive and adapt to situations quickly. <br />Education theory and practice focused on business process design, enterprise computer network for multinational enterprises over <br />And developing information systems and knowledge systems to suit the enterprise.</p>
            <a class="btn btn-default" href="program_m_es.php?lang=en"> See more details » </a></div>
            </div>
            <!-- /.row --><hr /><!-- Intro Content -->
            <div class="row">
            <div class="col-md-6"><img class="img-responsive" src="images/master_km-02.jpg" alt="" /></div>
            <div class="col-md-6">
            <h4 class="author"><a href="http://soctech.sut.ac.th/it/web56_backup/index.php?nav=program&amp;page=program_m_km">3. group managing technical knowledge.</a></h4>
            <p>Focus on building and knowledge management system is at all levels, As a response to the development. The social contribution to society. <br />Of wisdom and learning. The study focuses on the creation and management of knowledge and technology tools. In knowledge management. <br />Strategic knowledge management. Economic knowledge base, etc.</p>
            <a class="btn btn-default" href="program_m_km.php?lang=en"> See more details » </a></div>
            </div>
            <!-- /.row -->
            <div class="row">
            <div class="col-md-6"><br />
            <h3> </h3>
            </div>
            </div>
            </div>';

        ?>

    <?php  include('footer.php') ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
