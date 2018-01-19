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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : รายวิชาที่เปิดสอนหลักสูตรนิเทศศาสตร์ดิจิทัล "; }else echo "IT SUT : Digital Communication Courses ";?></title>

    <?php  include('header.php') ?> 

</head>
<body>

    <?php include("navbar.php") ?>

    <!-- Thai Content -->
    <?php if($_SESSION['lang'] == 'th'){?>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">วิชาที่เปิดสอน<br /> <small>ระดับปริญญาตรี</small></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    
                    <table class="table">
                    <tbody>
                    <tr>
                    <td colspan="4" bgcolor="#EEEEEE">1.หมวดวิชาศึกษาทั่วไป 38 หน่วยกิต</td>
                    </tr>
                    <tr>
                    <td colspan="2" align="left" valign="top">1.1 กลุ่มวิชาแกนศึกษาทั่วไป 15 หน่วยกิต</td>
                    <td colspan="2" align="left" valign="top"><a href="file/IT2560_Description1ic.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">202 108 </td>
                    <td align="left" valign="top">การรู้ดิจิทัล</td>
                    <td align="left" valign="top">2(2-0-4)</td>
                    <td align="left" valign="top"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <p>(Digital Literacy)</p>
                    </td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 109</td>
                    <td>การใช้โปรแกรมประยุกต์เพื่อการเรียนรู้</td>
                    <td>1(0-2-1)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <p>(Use of Application Programs for Learning)</p>
                    </td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 201</td>
                    <td>ทักษะชีวิต</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <p>(Life Skills)</p>
                    </td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 202</td>
                    <td>ความเป็นพลเมืองและพลเมืองโลก</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Citizenship and Global Citizens)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 203</td>
                    <td>มนุษย์กับสังคมและสิ่งแวดล้อม</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <p>(Man, Society and Environment)</p>
                    </td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 207</td>
                    <td>มนุษย์กับเศรษฐกิจและการพัฒนา</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <p>(Man, Economy and Development)</p>
                    </td>
                    <td></td>
                    </tr>
                    <tr>
                    <td colspan="4"></td>
                    </tr>
                    <tr>
                    <td colspan="2">1.2 กลุ่มวิชาภาษา 15 หน่วยกิต</td>
                    <td colspan="2"><a href="file/IT2560_Description2ic.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td>213 101</td>
                    <td>ภาษาอังกฤษเพื่อการสื่อสาร 1</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <p>(English for Communication 1)</p>
                    </td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>213 102</td>
                    <td>ภาษาอังกฤษเพื่อการสื่อสาร 2</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(English for Communication 2)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>213 203</td>
                    <td>ภาษาอังกฤษเพื่อวัตถุประสงค์ทางวิชาการ  </td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(English for Academic Purposes)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>213 204</td>
                    <td>ภาษาอังกฤษเพื่อวัตถุประสงค์เฉพาะ </td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <p>(English for Specific Purposes)</p>
                    </td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>213 305</td>
                    <td>ภาษาอังกฤษเพื่อการทำงาน</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(English for Careers)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td colspan="4"></td>
                    </tr>
                    <tr>
                    <td colspan="2">1.3 กลุ่มวิชาศึกษาทั่วไปแบบเลือก</td>
                    <td colspan="2"><a href="file/IT2560_Description3ic.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td>202 111</td>
                    <td>ภาษาไทยเพื่อการสื่อสาร</td>
                    <td>2(2-0-4)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Thai for Communication)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 175</td>
                    <td>ศิลปวิจักษ์</td>
                    <td>2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Art Appreciation)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 181</td>
                    <td>สุขภาพองค์รวม</td>
                    <td>2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <p>(Holistic Health)</p>
                    </td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 222</td>
                    <td>พันธกิจสัมพันธ์ชุมชนกับกลุ่มอาชีพ</td>
                    <td>2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Professional and Community Engagement)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 241</td>
                    <td>กฎหมายในชีวิตประจำวัน</td>
                    <td>2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Law in Daily Life)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 324</td>
                    <td>ไทยศึกษาเชิงพหุวัฒนธรรม</td>
                    <td>2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Pluri-Cultural Thai Studies)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 331</td>
                    <td>อาเซียนศึกษา</td>
                    <td>2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(ASEAN Studies)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>202 373</td>
                    <td>การคิดเชิงออกแบบ</td>
                    <td>2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <p>(Design Thinking)</p>
                    </td>
                    <td></td>
                    </tr>
                    <tr>
                    <td colspan="4"></td>
                    </tr>
                    <tr>
                    <td colspan="2" bgcolor="#EEEEEE">2. หมวดวิชาเฉพาะ131 หน่วยกิต</td>
                    <td colspan="2" bgcolor="#EEEEEE"><a href="file/IT2560_Description4ic.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td colspan="4" bgcolor="#EEEEEE">2.1 กลุ่มวิชาเทคโนโลยีพื้นฐาน 50 หน่วยกิต</td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาวิทยาศาสตร์พื้นฐาน</td>
                    </tr>
                    <tr>
                    <td>214 101</td>
                    <td>คณิตศาสตร์เพื่อคอมพิวเตอร์</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Mathematics for Computer)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 102</td>
                    <td>สถิติเพื่อการวิจัยวิทยาการสารสนเทศ</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Statistics for Information Science Research)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 104</td>
                    <td>ระเบียบวิธีวิจัยทางวิทยาการสารสนเทศ</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Research Methodologies in Information Sciences)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td colspan="4"></td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาการสื่อสาร</td>
                    </tr>
                    <tr>
                    <td>214 103</td>
                    <td>การสื่อสารในยุคดิจิทัล</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <p> (Communication in the Digital Age)</p>
                    </td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 105</td>
                    <td>การรู้เท่าทันสื่อในยุคดิจิทัล</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td> (Media Literacy in the Digital Age)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 107</td>
                    <td>หลักการเบื้องต้นของสื่อดิจิทัล</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Fundamentals of Digital Media)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 201</td>
                    <td>หลักการออกแบบทัศนสาร  </td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Principles of Visual Message Design)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td colspan="4"></td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาคอมพิวเตอร์และเทคโนโลยี</td>
                    </tr>
                    <tr>
                    <td>214 106</td>
                    <td>การเขียนโปรแกรมคอมพิวเตอร์สำหรับระบบสารสนเทศ 1</td>
                    <td>3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <p>(Computer Programming for Information System I)</p>
                    </td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 108</td>
                    <td>การสื่อสารข้อมูลและเครือข่าย</td>
                    <td>4(3-3-8)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Data Communications and Networking)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 201</td>
                    <td>การออกแบบและพัฒนาฐานข้อมูล</td>
                    <td>
                    <p>4(3-3-8)</p>
                    </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Database Design and Development)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 205</td>
                    <td>เทคโนโลยีเว็บ</td>
                    <td>3(2-3-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Web Technology)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 206</td>
                    <td>การออกแบบและพัฒนาแอนิเมชันและมัลติมีเดีย</td>
                    <td>
                    <p>3(2-3-6)</p>
                    </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Animation and Multimedia Design and Development)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 301</td>
                    <td>กฎหมายและจริยธรรมในเทคโนโลยีดิจิทัล</td>
                    <td>2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Laws and Ethics in Digital Technology)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 302</td>
                    <td>การบริการคอมพิวเตอร์</td>
                    <td>2(1-2-3)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Computer Services)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td colspan="4"></td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาวิทยาการจัดการ</td>
                    </tr>
                    <tr>
                    <td>214 109  </td>
                    <td>การวิเคราะห์ระบบสารสนเทศ</td>
                    <td>3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Information System Analysis)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 202</td>
                    <td>การออกแบบระบบสารสนเทศ</td>
                    <td>3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Information System Design)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 203</td>
                    <td>การจัดการความรู้</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Knowledge Management)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td colspan="4"></td>
                    </tr>
                    <tr>
                    <td colspan="2" bgcolor="#EEEEEE">2.2 หมวดวิชาเฉพาะ 72 หน่วยกิต</td>
                    <td colspan="2" bgcolor="#EEEEEE"><a href="file/IT2560_Description5ic.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาบังคับ</td>
                    </tr>
                    <tr>
                    <td>224 221</td>
                    <td>การสื่อข่าวและการเขียนข่าวออนไลน์</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(On-line News Writing and Reporting)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 222</td>
                    <td>การเขียนเพื่อการผลิตสื่อดิจิทัล</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Writing for Digital Media Production)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 223</td>
                    <td>เทคโนโลยีการผลิตสื่อดิจิทัล 1</td>
                    <td>3(1-4-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Technology of Digital Media Production I)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 224</td>
                    <td>ทฤษฎีการสื่อสารร่วมสมัย</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Contemporary Communication Theory)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 225</td>
                    <td>เทคโนโลยีการผลิตสื่อดิจิทัล 2</td>
                    <td>3(1-4-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Technology of Digital Media Production II)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 321</td>
                    <td>เทคโนโลยีการผลิตแอนิเมชันสำหรับโปรแกรมประยุกต์</td>
                    <td>3(1-4-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Technology of Animation Production for Application)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 322</td>
                    <td>การออกแบบที่มีมนุษย์เป็นศูนย์กลาง</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Human-Centered Design)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 323</td>
                    <td>ธุรกิจสื่อดิจิทัลและผู้ประกอบการ</td>
                    <td>3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Digital Media Business and Entrepreneurs)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 324</td>
                    <td>หลักการผลิตสื่อปฏิสัมพันธ์</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Principles of Interactive Media Production)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224492</td>
                    <td>สัมมนานิเทศศาสตร์ดิจิทัล</td>
                    <td>2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Seminar in Digital Communication)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224493</td>
                    <td>โครงงานนิเทศศาสตร์ดิจิทัล</td>
                    <td>4(0-8-0)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Project in Digital Communication)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td colspan="4"></td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาเลือก</td>
                    </tr>
                    <tr>
                    <td>224 250</td>
                    <td>การวิเคราะห์และวิพากษ์สื่อในสถานการณ์ปัจจุบัน</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Media Analysis and Criticism in Current Situation)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 251</td>
                    <td>การสื่อสารธุรกิจ</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Business Communication)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 252</td>
                    <td>จิตวิทยาการสื่อสาร</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Psychology of Communication)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 351</td>
                    <td>การสื่อสารการตลาดเชิงบูรณาการ</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Integrated Marketing Communications)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 352</td>
                    <td>การวิเคราะห์ผู้รับสารและผู้ใช้สื่อดิจิทัล</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Audience and Digital Media User Analysis)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 353</td>
                    <td>สื่อในประเทศสมาชิกอาเซียน</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Media in ASEAN)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 354</td>
                    <td>การสื่อสารต่างและระหว่างวัฒนธรรม</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(International and Intercultural Communication)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 355</td>
                    <td>การโฆษณาและการประชาสัมพันธ์ทางสื่อดิจิทัล</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Advertising and Public Relations on Digital Media)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 356</td>
                    <td>การจัดการสื่อเพื่อพันธกิจทางสังคม</td>
                    <td>3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Media Management for Social Engagement)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 357</td>
                    <td>เทคโนโลยีการผลิตสื่อดิจิทัลขั้นสูง</td>
                    <td>3(1-4-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Advanced Technology of Digital Media Production)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 359</td>
                    <td>การแปลเพื่องานนิเทศศาสตร์</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Translation for Communications)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 360</td>
                    <td>พฤติกรรมและการสื่อสารในองค์การ</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Behavior and Organizational Communication)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 361</td>
                    <td>การวิจัยทางนิเทศศาสตร์</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Communication Research)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 362</td>
                    <td>สื่อดิจิทัลเพื่อบุคคลที่มีความต้องการพิเศษ</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Digital Media for People with Special Needs)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 363</td>
                    <td>เทคโนโลยีการผลิตแอนิเมชันขั้นสูง</td>
                    <td>3(1-4-4)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Advanced Technology of Animation Production)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 480</td>
                    <td>การศึกษาอิสระ</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Independent Studies)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 481</td>
                    <td>หัวข้อพิเศษเกี่ยวกับนิเทศศาสตร์ดิจิทัล 1</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Special Topics in Digital Communication I)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>224 482</td>
                    <td>หัวข้อพิเศษเกี่ยวกับนิเทศศาสตร์ดิจิทัล 2</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Special Topics in Digital Communication II)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 224</td>
                    <td>การโปรแกรมเชิงอ็อบเจกต์</td>
                    <td>3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Object-Oriented Programming)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 226</td>
                    <td>การพัฒนาเกมคอมพิวเตอร์</td>
                    <td>3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Computer Game Development)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 227</td>
                    <td>หลักการปฏิสัมพันธ์ระหว่างมนุษย์และคอมพิวเตอร์</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Principle of Human-Computer Interaction)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 228</td>
                    <td>การพัฒนาส่วนต่อประสานกับผู้ใช้ของเว็บ</td>
                    <td>3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Web User Interface Development)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 244</td>
                    <td>เศรษฐศาสตร์ดิจิทัล</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Digital Economics)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 245</td>
                    <td>การจัดการทรัพยากรบุคคลในยุคดิจิทัล</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Human Resource Management in the Digital Age)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 246</td>
                    <td>การตลาดดิจิทัล</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Digital Marketing)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 324</td>
                    <td>การพัฒนาโปรแกรมประยุกต์บนอุปกรณ์เคลื่อนที่</td>
                    <td>3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Mobile Application Development)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 329</td>
                    <td>การพัฒนาซอฟต์แวร์สื่อประสม</td>
                    <td>3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Multimedia Software Development)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 330</td>
                    <td>การออกแบบประสบการณ์ผู้ใช้</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(User Experience Design)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 346</td>
                    <td>การบัญชีพื้นฐานเพื่อการจัดการ</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Fundamental of Managerial Accounting)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 347</td>
                    <td>หลักการปัญญาประดิษฐ์</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Principles of Artificial Intelligence)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 348</td>
                    <td>การจัดการการเงิน</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Financial Management)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 352 </td>
                    <td>เทคโนโลยีดิจิทัลและนวัตกรรมองค์การ</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Digital Technologies and Organizational Innovation)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 368</td>
                    <td>การจัดการสารสนเทศสื่อมวลชน</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Mass Media Information Management)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 369</td>
                    <td>การจัดการสารสนเทศสำนักงาน</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Office Information Management)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 374</td>
                    <td>คอมพิวเตอร์เพื่อการเรียนรู้</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Computer Based Learning)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>214 375</td>
                    <td>การจัดการสารสนเทศท้องถิ่น</td>
                    <td>3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>(Local Information Management)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td colspan="4"></td>
                    </tr>
                    <tr>
                    <td class="content1" colspan="2" align="left" valign="top" bgcolor="#EEEEEE">2.3 กลุ่มวิชาสหกิจศึกษา9 หน่วยกิต</td>
                    <td class="content1"" colspan="2" align="left" valign="top" bgcolor="#EEEEEE"><a href="file/IT2560_Description6iccoop.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">204 490</td>
                    <td>เตรียมสหกิจศึกษา</td>
                    <td>1(1-0-2)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"></td>
                    <td>(Pre-cooperative Education)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">204 491</td>
                    <td>สหกิจศึกษา 1*</td>
                    <td>8</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"></td>
                    <td>(Cooperative Education I)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">204 492</td>
                    <td>สหกิจศึกษา 2**</td>
                    <td>8</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"></td>
                    <td>(Cooperative Education II)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">204 493</td>
                    <td>สหกิจศึกษา 3**</td>
                    <td>8</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"></td>
                    <td>(Cooperative Education III)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td colspan="4" align="left" valign="top"><span class="style13"><u>หมายเหตุ</u>* สาขาวิชาโดยความเห็นชอบของคณะกรรมการประจำสำนักวิชา อาจพิจารณาให้เรียนวิชาเลือก<br /> บังคับที่มีหน่วยกิตรวมเท่ากันแทน<br />  ** รายวิชา 204492 สหกิจศึกษา 2 และรายวิชา 204493 สหกิจศึกษา 3 เป็นรายวิชาที่นักศึกษาสามารถลงทะเบียนเรียน เพิ่มเติมหลังจากผ่านรายวิชา 204491 สหกิจศึกษา 1 ซึ่งเป็นวิชาบังคับของหลักสูตร</span></td>
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
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"></td>
                    <td>1 หมายถึง สำนักวิชาวิทยาศาสตร์<br /> 2 หมายถึง สำนักวิชาเทคโนโลยีสังคม<br /> 3 หมายถึง สำนักวิชาเทคโนโลยีการเกษตร<br /> 4-5 หมายถึง สำนักวิชาวิศวกรรมศาสตร์<br /> 6 หมายถึง สำนักวิชาแพทยศาสตร์<br /> 7 หมายถึง สำนักวิชาพยาบาลศาสตร์</td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">ตัวเลขตำแหน่งที่ 2 และ 3</td>
                    <td>หมายถึงสาขาวิชา</td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">ตัวเลขตำแหน่งที่ 4</td>
                    <td>หมายถึงชั้นปี</td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">ตัวเลขตำแหน่งที่ 5 และ 6</td>
                    <td>หมายถึงลำดับรายวิชาของแต่ละชั้นปี</td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    </tbody>
                    </table>
                 	
                </div>
            </div>
            <hr/>
        </div>  

    <!-- Enghlish Content -->
    <?php }else{ ?>
     
    <?php }?>

    <!-- /.container -->
    <?php  include('footer.php') ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
