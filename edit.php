<!DOCTYPE html>

<?php
session_start();
if($_SESSION['login_kyc_app'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/material.indigo-pink.min.css">
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/kyc.css">
  <link rel="stylesheet" type="text/css" href="autocomplete-Files/styles.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="css/fileupload.css">
     <link rel="stylesheet" href="autocomplete-Files/styles.css">

 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style type="text/css">
    span:before{
    content:" "; 
    display:inline-block; 
    width:32px;
}

.mdl-radio {
    position: relative;
    font-size: 14px;
    line-height: 24px;
    display: inline-block;
    box-sizing: border-box;
    font-weight: 500;
    margin: 0;
    padding-left: 0;
}
    </style>
    <script type="text/javascript">

   function setfilename(val)
  {

    reg_certificate_org = document.getElementById('reg_certificate');
    if(reg_certificate_org.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(reg_certificate_org.value);
        if (!isValid) {
          document.getElementById("uploadFile").value = "";
          alert('Registration Certificate: Only image or pdf files allowed!');
          return false;
        }
    }


    var fileName = val.substr(val.lastIndexOf("\\")+1, val.length);
   document.getElementById("uploadFile").value = fileName;
  }

   function panfilename(val)
  {
   

   pan_card_org = document.getElementById('pan_card');
    if(pan_card_org.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(pan_card_org.value);
        if (!isValid) {
          document.getElementById("pan_upload").value = "";
          alert('Pan Card: Only image and pdf files allowed!');
          return false;
        }
    }
     var fileName = val.substr(val.lastIndexOf("\\")+1, val.length);
   document.getElementById("pan_upload").value = fileName;
  }

  function telefilename(val)
  {
    

   telephone_bill_org = document.getElementById('telephone_bill');
    if(telephone_bill_org.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(telephone_bill_org.value);
        if (!isValid) {
          document.getElementById("telephone_upload").value = "";
          alert('Telephone Bill: Only image and pdf files allowed!');
          return false;
        }
    }
    var fileName = val.substr(val.lastIndexOf("\\")+1, val.length);
   document.getElementById("telephone_upload").value = fileName;
  }

  function bankfilename(val)
  {
    

    bank_pass_book_org = document.getElementById('bank_pass_book');
    if(bank_pass_book_org.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(bank_pass_book_org.value);
        if (!isValid) {
          document.getElementById("bank_upload").value = "";
          alert('Bank Pass Book: Only image and pdf files allowed!');
          return false;
        }
    }
    var fileName = val.substr(val.lastIndexOf("\\")+1, val.length);
   document.getElementById("bank_upload").value = fileName;
  }
</script>
<script type="text/javascript"> 
function disablefield(){ 
if (document.getElementById('radios-1').checked == 1){ 
document.getElementById('uploadFile').disabled='disabled'; 
document.getElementById('reg_certificate').disabled='disabled'; 
document.getElementById('uploadFile').value='Choose File';
}else { 
document.getElementById('uploadFile').disabled='';
document.getElementById('reg_certificate').disabled='';  
document.getElementById('uploadFile').value='Choose File'; } 
} 
</script>
  <script type="text/javascript">
    $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload1").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload1").click();
    });
});
  </script>
  <style type="text/css">

@media print {
  body * {
    visibility:hidden;
  }
  .print{
    visibility:visible;
  }
}

    .upload-button {
    padding: 4px;
   /* border: 1px solid black;*/
    border-radius: 5px;
    display: block;
    float: left;
    margin-top:17%;
}
img.print{
    display: block;
    width: 100%;
    height: auto;
    }

.profile-pic {
    max-width: 140px;
    max-height: 140px;
    display: block;
}

.file-upload1 {
    display: none;
}
  </style>  
<link rel="stylesheet" href="css/jquery-ui.css"> 
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 


<!-- Datepicker -->
<link rel="stylesheet" type="text/css" href="css/jquery.datepick.css"> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.plugin.js"></script> 
<script type="text/javascript" src="js/jquery.datepick.js"></script>
<script type="text/javascript">
$(function() {
  $( ".datepicker.pick" ).datepick({dateFormat: 'dd/mm/yyyy',maxDate: 0});
});

// $(function() {
//  $( ".datepicker.picker" ).datepick({dateFormat: 'dd/mm/yyyy',maxDate: 0});
// });

$(function() {
 $( ".datepicker.p" ).datepick({dateFormat: 'dd/mm/yyyy'});
});

</script>

</head>
<!-- <body  style="overflow-y:scroll;background-color:#E8E8E8" >
 --><body style="background-color:#E8E8E8;overflow-x:hidden;">

<?php

if ($_GET['is_user']==0) { 
  $is_user="0";
  $pk_value=$_GET['id'];
}else{
  $is_user="1";
  $pk_value=$_GET['id'];
}

$url_search = 'https://kyc-application.herokuapp.com/search/';
$options_search = array(
  'http' => array(
    'header'  => array(
                  'IS-USER: '.$is_user,
                  'PK: '.$pk_value,
                ),
    'method'  => 'GET',
  ),
);
$context_search = stream_context_create($options_search);
$output_search = file_get_contents($url_search, false,$context_search);
/*echo $output_search;*/
$arr_search = json_decode($output_search,true);
/*echo $arr_search;*/


/*echo count($arr_search['response'][0]['partner_details'])*/
?>

<script type="text/javascript">

  function check_pan_card_user(){
    pan_card_user = document.getElementById('pan_card');
    if(pan_card_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(pan_card_user.value);
        if (!isValid) {
          document.getElementById('pan_card').value="";
          alert('Pan Card: Only image or pdf files allowed!');
          return false;
        }
    }
  }

  function check_telephone_bill_user(){
    telephone_bill_user = document.getElementById('telephone_bill');
    if(telephone_bill_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(telephone_bill_user.value);
        if (!isValid) {
          document.getElementById('telephone_bill').value="";
          alert('Telephone Bill: Only image and pdf files allowed!');
          return false;
        }
    }
  }

  function check_bank_pass_book_user(){
    bank_pass_book_user = document.getElementById('bank_pass_book');
    if(bank_pass_book_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(bank_pass_book_user.value);
        if (!isValid) {
          document.getElementById('bank_pass_book').value="";
          alert('Bank Pass Book: Only image and pdf files allowed!');
          return false;
        }
    }
  }

  function check_voter_id_user(){
    voter_id_user = document.getElementById('voter_id');
    if(voter_id_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(voter_id_user.value);
        if (!isValid) {
          document.getElementById('voter_id').value="";
          alert('Voter Id: Only image and pdf files allowed!');
          return false;
        }
    }
  }

  function check_passport_user(){
    passport_user = document.getElementById('passport');
    if(passport_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(passport_user.value);
        if (!isValid) {
          document.getElementById('passport').value="";
          alert('Passport: Only image and pdf files allowed!');
          return false;
        }
    }
  }

  function check_aadhar_card_user(){
    aadhar_card_user = document.getElementById('aadhar_card');
    if(aadhar_card_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(aadhar_card_user.value);
        if (!isValid) {
          document.getElementById('aadhar_card').value="";
          alert('Aadhar Card: Only image and pdf files allowed!');
          return false;
        }
    }
  }

  function check_image_user(){
    image_user = document.getElementById('image');
    if(image_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(image_user.value);
        if (!isValid) {
          document.getElementById('image').value="";
          alert('Profile Pic: Only image and pdf files allowed!');
          return false;
        }
    }
  }

</script>
<?php

if(isset($_POST["edit_btn"]) and $_GET["is_user"]==0) {

        /*$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }*/

        $names=array();
        $names[0]= "reg_cert".rand(0, 9999).".jpg";
        $names[1]= "pan_card".rand(0, 9999).".jpg";
        $names[2]= "pass_book".rand(0, 9999).".jpg";
        $names[3]= "telephone_bill".rand(0, 9999).".jpg";
        $names[4]= $randomString.rand(0, 9999).".jpg";


        /*Get Signed Urls*/
        $url = 'https://kyc-application.herokuapp.com/get_signed_url/';
        $data = array('image_list' => [$names[0],$names[1],$names[2],$names[3],$names[4]]);

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
    

    $check = getimagesize($_FILES["reg_certificate"]["tmp_name"]);
    if($check !== false) {
        $url_upload = $arr[0][0];
        /*echo $url_upload;*/


        $filename = $_FILES["reg_certificate"]["tmp_name"];
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

        $reg_certificate_id=$arr[0]['id'];

    } else {
        $reg_certificate_id=$arr_search['response'][0]['reg_certificate_details'][0]['pk'];
    }


    $check_pan = getimagesize($_FILES["pan_card"]["tmp_name"]);
    if($check_pan !== false) {
        $url_upload_pan = $arr[1][1];
        /*echo $url_upload;*/


        $filename_pan = $_FILES["pan_card"]["tmp_name"];
        $file_pan = fopen($filename_pan, "rb");
        $data_pan = fread($file_pan, filesize($filename_pan));

        /*echo $data;*/

        $options_upload_pan = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_pan,
          ),
        );
        $context_upload_pan  = stream_context_create($options_upload_pan);
        $result_upload_pan = file_get_contents($url_upload_pan, false, $context_upload_pan);
        /*var_dump($result_upload_pan);*/
        $arr_upload_pan = json_decode($result_upload_pan,true);
        /*var_dump($arr_upload_pan);*/

        $pan_card_id=$arr[1]['id'];

    } else {
        $pan_card_id=$arr_search['response'][0]['pan_card_details'][0]['pk'];;
    }

    $check_pass_book = getimagesize($_FILES["bank_pass_book"]["tmp_name"]);
    if($check_pass_book !== false) {
        $url_upload_pass_book = $arr[2][2];
        /*echo $url_upload;*/


        $filename_pass_book = $_FILES["bank_pass_book"]["tmp_name"];
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
        $pass_book_id=$arr_search['response'][0]['pass_book_details'][0]['pk'];;
    }

    $check_telephone_bill = getimagesize($_FILES["telephone_bill"]["tmp_name"]);
    if($check_telephone_bill !== false) {
        $url_upload_telephone_bill = $arr[3][3];
        /*echo $url_upload;*/


        $filename_telephone_bill = $_FILES["telephone_bill"]["tmp_name"];
        $file_telephone_bill = fopen($filename_telephone_bill, "rb");
        $data_telephone_bill = fread($file_telephone_bill, filesize($filename_telephone_bill));

        /*echo $data;*/

        $options_upload_telephone_bill = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_telephone_bill,
          ),
        );
        $context_upload_telephone_bill  = stream_context_create($options_upload_telephone_bill);
        $result_upload_telephone_bill = file_get_contents($url_upload_telephone_bill, false, $context_upload_telephone_bill);
        /*var_dump($result_upload_telephone_bill);*/
        $arr_upload_telephone_bill = json_decode($result_upload_telephone_bill,true);
        /*var_dump($arr_upload_telephone_bill);*/

        $telephone_bill_id=$arr[3]['id'];

    } else {
        $telephone_bill_id=$arr_search['response'][0]['telephone_bill_details'][0]['pk'];;
    }

  
  $partner_names='';
  for($j=0;$j<count($_POST['partner_names']);$j++){
    $partner_names=$partner_names.",".$_POST['partner_names'][$j];
  }
  $partner_names = ltrim($partner_names, ',');
