import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { ZiggyVue } from './../../vendor/tightenco/ziggy';

// Preload all .vue files inside Pages/** (including subdirectories)
const pages = import.meta.glob('./Pages/**/*.vue');

async function resolvePageComponent(name) {
    const path = `./Pages/${name.replace('.', '/')}.vue`;

    if (!pages[path]) {
        console.error(`Error loading page component: ${name} at ${path}`);
        throw new Error(`Page component ${name} not found`);
    }

    return pages[path]().then(module => module.default);
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
