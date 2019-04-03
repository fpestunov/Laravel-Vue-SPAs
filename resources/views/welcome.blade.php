<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel + Vue + SPAs</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="font-sans">
        <div id="app">
            <div class="container px-8">
                <header class="p-6 mb-8" style="background: url('/images/splash.svg') 0 15px no-repeat;">
                    <h1>Laravel School</h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5 pt-8">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">Laravel</h5>

                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/" exact>Home</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'about' }">About</router-link></li>
                            </ul>
                        </section>
                        
                        <section>
                            <h5 class="uppercase font-bold mb-4 text-base">Projects</h5>

                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'chatty' }">Chatty</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'blog' }">Blog</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'forum' }">Forum</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'animations' }">Animations</router-link></li>
                            </ul>
                        </section>
                        
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
            
            <hr>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