/*  echo $partner_names;*/
  for($k=0;$k<count($_POST['partner_designations']);$k++){
    $partner_designations=$partner_designations.",".$_POST['partner_designations'][$k];
  }
  $partner_designations = ltrim($partner_designations, ',');
  /*echo $partner_designations;*/

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
    if($_POST['date'][$j] == ""){
      $date_field=" ";
    }else{
      $date_field=$_POST['date'][$j];
    }
    $date=$date.",".$date_field;
  }
  $date = ltrim($date, ',');

  $comment='';
  for($j=0;$j<count($_POST['comment']);$j++){
    if($_POST['comment'][$j] == ""){
      $comment_field=" ";
    }else{
      $comment_field=$_POST['comment'][$j];
    }
    $comment=$comment.",".$comment_field;
  }
  $comment = ltrim($comment, ',');


  $url_org = 'https://kyc-application.herokuapp.com/edit_organization/';
  $options_org = array(
    'http' => array(
      'header'  => array(
                          'PK: '.$_POST['org_id'],
                          'TYPE-OF-ORG: '.$_POST['type_of_org'],
                          'NAME: '.$_POST['name'],
                          'REGISTRATION: '.$_POST['registration'],
                          'REG-CERTIFICATE: '.$reg_certificate_id,
                          'PAN: '.$_POST['pan'],
                          'PAN-CARD: '.$pan_card_id,
                          'ADDRESS: '.$_POST['address'],
                          'TELEPHONE-BILL: '.$telephone_bill_id,
                          'PASS-BOOK: '.$pass_book_id,
                          'NO-OF-PARTNERS: '.$_POST['no_of_partners'],
                          'PARTNER-NAMES: '.$partner_names,
                          'PARTNER-DESIGNATIONS: '.$partner_designations,
                          'TYPE-OF-WORK: '.$type_of_work,
                          'STATUS: '.$status,
                          'DATE: '.$date,
                          'COMMENT: '.$comment,
                          ),
      'method'  => 'GET',
    ),
  );
  $context_org = stream_context_create($options_org);
  $output_org = file_get_contents($url_org, false,$context_org);
  $arr_org = json_decode($output_org,true);

/*  echo $arr_org['pk'];*/

  if($arr_org['status']==200){
    /*echo "<script>alert('Organization Updated')</script>";*/
    
    $string1="<script>window.location.href='search_result.php?is_user=0&id=".$arr_org['pk']."'</script>";
    echo $string1;
  }
}
?>

<?php

if(isset($_POST["edit_btn"]) and $_GET["is_user"]==1) {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $names=array();
        $names[0]= "pan_card".rand(0, 9999).".jpg";
        $names[1]= "voter_id".rand(0, 9999).".jpg";
        $names[2]= "pass_book".rand(0, 9999).".jpg";
        $names[3]= "telephone_bill".rand(0, 9999).".jpg";
        $names[4]= "aadhar_card".rand(0, 9999).".jpg";
        $names[5]= "passport".rand(0, 9999).".jpg";
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
    

    $check = getimagesize($_FILES["pan_card"]["tmp_name"]);
    if($check !== false) {
        $url_upload = $arr[0][0];
        /*echo $url_upload;*/


        $filename = $_FILES["pan_card"]["tmp_name"];
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

        $pan_card_id=$arr[0]['id'];

    } else {
        $pan_card_id=$arr_search['response'][0]['pan_card_details'][0]['pk'];
    }


    $check_voter_id = getimagesize($_FILES["voter_id"]["tmp_name"]);
    if($check_voter_id !== false) {
        $url_upload_voter_id = $arr[1][1];
        /*echo $url_upload;*/


        $filename_voter_id = $_FILES["voter_id"]["tmp_name"];
        $file_voter_id = fopen($filename_voter_id, "rb");
        $data_voter_id = fread($file_voter_id, filesize($filename_voter_id));

        /*echo $data;*/

        $options_upload_voter_id = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_voter_id,
          ),
        );
        $context_upload_voter_id  = stream_context_create($options_upload_voter_id);
        $result_upload_voter_id = file_get_contents($url_upload_voter_id, false, $context_upload_voter_id);
        /*var_dump($result_upload_voter_id);*/
        $arr_upload_voter_id = json_decode($result_upload_voter_id,true);
        /*var_dump($arr_upload_voter_id);*/

        $voter_card_id=$arr[1]['id'];

    } else {
        $voter_card_id=$arr_search['response'][0]['voter_id_details'][0]['pk'];
    }

    $check_pass_book = getimagesize($_FILES["bank_pass_book"]["tmp_name"]);
    if($check_pass_book !== false) {
        $url_upload_pass_book = $arr[2][2];
        /*echo $url_upload;*/


        $filename_pass_book = $_FILES["bank_pass_book"]["tmp_name"];
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
        $pass_book_id=$arr_search['response'][0]['bank_pass_book_details'][0]['pk'];
    }

    $check_telephone_bill = getimagesize($_FILES["telephone_bill"]["tmp_name"]);
    if($check_telephone_bill !== false) {
        $url_upload_telephone_bill = $arr[3][3];
        /*echo $url_upload;*/


        $filename_telephone_bill = $_FILES["telephone_bill"]["tmp_name"];
        $file_telephone_bill = fopen($filename_telephone_bill, "rb");
        $data_telephone_bill = fread($file_telephone_bill, filesize($filename_telephone_bill));

        /*echo $data;*/

        $options_upload_telephone_bill = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_telephone_bill,
          ),
        );
        $context_upload_telephone_bill  = stream_context_create($options_upload_telephone_bill);
        $result_upload_telephone_bill = file_get_contents($url_upload_telephone_bill, false, $context_upload_telephone_bill);
        /*var_dump($result_upload_telephone_bill);*/
        $arr_upload_telephone_bill = json_decode($result_upload_telephone_bill,true);
        /*var_dump($arr_upload_telephone_bill);*/

        $telephone_bill_id=$arr[3]['id'];

    } else {
        $telephone_bill_id=$arr_search['response'][0]['telephone_bill_details'][0]['pk'];
    }

    $check_aadhar_card = getimagesize($_FILES["aadhar_card"]["tmp_name"]);
    if($check_aadhar_card !== false) {
        $url_upload_aadhar_card = $arr[4][4];
        /*echo $url_upload;*/


        $filename_aadhar_card = $_FILES["aadhar_card"]["tmp_name"];
        $file_aadhar_card = fopen($filename_aadhar_card, "rb");
        $data_aadhar_card = fread($file_aadhar_card, filesize($filename_aadhar_card));

        /*echo $data;*/

        $options_upload_aadhar_card = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_aadhar_card,
          ),
        );
        $context_upload_aadhar_card  = stream_context_create($options_upload_aadhar_card);
        $result_upload_aadhar_card = file_get_contents($url_upload_aadhar_card, false, $context_upload_aadhar_card);
        /*var_dump($result_upload_aadhar_card);*/
        $arr_upload_aadhar_card = json_decode($result_upload_aadhar_card,true);
        /*var_dump($arr_upload_aadhar_card);*/

        $aadhar_card_id=$arr[4]['id'];

    } else {
        $aadhar_card_id=$arr_search['response'][0]['aadhar_card_details'][0]['pk'];
    }

    $check_passport = getimagesize($_FILES["passport"]["tmp_name"]);
    if($check_passport !== false) {
        $url_upload_passport = $arr[5][5];
        /*echo $url_upload;*/


        $filename_passport = $_FILES["passport"]["tmp_name"];
        $file_passport = fopen($filename_passport, "rb");
        $data_passport = fread($file_passport, filesize($filename_passport));

        /*echo $data;*/

        $options_upload_passport = array(
          'http' => array(
            'header'  => "Content-type: \r\n",
            'method'  => 'PUT',
            'content' => $data_passport,
          ),
        );
        $context_upload_passport  = stream_context_create($options_upload_passport);
        $result_upload_passport = file_get_contents($url_upload_passport, false, $context_upload_passport);
        /*var_dump($result_upload_passport);*/
        $arr_upload_passport = json_decode($result_upload_passport,true);
        /*var_dump($arr_upload_passport);*/

        $passport_id=$arr[5]['id'];

    } else {
        $passport_id=$arr_search['response'][0]['passport_details'][0]['pk'];
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
        $image_id=$arr_search['response'][0]['image_details'][0]['pk'];
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
    if($_POST['date'][$j] == ""){
      $date_field=" ";
    }else{
      $date_field=$_POST['date'][$j];
    }
    $date=$date.",".$date_field;
  }
  $date = ltrim($date, ',');

  $comment='';
  for($j=0;$j<count($_POST['comment']);$j++){
    if($_POST['comment'][$j] == ""){
      $comment_field=" ";
    }else{
      $comment_field=$_POST['comment'][$j];
    }
    $comment=$comment.",".$comment_field;
  }
  $comment = ltrim($comment, ',');

  $url_org = 'https://kyc-application.herokuapp.com/edit_user/';
  $options_org = array(
    'http' => array(
      'header'  => array(
                          'UID: '.$_POST['uid'],
                          'NAME: '.$_POST['name'],
                          'DOB: '.$_POST['date2'],
                          'PROFFESION: '.$_POST['profession'],
                          'PAN: '.$_POST['pan'],
                          'PAN-CARD: '.$pan_card_id,
                          'ADDRESS: '.$_POST['address'],
                          'TELEPHONE-BILL: '.$telephone_bill_id,
                          'BANK-PASS-BOOK: '.$pass_book_id,
                          'VOTER-ID: '.$voter_card_id,
                          'PASSPORT: '.$passport_id,
                          'AADHAR-NO: '.$_POST['aadhar_no'],
                          'AADHAR-CARD: '.$aadhar_card_id,
                          'IMAGE: '.$image_id,
                          'TYPE-OF-WORK: '.$type_of_work,
                          'STATUS: '.$status,
                          'DATE: '.$date,
                          'COMMENT: '.$comment,
                          ),
      'method'  => 'GET',
    ),
  );
  $context_org = stream_context_create($options_org);
  $output_org = file_get_contents($url_org, false,$context_org);
  $arr_org = json_decode($output_org,true);

  if($arr_org['status']==200){
    /*echo "<script>alert('IndividualUpdated')</script>";*/

    $string1="<script>window.location.href='search_result.php?is_user=1&id=".$arr_org['pk']."'</script>";
    echo $string1;

    /*echo $output_org;*/

  }
}

