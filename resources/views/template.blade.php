<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store Template, Free CSS Template, CSS Website Layout</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{asset('/public/css/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/public/css/style_mobile.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container" class="wrapper">
    @include('layout.header')
    <div id="templatemo_content">
    	<div id="templatemo_content_left">
    		@include('layout.sidebar')
    	</div>
    	<div id="templatemo_content_right">
        	@yield('content')
    	</div>
        <div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    @include('layout.footer')
</div> <!-- end of container -->
<script type="text/javascript" src="{{asset('/public/js/site.js')}}"></script>
</body>
</html>