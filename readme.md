<p align="center">
    <a href="https://github.com/sahapranta/laravel-bootstrap-sb-admin2/issues"><img alt="GitHub issues" src="https://img.shields.io/github/issues/sahapranta/laravel-bootstrap-sb-admin2"></a>
<a href="https://github.com/sahapranta/laravel-bootstrap-sb-admin2/blob/master/LICENSE"><img alt="GitHub license" src="https://img.shields.io/github/license/sahapranta/laravel-bootstrap-sb-admin2"></a>
    <a href="https://liberapay.com/sahapranta/donate"><img alt="Donate using Liberapay" src="https://liberapay.com/assets/widgets/donate.svg"></a>
</p>

## About 
This is a open source project for laravel developer. Laravel 6 with Bootstrap SB Admin 2 with added workbox-webpack-plugin added with laravel mix. You can download and start using on your own.

- Clone the repository
- Create .env file coping .env.example
- Run `php artisan key:generate`
- Run `php artisan serve` and view from [localhost:8000](http://127.0.0.1:8000)
- If you would like to edit then run `npm install && npm run watch`.
- Edit from `resources` folder and edit app.js | app.css | bootstrap.js
- If you want to edit service worker configuration the edit sw.js and chage generateSW or injectManifest


## Todo
- [x] Add Workbox  webpack plugin
- [ ] Add All Other Pages
- [ ] Use npm for datatable, chartjs etc.
- [ ] Configure PWA with better service worker strategy and webapp manifest.


## License

This Repo is open-source licensed under the [GNU license](https://raw.githubusercontent.com/sahapranta/laravel-bootstrap-sb-admin2/master/LICENSE).
