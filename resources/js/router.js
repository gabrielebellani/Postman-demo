import {createRouter, createWebHistory} from 'vue-router';

import Home from './components/Home.vue'
import About from './components/About.vue'
import Page404 from './components/404.vue'

// 2. Define some routes
// Each route should map to a component.
// We'll talk about nested routes later.
const routes =  [
    { path: '/', component: Home },
    { path: '/about', component: About },
    { path: '/404', component: Page404 },
    { path: "/:catchAll(.*)", redirect: '/404', },
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: createWebHistory(),
    routes, // short for `routes: routes`
})

export default router
