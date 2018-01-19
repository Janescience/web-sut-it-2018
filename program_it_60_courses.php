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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : รายวิชาที่เปิดสอนระดับปริญญาตรี"; }else echo "IT SUT : Courses";?></title>

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
                    <td colspan="2" align="left" valign="top"><a href="file/it60docs/IT2560_Description1.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">202 108  </td>
                    <td align="left" valign="top">การรู้ดิจิทัล</td>
                    <td align="left" valign="top">2(2-0-4)</td>
                    <td align="left" valign="top"> </td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td>
                    <p>(Digital Literacy)</p>
                    </td>
                    <td> </td>
                    </tr>
                    <tr>
                    <td>202 109</td>
                    <td>การใช้โปรแกรมประยุกต์เพื่อการเรียนรู้</td>
                    <td>1(0-2-1)</td>
                    </tr>
                    <tr >
                    <td > </td>
                    <td>
                    <p>(Use of Application Programs for Learning)</p>
                    </td>
                    <td> </td>
                    </tr>
                    <tr>
                    <td>202 201</td>
                    <td >ทักษะชีวิต</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Life Skills)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>202 202</td>
                    <td >ความเป็นพลเมืองและพลเมืองโลก</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Citizenship and Global Citizens)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>202 203</td>
                    <td >มนุษย์กับสังคมและสิ่งแวดล้อม</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Man, Society and Environment) </p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>202 207</td>
                    <td >มนุษย์กับเศรษฐกิจและการพัฒนา</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Man, Economy and Development)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4"> </td>
                    </tr>
                    <tr>
                    <td colspan="2">1.2 กลุ่มวิชาภาษา 15 หน่วยกิต</td>
                    <td colspan="2"><a href="file/it60docs/IT2560_Description2.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td>213 101</td>
                    <td >ภาษาอังกฤษเพื่อการสื่อสาร 1</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(English for Communication 1)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>213 102 </td>
                    <td >ภาษาอังกฤษเพื่อการสื่อสาร 2</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(English for Communication 2)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>213 203    </td>
                    <td >ภาษาอังกฤษเพื่อวัตถุประสงค์ทางวิชาการ     </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(English for Academic Purposes)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>213 204 </td>
                    <td >ภาษาอังกฤษเพื่อวัตถุประสงค์เฉพาะ  </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(English for Specific Purposes)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>213 305   </td>
                    <td >ภาษาอังกฤษเพื่อการทำงาน</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(English for Careers)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4"> </td>
                    </tr>
                    <tr>
                    <td colspan="2">1.3  กลุ่มวิชาศึกษาทั่วไปแบบเลือก</td>
                    <td colspan="2"><a href="file/it60docs/IT2560_Description3.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td>202 111</td>
                    <td >ภาษาไทยเพื่อการสื่อสาร</td>
                    <td >2(2-0-4)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Thai for Communication)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>202 175</td>
                    <td >ศิลปวิจักษ์</td>
                    <td >2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Art Appreciation)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>202 181</td>
                    <td >สุขภาพองค์รวม</td>
                    <td >2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Holistic Health)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>202 222</td>
                    <td >พันธกิจสัมพันธ์ชุมชนกับกลุ่มอาชีพ</td>
                    <td >2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Professional and Community Engagement)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>202 241</td>
                    <td >กฎหมายในชีวิตประจำวัน</td>
                    <td >2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Law in Daily Life)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>202 324</td>
                    <td >ไทยศึกษาเชิงพหุวัฒนธรรม</td>
                    <td >2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Pluri-Cultural Thai Studies)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>202 331</td>
                    <td >อาเซียนศึกษา</td>
                    <td >2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(ASEAN Studies)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>202 373</td>
                    <td >การคิดเชิงออกแบบ</td>
                    <td >2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Design Thinking)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4"> </td>
                    </tr>
                    <tr>
                    <td colspan="2" bgcolor="#EEEEEE">2. หมวดวิชาเฉพาะ   131   หน่วยกิต</td>
                    <td colspan="2" bgcolor="#EEEEEE"><a href="file/it60docs/IT2560_Description4.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td colspan="4" bgcolor="#EEEEEE">2.1 กลุ่มวิชาเทคโนโลยีพื้นฐาน 50 หน่วยกิต</td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาวิทยาศาสตร์พื้นฐาน</td>
                    </tr>
                    <tr>
                    <td>214 101</td>
                    <td >คณิตศาสตร์เพื่อคอมพิวเตอร์</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Mathematics for Computer)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 102</td>
                    <td >สถิติเพื่อการวิจัยวิทยาการสารสนเทศ <a href="file/it60docs/courese_des.html#4103"> </a> </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Statistics for Information Science Research)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 104 </td>
                    <td >ระเบียบวิธีวิจัยทางวิทยาการสารสนเทศ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Research  Methodologies  in  Information  Sciences)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4"> </td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาการสื่อสาร</td>
                    </tr>
                    <tr>
                    <td>214 103</td>
                    <td >การสื่อสารในยุคดิจิทัล</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>  (Communication in the Digital Age)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 105</td>
                    <td >การรู้เท่าทันสื่อในยุคดิจิทัล</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >  (Media Literacy in the Digital Age)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 107</td>
                    <td > หลักการเบื้องต้นของสื่อดิจิทัล    </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Fundamentals of Digital Media)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4"> </td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาคอมพิวเตอร์และเทคโนโลยี</td>
                    </tr>
                    <tr>
                    <td>214 106</td>
                    <td > การเขียนโปรแกรมคอมพิวเตอร์สำหรับระบบสารสนเทศ 1</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Computer Programming for Information System I)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 108</td>
                    <td >การสื่อสารข้อมูลและเครือข่าย <strong>    </strong></td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Data Communications and Networking)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 108</td>
                    <td >การสื่อสารข้อมูลและเครือข่าย </td>
                    <td >4(3-3-8)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Data Communications and Networking)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 201</td>
                    <td >การออกแบบและพัฒนาฐานข้อมูล</td>
                    <td >
                    <p>4(3-3-8)</p>
                    </td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Database Design and Development)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 204</td>
                    <td > การเขียนโปรแกรมคอมพิวเตอร์สำหรับระบบสารสนเทศ 2</td>
                    <td >
                    <p>3(2-2-5)</p>
                    </td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Computer Programming for Information System II)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 205</td>
                    <td >เทคโนโลยีเว็บ   </td>
                    <td >3(2-3-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Web Technology)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 206</td>
                    <td >การออกแบบและพัฒนาแอนิเมชันและมัลติมีเดีย</td>
                    <td >
                    <p>3(2-3-6)</p>
                    </td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Animation and Multimedia Design and Development)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 301</td>
                    <td >กฎหมายและจริยธรรมในเทคโนโลยีดิจิทัล</td>
                    <td >2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Laws and Ethics in Digital Technology)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 214 302</td>
                    <td > การบริการคอมพิวเตอร์</td>
                    <td > 2(1-2-3)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Computer Services)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4"> </td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาวิทยาการจัดการ</td>
                    </tr>
                    <tr>
                    <td>214 109    </td>
                    <td >การวิเคราะห์ระบบสารสนเทศ              </td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Information System Analysis)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 202</td>
                    <td >การออกแบบระบบสารสนเทศ</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Information System Design)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 214 203</td>
                    <td > การจัดการความรู้</td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Knowledge Management)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4"> </td>
                    </tr>
                    <tr>
                    <td colspan="4" bgcolor="#EEEEEE">2.2 หมวดวิชาเฉพาะ      72  หน่วยกิต</td>
                    </tr>
                    <tr>
                    <td colspan="2">1.กลุ่มวิชาซอฟต์แวร์วิสาหกิจ(Enterprise Software)</td>
                    <td colspan="2"><a href="file/it60docs/IT2560_Description5es.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาบังคับ</td>
                    </tr>
                    <tr>
                    <td>214 221</td>
                    <td >โครงสร้างข้อมูลและขั้นตอนวิธี</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>  (Data Structures and Algorithms)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 222</td>
                    <td >การออกแบบและพัฒนาฐานข้อมูลขั้นสูง</td>
                    <td >3(2-2-5)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Advanced Database Design and Development)</p>
                    </td>
                    <td ><strong> </strong></td>
                    </tr>
                    <tr>
                    <td>214 223</td>
                    <td >สถาปัตยกรรมซอฟต์แวร์วิสาหกิจ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Enterprise Software Architecture)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 224</td>
                    <td >การโปรแกรมเชิงอ็อบเจกต์</td>
                    <td >3(2-2-5)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Object-Oriented Programming)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 321</td>
                    <td >การพัฒนาโปรแกรมประยุกต์บนเว็บ  <strong>      </strong></td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Web Application Development)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 322</td>
                    <td >วิศวกรรมซอฟต์แวร์     </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Software Engineering)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 323</td>
                    <td >การจัดการโครงการซอฟต์แวร์  <strong>   </strong></td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Software Project Management)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 324</td>
                    <td >การพัฒนาโปรแกรมประยุกต์บนอุปกรณ์เคลื่อนที่</td>
                    <td >3(2-2-5)*</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Mobile Application Development)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 325</td>
                    <td >การทดสอบซอฟต์แวร์   </td>
                    <td >3(3-3-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Software Testing)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 492</td>
                    <td >สัมมนาซอฟต์แวร์วิสาหกิจ</td>
                    <td >2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Seminar in Enterprise Software)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 493</td>
                    <td >โครงงานซอฟต์แวร์วิสาหกิจ  <strong>     </strong></td>
                    <td >4(0-8-0)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Project in Enterprise Software)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4"> </td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาเลือก</td>
                    </tr>
                    <tr>
                    <td>214 225</td>
                    <td >ความมั่นคงปลอดภัยของเทคโนโลยีสารสนเทศและการสื่อสาร</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Information and Communication Technology Security)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 226</td>
                    <td >การพัฒนาเกมคอมพิวเตอร์</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Computer Game Development)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 227</td>
                    <td >หลักการปฏิสัมพันธ์ระหว่างมนุษย์และคอมพิวเตอร์</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Principle of Human-Computer Interaction)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 228</td>
                    <td >การพัฒนาส่วนต่อประสานกับผู้ใช้ของเว็บ</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Web User Interface Development)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 326</td>
                    <td >การพัฒนาโปรแกรมประยุกต์เชิงอ็อบเจกต์ขั้นสูง   </td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Advanced Object-Oriented Application Development)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 327</td>
                    <td >การบริหารระบบและเครือข่าย</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Network and System Administration)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 328</td>
                    <td >การโปรแกรมภาษาสคริปต์</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Scripting Language Programming)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 329</td>
                    <td >การพัฒนาซอฟต์แวร์สื่อประสม</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Multimedia Software Development)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 330</td>
                    <td >การออกแบบประสบการณ์ผู้ใช้</td>
                    <td >
                    <p>3(3-0-6)</p>
                    </td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(User Experience Design)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 331</td>
                    <td > การพัฒนาเว็บเชิงความหมาย</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Semantic Web Development)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 332</td>
                    <td >การพัฒนาโปรแกรมประยุกต์ข้ามแพลตฟอร์ม</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Cross-Platform Application Development)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 333</td>
                    <td >การพัฒนาโปรแกรมประยุกต์บนอุปกรณ์เคลื่อนที่ขั้นสูง</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >
                    <p>(Advanced Mobile Application Development)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>214 421</td>
                    <td >อินเทอร์เน็ตของสรรพสิ่ง</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Internet of Things)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 214 480</td>
                    <td > การศึกษาอิสระ</td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Independent Studies)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 214 481</td>
                    <td > หัวข้อพิเศษเกี่ยวกับซอฟต์แวร์วิสาหกิจ 1</td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Special Topics in Enterprise Software I)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 214 482</td>
                    <td > หัวข้อพิเศษเกี่ยวกับซอฟต์แวร์วิสาหกิจ 2</td>
                    <td ><strong> 3(3-0-6)</strong></td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Special Topics in Enterprise Software II)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 224 321</td>
                    <td > เทคโนโลยีการผลิตแอนิเมชันสำหรับโปรแกรมประยุกต์      </td>
                    <td > 3(1-4-4)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >    (Technology of Animation Production for Application)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 224 323</td>
                    <td > ธุรกิจสื่อดิจิทัลและผู้ประกอบการ</td>
                    <td > 3(2-2-5)</td>
                    </tr>
                    <tr style="height: 33px;">
                    <td style="height: 33px; width: 138px;"> </td>
                    <td style="height: 33px; width: 318px;"> (Digital Media Business and  Entrepreneurs)</td>
                    <td style="height: 33px; width: 118px;"> </td>
                    </tr>
                    <tr>
                    <td> 224 360</td>
                    <td > พฤติกรรมและการสื่อสารในองค์การ       </td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >    (Behavior and Organizational Communication)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4"> </td>
                    </tr>
                    <tr>
                    <td colspan="2" align="left" valign="top">2. กลุ่มวิชาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล</td>
                    <td colspan="2" align="left" valign="top"><a href="file/it60docs/IT2560_Description6bida.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาบังคับ</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 222</td>
                    <td >การออกแบบและพัฒนาฐานข้อมูลขั้นสูง</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >
                    <p>(Advanced Database Design and Development)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 241</td>
                    <td >ธุรกิจดิจิทัล<strong>      </strong></td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >
                    <p>(Digital Business)</p>
                    </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 242 </td>
                    <td >
                    <p>กลยุทธ์และการบริหารผลการปฏิบัติงานในองค์การ</p>
                    </td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Strategy and Performance Management in Organizations)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 243</td>
                    <td >คลังข้อมูลและการทำเหมืองข้อมูลธุรกิจ</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Business Data Warehousing and Data Mining)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 321</td>
                    <td >การพัฒนาโปรแกรมประยุกต์บนเว็บ</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Web Application Development)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 341</td>
                    <td >ธุรกิจอัจฉริยะ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Business Intelligence)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 342</td>
                    <td >สถิติขั้นสูงเพื่อการวิเคราะห์ข้อมูลร</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Advanced Statistics for Data Analytics)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 343</td>
                    <td >กระบวนการธุรกิจและการวางแผนทรัพยากรองค์กร</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Business Processes and Enterprise Resource Planning)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 344</td>
                    <td >การวิเคราะห์และการจินตทัศน์ข้อมูลขนาดใหญ่</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Big Data Analytics and Visualization)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 494</td>
                    <td >สัมมนาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล</td>
                    <td >2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Seminar in Business Intelligence and Data Analytics)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 495</td>
                    <td >โครงงานธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล</td>
                    <td >4(0-8-0)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Project in Business Intelligence and Data Analytics)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4"> </td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาเลือก</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 244</td>
                    <td >เศรษฐศาสตร์ดิจิทัล  </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Digital Economics)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 245</td>
                    <td >การจัดการทรัพยากรบุคคลในยุคดิจิทัล</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Human Resource Management in the Digital Age)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 246</td>
                    <td >การตลาดดิจิทัล</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Digital Marketing)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 247</td>
                    <td >ฐานข้อมูลแบบโนเอสคิวแอล</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(NoSQL Database)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 345</td>
                    <td >การตัดสินใจการจัดการทางธุรกิจ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Business Management Decision Making)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 346</td>
                    <td >การบัญชีพื้นฐานเพื่อการจัดการ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Fundamental of Managerial Accounting)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 347</td>
                    <td >หลักการปัญญาประดิษฐ์   </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Principles of Artificial Intelligence)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 348</td>
                    <td >การจัดการการเงิน</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Financial Management)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 349</td>
                    <td >การจัดการการดำเนินงาน  </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Operations Management)  </td>
                    <td > </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 350</td>
                    <td >การวิเคราะห์เนื้อหาสื่อสังคม  </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Social Media Content Analysis)  </td>
                    <td > </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 351</td>
                    <td >คอมพิวเตอร์สมรรถนะสูง</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(High Performance Computing)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 352</td>
                    <td >เทคโนโลยีดิจิทัลและนวัตกรรมองค์การ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Digital Technologies and Organizational Innovation)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 441</td>
                    <td >เทคโนโลยีการจัดการฐานความรู้</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Knowledge Base Management Technology)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 480</td>
                    <td >การศึกษาอิสระ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Independent Studies)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 483         </td>
                    <td >หัวข้อพิเศษเกี่ยวกับธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล 1</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Special Topics in Business Intelligence and Data Analytics I)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 484</td>
                    <td >หัวข้อพิเศษเกี่ยวกับธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล 2</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Special Topics in Business Intelligence and Data Analytics II)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 224 251</td>
                    <td > การสื่อสารธุรกิจ</td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Business Communication)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 224351</td>
                    <td > การสื่อสารการตลาดเชิงบูรณาการ</td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Integrated Marketing Communications)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 224354</td>
                    <td > การสื่อสารต่างและระหว่างวัฒนธรรม </td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td > (International and Intercultural Communication)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4" align="left" valign="top"> </td>
                    </tr>
                    <tr>
                    <td colspan="2" align="left" valign="top">4. กลุ่มวิชาสารสนเทศศึกษา(Information Studies)</td>
                    <td colspan="2" align="left" valign="top"><a href="file/it60docs/IT2560_Description7is.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาบังคับ</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 261</td>
                    <td >สารสนเทศในบริบทสังคม  </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Information in the Society Context)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 262</td>
                    <td >แหล่งสารสนเทศ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Information Sources)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 263</td>
                    <td >การจัดระบบสารสนเทศ</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Information Organization)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 264</td>
                    <td >ผู้ใช้สารสนเทศ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Information Users)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 361</td>
                    <td >การทำรายการทรัพยากรสารสนเทศ</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Cataloging of Information Resource)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 362</td>
                    <td >การวิเคราะห์และออกแบบระบบสารสนเทศและห้องสมุด</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Information and Library System Analysis and Design)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 363</td>
                    <td >การจัดการบริการสารสนเทศ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Information Service Management)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 364</td>
                    <td >ฐานข้อมูลงานสารสนเทศและห้องสมุด</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Information and Library Databases)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 365</td>
                    <td >ห้องสมุดดิจิทัล</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Digital Libraries)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 496</td>
                    <td >สัมมนางานสารสนเทศและห้องสมุด</td>
                    <td >2(2-0-4)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Seminar in Information and Library Work)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 497</td>
                    <td >โครงงานสารสนเทศและห้องสมุด</td>
                    <td >4(0-8-0)</td>
                    </tr>
                    <tr >
                    <td  align="left" valign="top"> </td>
                    <td style="height: 44px; width: 318px;">
                    <p>(Project in Information and Library Work)</p>
                    </td>
                    <td> </td>
                    <td style="height: 44px; width: 20px;"> </td>
                    </tr>
                    <tr>
                    <td colspan="4"> </td>
                    </tr>
                    <tr>
                    <td colspan="4">วิชาเลือก</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 265</td>
                    <td >การพัฒนาและการจัดการทรัพยากรสารสนเทศ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Collection Development and Management)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 266</td>
                    <td >เทคโนโลยีในงานสารสนเทศและห้องสมุด     </td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Technology in Information Work and Library)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 267</td>
                    <td >การจัดทำดรรชนีและสาระสังเขป</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Indexing and Abstracting)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 268</td>
                    <td >เครือข่ายระบบสารสนเทศ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Information System Network)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 366</td>
                    <td >การค้นคืนสารสนเทศ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Information Retrieval)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 367</td>
                    <td >เมทาดาทา</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Metadata)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 368</td>
                    <td >การจัดการสารสนเทศสื่อมวลชน</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Mass Media Information Management)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 369</td>
                    <td >การจัดการสารสนเทศสำนักงาน</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Office Information Management)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 370</td>
                    <td >การออกแบบสารสนเทศและการพิมพ์แบบตั้งโต๊ะ</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Information Design and Desktop Publishing)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 371</td>
                    <td >การทำรายการสื่อดิจิทัล</td>
                    <td >3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Cataloging of Digital Materials)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 372</td>
                    <td >เศรษฐศาสตร์สารสนเทศ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Economics of Information)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 373</td>
                    <td >การปรับแต่งสารสนเทศ  </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Information Consolidation)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 374</td>
                    <td >คอมพิวเตอร์เพื่อการเรียนรู้  </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Computer Based Learning)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">214 375</td>
                    <td >การจัดการสารสนเทศท้องถิ่น   </td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Local Information Management)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 214 376</td>
                    <td > การจัดการจดหมายเหตุและวัตถุทางพิพิธภัณฑ์</td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Archive and Museum Object Management)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 214 377</td>
                    <td > การจัดการสถาบันบริการสารสนเทศ</td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Management of Information Service Institutes)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 214461</td>
                    <td > การวิจัยและการประเมินผลงานสารสนเทศ</td>
                    <td >3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Research and Evaluation of Information Work)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 214480</td>
                    <td > การศึกษาอิสระ</td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Independent Studies)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td>  214 485</td>
                    <td > หัวข้อพิเศษเกี่ยวกับสารสนเทศและห้องสมุด 1</td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Special Topics in Information and Library Work I)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 214 486</td>
                    <td > หัวข้อพิเศษเกี่ยวกับสารสนเทศและห้องสมุด 2</td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Special Topics in Information and Library Work II)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 224 355</td>
                    <td > การโฆษณาและการประชาสัมพันธ์ทางสื่อดิจิทัล </td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Advertising and Public Relations on Digital Media)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 224356</td>
                    <td > การจัดการสื่อเพื่อพันธกิจทางสังคม </td>
                    <td > 3(2-2-5)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td >(Media Management for Social Engagement)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td> 224362</td>
                    <td > สื่อดิจิทัลเพื่อบุคคลที่มีความต้องการพิเศษ </td>
                    <td > 3(3-0-6)</td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td > (Digital Media for People with Special Needs</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4" align="left" valign="top"> </td>
                    </tr>
                    <tr>
                    <td class="content1" colspan="2" align="left" valign="top" bgcolor="#EEEEEE">2.3 กลุ่มวิชาสหกิจศึกษา   9   หน่วยกิต</td>
                    <td class="content1" colspan="2" align="left" valign="top" bgcolor="#EEEEEE"><a href="file/it60docs/IT2560_Description8coop.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">204 490 </td>
                    <td >เตรียมสหกิจศึกษา <a href="courese_des.html#4490"> </a>   </td>
                    <td >1(1-0-2)</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Pre-cooperative Education)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">204 491  </td>
                    <td >สหกิจศึกษา  1*</td>
                    <td >8</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Cooperative Education I)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">204 492  </td>
                    <td >สหกิจศึกษา  2**</td>
                    <td >8</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Cooperative Education II)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">204 493  </td>
                    <td >สหกิจศึกษา  3**</td>
                    <td >8</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td >(Cooperative Education III)</td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td colspan="4" align="left" valign="top"><span class="style13"><u>หมายเหตุ</u> * สาขาวิชาโดยความเห็นชอบของคณะกรรมการประจำสำนักวิชา อาจพิจารณาให้เรียนวิชาเลือก<br /> บังคับที่มีหน่วยกิตรวมเท่ากันแทน<br />                ** รายวิชา 204492 สหกิจศึกษา 2 และรายวิชา 204493 สหกิจศึกษา 3 เป็นรายวิชาที่นักศึกษาสามารถลงทะเบียนเรียน เพิ่มเติมหลังจากผ่านรายวิชา 204491 สหกิจศึกษา 1 ซึ่งเป็นวิชาบังคับของหลักสูตร</span></td>
                    </tr>
                    <tr>
                    <td colspan="4" align="left" valign="top" bgcolor="#EEEEEE">3.หมวดวิชาเลือกเสรี 8 หน่วยกิต</td>
                    </tr>
                    <tr style="height: 51px;">
                    <td style="height: 51px; width: 594px;" colspan="4" align="left" valign="top">ให้เลือกเรียนรายวิชาใดๆ ที่เปิดสอนในมหาวิทยาลัย<br /> <em>ความหมายของเลขรหัสวิชา</em></td>
                    </tr>
                    <tr>
                    <td colspan="4" align="left" valign="top">เลขรหัสวิชาประกอบด้วยเลข 6 ตัว หน้าชื่อรายวิชา มีความหมายดังนี้</td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">ตัวเลขตำแหน่งที่ 1</td>
                    <td >หมายถึง สำนักวิชาที่รับผิดชอบในแต่ละวิชา กำหนดรหัสดังนี้</td>
                    <td > </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td > 1 หมายถึง สำนักวิชาวิทยาศาสตร์<br /> 2 หมายถึง สำนักวิชาเทคโนโลยีสังคม<br /> 3 หมายถึง สำนักวิชาเทคโนโลยีการเกษตร<br /> 4-5 หมายถึง สำนักวิชาวิศวกรรมศาสตร์<br /> 6 หมายถึง สำนักวิชาแพทยศาสตร์<br /> 7 หมายถึง สำนักวิชาพยาบาลศาสตร์</td>
                    <td > </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">ตัวเลขตำแหน่งที่ 2 และ 3 </td>
                    <td >หมายถึง สาขาวิชา</td>
                    <td > </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">ตัวเลขตำแหน่งที่ 4  </td>
                    <td >หมายถึง ชั้นปี</td>
                    <td > </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top">ตัวเลขตำแหน่งที่ 5 และ 6  </td>
                    <td >หมายถึง ลำดับรายวิชาของแต่ละชั้นปี</td>
                    <td > </td>
                    <td > </td>
                    </tr>
                    <tr>
                    <td align="left" valign="top"> </td>
                    <td > </td>
                    <td > </td>
                    <td > </td>
                    </tr>
                    </tbody>
                    </table>
                 
                </div>
            </div>
            <hr/></div>


    <!-- Enghlish Content -->
    <?php }else{ ?>
     
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
                      <td colspan="2" align="left" valign="top"><a href="file/it60docs/IT2560_Description1.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">202 108  </td>
                      <td align="left" valign="top">การรู้ดิจิทัล</td>
                      <td align="left" valign="top">2(2-0-4)</td>
                      <td align="left" valign="top"> </td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td>
                      <p>(Digital Literacy)</p>
                      </td>
                      <td> </td>
                      </tr>
                      <tr>
                      <td>202 109</td>
                      <td>การใช้โปรแกรมประยุกต์เพื่อการเรียนรู้</td>
                      <td>1(0-2-1)</td>
                      </tr>
                      <tr >
                      <td > </td>
                      <td>
                      <p>(Use of Application Programs for Learning)</p>
                      </td>
                      <td> </td>
                      </tr>
                      <tr>
                      <td>202 201</td>
                      <td >ทักษะชีวิต</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Life Skills)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>202 202</td>
                      <td >ความเป็นพลเมืองและพลเมืองโลก</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Citizenship and Global Citizens)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>202 203</td>
                      <td >มนุษย์กับสังคมและสิ่งแวดล้อม</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Man, Society and Environment) </p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>202 207</td>
                      <td >มนุษย์กับเศรษฐกิจและการพัฒนา</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Man, Economy and Development)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4"> </td>
                      </tr>
                      <tr>
                      <td colspan="2">1.2 กลุ่มวิชาภาษา 15 หน่วยกิต</td>
                      <td colspan="2"><a href="file/it60docs/IT2560_Description2.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                      </tr>
                      <tr>
                      <td>213 101</td>
                      <td >ภาษาอังกฤษเพื่อการสื่อสาร 1</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(English for Communication 1)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>213 102 </td>
                      <td >ภาษาอังกฤษเพื่อการสื่อสาร 2</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(English for Communication 2)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>213 203    </td>
                      <td >ภาษาอังกฤษเพื่อวัตถุประสงค์ทางวิชาการ     </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(English for Academic Purposes)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>213 204 </td>
                      <td >ภาษาอังกฤษเพื่อวัตถุประสงค์เฉพาะ  </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(English for Specific Purposes)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>213 305   </td>
                      <td >ภาษาอังกฤษเพื่อการทำงาน</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(English for Careers)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4"> </td>
                      </tr>
                      <tr>
                      <td colspan="2">1.3  กลุ่มวิชาศึกษาทั่วไปแบบเลือก</td>
                      <td colspan="2"><a href="file/it60docs/IT2560_Description3.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                      </tr>
                      <tr>
                      <td>202 111</td>
                      <td >ภาษาไทยเพื่อการสื่อสาร</td>
                      <td >2(2-0-4)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Thai for Communication)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>202 175</td>
                      <td >ศิลปวิจักษ์</td>
                      <td >2(2-0-4)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Art Appreciation)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>202 181</td>
                      <td >สุขภาพองค์รวม</td>
                      <td >2(2-0-4)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Holistic Health)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>202 222</td>
                      <td >พันธกิจสัมพันธ์ชุมชนกับกลุ่มอาชีพ</td>
                      <td >2(2-0-4)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Professional and Community Engagement)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>202 241</td>
                      <td >กฎหมายในชีวิตประจำวัน</td>
                      <td >2(2-0-4)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Law in Daily Life)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>202 324</td>
                      <td >ไทยศึกษาเชิงพหุวัฒนธรรม</td>
                      <td >2(2-0-4)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Pluri-Cultural Thai Studies)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>202 331</td>
                      <td >อาเซียนศึกษา</td>
                      <td >2(2-0-4)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(ASEAN Studies)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>202 373</td>
                      <td >การคิดเชิงออกแบบ</td>
                      <td >2(2-0-4)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Design Thinking)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4"> </td>
                      </tr>
                      <tr>
                      <td colspan="2" bgcolor="#EEEEEE">2. หมวดวิชาเฉพาะ   131   หน่วยกิต</td>
                      <td colspan="2" bgcolor="#EEEEEE"><a href="file/it60docs/IT2560_Description4.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                      </tr>
                      <tr>
                      <td colspan="4" bgcolor="#EEEEEE">2.1 กลุ่มวิชาเทคโนโลยีพื้นฐาน 50 หน่วยกิต</td>
                      </tr>
                      <tr>
                      <td colspan="4">วิชาวิทยาศาสตร์พื้นฐาน</td>
                      </tr>
                      <tr>
                      <td>214 101</td>
                      <td >คณิตศาสตร์เพื่อคอมพิวเตอร์</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Mathematics for Computer)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 102</td>
                      <td >สถิติเพื่อการวิจัยวิทยาการสารสนเทศ <a href="file/it60docs/courese_des.html#4103"> </a> </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Statistics for Information Science Research)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 104 </td>
                      <td >ระเบียบวิธีวิจัยทางวิทยาการสารสนเทศ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Research  Methodologies  in  Information  Sciences)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4"> </td>
                      </tr>
                      <tr>
                      <td colspan="4">วิชาการสื่อสาร</td>
                      </tr>
                      <tr>
                      <td>214 103</td>
                      <td >การสื่อสารในยุคดิจิทัล</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>  (Communication in the Digital Age)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 105</td>
                      <td >การรู้เท่าทันสื่อในยุคดิจิทัล</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >  (Media Literacy in the Digital Age)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 107</td>
                      <td > หลักการเบื้องต้นของสื่อดิจิทัล    </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Fundamentals of Digital Media)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4"> </td>
                      </tr>
                      <tr>
                      <td colspan="4">วิชาคอมพิวเตอร์และเทคโนโลยี</td>
                      </tr>
                      <tr>
                      <td>214 106</td>
                      <td > การเขียนโปรแกรมคอมพิวเตอร์สำหรับระบบสารสนเทศ 1</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Computer Programming for Information System I)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 108</td>
                      <td >การสื่อสารข้อมูลและเครือข่าย <strong>    </strong></td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Data Communications and Networking)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 108</td>
                      <td >การสื่อสารข้อมูลและเครือข่าย </td>
                      <td >4(3-3-8)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Data Communications and Networking)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 201</td>
                      <td >การออกแบบและพัฒนาฐานข้อมูล</td>
                      <td >
                      <p>4(3-3-8)</p>
                      </td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Database Design and Development)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 204</td>
                      <td > การเขียนโปรแกรมคอมพิวเตอร์สำหรับระบบสารสนเทศ 2</td>
                      <td >
                      <p>3(2-2-5)</p>
                      </td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Computer Programming for Information System II)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 205</td>
                      <td >เทคโนโลยีเว็บ   </td>
                      <td >3(2-3-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Web Technology)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 206</td>
                      <td >การออกแบบและพัฒนาแอนิเมชันและมัลติมีเดีย</td>
                      <td >
                      <p>3(2-3-6)</p>
                      </td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Animation and Multimedia Design and Development)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 301</td>
                      <td >กฎหมายและจริยธรรมในเทคโนโลยีดิจิทัล</td>
                      <td >2(2-0-4)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Laws and Ethics in Digital Technology)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 214 302</td>
                      <td > การบริการคอมพิวเตอร์</td>
                      <td > 2(1-2-3)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Computer Services)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4"> </td>
                      </tr>
                      <tr>
                      <td colspan="4">วิชาวิทยาการจัดการ</td>
                      </tr>
                      <tr>
                      <td>214 109    </td>
                      <td >การวิเคราะห์ระบบสารสนเทศ              </td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Information System Analysis)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 202</td>
                      <td >การออกแบบระบบสารสนเทศ</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Information System Design)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 214 203</td>
                      <td > การจัดการความรู้</td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Knowledge Management)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4"> </td>
                      </tr>
                      <tr>
                      <td colspan="4" bgcolor="#EEEEEE">2.2 หมวดวิชาเฉพาะ      72  หน่วยกิต</td>
                      </tr>
                      <tr>
                      <td colspan="2">1.กลุ่มวิชาซอฟต์แวร์วิสาหกิจ(Enterprise Software)</td>
                      <td colspan="2"><a href="file/it60docs/IT2560_Description5es.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                      </tr>
                      <tr>
                      <td colspan="4">วิชาบังคับ</td>
                      </tr>
                      <tr>
                      <td>214 221</td>
                      <td >โครงสร้างข้อมูลและขั้นตอนวิธี</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>  (Data Structures and Algorithms)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 222</td>
                      <td >การออกแบบและพัฒนาฐานข้อมูลขั้นสูง</td>
                      <td >3(2-2-5)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Advanced Database Design and Development)</p>
                      </td>
                      <td ><strong> </strong></td>
                      </tr>
                      <tr>
                      <td>214 223</td>
                      <td >สถาปัตยกรรมซอฟต์แวร์วิสาหกิจ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Enterprise Software Architecture)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 224</td>
                      <td >การโปรแกรมเชิงอ็อบเจกต์</td>
                      <td >3(2-2-5)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Object-Oriented Programming)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 321</td>
                      <td >การพัฒนาโปรแกรมประยุกต์บนเว็บ  <strong>      </strong></td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Web Application Development)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 322</td>
                      <td >วิศวกรรมซอฟต์แวร์     </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Software Engineering)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 323</td>
                      <td >การจัดการโครงการซอฟต์แวร์  <strong>   </strong></td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Software Project Management)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 324</td>
                      <td >การพัฒนาโปรแกรมประยุกต์บนอุปกรณ์เคลื่อนที่</td>
                      <td >3(2-2-5)*</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Mobile Application Development)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 325</td>
                      <td >การทดสอบซอฟต์แวร์   </td>
                      <td >3(3-3-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Software Testing)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 492</td>
                      <td >สัมมนาซอฟต์แวร์วิสาหกิจ</td>
                      <td >2(2-0-4)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Seminar in Enterprise Software)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 493</td>
                      <td >โครงงานซอฟต์แวร์วิสาหกิจ  <strong>     </strong></td>
                      <td >4(0-8-0)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Project in Enterprise Software)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4"> </td>
                      </tr>
                      <tr>
                      <td colspan="4">วิชาเลือก</td>
                      </tr>
                      <tr>
                      <td>214 225</td>
                      <td >ความมั่นคงปลอดภัยของเทคโนโลยีสารสนเทศและการสื่อสาร</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Information and Communication Technology Security)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 226</td>
                      <td >การพัฒนาเกมคอมพิวเตอร์</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Computer Game Development)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 227</td>
                      <td >หลักการปฏิสัมพันธ์ระหว่างมนุษย์และคอมพิวเตอร์</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Principle of Human-Computer Interaction)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 228</td>
                      <td >การพัฒนาส่วนต่อประสานกับผู้ใช้ของเว็บ</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Web User Interface Development)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 326</td>
                      <td >การพัฒนาโปรแกรมประยุกต์เชิงอ็อบเจกต์ขั้นสูง   </td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Advanced Object-Oriented Application Development)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 327</td>
                      <td >การบริหารระบบและเครือข่าย</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Network and System Administration)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 328</td>
                      <td >การโปรแกรมภาษาสคริปต์</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Scripting Language Programming)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 329</td>
                      <td >การพัฒนาซอฟต์แวร์สื่อประสม</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Multimedia Software Development)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 330</td>
                      <td >การออกแบบประสบการณ์ผู้ใช้</td>
                      <td >
                      <p>3(3-0-6)</p>
                      </td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(User Experience Design)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 331</td>
                      <td > การพัฒนาเว็บเชิงความหมาย</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Semantic Web Development)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 332</td>
                      <td >การพัฒนาโปรแกรมประยุกต์ข้ามแพลตฟอร์ม</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Cross-Platform Application Development)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 333</td>
                      <td >การพัฒนาโปรแกรมประยุกต์บนอุปกรณ์เคลื่อนที่ขั้นสูง</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >
                      <p>(Advanced Mobile Application Development)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>214 421</td>
                      <td >อินเทอร์เน็ตของสรรพสิ่ง</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Internet of Things)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 214 480</td>
                      <td > การศึกษาอิสระ</td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Independent Studies)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 214 481</td>
                      <td > หัวข้อพิเศษเกี่ยวกับซอฟต์แวร์วิสาหกิจ 1</td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Special Topics in Enterprise Software I)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 214 482</td>
                      <td > หัวข้อพิเศษเกี่ยวกับซอฟต์แวร์วิสาหกิจ 2</td>
                      <td ><strong> 3(3-0-6)</strong></td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Special Topics in Enterprise Software II)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 224 321</td>
                      <td > เทคโนโลยีการผลิตแอนิเมชันสำหรับโปรแกรมประยุกต์      </td>
                      <td > 3(1-4-4)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >    (Technology of Animation Production for Application)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 224 323</td>
                      <td > ธุรกิจสื่อดิจิทัลและผู้ประกอบการ</td>
                      <td > 3(2-2-5)</td>
                      </tr>
                      <tr style="height: 33px;">
                      <td style="height: 33px; width: 138px;"> </td>
                      <td style="height: 33px; width: 318px;"> (Digital Media Business and  Entrepreneurs)</td>
                      <td style="height: 33px; width: 118px;"> </td>
                      </tr>
                      <tr>
                      <td> 224 360</td>
                      <td > พฤติกรรมและการสื่อสารในองค์การ       </td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >    (Behavior and Organizational Communication)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4"> </td>
                      </tr>
                      <tr>
                      <td colspan="2" align="left" valign="top">2. กลุ่มวิชาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล</td>
                      <td colspan="2" align="left" valign="top"><a href="file/it60docs/IT2560_Description6bida.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                      </tr>
                      <tr>
                      <td colspan="4">วิชาบังคับ</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 222</td>
                      <td >การออกแบบและพัฒนาฐานข้อมูลขั้นสูง</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >
                      <p>(Advanced Database Design and Development)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 241</td>
                      <td >ธุรกิจดิจิทัล<strong>      </strong></td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >
                      <p>(Digital Business)</p>
                      </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 242 </td>
                      <td >
                      <p>กลยุทธ์และการบริหารผลการปฏิบัติงานในองค์การ</p>
                      </td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Strategy and Performance Management in Organizations)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 243</td>
                      <td >คลังข้อมูลและการทำเหมืองข้อมูลธุรกิจ</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Business Data Warehousing and Data Mining)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 321</td>
                      <td >การพัฒนาโปรแกรมประยุกต์บนเว็บ</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Web Application Development)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 341</td>
                      <td >ธุรกิจอัจฉริยะ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Business Intelligence)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 342</td>
                      <td >สถิติขั้นสูงเพื่อการวิเคราะห์ข้อมูลร</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Advanced Statistics for Data Analytics)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 343</td>
                      <td >กระบวนการธุรกิจและการวางแผนทรัพยากรองค์กร</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Business Processes and Enterprise Resource Planning)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 344</td>
                      <td >การวิเคราะห์และการจินตทัศน์ข้อมูลขนาดใหญ่</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Big Data Analytics and Visualization)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 494</td>
                      <td >สัมมนาธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล</td>
                      <td >2(2-0-4)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Seminar in Business Intelligence and Data Analytics)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 495</td>
                      <td >โครงงานธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล</td>
                      <td >4(0-8-0)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Project in Business Intelligence and Data Analytics)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4"> </td>
                      </tr>
                      <tr>
                      <td colspan="4">วิชาเลือก</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 244</td>
                      <td >เศรษฐศาสตร์ดิจิทัล  </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Digital Economics)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 245</td>
                      <td >การจัดการทรัพยากรบุคคลในยุคดิจิทัล</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Human Resource Management in the Digital Age)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 246</td>
                      <td >การตลาดดิจิทัล</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Digital Marketing)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 247</td>
                      <td >ฐานข้อมูลแบบโนเอสคิวแอล</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(NoSQL Database)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 345</td>
                      <td >การตัดสินใจการจัดการทางธุรกิจ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Business Management Decision Making)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 346</td>
                      <td >การบัญชีพื้นฐานเพื่อการจัดการ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Fundamental of Managerial Accounting)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 347</td>
                      <td >หลักการปัญญาประดิษฐ์   </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Principles of Artificial Intelligence)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 348</td>
                      <td >การจัดการการเงิน</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Financial Management)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 349</td>
                      <td >การจัดการการดำเนินงาน  </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Operations Management)  </td>
                      <td > </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 350</td>
                      <td >การวิเคราะห์เนื้อหาสื่อสังคม  </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Social Media Content Analysis)  </td>
                      <td > </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 351</td>
                      <td >คอมพิวเตอร์สมรรถนะสูง</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(High Performance Computing)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 352</td>
                      <td >เทคโนโลยีดิจิทัลและนวัตกรรมองค์การ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Digital Technologies and Organizational Innovation)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 441</td>
                      <td >เทคโนโลยีการจัดการฐานความรู้</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Knowledge Base Management Technology)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 480</td>
                      <td >การศึกษาอิสระ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Independent Studies)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 483         </td>
                      <td >หัวข้อพิเศษเกี่ยวกับธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล 1</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Special Topics in Business Intelligence and Data Analytics I)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 484</td>
                      <td >หัวข้อพิเศษเกี่ยวกับธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล 2</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Special Topics in Business Intelligence and Data Analytics II)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 224 251</td>
                      <td > การสื่อสารธุรกิจ</td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Business Communication)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 224351</td>
                      <td > การสื่อสารการตลาดเชิงบูรณาการ</td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Integrated Marketing Communications)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 224354</td>
                      <td > การสื่อสารต่างและระหว่างวัฒนธรรม </td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td > (International and Intercultural Communication)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4" align="left" valign="top"> </td>
                      </tr>
                      <tr>
                      <td colspan="2" align="left" valign="top">4. กลุ่มวิชาสารสนเทศศึกษา(Information Studies)</td>
                      <td colspan="2" align="left" valign="top"><a href="file/it60docs/IT2560_Description7is.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                      </tr>
                      <tr>
                      <td colspan="4">วิชาบังคับ</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 261</td>
                      <td >สารสนเทศในบริบทสังคม  </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Information in the Society Context)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 262</td>
                      <td >แหล่งสารสนเทศ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Information Sources)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 263</td>
                      <td >การจัดระบบสารสนเทศ</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Information Organization)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 264</td>
                      <td >ผู้ใช้สารสนเทศ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Information Users)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 361</td>
                      <td >การทำรายการทรัพยากรสารสนเทศ</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Cataloging of Information Resource)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 362</td>
                      <td >การวิเคราะห์และออกแบบระบบสารสนเทศและห้องสมุด</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Information and Library System Analysis and Design)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 363</td>
                      <td >การจัดการบริการสารสนเทศ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Information Service Management)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 364</td>
                      <td >ฐานข้อมูลงานสารสนเทศและห้องสมุด</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Information and Library Databases)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 365</td>
                      <td >ห้องสมุดดิจิทัล</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Digital Libraries)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 496</td>
                      <td >สัมมนางานสารสนเทศและห้องสมุด</td>
                      <td >2(2-0-4)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Seminar in Information and Library Work)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 497</td>
                      <td >โครงงานสารสนเทศและห้องสมุด</td>
                      <td >4(0-8-0)</td>
                      </tr>
                      <tr >
                      <td  align="left" valign="top"> </td>
                      <td style="height: 44px; width: 318px;">
                      <p>(Project in Information and Library Work)</p>
                      </td>
                      <td> </td>
                      <td style="height: 44px; width: 20px;"> </td>
                      </tr>
                      <tr>
                      <td colspan="4"> </td>
                      </tr>
                      <tr>
                      <td colspan="4">วิชาเลือก</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 265</td>
                      <td >การพัฒนาและการจัดการทรัพยากรสารสนเทศ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Collection Development and Management)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 266</td>
                      <td >เทคโนโลยีในงานสารสนเทศและห้องสมุด     </td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Technology in Information Work and Library)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 267</td>
                      <td >การจัดทำดรรชนีและสาระสังเขป</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Indexing and Abstracting)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 268</td>
                      <td >เครือข่ายระบบสารสนเทศ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Information System Network)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 366</td>
                      <td >การค้นคืนสารสนเทศ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Information Retrieval)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 367</td>
                      <td >เมทาดาทา</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Metadata)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 368</td>
                      <td >การจัดการสารสนเทศสื่อมวลชน</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Mass Media Information Management)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 369</td>
                      <td >การจัดการสารสนเทศสำนักงาน</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Office Information Management)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 370</td>
                      <td >การออกแบบสารสนเทศและการพิมพ์แบบตั้งโต๊ะ</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Information Design and Desktop Publishing)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 371</td>
                      <td >การทำรายการสื่อดิจิทัล</td>
                      <td >3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Cataloging of Digital Materials)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 372</td>
                      <td >เศรษฐศาสตร์สารสนเทศ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Economics of Information)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 373</td>
                      <td >การปรับแต่งสารสนเทศ  </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Information Consolidation)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 374</td>
                      <td >คอมพิวเตอร์เพื่อการเรียนรู้  </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Computer Based Learning)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">214 375</td>
                      <td >การจัดการสารสนเทศท้องถิ่น   </td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Local Information Management)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 214 376</td>
                      <td > การจัดการจดหมายเหตุและวัตถุทางพิพิธภัณฑ์</td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Archive and Museum Object Management)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 214 377</td>
                      <td > การจัดการสถาบันบริการสารสนเทศ</td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Management of Information Service Institutes)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 214461</td>
                      <td > การวิจัยและการประเมินผลงานสารสนเทศ</td>
                      <td >3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Research and Evaluation of Information Work)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 214480</td>
                      <td > การศึกษาอิสระ</td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Independent Studies)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td>  214 485</td>
                      <td > หัวข้อพิเศษเกี่ยวกับสารสนเทศและห้องสมุด 1</td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Special Topics in Information and Library Work I)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 214 486</td>
                      <td > หัวข้อพิเศษเกี่ยวกับสารสนเทศและห้องสมุด 2</td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Special Topics in Information and Library Work II)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 224 355</td>
                      <td > การโฆษณาและการประชาสัมพันธ์ทางสื่อดิจิทัล </td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Advertising and Public Relations on Digital Media)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 224356</td>
                      <td > การจัดการสื่อเพื่อพันธกิจทางสังคม </td>
                      <td > 3(2-2-5)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td >(Media Management for Social Engagement)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td> 224362</td>
                      <td > สื่อดิจิทัลเพื่อบุคคลที่มีความต้องการพิเศษ </td>
                      <td > 3(3-0-6)</td>
                      </tr>
                      <tr>
                      <td> </td>
                      <td > (Digital Media for People with Special Needs</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4" align="left" valign="top"> </td>
                      </tr>
                      <tr>
                      <td class="content1" colspan="2" align="left" valign="top" bgcolor="#EEEEEE">2.3 กลุ่มวิชาสหกิจศึกษา   9   หน่วยกิต</td>
                      <td class="content1" colspan="2" align="left" valign="top" bgcolor="#EEEEEE"><a href="file/it60docs/IT2560_Description8coop.pdf">ดาวน์โหลดคำอธิบายรายวิชา</a></td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">204 490 </td>
                      <td >เตรียมสหกิจศึกษา <a href="courese_des.html#4490"> </a>   </td>
                      <td >1(1-0-2)</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Pre-cooperative Education)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">204 491  </td>
                      <td >สหกิจศึกษา  1*</td>
                      <td >8</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Cooperative Education I)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">204 492  </td>
                      <td >สหกิจศึกษา  2**</td>
                      <td >8</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Cooperative Education II)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">204 493  </td>
                      <td >สหกิจศึกษา  3**</td>
                      <td >8</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td >(Cooperative Education III)</td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td colspan="4" align="left" valign="top"><span class="style13"><u>หมายเหตุ</u> * สาขาวิชาโดยความเห็นชอบของคณะกรรมการประจำสำนักวิชา อาจพิจารณาให้เรียนวิชาเลือก<br /> บังคับที่มีหน่วยกิตรวมเท่ากันแทน<br />                ** รายวิชา 204492 สหกิจศึกษา 2 และรายวิชา 204493 สหกิจศึกษา 3 เป็นรายวิชาที่นักศึกษาสามารถลงทะเบียนเรียน เพิ่มเติมหลังจากผ่านรายวิชา 204491 สหกิจศึกษา 1 ซึ่งเป็นวิชาบังคับของหลักสูตร</span></td>
                      </tr>
                      <tr>
                      <td colspan="4" align="left" valign="top" bgcolor="#EEEEEE">3.หมวดวิชาเลือกเสรี 8 หน่วยกิต</td>
                      </tr>
                      <tr style="height: 51px;">
                      <td style="height: 51px; width: 594px;" colspan="4" align="left" valign="top">ให้เลือกเรียนรายวิชาใดๆ ที่เปิดสอนในมหาวิทยาลัย<br /> <em>ความหมายของเลขรหัสวิชา</em></td>
                      </tr>
                      <tr>
                      <td colspan="4" align="left" valign="top">เลขรหัสวิชาประกอบด้วยเลข 6 ตัว หน้าชื่อรายวิชา มีความหมายดังนี้</td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">ตัวเลขตำแหน่งที่ 1</td>
                      <td >หมายถึง สำนักวิชาที่รับผิดชอบในแต่ละวิชา กำหนดรหัสดังนี้</td>
                      <td > </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td > 1 หมายถึง สำนักวิชาวิทยาศาสตร์<br /> 2 หมายถึง สำนักวิชาเทคโนโลยีสังคม<br /> 3 หมายถึง สำนักวิชาเทคโนโลยีการเกษตร<br /> 4-5 หมายถึง สำนักวิชาวิศวกรรมศาสตร์<br /> 6 หมายถึง สำนักวิชาแพทยศาสตร์<br /> 7 หมายถึง สำนักวิชาพยาบาลศาสตร์</td>
                      <td > </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">ตัวเลขตำแหน่งที่ 2 และ 3 </td>
                      <td >หมายถึง สาขาวิชา</td>
                      <td > </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">ตัวเลขตำแหน่งที่ 4  </td>
                      <td >หมายถึง ชั้นปี</td>
                      <td > </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top">ตัวเลขตำแหน่งที่ 5 และ 6  </td>
                      <td >หมายถึง ลำดับรายวิชาของแต่ละชั้นปี</td>
                      <td > </td>
                      <td > </td>
                      </tr>
                      <tr>
                      <td align="left" valign="top"> </td>
                      <td > </td>
                      <td > </td>
                      <td > </td>
                      </tr>
                      </tbody>
                      </table>
                   
                  </div>
              </div>
              <hr/></div>



    <?php }?>

    <!-- /.container -->
    <?php  include('footer.php') ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
