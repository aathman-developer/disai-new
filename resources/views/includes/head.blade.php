<meta property="og:site_name" content="Poornatha" >
<meta property="og:locale" content="en_US" >
<meta property="og:type" content="article" >
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Poornatha">
<link href="{{url('assets/images/favicon.png')}}" rel="shortcut icon" type="image/png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
@if(Route::current() != null)
@if(Route::current()->uri() == 'blog/{url}' || Route::current()->uri() == 'blogs/{url}' || Route::current()->uri() == 'knowledge-center/{url}')
<meta property="test" content="{{ Route::current()->uri() }}">
<title>{{ @$blog->show_title }}</title>
<meta name="description" content="{{ @$blog->short_description }}">
<meta name="keywords" content="{{ @$blog->meta_keyword }}">
<link rel="canonical" href="{{@$blog->custom_url}}" />
<meta property="og:title" content=" {{ @$blog->show_title }}" >
<meta property="og:description" content="{{ @$blog->short_description }}" >
<meta property="og:url" content="{{ @$blog->custom_url }}" >
<meta property="og:image" content="{{ @$blog->show_image }}" >
<meta property="twitter:image" content="{{ @$blog->show_image }}" >
<meta itemprop="image" src="{{ @$blog->show_image }}" >
<link rel="image_src" href="#" src="{{ @$blog->show_image }}" />
@else
<meta property="og:image" content="{{ url('assets/images/poornatha_logo.png') }}" >
<meta property="twitter:image" content="{{ url('assets/images/poornatha_logo.png') }}">
<meta itemprop="image" src="{{ url('assets/images/poornatha_logo.png') }}">
<meta name="keywords" content="Poornatha Partnering Entrepreneurs LLP , Maduari, Poornatha private limited, Journey in Joy, Jnj, Leadership Transformation program, Poornatha foundation">
<link rel="image_src" href="#" src="{{ url('assets/images/poornatha_logo.png') }}">
@endif
@else
<meta property="og:image" content="{{ url('assets/images/poornatha_logo.png') }}" >
<meta property="twitter:image" content="{{ url('assets/images/poornatha_logo.png') }}">
<meta itemprop="image" src="{{ url('assets/images/poornatha_logo.png') }}">
<link rel="image_src" href="#" src="{{ url('assets/images/poornatha_logo.png') }}">
<meta name="keywords" content="Poornatha Partnering Entrepreneurs LLP , Maduari, Poornatha private limited, Journey in Joy, Jnj, Leadership Transformation program, Poornatha foundation">

@endif
<meta name="google-site-verification" content="TwXu-VladfmqSmm62FgqaRJdxYX8PSRymH7XvTtlzGk" />
<link rel="apple-touch-icon" sizes="57x57" href="{{ url('assets/images/favicon.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ url('assets/images/favicon.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ url('assets/images/favicon.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/images/favicon.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ url('assets/images/favicon.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ url('assets/images/favicon.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ url('assets/images/favicon.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ url('assets/images/favicon.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/images/favicon.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/favicon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/images/favicon.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ url('assets/images/favicon.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ url('assets/images/favicon.png') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ url('assets/images/favicon.png') }}">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" type="text/scss" href="{{url('assets/stylesheets/custom.scss')}}" />
<!-- <link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/jquery.fullpage.css')}}" /> -->
<link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/font-awesome.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/bootstrap.min.css')}}" />
<script>
var APP_URL="{{ url("/") }}";
var scrollcHeader=false;
</script>
@if(Route::current() != null)
@if(Route::current()->uri() == 'airbnb-clone' || Route::current()->uri() == 'uber-clone' || Route::current()->uri() == 'taskrabbit-clone' || Route::current()->uri() == 'services' || Route::current()->uri() == 'company' || Route::current()->uri() == 'contacts' || Route::current()->uri() == '/' || Route::current()->uri() == 'products_new' )
<script>
scrollcHeader=true;
</script>
@endif
@endif
<script type="text/javascript">
	if (screen && screen.width > 1000) 
	{
    	document.write('<link rel="stylesheet" type="text/css" href="assets/stylesheets/animate.css" />');
	}
</script>
<link rel="stylesheet" href="{{url('assets/stylesheets/owl.carousel.css')}}">
<link rel="stylesheet" href="{{url('assets/stylesheets/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/custom.css?v=1')}}" />
<link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/slick.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/fancybox.css')}}" />

    


