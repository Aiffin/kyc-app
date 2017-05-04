<?php

session_start();


$url_uid = 'https://kyc-application.herokuapp.com/get_uid/';
$options_uid = array(
  'http' => array(
    'header'  => array(
                        'ACCOUNT-TOKEN: '.$_SESSION['account_token'],
                        ),
    'method'  => 'GET',
  ),
);
$context_uid = stream_context_create($options_uid);
$output_uid = file_get_contents($url_uid, false,$context_uid);
/*echo $output_uid;*/
$arr_uid = json_decode($output_uid,true);

return $arr_uid;


?>
