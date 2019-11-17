<template>
	<div>
		<div v-if="!mostrarMenu">
			<button id="PI_menu_botao" v-on:click="mostrarMenu = !mostrarMenu">
				<i class="fa fa-angle-double-right"></i>
			</button>
		</div>
		<div class="card" v-if="mostrarMenu">
			<div class="card-header">
				<button id="PI_menu_botao" v-on:click="mostrarMenu = !mostrarMenu" style="float: right;">
					<i class="fa fa-angle-double-left"></i>
				</button>
				<h5>
					<strong>Portal de Serviços</strong>
				</h5>
			</div>
			<div class="card-body">
				<!--PUSH-->
				<div>
					<p id="PI_menu1">
						<i class="fa fa-folder-open"></i>
						<a
							data-toggle="collapse"
							href="#PI_menu1_opcoes"
							role="button"
							aria-expanded="false"
							aria-controls="PI_menu1_opcoes"
						>PUSH</a>
					</p>
					<div class="collapse" id="PI_menu1_opcoes">
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Incluir Processos</a>
						</p>
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="/consultarexcluirprocessos">Consultar/Excluir Processos</a>
						</p>
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Enviar Lista Completa</a>
						</p>
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">E-mails Enviados</a>
						</p>
					</div>
				</div>
				<!--Petição Eletrônica - Lei 11.419/2006-->
				<div>
					<p id="PI_menu2">
						<i class="fa fa-folder-open"></i>
						<a
							data-toggle="collapse"
							href="#PI_menu2_opcoes"
							role="button"
							aria-expanded="false"
							aria-controls="PI_menu2_opcoes"
						>Petição Eletrônica - Lei 11.419/2006</a>
					</p>
					<div class="collapse" id="PI_menu2_opcoes">
						<p>
							<i class="fa fa-info-circle"></i>
							<a href="#">Sobre</a>
						</p>
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Protocolizar</a>
						</p>
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="/distribuicaoeletronica">Distribuição Eletrônica</a>
						</p>
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Histórico</a>
						</p>
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Petição Inicial Eletrônica 2ª Instância</a>
						</p>
					</div>
				</div>
				<!--Protesto de Sentença-->
				<div>
					<p id="PI_menu3">
						<i class="fa fa-folder-open"></i>
						<a
							data-toggle="collapse"
							href="#PI_menu3_opcoes"
							role="button"
							aria-expanded="false"
							aria-controls="PI_menu3_opcoes"
						>Protesto de Sentença</a>
					</p>
					<div class="collapse" id="PI_menu3_opcoes">
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Requerimento de Certidão de Crédito para Protesto</a>
						</p>
					</div>
				</div>
				<!--Consultas-->
				<div>
					<p id="PI_menu4">
						<i class="fa fa-folder-open"></i>
						<a
							data-toggle="collapse"
							href="#PI_menu4_opcoes"
							role="button"
							aria-expanded="false"
							aria-controls="PI_menu4_opcoes"
						>Consultas</a>
					</p>
					<div class="collapse" id="PI_menu4_opcoes">
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="/consultasprocessuais">Consultas Processuais</a>
						</p>
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Consultas Aviso Eletrônico</a>
						</p>
					</div>
				</div>
				<!--Indisponibilidades-->
				<div>
					<p id="PI_menu5">
						<i class="fa fa-folder-open"></i>
						<a
							data-toggle="collapse"
							href="#PI_menu5_opcoes"
							role="button"
							aria-expanded="false"
							aria-controls="PI_menu5_opcoes"
						>Indisponibilidades</a>
					</p>
					<div class="collapse" id="PI_menu5_opcoes">
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Consulta Indisponibilidades</a>
						</p>
					</div>
				</div>
				<!--PROJUDI-->
				<div>
					<p id="PI_menu6">
						<i class="fa fa-folder-open"></i>
						<a
							data-toggle="collapse"
							href="#PI_menu6_opcoes"
							role="button"
							aria-expanded="false"
							aria-controls="PI_menu6_opcoes"
						>PROJUDI</a>
					</p>
					<div class="collapse" id="PI_menu6_opcoes">
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Acessar</a>
						</p>
					</div>
				</div>
				<!--Configurações-->
				<div>
					<p id="PI_menu7">
						<i class="fas fa-wrench"></i>
						<a
							data-toggle="collapse"
							href="#PI_menu7_opcoes"
							role="button"
							aria-expanded="false"
							aria-controls="PI_menu7_opcoes"
						>Configurações</a>
					</p>
					<div class="collapse" id="PI_menu7_opcoes">
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Preferências</a>
						</p>
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Trocar Senha</a>
						</p>
					</div>
				</div>
				<!--Ajuda-->
				<div>
					<p id="PI_menu8">
						<i class="fa fa-folder-open"></i>
						<a
							data-toggle="collapse"
							href="#PI_menu8_opcoes"
							role="button"
							aria-expanded="false"
							aria-controls="PI_menu8_opcoes"
						>Ajuda</a>
					</p>
					<div class="collapse" id="PI_menu8_opcoes">
						<p>
							<i class="fa fa-info-circle"></i>
							<a href="#">Sobre o Portal de Serviços</a>
						</p>
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Requisitos</a>
						</p>
						<p>
							<i class="fas fa-file-alt"></i>
							<a href="#">Manual Portal</a>
						</p>
						<p>
							<i class="fas fa-headset"></i>
							<a href="#">Fale Conosco</a>
						</p>
					</div>
				</div>
				<!--Alterar Perfil-->
				<div>
					<p id="PI_menu9">
						<i class="fas fa-address-card"></i>
						<a href="#">Alterar Perfil</a>
					</p>
				</div>
				<!--Pesquisa de Opinião-->
				<div>
					<p id="PI_menu10">
						<i class="fas fa-comments"></i>
						<a href="#">Pesquisa de Opinião</a>
					</p>
				</div>
				<!--Definições Básicas-->
				<div>
					<p id="PI_menu11">
						<i class="fas fa-book-open"></i>
						<a href="#">Definições Básicas</a>
					</p>
				</div>
				<!--Dúvidas Frequentes-->
				<div>
					<p id="PI_menu12">
						<i class="fas fa-question-circle"></i>
						<a href="#">Dúvidas Frequentes</a>
					</p>
				</div>
				<!--Logout-->
				<div>
					<p id="PI_menu13">
						<i class="fas fa-power-off"></i>
						<a href="#">Logout</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	name: "pimenulateral",
	data: function() {
		return {
			mostrarMenu: true
		};
	}
};
</script>
<style type="text/css" scoped>
/*botões*/
#PI_menu_botao {
	border-radius: 5px;
	border: 1px;
	color: white;
	background-color: #1d4dae;
}

