<?php
$url_search = 'https://kyc-application.herokuapp.com/search/';
$options_search = array(
  'http' => array(
    'header'  => array(
                  'TEXT: Pooja',
                ),
    'method'  => 'GET',
  ),
);
$context_search = stream_context_create($options_search);
$output_search = file_get_contents($url_search, false,$context_search);
/*echo $output_search;*/
$arr_search = json_decode($output_search,true);
/*echo $arr_search['response'][0]['voter_id_details'][0]['name'];
echo $arr_search['response'][0]['voter_id_details'][0]['link'];
echo $arr_search['response'][0]['user_details']['uid'];
echo $arr_search['response'][0]['user_details']['address'];
echo $arr_search['response'][0]['user_details']['name'];
echo $arr_search['response'][0]['user_details']['designation'];
echo $arr_search['response'][0]['user_details']['pan'];
echo $arr_search['response'][0]['user_details']['aadhar_no'];*/

?>

<html>
  <head>
    <!---bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script
  src="https://code.jquery.com/jquery-2.0.2.js"
  integrity="sha256-0u0HIBCKddsNUySLqONjMmWAZMQYlxTRbA8RfvtCAW0="
  crossorigin="anonymous"></script>
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    max-width: 160px;
    max-height: 160px;
    display: block;
}

.file-upload1 {
    display: none;
}
  </style>

<head>
<body>

<form onsubmit="return proceed();" name="Form" id="Form" class="form-horizontal" method="post" action="edit_user.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend><center><?php echo $arr_search['response'][0]['user_details']['name'] ?></center></legend>
<!--avatar upload-->


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
  /*echo $output_img_download;*/
  $arr_img = json_decode($output_img,true);
  /*echo $arr_img[0]['url'];*/
  
  
?>

 <input type="hidden" value="<?php echo $arr_search['response'][0]['user_details']['pk'] ?>" name="org_id" id="org_id"></input>

<img class="profile-pic" style="margin-left:77%;position:absolute;z-index:2;" src="<?php echo $arr_img[0]['url']; ?>" />
<div class="upload-button" style="position:absolute;z-index:2;margin-left:79%;margin-top:13%;"><button disabled>Upload Image</button></div>


<input name="image" id="image" class="file-upload1" style="position:absolute;z-index:-2;margin-left:46%;margin-top:16%;" type="file">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">UID:</label>  
  <div class="col-md-4">
  <input id="uid" name="uid" type="text" value="<?php echo $arr_search['response'][0]['user_details']['uid'] ?>" placeholder="" class="form-control input-md" readonly>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name:</label>  
  <div class="col-md-4">
  <input id="name" name="name" value="<?php echo $arr_search['response'][0]['user_details']['name'] ?>" type="text" placeholder="" class="form-control input-md" readonly>
    
  </div>
</div>
<!--date-->
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label" style="margin-left:29.5%;">Date:</label>
  <div class="col-10">
    <input class="form-control" id="date" name="date" value="<?php echo $arr_search['response'][0]['user_details']['dob'] ?>" style="width:31%;margin-left:34.6%;margin-top:-2%;" type="date" value="" id="example-date-input" readonly>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Profession:</label>
  <div class="col-md-4">
    <select id="profession" name="profession" class="form-control" readonly>
      <option value="<?php echo $arr_search['response'][0]['user_details']['proffesion'] ?>"><?php echo $arr_search['response'][0]['user_details']['proffesion'] ?></option>
      <!-- <option value="Option one">Option one</option>
      <option value="Option two">Option two</option>
      <option value="Option three">Option three</option>
      <option value="Option four">Option four</option> -->
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="specify " class="form-control input-md" readonly>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Address:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address" value="<?php echo $arr_search['response'][0]['user_details']['address'] ?>" readonly><?php echo $arr_search['response'][0]['user_details']['address'] ?></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">PAN:</label>  
  <div class="col-md-4">
  <input id="pan" name="pan" value="<?php echo $arr_search['response'][0]['user_details']['pan'] ?>" type="text" placeholder="" class="form-control input-md" readonly>
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">PAN card:</label>

