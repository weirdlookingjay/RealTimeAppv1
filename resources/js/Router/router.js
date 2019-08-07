import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from '../components/auth/Login'
import Logout from '../components/auth/Logout'
import Signup from '../components/auth/Signup'
import Forum from '../components/forum/Forum'

Vue.use(VueRouter)

const routes = [
    { path: '/login', component: Login },
    { path: '/logout', component: Logout },
    { path: '/signup', component: Signup },
    { path: '/forum', component: Forum, name: 'forum' }
]

const router = new VueRouter({
routes, // short for `routes: routes`
hashbang: false,
mode: 'history'
})

export default router;
