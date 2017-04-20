

<html>
  <head>

    <!---bootstrap-->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" type="text/css" href="css/material.indigo-pink.min.css"> -->

<link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="css/bootstrap.css">


 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
    .upload-button {
    padding: 4px;
    border: 1px solid black;
    border-radius: 5px;
    display: block;
    float: left;
}

.profile-pic {
    max-width: 130px;
    max-height: 130px;
    display: block;
}

.file-upload1 {
    display: none;
}
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    /*position: relative;*/
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}


  </style>
   <!-- Datepicker -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> 
 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<script type="text/javascript" src="js/jquery.plugin.js"></script> 
<script type="text/javascript" src="js/jquery.datepick.js"></script>
<script type="text/javascript">
$(function() {
  $( ".datepicker.picker" ).datepicker({dateFormat: 'dd/mm/yy',maxDate:0,changeMonth : true,changeYear : true,yearRange: '-100y:c+nn',});
});

$(function() {
  $( ".datepicker.pick" ).datepicker({dateFormat: 'dd/mm/yy',changeMonth : true,
            changeYear : true});
});
</script> 

<script type="text/javascript">
  function validate(){
    var Form=document.getElementById("Form_popup");
    if(Form.checkValidity()==true)
    {
      /*alert("hello");*/
      return proceed();

    }
  }
</script>

<script type="text/javascript">
 $(document).ready(function () {
        $("#statuss").click(function () {

            if ($("#statuss").val() == "Completed") {
                $("#commentsss").attr("required", "required");
            }
            else
              $("#commentsss").attr("required", false);
        });
});
</script>

<script>

function proceed(){

var n1=document.forms["Form_popup"]["name1"].value;
if(n1==null || n1==''){
  alert("Name is required");
  return false;
}

var a=document.forms["Form_popup"]["uid"].value;
if(a==null || a==''){
        /*var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for( var i=0; i < 7; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));


        

        var mystring= (document.getElementById('name1').value).substring(0, 3);
        var uid_gen=mystring+text;*/
        document.getElementById('uid').value = document.getElementById('uid_format_org_page').value;
        document.getElementById('uid_in_popup').value = document.getElementById('uid_format_org_page').value;

        /*alert("UID generated: "+uid_gen);*/
        var yourUl = document.getElementById("popup1");
        yourUl.style.display = yourUl.style.display === 'none' ? '' : 'none';
        return false;
}else{   


        document.getElementById('uid_in_popup').value = document.getElementById('uid').value;

        /*alert("UID generated: "+uid_gen);*/
        var yourUl = document.getElementById("popup1");
        yourUl.style.display = yourUl.style.display === 'none' ? '' : 'none';
        return false;
}
}
</script>

