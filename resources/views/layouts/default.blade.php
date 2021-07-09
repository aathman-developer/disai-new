<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!DOCTYPE html>
<html lang="en-US">
<!--<![endif]-->
<head>
    @include('includes.head')
</head>
<body>
<div class="container_custom">
    @if(SITE_MAINTENANCE=='NO')
    <header class="">
        @include('includes.header')
    </header>
    @endif
    <div id="main" class="row m-0 w-100">
        @yield('content')
    </div>
</div>
@include('includes.foot')
</body>
</html>