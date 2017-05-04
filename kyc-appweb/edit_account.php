<?php
session_start();
if($_SESSION['login_kyc_app'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>

<?php
if(isset($_POST['submit'])){
  $url = 'https://kyc-application.herokuapp.com/edit_account/';
  $data = array(
              'pk_value' => $_POST['pk'],
              'username' => $_POST['username'],
              'password' => $_POST['password']
            );

    // use key 'http' even if you send the request to https://...
    $options = array(
      'http' => array(
        'header'  => "Content-Type: application/json\r\n" .
                     "Accept: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode( $data ),
      ),
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    /*echo $result8;*/
    $arr = json_decode($result,true);
    if($arr != ''){
      echo "<script>window.location.href = 'super_admin.php';</script>";
    }
}
?>


<?php
  /*echo $_POST['pk_value'];*/
  $url_get_account_by_id = 'https://kyc-application.herokuapp.com/get_account_by_id/';
  $options_get_account_by_id = array(
    'http' => array(
      'header'  => array(
                  'PK-VALUE: '.$_POST['pk_value'],
                ),
      'method'  => 'GET',
    ),
  );
  $context_get_account_by_id = stream_context_create($options_get_account_by_id);
  $output_get_account_by_id = file_get_contents($url_get_account_by_id, false,$context_get_account_by_id);
  /*echo $output_get_account_by_id;*/
  $arr_get_account_by_id = json_decode($output_get_account_by_id,true);
/*  echo $arr_get_account_by_id;*/
  
?>

<a href="super_admin.php">Back</a>



<div class="container" style="margin-left:25%;margin-top:10%;width:50%;border:1px solid black;padding-bottom:8px">
<form align="center" style="margin-top:2%" action="edit_account.php" method="post">
<h4><?php echo $arr_get_account_by_id['account'][0]['company'] ?></h4>

<input type="hidden" name="pk" value="<?php echo $_POST['pk_value'] ?>">

  <div class="row">
    <div class="col-sm-4">
      <input type="text" name="username" value="<?php echo $arr_get_account_by_id['account'][0]['username'] ?>">
    </div><br>
    <div class="col-sm-4">
      <input type="password" name="password" value="<?php echo $arr_get_account_by_id['account'][0]['password'] ?>"> 
    </div><br>
    <div class="col-sm-4">
      <input type="submit" name="submit" id="submit" style="margin-top:1%;width:100px;height:30px;background-color:green" value="Save">
    </div>
  </div>
</form>
</div> 
