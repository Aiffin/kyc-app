<?php
session_start();
if($_SESSION['login_kyc_app'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
#table-wrapper {
  position:relative;
}
#table-scroll {
  height:400px;
  overflow:auto;  
  margin-top:20px;
}

#table-wrapper table * {
  color:black;
  padding:6px 6px 6px 6px;
}
#table-wrapper table thead th .text {
  position:absolute;   
  top:-20px;
  z-index:2;
  height:20px;
  width:35%;
  /*border:1px solid red;*/
}
#table-wrapper th,td{
  padding:8px;
  text-align: left;
  /*border-right:1px solid black;*/
}
th{
  background-color: #B8B8B8;
}
td {
  border-right: solid 1px #B8B8B8; 
  border-left: solid 1px #B8B8B8;
}

</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" sizes="36x36" href="images/green.png">

</head>
<body>

<?php
if(isset($_POST['delete_btn'])){
  $url_delete_account = 'https://kyc-application.herokuapp.com/delete_account/';
  $options_delete_account = array(
    'http' => array(
      'header'  => array(
                  'PK-DELETE: '.$_POST['pk_delete'],
                ),
      'method'  => 'GET',
    ),
  );
  $context_delete_account = stream_context_create($options_delete_account);
  $output_delete_account = file_get_contents($url_delete_account, false,$context_delete_account);
  /*echo $output_get_all_accounts;*/
  $arr_delete_account = json_decode($output_delete_account,true);
/*  echo $arr_get_all_accounts;*/
}?> 

<?php
if(isset($_POST['submit'])){
	$url = 'https://kyc-application.herokuapp.com/account/';
  $data = array(
              'company' => $_POST['company'],
              'admin_username' => $_POST['admin_username'],
              'admin_password' => $_POST['admin_password'],
              'user1_username' => $_POST['user1_username'],
              'user1_password' => $_POST['user1_password'],
              'user2_username' => $_POST['user2_username'],
              'user2_password' => $_POST['user2_password'],
              'suffix' => $_POST['suffix'],
              'sequence' => $_POST['sequence'],
              'prefix' => $_POST['prefix'],
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
    /*if($arr != ''){
      echo "<script>alert('New Account Added')</script>";
    }*/
}
?>

<?php
  $url_get_all_accounts = 'https://kyc-application.herokuapp.com/get_all_accounts/';
  $options_get_all_accounts = array(
    'http' => array(
      'method'  => 'GET',
    ),
  );
  $context_get_all_accounts = stream_context_create($options_get_all_accounts);
  $output_get_all_accounts = file_get_contents($url_get_all_accounts, false,$context_get_all_accounts);
  /*echo $output_get_all_accounts;*/
  $arr_get_all_accounts = json_decode($output_get_all_accounts,true);
/*  echo $arr_get_all_accounts;*/
  
?>

<a href="index.php">Back</a>

<form align="center" style="margin-top:1%" action="super_admin.php" method="post">

<div class="container" style="width:50%;border:1px solid black;padding-bottom:25px">
  <div class="row" style="margin-top:25px">
    <div class="col-sm-4">
      <input type="text" name="company" placeholder="Account Name" required>
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
    </div>
  </div>

<br>

  <div class="row">
    <div class="col-sm-4">
      <input type="text" name="admin_username" placeholder="Admin Name" required>
    </div>
    <div class="col-sm-4">
      <input type="password" name="admin_password" placeholder="Password" required>
    </div>
    <div class="col-sm-4">
    </div>
  </div>



<br>

  <div class="row">
    <div class="col-sm-4">
      <input type="text" name="user1_username" placeholder="User 1 Name" required>
    </div>
    <div class="col-sm-4">
      <input type="password" name="user1_password" placeholder="Password" required>
    </div>
    <div class="col-sm-4">
    </div>
  </div>

<br>

  <div class="row">
    <div class="col-sm-4">
      <input type="text" name="user2_username" placeholder="User 2 Name" required>
    </div>
    <div class="col-sm-4">
      <input type="password" name="user2_password" placeholder="Password" required>
    </div>
    <div class="col-sm-4">
     </div>
  </div>


<br>

  <div class="row">
    <div class="col-sm-4">
      <input type="text" name="prefix" style="text-transform:uppercase" placeholder="Prefix">
    </div>
    <div class="col-sm-4">
      <input type="text" pattern="[0-9]{3}" title="Sequence must contain digits from 000-999" name="sequence" placeholder="Sequence" required>
    </div>
    <div class="col-sm-4">
      <input type="text" name="suffix" style="text-transform:uppercase" placeholder="Suffix">
    </div>
  </div>


<br>

  <div class="row">
    <div class="col-sm-4">
       <input type="submit" name="submit" id="submit" style="margin-top:1%;width:100px;height:30px;background-color:green" value="Add">
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
    </div>
  </div>


</div>
</form> 
<!-- 
<br><br>
<h4 style="text-align:center">Accounts</h4> -->

<div id="table-wrapper">
  <div id="table-scroll">
    <table align="center">
        <thead>
            <tr>
                <th>Account</th> 
                <th>Role</th>
                <th>Name</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php for($x=0;$x<count($arr_get_all_accounts);$x++){?>
          <?php for($y=0;$y<count($arr_get_all_accounts[$x]['profile']);$y++){?>

          <?php if($arr_get_all_accounts[$x]['profile'][$y]['role'] != "superadmin"){?>

              <?php if($y==(count($arr_get_all_accounts[$x]['profile'])-1)){
                    $style="border-bottom:1px solid #B8B8B8";
                }else{
                    $style='';
                }?>
            <tr style="<?php echo $style; ?>">
              <?php if($y==0){
                    $account=$arr_get_all_accounts[$x]['account'];
                }else{
                    $account='';
                }?>
              <td><?php echo $account ?></td>
              <td><?php echo $arr_get_all_accounts[$x]['profile'][$y]['role'] ?></td>
              <td><?php echo $arr_get_all_accounts[$x]['profile'][$y]['username'] ?></td>
              <td><input style="border:none" type="password" value="<?php echo $arr_get_all_accounts[$x]['profile'][$y]['password'] ?>" readonly></input></td>
              <td>
                <form method="post" action="edit_account.php">
                  <input type="hidden" name="pk_value" value="<?php echo $arr_get_all_accounts[$x]['profile'][$y]['pk'] ?>">
                  <button style="width:55px;height:30px" type="submit" name="edit_btn">Edit</button>
                </form>
              </td>
              <?php if($y==0){ ?>
                     <td>
                        <form method="post" action="super_admin.php">
                          <input type="hidden" name="pk_delete" value="<?php echo $arr_get_all_accounts[$x]['profile'][$y]['pk'] ?>">
                          <button onclick="return confirm('Are you sure you want to delete?');" style="width:55px;height:30px" type="submit" name="delete_btn">Delete</button>
                         </form>
                     </td>
              <?php }else{ ?>
                     <td></td>
              <?php } ?>
             
            </tr>

          <?php }?>
          <?php }?>
        </tbody>
        <?php }?>
    </table>
  </div>
</div>

</body>
</html>
