<?php
     if(isset($_GET['lang']))
           $_SESSION['lang'] = $_GET['lang']; //เก็บค่าของภาษาไว้ใน SESSION
     else
           $_SESSION['lang'] = 'th'; //กำหนดให้ en เป็นค่าเริ่มต้นหากไม่มีการเลือกภาษา
?>