?>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header style="background-color:#08426a;height:110px;-webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     -moz-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;" class="mdl-layout__header">
    <div class="mdl-layout__header-row" >
    <a href="search.php"><img id="logo1" src="images/green.png"></img></a>
     <span class="mdl-layout-title" id="title3"><?php echo $arr_search['response'][0]['organization_details']['name'] ?><?php echo $arr_search['response'][0]['user_details']['name'] ?></span>
    <span class="mdl-layout-title" id="title1" style="text-align:center">KYCAPP</span>
    <a href="logout.php"><img id="logout" style="" src="images/logout_btn.png"></img></a>
          <!-- Add spacer, to align navigation to the right -->

    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">KYCAPP</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="search.php">Home</a>
          <a class="mdl-navigation__link" href="new.php?is_user=0">New Entry Organization</a>
          <a class="mdl-navigation__link" href="new.php?is_user=1">New Entry Individual</a>
          <a class="mdl-navigation__link" href="missing_reports.php">Missing Reports</a>
        <?php if($_SESSION['is_admin'] == 1){?>
          <a class="mdl-navigation__link" href="admin_page.php">Admin</a>
        <?php }?>
          <a class="mdl-navigation__link" href="">Help</a>
          <a class="mdl-navigation__link" href="">About Us</a>
          <a class="mdl-navigation__link" href="">Contact</a>
        </nav>
      </div>
      </div>

<main class="mdl-layout">

