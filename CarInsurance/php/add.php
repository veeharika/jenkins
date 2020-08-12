<?php
    if(isset($_POST['add'])){
        $dofbuy = trim($_POST['dofbuy']);
        $cname = trim($_POST['cname']);
        $model = trim($_POST['model']);
        $years = trim($_POST['years']);
        $custname = trim($_POST['custname']);
        $phone = trim($_POST['cphone']);
        $email = trim($_POST['cemail']);
        $amt = trim($_POST['price']);


        require_once "config.php";
        $params = "'{$cname}','{$model}','{$years}','{$amt}','{$dofbuy}','{$custname}','{$phone}','{$email}'";
        insert($params);
        mysqli_close($connection);
        header("Location:../index.php");
    }
?>