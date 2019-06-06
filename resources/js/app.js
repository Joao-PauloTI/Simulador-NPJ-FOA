/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('de-grerj', require('./components/DistribuicaoEletronica/DE_grerj.vue').default);
Vue.component('de-processoprincipal', require('./components/DistribuicaoEletronica/DE_processoPrincipal.vue').default);
Vue.component('de-dadosdoprocesso', require('./components/DistribuicaoEletronica/DE_dadosDoProcesso.vue').default);
Vue.component('de-advogadorepresentante', require('./components/DistribuicaoEletronica/DE_advogadoRepresentante.vue').default);
Vue.component('de-autoresreusdocumentos', require('./components/DistribuicaoEletronica/DE_autoresReusDocumentos.vue').default);
Vue.component('de-declaracaodeveracidade', require('./components/DistribuicaoEletronica/DE_declaracaoDeVeracidade.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: [
      'de-grerj',
      'de-processoPrincipal',
      'de-dadosDoProcesso',
      'de-advogadoRepresentante',
      'de-autoresReusDocumentos',
      'de-declaracaoDeVeracidade'
    ],
});
