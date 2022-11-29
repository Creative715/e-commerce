import { createApp } from 'vue'
import './index.css';
import store from './stores';
import router from './router';

import App from './App.vue'


const app = createApp(App)
.use(store)
.use(router)

app.mount('#app')
