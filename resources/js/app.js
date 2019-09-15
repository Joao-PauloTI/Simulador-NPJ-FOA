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
Vue.component('cadadospessoais', require('./components/CadastrarAutor/CA_dadosPessoais.vue').default);
Vue.component('caadvogadorepresentante', require('./components/CadastrarAutor/CA_advogadoRepresentante.vue').default);
Vue.component('caendereco', require('./components/CadastrarAutor/CA_endereco.vue').default);
Vue.component('cavalorpedidocausa', require('./components/CadastrarAutor/CA_valorPedidoCausa.vue').default);
Vue.component('cadadoscomplementares', require('./components/CadastrarAutor/CA_dadosComplementares.vue').default);

//Componentes da pasta CadastrarRepresentanteAutor
Vue.component('cradadospessoais', require('./components/CadastrarRepresentanteAutor/CRA_dadosPessoais.vue').default);
Vue.component('craendereco', require('./components/CadastrarRepresentanteAutor/CRA_endereco.vue').default);
Vue.component('cravalorpedidocausa', require('./components/CadastrarRepresentanteAutor/CRA_valorPedidoCausa.vue').default);
Vue.component('cradadoscomplementares', require('./components/CadastrarRepresentanteAutor/CRA_dadosComplementares.vue').default);

//Componentes da pasta CadastrarReu
Vue.component('crdadospessoais', require('./components/CadastrarReu/CR_dadosPessoais.vue').default);
Vue.component('crendereco', require('./components/CadastrarReu/CR_endereco.vue').default);
Vue.component('crvalorpedidocausa', require('./components/CadastrarReu/CR_valorPedidoCausa.vue').default);
Vue.component('crdadoscomplementares', require('./components/CadastrarReu/CR_dadosComplementares.vue').default);

//Componentes da pasta CadastrarRepresentanteReu
Vue.component('crrdadospessoais', require('./components/CadastrarRepresentanteReu/CRR_dadosPessoais.vue').default);
Vue.component('crrendereco', require('./components/CadastrarRepresentanteReu/CRR_endereco.vue').default);
Vue.component('crrvalorpedidocausa', require('./components/CadastrarRepresentanteReu/CRR_valorPedidoCausa.vue').default);
Vue.component('crrdadoscomplementares', require('./components/CadastrarRepresentanteReu/CRR_dadosComplementares.vue').default);

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
