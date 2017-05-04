<?php
session_start();
if($_SESSION['login_kyc_app'] == 1){
  echo "<script>location='search.php'</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>CA DATA BASE</title>
  <link rel="icon" type="image/png" sizes="36x36" href="images/green.png">
  <link rel="stylesheet" type="text/css" href="css/material.indigo-pink.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/kyc.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Material Design Lite -->
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/material.css">
  <link rel="stylesheet" type="text/css" href="css/fileupload.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
</head>
<body style="background-color:#E8E8E8;overflow-x:hidden;">

<?php

session_start();

if(isset($_POST['login_btn'])){
$url2 = 'https://kyc-application.herokuapp.com/check_is_admin/';
$options2 = array(
  'http' => array(
    'header'  => array(
                  'USERNAME: '.$_POST['username'],
                  'PASSWORD: '.$_POST['password'],
                ),
    'method'  => 'GET',
  ),
);
$context2 = stream_context_create($options2);
$output2 = file_get_contents($url2, false,$context2);
/*echo $output2;*/
$arr2 = json_decode($output2,true);
if($arr2['status']==200 && $arr2['message']=='Is Super Admin'){
  $_SESSION['login_kyc_app'] = 1;
  echo "<script>location='super_admin.php'</script>";
}elseif($arr2['status']==200 && $arr2['message']=='Is Admin'){
  $_SESSION['login_kyc_app'] = 1;
  $_SESSION['is_admin'] = 1;
  $_SESSION['admin_pk'] = $arr2['admin_pk'];
  $_SESSION['account_token'] = $arr2['account_token'];
  /*echo $_SESSION['account_token'];*/
  echo "<script>location='search.php'</script>";
}elseif($arr2['status']==200 && $arr2['message']=='Is User'){
  $_SESSION['login_kyc_app'] = 1;
  $_SESSION['account_token'] = $arr2['account_token'];
  echo "<script>location='search.php'</script>";
}elseif($arr2['status']==401){
  echo "<script>alert('Password Invalid')</script>";
}elseif($arr2['status']==400){
  echo "<script>alert('Invalid Credentials')</script>";
}

}
?>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header style="background-color:#08426a;height:110px;-webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     -moz-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;" class="mdl-layout__header">
    <div class="mdl-layout__header-row" >
        <img id="logo" src="images/green.png"></img>
         <span class="mdl-layout-title" id="title" style="">KYCAPP</span>
          <!-- Add spacer, to align navigation to the right -->
    </div>
      </header>

      <main class="mdl-layout__content" style="margin-left:75%;">
        <div class="page-content"><!-- Your content goes here -->
      <div class="row">
    <div class="col-sm-9">
    </div>
    <div class="col-sm-3" style="margin-top:15%;width:230px;">
    <form name="myForm" method="post" action=""  style="background-color:white !important;padding:12px 0px 15px 18px">

      <p style="color:rgba(0,0,0,.87);font-size:18px;font-weight:500;" id="admin_console">Admin Console</p>
      <p style="color:red"><?php echo $error_message ?></p>
        <div style="width:190px;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="username" name="username" required/>
        <label style="font-size:14px;" class="mdl-textfield__label" for="sample3">Username</label>
        </div>
        </p>
      
          <div style="width:190px;margin-top:-24px;"  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="password" id="password" name="password" required/>
           <label style="font-size:14px;" class="mdl-textfield__label" for="sample3">Password</label>
          </div>
          </p>
          <br>
         <button type="submit" name="login_btn" id="login_btn" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="margin-top:-31px;">Log in</button>
          </div>
        </form>
      </div>
      </div>
  </main>
</div>

</body>
</html>