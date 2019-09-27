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

//Componentes da pasta PaginaInicial
Vue.component('pipainelavisos', require('./components/PaginaInicial/PI_painelAvisos.vue').default);
Vue.component('pimenulateral', require('./components/PaginaInicial/PI_menuLateral.vue').default);

//Componentes da pasta DistribuicaoEletronica
Vue.component('degrerj', require('./components/DistribuicaoEletronica/DE_grerj.vue').default);
Vue.component('deprocessoprincipal', require('./components/DistribuicaoEletronica/DE_processoPrincipal.vue').default);
Vue.component('dedadosdoprocesso', require('./components/DistribuicaoEletronica/DE_dadosDoProcesso.vue').default);
Vue.component('deadvogadorepresentante', require('./components/DistribuicaoEletronica/DE_advogadoRepresentante.vue').default);
Vue.component('deautoresreusdocumentos', require('./components/DistribuicaoEletronica/DE_autoresReusDocumentos.vue').default);
Vue.component('dedeclaracaodeveracidade', require('./components/DistribuicaoEletronica/DE_declaracaoDeVeracidade.vue').default);

//Componentes da pasta CadastrarAutor
Vue.component('camodal', require('./components/CadastrarAutor/CA_modal.vue').default);

//Componentes da pasta CadastrarRepresentanteAutor
Vue.component('cramodal', require('./components/CadastrarRepresentanteAutor/CRA_modal.vue').default);

//Componentes da pasta CadastrarReu
Vue.component('crmodal', require('./components/CadastrarReu/CR_modal.vue').default);

//Componentes da pasta CadastrarRepresentanteReu
Vue.component('crrmodal', require('./components/CadastrarRepresentanteReu/CRR_modal.vue').default);

//Componentes da pasta ConsultasProcessuais
Vue.component('cpconsultaprocessual', require('./components/ConsultasProcessuais/CP_consultaProcessual.vue').default);

//Componentes da pasta Documentos
Vue.component('duploadpeticaoinicial', require('./components/Documentos/D_uploadPeticaoInicial.vue').default);
Vue.component('denviarcpf', require('./components/Documentos/D_enviarCPF.vue').default);
Vue.component('denviarcomprovanteresidencia', require('./components/Documentos/D_enviarComprovanteResidencia.vue').default);
Vue.component('denviarprocuracao', require('./components/Documentos/D_enviarProcuracao.vue').default);
Vue.component('duploadanexopeticao', require('./components/Documentos/D_uploadAnexoPeticao.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VueTheMask from 'vue-the-mask'
Vue.use(VueTheMask)

import money from 'v-money'
Vue.use(money, {precision: 2})

const app = new Vue({
    el: '#app',
    
});

//https://stackoverflow.com/questions/51307837/adding-data-from-modal-form-to-the-table-via-vue-js