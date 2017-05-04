<?php
session_start();
if($_SESSION['login_kyc_app'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>

<html>
  <head>
    <!---bootstrap-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="icon" type="image/png" sizes="36x36" href="images/green.png">

    <!-- Material Design Lite -->
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/material.css">

  <link rel="stylesheet" type="text/css" href="css/kyc.css">
   <link rel="stylesheet" type="text/css" href="autocomplete-Files/styles.css">
    <!-- Material Design icon font -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="autocomplete-Files/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Material Design Lite -->
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" href="css/fileupload.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    
    <style type="text/css">
      .form-control{
      border: 2px solid #74b25e;
    border-radius: 7px;
      }
    </style>
  </head>

<body style="background-color:#E8E8E8; overflow: hidden;">


<?php

if($_POST['is_user_delete'] != "" && $_POST['pk_delete'] != ""){
    $url_delete_entry = 'https://kyc-application.herokuapp.com/delete_entry/';
    $options_delete_entry = array(
      'http' => array(
        'header'  => array(
                      'IS-USER: '.$_POST['is_user_delete'],
                      'PK: '.$_POST['pk_delete'],
                    ),
        'method'  => 'GET',
      ),
    );
    $context_delete_entry = stream_context_create($options_delete_entry);
    $output_delete_entry = file_get_contents($url_delete_entry, false,$context_delete_entry);
    /*echo $output_can_be_deleted_or_no;*/
    $arr_delete_entry = json_decode($output_delete_entry,true);
    /*echo $arr_can_be_deleted_or_no['status'];*/
}else{
  /*echo "hi";*/
}
?>

<?php
/*if(isset($_POST['submit'])){
  $url_org = 'https://kyc-application.herokuapp.com/get_id_from_text/';
  $options_org = array(
    'http' => array(
      'header'  => array(
                          'TEXT: '.$_POST['search'],
                         ),
      'method'  => 'GET',
    ),
  );
  $context_org = stream_context_create($options_org);
  $output_org = file_get_contents($url_org, false,$context_org);

  $arr_org = json_decode($output_org,true);
  if($arr_org['response'][0]['message'] == 'organization'){
    $string1="<script>window.location.href='search_result.php?is_user=0&id=".$arr_org['response'][0]['pk']."'</script>";
    echo $string1;
  }else{
    $string2="<script>window.location.href='search_result.php?is_user=1&id=".$arr_org['response'][0]['pk']."'</script>";
    echo $string2;
  }
}*/
?>


<?php if($_POST['submit']){

  $string_new="<script>window.location.href='search_result.php?is_user=".$_POST['is_user_field']."&id=".$_POST['id_field']."'</script>";
  echo $string_new;

  /*echo $_POST["is_user_field"];
  echo $_POST["id_field"];*/
}?>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header style="background-color:#08426a;height:110px;-webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     -moz-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;" class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row" >


       <a href="search.php"> <img id="logo1" src="images/green.png"></img></a>
      <h5 style="" id="title2">ADMIN PANEL</h5>
         <span class="mdl-layout-title" id="title1" style="">KYCAPP</span>

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
      </div></div>

<div class="container">
  <div class="row" > 

<script type="text/javascript">
  function fun1(){
    if(document.getElementById("id_field").value == ""){
      alert("Record not found");
      return false;
    }
  }
</script>

  <!-- AutoSearch TEXT field -->
  <!-- First Card Below -->
  <div class="card1" >
    <div class="card-header"> Database</div> 
      <div class="card-block">


        <div class="col-md-12" style="margin-left:11%;">
        <form id="target1" name="target1" class="form-group" method="post" action="" style="padding-bottom:7%">

        <input id="search" name="search" type="text" placeholder="Search firms or individuals" class="form-control input-md" style="width:71%;margin-top:4%;height:39px;border-color: #757575;" required onchange="this.form.submit()" autofocus>
      <input id="is_user_field" name="is_user_field" type="hidden"></input>
      <input id="id_field" name="id_field" type="hidden"></input>
        <button onclick="return fun1()" style="visibility:hidden;display:none;margin-left:58%;margin-top:-3.5%;width:200px;height:37px" class="mdl-button mdl-js-button mdl-button--raised" type="submit" value="Search" id="submit" name="submit">
        </button>
        </form>
          </div>   
      <!-- Below code for three buttons inside -->

       <div class="col-sm-2">
      <a href="new.php?is_user=1">
      <button class="mdl-button mdl-js-button mdl-button--raised new-entry-individual-btn">
      New Entry Individual
      </button>
      </a>
    </div>
    
    <div class="col-sm-1" style="width:10.66667%;">
        </div> 
        <div class="col-sm-2">
          <a href="new.php?is_user=0">
          <button class="mdl-button mdl-js-button mdl-button--raised new-entry-org-btn">
          New Entry Organization
          </button>
          </a>
        </div>

     <div class="col-sm-2" style="width:11.66667%;">
        </div>
        <div class="col-sm-2">

           <a href="missing_reports.php">
           <button class="mdl-button mdl-js-button mdl-button--raised missing-report-btn" data-tooltip-text="Missing Data">
         Missing Report
           </button>
           </a>
        </div>
        <div class="col-sm-2" style="width:11.66667%;">
        </div>
</div>
  </div>
    </div>
      </div>

    <!-- AutoSearch Function ends above -->
       <!--  <div id="tagname" style="height:100px; width:300px; border:1px solid #000;"></div>
 -->



<!-- New row for button below -->
<div class="container">
  <div class="row" > 
        <!-- Second Card below -->

   <div class="card2">
  <div class="card-header2">Assignment Status</div>
<div class="card-block2">
  
    <div class="col-sm-2">
      <a href="search_on_status.php?status=Pending">
      <button class="mdl-button mdl-js-button mdl-button--raised  pending-btn">
      Pending
      </button>
      </a>
    </div>

    <div class="col-sm-2" style="width:11.66667%;">
    </div>
    <div class="col-sm-2">
      <a href="search_on_status.php?status=Work in process">
      <button class="mdl-button mdl-js-button mdl-button--raised workin-btn">
      Work in process
      </button>
      </a>
    </div>
    <div class="col-sm-2" style="width:11.66667%;">
    </div>
    <div class="col-sm-2">

       <a href="search_on_status.php?status=Completed">
       <button class="mdl-button mdl-js-button mdl-button--raised completed-btn">
       Completed
       </button>
       </a>
    </div>

    </div>

</div>

    <!-- AutoSearch Script files don't move -->
     <script type="text/javascript" src="autocomplete-Files/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="autocomplete-Files/jquery.mockjax.js"></script>
        <script type="text/javascript" src="autocomplete-Files/jquery.autocomplete.js"></script>
        <script type="text/javascript" src="autocomplete-Files/SearchValues.js"></script>
        <script type="text/javascript" src="autocomplete-Files/Logic_Search.js"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<!--         <script type="text/javascript" src="autocomplete-Files/styles.css"></script>
 --><!--  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css"
        href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
                $(document).ready(function(){
                    $("#search").autocomplete({

                        minLength:1
                    });
                });
        </script> -->
  </div>  
    </div>
      </div>
</body>

</html>

     

<?php

session_start();

$db = pg_connect("host=ec2-107-20-191-76.compute-1.amazonaws.com port=5432 dbname=deu9vahl80fvjn user=vdvqpruzihrics password=17b3e7a56da97ca021e3da54bb1694bb799849a2b5911014ed6caa05e1e4e02d");
 pg_select($db, 'post_log', $_POST);
 

 $query=pg_query("(SELECT id,name,is_user,account_token,is_active FROM organization_organization WHERE is_active = 'true' AND account_token = '".$_SESSION['account_token']."')
  UNION 
 (SELECT id,name,is_user,account_token,is_active FROM users_users WHERE is_active = 'true' AND account_token = '".$_SESSION['account_token']."')");

/*echo $query;*/

 $json=array();
while ($student = pg_fetch_array($query)) {
    $json[$student["is_user"]."-".$student["id"]] = $student["name"];
}

$textval = json_encode($json);
$foo = "var peoplenames=" . $textval;

file_put_contents('autocomplete-Files/SearchValues.js', $foo);

 

?>