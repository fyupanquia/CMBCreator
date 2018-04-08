let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
			'resources/assets/css/themes/all-themes.css',
			'resources/assets/plugins/bootstrap/css/bootstrap.css',
			'resources/assets/plugins/bootstrap-select/css/bootstrap-select.css',
			'resources/assets/plugins/node-waves/waves.css',
			'resources/assets/plugins/waitme/waitMe.css',
			'resources/assets/plugins/animate-css/animate.css',
			'resources/assets/plugins/sweetalert/sweetalert.css',
			'resources/assets/plugins/morrisjs/morris.css',

			'resources/assets/plugins/ion-rangeslider/css/ion.rangeSlider.css',
			'resources/assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css',

			'resources/assets/plugins/nestable/jquery-nestable.css',

			'resources/assets/css/style.css',
			], 'public/css/dashboard/welcome.css')
	.scripts([

			'resources/assets/plugins/jquery/jquery.min.js',	
			'resources/assets/plugins/bootstrap/js/bootstrap.js',	
			'resources/assets/plugins/bootstrap-select/js/bootstrap-select.js',	
			'resources/assets/plugins/jquery-slimscroll/jquery.slimscroll.js',	
			'resources/assets/plugins/node-waves/waves.js',	

			'resources/assets/plugins/waitme/waitMe.js',
			'resources/assets/plugins/bootstrap-notify/bootstrap-notify.js',
			'resources/assets/plugins/sweetalert/sweetalert.min.js',

			'resources/assets/plugins/ion-rangeslider/js/ion.rangeSlider.js',
			
			'resources/assets/plugins/nestable/jquery.nestable.js',
				
			'resources/assets/plugins/jquery-countto/jquery.countTo.js',	
			'resources/assets/plugins/raphael/raphael.min.js',	
			'resources/assets/plugins/morrisjs/morris.js',	
			'resources/assets/plugins/chartjs/Chart.bundle.js',	
			'resources/assets/plugins/flot-charts/jquery.flot.js',
			'resources/assets/plugins/flot-charts/jquery.flot.resize.js',
			'resources/assets/plugins/flot-charts/jquery.flot.pie.js',
			'resources/assets/plugins/flot-charts/jquery.flot.categories.js',
			'resources/assets/plugins/flot-charts/jquery.flot.time.js',
			'resources/assets/plugins/jquery-sparkline/jquery.sparkline.js',
			'resources/assets/js/admin.js',
			//'resources/assets/js/pages/index.js',
			'resources/assets/js/demo.js'
			],'public/js/dashboard/welcome.js')

/*mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
*/