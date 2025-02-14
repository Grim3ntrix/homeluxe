import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { ZiggyVue } from 'ziggy';
import { Ziggy } from './ziggy';
import './bootstrap';

createInertiaApp({
    resolve: (name) => import(`./Pages/${name}.vue`), // Adjust path if your Vue pages are in a different folder
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
});
