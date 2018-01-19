<?php
     if(isset($_GET['lang']))
           $_SESSION['lang'] = $_GET['lang'];
     else
           $_SESSION['lang'] = 'th';
?>

<?php
    require('includes/global.php');
    require('includes/' . $_SESSION['lang'] . '/' . basename($_SERVER['PHP_SELF']));
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
    <?php  include('header.php') ?>

    <style type="text/css">

        .hovereffect {
          width: 100%;
          height: 100%;
          float: left;
          overflow: hidden;
          position: relative;
          text-align: center;
          cursor: default;
        }

        .hovereffect .overlay {
          width: 100%;
          height: 100%;
          position: absolute;
          overflow: hidden;
          top: 0;
          left: 0;
          opacity: 0;
          filter: alpha(opacity=0);
          background-color: rgba(0,0,0,0.5);
          -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
          transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
        }

        .hovereffect img {
          display: block;
          position: relative;
          -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
          transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
        }

        .hovereffect h2 {
          text-transform: uppercase;
          color: #fff;
          text-align: center;
          position: relative;
          font-size: 17px;
          background: rgba(0,0,0,0.6);
          -webkit-transform: translatey(-100px);
          -ms-transform: translatey(-100px);
          transform: translatey(-100px);
          -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
          transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
          padding: 10px;
        }

        .hovereffect a.info {
          text-decoration: none;
          display: inline-block;
          text-transform: uppercase;
          color: #fff;
          border: 1px solid #fff;
          background-color: transparent;
          opacity: 0;
          filter: alpha(opacity=0);
          -webkit-transition: all 0.4s ease;
          transition: all 0.4s ease;
          margin: 50px 0 0;
          padding: 7px 14px;
        }

        .hovereffect a.info:hover {
          box-shadow: 0 0 5px #fff;
        }

        .hovereffect:hover img {
          -ms-transform: scale(1.2);
          -webkit-transform: scale(1.2);
          transform: scale(1.2);
        }

        .hovereffect:hover .overlay {
          opacity: 1;
          filter: alpha(opacity=100);
        }

        .hovereffect:hover h2,.hovereffect:hover a.info {
          opacity: 1;
          filter: alpha(opacity=100);
          -ms-transform: translatey(0);
          -webkit-transform: translatey(0);
          transform: translatey(0);
        }

        .hovereffect:hover a.info {
          -webkit-transition-delay: .2s;
          transition-delay: .2s;
        }


    </style>


    <title> <?php if($_SESSION['lang'] == 'th'){echo "สาขาวิชาเทคโนโลยีสารสนเทศ "; }else echo "School of Information Technology";?></title>

</head>

