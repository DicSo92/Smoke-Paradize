## Laravel 5.7 + Vue.js - E-commerce custom product with Back Office

Final project of the 2nd year at Webstart, Paris.

Developped in Php with Laravel for the BackEnd & VueJs for the FrontEnd

One back office to manage Products / Categories / Users / Orders - create/edit/update/delete.

E-commerce SPA - VueRouter, Webpack, & Vuetify

 ![Laravel + Vue.js SPA](http://kp-folio.fr/images/iophoto_bo.PNG) 

---

### How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there

Install composer packages :

- Run __composer install__

Generate a key : 

- Run __php artisan key:generate__

Migrate & Seed :

- Run __php artisan migrate__
- Run __php artisan migrate --seed__

That will just seed the User Table with Admin. After yu can create products and categories in the BO.


Install Laravel passport OAuth2:

- Run __php artisan passport:install__

Generate a key :

- Run __php artisan passport:client__

Install npm package & run serve:

- Run __npm install__
- Run __npm run watch__
- Run __php artisan serve --port:8080__
- That's it - load the homepage, use __Register__ link and use the CRUD

---

### License

Please use and re-use however you want.

---

Kylian P.
