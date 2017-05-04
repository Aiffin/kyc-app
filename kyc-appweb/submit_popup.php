<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $names=array();
        $names[0]= "pan_card_1".rand(0, 9999).".jpg";
        $names[1]= "voter_id_1".rand(0, 9999).".jpg";
        $names[2]= "pass_book".rand(0, 9999).".jpg";
        $names[3]= "telephone_bill_1".rand(0, 9999).".jpg";
        $names[4]= "aadhar_card_1".rand(0, 9999).".jpg";
        $names[5]= "passport_1".rand(0, 9999).".jpg";
        $names[6]= "profile".rand(0, 9999).".jpg";


        /*Get Signed Urls*/
        $url = 'https://kyc-application.herokuapp.com/get_signed_url/';
        $data = array('image_list' => [$names[0],$names[1],$names[2],$names[3],$names[4],$names[5],$names[6]]);

        $options = array(
          'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'PUT',
            'content' => json_encode($data),
          ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        /*echo $result;*/
        $arr = json_decode($result,true);

        /*echo $arr[0][0];
        echo $arr[0]['id'];
        echo $arr[1][1];
        echo $arr[1]['id'];*/
    

    $check = getimagesize($_FILES["pan_card_1"]["tmp_name"]);
    if($check !== false) {
        $url_upload = $arr[0][0];
        /*echo $url_upload;*/


        $filename = $_FILES["pan_card_1"]["tmp_name"];
        $file = fopen($filename, "rb");
        $data = fread($file, filesize($filename));

        /*echo $data;*/

        $options_upload = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data,
          ),
        );
        $context_upload  = stream_context_create($options_upload);
        $result_upload = file_get_contents($url_upload, false, $context_upload);
        /*var_dump($result_upload);*/
        $arr_upload = json_decode($result_upload,true);
        /*var_dump($arr_upload);*/

        $pan_card_1_id=$arr[0]['id'];

    } else {
        $pan_card_1_id="";
    }


    $check_voter_id_1 = getimagesize($_FILES["voter_id_1"]["tmp_name"]);
    if($check_voter_id_1 !== false) {
        $url_upload_voter_id_1 = $arr[1][1];
        /*echo $url_upload;*/


        $filename_voter_id_1 = $_FILES["voter_id_1"]["tmp_name"];
        $file_voter_id_1 = fopen($filename_voter_id_1, "rb");
        $data_voter_id_1 = fread($file_voter_id_1, filesize($filename_voter_id_1));

        /*echo $data;*/

        $options_upload_voter_id_1 = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_voter_id_1,
          ),
        );
        $context_upload_voter_id_1  = stream_context_create($options_upload_voter_id_1);
        $result_upload_voter_id_1 = file_get_contents($url_upload_voter_id_1, false, $context_upload_voter_id_1);
        /*var_dump($result_upload_voter_id_1);*/
        $arr_upload_voter_id_1 = json_decode($result_upload_voter_id_1,true);
        /*var_dump($arr_upload_voter_id_1);*/

        $voter_card_id=$arr[1]['id'];

    } else {
        $voter_card_id="";
    }

    $check_pass_book = getimagesize($_FILES["bank_pass_book_1"]["tmp_name"]);
    if($check_pass_book !== false) {
        $url_upload_pass_book = $arr[2][2];
        /*echo $url_upload;*/


        $filename_pass_book = $_FILES["bank_pass_book_1"]["tmp_name"];
        $file_pass_book = fopen($filename_pass_book, "rb");
        $data_pass_book = fread($file_pass_book, filesize($filename_pass_book));

        /*echo $data;*/

        $options_upload_pass_book = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_pass_book,
          ),
        );
        $context_upload_pass_book  = stream_context_create($options_upload_pass_book);
        $result_upload_pass_book = file_get_contents($url_upload_pass_book, false, $context_upload_pass_book);
        /*var_dump($result_upload_pass_book);*/
        $arr_upload_pass_book = json_decode($result_upload_pass_book,true);
        /*var_dump($arr_upload_pass_book);*/

        $pass_book_id=$arr[2]['id'];

    } else {
        $pass_book_id="";
    }

    $check_telephone_bill_1 = getimagesize($_FILES["telephone_bill_1"]["tmp_name"]);
    if($check_telephone_bill_1 !== false) {
        $url_upload_telephone_bill_1 = $arr[3][3];
        /*echo $url_upload;*/


        $filename_telephone_bill_1 = $_FILES["telephone_bill_1"]["tmp_name"];
        $file_telephone_bill_1 = fopen($filename_telephone_bill_1, "rb");
        $data_telephone_bill_1 = fread($file_telephone_bill_1, filesize($filename_telephone_bill_1));

        /*echo $data;*/

        $options_upload_telephone_bill_1 = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_telephone_bill_1,
          ),
        );
        $context_upload_telephone_bill_1  = stream_context_create($options_upload_telephone_bill_1);
        $result_upload_telephone_bill_1 = file_get_contents($url_upload_telephone_bill_1, false, $context_upload_telephone_bill_1);
        /*var_dump($result_upload_telephone_bill_1);*/
        $arr_upload_telephone_bill_1 = json_decode($result_upload_telephone_bill_1,true);
        /*var_dump($arr_upload_telephone_bill_1);*/

        $telephone_bill_1_id=$arr[3]['id'];

    } else {
        $telephone_bill_1_id="";
    }

    $check_aadhar_card_1 = getimagesize($_FILES["aadhar_card_1"]["tmp_name"]);
    if($check_aadhar_card_1 !== false) {
        $url_upload_aadhar_card_1 = $arr[4][4];
        /*echo $url_upload;*/


        $filename_aadhar_card_1 = $_FILES["aadhar_card_1"]["tmp_name"];
        $file_aadhar_card_1 = fopen($filename_aadhar_card_1, "rb");
        $data_aadhar_card_1 = fread($file_aadhar_card_1, filesize($filename_aadhar_card_1));

        /*echo $data;*/

        $options_upload_aadhar_card_1 = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_aadhar_card_1,
          ),
        );
        $context_upload_aadhar_card_1  = stream_context_create($options_upload_aadhar_card_1);
        $result_upload_aadhar_card_1 = file_get_contents($url_upload_aadhar_card_1, false, $context_upload_aadhar_card_1);
        /*var_dump($result_upload_aadhar_card_1);*/
        $arr_upload_aadhar_card_1 = json_decode($result_upload_aadhar_card_1,true);
        /*var_dump($arr_upload_aadhar_card_1);*/

        $aadhar_card_1_id=$arr[4]['id'];

    } else {
        $aadhar_card_1_id="";
    }

    $check_passport_1 = getimagesize($_FILES["passport_1"]["tmp_name"]);
    if($check_passport_1 !== false) {
        $url_upload_passport_1 = $arr[5][5];
        /*echo $url_upload;*/


        $filename_passport_1 = $_FILES["passport_1"]["tmp_name"];
        $file_passport_1 = fopen($filename_passport_1, "rb");
        $data_passport_1 = fread($file_passport_1, filesize($filename_passport_1));

        /*echo $data;*/

        $options_upload_passport_1 = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_passport_1,
          ),
        );
        $context_upload_passport_1  = stream_context_create($options_upload_passport_1);
        $result_upload_passport_1 = file_get_contents($url_upload_passport_1, false, $context_upload_passport_1);
        /*var_dump($result_upload_passport_1);*/
        $arr_upload_passport_1 = json_decode($result_upload_passport_1,true);
        /*var_dump($arr_upload_passport_1);*/

        $passport_1_id=$arr[5]['id'];

    } else {
        $passport_1_id="";
    }

    $check_image = getimagesize($_FILES["image"]["tmp_name"]);
    if($check_image !== false) {
        $url_upload_image = $arr[6][6];
        /*echo $url_upload;*/


        $filename_image = $_FILES["image"]["tmp_name"];
        $file_image = fopen($filename_image, "rb");
        $data_image = fread($file_image, filesize($filename_image));

        /*echo $data;*/

        $options_upload_image = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_image,
          ),
        );
        $context_upload_image  = stream_context_create($options_upload_image);
        $result_upload_image = file_get_contents($url_upload_image, false, $context_upload_image);
        /*var_dump($result_upload_image);*/
        $arr_upload_image = json_decode($result_upload_image,true);
        /*var_dump($arr_upload_image);*/

        $image_id=$arr[6]['id'];

    } else {
        $image_id="";
    }

  $type_of_work='';
  for($j=0;$j<count($_POST['type_of_work']);$j++){
    $type_of_work=$type_of_work.",".$_POST['type_of_work'][$j];
  }
  $type_of_work = ltrim($type_of_work, ',');

  $status='';
  for($j=0;$j<count($_POST['status']);$j++){
    $status=$status.",".$_POST['status'][$j];
  }
  $status = ltrim($status, ',');

  $date='';
  for($j=0;$j<count($_POST['date']);$j++){
    $date=$date.",".$_POST['date'][$j];
  }
  $date = ltrim($date, ',');

  $comment='';
  for($j=0;$j<count($_POST['comment']);$j++){
    $comment=$comment.",".$_POST['comment'][$j];
  }
  $comment = ltrim($comment, ',');

  $url_org = 'https://kyc-application.herokuapp.com/add_new_individual/';
  $options_org = array(
    'http' => array(
      'header'  => array(
                          'UID: '.$_POST['uid'],
                          'NAME: '.$_POST['name1'],
                          'DOB: '.$_POST['date1'],
                          'PROFFESION: '.$_POST['profession'],
                          'PAN: '.$_POST['pan'],
                          'PAN-CARD: '.$pan_card_1_id,
                          'ADDRESS: '.$_POST['address'],
                          'TELEPHONE-BILL: '.$telephone_bill_1_id,
                          'BANK-PASS-BOOK: '.$pass_book_id,
                          'VOTER-ID: '.$voter_card_id,
                          'PASSPORT: '.$passport_1_id,
                          'AADHAR-NO: '.$aadhar_no,
                          'AADHAR-CARD: '.$aadhar_card_1_id,
                          'IMAGE: '.$image_id,
                          'TYPE-OF-WORK: '.$type_of_work,
                          'STATUS: '.$status,
                          'DATE: '.$date,
                          'COMMENT: '.$comment,
                          'ACCOUNT-TOKEN: '.$_SESSION['account_token'],
                          ),
      'method'  => 'GET',
    ),
  );
  $context_org = stream_context_create($options_org);
  $output_org = file_get_contents($url_org, false,$context_org);
  $arr_org = json_decode($output_org,true);

  return $arr_org;