/*tamanho e posição do links do menu*/
#PI_menu1_opcoes,
#PI_menu2_opcoes,
#PI_menu3_opcoes,
#PI_menu4_opcoes,
#PI_menu5_opcoes,
#PI_menu6_opcoes,
#PI_menu7_opcoes,
#PI_menu8_opcoes {
	margin-left: 7%;
	line-height: 1;
}

/*cor dos links do menu*/
#PI_menu1_opcoes > p > a,
#PI_menu2_opcoes > p > a,
#PI_menu3_opcoes > p > a,
#PI_menu4_opcoes > p > a,
#PI_menu5_opcoes > p > a,
#PI_menu6_opcoes > p > a,
#PI_menu7_opcoes > p > a,
#PI_menu8_opcoes > p > a,
#PI_menu1 > a,
#PI_menu2 > a,
#PI_menu3 > a,
#PI_menu4 > a,
#PI_menu5 > a,
#PI_menu6 > a,
#PI_menu7 > a,
#PI_menu8 > a,
#PI_menu9 > a,
#PI_menu10 > a,
#PI_menu11 > a,
#PI_menu12 > a,
#PI_menu13 > a {
	color: black;
}

/*tamanho das linhas do menu*/
#PI_menu1,
#PI_menu2,
#PI_menu3,
#PI_menu4,
#PI_menu5,
#PI_menu6,
#PI_menu7,
#PI_menu8,
#PI_menu9,
#PI_menu10,
#PI_menu11,
#PI_menu12,
#PI_menu13 {
	line-height: 1;
}
</style>
