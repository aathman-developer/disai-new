<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<!-- Preloader -->
<div id="preloader">
<div class="loader">
    <span></span>
    <span></span>
    <span></span>
</div>
</div>
<div class="container">
    <div id="main" class="row">
            @yield('content')
    </div>
</div>
@include('includes.foot')
</body>
</html>