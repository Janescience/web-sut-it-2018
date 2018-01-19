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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT: บทความ"; }else echo "IT SUT: Articles";?>  </title>
    <?php  include('header.php') ?>
</head>

<body>

    <?php include("navbar.php") ?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">  <?php if($_SESSION['lang'] == 'th'){echo "บทความ"; }else echo "Articles";?> 
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
                <div class="container">
                    <div>   
                        <?php
                            require('includes/global.php');
                            require('includes/' . $_SESSION['lang'] . '/' . basename($_SERVER['PHP_SELF'])); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    </div>
    <!-- /.container -->
    <?php include("footer.php"); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
