<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    include_once "config.php";
    $outgoing_id = mysqli_real_escape_string($con, $_POST['outgoing_id']);
    $ingoing_id = mysqli_real_escape_string($con, $_POST['ingoing_id']);
    $msg = mysqli_real_escape_string($con, $_POST['msg']);

    if(!empty($msg)){
      // ここから
    }else {

    }

  }else {
    header("../login.php");
  }


?>