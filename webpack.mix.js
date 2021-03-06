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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
mix.scripts([
    'resources/assets/js/admin/delete.js',
    'resources/assets/js/admin/search.js'
], 'public/js/admin/actions.js');

// mix.scripts([
//     'resources/assets/js/plugins/dropzone.js'
// ], 'public/js/admin/admin-plugins.js');
mix.scripts([
    'resources/assets/js/admin/product-images.js'
], 'public/js/admin/products/product-images.js');

mix.scripts(['resources/assets/js/admin/generator.js'], 'public/js/admin/products/generator.js');

mix.scripts([
    'resources/assets/js/admin/attributes.js'
], 'public/js/admin/products/attributes.js');
