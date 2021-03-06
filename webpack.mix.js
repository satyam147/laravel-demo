const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/demo.js', 'public/js/demo.js')
    .js('resources/js/Auth/register.js', 'public/js/auth/register.js')
    .copy('node_modules/toastr/build/toastr.min.css', 'public/css/toastr.css')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

if (mix.inProduction()) {
    mix.version();
}