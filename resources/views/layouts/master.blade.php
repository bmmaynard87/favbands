<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Favorite Bands</title>
    
    <link rel="stylesheet" href="{{ asset('sortable/css/sortable-theme-bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

	<script type="text/javascript" src="{{ asset('js/angular.js') }}"></script>
</head>
<body>
	<nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">My Favorite Bands</a>
            </div>
        </div>
    </nav>
	<div class="container" id="main">
		<div id="main" ng-app="myApp" class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="padding: 0;">
                @yield('content')
            </div>
        </div>
    </div>
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('sortable/js/sortable.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>