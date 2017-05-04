<?php
session_start();
$_SESSION['login_kyc_app'] = 0;
$_SESSION['is_admin'] = 0;
$_SESSION['admin_pk'] = 0;
$_SESSION['account_token'] = 0;

echo "<script>location='index.php'</script>";

?>