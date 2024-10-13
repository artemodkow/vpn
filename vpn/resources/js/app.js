import './bootstrap';
import { createApp } from 'vue';
import ConnectVpn from './components/ConnectVpn.vue';

const app = createApp({});
app.component('connect-vpn', ConnectVpn);
app.mount('#app');
