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
    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : วิชาที่เปิดสอนระดับปริญญาเอก"; }else echo "SUT IT : DOCTOR'S DEGREE";?> </title>
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
                    <h1 class="page-header">
                      วิชาที่เปิดสอน<br>
                    </h1>
                    <!-- <ol class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li class="active">Full Width Page</li>
                      </ol> -->
                  </div>
                </div>
              </div>
              <div class="container">
          <!-- Page Heading/Breadcrumbs -->
                <div class="row">
                  <div class="col-lg-12">
            <p><strong>หลักสูตรวิทยาการสารสนเทศมหาบัณฑิตและวิทยาการสารสนเทศดุษฎีบัณฑิต</strong><strong> </strong><strong>สาขาวิชาเทคโนโลยีสารสนเทศ  หลักสูตรปรับปรุง&nbsp; พ.ศ. 255</strong><strong>3 </strong><strong>&nbsp;</strong></p>
                  <p><strong>รายวิชา</strong></p>
                  <p><strong>-&nbsp; รายวิชาบังคับ</strong> <strong>(Compulsory  Courses)</strong> <strong>&nbsp;</strong><strong>สำหรับหลักสูตรแบบ  2.1 และ 2.2</strong></p>
                  <table class="table"  height="103">
                    <tbody>
                      <tr>
                        <td ><strong>ก. รายวิชาที่ไม่นับหน่วยกิต  (Audit)</strong></td>
                        <td ></td>
                        <td ></td>
                      </tr>
                      <tr>
                        <td>204801</td>
                        <td><a href="course_d_des.php?lang=th#4801">การเขียนทางวิชาการ<br>
                          (Academic  Writing)</a></td>
                        <td>3(3-0-6)</td>
                      </tr>
                      <tr>
                        <td><strong>ข.  รายวิชาที่นับหน่วยกิต </strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>204802</td>
                        <td><a href="course_d_des.php?lang=th#4802">สัมมนาดุษฎีบัณฑิต<br>
                          (Ph.D.  Seminar)</a></td>
                        <td nowrap>3(3-0-6)</td>
                      </tr>
                    </tbody>
                  </table>
                  <p><strong>-&nbsp; </strong><strong>รายวิชาเลือก </strong><strong>(Electives)<span dir="RTL"> </span><span dir="RTL"><span dir="RTL"> </span> </span></strong><strong>สำหรับหลักสูตรแบบ 2.1&nbsp;  และ 2.2</strong><strong></strong></p>
                  <table class="table"  height="333" border="0">
                    <tbody>
                      <tr>
                        <td  height="40">204901</td>
                        <td ><a href="course_d_des.php?lang=th#4901">หัวข้อคัดสรรทางชีวสารสนเทศ<br>
                          (Selected Topics in  Bioinformatics)</a>
                          </td>
                        <td nowrap> 3(3-0-6)</td>
                      </tr>
                      <tr>
                        <td height="39">204902</td>
                        <td><a href="course_d_des.php?lang=th#4902">หัวข้อคัดสรรทางคอมพิวเตอร์สมรรถนะสูง และเครือข่าย <br>
                          (Selected Topics in High Performance  Computing 
                          and  Networking)</a></td>
                        <td>3(3-0-6)</td>
                      </tr>
                      <tr>
                        <td height="29">204903</td>
                        <td><p><a href="course_d_des.php?lang=th#4903">หัวข้อคัดสรรทางปัญญาประดิษฐ์<br>
                          (Selected Topics in Artificial Intelligence)</a></p></td>
                        <td>3(3-0-6)</td>
                      </tr>
                      <tr>
                        <td height="35">204904</td>
                        <td><p><a href="course_d_des.php?lang=th#4904">หัวข้อคัดสรรทางเทคโนโลยีการจัดการความรู้<br>
                          (Selected Topics in Knowledge Management  Technologies)</a></p></td>
                        <td>3(3-0-6)</td>
                      </tr>
                      <tr>
                        <td height="39">204905</td>
                        <td><a href="course_d_des.php?lang=th#4905">หัวข้อคัดสรรทางสื่อใหม่ในสังคมใหม่<br>
                          (Selected Topics in New Media in New Society)</a></td>
                        <td>3(3-0-6)</td>
                      </tr>
                      <tr>
                        <td height="32">204906</td>
                        <td><a href="course_d_des.php?lang=th#4906">หัวข้อคัดสรรทางการเรียนรู้อิเล็กทรอนิกส์&nbsp;เพื่อการพัฒนาที่ยั่งยืน <br>
                          (Selected Topics in E-learning for Sustainable  Development)</a></td>
                        <td>3(3-0-6) </td>
                      </tr>
                      <tr>
                        <td height="36"><p>204907</p></td>
                        <td><a href="course_d_des.php?lang=th#4907">หัวข้อคัดสรรทางการจัดการวิสาหกิจ<br>
                          (Selected Topics in  Enterprise Management)</a></td>
                        <td>3(3-0-6) </td>
                      </tr>
                      <tr>
                        <td height="31">204908</td>
                        <td><a href="course_d_des.php?lang=th#4908">หัวข้อพิเศษ <br>
                          (Special Topics 1)</a></td>
                        <td>3(3-0-6)<span dir="RTL"> </span></td>
                      </tr>
                      <tr>
                        <td>204909</td>
                        <td><a href="course_d_des.php?lang=th#4909">หัวข้อพิเศษ <br>
                          (Special Topics 2)</a></td>
                        <td>3(3-0-6)</td>
                      </tr>
                    </tbody>
                  </table>
                  <p><strong>-&nbsp; &nbsp;ดุษฎีนิพนธ์ (Dissertation)</strong></p>
                  <table class="table"  border="0">
                    <tbody>
                      <tr>
                        <td >204703</td>
                        <td ><a href="course_d_des.php?lang=th#4703">ดุษฎีนิพนธ์ <br>(แบบ 1.1)&nbsp;&nbsp; </a></td>
                        <td > เท่ากับหรือมากกว่า60 หน่วยกิต <br>
                          (Dissertation (Scheme 1.1))</td>
                      </tr>
                      <tr>
                        <td>204703</td>
                        <td><a href="course_d_des.php?lang=th#4703">ดุษฎีนิพนธ์ <br>(แบบ 2.1)</a> </td>
                        <td>เท่ากับหรือมากกว่า45 หน่วยกิต <br>
                          (Dissertation (Scheme 2.1))</td>
                      </tr>
                      <tr>
                        <td>204703</td>
                        <td><a href="course_d_des.php?lang=th#4703">ดุษฎีนิพนธ์ <br>(แบบ 2.2)</a></td>
                        <td>เท่ากับหรือมากกว่า 60 หน่วยกิต<br>
                          (Dissertation (Scheme 2.2))</td>
                      </tr>
                    </tbody>
                  </table>
                  <p>สามารถดาวน์โหลดรูปแบบการจัดทำดุษฎีนิพนธ์ได้ที่ =&gt;<a href="file/proposal_From.doc">รูปแบบดุษฎีนิพนธ์</a> </p>
                  <p>&nbsp;</p>
                  </div>
                </div>
              </div>
                  ';
          }else 

            echo '
            <div class="container">
              <!-- Page Heading/Breadcrumbs -->
              <div class="row">
                <div class="col-lg-12">


            <div>
              <!-- Page Heading/Breadcrumbs -->

              <div>
                <div>
                  <h1>
                    PROGRAMS<br>
                    <small>DOCTOR \'S DEGREE</small>
                  </h1>
                </div>
              </div>
            </div>

            <div>
              <!-- Page Heading/Breadcrumbs -->


              <div>
                <div>
                  <p>
                    <strong>Doctor of Information Science Program in Information
                    Technology&nbsp; 2010. &nbsp;</strong>
                  </p>

                  <p>
                    <strong>Courses</strong>
                  </p>

                  <p>
                    <strong>-&nbsp;</strong> <strong>Compulsory Courses)</strong>
                    <strong>&nbsp;</strong><strong>for 2.1 and 2.2</strong>
                  </p>

                  <table class="table">
                    <tr>
                      <td>
                        <strong>1. Audit</strong>
                      </td>
                      <td>
                        &nbsp;
                      </td>
                      <td>
                        &nbsp;
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204801
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4801">Academic Writing</a>
                      </td>
                      <td>
                        3(3-0-6)
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <strong>2. Non Audit</strong>
                      </td>
                      <td>
                        &nbsp;
                      </td>
                      <td>
                        &nbsp;
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204802
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4802">Ph.D. Seminar</a>
                      </td>
                      <td>
                        3(3-0-6)
                      </td>
                    </tr>
                  </table>

                  <p>
                    <strong>-&nbsp;</strong> <strong>Electives</strong> <strong>for 2.1&nbsp;
                    and 2.2</strong>
                  </p>

                  <table class="table">
                    <tr>
                      <td>
                        204901
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4901">Selected Topics in
                        Bioinformatics</a>
                      </td>
                      <td nowrap>
                        3(3-0-6)
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204902
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4902">Selected Topics in High
                        Performance Computing and Networking</a>
                      </td>
                      <td>
                        3(3-0-6)
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204903
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4903">Selected Topics in Artificial
                        Intelligence</a>
                      </td>
                      <td>
                        3(3-0-6)
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204904
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4904">Selected Topics in Knowledge
                        Management Technologies</a>
                      </td>
                      <td>
                        3(3-0-6)
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204905
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4905">Selected Topics in New Media in
                        New Society</a>
                      </td>
                      <td>
                        3(3-0-6)
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204906
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4906">Selected Topics in E-learning
                        for Sustainable Development</a>
                      </td>
                      <td>
                        3(3-0-6)
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204907
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4906">Selected Topics in Enterprise
                        Management</a>
                      </td>
                      <td>
                        3(3-0-6)
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204908
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4908">Special Topics 1</a>
                      </td>
                      <td>
                        3(3-0-6)
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204909
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4909">Special Topics 2</a>
                      </td>
                      <td>
                        3(3-0-6)
                      </td>
                    </tr>
                  </table>

                  <p>
                    <strong>-&nbsp; &nbsp;Dissertation</strong>
                  </p>

                  <table class="table">
                    <tr>
                      <td>
                        204703
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4703">Dissertation (Scheme 1.1)</a>
                      </td>
                      <td>
                        60 credit or more than 60 credit
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204703
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4703">Dissertation (Scheme 2.1)</a>
                      </td>
                      <td>
                        45 credit or more than 45 credit
                      </td>
                    </tr>

                    <tr>
                      <td>
                        204703
                      </td>
                      <td>
                        <a href="course_d_des.php?lang=en#4703">Dissertation (Scheme 2.2)</a>
                      </td>
                      <td>
                        <p>
                          60 credit or more than 60 credit
                        </p>
                      </td>
                    </tr>
                  </table>

                  <p>
                    <strong><em>*The meaning of subject code :</em></strong>
                  </p>

                  <p>
                    Subject code consist of 6 digits which meaningful.
                  </p>

                  <table class="table">
                    <tr>
                      <td>
                        <strong>First digit</strong>
                      </td>
                      <td>
                        is Social Technology
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <strong>Second and third digits</strong>
                      </td>
                      <td>
                        is School of Information Technology
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <strong>Fourth digit</strong>
                      </td>
                      <td>
                        is type of subject such as 5 is required subject, 6 is elective subject,
                        7 is Thesis and freedom in research.
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <strong>Fifth and sixth digits &nbsp;&nbsp;</strong>
                      </td>
                      <td>
                        is&nbsp;sequence of subject in each year
                      </td>
                    </tr>
                  </table>

                  <p>
                    You can search more information form=&gt; <a href=
                    "http://www.sut.ac.th/das/t1.htm">http://www.sut.ac.th/das/t1.htm</a>
                  </p>
                </div>
              </div>
            </div>

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
