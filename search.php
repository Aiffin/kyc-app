<html>
  <head>
    <!---bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 -->  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.css">
    <!-- Material Design icon font -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    </style>
    <style type="text/css">
      .form-control{
      border: 2px solid #74b25e;
    border-radius: 7px;
      }
    </style>
  </head>

<body style="background-color:#E8E8E8;overflow-x:hidden;">

<?php
if(isset($_POST['submit'])){
  $url_org = 'https://kyc-application.herokuapp.com/search/';
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
  /*echo $output_org;*/
  $arr_org = json_decode($output_org,true);
  if($arr_org['response'][0]['message'] == 'organization'){
    $string1="<script>window.location.href='search_organization.php?text=".$arr_org['response'][0]['text']."'</script>";
    echo $string1;
  }else{
    $string2="<script>window.location.href='search_user.php?text=".$arr_org['response'][0]['text']."'</script>";
    echo $string2;
  }
}
?>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
      <header style="background-color:#08426a;height:110px;-webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     -moz-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;" class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row" >

        <img style="margin-top:5%;margin-left:28px;width:50px;height:50px" src="images/green.png"></img>
<h5 style="margin-left:35%;margin-top:9%;">Admin Panel</h5>
         <span class="mdl-layout-title" style="margin-left:26%;margin-top:7%;">KYChome</span>
         <a href="index.php"><img style="margin-top:100%;margin-left:28px;width:40px;height:40px" src="images/logout1.png"></img></a>
          <!-- Add spacer, to align navigation to the right -->
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="search.php">Home</a>
          <a class="mdl-navigation__link" href="new_organization.php">New Entry Organization</a>
          <a class="mdl-navigation__link" href="new_user.php">New Entry Individual</a>
          <a class="mdl-navigation__link" href="missing_reports.php">Missing Reports</a>
          <a class="mdl-navigation__link" href="search.php">Admin</a>
          <a class="mdl-navigation__link" href="">Help</a>
          <a class="mdl-navigation__link" href="">About Us</a>
          <a class="mdl-navigation__link" href="">Contact</a>
        </nav>
      </div>
        </div>
    
     
 <div class="container">
  <div class="row" style="margin-top:33%;"> 
  
    <div class="col-md-12" style="margin-left:11%;">
    <form class="form-group" method="post" action="" style="padding-bottom:7%">
    <input id="search" name="search" type="text" placeholder="Search firm,Individual" class="form-control input-md" style="width:55%;margin-top:-8%;height:39px" required>
    <button style="background-color:#74b25e;margin-left:58%;margin-top:-3.5%;color:white;width:200px;height:37px" class="mdl-button mdl-js-button mdl-button--raised" type="submit" value="Search" id="submit" name="submit">
   <p style="margin-top:7px;"> Search </p>
   </button>
    </form>
    </div>

    <div class="col-sm-1" style="width:10.66667%;">
    </div> 
    <div class="col-sm-2">
      <a href="new_organization.php">
      <button style="background-color:#74b25e;color:white;width:200px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
      <p style="margin-top:7px;">New Entry<br>Organization</p>
      </button>
      </a>
    </div>
    <div class="col-sm-2" style="width:11.66667%;">
    </div>
    <div class="col-sm-2">
      <a href="new_user.php">
      <button style="background-color:#74b25e;color:white;width:200px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
      <p style="margin-top:7px;">New Entry<br>Individual</p>
      </button>
      </a>
    </div>
    <div class="col-sm-2" style="width:11.66667%;">
    </div>
    <div class="col-sm-2">

       <a href="missing_reports.php">
       <button style="background-color:#74b25e;color:white;width:200px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
       <p style="margin-top:7px;">Missing<br>Report</p>
       </button>
       </a>
    </div>

    <div class="col-sm-2">
      <a href="pending_req.php">
      <button style="background-color:#74b25e;color:white;width:200px;height:60px;margin-top:12%;margin-left:76%;" class="mdl-button mdl-js-button mdl-button--raised">
      <p style="margin-top:7px;">Pending<br>Request</p>
      </button>
      </a>
    </div>

    <div class="col-sm-2" style="width:11.66667%;">
    </div>
    <div class="col-sm-2">
      <a href=".php">
      <button style="background-color:#74b25e;color:white;width:200px;height:60px;margin-top:12%;margin-left:76%;" class="mdl-button mdl-js-button mdl-button--raised">
      <p style="margin-top:7px;">Work In<br>Process</p>
      </button>
      </a>
    </div>
    <div class="col-sm-2" style="width:11.66667%;">
    </div>
    <div class="col-sm-2">

       <a href=".php">
       <button style="background-color:#74b25e;color:white;width:200px;height:60px;margin-top:12%;margin-left:76%;" class="mdl-button mdl-js-button mdl-button--raised">
       <p style="margin-top:7px;">Completed<br></p>
       </button>
       </a>
    </div>

    <!-- AutoSearch Script -->
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css"
        href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
                $(document).ready(function(){
                    $("#search").autocomplete({
                        source:'getautocomplete.php',
                        minLength:1
                    });
                });
        </script>
        
</div>
</div>
</div>
</body>
</html>