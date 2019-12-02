<template>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h5>
					<strong>Processo Principal</strong>
					<a href="#ajuda" v-on:click="ajuda()">(?)</a>
				</h5>
			</div>
			<div class="card-body">
				<span>
					<strong>* Distribuição por Dependência</strong>
				</span>
				<div class="custom-control custom-control-inline custom-radio">
					<input
						type="radio"
						class="custom-control-input"
						id="dpdSim"
						name="p_dependencia"
						value="dpdSim"
						v-model="showDpd"
					/>
					<label class="custom-control-label" for="dpdSim">Sim</label>
				</div>
				<div class="custom-control custom-control-inline custom-radio">
					<input
						type="radio"
						class="custom-control-input"
						id="dpdNao"
						name="p_dependencia"
						value="Nao"
						v-model="showDpd"
					/>
					<label class="custom-control-label" for="dpdNao">Não</label>
				</div>
				<div v-show="showDpd === 'dpdSim'">
					<br />
					<div class="form-inline">
						<div class="col-xs-2">
							<span>
								<strong>* Número do Processo Principal:</strong>
							</span>
							<input type="text" class="form-control col-md-3" v-mask="'#######-##.####'" />
							<span>.8.19.</span>
							<input type="text" class="form-control col-md-1" v-mask="'####'" />
							<button type="button" class="btn btn-primary">Consultar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br />
	</div>
</template>
<script>
export default {
	name: "deprocessoprincipal",
	data: function() {
		return {
			showDpd: ""
		};
	},
	methods: {
		ajuda: function() {
			alert(
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			);
		}
	}
};
</script>
