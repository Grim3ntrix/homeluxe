import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { ZiggyVue } from './../../vendor/tightenco/ziggy';

async function resolvePageComponent(name) {
    try {
        return (await import(`./Pages/${name}.vue`)).default;
    } catch (error) {
        console.error(`Error loading page component: ${name}`, error);
        throw error; 
    }
}

createInertiaApp({
    resolve: resolvePageComponent,
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });

        app.use(plugin)
           .use(ZiggyVue)
           .mount(el);
    },
});
