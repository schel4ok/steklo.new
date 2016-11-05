const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');


elixir(mix => {

	mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/build/fonts/bootstrap');
	mix.copy('node_modules/font-awesome/fonts', 'public/build/fonts');

	mix.copy('node_modules/lightgallery/dist/img', 'public/build/img');
	mix.copy('node_modules/lightgallery/dist/fonts', 'public/build/fonts');
	mix.copy('node_modules/lightslider/dist/img', 'public/build/img');


    mix.sass('app.scss');
    mix.webpack('app.js');
    mix.version([ 'css/app.css', 'js/app.js' ]);

});