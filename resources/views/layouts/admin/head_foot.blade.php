<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Live-well | Admin Panel</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<link href="{{url('assets/images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
	<link rel="icon" href="{{ url("storage/app/images/") }}">
	<link rel="stylesheet" href="{{ url("assets/stylesheets/material.css")}}" />
	<link rel="stylesheet" href="{{ url("assets/stylesheets/jquery.dataTables.min.css")}}" />
	<link rel="stylesheet" href="{{ url("assets/stylesheets/admin.css")}}" />	
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css"> -->
	<link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/bootstrap.min.css')}}" />
	@if(Request::segment(2)==null)
	<link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/bootstrap.min.css')}}" />
	@endif
</head>
<body class="fixed-sidebar fixed-header content-appear skin-default">
<div class="row p-0 m-0" ng-app="myApp">
@if(Request::segment(2)!=null)
@include('admin.header')
@endif
@if(Request::segment(2)==null || Request::segment(2)=='login')
<div class="col-12 mainclass">
@else
<div class="col s12 m12 l9 offset-l3 mainclass">
@endif
@yield('body')
</div>
@if(Request::segment(2)!=null)
@include('admin.footer')
@endif
</div>

<script src="{{ url("assets/scripts/jquery-1.12.3.min.js") }}" type="text/javascript"></script>
<script src="{{ url("assets/scripts/tether.min.js") }}"></script>
<script src="{{ url("assets/scripts/angular.min.js") }}"></script>
<script src="{{ url("assets/scripts/moment.min.js") }}"></script>
<script src="{{ url("assets/scripts/material.js")}}" /></script>


<script>
var APP_URL="{{ url("/") }}";
var ADMIN_URL="{{ url('admin') }}";
var app = angular.module('myApp', []);
app.directive('myEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if(event.which === 13) {
                scope.$apply(function (){
                    scope.$eval(attrs.myEnter);
                });

                event.preventDefault();
            }
        });
    };
});
</script>
<script src="{{ url("assets/scripts/admin_custom.js") }}"></script>
<script src="{{ url("assets/scripts/jQuery-validation.min.js") }}" type="text/javascript"></script>
<script src="{{ url("assets/scripts/jquery.dataTables.min.js") }}" type="text/javascript"></script>
<script src="{{ url("assets/scripts/dataTables.buttons.min.js") }}" type="text/javascript"></script>
<script src="{{ url("assets/scripts/buttons.html5.min.js") }}" type="text/javascript"></script>
<script src="{{ url("assets/scripts/buttons.print.min.js") }}" type="text/javascript"></script>
<scrript src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js"></script>
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script> -->

    <!-- Main Quill library -->
<script src="{{ url("assets/scripts/quill.js") }}" type="text/javascript"></script>
<script src="{{ url("assets/scripts/quill.min.js") }}" type="text/javascript"></script>    
<!-- Theme included stylesheets -->
<link rel="stylesheet" href="{{ url("assets/stylesheets/quill.snow.css")}}" />
<link rel="stylesheet" href="{{ url("assets/stylesheets/quill.bubble.css")}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal-bs3patch.css"/>
</body>
</html>	