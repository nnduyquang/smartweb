let mix = require('laravel-mix');
mix.setPublicPath('../');
mix.setResourceRoot('../');

mix.styles([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
    //Fancy chưa sử dụng
    //'bower_components/fancybox/dist/jquery.fancybox.min.js',
], '../js/core.common.js')

//CSS DÙNG CHUNG CHO FRONTEND VÀ BACKEND
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css',
        //'bower_components/Ionicons/css/ionicons.min.css',
        //'bower_components/fancybox/dist/jquery.fancybox.min.css',
    ], '../css/core.common.css')

    .sass('resources/assets/sass/frontends.scss', '../css/frontends.css')

    .styles('resources/assets/js/scripts.js','../js/scripts.js')
    .styles('resources/assets/js/Backend/scripts.js','../js/be_scripts.js')

//chu y Doan cuoi nay chay mot lan npm run dev roi dong khoi no lai de chay fontawesome
// .copy([
//     'bower_components/fontawesome/web-fonts-with-css/webfonts/**'
// ], '../webfonts')
