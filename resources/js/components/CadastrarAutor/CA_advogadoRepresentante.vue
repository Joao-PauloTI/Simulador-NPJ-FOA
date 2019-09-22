<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>
                    <strong>Advogado Representante</strong>
                    <a href="#ajuda" v-on:click="ajuda()">(?)</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <table class="table table-borderless">
                        <thead>
                            <th>OAB</th>
                            <th>Nome</th>
                            <th>Representa</th>
                            <th>Intimação</th>
                        </thead>
                        <tbody>
                            <td>RJ123456</td>
                            <td>Lorem Ipsum Dolor Sit Amet</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="a_representa" value="Representa" id="CA_aR1">
                                    <label class="custom-control-label" for="CA_aR1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="a_intimacao" value="Intimação" id="CA_aR2">
                                    <label class="custom-control-label" for="CA_aR2"></label>
                                </div>
                            </td>
                        </tbody>
                    </table>
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
    },
    methods: {
        ajuda: function() {
            alert(
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
        }
    }
}

</script>
