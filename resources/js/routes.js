import Home from './components/Home';
import About from './components/About';
import Chatty from './components/Chatty';
import Blog from './components/Blog';
import Forum from './components/Forum';
import NotFound from './components/NotFound';

// import Animations from './components/Animations';
let Animations = () => 
  import(/* webpackChunkName: "loaders" */ './components/Animations');

export default {
    mode: 'history', // for hashing history

    linkActiveClass: 'font-bold',

    routes: [
        {
           path: '*',
           component: NotFound
        },

        {
           path: '/',
           component: Home 
        },

        {
           path: '/about',
           component: About,
           name: 'about'
        },

        {
           path: '/projects/chatty',
           component: Chatty,
           name: 'chatty'
        },

        {
           path: '/projects/blog',
           component: Blog,
           name: 'blog'
        },

        {
           path: '/projects/forum',
           component: Forum,
           name: 'forum'
        },

        {
            path: '/animations',
            component: Animations,
            name: 'animations'
        },
    ]
};
