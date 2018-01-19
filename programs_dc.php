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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : หลักสูตรนิเทศศาสตร์ดิจิทัล "; }else echo "SUT IT : B.I.S. (Digital Communication)";?> </title>

    <?php  include('header.php') ?> 

</head>

<body>

    <?php include("navbar.php") ?>
    <!-- Page Content -->



        <!-- Thai Content -->
    <?php if($_SESSION['lang'] == 'th'){?>

        <!-- Page Content -->
            <div style="line-height:2;">
                <div class="container" style="line-indet">
                    <!-- Page Heading/Breadcrumbs -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">หลักสูตร<br><small>หลักสูตรวิทยาการสารสนเทศบัณฑิต&nbsp;<br>สาขาวิชานิเทศศาสตร์ดิจิทัล <br>หลักสูตรปรับปรุง พ.ศ.2560&nbsp;<br></smal></h1>
                            <h5 style="line-height:2;"><p class="p1">หลักสูตรวิทยาการสารสนเทศบัณฑิต<span class="s1"> </span>(นิเทศศาสตร์ดิจิทัล)<span class="s1"> </span>มุ่งผลิตบัณฑิตที่มีความรู้ความเชี่ยวชาญเฉพาะทางในการพัฒนาและประยุกต์ใช้เทคโนโลยีดิจิทัล ผสานความรู้ทางด้านนิเทศศาสตร์ดิจิทัล&nbsp;<b>เพื่อคิดสร้างสรรค์ วางแผน เตรียมการผลิต ผลิต เผยแพร่ ประเมินผล และวิเคราะห์วิพากษ์ผลงานสื่อดิจิทัลทุกประเภทอย่างครบวงจร</b><span class="s1"> </span>เป็นบัณฑิตที่พร้อมประกอบวิชาชีพนิเทศศาสตร์ในยุคดิจิทัลได้อย่างมีประสิทธิภาพ<span class="s1"> </span>มีความสามารถในการคิด วิเคราะห์อย่างเป็นระบบ มีคุณธรรม และจรรยาบรรณแห่งวิชาชีพ<span class="s1"> &nbsp;</span></p><!--5--></5>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- Intro Content -->
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="images/AI_ITWebsite-01.png" alt="">
                        </div>
                        <div class="col-md-6">

                            <div class="well">
                                <div class="text-left"> 
                                    <span class="glyphicon glyphicon-star"></span> วิชาที่เปิดสอน ระดับปริญญาตรี &nbsp; 
                                    <a class="btn btn-info" href="program_it_60_courses_dc.php?lang=th" target="_blank"> <span class="glyphicon glyphicon-book"></span> รายวิชาที่เปิดสอน </a>
                                </div>
                            </div>

                            <h3><p class="p1">ลักษณะวิชาที่ศึกษา</p></h3>
                            <p class="lead"> </p>
                            <div class="detailssProgram">
                                <p class="p1">หลักสูตรวิทยาการสารสนเทศบัณฑิต (นิเทศศาสตร์ดิจิทัล) เป็นหลักสูตรที่เน้นเทคโนโลยีดิจิทัลเป็นฐานความรู้ก่อนการศึกษาวิชาชีพทางด้านนิเทศศาสตร์<span class="s1">&nbsp;</span></p>
                                <p class="p1">ในการศึกษาขั้นพื้นฐาน<span class="s1"> </span>นอกจากหมวดวิชาศึกษาทั่วไปที่เน้นความรู้เรื่องปัจจัยมนุษย์<span class="s1">&nbsp; </span>ปัจจัยองค์การ<span class="s1">&nbsp; </span>และปัจจัยข่าวสารแล้ว<span class="s1"> </span>ยังต้องศึกษาหมวดวิชาเทคโนโลยีพื้นฐานอันประกอบด้วยวิทยาศาสตร์พื้นฐาน<span class="s1"> </span>การสื่อสาร&nbsp; คอมพิวเตอร์และเทคโนโลยี<span class="s1"> </span>และวิทยาการจัดการ<span class="s1">&nbsp; </span>เพื่อเตรียมให้ผู้เรียนมีความรู้และทักษะที่คล่องตัวเข้ากับความต้องการของสภาพการจ้างงานที่แปรเปลี่ยนอย่างรวดเร็วในปัจจุบัน</p>
                                <p class="p1">จากนั้นจึงเริ่มศึกษากลุ่มวิชาเฉพาะเพื่อให้มีความรู้<span class="s1">&nbsp; </span>ทักษะ<span class="s1">&nbsp; </span>และความเชี่ยวชาญเฉพาะในด้านนิเทศศาสตร์ดิจิทัล<span class="s1">&nbsp; </span>โดยวิชาเฉพาะประกอบด้วยกลุ่มของรายวิชา ดังนี้ สามารถเลือกศึกษาในแต่ละกลุ่มวิชาดังนี้</p>
                                <ul style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; font-variant-ligatures: normal; orphans: 2; widows: 2;">
                                    <li>การคิดสร้างสรรค์ผลงานทางนิเทศศาสตร์แขนงต่าง ๆ ได้แก่ งานโฆษณาการประชาสัมพันธ์ออนไลน์ สื่อกราฟิก สื่อสิ่งพิมพ์ดิจิทัล เว็บไซต์ มัลติมีเดีย แอนิเมชัน สื่อกระจายเสียงดิจิทัล ภาพยนตร์ดิจิทัล โปรแกรมประยุกต์ และสื่อปฏิสัมพันธ์สมัยใหม่</li>
                                    <li>การผลิตสื่อดิจิทัลประเภทต่าง ๆ ตั้งแต่การออกแบบและสร้างสรรค์สื่อ การวางแผนการผลิต การดำเนินการผลิตอย่างครบวงจร</li>
                                    <li>การใช้คอมพิวเตอร์ ซอฟต์แวร์ เครื่องมือ และเทคโนโลยีดิจิทัลที่ทันสมัยในการผลิตผลงานทางนิเทศศาสตร์ดิจิทัล</li>
                                    <li>การสื่อสารและการถ่ายทอดสารสนเทศสู่ผู้รับสาร/ผู้ใช้สื่อในระดับต่าง ๆ ได้แก่ ระดับบุคคล ระดับกลุ่ม ระดับองค์กร และระดับมวลชนรวมถึงผู้ใช้สื่อที่มีความต้องการเฉพาะ อาทิ เด็ก ผู้สูงอายุ</li>
                                    <li>การสร้างความเข้าใจเกี่ยวกับธุรกิจสื่อดิจิทัลและการเป็นผู้ประกอบการ</li>
                                </ul>
                                <ul>
        </ul>
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- Intro Content -->
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="images/AI_ITWebsite-02.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3><p class="p1">คุณสมบัติของผู้ศึกษา</p></h3>
                            <p class="lead"> </p>
                            <div class="detailssProgram">
                                <p class="p1">นักเรียนที่เรียนสาขาวิชาเทคโนโลยีสารสนเทศ เป็นผู้สำเร็จการศึกษาระดับมัธยมศึกษาปีที่ 6&nbsp; ทุกแผนการเรียน<span class="s1">&nbsp;</span></p>
                            </div>
                            <p></p>
                            <h3><p class="p1"></p><p class="p1">โครงสร้างหลักสูตร</p></h3>
                            <p class="lead"> </p>
                            <div class="detailssProgram">
                                <p class="p1"></p>
                                <span class="s1">จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 177 หน่วยกิต (ไตรภาค)</span>
                                <br />
                                <a href="file/course_structure_des_dc.pdf" class="btn btn-default" role="button">รายละเอียด</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- Intro Content -->
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="images/AI_ITWebsite-03.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3><p class="p1">แนวทางการประกอบอาชีพสำหรับผู้จบการศึกษา</p></h3>
                            <div class="detailssProgram">
                                <p>อาชีพที่สามารถประกอบได้ ได้แก่ อาชีพที่มีความเกี่ยวข้องกับสื่อทุกแขนง ทั้งสื่อสิ่งพิมพ์&nbsp; สื่อวิทยุโทรทัศน์ สื่อวิทยุกระจายเสียง และ สื่อดิจิทัล ทั้งในระดับก่อนการสร้างสรรค์สื่อ การสร้างสรรค์สื่อ และหลังการสร้างสรรค์สื่อ อาทิ ผู้สร้างสรรค์งาน (Creative) ผู้เขียน/สร้างสรรค์คำ (Copy Writer) ผู้วางแผนสื่อ (Media Planner) ผู้ประสานงานการตลาด (Marketing Coordinator) ผู้บริหารงานลูกค้า (Account Executive) นักเขียน (Author)&nbsp; ผู้เขียนบท (Script Writer) ผู้เรียบเรียงข่าว (Rewriter) ผู้สื่อข่าว (News Reporter)&nbsp; ผู้สื่อข่าวครบวงจรในคนเดียว (One man band journalist) ผู้ประกาศข่าว (News Announcer) ผู้ดูแลเว็บ (Web Master)&nbsp; ผู้พัฒนาเว็บ (Web Developer)&nbsp; ผู้ออกแบบกราฟิก (Graphic Designer) ช่างภาพเคลื่อนไหว (Camera Man) ช่างภาพนิ่ง (Photographer) นักประชาสัมพันธ์ (PR Man) เจ้าหน้าที่ประชาสัมพันธ์&nbsp;(PR&nbsp; Officer)&nbsp; ผู้ควบคุมการผลิต (Producer) ผู้กำกับ (Director) พิธีกร (Moderator) ผู้ตัดต่องาน (Editor) ผู้ออกแบบการ์ตูนภาพเคลื่อนไหว (Animator) และผู้พัฒนาเกม (Game Developer)</p>
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- Intro Content -->
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="images/AI_ITWebsite-04.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3>ห้องปฏิบัติการและสิ่งสนับสนุนการเรียนการสอน&nbsp;</h3>
                            <p class="lead"> </p>
                            <div class="detailssProgram">
                                <ul>
                                    <li>ห้องปฏิบัติการคอมพิวเตอร์</li>
                                    <li>สตูดิโอขนาดมาตรฐานสำหรับออกอากาศ</li>
                                    <li>ชุดอุปกรณ์จับความเคลื่อนไหวของร่างกายเพื่องานแอนิเมชัน (Motion Capture)</li>
                                    <li>ห้องตัดต่อแบบ Linear Editing&nbsp; และห้องตัดต่อแบบ Non-linear Editing</li>
                                    <li>ชุดลำดับภาพและเสียงเคลื่อนที่</li>
                                    <li>ห้องบันทึกเสียงขั้นพื้นฐาน</li>
                                    <li>ห้องบันทึกเสียงขั้นสูง</li>
                                    <li>ห้องผลิตสื่อกราฟิก</li>
                                    <li>ชุดกล้องดิจิทัล Eagle-4 จำนวน 8 กล้อง</li>
                                    <li>กล้องและอุปกรณ์การถ่ายภาพนิ่ง</li>
                                    <li>กล้องและอุปกรณ์การถ่ายทำวีดิทัศน์ขั้นสูง</li>
                                    <li>ศูนย์นวัตกรรมและเทคโนโลยีการศึกษา</li>
                                    <li>ศูนย์บรรณสารและสื่อการศึกษา</li>
                                </ul>
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <!-- /.row -->
                <hr>
                <div class="row">
                    <div class="col-md-6">
                          <h3> Download </h3>
                        <ul>
                            <li><a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/planIC.pdf">แผนการเรียนนิเทศศาสตร์ดิจิทัล </a> </li>
                            
                            <li> <a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/cmIC.pdf"> แผนที่แสดงเส้นทางความรู้จากหลักสูตรสู่อาชีพ (Career Mapping) สาขาวิชานิเทศศาสตร์ดิจิทัล </a> </li>
                            <li> <a href="http://soctech.sut.ac.th/it/webitsut2015/file/ELOsDC2560.pdf">ผลการเรียนรู้กับวัตถุประสงค์ของหลักสูตรนิเทศศาสตร์ดิจิทัล (ELOs) </a> </li>
                        
                        </ul>
                    </div>
                    </div>
                </div>
                <hr>
            </div>

    <!-- Enghlish Content -->
    <?php }else{ ?>
     
        <!-- Page Content -->
            <div style="line-height:2;">
                <div class="container" style="line-indet">
                    <!-- Page Heading/Breadcrumbs -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">หลักสูตร<br><small>หลักสูตรวิทยาการสารสนเทศบัณฑิต&nbsp;<br>สาขาวิชานิเทศศาสตร์ดิจิทัล <br>หลักสูตรปรับปรุง พ.ศ.2560&nbsp;<br></smal></h1>
                            <h5 style="line-height:2;"><p class="p1">หลักสูตรวิทยาการสารสนเทศบัณฑิต<span class="s1"> </span>(นิเทศศาสตร์ดิจิทัล)<span class="s1"> </span>มุ่งผลิตบัณฑิตที่มีความรู้ความเชี่ยวชาญเฉพาะทางในการพัฒนาและประยุกต์ใช้เทคโนโลยีดิจิทัล ผสานความรู้ทางด้านนิเทศศาสตร์ดิจิทัล&nbsp;<b>เพื่อคิดสร้างสรรค์ วางแผน เตรียมการผลิต ผลิต เผยแพร่ ประเมินผล และวิเคราะห์วิพากษ์ผลงานสื่อดิจิทัลทุกประเภทอย่างครบวงจร</b><span class="s1"> </span>เป็นบัณฑิตที่พร้อมประกอบวิชาชีพนิเทศศาสตร์ในยุคดิจิทัลได้อย่างมีประสิทธิภาพ<span class="s1"> </span>มีความสามารถในการคิด วิเคราะห์อย่างเป็นระบบ มีคุณธรรม และจรรยาบรรณแห่งวิชาชีพ<span class="s1"> &nbsp;</span></p><!--5--></5>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- Intro Content -->
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="images/AI_ITWebsite-01.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="well">
                                <div class="text-left"> 
                                    <span class="glyphicon glyphicon-star"></span> วิชาที่เปิดสอน ระดับปริญญาตรี &nbsp; 
                                    <a class="btn btn-info" href="program_it_60_courses_dc.php?lang=en" target="_blank"> <span class="glyphicon glyphicon-book"></span> รายวิชาที่เปิดสอน </a>
                                </div>
                            </div>
                            <h3><p class="p1">ลักษณะวิชาที่ศึกษา</p></h3>
                            <p class="lead"> </p>
                            <div class="detailssProgram">
                                <p class="p1">หลักสูตรวิทยาการสารสนเทศบัณฑิต (นิเทศศาสตร์ดิจิทัล) เป็นหลักสูตรที่เน้นเทคโนโลยีดิจิทัลเป็นฐานความรู้ก่อนการศึกษาวิชาชีพทางด้านนิเทศศาสตร์<span class="s1">&nbsp;</span></p>
                                <p class="p1">ในการศึกษาขั้นพื้นฐาน<span class="s1"> </span>นอกจากหมวดวิชาศึกษาทั่วไปที่เน้นความรู้เรื่องปัจจัยมนุษย์<span class="s1">&nbsp; </span>ปัจจัยองค์การ<span class="s1">&nbsp; </span>และปัจจัยข่าวสารแล้ว<span class="s1"> </span>ยังต้องศึกษาหมวดวิชาเทคโนโลยีพื้นฐานอันประกอบด้วยวิทยาศาสตร์พื้นฐาน<span class="s1"> </span>การสื่อสาร&nbsp; คอมพิวเตอร์และเทคโนโลยี<span class="s1"> </span>และวิทยาการจัดการ<span class="s1">&nbsp; </span>เพื่อเตรียมให้ผู้เรียนมีความรู้และทักษะที่คล่องตัวเข้ากับความต้องการของสภาพการจ้างงานที่แปรเปลี่ยนอย่างรวดเร็วในปัจจุบัน</p>
                                <p class="p1">จากนั้นจึงเริ่มศึกษากลุ่มวิชาเฉพาะเพื่อให้มีความรู้<span class="s1">&nbsp; </span>ทักษะ<span class="s1">&nbsp; </span>และความเชี่ยวชาญเฉพาะในด้านนิเทศศาสตร์ดิจิทัล<span class="s1">&nbsp; </span>โดยวิชาเฉพาะประกอบด้วยกลุ่มของรายวิชา ดังนี้ สามารถเลือกศึกษาในแต่ละกลุ่มวิชาดังนี้</p>
                                <ul style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; font-variant-ligatures: normal; orphans: 2; widows: 2;">
                                    <li>การคิดสร้างสรรค์ผลงานทางนิเทศศาสตร์แขนงต่าง ๆ ได้แก่ งานโฆษณาการประชาสัมพันธ์ออนไลน์ สื่อกราฟิก สื่อสิ่งพิมพ์ดิจิทัล เว็บไซต์ มัลติมีเดีย แอนิเมชัน สื่อกระจายเสียงดิจิทัล ภาพยนตร์ดิจิทัล โปรแกรมประยุกต์ และสื่อปฏิสัมพันธ์สมัยใหม่</li>
                                    <li>การผลิตสื่อดิจิทัลประเภทต่าง ๆ ตั้งแต่การออกแบบและสร้างสรรค์สื่อ การวางแผนการผลิต การดำเนินการผลิตอย่างครบวงจร</li>
                                    <li>การใช้คอมพิวเตอร์ ซอฟต์แวร์ เครื่องมือ และเทคโนโลยีดิจิทัลที่ทันสมัยในการผลิตผลงานทางนิเทศศาสตร์ดิจิทัล</li>
                                    <li>การสื่อสารและการถ่ายทอดสารสนเทศสู่ผู้รับสาร/ผู้ใช้สื่อในระดับต่าง ๆ ได้แก่ ระดับบุคคล ระดับกลุ่ม ระดับองค์กร และระดับมวลชนรวมถึงผู้ใช้สื่อที่มีความต้องการเฉพาะ อาทิ เด็ก ผู้สูงอายุ</li>
                                    <li>การสร้างความเข้าใจเกี่ยวกับธุรกิจสื่อดิจิทัลและการเป็นผู้ประกอบการ</li>
                                </ul>
                                <ul>
        </ul>
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- Intro Content -->
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="images/AI_ITWebsite-02.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3><p class="p1">คุณสมบัติของผู้ศึกษา</p></h3>
                            <p class="lead"> </p>
                            <div class="detailssProgram">
                                <p class="p1">นักเรียนที่เรียนสาขาวิชาเทคโนโลยีสารสนเทศ เป็นผู้สำเร็จการศึกษาระดับมัธยมศึกษาปีที่ 6&nbsp; ทุกแผนการเรียน<span class="s1">&nbsp;</span></p>
                            </div>
                            <p></p>
                            <h3><p class="p1"></p><p class="p1">โครงสร้างหลักสูตร</p></h3>
                            <p class="lead"> </p>
                            <div class="detailssProgram">
                                <p class="p1"></p>
                                <span class="s1">จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 177 หน่วยกิต (ไตรภาค)</span>
                                <br />
                                <a href="file/course_structure_des_dc.pdf" class="btn btn-default" role="button">รายละเอียด</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- Intro Content -->
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="images/AI_ITWebsite-03.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3><p class="p1">แนวทางการประกอบอาชีพสำหรับผู้จบการศึกษา</p></h3>
                            <div class="detailssProgram">
                                <p>อาชีพที่สามารถประกอบได้ ได้แก่ อาชีพที่มีความเกี่ยวข้องกับสื่อทุกแขนง ทั้งสื่อสิ่งพิมพ์&nbsp; สื่อวิทยุโทรทัศน์ สื่อวิทยุกระจายเสียง และ สื่อดิจิทัล ทั้งในระดับก่อนการสร้างสรรค์สื่อ การสร้างสรรค์สื่อ และหลังการสร้างสรรค์สื่อ อาทิ ผู้สร้างสรรค์งาน (Creative) ผู้เขียน/สร้างสรรค์คำ (Copy Writer) ผู้วางแผนสื่อ (Media Planner) ผู้ประสานงานการตลาด (Marketing Coordinator) ผู้บริหารงานลูกค้า (Account Executive) นักเขียน (Author)&nbsp; ผู้เขียนบท (Script Writer) ผู้เรียบเรียงข่าว (Rewriter) ผู้สื่อข่าว (News Reporter)&nbsp; ผู้สื่อข่าวครบวงจรในคนเดียว (One man band journalist) ผู้ประกาศข่าว (News Announcer) ผู้ดูแลเว็บ (Web Master)&nbsp; ผู้พัฒนาเว็บ (Web Developer)&nbsp; ผู้ออกแบบกราฟิก (Graphic Designer) ช่างภาพเคลื่อนไหว (Camera Man) ช่างภาพนิ่ง (Photographer) นักประชาสัมพันธ์ (PR Man) เจ้าหน้าที่ประชาสัมพันธ์&nbsp;(PR&nbsp; Officer)&nbsp; ผู้ควบคุมการผลิต (Producer) ผู้กำกับ (Director) พิธีกร (Moderator) ผู้ตัดต่องาน (Editor) ผู้ออกแบบการ์ตูนภาพเคลื่อนไหว (Animator) และผู้พัฒนาเกม (Game Developer)</p>
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- Intro Content -->
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="images/AI_ITWebsite-04.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3>ห้องปฏิบัติการและสิ่งสนับสนุนการเรียนการสอน&nbsp;</h3>
                            <p class="lead"> </p>
                            <div class="detailssProgram">
                                <ul>
                                    <li>ห้องปฏิบัติการคอมพิวเตอร์</li>
                                    <li>สตูดิโอขนาดมาตรฐานสำหรับออกอากาศ</li>
                                    <li>ชุดอุปกรณ์จับความเคลื่อนไหวของร่างกายเพื่องานแอนิเมชัน (Motion Capture)</li>
                                    <li>ห้องตัดต่อแบบ Linear Editing&nbsp; และห้องตัดต่อแบบ Non-linear Editing</li>
                                    <li>ชุดลำดับภาพและเสียงเคลื่อนที่</li>
                                    <li>ห้องบันทึกเสียงขั้นพื้นฐาน</li>
                                    <li>ห้องบันทึกเสียงขั้นสูง</li>
                                    <li>ห้องผลิตสื่อกราฟิก</li>
                                    <li>ชุดกล้องดิจิทัล Eagle-4 จำนวน 8 กล้อง</li>
                                    <li>กล้องและอุปกรณ์การถ่ายภาพนิ่ง</li>
                                    <li>กล้องและอุปกรณ์การถ่ายทำวีดิทัศน์ขั้นสูง</li>
                                    <li>ศูนย์นวัตกรรมและเทคโนโลยีการศึกษา</li>
                                    <li>ศูนย์บรรณสารและสื่อการศึกษา</li>
                                </ul>
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                <hr>
                   <div class="col-md-6">
                         <h3> Download </h3>
                        <ul>
                            <li><a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/planIC.pdf">แผนการเรียนนิเทศศาสตร์ดิจิทัล </a> </li>
                            
                            <li> <a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/cmIC.pdf"> แผนที่แสดงเส้นทางความรู้จากหลักสูตรสู่อาชีพ (Career Mapping) สาขาวิชานิเทศศาสตร์ดิจิทัล </a> </li>
                            <li> <a href="http://soctech.sut.ac.th/it/webitsut2015/file/ELOsDC2560.pdf">ผลการเรียนรู้กับวัตถุประสงค์ของหลักสูตรนิเทศศาสตร์ดิจิทัล (ELOs) </a> </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>

    <?php }?>

    <?php  include('footer.php') ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
