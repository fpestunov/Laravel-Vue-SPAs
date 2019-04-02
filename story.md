#Laravel, Vue and SPAs

## The Skeleton

We'll begin with laravel new project. Following that, we'll incrementally pull in all necessary npm dependencies and construct the base skeleton for our "assets" website.

```
laravel new lara-spa
php artisan -V
npm install
```

Установим Vue-router
https://router.vuejs.org/ru/installation.html
```
npm install vue-router
npm install -g npm // обновим npm
```

Начинаем с нуля, заполняем файл `resources/js/app.js`.

Создаем файл `route.js`

Создаем компоненты в папке `components`.

Подготавливаем главную страницу `welcome.blade.php`.

Запускаем приложение:
```
npm run watch
```
Скомпилировалось!

