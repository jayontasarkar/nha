let mix = require('laravel-mix');

mix.styles([
	'resources/assets/theme/plugins/bootstrap/css/bootstrap.css',
	'resources/assets/theme/plugins/node-waves/waves.css',
	'resources/assets/theme/plugins/animate-css/animate.css',
	'resources/assets/theme/css/style.css',
	'resources/assets/theme/css/themes/all-themes.css'
], 'public/css/backend.css');

mix.scripts([
	'resources/assets/theme/plugins/jquery/jquery.min.js',
	'resources/assets/theme/plugins/bootstrap/js/bootstrap.js',
	'resources/assets/theme/plugins/bootstrap-select/js/bootstrap-select.js',
	'resources/assets/theme/plugins/jquery-slimscroll/jquery.slimscroll.js',
	'resources/assets/theme/plugins/jquery-slimscroll/jquery.slimscroll.js',
	'resources/assets/theme/plugins/node-waves/waves.js',
	'resources/assets/theme/js/admin.js',
	'resources/assets/theme/js/demo.js'
], 'public/js/backend.js');
