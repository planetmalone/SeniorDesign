<!DOCTYPE html>
<html>
<head>
	<title>Single Page Application Playground</title>
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap-responsive.css" />
	<link type="text/css" rel="stylesheet" href="css/custom.css" />
	<!-- Javascript --> 
	<script data-main="js/main" src="js/require.js"></script>
</head>
<body>
	<p>First name: <input class="name" type="text" data-bind="value: firstName, typeahead: true"  /></p>
	<p>Last name capitalized: <input type="text" data-bind="value: firstNameCaps" /></p>
	<button class="btn btn-primary" data-bind="click: randomURL">Change URL!</button>
	<button class="btn btn-primary" data-bind="click: disappear">Fade Button!</button>
</body>
</html>