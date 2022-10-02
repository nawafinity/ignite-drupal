const path = require('path')
const mix = require('laravel-mix');

// Template engine
require('laravel-mix-twig');

mix.setResourceRoot('source')
    .setPublicPath('dist')

    .sass('source/scss/ignite.scss', 'dist/webassets/css/ignite.css')
    .sass('source/scss/rtl.scss', 'dist/webassets/css/ignite.rtl.css', {}, [
        require('rtlcss')
    ])
    .js('source/js/ignite.js', 'dist/webassets/js/ignite.js')

    // Copy assets
    .copyDirectory('source/webfonts', 'dist/webassets/webfonts')
    .copyDirectory('source/images', 'dist/webassets/images')

    // Copy slick slider
    .copy('node_modules/slick-carousel/slick/slick.css', 'dist/webassets/plugins/slick/slick.css')
    .copy('node_modules/slick-carousel/slick/slick-theme.css', 'dist/webassets/plugins/slick/slick-theme.css')
    .copy('node_modules/slick-carousel/slick/slick.min.js', 'dist/webassets/plugins/slick/slick.min.js')
    .copy('node_modules/slick-carousel/slick/ajax-loader.gif', 'dist/webassets/plugins/slick/ajax-loader.gif')
    .copyDirectory('node_modules/slick-carousel/slick/fonts', 'dist/webassets/plugins/slick/fonts')

    // Box icons
    .copyDirectory('node_modules/boxicons/css', 'dist/webassets/plugins/boxicons/css')
    .copyDirectory('node_modules/boxicons/fonts', 'dist/webassets/plugins/boxicons/fonts')
    .copyDirectory('node_modules/boxicons/dist', 'dist/webassets/plugins/boxicons/js')

    // Template engine
    .options({
        processCssUrls: false
    })

// Development server


// Disable all notifications
mix.disableNotifications()
