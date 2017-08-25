let mix = require('laravel-mix');

mix.styles([
	'resources/assets/theme/plugins/bootstrap/css/bootstrap.css',
	'resources/assets/theme/plugins/bootstrap-select/css/bootstrap-select.css',
	'resources/assets/theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css',
	'resources/assets/theme/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
	'resources/assets/theme/plugins/node-waves/waves.css',
	'resources/assets/theme/plugins/animate-css/animate.css',
	'resources/assets/theme/css/style.css',
	'resources/assets/theme/css/themes/all-themes.css'
], 'public/css/backend.css');

mix.scripts([
	'resources/assets/theme/plugins/jquery/jquery.min.js',
	'resources/assets/theme/plugins/bootstrap/js/bootstrap.js',
	'resources/assets/theme/plugins/bootstrap-select/js/bootstrap-select.js',
	'resources/assets/theme/plugins/momentjs/moment.js',
	'resources/assets/theme/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
	'resources/assets/theme/plugins/jquery-datatable/jquery.dataTables.js',
    'resources/assets/theme/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js',
    'resources/assets/theme/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js',
    'resources/assets/theme/plugins/jquery-datatable/extensions/export/buttons.flash.min.js',
    'resources/assets/theme/plugins/jquery-datatable/extensions/export/jszip.min.js',
    'resources/assets/theme/plugins/jquery-datatable/extensions/export/pdfmake.min.js',
    'resources/assets/theme/plugins/jquery-datatable/extensions/export/vfs_fonts.js',
    'resources/assets/theme/plugins/jquery-datatable/extensions/export/buttons.html5.min.js',
    'resources/assets/theme/plugins/jquery-datatable/extensions/export/buttons.print.min.js',
	'resources/assets/theme/plugins/jquery-slimscroll/jquery.slimscroll.js',
	'resources/assets/theme/plugins/jquery-validation/jquery.validate.js',
	'resources/assets/theme/plugins/node-waves/waves.js',
	'resources/assets/theme/js/admin.js',
	'resources/assets/theme/js/pages/examples/sign-in.js',
	'resources/assets/theme/js/demo.js'
], 'public/js/backend.js');
