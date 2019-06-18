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

//Componentes da pasta DistribuicaoEletronica
Vue.component('degrerj', require('./components/DistribuicaoEletronica/DE_grerj.vue').default);
Vue.component('deprocessoprincipal', require('./components/DistribuicaoEletronica/DE_processoPrincipal.vue').default);
Vue.component('dedadosdoprocesso', require('./components/DistribuicaoEletronica/DE_dadosDoProcesso.vue').default);
Vue.component('deadvogadorepresentante', require('./components/DistribuicaoEletronica/DE_advogadoRepresentante.vue').default);
Vue.component('deautoresreusdocumentos', require('./components/DistribuicaoEletronica/DE_autoresReusDocumentos.vue').default);
Vue.component('dedeclaracaodeveracidade', require('./components/DistribuicaoEletronica/DE_declaracaoDeVeracidade.vue').default);

//Componentes da pasta CadastrarAutor
Vue.component('cadadospessoais', require('./components/CadastrarAutor/CA_dadosPessoais.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VueTheMask from 'vue-the-mask'
Vue.use(VueTheMask)

const app = new Vue({
    el: '#app',
    components: [
      //DistribuicaoEletronica
      'degrerj',
      'deprocessoPrincipal',
      'dedadosDoProcesso',
      'deadvogadoRepresentante',
      'deautoresReusDocumentos',
      'dedeclaracaoDeVeracidade',
      //CadastrarAutor
      'cadadosPessoais',
    ],
});