<?php if ($_GET['is_user']==0) { ?>
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data" style="">

<fieldset>

 <input type="hidden" value="<?php echo $arr_search['response'][0]['organization_details']['pk'] ?>" name="org_id" id="org_id"></input>


<!-- Select Basic -->
<div class="form-group" style="margin-top:13%;">
  <label class="col-md-4 control-label" for="type_of_org">Type of Organization:</label>
  <div class="col-md-4">
    <select id="type_of_org" name="type_of_org" class="form-control"  ONCHANGE="enable_disable(this);" style="width: 70%;">
      <option value="<?php echo $arr_search['response'][0]['organization_details']['type_of_org'];?>"><?php echo $arr_search['response'][0]['organization_details']['type_of_org'];?></option>
      <option value="Proprietorship">Proprietorship</option>
      <option value="HUF">HUF</option>
      <option value="Society">Society</option>
      <option value="Partnership">Partnership</option>
      <option value="Trust">Trust</option>
      <option value="Govt entity">Govt entity</option>
      <option value="Bank">Bank</option>
    </select>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textname">Name:</label>  
  <div class="col-md-4">
  <input value="<?php echo $arr_search['response'][0]['organization_details']['name'];?>" id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md" style="width: 70%;">
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="registration">Registration:</label>
  <div class="col-md-4"> 
    

<?php if($arr_search['response'][0]['organization_details']['registration'] == 1 ){
  $checked1="checked";
  $checked2="";
}if($arr_search['response'][0]['organization_details']['registration'] == 0 ){
  $checked1="";
  $checked2="checked";
}
?>

<label class="mdl-radio mdl-js-radio" for="radios-0">
      <input type="radio" name="registration" id="radios-0" value="1" class="mdl-radio__button" checked="checked"  checked="<?php echo $checked1; ?>" onChange="disablefield();">
      Registered
    </label> 
     
     <label class="mdl-radio mdl-js-radio" for="radios-1">
      <input type="radio" name="registration" id="radios-1" value="0" class="mdl-radio__button" checked="<?php echo $checked2; ?>" onChange="disablefield();" >
      Un-Registered
    </label>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="reg_certificate">Registration Certificate:</label>

<div class="col-md-4">
    <input id="uploadFile" class="form-control input-md" value="<?php echo $arr_search['response'][0]['reg_certificate_details'][0]['name']; ?>" readonly style="width: 70%;">
</div>
<div class="col-md-1">
    <div class="fileUpload btn btn-info">
    <label style="font-weight:500;margin-bottom: 2px;">ATTACH</label>
    <input id="reg_certificate" name="reg_certificate" type="file" class="upload" onchange="setfilename(this.value);" /> 
</div>
</div>

<?php
  $url_img_download = 'https://kyc-application.herokuapp.com/download/';
  $options_img_download = array(
    'http' => array(
      'header'  => array(
                          'IMAGE-NAME: '.$arr_search['response'][0]['reg_certificate_details'][0]['name'],
                         ),
      'method'  => 'GET',
    ),
  );
  $context_img_download = stream_context_create($options_img_download);
  $output_img_download = file_get_contents($url_img_download, false,$context_img_download);
  /*echo $output_img_download;*/
  $arr_img_download_reg_org = json_decode($output_img_download,true);
  
?>


<div class="col-md-1">
<a target="_blank" style="" data-toggle="modal" data-target="#myModal1" class="btn btn-info edit">
VIEW</a>
</div>

</div>

<!-- Text input-->
<div class="form-group" style="margin-top:-3%">
  <label class="col-md-4 control-label" for="textinput" style="margin-left:0%">PAN:</label>
  <div class="col-md-4">
  <input id="pan" name="pan" style="margin-left:0%;width: 70%;" pattern="-?[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}?" title="Must be of the form ARLPA0061H"  value="<?php echo $arr_search['response'][0]['organization_details']['pan'] ?>" type="text" placeholder="PAN Card Number" class="form-control input-md"> 
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">PAN Card:</label>
<div class="col-md-4">
    <input id="pan_upload" class="form-control input-md" value="
 <?php echo $arr_search['response'][0]['pan_card_details'][0]['name']; ?>" readonly style="width: 70%;"/>
 </div>
 <div class="col-md-1">
   <div class="fileUpload btn btn-info" style="">
    <label style="font-weight:500;margin-bottom: 2px;">ATTACH</label>
    <input id="pan_card" name="pan_card" type="file" class="upload" onchange="panfilename(this.value);" />
  </div>
  </div>
  
<?php
  $url_img_download_2 = 'https://kyc-application.herokuapp.com/download/';
  $options_img_download_2 = array(
    'http' => array(
      'header'  => array(
                          'IMAGE-NAME: '.$arr_search['response'][0]['pan_card_details'][0]['name'],
                         ),
      'method'  => 'GET',
    ),
  );
  $context_img_download_2 = stream_context_create($options_img_download_2);
  $output_img_download_2 = file_get_contents($url_img_download_2, false,$context_img_download_2);
  /*echo $output_img_download;*/
  $arr_img_download_pan_org = json_decode($output_img_download_2,true);
  
?>
<div class="col-md-1">
<a target="_blank" data-toggle="modal" data-target="#myModal2" class="btn btn-info edit">VIEW</a>
</div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Address:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" style="width: 70%;" id="address" name="address"><?php echo $arr_search['response'][0]['organization_details']['address'] ?></textarea>
  </div>
</div>

<!-- Multiple Checkboxes  and File upload Button -->   

<div class="form-group">
 <label class="col-md-4 control-label" for="checkboxes">Address Proof:</label>
 <div class="col-md-4">
   <label class="checkbox-inline" for="checkboxes-0">
    <?php if($arr_search['response'][0]['telephone_bill_details'][0]['name'] != ''){
      $check_box_select1="checked";
    }else{
      $check_box_select1="";
    }?>
     <input <?php echo $check_box_select1;?> type="checkbox" name="checkboxes" id="checkboxes-0" value="1">Telephone</label>
  </div>

    <div class="col-md-3 bkupload edit" style=""> 
    <input id="telephone_upload" style="" value="<?php echo $arr_search['response'][0]['telephone_bill_details'][0]['name']; ?>">
</div>
<div class="col-md-1">
    <div class="fileUpload btn btn-info" style="">
    <label style="font-weight:500;margin-bottom: 2px;">ATTACH</label>
    <input id="telephone_bill" name="telephone_bill" type="file" class="upload"  value="<?php echo $arr_search['response'][0]['organization_details']['telephone'] ?>" onchange="telefilename(this.value);" />
 </div>
 </div>
<?php
  $url_img_download_3 = 'https://kyc-application.herokuapp.com/download/';
  $options_img_download_3 = array(
    'http' => array(
      'header'  => array(
                          'IMAGE-NAME: '.$arr_search['response'][0]['telephone_bill_details'][0]['name'],
                         ),
      'method'  => 'GET',
    ),
  );
  $context_img_download_3 = stream_context_create($options_img_download_3);
  $output_img_download_3 = file_get_contents($url_img_download_3, false,$context_img_download_3);
  /*echo $output_img_download;*/
  $arr_img_download_tel_org = json_decode($output_img_download_3,true);
  
?>
<div class="col-md-1">
<a target="_blank" data-toggle="modal" data-target="#myModal3" class="btn btn-info edit" style="">VIEW</a>
</div> 
</div>

<div class="form-group">
 <label class="col-md-4 control-label" for="checkboxes"></label>
 <div class="col-md-4"> 
   <label class="checkbox-inline" for="checkboxes-0">
     <?php if($arr_search['response'][0]['pass_book_details'][0]['name'] != ''){
      $check_box_select2="checked";
      
     }else{
      $check_box_select2="";
    }?>
     <input <?php echo $check_box_select2;?> type="checkbox" name="checkboxes" id="checkboxes-0" value="1"/>Bank Passbook</label>
  
  </div>
<div class="col-md-3 teleupload edit" style=""> 
<input id="bank_upload" style="" value="
<?php echo $arr_search['response'][0]['pass_book_details'][0]['name']; ?>">
</div>
<div class="col-md-1">
    <div class="fileUpload btn btn-info " style="">
    <label style="font-weight:500;margin-bottom: 2px;">ATTACH</label>
    <input id="bank_pass_book" name="bank_pass_book" type="file" class="upload" onchange="bankfilename(this.value);" />
</div>
</div>
<?php
  $url_img_download_4 = 'https://kyc-application.herokuapp.com/download/';
  $options_img_download_4 = array(
    'http' => array(
      'header'  => array(
                          'IMAGE-NAME: '.$arr_search['response'][0]['pass_book_details'][0]['name'],
                         ),
      'method'  => 'GET',
    ),
  );
  $context_img_download_4 = stream_context_create($options_img_download_4);
  $output_img_download_4 = file_get_contents($url_img_download_4, false,$context_img_download_4);
  /*echo $output_img_download;*/
  $arr_img_download_pass_org = json_decode($output_img_download_4,true);
  
?>
<div class="col-md-1">
<a target="_blank" data-toggle="modal" data-target="#myModal4" class="btn btn-info edit">VIEW</a>
</div>
</div>

<!-- Added Partner 1 -->
<label for="comment" style="margin-left: 334px;font-size: 17px;"> Partner 1: </label>



<?php for($x=0;$x < count($arr_search['response'][0]['partner_details']); $x++){?>


<div class="present_fields">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name:</label>  

  <div class="col-md-4 col-sm-2 col-2">
  <input id="partner_names[]" value="<?php echo $arr_search['response'][0]['partner_details'][$x]['detail'][0]['name'] ?>" name="partner_names[]" type="text" placeholder="Enter Full Name" class="form-control input-md editentry partner_names" style="width: 70%;">
  </div>

  <div class="col-md-2 col-sm-2 col-2">
    <a href="new_user_popup.php" style="color:white" target="_blank" data-toggle="modal" data-target="#myModal" class="btn btn-info new_entry_btn edit_modal" >
       New Entry
    </a>
  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="designation">Designation: </label>
  <div class="col-md-2">
    <select style="" id="partner_designations[]" name="partner_designations[]" class="form-control partner_designations">
      <option value="<?php echo $arr_search['response'][0]['partner_details'][$x]['detail'][0]['designation'] ?>"><?php echo $arr_search['response'][0]['partner_details'][$x]['detail'][0]['designation'] ?></option>
      <option value="Managing Partner">Managing Partner</option>
      <option value="Manager">Manager</option>
      <option value="Other">Other</option>
    </select>
  </div>
  <div class="col-md-2">
     <input id="textinput" style="" name="textinput" type="text" placeholder="Specify if Other" class="form-control input-md partner_others">
  </div>
</div>


 <a href="" class="remove_field_present" style=""><img src="images/del24.png"></a>

</div>


<?php }?>

<div class="form-group">
<center>
<div class="col-md-2 col-sm-2 col-2">
    <div class="input_fields_wrap">
         <button class="add_field_button btn partner_btn" onclick="incrementValue()" style="">Add New Partners</button>
         <div>
         <input type="text" name="mytext[]" hidden="" ></div>
</div>
</div>
</div>
<br>


<?php for($q=0;$q<count($arr_search['response'][0]['add_info']);$q++){?>

<div class="present_fields_1">
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Type of work:</label>
  <div class="col-md-4">
    <select id="type_of_work[]" name="type_of_work[]" class="form-control" style="width: 70%;">
      <option value="Audit Report">Audit Report</option>
      <option value="ITR filing">ITR filing</option>
      <option value="VAT Filing">VAT Filing</option>
      <option value="Accounting">Accounting</option>
      <option value="Registration">Registration</option>
      <option value="Certification">Certification</option>
      <option value="Others">Others</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Status:</label>
  <div class="col-md-4">
    <select id="status" name="status[]" class="form-control" style="width: 70%;">
      <option value="<?php echo $arr_search['response'][0]['add_info'][$q]['status']; ?>"><?php echo $arr_search['response'][0]['add_info'][$q]['status']; ?></option>  
      <option value="Pending">Pending</option>
      <option value="Work in process">Work in process</option>
      <option value="Completed">Completed</option>
    </select>
  </div>
</div>
<!--date-->
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label" style="margin-left:28.5%;">DATE:</label>
  <div class="col-10">
    <input class="form-control datepicker p" id="date[]" name="date[]" value="<?php echo $arr_search['response'][0]['add_info'][$q]['date']; ?>"   type="text" readonly style="width: 70%;">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Comment:</label>  
  <div class="col-md-4">
  <input id="commentss" name="comment[]" value="<?php echo $arr_search['response'][0]['add_info'][$q]['comment']; ?>" type="text" placeholder="" class="form-control input-md" style="width: 70%;" >
    
  </div>
</div>

<a href="#" class="remove_field_pre1" style="">
 <img src="images/del24.png">
</a>

</div>


<?php  }?>

<script type="text/javascript">
 $(document).ready(function () {
        $("#status").click(function () {

            if ($("#status").val() == "Completed") {
                $("#commentss").attr("required", "required");
            }
            else
              $("#commentss").attr("required", false);
        });
});
</script>


<div class="form-group">

<div class="col-md-8 col-sm-12 col-24">
    <div class="input_fields" style="color:black">
         <button class="add_field btn " onclick="incrementValue()" style="">Add More</button>
         <div>
         <input type="text" name="mytextt[]" hidden="" ></div>
</div>
</div>
</div>


<!-- Buttons SAve and Cancel -->
<div class="form-group">
  <label class="col-md-4 control-label" for="save_btn"></label>
  <div class="col-md-8">
    <button  onclick="return check_file_type_org()" id="edit_btn" name="edit_btn" type="submit" class="btn btn-success" style="width: 10em;">Save</button><span><span></span></span>
    <button onclick="goBack()" class="btn btn-warning cancel" style=""><a style="color:white" href="search.php">Cancel</a></button>
  </div>
</div>
</fieldset>
</form>

<script type="text/javascript">

$('.partner_names').attr('disabled', true);
$('.partner_designations').attr('disabled', true);
$('.partner_others').attr('disabled', true);
$('.partner_btn').attr('disabled', true);
$('.new_entry_btn').attr('disabled', true);

function enable_disable(that){

  /*alert(that.value);*/
  if(that.value != "Partnership"){
      $('.partner_names').attr('disabled', true);
      $('.partner_designations').attr('disabled', true);
      $('.partner_others').attr('disabled', true);
      $('.partner_btn').attr('disabled', true);
      $('.new_entry_btn').attr('disabled', true);
  }else{
      $('.partner_names').attr('disabled', false);
      $('.partner_designations').attr('disabled', false);
      $('.partner_others').attr('disabled', false);
      $('.partner_btn').attr('disabled', false);
      $('.new_entry_btn').attr('disabled', false);
  }
}
</script>



<script type="text/javascript">

$('.partner_names').attr('disabled', true);
$('.partner_designations').attr('disabled', true);
$('.partner_others').attr('disabled', true);
$('.partner_btn').attr('disabled', true);
$('.new_entry_btn').attr('disabled', true);

function enable_disable(that){

  /*alert(that.value);*/
  if(that.value != "Partnership"){
      $('.partner_names').attr('disabled', true);
      $('.partner_designations').attr('disabled', true);
      $('.partner_others').attr('disabled', true);
      $('.partner_btn').attr('disabled', true);
      $('.new_entry_btn').attr('disabled', true);
  }else{
      $('.partner_names').attr('disabled', false);
      $('.partner_designations').attr('disabled', false);
      $('.partner_others').attr('disabled', false);
      $('.partner_btn').attr('disabled', false);
      $('.new_entry_btn').attr('disabled', false);
  }
}
</script>



<script type="text/javascript">

$('.partner_names').attr('disabled', true);
$('.partner_designations').attr('disabled', true);
$('.partner_others').attr('disabled', true);
$('.partner_btn').attr('disabled', true);
$('.new_entry_btn').attr('disabled', true);

function enable_disable(that){

  /*alert(that.value);*/
  if(that.value != "Partnership"){
      $('.partner_names').attr('disabled', true);
      $('.partner_designations').attr('disabled', true);
      $('.partner_others').attr('disabled', true);
      $('.partner_btn').attr('disabled', true);
      $('.new_entry_btn').attr('disabled', true);
  }else{
      $('.partner_names').attr('disabled', false);
      $('.partner_designations').attr('disabled', false);
      $('.partner_others').attr('disabled', false);
      $('.partner_btn').attr('disabled', false);
      $('.new_entry_btn').attr('disabled', false);
  }
}
</script>


<form method="post" id="deleteForm" action="search.php" style="text-align:center">
<input type="hidden" name="pk_delete" id="pk_delete" value="<?php echo $_GET['id'] ?>"></input>  
<input type="hidden" name="is_user_delete" id="is_user_delete" value="<?php echo $_GET['is_user'] ?>"></input>  
<button type="submit" onclick="return ConfirmDelete()" style="" class="btn btn-warning delete">
  Delete
</button>
</form>

<script type="text/javascript">
  function ConfirmDelete()
  {
    var x = confirm("Are you sure you wish to delete this entry?");
    if (x)
      return true;
    else
      return false;
   }
</script>  

<script type="text/javascript">

if(document.getElementById('type_of_org').value == "Partnership"){
  $('.partner_names').attr('readonly', false);
  $('.partner_designations').attr('readonly', false);
  $('.partner_others').attr('readonly', false);
  $('.partner_btn').attr('readonly', false);
  $('.new_entry_btn').attr('readonly', false);
}else{
  $('.partner_names').attr('readonly', true);
  $('.partner_designations').attr('readonly', true);
  $('.partner_others').attr('readonly', true);
  $('.partner_btn').attr('readonly', true);
  $('.new_entry_btn').attr('readonly', true);
}

function enable_disable(that){
  /*alert(that.value);*/
  if(that.value != "Partnership"){
      $('.partner_names').attr('readonly', true);
      $('.partner_designations').attr('readonly', true);
      $('.partner_others').attr('readonly', true);
      $('.partner_btn').attr('readonly', true);
      $('.new_entry_btn').attr('readonly', true);
  }else{
      $('.partner_names').attr('readonly', false);
      $('.partner_designations').attr('readonly', false);
      $('.partner_others').attr('readonly', false);
      $('.partner_btn').attr('readonly', false);
      $('.new_entry_btn').attr('readonly', false);
  }
}
</script>

<?php } else { ?>
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
<fieldset>

<?php
  $url_img = 'https://kyc-application.herokuapp.com/download/';
  $options_img= array(
    'http' => array(
      'header'  => array(
                          'IMAGE-NAME: '.$arr_search['response'][0]['image_details'][0]['name'],
                         ),
      'method'  => 'GET',
    ),
  );
  $context_img = stream_context_create($options_img);
  $output_img = file_get_contents($url_img, false,$context_img);
  echo $output_img_download;
  $arr_img = json_decode($output_img,true);
  /*echo $arr_img[0]['url'];*/
  
  
?>

<div class="form_margin">

<?php if($arr_img[0]['url']=="" || (strpos($arr_img[0]['url'], 'https://kyc-app-bucket.s3.amazonaws.com/?Signature') !== false)){
  $img_lnk="images/no_image.jpg";
}else{
    $img_lnk=$arr_img[0]['url'];
}?>
 <input type="hidden" value="<?php echo $arr_search['response'][0]['user_details']['pk'] ?>" name="org_id" id="org_id"></input>


<img class="profile-pic" style="margin-left:77%;position:absolute;z-index:2;" src="<?php echo $img_lnk; ?>" />
<div class="upload-button" style="">Upload Image</div>
<input  onchange="check_image_user()" id="image"  name="image" class="file-upload1" style="position:absolute;z-index:-2;margin-left:46%;margin-top:16%;display:none" type="file"></input>
</div>


<!-- <input name="image" id="image" class="file-upload1" style="position:absolute;z-index:-2;margin-left:46%;margin-top:16%;" type="file"> -->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">UID:</label>  
  <div class="col-md-4">
  <input id="uid" name="uid" type="text" value="<?php echo $arr_search['response'][0]['user_details']['uid'] ?>" placeholder="" class="form-control input-md" style="width: 70%;" disabled>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name:</label>  
  <div class="col-md-4">
  <input id="name" name="name" value="<?php echo $arr_search['response'][0]['user_details']['name'] ?>" type="text" placeholder="" class="form-control input-md" style="width: 70%;">
    
  </div>
</div>

<!--date-->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">DOB:</label>  
  <div class="col-md-4">
  <input id="date2" name="date2" value="<?php echo $arr_search['response'][0]['user_details']['dob'] ?>" type="text" placeholder="" class="form-control input-md datepicker picker" readonly style="width: 70%;" > 
  </div><img src="/images/calendar.png" style="margin-left: -9%;">
  <script type="text/javascript">
    $(function() {
 $( ".datepicker.picker" ).datepick({
            maxDate: '0', 
            beforeShow : function()
            {
                jQuery( this ).datepicker('option','maxDate', jQuery('#end_date').val() );
            },
            altFormat: "dd/mm/yy", 
            dateFormat: 'dd/mm/yy'

    
});
});
  </script>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Profession:</label>
  <div class="col-md-4">
    <select id="profession" name="profession" class="form-control" style="width: 70%;">
      <option value="<?php echo $arr_search['response'][0]['user_details']['proffesion'] ?>"><?php echo $arr_search['response'][0]['user_details']['proffesion'] ?></option>
      <optgroup label="Academics">
        <option value="Professors">Professors</option>
        <option value="Teachers">Teachers</option>
      </optgroup>
      <optgroup label="Cultural">
      <option value="Clergy">Clergy</option>
      <option value="Philosophers">Philosophers</option>
      </optgroup>

      <optgroup label="Medical">
        <option value="Anesthesiologists">Anesthesiologists</option>
        <option value="Audiologists">Audiologists</option>
        <option value="Chiropractors">Chiropractors</option>
        <option value="Dentists">Dentists</option>
        <option value="Dietitians">Dietitians</option>
        <option value="Nurses">Nurses</option>
        <option value="Occupational therapists">Occupational therapists</option>
        <option value="Pharmacists">Pharmacists</option>
      </optgroup>

      <optgroup label="Operating Department Practitioner">
        <option value="Optometrists">Optometrists</option>
        <option value="Physical therapists">Physical therapists</option>
        <option value="Physicians">Physicians</option>
        <option value="Podiatrists">Podiatrists</option>
        <option value="Psychologists">Psychologists</option>
        <option value="Radiographers">Radiographers</option>
        <option value="Speech-language pathologists">Speech-language pathologists</option>
        <option value="Surgeons">Surgeons</option>
        <option value="Veterinarians">Veterinarians</option>
        <option value="Gynaecologists">Gynaecologists</option>
      </optgroup>

      <optgroup label="Industry">
        <option value="Accountants">Accountants</option>
        <option value="Actuaries">Actuaries</option>
        <option value="Architects">Architects</option>
        <option value="Engineers">Engineers</option>
        <option value="Linguistics - Translators">Linguistics - Translators</option>
        <option value="Linguistics - Interpreters">Linguistics - Interpreters</option>
        <option value="Surveyors">Surveyors</option>
        <option value="Urban Planners">Urban Planners</option>

      </optgroup>

      <optgroup label="Transport">Transport
      <option value="Air traffic controllers">Air traffic controllers</option>
      <option value="Aircraft pilots">Aircraft pilots</option>
      <option value="Sea captains">Sea captains</option>
      </optgroup>

      <optgroup label="Public services">Public services
      <option value="Lawyers">Lawyers</option>
      <option value="Social Workers">Social Workers</option>
      <option value="Health inspector">Health inspector</option>
      <option value="Park ranger">Park ranger</option>
      <option value=" Police officer"> Police officer</option>
      <option value="Military officers">Military officers</option>

      </optgroup>

      <optgroup label="Science">
        <option value="Scientists - Astronomers">Scientists - Astronomers</option>
        <option value="Scientists - Biologists">Scientists - Biologists</option>
        <option value="Scientists - Biologists - Botanists">Scientists - Biologists - Botanists</option>
        <option value="Scientists - Biologists - Ecologists">Scientists - Biologists - Ecologists</option>
        <option value="Scientists - Biologists - Geneticists">Scientists - Biologists - Geneticists</option>
        <option value="Scientists - Biologists - Immunologists">Scientists - Biologists - Immunologists</option>
        <option value="Scientists - Biologists - Paleontologists">Scientists - Biologists - Paleontologists</option>
        <option value="Scientists - Biologists - Pharmacologists">Scientists - Biologists - Pharmacologists</option>
        <option value="Scientists - Biologists - Virologists">Scientists - Biologists - Virologists</option>
        <option value="Scientists - Biologists - Zoologists">Scientists - Biologists - Zoologists</option>
        <option value="Scientists - Chemists">Scientists - Chemists</option>
        <option value="Scientists - Geologists">Scientists - Geologists</option>
        <option value="Scientists - Meteorologists">Scientists - Meteorologists</option>
        <option value="Scientists - Neuroscientists">Scientists - Neuroscientists</option>
        <option value="Scientists - Oceanographers">Scientists - Oceanographers</option>
        <option value="Scientists - Physicists">Scientists - Physicists</option>
      </optgroup>
      <option value="Other">Other</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Address:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address" value="<?php echo $arr_search['response'][0]['user_details']['address'] ?>" style="width: 70%;"><?php echo $arr_search['response'][0]['user_details']['address'] ?></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">PAN:</label>  
  <div class="col-md-4">
  <input pattern="-?[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}?" title="Must be of the form ARLPA0061H" id="pan" name="pan" value="<?php echo $arr_search['response'][0]['user_details']['pan'] ?>" type="text" placeholder="" class="form-control input-md" style="width: 70%;" required>
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">PAN card:</label>

<div class="col-md-4">
<input id="pan_upload" class="form-control input-md" value="<?php echo $arr_search['response'][0]['pan_card_details'][0]['name']; ?>" style="width: 70%;">
</div>
<div class="col-md-1">
<input  onchange="check_pan_card_user()" id="pan_card" name="pan_card" style="" value="<?php echo $_POST['pan_card'] ?>" class="input-file" type="file">
</div>
<?php
  $url_img_download = 'https://kyc-application.herokuapp.com/download/';
  $options_img_download = array(
    'http' => array(
      'header'  => array(
                          'IMAGE-NAME: '.$arr_search['response'][0]['pan_card_details'][0]['name'],
                         ),
      'method'  => 'GET',
    ),
  );
  $context_img_download = stream_context_create($options_img_download);
  $output_img_download = file_get_contents($url_img_download, false,$context_img_download);
  /*echo $output_img_download;*/
  $arr_img_download_pan_user = json_decode($output_img_download,true);
  
?>
<div class="col-md-1">
<a target="_blank" data-toggle="modal" data-target="#myModal5" class="btn btn-info user" >VIEW</a>
</div>
</div>

<!--address proof-->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Address Proof</label>

<div class="col-md-1">
<label class="checkbox-inline" for="checkboxes-0">

<?php if($arr_search['response'][0]['telephone_bill_details'][0]['name'] != ''){
      $check_box_select1="checked";
    }else{
      $check_box_select1="";
    }?>

 <input <?php echo $check_box_select1 ?> type="checkbox" name="checkboxes" id="checkboxes-0" value="1">Telephone</label>
</div>

<div class="col-md-3">
<input value="<?php echo $arr_search['response'][0]['telephone_bill_details'][0]['name']; ?>">
</div>
<div class="col-md-1">
<input onchange="check_telephone_bill_user()" id="telephone_bill"  value="<?php echo $_POST['telephone_bill'] ?>" style="" name="telephone_bill" class="input-file" type="file">     
</div>
<?php
  $url_img_download_2 = 'https://kyc-application.herokuapp.com/download/';
  $options_img_download_2 = array(
    'http' => array(
      'header'  => array(
                          'IMAGE-NAME: '.$arr_search['response'][0]['telephone_bill_details'][0]['name'],
                         ),
      'method'  => 'GET',
    ),
  );
  $context_img_download_2 = stream_context_create($options_img_download_2);
  $output_img_download_2 = file_get_contents($url_img_download_2, false,$context_img_download_2);
  /*echo $output_img_download;*/
  $arr_img_download_tel_user = json_decode($output_img_download_2,true);
  
?>
<div class="col-md-1">
<a target="_blank" data-toggle="modal" data-target="#myModal6" class="btn btn-info user" style="">VIEW</a>
</div>
</div>
    <div class="form-group">
 <label class="col-md-4 control-label" for="checkboxes"></label>
 <div class="col-md-1">
   <label class="checkbox-inline" for="checkboxes-0">
   <?php if($arr_search['response'][0]['bank_pass_book_details'][0]['name'] != ''){
      $check_box_select2="checked";
    }else{
      $check_box_select2="";
    }?>
     <input <?php echo $check_box_select2 ?> type="checkbox" name="checkboxes" id="checkboxes-0" value="1">Bank Passbook</label>

 </div>

 <div class="col-md-3">
 <input value="<?php echo $arr_search['response'][0]['bank_pass_book_details'][0]['name']; ?>">
</div>

<div class="col-md-1">
<input onchange="check_bank_pass_book_user()" id="bank_pass_book"  value="<?php echo $_POST['bank_pass_book'] ?>" style="" name="bank_pass_book" class="input-file" type="file">     
 </div>
<?php
  $url_img_download_3 = 'https://kyc-application.herokuapp.com/download/';
  $options_img_download_3= array(
    'http' => array(
      'header'  => array(
                          'IMAGE-NAME: '.$arr_search['response'][0]['bank_pass_book_details'][0]['name'],
                         ),
      'method'  => 'GET',
    ),
  );
  $context_img_download_3 = stream_context_create($options_img_download_3);
  $output_img_download_3 = file_get_contents($url_img_download_3, false,$context_img_download_3);
  /*echo $output_img_download;*/
  $arr_img_download_pass_user = json_decode($output_img_download_3,true);
  
?>
<div class="col-md-1">
<a target="_blank" data-toggle="modal" data-target="#myModal7" class="btn btn-info user" style="">VIEW</a>
</div>
</div>

<!--ID pROOF-->

<!--address proof-->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">ID Proof</label>
  <div class="col-md-1">
   <label class="checkbox-inline" for="checkboxes-0">

   <?php if($arr_search['response'][0]['voter_id_details'][0]['name'] != ''){
      $check_box_select3="checked";
    }else{
      $check_box_select3="";
    }?>

     <input <?php echo $check_box_select3; ?> type="checkbox" name="checkboxes" id="checkboxes-0" value="1">voter ID</label>
   </div>

    <div class="col-md-3">
    <input value="<?php echo $arr_search['response'][0]['voter_id_details'][0]['name']; ?>">
    </div>
    <div class="col-md-1">
  <input onchange="check_voter_id_user()" id="voter_id" value="<?php echo $_POST['voter_id'] ?>" style="" name="voter_id" class="input-file" type="file">  
  </div>   
  <?php
    $url_img_download_4 = 'https://kyc-application.herokuapp.com/download/';
    $options_img_download_4= array(
      'http' => array(
        'header'  => array(
                            'IMAGE-NAME: '.$arr_search['response'][0]['voter_id_details'][0]['name'],
                           ),
        'method'  => 'GET',
      ),
    );
    $context_img_download_4 = stream_context_create($options_img_download_4);
    $output_img_download_4= file_get_contents($url_img_download_4, false,$context_img_download_4);
    /*echo $output_img_download;*/
    $arr_img_download_voter_user = json_decode($output_img_download_4,true);
    
  ?>
    <div class="col-md-1">
<a target="_blank" style="" data-toggle="modal" data-target="#myModal8" class="btn btn-info user">VIEW</a>
</div>

</div>


    <div class="form-group">
 <label class="col-md-4 control-label" for="checkboxes"></label>
 <div class="col-md-1">
   <label class="checkbox-inline" for="checkboxes-0">
   <?php if($arr_search['response'][0]['passport_details'][0]['name'] != ''){
      $check_box_select4="checked";
    }else{
      $check_box_select4="";
    }?>
     <input <?php echo $check_box_select4; ?> type="checkbox" name="checkboxes" id="checkboxes-0" value="1">Passport</label>
  </div>

   <div class="col-md-3">
   <input value="<?php echo $arr_search['response'][0]['passport_details'][0]['name']; ?>">
  </div>

  <div class="col-md-1">
  <input  onchange="check_passport_user()" id="passport" value="<?php echo $_POST['passport'] ?>" style="" name="passport" class="input-file" type="file">     
   </div>

  <?php
    $url_img_download_5 = 'https://kyc-application.herokuapp.com/download/';
    $options_img_download_5= array(
      'http' => array(
        'header'  => array(
                            'IMAGE-NAME: '.$arr_search['response'][0]['passport_details'][0]['name'],
                           ),
        'method'  => 'GET',
      ),
    );
    $context_img_download_5 = stream_context_create($options_img_download_5);
    $output_img_download_5= file_get_contents($url_img_download_5, false,$context_img_download_5);
    /*echo $output_img_download;*/
    $arr_img_download_passport_user = json_decode($output_img_download_5,true);
    
  ?>
  <div class="col-md-1">
<a target="_blank" style="" data-toggle="modal" data-target="#myModal9" class="btn btn-info user">VIEW</a>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Adhar card No.</label>  
  <div class="col-md-4">
  <input id="aadhar_no" name="aadhar_no" value="<?php echo $arr_search['response'][0]['user_details']['aadhar_no'] ?>" type="text" placeholder="" class="form-control input-md" style="width: 70%;">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Adhar card:</label>

  <div class="col-md-4">
  <input class="form-control input-md" value="<?php echo $arr_search['response'][0]['aadhar_card_details'][0]['name']; ?>" style="width: 70%;">
  </div>
  <div class="col-md-1">
    <input onchange="check_aadhar_card_user()" id="aadhar_card" name="aadhar_card" value="<?php echo $_POST['aadhar_card'] ?>" class="input-file" type="file">
    </div>
  
  <?php
    $url_img_download_6 = 'https://kyc-application.herokuapp.com/download/';
    $options_img_download_6= array(
      'http' => array(
        'header'  => array(
                            'IMAGE-NAME: '.$arr_search['response'][0]['aadhar_card_details'][0]['name'],
                           ),
        'method'  => 'GET',
      ),
    );
    $context_img_download_6 = stream_context_create($options_img_download_6);
    $output_img_download_6= file_get_contents($url_img_download_6, false,$context_img_download_6);
    /*echo $output_img_download;*/
    $arr_img_download_aadhar_user = json_decode($output_img_download_6,true);
    
  ?>
  <div class="col-md-1">
<a target="_blank" style="" data-toggle="modal" data-target="#myModal10" class="btn btn-info user">VIEW</a>
  </div>
</div>
 

<?php for($q=0;$q<count($arr_search['response'][0]['add_info']);$q++){?>
<div class="present_fields_1"> 
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Type of work</label>
  <div class="col-md-4">
    <select id="type_of_work[]" name="type_of_work[]" class="form-control" style="width: 70%;">
      <option value=""></option>
      <option value="Audit Report">Audit Report</option>
      <option value="ITR filing">ITR filing</option>
      <option value="VAT Filing">VAT Filing</option>
      <option value="Accounting">Accounting</option>
      <option value="Registration">Registration</option>
      <option value="Certification">Certification</option>
      <option value="Others">Others</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Status</label>
  <div class="col-md-4">
    <select id="status" name="status[]" class="form-control" style="width: 70%">
      <option value="<?php echo $arr_search['response'][0]['add_info'][$q]['status']; ?>"><?php echo $arr_search['response'][0]['add_info'][$q]['status']; ?></option>
      <option value=""></option>
      <option value="Pending">Pending</option>
      <option value="Work in process">Work in process</option>
      <option value="Completed">Completed</option>
    </select>
  </div>
</div>
<!--date-->
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label" style="margin-left:28.1%;">DATE</label>
  <div class="col-10">
    <input class="form-control datepicker p" id="date[]" name="date[]" value="<?php echo $arr_search['response'][0]['add_info'][$q]['date']; ?>" style="width: 70%;" type="text" readonly > 
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Comment</label>  
  <div class="col-md-4">

  <input id="commentss" name="comment[]" value="<?php echo $arr_search['response'][0]['add_info'][$q]['comment']; ?>" type="text" placeholder="" class="form-control input-md" style="width: 70%;">
    
  </div>
</div>

<a href="#" class="remove_field_pre1" style="">
 <img src="images/del24.png">
</a>

</div>

<?php  }?>

<div class="form-group">

<div class="col-md-8 col-sm-12 col-24">
    <div class="input_fields" style="color:black">
         <button class="add_field btn " onclick="incrementValue()" style="">Add More</button>
         <div>
         <input type="text" name="mytextt[]" hidden="" ></div>
</div>
</div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button  onclick="return check_file_type_user()" id="edit_btn" name="edit_btn" type="submit" class="btn btn-success successb">Save</button><span><span></span></span>

    <button onclick="goBack()" class="btn btn-warning cancel" ><a style="color:white" href="search.php" >Cancel</a></button>
    <!-- style="width: 10em;margin-top: 0%;padding:0.5em;margin-left:2%;" -->
  </div>
</div>

</fieldset>
</form>


<?php
$url_can_be_deleted_or_no = 'https://kyc-application.herokuapp.com/can_be_deleted_or_no/';
$options_can_be_deleted_or_no = array(
  'http' => array(
    'header'  => array(
                  'IS-USER: 1',
                  'PK: '.$_GET['id'],
                ),
    'method'  => 'GET',
  ),
);
$context_can_be_deleted_or_no = stream_context_create($options_can_be_deleted_or_no);
$output_can_be_deleted_or_no = file_get_contents($url_can_be_deleted_or_no, false,$context_can_be_deleted_or_no);
/*echo $output_can_be_deleted_or_no;*/
$arr_can_be_deleted_or_no = json_decode($output_can_be_deleted_or_no,true);
/*echo $arr_can_be_deleted_or_no['status'];*/

?>


<?php if ($arr_can_be_deleted_or_no['status']==200) { ?>

    <form method="post" id="deleteForm" action="search.php" style="text-align:center">
    <input type="hidden" name="pk_delete" id="pk_delete" value="<?php echo $_GET['id'] ?>"></input>  
    <input type="hidden" name="is_user_delete" id="is_user_delete" value="<?php echo $_GET['is_user'] ?>"></input>  
    <button type="submit" onclick="return ConfirmDelete()" class="btn btn-warning delete">
      Delete
    </button>
    </form>

<?php } else { ?>
    <div style="text-align:center">
    <button onclick="return CannotDelete()" class="btn btn-warning delete">
      Delete
    </button>
    </div>
<?php } ?>


<script type="text/javascript">
  function ConfirmDelete()
  {
    var x = confirm("Are you sure you wish to delete this entry?");
    if (x)
      return true;
    else
      return false;
   }

   function CannotDelete()
  {
    alert("This entry cannot be deleted");
   }
</script>

<?php } ?>

