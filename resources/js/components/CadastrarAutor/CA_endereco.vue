<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Endereço</strong>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- CEP -->
                    <div>
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* CEP </strong> </span>
                                <input type="text" class="form-control" v-mask="'#####-###'" required>
                                <a href=""><ins> verificar CEP</ins> </a>
                                <a href=""><ins> Correios</ins> </a>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Estado -->
                    <div>
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Estado </strong> </span>
                                <select class="custom-select">
                                    <option>Escolha o estado</option>
                                    <option>Rio de Janeiro</option>
                                    <option>São Paulo</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Cidade -->
                    <div>
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Cidade </strong> </span>
                                <select class="custom-select">
                                    <option>Escolha a cidade</option>
                                    <option>Rio de Janeiro</option>
                                    <option>Volta Redonda</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Bairro -->
                    <div>
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Bairro </strong> </span>
                                <select class="custom-select">
                                    <option>Escolha o bairro</option>
                                    <option>Vila Santa Cecília</option>
                                    <option>Três Poços</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Tipo de Logradouro -->
                    <div>
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Logradouro </strong> </span>
                                <select class="custom-select">
                                    <option>Escolha o tipo de logradouro</option>
                                    <option>Avenida</option>
                                    <option>Bloco</option>
                                    <option>Condomínio</option>
                                    <option>Distrito</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Logradouro-->
                    <div>
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Logradouro </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Número -->
                    <div>
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Número </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Complemento-->
                    <div>
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Complemento </strong> </span>
                                <input type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Tipo de Endereço -->
                    <div>
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>* Tipo de Endereço </strong> </span>
                                <select class="custom-select">
                                    <option>Escolha o tipo de endereço</option>
                                    <option>Residencial</option>
                                    <option>Empresarial</option>
                                    <option>Comercial</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Referência-->
                    <div>
                        <form class="form-inline">
                            <div class="col-xs-2">
                                <span><strong>Referência </strong> </span>
                                <textarea rows="3" class="form-control" required></textarea>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Õpção extra -->
                    <div>
                        <form action="">
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="autorOpcao12" id="autorOpcao12">
                                <label class="custom-control-label" for="autorOpcao12">O comprovante de residência deste endereço cadastrado será anexado nesta Petição Inicial? </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</template>
<script>
export default {
    name: 'caendereco',
    data: function() {
        return {

        }
    }
}

</script>
