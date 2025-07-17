<?php
require_once '../../config.php';
require_once '../../functions.php';

$orderID = $_GET['token'];
$captured = capturePayPalOrder($orderID);

if($captured){
    // آپدیت دیتابیس + ارسال اکانت به کاربر
}
