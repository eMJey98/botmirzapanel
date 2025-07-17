<?php
require_once '../../config.php';
require_once '../../functions.php';

$order_id = generateUUID();
$amount   = $_GET['amount'];      // به یورو
$desc     = $_GET['desc'];

$response = createPayPalOrder($amount, $order_id, $desc);

header('Location: '.$response['approve']);
exit;

