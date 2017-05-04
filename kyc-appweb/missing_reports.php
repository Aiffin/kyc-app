<?php
session_start();
if($_SESSION['login_kyc_app'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>
<html>
  <head>
  <link rel="icon" type="image/png" sizes="36x36" href="images/green.png">

<link rel="stylesheet" type="text/css" href="css/material.indigo-pink.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet"  href="css/table.css"> 
 <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/material.css">
    <!-- <script src="javascript/material.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Material Design Lite -->
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/material.css">
<link rel="stylesheet" type="text/css" href="css/kyc.css">
<link rel="stylesheet" type="text/css" href="css/fileupload.css">
    <!-- Material Design icon font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="js/dataTables.material.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').dataTable({
        /* Disable initial sort */
        "aaSorting": []
    });
} );
</script>
<style>
.mdl-data-table td:last-of-type {
    padding-right: 45px;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
@font-face {
  font-family: Roboto-Regular;
  src: url(Roboto-Regular.ttf);
}
table{
  font-size:14px !important;
  font-family: Roboto-Regular;
}
/*tr:nth-child(even) {
    background-color: #dddddd;
}*/
</style>
</head>
<body style="background-color:#E8E8E8;overflow-x:hidden;">

<?php 
if(isset($_POST['view_details'])){

  $string_new="<script>window.location.href='search_result.php?is_user=".$_POST['is_user_no']."&id=".$_POST['pk_field']."'</script>";
    // $string_new="<script>window.location.href='https://www.w3schools.com/php/php_forms.asp'</script>";
  echo $string_new;

  /*echo $_POST["is_user_field"];
  echo $_POST["id_field"];*/
}?>

<?php
if (isset($_POST['upload_btn'])){

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }


$ext1 = $_FILES["file1"]["name"];
$ext1 = end((explode(".", $ext1))); # extra () to prevent notice
if($ext1 == ""){
  $ext1=".jpg";
}else{
  $ext1=".".$ext1;
}

        if($_POST['missing_file1'] == "Missing Pan Card"){
          $names= "pan_card".rand(0, 9999).$ext1;
        }
        if($_POST['missing_file1'] == "Missing Voter Id"){
          $names= "voter_id".rand(0, 9999).$ext1;
        }
        if($_POST['missing_file1'] == "Missing Bank Pass Book"){
          $names= "pass_book".rand(0, 9999).$ext1;
        }
        if($_POST['missing_file1'] == "Missing Telephone Bill"){
          $names= "telephone_bill".rand(0, 9999).$ext1;
        }
        if($_POST['missing_file1'] == "Missing Aadhar Card"){
          $names= "aadhar_card".rand(0, 9999).$ext1;
        }
        if($_POST['missing_file1'] == "Missing Passport"){
          $names= "passport".rand(0, 9999).$ext1;
        }
        
        /*Get Signed Urls*/
        $url = 'https://kyc-application.herokuapp.com/get_signed_url/';
        $data = array('image_list' => [$names]);

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
    

    $check = getimagesize($_FILES["file1"]["tmp_name"]);
    if(is_uploaded_file($_FILES['file1']['tmp_name']) && !($_FILES['file1']['error'])) {
        $url_upload = $arr[0][0];
        /*echo $url_upload;*/


        $filename = $_FILES["file1"]["tmp_name"];
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

        $file_id=$arr[0]['id'];
        /*echo $file_id;*/

    }

    $url_upload_file = 'https://kyc-application.herokuapp.com/upload_an_mising_file/';
    $options_upload_file = array(
      'http' => array(
        'header'  => array(
                          'FILE-ID: '.$file_id,
                          'TYPE-OF-FILE: '.$_POST['missing_file1'],
                          'UID: '.$_POST['uid1'],
                          ),
        'method'  => 'GET',
      ),
    );
    $context_upload_file = stream_context_create($options_upload_file);
    $output_upload_file = file_get_contents($url_upload_file, false,$context_upload_file);
    /*echo count($output_missing_report);*/
    $arr_upload_file = json_decode($output_upload_file,true);
    /*echo count($arr_missing_report);*/

}?>

