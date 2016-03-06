var elixir = require('laravel-elixir');

config.assetsPath='assets';
config.publicPath='dist';

elixir(function(mix) {

    //mix.less('app.less');
    mix.styles([
        './bower_components/semantic-ui/dist/semantic.css',
    ]);

    mix.scripts([
        'app.js',
        './bower_components/jquery/dist/jquery.js', 
		'./bower_components/semantic-ui/dist/semantic.js', 
        './bower_components/vue/dist/vue.js', 
        'unauthenticated.js', 
        'usergate.js', 
    ]);

    mix.copy([
    	'./bower_components/font-awesome/fonts/*.*',
    	'./assets/fonts',
        './bower_components/sematic-ui/dist/themes/default/assets/fonts/*.*',
    	], 'dist/fonts');

    mix.copy('./assets/img', 'dist/img');

});