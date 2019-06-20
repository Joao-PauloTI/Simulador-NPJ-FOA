<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Advogado Representante</strong>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <!-- OAB -->
                        <div class="col-sm">
                            <p><strong>OAB</strong></p>
                            <p>RJ123456</p>
                        </div>
                        <!-- Nome -->
                        <div class="col-sm">
                            <p><strong>Nome</strong></p>
                            <p>Lorem Ipsum Dolor Sit Amet</p>
                        </div>
                        <!-- Representa -->
                        <div class="col-sm" align="center">
                            <p><strong>Representa</strong></p>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="autorOpcao10" id="autorOpcao10">
                                <label class="custom-control-label" for="autorOpcao10"></label>
                            </div>
                        </div>
                        <!-- Intimação -->
                        <div class="col-sm" align="center">
                            <p><strong>Intimação</strong></p>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="autorOpcao11" id="autorOpcao11">
                                <label class="custom-control-label" for="autorOpcao11"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</template>
<script>
export default {
    name: 'caadvogadoRepresentante',
    data: function() {
        return {

        }
    }
}

</script>
