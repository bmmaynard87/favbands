var elixir = require('laravel-elixir');

elixir(function(mix) {

    mix.sass('app.scss');

    mix.scripts([
    	'../../../node_modules/angular/angular.min.js',
    	'../../../node_modules/angular-ui-bootstrap/dist/ui-bootstrap.js',
    	'../../../node_modules/angular-ui-bootstrap/dist/ui-bootstrap-tpls.js'
	], 'public/js/angular.js');
    
	mix.scripts([
		'angular/app.js',
		'angular/controllers/BandsController.js'
	], 'public/js/app.js');

	mix.scripts([
		'../../../node_modules/jquery/dist/jquery.min.js',
		'script.js'
	], 'public/js/script.js');

    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/css/~bootstrap-sass/assets/fonts/bootstrap');
});