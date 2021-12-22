<!DOCTYPE html>
<html lang="en">

<head>
	
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Template</title>

	@include("section.assets")
</head>

<body>
	<div class="wrapper">
		@include("section.sidebar")

		<div class="main">
			@include("section.header")

			<main class="content">
				<div class="container-fluid p-0">
					@yield('content')
					
				</div>
			</main>

			@include("section.footer")
		</div>
	</div>

	@include("section.js")

</body>

</html>