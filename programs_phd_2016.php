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

    <title> <?php if($_SESSION['lang'] == 'th'){echo "IT SUT : หลักสูตรปริญญาเอก"; }else echo "IT SUT : DOCTOR'S DEGREE";?>  </title>
    <?php  include('header.php') ?>

    <style type="text/css">
    .text-nowrap {
      white-space: nowrap;
    }
    </style>

</head>

<body>
    <?php include("navbar.php") ?>

        <?php echo(TEXT_PROGRAM_PHD); //ผลลัพธ์ที่ได้จะแสดงข้อความตามภาษาที่เลือก ?>


    <?php include("footer.php"); ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