<?php
session_start();

$url_missing_report = 'https://kyc-application.herokuapp.com/missing_report/';
$options_missing_report = array(
  'http' => array(
    'header'  => array(
                  'ACCOUNT-TOKEN: '.$_SESSION['account_token'],
                ),
    'method'  => 'GET',
  ),
);
$context_missing_report = stream_context_create($options_missing_report);
$output_missing_report = file_get_contents($url_missing_report, false,$context_missing_report);
/*echo count($output_missing_report);*/
$arr_missing_report = json_decode($output_missing_report,true);
/*echo count($arr_missing_report);*/
?>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header style="background-color:#08426a;height:110px;-webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     -moz-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;" class="mdl-layout__header">
    <div class="mdl-layout__header-row" >
        <a href="search.php"><img style="" id="logo1" src="images/green.png"></img></a>
        <span class="mdl-layout-title" id="title3" style="margin-left:35%;">Missing Report</span>
        <span class="mdl-layout-title" id="title1" style="text-align:center">KYCAPP</span>
        <a href="logout.php"><img id="logout" style="" src="images/logout_btn.png"></img></a>
          <!-- Add spacer, to align navigation to the right -->
          </div>
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

 <div class="container contain-align">
  <div class="row" style="margin-top:4%;"> 

<button class="btn btn-success clear" style="" type="button" id="test">Clear</button>
<script type="text/javascript">
$('#test').click(function() {
    /*$('input[type=search]').val('');*/
    $('#example').dataTable().fnFilter('');
    /*table.search('').draw();*/ //required after
});
</script>

<table align="center" id="example" class="mdl-data-table" cellspacing="0" style="width:75%;margin-top:4%;text-align: center;">
        <thead>
            <th>Name</th>
        <th>UID</th>
          <th>Missing File</th>
            <th>Choose File</th>
            <!-- <th>Upload</th> -->
            <th>Action</th>
        </thead>
        
        
           </tr>
  <?php for($i=0;$i<count($arr_missing_report);$i++){?>
  <tr>
    <td><?php echo $arr_missing_report[$i]['name'] ?></td>
    <td><?php echo $arr_missing_report[$i]['uid'] ?></td>
    <td><?php echo $arr_missing_report[$i]['missing_file'] ?></td>
    
    <form method="post" action="missing_reports.php" enctype="multipart/form-data">
        <td>
         <input name="file1" id="file1" class="file-upload" type="file" onclick="enableButton2()" style="margin-bottom: -6%">
         <input type="hidden" value="<?php echo $arr_missing_report[$i]['uid'] ?>" name="uid1" id="uid1"></input>

         <input type="hidden" value="<?php echo $arr_missing_report[$i]['missing_file'] ?>" name="missing_file1" id="missing_file1"></input>

         <input type="hidden" value="<?php echo $arr_missing_report[$i]['is_user'] ?>" name="is_user_no" id="is_user_no"></input>
         <input type="hidden" value="<?php echo $arr_missing_report[$i]['pk'] ?>" name="pk_field" id="pk_field"></input>
         
         <button id="upload_btn" name="upload_btn" type="submit" class="btn btn-success" style="margin-top: -9px; margin-left: 71%;" disabled >Upload</button>
       
    </td>
<!-- </form>
  

  <form method="post"> -->


    <td><button class="btn btn-success" style="color:white;opacity: 0.5;" disabled>Generate Link</button>
<!--     <input type="submit" name="view_details" id="view_details" value="View"></input>
 -->
     <button class="btn btn-success" name="view_details" id="view_details" style="color:white;margin-left:1%">View</button>
    
 </td>
  </tr>
  </form>
  <?php }?>
  
</table>
</div>
</div>
<script>
        function enableButton2() {
            document.getElementById("upload_btn").disabled = false;
        }
    </script>
</body>
</html>