/*update list */
 /*$db = pg_connect("host=ec2-107-20-191-76.compute-1.amazonaws.com port=5432 dbname=deu9vahl80fvjn user=vdvqpruzihrics password=17b3e7a56da97ca021e3da54bb1694bb799849a2b5911014ed6caa05e1e4e02d");
 pg_select($db, 'post_log', $_POST);
 

 $query=pg_query("SELECT id,name FROM users_users");

 $json=array();

while ($student = pg_fetch_array($query)) {
    $json[$student["id"]] = $student["name"];
}

$textval = json_encode($json);
$foo = "var partnames=" . $textval;
file_put_contents('autocomplete-Files/NewEntryValues.js', $foo);
file_put_contents('autocomplete-Files/EditEntryValues.js', $foo);


echo '  <script type="text/javascript" src="autocomplete-Files/jquery.mockjax.js"></script>
        <script type="text/javascript" src="autocomplete-Files/jquery.autocomplete.js"></script>
        <script type="text/javascript" src="autocomplete-Files/NewEntryValues.js"></script>
        <script type="text/javascript" src="autocomplete-Files/Logic_NewEntry.js"></script>
        <script type="text/javascript" src="autocomplete-Files/EditEntryValues.js"></script>
        <script type="text/javascript" src="autocomplete-Files/Logic_EditEntry.js"></script>';

*/


  /*return false;*/

  /*echo "<script>window.history.go(-1)</script>";*/
}
?>
