/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import './bootstrap.bundle.min';
import '../css/bootstrap.min.css';
import { createApp } from 'vue';

import store from './store'
const app = createApp({
    mounted() {
        let url = window.location.pathname;
        let slug = url.substring(url.lastIndexOf('/')+1);
        console.log(url);
        console.log(slug);
        this.$store.commit('SET_SLUG',slug);
        this.$store.dispatch('getArticleData', slug);
        this.$store.dispatch('viewsIncrement',slug);
    }
});

app.use(store);
app.mount('#app');

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import ArticleComponent from "./components/ArticleComponent.vue";
app.component('article-component',ArticleComponent);

import ViewsComponent from "./components/ViewsComponent.vue";
app.component('views-component',ViewsComponent);

