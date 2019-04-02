#Laravel, Vue and SPAs

## 1. The Skeleton

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

## 2. Building the Layout

In this episode, we'll construct the main layout for our assets website. To streamline this process, I'll pull in [Tailwind](http://tailwindcss.com/) and add it to my [Laravel Mix](https://laracasts.com/series/learn-laravel-mix) build.

https://tailwindcss.com/docs/installation
1. Устанавливаем Tailwind via npm
npm install tailwindcss --save-dev

2. Create a Tailwind config file
npx tailwind init

3. Use Tailwind in your CSS
Заменяем содержимое нашего файла `resources\sass\app.scss`

4. Process your CSS with Tailwind
- Делаем либо через npm
- Либо [Ларавел-Микс](https://github.com/JeffreyWay/laravel-mix-tailwind) - `npm install laravel-mix-tailwind --save-dev`

5. Настраиваем Webpack.mix.js

6. `npm run dev`

Работает!

Теперь настроим внешний вид страниц.
Добавим фонт Open Sans
Добавим фонт в файл tailwind.js, чтобы потом использовать в html классы, например `<body class="font-sans">`

Добавим 2 секции:
- The brand
- Doodles

## 3. One Component Per Page

We'll take a one-component-per-page approach to this website. This means, for each link in the sidebar, we need to create a companion Vue component. When finished, we'll review how to apply "active link" styling to the currently selected page.

- Добавим новые компоненты;
- Сделаем выделение текущей выбранной кнопки;
```
<li class="text-sm leading-loose"><router-link active-class="font-bold" class="text-black" to="/" exact>Home</router-link></li>
<li class="text-sm leading-loose"><router-link active-class="font-bold" class="text-black" :to="{ name: 'about' }">About</router-link></li>
```

- Но это не лучший вариант. Сделаем выделение используя Vue 
