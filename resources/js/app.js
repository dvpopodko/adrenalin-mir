// Импортируем jQuery и делаем его доступным глобально
import $ from 'jquery';
window.$ = window.jQuery = $;

// Импортируем Axios и делаем его доступным глобально
import axios from 'axios';
window.axios = axios;

// Устанавливаем заголовок для всех Axios-запросов
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Импортируем Alpine.js и делаем его доступным глобально
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Импортируем Bootstrap и его JS компоненты
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

// Импортируем ваш кастомный файл bootstrap.js, если он содержит дополнительные настройки
import './bootstrap';

import bootstrap from 'bootstrap/dist/js/bootstrap.bundle.js';
window.bootstrap = bootstrap;

import '../css/app.scss';