<script type="text/javascript">
$(function(){

$('#trigger').click(function(){
  $('#myModal').modal('show');
  return false;
})

});
</script> 
<div class="container">

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>
</div>

    
<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registration Certificate</h4>
      </div>
      <div class="modal-body">
                          <div style="text-align:center;">
                          <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  -->
                          <!-- if url has https://kyc-app-bucket.s3.amazonaws.com/?Signature then it has no-image -->
                              <?php if((strpos($arr_img_download_reg_org[0]['url'], 'https://kyc-app-bucket.s3.amazonaws.com/?Signature') !== false)){
                                $img_lnk_reg_org="images/no_image.jpg";
                              }else{
                                  $img_lnk_reg_org=$arr_img_download_reg_org[0]['url'];
                              }?>

                              <div style="text-align:center">
                              <img class="print" src="<?php echo $img_lnk_reg_org; ?>" style=""></img>
                              </div>

                              <div style="margin-top:5%;margin-left:-22%" class="row">
                                 <div class="col-sm-3">
                                 </div>
                                 <div class="col-sm-3">
                                  <button class="btn btn-success" style="color:white;width:80px;height:40px" onclick="print_image()">Print</button>
                                 </div>
                                 <div class="col-sm-3">
                                   <a href="mailto:test@gmail.com?subject=KYC Application
                                    &body=Thank You!" style="color:white"> 
                                    <button class="btn btn-success" style="color:white;width:80px;height:40px" >Email
                                    </button>
                                   </a>
                                 </div>
                          
                                  <div class="col-sm-3">
                                    <a  style="color:white" download="<?php echo "registration_certificate.jpg"; ?>" href="<?php echo $img_lnk_reg_org; ?>" title="Save">
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px">Save
                                       </button>
                                    </a>
                                  </div>
                                  <div class="col-sm-3"><br><br>
                                  </div>
                              </div>
                          </div>
      </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pan Card</h4>
      </div>
      <div class="modal-body">
                          <div style="text-align:center;margin-top:%">
                                  <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  -->
                                  <!-- if url has https://kyc-app-bucket.s3.amazonaws.com/?Signature then it has no-image -->
                                  <?php if((strpos($arr_img_download_pan_org[0]['url'], 'https://kyc-app-bucket.s3.amazonaws.com/?Signature') !== false)){
                                    $img_lnk_pan_org="images/no_image.jpg";
                                  }else{
                                      $img_lnk_pan_org=$arr_img_download_pan_org[0]['url'];
                                  }?>

                                  <div style="text-align:center">
                                  <img class="print" src="<?php echo $img_lnk_pan_org; ?>" style=""></img>
                                  </div>

                                  <div style="margin-top:5%;margin-left:-22%" class="row">
                                     <div class="col-sm-3">
                                     </div>
                                     <div class="col-sm-3">
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" onclick="print_image()">Print</button>
                                     </div>
                                     <div class="col-sm-3">
                                     
                                     <a href="mailto:test@gmail.com?subject=KYC Application
                                     &body=Thank You!" style="color:white"> 
                                      <button class="btn btn-success" style="color:white;width:100px;height:50px" >Email
                                      </button>
                                     </a>

                                     </div>
                                     <div class="col-sm-3">
                                      
                                      <a  style="color:white" download="<?php echo "pan_card.jpg"; ?>" href="<?php echo $img_lnk_pan_org; ?>" title="Save">
                                        <button class="btn btn-success" style="color:white;width:80px;height:40px">Save
                                         </button>
                                      </a>
                                     
                                     </div>
                                     <div class="col-sm-3"><br><br>
                                     </div>
                                  </div>
                          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Telephone Bill</h4>
      </div>
      <div class="modal-body">
                          <div style="text-align:center;margin-top:%">
                                  <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  -->
                                  <!-- if url has https://kyc-app-bucket.s3.amazonaws.com/?Signature then it has no-image -->
                                  <?php if((strpos($arr_img_download_tel_org[0]['url'], 'https://kyc-app-bucket.s3.amazonaws.com/?Signature') !== false)){
                                    $img_lnk_tel_org="images/no_image.jpg";
                                  }else{
                                      $img_lnk_tel_org=$arr_img_download_tel_org[0]['url'];
                                  }?>

                                  <div style="text-align:center">
                                  <img class="print" src="<?php echo $img_lnk_tel_org; ?>" style=""></img>
                                  </div>

                                  <div style="margin-top:5%;margin-left:-22%" class="row">
                                     <div class="col-sm-3">
                                     </div>
                                     <div class="col-sm-3">
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" onclick="print_image()">Print</button>
                                     </div>
                                     <div class="col-sm-3">
                                     
                                     <a href="mailto:test@gmail.com?subject=KYC Application
                                     &body=Thank You!" style="color:white"> 
                                      <button class="btn btn-success" style="color:white;width:100px;height:50px" >Email
                                      </button>
                                     </a>

                                     </div>
                                     <div class="col-sm-3">
                                      
                                      <a  style="color:white" download="<?php echo "telephone_bill.jpg"; ?>" href="<?php echo $img_lnk_tel_org; ?>" title="Save">
                                        <button class="btn btn-success" style="color:white;width:100px;height:50px">Save
                                         </button>
                                      </a>
                                     
                                     </div>
                                     <div class="col-sm-3"><br><br>
                                     </div>
                                  </div>
                          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Bank Passbook</h4>
      </div>
      <div class="modal-body">
                          <div style="text-align:center;margin-top:%">
                                  <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  -->
                                  <!-- if url has https://kyc-app-bucket.s3.amazonaws.com/?Signature then it has no-image -->
                                  <?php if((strpos($arr_img_download_pass_org[0]['url'], 'https://kyc-app-bucket.s3.amazonaws.com/?Signature') !== false)){
                                    $img_lnk_pass_org="images/no_image.jpg";
                                  }else{
                                      $img_lnk_pass_org=$arr_img_download_pass_org[0]['url'];
                                  }?>

                                  <div style="text-align:center">
                                  <img class="print" src="<?php echo $img_lnk_pass_org; ?>" style=""></img>
                                  </div>

                                  <div style="margin-top:5%;margin-left:-22%" class="row">
                                     <div class="col-sm-3">
                                     </div>
                                     <div class="col-sm-3">
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" onclick="print_image()">Print</button>
                                     </div>
                                     <div class="col-sm-3">
                                     
                                     <a href="mailto:test@gmail.com?subject=KYC Application
                                     &body=Thank You!" style="color:white"> 
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" >Email
                                      </button>
                                     </a>

                                     </div>
                                     <div class="col-sm-3">
                                      
                                      <a  style="color:white" download="<?php echo "passbook.jpg"; ?>" href="<?php echo $img_lnk_pass_org; ?>" title="Save">
                                        <button class="btn btn-success" style="color:white;width:80px;height:40px">Save
                                         </button>
                                      </a>
                                     
                                     </div>
                                     <div class="col-sm-3"><br><br>
                                     </div>
                                  </div>
                          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pan Card</h4>
      </div>
      <div class="modal-body">
                          <div style="text-align:center;margin-top:%">
                                  <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  -->
                                  <!-- if url has https://kyc-app-bucket.s3.amazonaws.com/?Signature then it has no-image -->
                                  <?php if((strpos($arr_img_download_pan_user[0]['url'], 'https://kyc-app-bucket.s3.amazonaws.com/?Signature') !== false)){
                                    $img_lnk_pan_user="images/no_image.jpg";
                                  }else{
                                      $img_lnk_pan_user=$arr_img_download_pan_user[0]['url'];
                                  }?>

                                  <div style="text-align:center">
                                  <img class="print" src="<?php echo $img_lnk_pan_user; ?>" style=""></img>
                                  </div>

                                  <div style="margin-top:5%;margin-left:-22%" class="row">
                                     <div class="col-sm-3">
                                     </div>
                                     <div class="col-sm-3">
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" onclick="print_image()">Print</button>
                                     </div>
                                     <div class="col-sm-3">
                                     
                                     <a href="mailto:test@gmail.com?subject=KYC Application
                                     &body=Thank You!" style="color:white"> 
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" >Email
                                      </button>
                                     </a>

                                     </div>
                                     <div class="col-sm-3">
                                      
                                      <a  style="color:white" download="<?php echo "pan_card.jpg"; ?>" href="<?php echo $img_lnk_pan_user; ?>" title="Save">
                                        <button class="btn btn-success" style="color:white;width:80px;height:40px">Save
                                         </button>
                                      </a>
                                     
                                     </div>
                                     <div class="col-sm-3"><br><br>
                                     </div>
                                  </div>
                          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Telephone Bill</h4>
      </div>
      <div class="modal-body">
                          <div style="text-align:center;margin-top:%">
                                  <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  -->
                                  <!-- if url has https://kyc-app-bucket.s3.amazonaws.com/?Signature then it has no-image -->
                                  <?php if((strpos($arr_img_download_tel_user[0]['url'], 'https://kyc-app-bucket.s3.amazonaws.com/?Signature') !== false)){
                                    $img_lnk_tel_user="images/no_image.jpg";
                                  }else{
                                      $img_lnk_tel_user=$arr_img_download_tel_user[0]['url'];
                                  }?>

                                  <div style="text-align:center">
                                  <img class="print" src="<?php echo $img_lnk_tel_user; ?>" style=""></img>
                                  </div>

                                  <div style="margin-top:5%;margin-left:-22%" class="row">
                                     <div class="col-sm-3">
                                     </div>
                                     <div class="col-sm-3">
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" onclick="print_image()">Print</button>
                                     </div>
                                     <div class="col-sm-3">
                                     
                                     <a href="mailto:test@gmail.com?subject=KYC Application
                                     &body=Thank You!" style="color:white"> 
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" >Email
                                      </button>
                                     </a>

                                     </div>
                                     <div class="col-sm-3">
                                      
                                      <a  style="color:white" download="<?php echo "telephone_bill.jpg"; ?>" href="<?php echo $img_lnk_tel_user; ?>" title="Save">
                                        <button class="btn btn-success" style="color:white;width:80px;height:40px">Save
                                         </button>
                                      </a>
                                     
                                     </div>
                                     <div class="col-sm-3"><br><br>
                                     </div>
                                  </div>
                          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Bank Passbook</h4>
      </div>
      <div class="modal-body">
                          <div style="text-align:center;margin-top:%">
                                  <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  -->
                                  <!-- if url has https://kyc-app-bucket.s3.amazonaws.com/?Signature then it has no-image -->
                                  <?php if((strpos($arr_img_download_pass_user[0]['url'], 'https://kyc-app-bucket.s3.amazonaws.com/?Signature') !== false)){
                                    $img_lnk_pass_user="images/no_image.jpg";
                                  }else{
                                      $img_lnk_pass_user=$arr_img_download_pass_user[0]['url'];
                                  }?>

                                  <div style="text-align:center">
                                  <img class="print" src="<?php echo $img_lnk_pass_user; ?>" style=""></img>
                                  </div>

                                  <div style="margin-top:5%;margin-left:-22%" class="row">
                                     <div class="col-sm-3">
                                     </div>
                                     <div class="col-sm-3">
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" onclick="print_image()">Print</button>
                                     </div>
                                     <div class="col-sm-3">
                                     
                                     <a href="mailto:test@gmail.com?subject=KYC Application
                                     &body=Thank You!" style="color:white"> 
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" >Email
                                      </button>
                                     </a>

                                     </div>
                                     <div class="col-sm-3">
                                      
                                      <a  style="color:white" download="<?php echo "passbook.jpg"; ?>" href="<?php echo $img_lnk_pass_user; ?>" title="Save">
                                        <button class="btn btn-success" style="color:white;width:80px;height:40px">Save
                                         </button>
                                      </a>
                                     
                                     </div>
                                     <div class="col-sm-3"><br><br>
                                     </div>
                                  </div>
                          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Voter ID</h4>
      </div>
      <div class="modal-body">
                          <div style="text-align:center;margin-top:%">
                                  <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  -->
                                  <!-- if url has https://kyc-app-bucket.s3.amazonaws.com/?Signature then it has no-image -->
                                  <?php if((strpos($arr_img_download_voter_user[0]['url'], 'https://kyc-app-bucket.s3.amazonaws.com/?Signature') !== false)){
                                    $img_lnk_voter_user="images/no_image.jpg";
                                  }else{
                                      $img_lnk_voter_user=$arr_img_download_voter_user[0]['url'];
                                  }?>

                                  <div style="text-align:center">
                                  <img class="print" src="<?php echo $img_lnk_voter_user; ?>" style=""></img>
                                  </div>

                                  <div style="margin-top:5%;margin-left:-22%" class="row">
                                     <div class="col-sm-3">
                                     </div>
                                     <div class="col-sm-3">
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" onclick="print_image()">Print</button>
                                     </div>
                                     <div class="col-sm-3">
                                     
                                     <a href="mailto:test@gmail.com?subject=KYC Application
                                     &body=Thank You!" style="color:white"> 
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" >Email
                                      </button>
                                     </a>

                                     </div>
                                     <div class="col-sm-3">
                                      
                                      <a  style="color:white" download="<?php echo "voter_id.jpg"; ?>" href="<?php echo $img_lnk_voter_user; ?>" title="Save">
                                        <button class="btn btn-success" style="color:white;width:80px;height:40px">Save
                                         </button>
                                      </a>
                                     
                                     </div>
                                     <div class="col-sm-3"><br><br>
                                     </div>
                                  </div>
                          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Passport</h4>
      </div>
      <div class="modal-body">
                          <div style="text-align:center;margin-top:%">
                                  <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  -->
                                  <!-- if url has https://kyc-app-bucket.s3.amazonaws.com/?Signature then it has no-image -->
                                  <?php if((strpos($arr_img_download_passport_user[0]['url'], 'https://kyc-app-bucket.s3.amazonaws.com/?Signature') !== false)){
                                    $img_lnk_passport_user="images/no_image.jpg";
                                  }else{
                                      $img_lnk_passport_user=$arr_img_download_passport_user[0]['url'];
                                  }?>

                                  <div style="text-align:center">
                                  <img class="print" src="<?php echo $img_lnk_passport_user; ?>" style=""></img>
                                  </div>

                                  <div style="margin-top:5%;margin-left:-22%" class="row">
                                     <div class="col-sm-3">
                                     </div>
                                     <div class="col-sm-3">
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" onclick="print_image()">Print</button>
                                     </div>
                                     <div class="col-sm-3">
                                     
                                     <a href="mailto:test@gmail.com?subject=KYC Application
                                     &body=Thank You!" style="color:white"> 
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" >Email
                                      </button>
                                     </a>

                                     </div>
                                     <div class="col-sm-3">
                                      
                                      <a  style="color:white" download="<?php echo "passport.jpg"; ?>" href="<?php echo $img_lnk_passport_user; ?>" title="Save">
                                        <button class="btn btn-success" style="color:white;width:80px;height:40px">Save
                                         </button>
                                      </a>
                                     
                                     </div>
                                     <div class="col-sm-3"><br><br>
                                     </div>
                                  </div>
                          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Aadhar Card</h4>
      </div>
      <div class="modal-body">
                          <div style="text-align:center;margin-top:%">
                                  <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  -->
                                  <!-- if url has https://kyc-app-bucket.s3.amazonaws.com/?Signature then it has no-image -->
                                  <?php if((strpos($arr_img_download_aadhar_user[0]['url'], 'https://kyc-app-bucket.s3.amazonaws.com/?Signature') !== false)){
                                    $img_lnk_aadhar_user="images/no_image.jpg";
                                  }else{
                                      $img_lnk_aadhar_user=$arr_img_download_aadhar_user[0]['url'];
                                  }?>

                                  <div style="text-align:center">
                                  <img class="print" src="<?php echo $img_lnk_aadhar_user; ?>" style=""></img>
                                  </div>

                                  <div style="margin-top:5%;margin-left:-22%" class="row">
                                     <div class="col-sm-3">
                                     </div>
                                     <div class="col-sm-3">
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" onclick="print_image()">Print</button>
                                     </div>
                                     <div class="col-sm-3">
                                     
                                     <a href="mailto:test@gmail.com?subject=KYC Application
                                     &body=Thank You!" style="color:white"> 
                                      <button class="btn btn-success" style="color:white;width:80px;height:40px" >Email
                                      </button>
                                     </a>

                                     </div>
                                     <div class="col-sm-3">
                                      
                                      <a  style="color:white" download="<?php echo "aadhar_card.jpg"; ?>" href="<?php echo $img_lnk_aadhar_user; ?>" title="Save">
                                        <button class="btn btn-success" style="color:white;width:80px;height:40px">Save
                                         </button>
                                      </a>
                                     
                                     </div>
                                     <div class="col-sm-3"><br><br>
                                     </div>
                                  </div>
                          </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function print_image() {
    window.print();
}
</script>
  
