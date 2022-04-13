<?php
include('config.php');

$img = $_POST['img'];

$url=$ENDPOINT_SERVER."core-app";

$data = array(
    "subs_key" => $SUBS_KEY,
    "endpoint" => $ENDPOINT,
    "imgData" => $img,
    "ENDPOINT_S3" => $ENDPOINT_S3,
    "ACCESS_KEY" => $ACCESS_KEY,
    "SECRET_KEY" => $SECRET_KEY
);
 
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($curl);

$hasil = array();

$r_json = json_decode($response);

$tipe = "";

foreach($r_json as $rHasil){
    array_push($hasil, $rHasil);
}

$dr = ['status' => 'sukses', 'hasil' => $hasil];

echo json_encode($dr);

?>