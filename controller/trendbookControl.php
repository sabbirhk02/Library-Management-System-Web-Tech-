<?php
if (!isset($_REQUEST['data'])) {
    $response = ['error' => 'no data recieved'];
    echo json_encode($response);
} else {
    include_once('../models/bookModel.php');
    $data = json_decode($_REQUEST['data']);
    echo json_encode(Trend($data));
}