<script type="text/javascript">
      
      $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var wrapper_present         = $(".present_fields"); //Fields wrapper
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
           $(wrapper).prepend('<div style="margin-left:50%;"><center><div class="form-group"> <label class="control-label name" for="textinput" style="">Name: </label> <div class="partner_name"> <input id="partner_names[]" name="partner_names[]" type="text" placeholder="Enter Full Name" class="form-control input-md newentry partner_names" style="">  </div>  <div class="col-md-6" > <a href="new_user_popup.php" style="color:white" target="_blank" data-toggle="modal" data-target="#myModal"><button  type="button" class="btn btn-info new_entry_btn entry">New Entry</button> </a> </div></div> <div class="form-group">  <label class="control-label designation" for="selectbasic">Designation: </label>  <div class="partner_designation"> <select id="partner_designations[]" name="partner_designations[]" class="form-control partner_designations" >      <option value="Managing Partner">Managing Partner</option>      <option value="Manager">Manager</option>      <option value="Other">Other</option>    </select>  </div>  <div class="partner_designation col2">  <input style="" id="textinput" name="textinput" type="text" placeholder="Specify if Other" class="form-control input-md partner_others"></div></div></center><a href="#" class="remove_field" style="margin-left:370%;margin-top:-40px;position:absolute"><img src="images/del24.png"></a></a></div>'); //add input box\
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })

    $(wrapper_present).on("click",".remove_field_present", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
    </script>

<script>
function goBack() {
    window.history.back();
}
</script>

<script type="text/javascript">


     $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields"); //Fields wrapper
    var add_button      = $(".add_field"); //Add button ID

    var wrapper_pre1         = $(".present_fields_1"); //Fields wrapper
    
    var x = 1; //initlal text box count
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = day + "-" + month + "-" + year;
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
         $('<div style="margin-left:50%;"><div class="form-group"><label class="control-label type" for="selectbasic" style="">Type of work</label><div class="col-md-6"><select id="type_of_work[]" name="type_of_work[]" class="form-control type_of_work" style=""><option value="Audit Report">Audit Report</option><option value="ITR filing">ITR filing</option><option value="VAT Filing">VAT Filing</option><option value="Accounting">Accounting</option><option value="Registration">Registration</option><option value="Certification">Certification</option><option value="Others">Others</option></select></div></div><div class="form-group"> <label class="col-md-4 control-label status" for="selectbasic" style="width:70%;">Status</label><div class="col-md-6"><select id="status1" name="status[]"  class="form-control status"><option value="Pending">Pending</option><option value="Work in process">Work in process</option><option value="Completed">Completed</option></select></div></div><div class="form-group row"><label for="example-date-input" class="col-2 col-form-label date">DATE</label><div class="col-10 col"><input class="form-control datepicker pickers" id="datee'+ x +'" name="date[]" style="" type="text" readonly></div></div><div class="form-group"><label class="col-md-4 control-label comment" for="textinput" style="">Comment</label><div class="col-md-4"><input id="comments" name="comment[]" type="text" placeholder="" class="form-control input-md comment" style=""></div></div></center><a href="#" class="remove_field" style=""><img src="images/del24.png" ></a></a></div>').insertBefore(add_button) //add input box\
          var newInput=$("#datee"+x).datepicker({dateFormat: 'dd/mm/yy',changeMonth : true,

            changeYear : true,});
          newInput.datepicker({dateFormat: 'dd/mm/yy',changeMonth : true,
            changeYear : true,}).datepicker("setDate", new Date());
          $("#status1").click(function () {

            if ($("#status1" ).val() == "Completed") {
                $("#comments" ).attr("required", "required");
            }
            else
              $("#comments").attr("required", false);
        });
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })

    $(wrapper_pre1).on("click",".remove_field_pre1", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

    </script>


    <!-- AutoSearch Script files don't move -->
   <!--  <script type="text/javascript" src="autocomplete-Files/jquery-1.8.2.min.js"></script> -->
        <script type="text/javascript" src="autocomplete-Files/jquery.mockjax.js"></script>
        <script type="text/javascript" src="autocomplete-Files/jquery.autocomplete.js"></script>
        <script type="text/javascript" src="autocomplete-Files/EditEntryValues.js"></script>
        <script type="text/javascript" src="autocomplete-Files/Logic_EditEntry.js"></script>

</main>
</body>
</html>


<?php

session_start();

$db = pg_connect("host=ec2-107-20-191-76.compute-1.amazonaws.com port=5432 dbname=deu9vahl80fvjn user=vdvqpruzihrics password=17b3e7a56da97ca021e3da54bb1694bb799849a2b5911014ed6caa05e1e4e02d");
 pg_select($db, 'post_log', $_POST);
 

 $query=pg_query("SELECT id,name,account_token,is_active FROM users_users WHERE is_active = 'true' AND account_token = '".$_SESSION['account_token']."'");

 $json=array();

while ($student = pg_fetch_array($query)) {
    $json[$student["id"]] = $student["name"];
}

$textval = json_encode($json);
$foo = "var partnames=" . $textval;
file_put_contents('autocomplete-Files/EditEntryValues.js', $foo);
?>
