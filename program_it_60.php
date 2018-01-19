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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : หลักสูตร ระดับปริญญาตรี"; }else echo "IT SUT : Programs ";?></title>

    <?php  include('header.php') ?> 

</head>
<body>

    <?php include("navbar.php") ?>

    <!-- Thai Content -->
    <?php if($_SESSION['lang'] == 'th'){?>


    <!-- Page Content -->
    <div style="line-height:2;">
        <div class="container" style="line-indet">
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">หลักสูตร<br><small>ระดับปริญญาตรี</smal></h1>
                    <h5 style="line-height:2;"><h5 style="line-height: 2; color: rgb(51, 51, 51); font-variant-ligatures: normal; orphans: 2; widows: 2;">สาขาวิชาเทคโนโลยีสารสนเทศ เปิดสอนระดับปริญญาตรี&nbsp;<strong><a href="http://soctech.sut.ac.th/it/webitsut2015/file/structure_it_2560.pdf">หลักสูตรวิทยาการสารสนเทศบัณฑิต</a>&nbsp;</strong>(หลักสูตรปรับปรุง พ.ศ. 2560) หน่วยกิตตลอดหลักสูตร 177 หน่วยกิต&nbsp;แบ่งเป็น 3 กลุ่มวิชา คือ</h5></5>
                </div>
            </div>
            <!-- /.row -->
            <!-- Intro Content -->
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="images/computer-icons-vectorportal-02.png" alt="">
                </div>
                <div class="col-md-6">
                    <div class="well">
                        <div class="text-left"> 
                            <span class="glyphicon glyphicon-star"></span> วิชาที่เปิดสอน ระดับปริญญาตรี &nbsp 
                            <a class="btn btn-info" href="program_it_60_courses.php?lang=th" target="_blank"> <span class="glyphicon glyphicon-book"></span> รายวิชาที่เปิดสอน </a>
                        </div>
                    </div>
                    <h3> 1. กลุ่มวิชาซอฟต์แวร์วิสาหกิจ <span class="text-muted">(Enterprise Software)  </span> </h3>
                    <p class="lead"> </p>
                    <div class="detailssProgram">
                        เป็น   กลุ่มวิชาเฉพาะ เน้น
                        <ul>
                            <li>กระบวนการในการวิเคราะห์ ออกแบบ และพัฒนาซอฟต์แวร์ ด้วยภาษาการโปรแกรมรูปแบบต่าง ๆ ทั้งที่เป็นโปรแกรมประยุกต์บนเว็บ และบนอุปกรณ์เคลื่อนที่</li>
                            <li>หลักการในการทวนสอบและทดสอบซอฟต์แวร์ และการประกันคุณภาพซอฟต์แวร์</li>
                            <li>การวางแผนโครงการซอฟต์แวร์ การติดตามความก้าวหน้าในการพัฒนา และการประเมินโครงการซอฟต์แวร์</li>
                        </ul>
                    </div>
                    <p></p>
                    <a class="btn btn-default" href="program_it_60_es.php?lang=th" target="_blank" role="button"> รายละเอียด » </a>
                </div>
            </div>
            <!-- /.row -->
            <hr>
            <!-- Intro Content -->
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="images/computer-icons-vectorportal-03.png" alt="">
                </div>
                <div class="col-md-6">
                    <h3> 2. กลุ่มวิชาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล  <span class="text-muted"> (Business Intelligence and Data Analytics) </span> </h3>
                    <p class="lead"> </p>
                    <div class="detailssProgram">
                        เป็น   กลุ่มวิชาเฉพาะ เน้น
                        <ul>
                            <li>การคิดสร้างสรรค์ผลงานทางนิเทศศาสตร์แขนงต่าง ๆ ได้แก่</li>
                            <li>งานโฆษณา   การประชาสัมพันธ์   การผลิตสื่อสิ่งพิมพ์   วิทยุกระจายเสียง วิทยุโทรทัศน์   ภาพยนตร์    แอนิเมชั่นและมัลติมีเดีย</li>
                            <li>การผลิตสื่อ ตั้งแต่การออกแบบและสร้างสรรค์สื่อ การวางแผนการผลิต  และดำเนินกระบวนการผลิตครบวงจร</li>
                            <li>การใช้เครื่องมือและคอมพิวเตอร์รวมทั้งเทคโนโลยีการสื่อสารมวลชนในการผลิตผลงานทางนิเทศศาสตร์  อันประกอบด้วย   สื่อสิ่งพิมพ์  วิทยุกระจายเสียง    วิทยุโทรทัศน์     ภาพยนตร์   แอนิเมชั่นและมัลติมีเดีย</li>
                            <li>การสื่อสารและการถ่ายทอดสารสนเทศสู่ผู้รับสารในระดับต่าง ๆ ได้แก่  ระดับบุคคล  ระดับกลุ่ม   ระดับองค์กร   และระดับมวลชน</li>
                        </ul>
                        <a class="btn btn-default" href="program_it_60_bida.php?lang=th" target="_blank" role="button"> รายละเอียด » </a>
                    </div>
                    <p></p>
                </div>
            </div>
            <!-- /.row -->
            <hr>
            <!-- Intro Content -->
            <div class="row">
                <div class="col-md-6">
                <img class="img-responsive" src="images/computer-icons-vectorportal-04.png" alt="">
                </div>
                <div class="col-md-6">
                    <h3> 3. กลุ่มวิชาสารสนเทศศึกษา <span class="text-muted"> <br> (Information Studies) </span> </h3>
                    เป็น   กลุ่มวิชาเฉพาะ เน้น
                </p>
                <div class="detailssProgram">
                    <ul>
                        <li>การจัดการทรัพยากรสารสนเทศ การกำหนด การสร้าง การคัดเลือก การจัดหา การวิเคราะห์&nbsp; การจัดเก็บ&nbsp; การบริการ การเผยแพร่และนำส่งสารสนเทศ&nbsp; โดยคำนึงถึงความต้องการและลักษณะของผู้ใช้เป็นสำคัญ</li>
                        <li>การใช้เทคโนโลยีดิจิทัลในการปฏิบัติงานสารสนเทศ การจัดทำสารสนเทศอิเล็กทรอนิกส์&nbsp; การจัดทำฐานข้อมูลและเครื่องมือสำหรับการค้นคืนและเข้าถึงสารสนเทศ การวิเคราะห์และออกแบบระบบสารสนเทศ&nbsp; การพัฒนาระบบอัตโนมัติเพื่อการจัดการงานสารสนเทศและห้องสมุด&nbsp; การพัฒนาระบบการจัดการสารสนเทศในสำนักงาน&nbsp;&nbsp; และการพัฒนาเว็บไซต์เพื่อการเผยแพร่สารสนเทศ</li>
                        <li>การออกแบบและการผลิตสื่อในงานสารสนเทศ และการจัดการสื่อคอมพิวเตอร์เพื่อการเรียนรู้</li>
                    </ul>
                    <a class="btn btn-default" href="program_it_60_is.php?lang=th" target="_blank" role="button"> รายละเอียด » </a>
                </div>
                <p></p>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Intro Content -->
        <!-- /.row -->
        <div class="row">
                    <div class="col-md-6">
                        <h3> Download </h3>
                        <p></p>
                        <ul class="detailss">

                            <li> 
                                <img src="http://technopolis.sut.ac.th/src/plugin/ckfinder/userfiles/images/new.gif" style="width:" 30px;="" height:="" 10px;="" data-pin-nopin="true"> แผนการเรียน สาขาวิชาเทคโนโลยีสารสนเทศ 
                            </li>

                            <p></p>
                        
                                <a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/planES2560.pdf">
                                1. กลุ่มวิชาซอฟต์แวร์วิสาหกิจ (Enterprise Software)</a>
                                <br>
                                <a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/planBIDA2560.pdf">
                                2. กลุ่มวิชาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล (Business Intelligence and Data Analytics)
                                </a>
                                <br><a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/planIS2560.pdf">
                                3. กลุ่มวิชาสารสนเทศศึกษา (Information Studies)</a>

                            <p></p>


                            <li> 
                                <img src="http://technopolis.sut.ac.th/src/plugin/ckfinder/userfiles/images/new.gif" style="width:" 30px;="" height:="" 10px;="" data-pin-nopin="true"> แผนที่แสดงเส้นทางความรู้จากหลักสูตรสู่อาชีพ (Career Mapping) 
                            </li>
                            
                            <p></p>
                            <a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/cmES.pdf">
                                1. กลุ่มวิชาซอฟต์แวร์วิสาหกิจ (Enterprise Software)</a>
                            <br>
                            <a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/cmBIDA.pdf">
                                2. กลุ่มวิชาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล (Business Intelligence and Data Analytics)
                            </a>
                            <br>
                            <a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/cmIS.pdf">
                                3. กลุ่มวิชาสารสนเทศศึกษา (Information Studies)
                            </a>
   
                        </ul>

                        <p></p>

                    <ul class="detailss"> 
                        <li>ผลการเรียนรู้กับวัตถุประสงค์ของหลักสูตรวิทยาการสารสนเทศ (ELOs)</li>
                        <a href="http://soctech.sut.ac.th/it/webitsut2015/file/ELOsIT2560.pdf">
                            หลักสูตรวิทยาการสารสนเทศ
                        </a>
                    </ul> 

                    </div>

                    <div class="col-md-6">
                    </div>
                </div>
        <hr>
    </div>
    <!-- /.container --> 
        

    <!-- Enghlish Content -->
    <?php }else{ ?>
        
        <!-- Page Content -->
        <div style="line-height:2;">
            <div class="container" style="line-indet">
                <!-- Page Heading/Breadcrumbs -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">หลักสูตร<br><small>ระดับปริญญาตรี</smal></h1>
                        <h5 style="line-height:2;"><h5 style="line-height: 2; color: rgb(51, 51, 51); font-variant-ligatures: normal; orphans: 2; widows: 2;">สาขาวิชาเทคโนโลยีสารสนเทศ เปิดสอนระดับปริญญาตรี&nbsp;<strong><a href="http://soctech.sut.ac.th/it/webitsut2015/file/structure_it_2560.pdf">หลักสูตรวิทยาการสารสนเทศบัณฑิต</a>&nbsp;</strong>(หลักสูตรปรับปรุง พ.ศ. 2560) หน่วยกิตตลอดหลักสูตร 177 หน่วยกิต&nbsp;แบ่งเป็น 3 กลุ่มวิชา คือ</h5></5>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Intro Content -->
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/computer-icons-vectorportal-02.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="well">
                            <div class="text-left"> 
                                <span class="glyphicon glyphicon-star"></span> วิชาที่เปิดสอน ระดับปริญญาตรี &nbsp 
                                <a class="btn btn-info" href="program_it_60_courses.php?lang=th" target="_blank"> <span class="glyphicon glyphicon-book"></span> รายวิชาที่เปิดสอน </a>
                            </div>
                        </div>
                        <h3> 1. กลุ่มวิชาซอฟต์แวร์วิสาหกิจ <span class="text-muted">(Enterprise Software)  </span> </h3>
                        <p class="lead"> </p>
                        <div class="detailssProgram">
                            เป็น   กลุ่มวิชาเฉพาะ เน้น
                            <ul>
                                <li>กระบวนการในการวิเคราะห์ ออกแบบ และพัฒนาซอฟต์แวร์ ด้วยภาษาการโปรแกรมรูปแบบต่าง ๆ ทั้งที่เป็นโปรแกรมประยุกต์บนเว็บ และบนอุปกรณ์เคลื่อนที่</li>
                                <li>หลักการในการทวนสอบและทดสอบซอฟต์แวร์ และการประกันคุณภาพซอฟต์แวร์</li>
                                <li>การวางแผนโครงการซอฟต์แวร์ การติดตามความก้าวหน้าในการพัฒนา และการประเมินโครงการซอฟต์แวร์</li>
                            </ul>
                        </div>
                        <p></p>
                        <a class="btn btn-default" href="program_it_60_es.php?lang=th" target="_blank" role="button"> รายละเอียด » </a>
                    </div>
                </div>
                <!-- /.row -->
                <hr>
                <!-- Intro Content -->
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/computer-icons-vectorportal-03.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3> 2. กลุ่มวิชาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล  <span class="text-muted"> (Business Intelligence and Data Analytics) </span> </h3>
                        <p class="lead"> </p>
                        <div class="detailssProgram">
                            เป็น   กลุ่มวิชาเฉพาะ เน้น
                            <ul>
                                <li>การคิดสร้างสรรค์ผลงานทางนิเทศศาสตร์แขนงต่าง ๆ ได้แก่</li>
                                <li>งานโฆษณา   การประชาสัมพันธ์   การผลิตสื่อสิ่งพิมพ์   วิทยุกระจายเสียง วิทยุโทรทัศน์   ภาพยนตร์    แอนิเมชั่นและมัลติมีเดีย</li>
                                <li>การผลิตสื่อ ตั้งแต่การออกแบบและสร้างสรรค์สื่อ การวางแผนการผลิต  และดำเนินกระบวนการผลิตครบวงจร</li>
                                <li>การใช้เครื่องมือและคอมพิวเตอร์รวมทั้งเทคโนโลยีการสื่อสารมวลชนในการผลิตผลงานทางนิเทศศาสตร์  อันประกอบด้วย   สื่อสิ่งพิมพ์  วิทยุกระจายเสียง    วิทยุโทรทัศน์     ภาพยนตร์   แอนิเมชั่นและมัลติมีเดีย</li>
                                <li>การสื่อสารและการถ่ายทอดสารสนเทศสู่ผู้รับสารในระดับต่าง ๆ ได้แก่  ระดับบุคคล  ระดับกลุ่ม   ระดับองค์กร   และระดับมวลชน</li>
                            </ul>
                            <a class="btn btn-default" href="program_it_60_bida.php?lang=th" target="_blank" role="button"> รายละเอียด » </a>
                        </div>
                        <p></p>
                    </div>
                </div>
                <!-- /.row -->
                <hr>
                <!-- Intro Content -->
                <div class="row">
                    <div class="col-md-6">
                    <img class="img-responsive" src="images/computer-icons-vectorportal-04.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3> 3. กลุ่มวิชาสารสนเทศศึกษา <span class="text-muted"> <br> (Information Studies) </span> </h3>
                        เป็น   กลุ่มวิชาเฉพาะ เน้น
                    </p>
                    <div class="detailssProgram">
                        <ul>
                            <li>การจัดการทรัพยากรสารสนเทศ การกำหนด การสร้าง การคัดเลือก การจัดหา การวิเคราะห์&nbsp; การจัดเก็บ&nbsp; การบริการ การเผยแพร่และนำส่งสารสนเทศ&nbsp; โดยคำนึงถึงความต้องการและลักษณะของผู้ใช้เป็นสำคัญ</li>
                            <li>การใช้เทคโนโลยีดิจิทัลในการปฏิบัติงานสารสนเทศ การจัดทำสารสนเทศอิเล็กทรอนิกส์&nbsp; การจัดทำฐานข้อมูลและเครื่องมือสำหรับการค้นคืนและเข้าถึงสารสนเทศ การวิเคราะห์และออกแบบระบบสารสนเทศ&nbsp; การพัฒนาระบบอัตโนมัติเพื่อการจัดการงานสารสนเทศและห้องสมุด&nbsp; การพัฒนาระบบการจัดการสารสนเทศในสำนักงาน&nbsp;&nbsp; และการพัฒนาเว็บไซต์เพื่อการเผยแพร่สารสนเทศ</li>
                            <li>การออกแบบและการผลิตสื่อในงานสารสนเทศ และการจัดการสื่อคอมพิวเตอร์เพื่อการเรียนรู้</li>
                        </ul>
                        <a class="btn btn-default" href="program_it_60_is.php?lang=th" target="_blank" role="button"> รายละเอียด » </a>
                    </div>
                    <p></p>
                </div>
            </div>
            <!-- /.row -->
            <hr>
            <!-- Intro Content -->
            <!-- /.row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h3> Download </h3>
                                    <p></p>
                                    <ul class="detailss">
                            <!--  <li>
                            <a href="http://soctech.sut.ac.th/it/webitsut2015/file/chooseit.pdf">เกณฑ์การเลือกเรียนหลักสูตรวิทยาการสารสนเทศบัณฑิต</a>
                        </li> -->
                        <li>แผนการเรียน สาขาวิชาเทคโนโลยีสารสนเทศ </li><p></p>
                        <a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/planES2560.pdf">1. กลุ่มวิชาซอฟต์แวร์วิสาหกิจ (Enterprise Software)</a><br><a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/planBIDA2560.pdf">
                        2. กลุ่มวิชาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล (Business Intelligence and Data Analytics)</a><br><a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/planIS2560.pdf">3. กลุ่มวิชาสารสนเทศศึกษา (Information Studies)</a>

                        <p></p>



                        <li>แผนที่แสดงเส้นทางความรู้จากหลักสูตรสู่อาชีพ (Career Mapping) </li>
                        <p></p>
                        <a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/cmES.pdf">1. กลุ่มวิชาซอฟต์แวร์วิสาหกิจ (Enterprise Software)</a>
                        <br>
                        <a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/cmBIDA.pdf">
                            2. กลุ่มวิชาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล (Business Intelligence and Data Analytics)</a>
                            <br>
                            <a href="http://soctech.sut.ac.th/it/webitsut2015/file/plan/cmIS.pdf">3. กลุ่มวิชาสารสนเทศศึกษา (Information Studies)</a>
                            <!--     <li>
                            <a href="http://soctech.sut.ac.th/it/webitsut2015/file/Guarantee.pdf">การรับรองคุณวุฒิของหลักสูตรวิทยาการสารสนเทศบัณฑิต(.pdf)</a>
                            </li>
                            <li>
                            <a href="http://soctech.sut.ac.th/it/webitsut2015/file/question.rar">คำถามที่นักศึกษาไอทีมักถามกันบ่อย ๆ (.rar)</a>
                            </li>
                            <li>
                            <a href="http://soctech.sut.ac.th/it/Data/es.pdf">รายละเอียดสายงานด้านซอฟต์แวร์วิสาหกิจ</a>
                            </li>
                            <li>
                            <a href="http://soctech.sut.ac.th/it/Data/mis.pdf">รายละเอียดสายงานด้านธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล</a>
                            </li>
                            <li>
                            <a href="http://soctech.sut.ac.th/it/Data/is.pdf">รายละเอียดสายงานด้านสารสนเทศศึกษา</a>
                        </li> -->
                    </ul>
                    <p>
                    </p>

                     <ul class="detailss"> 
                        <li>ผลการเรียนรู้กับวัตถุประสงค์ของหลักสูตรวิทยาการสารสนเทศ (ELOs)</li>
                        <a href="http://soctech.sut.ac.th/it/webitsut2015/file/ELOsIT2560.pdf">
                            หลักสูตรวิทยาการสารสนเทศ
                        </a>
                    </ul> 

                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            <hr>
        </div>
        <!-- /.container --> 

    <?php }?>

    <!-- /.container -->
    <?php  include('footer.php') ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
