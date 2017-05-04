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
 <link rel="stylesheet" type="text/css" href="css/table.css"> 
 <link rel="stylesheet" type="text/css" href="css/kyc.css"> 
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/material.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- <script src="javascript/material.min.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Material Design Lite -->
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/material.css">
 <link rel="stylesheet" type="text/css" href="css/fileupload.css">
    <!-- Material Design icon font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.material.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );
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

/*tr:nth-child(even) {
    background-color: #dddddd;
}*/
</style>
</head>
<body style="background-color:#E8E8E8;overflow-x:hidden;">

<?php
session_start();
  $url_status = 'https://kyc-application.herokuapp.com/search_on_status/';
  $options_status = array(
    'http' => array(
      'header'  => array(
                          'STATUS: '.$_GET['status'],
                          'ACCOUNT-TOKEN: '.$_SESSION['account_token'],
                         ),
      'method'  => 'GET',
    ),
  );
  $context_status = stream_context_create($options_status);
  $output_status = file_get_contents($url_status, false,$context_status);
  /*echo $output_status;*/
  $arr_status = json_decode($output_status,true);
  /*echo $arr_status[0]['additional_info']['status'];
  echo $arr_status[0]['details']['name'];
  echo $arr_status[0]['is_user'];*/
  

?>

      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header style="background-color:#08426a;height:110px;-webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     -moz-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;" class="mdl-layout__header">
    <div class="mdl-layout__header-row" >
        <a href="search.php"><img id="logo1" src="images/green.png"></img></a>
<span class="mdl-layout-title" id="title3" style="margin-left:35%"><?php echo $_GET['status'] ?></span>
        <span class="mdl-layout-title" id="title1" style="text-align:center">KYCAPP</span>
   <a href="logout.php"><img id="logout" style="" src="images/logout_btn.png"></img></a>         <!-- Add spacer, to align navigation to the right -->
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
      
<div class="container">
  <div class="row" style="margin-top:4%;"> 

  <button class="btn btn-success clear-pendingpage" style="" type="button" id="test">Clear</button>
<script type="text/javascript">
$('#test').click(function() {
    /*$('input[type=search]').val('');*/
    $('#example').dataTable().fnFilter('');
    /*table.search('').draw();*/ //required after
});
</script>

<table id="example" class="mdl-data-table" cellspacing="0" style="margin-left:8%;width:75%;margin-top:12%;">
        <thead>
            <th>Name</th>
            <th>User/Organization</th>
            <th>Type of work</th>
            <th>Status</th>
            <th>Date</th>
            <th>Comment</th>
            <th>Details</th>
        </thead>
        
        
           </tr>
  <?php for($i=0;$i<count($arr_status);$i++){
     if($arr_status[0]['is_user']=="0"){
      $field="Organization";
      $field2="search_result.php?is_user=0&id=".$arr_status[$i]['additional_info']['user_org_id'];
     }else{
      $field="User";
      $field2="search_result.php?is_user=1&id=".$arr_status[$i]['additional_info']['user_org_id'];
     }
  ?>
  <tr>
    <td><?php echo $arr_status[$i]['details']['name'] ?></td>
    <td><?php echo $field ?></td>
    <td><?php echo $arr_status[$i]['additional_info']['type_of_work'] ?></td>
    <td><?php echo $arr_status[$i]['additional_info']['status'] ?></td>
    <td><?php echo $arr_status[$i]['additional_info']['date'] ?></td>
    <td><?php echo $arr_status[$i]['additional_info']['comment'] ?></td>
    <td>
    <form method="post" action="<?php echo $field2; ?>">
      <button type="submit" class="btn btn-success" style="color:white">Details</button>
    </form>

    </td>
  </tr>
  <?php }?>
  
</table>
</div>
</div>
</body>
</html>