<body>

     <?php include("navbar.php") ?>

    <!-- Thai Content -->
    <?php if($_SESSION['lang'] == 'th'){?>

    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li> -->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

        <!-- S__7356459.jpg -->
            <!-- <div class="item active">
               <div class="fill" style="background-image:url(\'images/S__7356459.jpg\');"></div>
               <div class="carousel-caption">

                    <h3 class="hidden-md hidden-lg"> <span class="glyphicon glyphicon-bookmark"></span> สุรนารีเกมส์ ครั้งที่ 44 </h3>

                    <h2 class="hidden-xs"></h2>
               </div>
            </div> -->

            <!-- <div class="item active">
               <div class="fill" style="background-image:url(\'images/waterbg.jpg\');"></div>
               <div class="carousel-caption">

                    <h3 class="hidden-md hidden-lg"> <span class="glyphicon glyphicon-bookmark"></span> รับสมัครนักศึกษาระดับบัณฑิตศึกษา <br/> ภาค 3/2559 (หลักสูตรปกติ) </h3>

                    <h2 class="hidden-xs"> <span class="glyphicon glyphicon-bookmark"></span> รับสมัครนักศึกษาระดับบัณฑิตศึกษา <br/> ภาค 3/2559 (หลักสูตรปกติ) </h2>
                    <p>- สมัครด้วยตนเอง ถึงวันที่ 13 ม.ค. 60 <br/>
                      - ทางไปรษณีย์ ถึงวันที่ 6 ม.ค. 60   <br/>
                      - ทางอินเตอร์เน็ต ถึงวันที่ 6 ม.ค. 60</p>
                   <a href="http://web.sut.ac.th/ces/%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%AA%E0%B8%A1%E0%B8%B1%E0%B8%84%E0%B8%A3%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%A8%E0%B8%B6%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B8%A3%E0%B8%B0%E0%B8%94%E0%B8%B1%E0%B8%9A-13/"> <button type="button" class="btn btn-info">รายละเอียดเพิ่มเติม...</button> </a>
               </div>
            </div> -->

            <div class="item active">
              <div class="fill" id="imgSlideFirst" ></div>
                <div class="carousel-caption">
                    <h2 id="topicHeaderFirst"></h2>
                    <h5 id="detailHeaderFirst"></h5>
                    <a href="http://web.sut.ac.th/ces/%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%AA%E0%B8%A1%E0%B8%B1%E0%B8%84%E0%B8%A3%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%A8%E0%B8%B6%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B8%A3%E0%B8%B0%E0%B8%94%E0%B8%B1%E0%B8%9A-16/"> <button type="button" class="btn btn-info"> รายละเอียด </button> </a>
                </div>
            </div>

            <div class="item">
                <div class="fill" id="imgSlideSecond" ></div>
                <div class="carousel-caption">
                    <h2 id="topicHeaderSecond"></h2>
                    <h5 id="detailHeaderSecond"></h5>
                    <a href="https://www.facebook.com/billanuwong/media_set?set=a.419013921628910.1073741907.100005609170564&type=3"> <button type="button" class="btn btn-info">ชมภาพบรรยากาศ</button> </a>
                </div>
            </div>



            <!--  <div class="item">
                <div class="fill" style="background-image:url(\'images/news-royal12.jpg\');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                    <p></p>
                </div>
            </div> --!>

            <!-- // <div class="item">
            //     <div class="fill" style="background-image:url(\'http://placehold.it/1900x1080&amp;text=Slide Three\');"></div>
            //     <div class="carousel-caption">
            //         <h2>Caption 3</h2>
            //     </div>
            // </div> --!>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">หลักสูตรที่เปิดสอน</h2>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-education"></i> ระดับปริญญาตรี</h4>
                    </div>
                    <div class="panel-body">

                        <div class="hovereffect thumbnail">
                            <img class="img-responsive" id="imgBachelor" alt="">
                            <div class="overlay">

                             <h2>หลักสูตรที่เปิดสอน <br/> ระดับปริญญาตรี</h2>
                             <a class="info" href="programs_main_bach.php?lang=th">รายละเอียด</a>
                            </div>
                        </div>

                        <!-- <p href="programs_bach.php" class="thumbnail">

                              <img src="images/_MG_5050.jpg" alt="...">
                        </p> -->
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p> -->
                        <a href="programs_main_bach.php?lang=th" class="btn btn-info"> รายละเอียด </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4><i class="glyphicon glyphicon-education"></i> ระดับปริญญาโท </h4>

                    </div>
                    <div class="panel-body">
                        <div class="hovereffect thumbnail">
                            <img class="img-responsive" id="imgMaster" alt="">
                            <div class="overlay">
                             <h2>หลักสูตรที่เปิดสอน <br/> ระดับปริญญาโท</h2>
                                <!--  <a class="info" href="programs.php?lang=th">รายละเอียด</a> -->
                                <a class="info" href="programs_main_postgraduate.php?lang=th">รายละเอียด</a>
                            </div>
                        </div>
                        <!-- <p href="programs_master.php" class="thumbnail">
                              <img src="images/master1.jpg" alt="...">
                        </p> -->
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p> -->
                        <!--  <a href="programs.php?lang=th" class="btn btn-info"> รายละเอียด </a> -->
                        <a href="programs_main_postgraduate.php?lang=th" class="btn btn-info"> รายละเอียด </a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-education"></i> ระดับปริญญาเอก </h4>
                    </div>
                    <div class="panel-body">
                        <!-- <p href="programs_phd.php" class="thumbnail">
                              <img src="images/phd.jpg" alt="...">
                        </p> -->
                        <div class="hovereffect thumbnail">
                            <img class="img-responsive" id="imgDoctor" alt="">
                            <div class="overlay">
                             <h2> หลักสูตรที่เปิดสอน <br/> ระดับปริญญาเอก </h2>
                             <a class="info" href="programs_main_doctor.php?lang=th">รายละเอียด</a>
                             <!-- <a class="info" href="programs_phd.php?lang=th">รายละเอียด</a> -->
                            </div>
                        </div>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p> -->
                        <a href="programs_main_doctor.php?lang=th" class="btn btn-info"> รายละเอียด </a>
                         <!-- <a href="programs_phd_2016.php?lang=th" class="btn btn-info"> รายละเอียด </a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <hr>


         <div class="row">

        <div class="col-md-4"><!-- Left-aligned -->
        <h3>ข่าวสารระดับปริญญาตรี</h3>
          <div class="media"> <!-- news 1 -->
            <div class="media-left">
              <img id="imgInfoBachelorFirst" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
              <h4 class="media-heading" id="topicInfoBachelorFirst"></h4>
              <a class="btn btn-info btn-xs" id="linkInfoBachelorFirst" role="button"> อ่านต่อ » </a>
            </div>
          </div>
          <div class="media"> <!-- news 1 -->
            <div class="media-left">
              <img id="imgInfoBachelorSecond" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
              <h4 class="media-heading" id="topicInfoBachelorSecond"></h4>
              <a class="btn btn-info btn-xs" id="linkInfoBachelorSecond" role="button"> อ่านต่อ » </a>
            </div>
          </div>
          <div class="media"> <!-- news 1 -->
            <div class="media-left">
              <img id="imgInfoBachelorThird" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
              <h4 class="media-heading" id="topicInfoBachelorThird"></h4>
              <a class="btn btn-info btn-xs" id="linkInfoBachelorThird" role="button"> อ่านต่อ » </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
    		<h3>ข่าวสารระดับบัณฑิตศึกษา</h3>
              <div class="media"> <!-- news 1 -->
              <div class="media-left">
                <img id="imgInfoGraduateFirst" class="media-object" style="width:60px">
              </div>
              <div class="media-body">
                <h4 class="media-heading" id="topicInfoGraduateFirst"></h4>
                <a class="btn btn-info btn-xs" id="linkInfoGraduateFirst" role="button"> อ่านต่อ » </a>
              </div>
            </div>
            <div class="media"> <!-- news 1 -->
              <div class="media-left">
                <img id="imgInfoGraduateSecond" class="media-object" style="width:60px">
              </div>
              <div class="media-body">
                <h4 class="media-heading" id="topicInfoGraduateSecond"></h4>
                <a class="btn btn-info btn-xs" id="linkInfoGraduateSecond" role="button"> อ่านต่อ » </a>
              </div>
            </div>
            <div class="media"> <!-- news 1 -->
              <div class="media-left">
                <img id="imgInfoGraduateThird" class="media-object" style="width:60px">
              </div>
              <div class="media-body">
                <h4 class="media-heading" id="topicInfoGraduateThird"></h4>
                <a class="btn btn-info btn-xs" id="linkInfoGraduateThird" role="button"> อ่านต่อ » </a>
              </div>
            </div>
        </div>
        <div class="col-md-4">

        	 <div class="fb-like hidden-lg" data-href="https://www.facebook.com/ITSuranaree/"
                data-layout="box_count"
                data-action="like"
                data-size="large"
                data-show-faces="true"
                data-share="true" style="padding-bottom:10px;">
            </div>

			<div class="fb-page hidden-xs hidden-md hidden-sm"  data-href="https://www.facebook.com/ITSuranaree/" data-tabs="timeline" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ITSuranaree/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ITSuranaree/">สาขาวิชาเทคโนโลยีสารสนเทศ มหาวิทยาลัยเทคโนโลยีสุรนารี</a></blockquote></div>

            </div>

        </div>
      </div>

      <hr>

    </div>
    <!-- /.container -->

    <!-- Footer Information -->
    <footer>
        <div class="informationfooter">
            <div class="container">
                <div class="row">
	                	<div class="col-lg-4 col-sm-4">
								<img src="images/icon_web.png" height="50px" width="50px" style="max-width: 100%; height: auto; padding-top: 10px">

							    <img class="hidden-md hidden-sm hidden-xs hidden-lg" src="images/icon_web.png" height="50px" width="50px" style="max-width: 100%; height: auto;">

							    <h3>ติดต่อเรา</h3>
							    <address>
							        <abbr title="Tel"><span class="glyphicon glyphicon-phone-alt"></span></abbr> 044-224273<br>
							        <abbr title="Fax"><span class="glyphicon glyphicon-print"></span></abbr> 044-224205
							    </address>

							    <address>
							      <strong><span class="glyphicon glyphicon-envelope"></span></strong>
							      <a href="mailto:#">infotech@sut.ac.th</a><br/>
							      <br/>
							      <strong>การร้องเรียน/ข้อเสนอแนะ<br/>
							      <span class="glyphicon glyphicon-envelope"></span></strong><a href="mailto:#"> complaintist@sut.ac.th </a>
							    </address>



						</div>

                        <div class="col-lg-4 col-sm-4">

                        	  <h4 class="hidden-sm hidden-xs"> <span class="glyphicon glyphicon-map-marker "></span> <strong> สาขาวิชาเทคโนโลยีสารสนเทศ </strong></h4>

							    <h5 class="hidden-md hidden-lg"> <span class="glyphicon glyphicon-map-marker "></span> <strong> สาขาวิชาเทคโนโลยีสารสนเทศ </strong> </h5>

							    <address>
							      สำนักวิชาเทคโนโลยีสังคม มหาวิทยาลัยเทคโนโลยีสุรนารี<br>
							      111 ถนนมหาวิทยาลัย ตำบลสุรนารี อำเภอเมือง<br>
							      จังหวัดนครราชสีมา 30000
							    </address>

							    <address class="hidden-lg" >
							      <i class="fa fa-facebook-square fa-2x"></i>
							      <a href="https://www.facebook.com/ITSuranaree/">Facebook: ITSuranaree</a>
							    </address>

                        </div>

                        <div class="col-lg-4 col-sm-4">

                            <!-- <div class="fb-like hidden-lg" data-href="https://www.facebook.com/ITSuranaree/"
                                data-layout="box_count"
                                data-action="like"
                                data-size="large"
                                data-show-faces="true"
                                data-share="true" style="padding-bottom:10px;">
                            </div>

                            <div class="fb-page hidden-xs hidden-md hidden-sm"
                              data-href="https://www.facebook.com/ITSuranaree"
                              data-width="380"
                              data-hide-cover="false"
                              data-show-facepile="false"
                              data-show-posts="false">
                            </div> -->

                        </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- Enghlish Content -->
    <?php }else{ ?>

    <?php }?>

    <!-- /.container -->
    <?php  include('footer.php') ?>







    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>



</body></html>
