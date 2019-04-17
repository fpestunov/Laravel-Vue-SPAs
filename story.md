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

## 4. 404 Pages

What if the user visits a URI that doesn't exist? At the moment, they'll see a blank page. Not good. Let's fix that by creating a NotFound component.

## 5. General Page Styling

With the basic structure in place, we can now move on to general page styling and tweaks.

Добавили некоторые улучшения.

## 6. Lazy Loading Routes

To help improve performance, any route can be lazily-loaded by embracing Vue's async components and webpack's code-splitting feature. Don't worry: I hate confusing jargon, too. Let's break it down and review exactly when and why you might consider lazy loading certain routes in your app.

Рассмотрим динамическую загрузку компонента для определенной страницы.
При импорте выдает ошибку. Необходимо загрузить `Babel`: 
```
npm install @babel/plugin-syntax-dynamic-import
```

Добавляем конфигурационный файл: `.babelrc`, данные из него будут загружаться Миксом автоматически.

Теперь компиляция работает и доп. файлы добавляются. Отлично. Только имена файлов `0.js`, `1.js`...

Изменим настройку импорта:
```
// let Animations = () => import('./components/Animations');
let Animations = () => import(/* webpackChunkName: ""loaders */ './components/Animations');
```

Устанавливаем:
http://airbnb.io/lottie
`npm install lottie-web`

Тестируем работу подгрузки библиотек через DevTools, cache=Disabled и меняем XHR/JS.

## 7. Cross-Origin Resource Sharing (CORS)

Due to security concerns, it's not always so easy to make a cross-origin AJAX request to fetch a particular set of data. Instead, you'll often be met with the dreaded `No 'Access-Control-Allow-Origin' header is present on the requested resource` response. Let's discuss what this header means, and how we can fix it.

Приступим:
- добавим пункт меню SiteStats;
- добавим компонент SiteStats;
- теперь нам надо сделать несколько запросов к API;
- добавим в Ларавел api-route;
- проверяем его доступность [http://localhost/api/stats](http://localhost/api/stats);
- пишем в компоненте ajax запрос и смотрим результат в консоли...;
- Ах! Axios не определен, прописываем;
- если мы берем данные с другого сервера, то можем получить ошибку CORS!!!
- `php artisan make:middleware Cors`
- редакрируем файл `app/http/middleware/Cors.php`, делаем доступ к нему ото всюду;
- редакрируем файл `app/http/Kernel.php`, добавляем в него файл `Cors.php`;
- работает!
