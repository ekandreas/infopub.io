<!DOCTYPE html>
<html>
	@include('views.parts.head')
	<body {{ body_class() }}>
		@include('views.parts.ga')

		<div class="ui container">

			<div class="ui hidden divider"></div>
			@include('views.parts.menu')

			@yield('main')

		</div>

		@include('views.parts.footer')
	</body>
	@include('views.parts.scripts')
</html>
