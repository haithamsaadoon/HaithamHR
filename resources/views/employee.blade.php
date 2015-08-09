@extends('layouts.master')
<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 @section("styles")
  <link href="hr/../../public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="hr../../public/bower_components/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
  <link href="hr/../../public/bower_components/bootstrap-rtl/dist/css/bootstrap-flipped.min.css" rel="stylesheet" type="text/css"/>
@stop
@section("scripts")
  <script src="hr/../../public/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
  <script src="hr/../../public/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
@stop
  <style>
      
      .tab-content{padding-right: 1em;}
  </style>
</head>
 <body>
     @section("body")
     <ul class="nav nav-tabs ">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>السلام عليكم</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>
     @stop
 </body>
</html>