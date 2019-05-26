<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5><strong>Dados do Processo</strong></h5>
            </div>
            <!--É preciso perguntar as opções de marcar abaixo são necessárias-->
            <div class="card-body">
                <form action="">
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="ddp1" id="ddp1">
                        <label class="custom-control-label" for="ddp1">
                             Prioridade p/ deficiente físico ou mental 
                        </label>
                    </div>
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="ddp2" id="ddp2">
                        <label class="custom-control-label" for="ddp2">
                             Tutela de Urgência 
                        </label>
                    </div>
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="ddp3" id="ddp3">
                        <label class="custom-control-label" for="ddp3">
                             Prioridade p/ portador de doença grave 
                        </label>
                    </div>
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="ddp4" id="ddp4">
                        <label class="custom-control-label" for="ddp4">
                                 Gratuidade de Justiça 
                        </label>
                    </div>
                    <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="ddp5" id="ddp5">
                        <label class="custom-control-label" for="ddp5">
                             Exame Técnico 
                        </label>
                    </div>
                </form>
                <br>
                <!--Todos os campos são interligados-->
                <label for="ddp_comarca"><strong>*</strong> Comarca
                    <select class="custom-select"  id="ddp_comarca">
                        <option>Escolha uma comarca</option>
                        <option>Comarca de Barra do Piraí</option>
                        <option>Comarca de Volta Redonda</option>
                        <option>...</option>
                    </select>
                </label>
                <br>
                <label for="ddp_competencia"><strong>*</strong> Competência 
                    <select class="custom-select" id="ddp_competencia">
                        <option>Escolha uma competência</option>
                        <option>Acidentes de Trabalho</option>
                        <option>Juizado Especial Cível</option>
                        <option>...</option>
                    </select>
                </label>
                <br>
                <label for="ddp_classe"><strong>*</strong> Classe 
                    <select class="custom-select" id="ddp_classe">
                        <option>Escolha uma classe</option>
                        <option>Ação Civil Coletiva</option>
                        <option>Alvará Judicial</option>
                        <option>...</option>
                    </select>
                </label>
                <br>
                <label for="ddp_distribuicao"><strong>*</strong> Distribuição 
                    <select class="custom-select" id="ddp_distribuicao">
                        <option>Escolha uma distribuição</option>
                        <option>...</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </label>
                <br>
                <form class="form-inline">
                    <div class="col-xs-2">
                        <span><strong>*</strong> Valor da Causa: </span>
                        <input type="text" class="form-control" id="valorCausa" placeholder="ex.: 1.000,00" required>
                    </div>
                </form>
                <br>
            </div>
        </div>
        <br>
    </div>
</template>