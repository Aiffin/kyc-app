<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Button trigger modal -->
<a class="btn btn-primary btn-lg" href="view_popup.php?name=reg_certificate_details&link=<?php echo $arr_img_download[0]['url']; ?>" data-toggle="modal" data-target="#myModal1">
  VIEW 1
</a>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<a class="btn btn-primary btn-lg" href="view_popup.php?name=pan_card_details&link=<?php echo $arr_img_download_2[0]['url']; ?>" data-toggle="modal" data-target="#myModal2">
  VIEW 2
</a>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title 2</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <button type="button" class="btn btn-default btn-next">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
<a href="view_popup.php?name=telephone_bill_details&link=<?php echo $arr_img_download_3[0]['url']; ?>" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal3">
  VIEW 3
</a>

<!-- Modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title 3</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <button type="button" class="btn btn-default btn-next">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
<a class="btn btn-primary btn-lg" href="welcome.html" data-toggle="modal" data-target="#myModal4">
  VIEW 4
</a>

<!-- Modal -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title 4</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$("div[id^='myModal']").each(function(){
  
  var currentModal = $(this);
  
});

</script>
</body>
</html>