<div class="col-md-4">
<?php echo $arr_search['response'][0]['pan_card_details'][0]['name']; ?>
</div>


<div class="col-md-4">
<input id="pan_card" name="pan_card" value="<?php echo $_POST['pan_card'] ?>" class="input-file" type="file" disabled>
</div>

<div class="col-md-4">
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
  $arr_img_download = json_decode($output_img_download,true);
  
?>
<button>
<a target="_blank" href="<?php echo $arr_img_download[0]['url']; ?>">View</a>
</button>

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

<div class="col-md-4">
<?php echo $arr_search['response'][0]['telephone_bill_details'][0]['name']; ?>
</div>


<div class="col-md-4">
<input id="telephone_bill"  value="<?php echo $_POST['telephone_bill'] ?>" style="margin-top: -20px;margin-left: 129px;" name="telephone_bill" class="input-file" type="file" disabled>     
 </div>

<div class="col-md-4">
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
  $arr_img_download_2 = json_decode($output_img_download_2,true);
  
?>
<button>
<a target="_blank" href="<?php echo $arr_img_download_2[0]['url']; ?>">View</a>
</button>

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

 <div class="col-md-4">
<?php echo $arr_search['response'][0]['bank_pass_book_details'][0]['name']; ?>
</div>

<div class="col-md-4">
<input id="bank_pass_book"  value="<?php echo $_POST['bank_pass_book'] ?>" style="margin-top: -22px;margin-left: 129px;" name="bank_pass_book" class="input-file" type="file" disabled>     
 </div>

<div class="col-md-4">
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
  $arr_img_download_3 = json_decode($output_img_download_3,true);
  
?>
<button>
<a target="_blank" href="<?php echo $arr_img_download_3[0]['url']; ?>">View</a>
</button>

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

    <div class="col-md-4">
		<?php echo $arr_search['response'][0]['voter_id_details'][0]['name']; ?>
    </div>

	<div class="col-sm-4">
	<input id="voter_id" value="<?php echo $_POST['voter_id'] ?>" style="margin-top: -20px;margin-left: 129px;" name="voter_id" class="input-file" type="file" disabled>     
	 </div>

	 <div class="col-md-4">
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
	  $arr_img_download_4 = json_decode($output_img_download_4,true);
	  
	?>
	<button>
	<a target="_blank" href="<?php echo $arr_img_download_4[0]['url']; ?>">View</a>
	</button>

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

   <div class="col-md-4">
	<?php echo $arr_search['response'][0]['passport_details'][0]['name']; ?>
	</div>

	<div class="col-sm-4">
	<input id="passport" value="<?php echo $_POST['passport'] ?>" style="margin-top: -22px;margin-left: 129px;" name="passport" class="input-file" type="file" disabled>     
	 </div>

	<div class="col-md-4">
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
	  $arr_img_download_4 = json_decode($output_img_download_5,true);
	  
	?>
	<button>
	<a target="_blank" href="<?php echo $arr_img_download_4[0]['url']; ?>">View</a>
	</button>

	</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Adhar card No.</label>  
  <div class="col-md-4">
  <input id="aadhar_no" name="aadhar_no" value="<?php echo $arr_search['response'][0]['user_details']['aadhar_no'] ?>" type="text" placeholder="" class="form-control input-md" readonly>
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Adhar card:</label>

  <div class="col-md-4">
	<?php echo $arr_search['response'][0]['aadhar_card_details'][0]['name']; ?>
  </div>

  <div class="col-md-4">
    <input id="aadhar_card" name="aadhar_card" value="<?php echo $_POST['aadhar_card'] ?>" class="input-file" type="file" disabled>
  </div>
  
  <div class="col-md-4">
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
	  $arr_img_download_6 = json_decode($output_img_download_6,true);
	  
	?>
	<button>
	<a target="_blank" href="<?php echo $arr_img_download_6[0]['url']; ?>">View</a>
	</button>

	</div>

</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-success" style="width: 10em;">Edit</button><span><span></span></span>
    <button onclick="ClickEvent()" class="btn btn-warning"><a style="color:white" href="search.php">Cancel</a></button>
  </div>
</div>

</fieldset>
</form>



</body>
</html>
