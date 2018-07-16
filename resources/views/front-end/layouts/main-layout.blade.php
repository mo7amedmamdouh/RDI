<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		@include('front-end.partials._head')
		<style media="screen">
      p.justfy-content{
        font-size: 16px;
        text-align: justify;
      }
      p.justfy{
        text-align: justify;
      }
    </style>
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
