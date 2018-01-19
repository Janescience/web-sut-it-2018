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

    <title> SUT IT : คณาจารย์และบุคลากร </title>
    <?php  include('header.php') ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <script src="js/about_us.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Mg5Fex-2rEgnmve3DCccIAokXhcqmpA" type="text/javascript"></script>
    <style>

     .avatar {
      width:200px;
      margin: 10px;
      border-radius: 500px;
      -webkit-border-radius: 500px;
      -moz-border-radius: 500px;
    }

    </style>

</head>
<body>

    <?php include("navbar.php") ?>

              <?php echo(TEXT_ABOUT_US); //ผลลัพธ์ที่ได้จะแสดงข้อความตามภาษาที่เลือก ?>

    <?php include("footer.php"); ?>


<!--==================================== Office Hour ====================================================-->

<div class="modal fade" id="officeHourModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Office Hour</h4>
      </div>
      <div class="modal-body">
        <div class="card-block">
        <div class="card">
          <div class="card-block">
            <div class="table-responsive">
              <table class="table table-bordered text-center" >
              <thead >
                <th ><h6>Date / Time</h6></th>
                <th ><h6>08:30-09:00</h6></th>
                <th><h6>09:00-10:00</h6></th>
                <th><h6>10:00-11:00</h6></th>
                <th><h6>11:00-12:00</h6></th>
                <th><h6>13:00-14:00</h6></th>
                <th><h6>14:00-15:00</h6></th>
                <th><h6>15:00-16:00</h6></th>
                <th><h6>16:00-16:30</h6></th>
                </thead>
              <tbody id="list_day" disabled="true">

              <tbody>
            </table>
          </div>
        </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--===========================================================================================================-->

<!--==================================== Google Map ====================================================-->

<div class="modal fade" id="mapModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="messagePassModal">Location</h4>
      </div>
      <div class="modal-body">
        <center>
            <div>
              <div id="map" style="width: 600px; height: 400px; "></div>
            </div>
          </center>
      </div>
      <div class="modal-footer">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--===========================================================================================================-->


</body>
</html>
