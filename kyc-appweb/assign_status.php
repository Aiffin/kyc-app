<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="icon" type="image/png" sizes="36x36" href="images/green.png">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- <link rel="stylesheet" type="text/css" href="css/material.indigo-pink.min.css"> -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.css">
        <link rel="stylesheet" href="css/fileupload.css">
    <link rel="stylesheet" href="css/fileupload.css">
    <!-- Material Design icon font -->

    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<body>
<form style="margin-top:5%" class="form-horizontal" method="post" action="assign_status.php" enctype="multipart/form-data">

<fieldset>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Type of work</label>
  <div class="col-md-4">
    <select id="type_of_work" name="type_of_work" class="form-control">
      <option value="Option one">Option one</option>
      <option value="Option two">Option two</option>
      <option value="Option three">Option three</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Status</label>
  <div class="col-md-4">
    <select id="status" name="status" class="form-control">
      <option value="Pending">Pending</option>
      <option value="Work in process">Work in process</option>
      <option value="Completed">Completed</option>
    </select>
  </div>
</div>
<!--date-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">DATE</label>  
  <div class="col-md-4">
  <input id="date" name="date" value="<?php echo $_POST['date'] ?>" style="width:100%;margin-left:-0.4%;margin-top:0%;" type="Text" value="" id="example-date-input" type="text" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Comment</label>  
  <div class="col-md-4">
  <input id="comment" name="comment" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Firm/ Individual</label>  
  <div class="col-md-4">
  <input id="firm_individual" name="firm_individual" type="text" placeholder="Firm/ Individual" class="form-control input-md">
    
  </div>

</div>

<div style="text-align:center">
<button  class="btn btn-info" type="submit">Assign Status</button>
</div>

</fieldset>
</form>
</body>
</html>