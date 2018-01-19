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
    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : วิชาที่เปิดสอนระดับปริญญาโท "; }else echo "SUT IT : MASTER'S DEGREE";?> </title>

    <?php  include('header.php') ?>
</head>
<body>

    <?php include("navbar.php") ?>


    <?php 

        if($_SESSION['lang'] == 'th'){
            echo '
            <div class="container">
            <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> วิชาที่เปิดสอน <br/>
                    <small> ระดับปริญญาโท</small>
                </h1>
                <!-- <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Pricing Table</li>
                </ol> -->
            </div>
        </div>
        <!-- /.row -->
            

                <!-- Page Heading/Breadcrumbs -->
                    <div class="row">
                        <div class="col-lg-12">

            <table class="table" style="font-size:14px;">
              <tbody>
                <tr bgcolor="#EEEEEE">
                  <td colspan="3"><strong>1. รายวิชาบังคับ</strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204501<br></td>
                  <td><a href=
            "course_m_des.php?lang=th#4501">การจัดการเทคโนโลยีสารสนเทศเชิงกลยุทธ์</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4501">(Strategic Information
                    Technology Management)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204507</td>
                  <td><a href=
            "course_m_des.php?lang=th#4507">การวิเคราะห์ออกแบบและพัฒนาระบบสารสนเทศ</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><a href="course_m_des.php?lang=th#4507">(Information System
                    Analysis, Design, and Development)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204508<br></td>
                  <td><a href="course_m_des.php?lang=th#4508">เทคโนโลยีฐานข้อมูล</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4508">(Database Technology)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204509</td>
                  <td><a href="course_m_des.php?lang=th#4509">วิทยาการเว็บ</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><a href="course_m_des.php?lang=th#4509">(Web Science)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204510<br></td>
                  <td><a href=
            "course_m_des.php?lang=th#4510">วิธีการวิจัยและสถิติสำหรับเทคโนโลยีสารสนเทศและการสื่อสาร</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4510">(Research Methods and
                    Statistics for Information Technology and
                    Communication)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204511</td>
                  <td><a href=
            "course_m_des.php?lang=th#4511">การจัดการและความมั่นคงของเครือข่าย</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4511">(Network Management and
                    Security)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204512</td>
                  <td><a href="course_m_des.php?lang=th#4512">สัมมนามหาบัณฑิต<br>
                    (Master Degree Seminar)</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr bgcolor="#EEEEEE">
                  <td colspan="3"><strong>2.
                    รายวิชาเลือกตามกลุ่มวิชา</strong></td>
                </tr>
                <tr bgcolor="#EEEEEE">
                  <td colspan="3"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                    กลุ่มวิชาสื่อดิจิทัล (Digital Media Cluster)</strong></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td width="120">204611</td>
                  <td width="394"><a href="course_m_des.php?lang=th#4611">การออกแบบกราฟิก</a> </td>
                  <td width="117">3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4611">(Graphic
                    Design)&nbsp;&nbsp;</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204612&nbsp;&nbsp;&nbsp;</td>
                  <td><a href=
            "course_m_des.php?lang=th#4612">ปฏิสัมพันธ์ระหว่างมนุษย์และคอมพิวเตอร์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4612">(Human-Computer
                    Interaction)&nbsp;</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204613</td>
                  <td><a href=
            "course_m_des.php?lang=th#4613">การเรียนรู้อิเล็กทรอนิกส์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href=
            "course_m_des.php?lang=th#4613">(E-Learning)&nbsp;&nbsp;</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204614</td>
                  <td><a href="course_m_des.php?lang=th#4614">แอนิเมชัน&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4614">(Animation)&nbsp;</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204615</td>
                  <td><a href=
            "course_m_des.php?lang=th#4615">เกมคอมพิวเตอร์และการจำลอง&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4615">(Computer Game and
                    Simulation)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204617</td>
                  <td><a href="course_m_des.php?lang=th#4617">เอฟเฟคพิเศษ&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4617">(Special Effects)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204618</td>
                  <td><a href="course_m_des.php?lang=th#4618">ทฤษฎีสื่อดิจิทัล</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4618">(Digital Media Theory)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td bgcolor="#EEEEEE" colspan="3">&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                    กลุ่มวิชาระบบวิสาหกิจ (Enterprise System Cluster)</strong></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td>204621</td>
                  <td><a href=
            "course_m_des.php?lang=th#4621">การออกแบบกระบวนการธุรกิจ&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4621">(Business Process
                    Design)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204623</td>
                  <td><a href=
            "course_m_des.php?lang=th#4623">ธุรกิจอิเล็กทรอนิกส์&nbsp;&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4623">(E-Business)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204624</td>
                  <td><a href=
            "course_m_des.php?lang=th#4624">การพัฒนาระบบบูรณาการวิสาหกิจ</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4624">(Building Enterprise-Wide
                    Systems)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204625&nbsp;</td>
                  <td><a href=
            "course_m_des.php?lang=th#4625">โลจิสติกส์อิเล็กทรอนิกส์&nbsp;&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4625">(E-Logistics)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204627&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4627">วิสาหกิจข้ามชาติ
                    &nbsp;&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4627">(Multinational
                    Enterprise)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204628</td>
                  <td><p><a href=
            "course_m_des.php?lang=th#4628">การจัดการโครงการเทคโนโลยีสารสนเทศ</a></p></td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4628">(Information Technology
                    Project Management)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204629</td>
                  <td><p><a href=
            "course_m_des.php?lang=th#4629">ซอฟต์แวร์วิสาหกิจ</a></p></td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4629">(Enterprise Software)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td bgcolor="#EEEEEE" colspan="3">&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                    กลุ่มวิชาการจัดการความรู้ (Knowledge Management
                    Cluster)</strong></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td>204631</td>
                  <td><a href="course_m_des.php?lang=th#4631">ความรู้เพื่อการพัฒนา</a> </td>
                  <td>&nbsp; 3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4631">(Knowledge for
                    Development)&nbsp;&nbsp;</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204632</td>
                  <td><a href=
            "course_m_des.php?lang=th#4632">ระบบองค์การการเรียนรู้&nbsp;&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4632">(Learning Organization
                    Systems)&nbsp;&nbsp;&nbsp;</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204633</td>
                  <td><a href=
            "course_m_des.php?lang=th#4633">องค์ประกอบขององค์ความรู้&nbsp;&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4633">(Knowledge Profile
                    Elements)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204634</td>
                  <td><a href=
            "course_m_des.php?lang=th#4634">การสร้างและจัดการองค์ความรู้</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4634">(Building and Managing
                    Knowledge Profile)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204635&nbsp;</td>
                  <td><a href=
            "course_m_des.php?lang=th#4635">เทคโนโลยีและเครื่องมือในการจัดการความรู้&nbsp;&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4635">(Knowledge Management:
                    Tools and Technology)&nbsp;</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204636</td>
                  <td><a href=
            "course_m_des.php?lang=th#4636">การจัดการความรู้เชิงกลยุทธ์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4636">(Strategic Knowledge
                    Management)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>204637&nbsp;</td>
                  <td><a href=
            "course_m_des.php?lang=th#4637">เศรษฐกิจฐานความรู้&nbsp;&nbsp;&nbsp;</a> </td>
                  <td>3(3-0-6)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="course_m_des.php?lang=th#4637">(Knowledge-Based
                    Economy)</a> </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td bgcolor="#EEEEEE" colspan="3"><strong>3.
                    วิทยานิพนธ์</strong></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">แผน ก แบบ ก (2)
                    ศึกษารายวิชาและทำวิทยานิพนธ์</td>
                </tr>
                <tr>
                  <td>204702&nbsp;</td>
                  <td><a href=
            "course_m_des.php?lang=th#4702">วิทยานิพนธ์&nbsp;&nbsp;(Thesis)</a> </td>
                  <td>15 หน่วยกิต</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr bgcolor="#EEEEEE">
                  <td colspan="3"><strong>ความหมายของเลขประจำวิชา</strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">เลขประจำวิชาประกอบด้วยเลข 6
                    ตัว หน้าชื่อรายวิชา มีความหมายดังนี้</td>
                </tr>
                <tr>
                  <td align="left" valign="top">ตัวเลขตำแหน่งที่
                    1&nbsp;</td>
                  <td align="left" colspan="2" valign="top"> แสดงถึง&nbsp;&nbsp; สำนักวิชาที่รับผิดชอบ เช่น เลข 2 หมายถึง
                    สำนักวิชาเทคโนโลยีสังคม</td>
                </tr>
                <tr>
                  <td align="left" valign="top">ตัวเลขตำแหน่งที่
                    2 และ 3</td>
                  <td align="left" colspan="2" valign="top"> แสดงถึง&nbsp;&nbsp;&nbsp;สาขาวิชา เช่น เลข 04 หมายถึง
                    สาขาวิชาเทคโนโลยีสารสนเทศ</td>
                </tr>
                <tr>
                  <td align="left" valign="top">ตัวเลขตำแหน่งที่
                    4</td>
                  <td align="left" colspan="2" valign="top"> แสดงถึง &nbsp;&nbsp;ลักษณะของรายวิชา เช่น เลข 5 หมายถึง
                    รายวิชาบังคับ, เลข 6 หมายถึง รายวิชาเลือก,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    เลข 7 หมายถึง วิทยานิพนธ์และการค้นคว้าอิสระ</td>
                </tr>
                <tr>
                  <td align="left" valign="top">ตัวเลขตำแหน่งที่
                    5 และ 6</td>
                  <td align="left" colspan="2" valign="top"> แสดงถึง &nbsp;&nbsp;ลำดับของรายวิชา</td>
                </tr>
              </tbody>
            </table>
            </div>
            </div>
            </div>';

        }else{
            echo '  <div class="container">
                        <!-- Page Heading/Breadcrumbs -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> PROGRAMS <br/>
                                <small> MASTER\'S DEGREE</small>
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- Page Heading/Breadcrumbs -->
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table" style="font-size:14px;">
                              <tbody>
                                <tr bgcolor="#EEEEEE">
                                  <td class="style11" colspan="3">1. <strong> Audit </strong></td>
                                </tr>
                                <tr>
                                  <td width="116" class="content1">&nbsp;</td>
                                  <td width="378" class="content1">&nbsp;</td>
                                  <td width="111" class="content1">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="content1">204501<br></td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4501">Strategic Information Technology Management</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204507</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4507">Information System Analysis, Design, and Development</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204508<br></td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4508">Database Technology</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204509</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4509">Web Science</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204510<br></td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4510">Research Methods  and Statistics for Information Technology and Communication</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204511</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4511">Network Management and Security</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204512</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4512">Master Degree Seminar</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1" colspan="3">&nbsp;</td>
                                </tr>
                                <tr bgcolor="#EEEEEE">
                                  <td class="style11" colspan="3">2. Elective subject</td>
                                </tr>
                                <tr bgcolor="#EEEEEE">
                                  <td class="style11" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Digital Media Cluster</td>
                                </tr>
                                <tr>
                                  <td class="content1" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="content1">204611</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4611">Graphic  Design</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204612&nbsp;&nbsp;&nbsp;</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4612">Human-Computer Interaction</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204613</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4613">E-Learning</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204614</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4614">Animation&nbsp;</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204615</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4615">Computer Game and Simulation</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204617</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4617">Special  Effects</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204618</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4518">Digital Media Theory</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td bgcolor="#EEEEEE" class="content1" colspan="3">&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Enterprise System Cluster</strong></td>
                                </tr>
                                <tr>
                                  <td class="content1" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="content1">204621</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4518">Business  Process Design</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204623</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4623">E-Business</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204624</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4624">Building  Enterprise-Wide Systems </a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204625&nbsp;</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4625">E-Logistics</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204627&nbsp;</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4627">Multinational  Enterprise</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204628</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4627">Information Technology Project Management</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204629</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4629">Enterprise Software</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td bgcolor="#EEEEEE" class="content1" colspan="3">&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Knowledge Management Cluster</strong></td>
                                </tr>
                                <tr>
                                  <td class="content1" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="content1">204631</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4631">Knowledge for  Development</a></td>
                                  <td class="content1">&nbsp; 3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204632</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4632">Learning  Organization Systems</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204633</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4633">Knowledge  Profile Elements</a></td>
                                  <td class="content1"> 3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204634</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4634">Building and Managing Knowledge Profile</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204635&nbsp;</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4635">Knowledge  Management: Tools and Technology</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204636</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4636">Strategic Knowledge Management</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1">204637&nbsp;</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4637">Knowledge-Based Economy</a></td>
                                  <td class="content1">3(3-0-6)</td>
                                </tr>
                                <tr>
                                  <td class="content1" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td bgcolor="#EEEEEE" class="style11" colspan="3">3. Thesis</td>
                                </tr>
                                <tr>
                                  <td class="content1" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="content1" colspan="3">Plan A Method A (2) Research and Thesis</td>
                                </tr>
                                <tr>
                                  <td class="content1">204701&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                  <td class="content1"><p><a href="course_m_des.php?lang=en#4701">Independent Study</a></p></td>
                                  <td class="content1">6 credits</td>
                                </tr>
                                <tr>
                                  <td class="content1">204702&nbsp;</td>
                                  <td class="content1"><a href="course_m_des.php?lang=en#4702">Thesis</a></td>
                                  <td class="content1">15 credits</td>
                                </tr>
                                <tr>
                                  <td class="content1">&nbsp;</td>
                                  <td class="content1">&nbsp;</td>
                                  <td class="content1">&nbsp;</td>
                                </tr>
                                <tr bgcolor="#EEEEEE">
                                  <td bgcolor="#EEEEEE" class="style11" colspan="3"><em>*The meaning of subject code : </em></td>
                                </tr>
                                <tr>
                                  <td class="content1" colspan="3"><table cellspacing="0" cellpadding="0">
                                      <tbody>
                                        <tr>
                                          <td valign="top" align="left" class="content1" colspan="4">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td valign="top" align="left" class="content1" colspan="4">Subject code consist of 6 digits which meaningful.</td>
                                        </tr>
                                        <tr>
                                          <td width="186" valign="top" align="left" class="content1"><strong>First digit </strong></td>
                                          <td width="358" class="content1">is Social Technology</td>
                                          <td width="60" class="content1"></td>
                                          <td width="7" class="content1">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td valign="top" align="left" class="content1"><strong>Second and third digits </strong></td>
                                          <td class="content1">is School of Information Technology </td>
                                          <td class="content1">&nbsp;</td>
                                          <td class="content1">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td valign="top" height="23" align="left" class="content1"><strong>Fourth digit </strong></td>
                                          <td class="content1">is type of subject such as  5 is required subject,                   
                                            6 is elective subject, 7 is Thesis and freedom in research.</td>
                                          <td class="content1"></td>
                                          <td class="content1">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td valign="top" align="left" class="content1"><strong>Fifth and sixth digits &nbsp;&nbsp;</strong></td>
                                          <td class="content1">is&nbsp;sequence of subject in each year</td>
                                        </tr>
                                      </tbody>
                                    </table></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
            </div>';


        }

    ?>

    <?php include("footer.php"); ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
