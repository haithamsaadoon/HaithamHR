<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="hr/../../public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="hr/../../public/bower_components/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
  <link href="hr/../../public/styles/login.css" rel="stylesheet" type="text/css"/>
  <script src="hr/../../public/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
  <script src="hr/../../public/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>


</head>
      
    <body>
      <div class="page">
        <div class="login-container" id="logincontainer">
          <div class="login-header">
              <h4>تسجيل دخول</h4>
          </div>
            <div class="login-body">
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
        </div>
          <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>ملاحظة!</strong> يرجى الاطلاع على المعلومات ادناه
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          </div>
        </div>
        <script>
        $(document).ready(function(){
            $("#logincontainer").fadeIn(1000);
        });
        
        </script>
    </body>
</html>
