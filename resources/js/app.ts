import { createApp } from 'vue/dist/vue.esm-bundler'

import { createRouter, createWebHistory } from 'vue-router'
import routes from "./config/routes";

import CenteredLayout from "./layouts/CenteredLayout.vue";

const router = createRouter({
    history: createWebHistory(),
    routes
});

const app = createApp({
    components: {
        CenteredLayout,
    }
});
app.use(router);
app.mount('#app');
