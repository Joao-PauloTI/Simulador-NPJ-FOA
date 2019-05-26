<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5><strong>Advogado / Representante</strong></h5>
            </div>
            <div class="card-body">
                <form class="form-inline">
                    <label for="selectAR">
                        <select class="custom-select" id="selectAR">
                            <option>Advogado</option>
                            <option>Defensor Público</option>
                        </select>
                    </label>
                    <div class="col-md-1"><!--espaço--></div>
                    <!--if(advogado == true)-->
                    <span> Número de OAB: </span>
                    <label for="regiaoOAB">
                        <select class="custom-select" id="regiaoOAB">
                            <option>RJ</option>
                            <option>SP</option>
                            <option>...</option>
                        </select>
                    </label>
                    <input type="text" class="form-control" required>
                	<!--else
                	<span> Matrícula </span>
                	<input type="text" class="form-control" required>
                	endif-->
                </form>
            </div>
        </div>
        <br>
    </div>
</template>