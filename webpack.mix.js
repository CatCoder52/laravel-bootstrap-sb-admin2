const mix = require('laravel-mix');
const workboxPlugin = require('workbox-webpack-plugin');
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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .webpackConfig({
      plugins: [
        new workboxPlugin.GenerateSW({
         //  globDirectory: `${__dirname}/public`,
         //  globPatterns: [
         //    '**/*.{css,js,png,jpg,svg}',            
         //  ],
         //  swSrc: './resources/js/sw.js',
          swDest: path.join(`${__dirname}/public`, 'sw.js'),
          clientsClaim: true,
          skipWaiting: true,
          runtimeCaching: [
            {
              urlPattern: new RegExp(`${process.env.APP_URL}`),
              handler: 'StaleWhileRevalidate',              
            },
            {
              urlPattern: new RegExp(`${process.env.APP_URL}/home`),
              handler: 'StaleWhileRevalidate',              
            },
            {
              urlPattern: new RegExp(`${process.env.APP_URL}/login`),
              handler: 'StaleWhileRevalidate',              
            }
          ]
        })
      ]
   })
   .disableNotifications();