<script type="text/javascript">

  function check_pan_card_1_user(){
    pan_card_1_user = document.getElementById('pan_card_1');
    if(pan_card_1_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(pan_card_1_user.value);
        if (!isValid) {
          document.getElementById('pan_card_1').value="";
          alert('Pan Card: Only image or pdf files allowed!');
          return false;
        }
    }
  }

  function check_telephone_bill_1_user(){
    telephone_bill_1_user = document.getElementById('telephone_bill_1');
    if(telephone_bill_1_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(telephone_bill_1_user.value);
        if (!isValid) {
          document.getElementById('telephone_bill_1').value="";
          alert('Telephone Bill: Only image and pdf files allowed!');
          return false;
        }
    }
  }

  function check_bank_pass_book_1_user(){
    bank_pass_book_1_user = document.getElementById('bank_pass_book_1');
    if(bank_pass_book_1_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(bank_pass_book_1_user.value);
        if (!isValid) {
          document.getElementById('bank_pass_book_1').value="";
          alert('Bank Pass Book: Only image and pdf files allowed!');
          return false;
        }
    }
  }

  function check_voter_id_1_user(){
    voter_id_1_user = document.getElementById('voter_id_1');
    if(voter_id_1_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(voter_id_1_user.value);
        if (!isValid) {
          document.getElementById('voter_id_1').value="";
          alert('Voter Id: Only image and pdf files allowed!');
          return false;
        }
    }

  }

  function check_passport_1_user(){
    passport_1_user = document.getElementById('passport_1');
    if(passport_1_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(passport_1_user.value);
        if (!isValid) {
          document.getElementById('passport_1').value="";
          alert('Passport: Only image and pdf files allowed!');
          return false;
        }
    }
  }

  function check_aadhar_card_1_user(){
    aadhar_card_1_user = document.getElementById('aadhar_card_1');
    if(aadhar_card_1_user.files.length != 0){
        var isValid = /\.(jpg|jpeg|png|gif|pdf)$/.test(aadhar_card_1_user.value);
        if (!isValid) {
          document.getElementById('aadhar_card_1').value="";
          alert('Aadhar Card: Only image and pdf files allowed!');
          return false;
        }
    }

  }

  function check_image_1_user(){
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
</head>
<body style="background-color:#E8E8E8;">

<?php

session_start();
/*echo "<script>alert('hi')</script>";*/
$url_uid_popup = 'https://kyc-application.herokuapp.com/get_uid/';
$options_uid_popup = array(
  'http' => array(
    'header'  => array(
                        'ACCOUNT-TOKEN: '.$_SESSION['account_token'],
                        ),
    'method'  => 'GET',
  ),
);
$context_uid_popup = stream_context_create($options_uid_popup);
$output_uid_popup = file_get_contents($url_uid_popup, false,$context_uid_popup);
/*echo $output_uid;*/
$arr_uid_popup = json_decode($output_uid_popup,true);


/*echo "<script type='text/javascript'>alert('$output_uid');</script>";*/


?>



<script type="text/javascript">
  function submit_form(){
    // new entry added should be displayed as partners name in organization page
        
        for(var p=0; p<10; p++){
            if(document.getElementsByClassName('partner_names')[p]){
                        if(document.getElementsByClassName('partner_names')[p].value==""){
                           document.getElementsByClassName('partner_names')[p].value=document.getElementById('name1').value;
                           break;
                        }
             /*alert(p);
             alert(document.getElementsByClassName('partner_names')[p].value);
             if(document.getElementsByClassName('partner_names')[p].value == ""){
                alert("Null Value");
             }else{
                alert("Not Null Value");
             }*/
            
            }
        }

    var myform = document.getElementById("Form_popup");
    var fd = new FormData(myform);

    
    $.ajax({ url: 'submit_popup.php',
         data: fd,
         cache: false,
         processData: false,
         contentType: false,
         type: 'POST',
         success: function(output) {
                      /*return false;*/
                      /*alert("hi");*/
                      /*$find('body').click();*/
                     
                      $('#popup1').hide();
                      $('#myModal').click();
                      /*$('#myModal').modal('hide');*/
                      /*$('#refresh').load(' #refresh');*/
                  }
    });

    /*window.history.go(-1);*/

  }
</script>
<script type="text/javascript">
/*function go_back_1(){
  window.history.go(-1);
}*/
</script>

<!-- <button id="go_back_1" onclick="go_back_1();"></button> -->
<script type="text/javascript">
    function make_uid_null(){
    
    $('#uid').val("");
    document.getElementById("popup1").style.display='none';
    /*alert("helo");*/
  }
</script>


<!-- <p>Click on the "x" symbol to close the alert message.</p> -->
<div class="alert" id="popup1" class="popup1" style="display:none;text-align:center;position:absolute;
    width:100%;
    top: 60%;z-index:2">
 <!--  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> -->
 <!--  <form method="post" action="new_user.php">  -->
  <label>UID Generated</label><br>
  <input type="text" id="uid_in_popup" name="uid_in_popup" style="text-align:center;background-color:transparent;color:black;border:none"></input><br><br>
  <button style="margin-left:1%" id="done" class="btn btn-success" name="done" onclick="submit_form()">Done</button>
  <button onclick="make_uid_null()" id="cancel1" class="btn btn-warning" name="cancel1">Cancel</button>
  <!-- </form> -->
</div>




<div class="demo-layout-transparent mdl-layout mdl-js-layout">
      <header style="background-color:#08426a;height:110px;-webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     -moz-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
     box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;" class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row" >

        <a href="search.php"><img style="margin-top:5%;margin-left:28px;width:50px;height:50px" src="images/green.png"></img></a>
<h5 style="margin-left:35%;margin-top:9%;">New Entry Individual</h5>
         <span class="mdl-layout-title" style="margin-left:26%;margin-top:7%;">KYCApp</span>
          <!-- Add spacer, to align navigation to the right -->
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">KYCAPP</span>
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
      </header>

<form name="Form_popup" id="Form_popup" class="form-horizontal" method="post" action="new_user_popup.php" enctype="multipart/form-data">
<fieldset>

<input type="hidden" name="uid_format_org_page" id="uid_format_org_page" value="<?php echo $arr_uid_popup['uid'] ?>"></input>
<!-- Form_popup Name -->
<!-- <legend><center>New Individual Entry</center></legend> -->
<!--avatar upload-->

<div style="margin-top:7%">
<img class="profile-pic" style="margin-left:77%;position:absolute;z-index:2;" src="images/boy-512.png" />
<div class="upload-button" style="position:absolute;z-index:2;margin-left:79%;margin-top:23%;">Upload Image</div>
<input onchange="check_image_1_user()" name="image" id="image" class="file-upload1" style="position:absolute;z-index:-2;margin-left:46%;margin-top:16%;" type="file">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">UID:</label>  
  <div class="col-md-4">
  <input id="uid" name="uid" type="text" value="<?php echo $_POST['uid'] ?>" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name:</label>  
  <div class="col-md-4">
  <input id="name1" name="name1" value="<?php echo $_POST['name'] ?>" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!--date-->
<div class="form-group row">

  <label for="example-date-input" class="col-2 col-form-label" style="margin-left:24.5%;">DOB:</label>
  <div class="col-4">
    <input class="form-control datepicker picker" id="date1" name="date1" value="<?php echo $_POST['date1'] ?>" style="width:28.9%;margin-left:35.6%;margin-top:-4%;" type="text" readonly>

  </div>
</div>
<img src="/images/calendar.png" style="margin-left: 68%;margin-top:-15%">

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Profession:</label>
  <div class="col-md-4">
    <select id="profession" name="profession" class="form-control">
      <option value="Option one"><?php echo $_POST['profession'] ?></option>
      <option value="Option one">Option one</option>
      <option value="Option two">Option two</option>
      <option value="Option three">Option three</option>
      <option value="Option four">Option four</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="specify " class="form-control input-md" >
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Address:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address" value="<?php echo $_POST['address'] ?>">default text</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">PAN:</label>  
  <div class="col-md-4">
  <input id="pan" name="pan" value="<?php echo $_POST['pan'] ?>" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">PAN card:</label>
  <div class="col-md-4">
    <input  onchange="check_pan_card_1_user()" id="pan_card_1" name="pan_card_1" value="<?php echo $_POST['pan_card_1'] ?>" class="input-file" type="file">
  </div>
</div>

<!--address proof-->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Address Proof:</label>
  <div class="col-md-4">
   <label class="checkbox-inline" for="checkboxes-0">
     <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">Telephone</label>
<input onchange="check_telephone_bill_1_user()" id="telephone_bill_1"  value="<?php echo $_POST['telephone_bill_1'] ?>" style="margin-top: -20px;margin-left: 129px;" name="telephone_bill_1" class="input-file" type="file">     
 </div>
</div>


    <div class="form-group">
 <label class="col-md-4 control-label" for="checkboxes"></label>
 <div class="col-md-4">
   <label class="checkbox-inline" for="checkboxes-0">
     <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">Bank Passbook</label>
<input onchange="check_bank_pass_book_1_user()" id="bank_pass_book_1"  value="<?php echo $_POST['bank_pass_book_1'] ?>" style="margin-top: -22px;margin-left: 129px;" name="bank_pass_book_1" class="input-file" type="file">     
 </div>
</div>

<!--ID pROOF-->

<!--address proof-->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">ID Proof:</label>
  <div class="col-md-4">
   <label class="checkbox-inline" for="checkboxes-0">
     <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">voter ID</label>
<input onchange="check_voter_id_1_user()" id="voter_id_1" value="<?php echo $_POST['voter_id_1'] ?>" style="margin-top: -20px;margin-left: 129px;" name="voter_id_1" class="input-file" type="file">     
 </div>
</div>


    <div class="form-group">
 <label class="col-md-4 control-label" for="checkboxes"></label>
 <div class="col-md-4">
   <label class="checkbox-inline" for="checkboxes-0">
     <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">Passport:</label>
<input onchange="check_passport_1_user()" id="passport_1" value="<?php echo $_POST['passport_1'] ?>" style="margin-top: -22px;margin-left: 129px;" name="passport_1" class="input-file" type="file">     
 </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Adhar card No.</label>  
  <div class="col-md-4">
  <input id="aadhar_no" name="aadhar_no" value="<?php echo $_POST['aadhar_no'] ?>" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Adhar card:</label>
  <div class="col-md-4">
    <input onchange="check_aadhar_card_1_user()" id="aadhar_card_1" name="aadhar_card_1" value="<?php echo $_POST['aadhar_card_1'] ?>" class="input-file" type="file">
  </div>
</div>

<div class="present_fields_1">
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Type of work:</label>
  <div class="col-md-4">
    <select id="type_of_work[]" name="type_of_work[]" class="form-control">
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
    <select id="statuss" name="status[]" class="form-control">
      <option value="Pending">Pending</option>
      <option value="Work in process">Work in process</option>
      <option value="Completed">Completed</option>
    </select>
  </div>
</div>
<!--date-->
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label" style="margin-left:24.5%;">DATE:</label>
  <div class="col-4">
    <input class="form-control datepicker pick" id="date[]" name="date[]" value="<?php echo $_POST['date'] ?>" style="width:28.9%;margin-left:35.6%;margin-top:-4%;" type="text" readonly>
  </div>
  <script id="jsbin-javascript">
  var date = new Date();
  var day = date.getDate();
  var month = date.getMonth() + 1;
  var year = date.getFullYear();

  if (month < 10) month = "0" + month;
  if (day < 10) day = "0" + day;

  var today = day + "-" + month + "-" + year;
   $(".datepicker.pick").val(today);
</script>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Comment:</label>  
  <div class="col-md-4">
  <input id="commentsss" name="comment[]" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<a href="#" class="remove_field_pre1" style="margin-left: 426px; margin-top: -42px;position:absolute">
 <img src="images/del24.png" >
</a>
</div>

<div class="form-group">

<div class="col-md-8 col-sm-12 col-24">

    <div class="input_fieldss" style="color:black">
         <button class="add_fields btn" onclick="incrementValue()" style="margin-left: 443px;">Add</button>
         <div>
         <input type="text" name="mytextt[]" hidden="" ></div>
</div>
</div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>

  <div class="col-md-4" style="text-align:center">
    <button onclick="return validate();" id="generate_btn" name="generate_btn">Generate</button>
    <!-- <button id="singlebutton" style="margin-left:13%;" name="singlebutton" class="btn btn-primary"><a style="color:white" onclick="goBack()">Discard</a></button> -->

  </div>
</div>

</fieldset>
</form>


<script>
function goBack() {
    window.history.back();
}
</script>
<script type="text/javascript">


     $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fieldss"); //Fields wrapper
    var add_button      = $(".add_fields"); //Add button ID

    var wrapper_pre1         = $(".present_fields_1"); //Fields wrapper
    var x = 1; //initlal text box count
    var date = new Date();
  var day = date.getDate();
  var month = date.getMonth() + 1;
  var year = date.getFullYear();

  if (month < 10) month = "0" + month;
  if (day < 10) day = "0" + day;

  var today = day + "-" + month + "-" + year;
   
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
              x++; //text box incrementa

              $('<div style="margin-left:50%;"><div class="form-group"><label class="control-label" for="selectbasic" style="margin-left:-220px;">Type of work</label><div class="col-md-6"><select id="type_of_work[]" name="type_of_work[]" class="form-control" style="margin-left:17%;width:222%"><option value="Option one">Audit Report</option><option value="Option two">ITR filing</option><option value="Option three">VAT Filing</option><option value="Option four">Accounting</option><option value="Option five">Registration</option><option value="Option six">Certification</option><option value="Option seven">Others</option></select></div></div><div class="form-group"> <label class="col-md-4 control-label" for="selectbasic" style="margin-left:-29%">Status</label><div class="col-md-6"><select id="status11' + x + '" name="status[]" style="width:223%;margin-left:3%;" class="form-control"><option value="Pending">Pending</option><option value="Work in process">Work in process</option><option value="Completed">Completed</option></select></div></div><div class="form-group row"><label for="example-date-input" class="col-2 col-form-label" style="margin-left:-15.5%;";">DATE</label><div class="col-8"><input class="form-control datepicker pick" id="date11' + x + '" name="date[]" value="<?php echo $_POST['date'] ?>" style="width:86%;margin-left:11.6%;margin-top:-10%;" type="text" readonly></div></div><div class="form-group"><label class="col-md-4 control-label" for="textinput" style="margin-left:-36%">Comment</label><div class="col-md-4"><input id="comments11' + x + '" name="comment[]" type="text" placeholder="" class="form-control input-md" style="width:432%;margin-left:26%"></div></div></center><a href="#" class="remove_field" style="margin-left: 230px; margin-top: -40px;position:absolute"><img src="images/del24.png"></a></a></div>').insertBefore(add_button) //add input box\         
              var newInput11=$("#date11" + x).datepick({dateFormat: 'dd/mm/yy',changeMonth : true,
            changeYear : true});
              newInput11.datepicker({dateFormat: 'dd/mm/yyyy'}).datepicker("setDate", new Date());
              $("#status11" + x).on("click",".form-control",function () {

                 if ($("#status11" + x).val() == "Completed") {
                     $("#comments11" + x).attr("required", "required");
                 }
                 else{
                     $("#comments11" + x).attr("required", false);
                 }
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
</body>
</html>
