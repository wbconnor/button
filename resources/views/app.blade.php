<!DOCTYPE html>
<html lang="en">
<head>

	<!-- From the beautiful mind of Brent Connor -->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('head')

	<title>
		@yield('title')
	</title>

	<!-- CSS Links -->
	<link href="/css/style.css" rel="stylesheet">
	@yield('page-specific-css')

</head>

<body>

	<div class="container">

		@yield('content')

	</div>

	@yield('foot-script')

</body>
</html>
