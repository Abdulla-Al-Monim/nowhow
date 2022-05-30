<!DOCTYPE html>
<html>
<head>
	@include('fontend.inc.header')
	@include('fontend.inc.css')
	@yield("css")
</head>
<body class="@yield('home-3')">
	<!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->
	@include('fontend.inc.top-bar')
	@yield("wrapper")
	@include('fontend.inc.footer')
	@include('fontend.inc.script')
	@yield("js")
</body>
</html>