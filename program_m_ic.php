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

    <title><?php 

        if($_SESSION['lang'] == 'th'){
            echo "IT SUT : กลุ่มวิชาสื่อดิจิทัล"; 
        }else 
            echo "IT SUT : Digital Media";
    ?></title>

    <?php  include('header.php') ?>

</head>

<body>


    <?php include("navbar.php") ?>

    <?php 

        if($_SESSION['lang'] == 'th'){
            echo ' <!-- Page Content -->
                <div class="container">

                    <!-- Page Heading/Breadcrumbs -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">กลุ่มวิชาสื่อดิจิทัล
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
                            
                        <p>ชื่อหลักสูตร</p>
                        <div>
                        <div>
                        <div>ภาษาไทย วิทยาการสารสนเทศมหาบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ</div>
                        </div>
                        <div>
                        <div>ภาษาอังกฤษ Master of Information Science Program in Information Technology</div>
                        </div>
                        </div>
                        <br>
                        <p>ชื่อปริญญา</p>
                        <div>
                        <div>
                        <div>ภาษาไทย(เต็ม) วิทยาการสารสนเทศมหาบัณฑิต (เทคโนโลยีสารสนเทศ)</div>
                        </div>
                        <div>
                        <div>ภาษาไทย(ย่อ) วส.ม. (เทคโนโลยีสารสนเทศ)</div>
                        </div>
                        <div>
                        <div>ภาษาอังกฤษ(เต็ม) Master of Information Science (Information Technology)</div>
                        </div>
                        <div>
                        <div>ภาษาอังกฤษ(ย่อ) M.I.S. (Information Technology)</div>
                        </div>
                        </div>
                        <p>ปรัชญาและวัตถุประสงค์ของหลักสูตร</p>
                        <p>กลุ่มวิชาสื่อดิจิทัลศึกษามุ่งเน้นการสร้างและเสนอองค์ความรู้ในรูปลักษณ์สื่อใหม่ (new media) ที่ใช้เทคโนโลยี สารสนเทศและการสื่อสารโดยเฉพาะคอมพิวเตอร์ โดยเน้นสาระ (information) ที่สื่อนำเสนอและการปฏิสัมพันธ์ (interaction) ระหว่างมนุษย์และคอมพิวเตอร์ ซึ่งรวมถึงแอนิเมชัน เกมคอมพิวเตอร์และการจำลอง การออกแบบ กราฟิก การเรียนรู้อิเล็กทรอนิกส์ เป็นอาทิ</p>

                        </div>
                    </div>
                    <!-- /.row -->

                    <hr>

                </div>
                <!-- /.container -->';

        }else 
            echo ' <!-- Page Content -->
                <div class="container">

                    <!-- Page Heading/Breadcrumbs -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">กลุ่มวิชาสื่อดิจิทัล
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
                            
                        <p>ชื่อหลักสูตร</p>
                        <div>
                        <div>
                        <div>ภาษาไทย วิทยาการสารสนเทศมหาบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ</div>
                        </div>
                        <div>
                        <div>ภาษาอังกฤษ Master of Information Science Program in Information Technology</div>
                        </div>
                        </div>
                        <br>
                        <p>ชื่อปริญญา</p>
                        <div>
                        <div>
                        <div>ภาษาไทย(เต็ม) วิทยาการสารสนเทศมหาบัณฑิต (เทคโนโลยีสารสนเทศ)</div>
                        </div>
                        <div>
                        <div>ภาษาไทย(ย่อ) วส.ม. (เทคโนโลยีสารสนเทศ)</div>
                        </div>
                        <div>
                        <div>ภาษาอังกฤษ(เต็ม) Master of Information Science (Information Technology)</div>
                        </div>
                        <div>
                        <div>ภาษาอังกฤษ(ย่อ) M.I.S. (Information Technology)</div>
                        </div>
                        </div>
                        <p>ปรัชญาและวัตถุประสงค์ของหลักสูตร</p>
                        <p>กลุ่มวิชาสื่อดิจิทัลศึกษามุ่งเน้นการสร้างและเสนอองค์ความรู้ในรูปลักษณ์สื่อใหม่ (new media) ที่ใช้เทคโนโลยี สารสนเทศและการสื่อสารโดยเฉพาะคอมพิวเตอร์ โดยเน้นสาระ (information) ที่สื่อนำเสนอและการปฏิสัมพันธ์ (interaction) ระหว่างมนุษย์และคอมพิวเตอร์ ซึ่งรวมถึงแอนิเมชัน เกมคอมพิวเตอร์และการจำลอง การออกแบบ กราฟิก การเรียนรู้อิเล็กทรอนิกส์ เป็นอาทิ</p>

                        </div>
                    </div>
                    <!-- /.row -->

                    <hr>

                </div>
                <!-- /.container -->';

    ?>

   

    <?php include("footer.php"); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
