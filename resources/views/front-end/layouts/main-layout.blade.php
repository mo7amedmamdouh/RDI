<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		@include('front-end.partials._head')

		@yield('styles')
	</head>
	<body class="stretched">
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">
			@include('front-end.partials._header')

			@yield('content')


		</div><!-- #wrapper end -->

		<!-- Go To Top
		============================================= -->
		<div id="gotoTop" class="icon-angle-up"></div>

		@include('front-end.partials._footer')

		@include('front-end.partials._scripts')

		@yield('scripts')

	</body>
</html>
