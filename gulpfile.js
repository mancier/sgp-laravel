var elixir = require('laravel-elixir');
//require('laravel-elixir-vueify');

elixir(function(mix){
    //mix.browserify('../../../node_modules/vue/dist/vue.js');
    mix.browserify('main.js');
    mix.sass(['style.scss'], 'public/css/style.css');
    mix.browserify(['../../../public/jquery-file-upload/js/app.js', 
    	'../../../public/jquery-file-upload/js/jquery.fileupload.js',
    	'../../../public/jquery-file-upload/js/main.js'], 'public/js/jquery-file-upload.js');
});