let mix = require('laravel-mix');
mix.setPublicPath('../');
mix.setResourceRoot('../');

mix.styles([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
    //Fancy chưa sử dụng
    //'bower_components/fancybox/dist/jquery.fancybox.min.js',
], '../js/core.common.js')
    .styles([
        'bower_components/wow/dist/wow.min.js',
        'bower_components/waypoints/lib/noframework.waypoints.min.js',
        'bower_components/owl.carousel/dist/owl.carousel.min.js',
        'bower_components/countUp.js/dist/countUp.min.js',
    ], '../js/core.frontend.js')
    .styles([
        'bower_components/admin-lte/dist/js/adminlte.min.js',
        'bower_components/bootstrap-toggle/js/bootstrap-toggle.min.js',
        'bower_components/gijgo/dist/combined/js/gijgo.min.js',
        'bower_components/jquery-nestable/jquery.nestable.js',
    ], '../js/core.backend.js')

//CSS DÙNG CHUNG CHO FRONTEND VÀ BACKEND
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css',
        'bower_components/owl.carousel/dist/assets/owl.carousel.min.css',
        'bower_components/owl.carousel/dist/assets/owl.theme.default.min.css',
        //'bower_components/Ionicons/css/ionicons.min.css',
        //'bower_components/fancybox/dist/jquery.fancybox.min.css',
    ], '../css/core.common.css')
    .styles([
        'bower_components/admin-lte/dist/css/adminlte.min.css',
        'bower_components/bootstrap-toggle/css/bootstrap-toggle.min.css',
        'bower_components/gijgo/dist/combined/css/gijgo.min.css',

    ], '../css/core.backend.css')
    .styles([
        'bower_components/animate.css/animate.min.css'
    ], '../css/core.frontend.css')

    .sass('resources/assets/sass/frontend.scss', '../css/frontend.css')
    .sass('resources/assets/sass/backend.scss', '../css/backend.css')

    .styles('resources/assets/js/scripts.js','../js/scripts.js')
    .styles('resources/assets/js/Backend/scripts.js','../js/be_scripts.js')
    .styles([
        'resources/assets/sass/login1.scss',
    ], '../css/login.css')
    .styles([
        'resources/assets/js/be.common.js',
        'resources/assets/js/be.page.js',
        'resources/assets/js/be.post.js',
        'resources/assets/js/be.product.js',
        'resources/assets/js/be.menu.js',
        'resources/assets/js/be.config.email.js',
        'resources/assets/js/be.categoryproduct.js',
    ], '../js/backend.js')
    .styles([
        'resources/assets/js/login1.js',
    ], '../js/login.js')
    .styles([
        'resources/assets/js/ulti.js',
    ], '../js/ulti.js')

//chu y Doan cuoi nay chay mot lan npm run dev roi dong khoi no lai de chay fontawesome
// .copy([
//     'bower_components/font-awesome/web-fonts-with-css/webfonts/**'
// ], '../webfonts')
