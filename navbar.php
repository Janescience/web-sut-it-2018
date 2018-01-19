<?php

    $thnab = '<!-- Navigation -->


        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-xs hidden-md" href="index.php?lang=th"><img src="images/icon_web.png" height="26px" width="20px" style="max-width: 100%; height: auto;"></a>
                    <a class="navbar-brand hidden-xs hidden-sm" href="index.php?lang=th">สาขาวิชาเทคโนโลยีสารสนเทศ</p></a>
                    <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="index.php?lang=th"> IT Suranaree </a>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="about.php?lang=th">เกี่ยวกับสาขาวิชา</a>
                        </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">หลักสูตร<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="programs_main_bach.php?lang=th">ระดับปริญญาตรี</a>
                                </li>
                                <li>
                                    <a href="programs_main_postgraduate.php?lang=th">ระดับปริญญาโท</a>
                                </li>
                                <li>
                                    <a href="programs_main_doctor.php?lang=th">ระดับปริญญาเอก</a>
                                </li>
                            </ul>
                        </li>

                         <li>
                            <a href="about_us.php?lang=th">คณาจารย์และบุคลากร</a>
                        </li>
                        <li>
                            <a href="students.php?lang=th">นักศึกษา</a>
                        </li>
                    
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <style>

        .black-ribbon {   position: fixed;   z-index: 9999;   width: 70px; }
        @media only all and (min-width: 768px) { .black-ribbon { width: auto; } }

        .stick-left { left: 0; }
        .stick-right { right: 0; }
        .stick-top { top: 0; }

        .stick-bottom { bottom: 0; }
        </style>

        <!-- Bottom Left -->
        <img src="https://goo.gl/YxzDaS" class="black-ribbon stick-bottom stick-left"/>


     ';


    $ennav = '<!-- Navigation -->



        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-xs" href="index.php?lang=en"><img src="images/icon_web.png" height="26px" width="20px" style="max-width: 100%; height: auto;"></a>
                    <a class="navbar-brand hidden-xs hidden-sm" href="index.php?lang=en"> IT Suranaree </a>
                    <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="index.php?lang=en"> IT Suranaree </a>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="about.php?lang=en">ABOUT IT</a>
                        </li>
                        <li>
                            <a href="programs.php?lang=en">PROGRAMS</a>
                        </li>
                        <li>
                            <a href="admission.php?lang=en">ADMISSIONS</a>
                        </li>
                         <li>
                            <a href="about_us.php?lang=en">FACULTY</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">RESEARCH<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="papers.php?lang=en">RESEARCH</a>
                                </li>
                                <li>
                                    <a href="articles.php?lang=en">ARTICLES</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="students.php?lang=en">STUDENT</a>
                        </li>
                        <li>
                            <a href="alumnai.php?lang=en">ALUMNAI</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <style>

        .black-ribbon {   position: fixed;   z-index: 9999;   width: 70px; }
        @media only all and (min-width: 768px) { .black-ribbon { width: auto; } }

        .stick-left { left: 0; }
        .stick-right { right: 0; }
        .stick-top { top: 0; }

        .stick-bottom { bottom: 0; }
        </style>

        <!-- Bottom Left -->
        <img src="https://goo.gl/YxzDaS" class="black-ribbon stick-bottom stick-left"/>

        ';

        if($_SESSION['lang'] == 'th')
        {
            echo $thnab;
        }else{
            echo $ennav;
        }

?>
