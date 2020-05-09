import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home'
import Products from '../views/Products'
import ShoppingCart from '../views/ShoppingCart'
import SuccessPaid from '../views/SuccessPaid'


Vue.use(VueRouter)

const routes = [{
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/about',
        name: 'About',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "about" */ '../views/About.vue')
    },
    {
        path: '/products',
        name: 'Products',
        component: Products
    },
    {
        path: '/carts',
        name: 'ShoppingCart',
        component: ShoppingCart
    },
    {
        path: '/success-paid',
        name: 'SuccessPaid',
        component: SuccessPaid
    },
]

const router = new VueRouter({
    routes
})

export default router