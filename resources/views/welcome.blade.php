<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="hr/../../public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <script src="hr/../../public/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
  <script src="hr/../../public/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
  <style>
      body
      {
          
          height: 100%;
          width: 100%;
      }
      .container
      { height :600px;
        width: 1228px;
        margin-top: opx;
        margin-bottom: 0px;
        margin-left: auto;
        margin-right: auto;
       background-image : url("hr/../..//public/img/HR - Copy.jpg");

          
      }
  .modal-header, h5, .close {
	  font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
      background-color: #f9f9f9;
      color:black !important;
      text-align: center;
      font-size: 30px;
	  height:60px;

  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  
  </style>
</head>
<body >

<div class="container">
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:10px 50px;">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4><span class="glyphicon glyphicon-lock"></span> تسجيل دخول</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
            <form role="form"  >
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> أسم المستخدم</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-credit-card"></span> كلمة المرور</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-log-in"></span> تسجيل دخول</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p> <a href="#">تسجيل جديد</a>
          لست مستخدم حالي؟
          </p>
          <p><a href="#">كلمة المرور</a> نسيت كلمة السر؟</p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
   
        $("#myModal").modal({backdrop: "static"});
   
});
</script>

</body>
</html>
