<main class="w-100 m-auto container-modificado">
    <div class="row text-center mb-5">
        <h1 class="mb-5">Diabetes Prediction</h1>
        <h4>Aprendizado Supervisionado</h4>
    </div>

    <div class="form-floating">
        <form method="GET" action="view/funcoes.php">
            <div class="d-flex justify-content-between">
                <div class="mb-3">
                    <label for="sexo" class="mb-1">Sexo:</label>
                    <select name="sexo" class="form-select input-modificado">
                        <option>Feminino</option>
                        <option>Masculino</option>
                    </select>
                </div>
    
                <div class="mb-3">
                    <label for="idade" class="mb-1">Idade:</label>
                    <input type="text" name="idade" class="form-control input-modificado" required>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="mb-3">
                    <label for="hipertensao" class="mb-1">Possui hipertensão:</label>
                    <select name="hipertensao" class="form-select input-modificado">
                        <option>Sim</option>
                        <option>Não</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="doencaCardiaca" class="mb-1">Possui doença cardíaca:</label>
                    <select name="doencaCardiaca" class="form-select input-modificado">
                        <option>Sim</option>
                        <option>Não</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="historicoFumante" class="mb-1">Qual o histórico de fumante:</label>
                <select name="historicoFumante" class="form-select">
                    <option>Nenhuma informação</option>
                    <option>Ex fumante</option>
                    <option>Fumo</option>
                    <option>Sempre fumo</option>
                    <option>Não fumo mais</option>
                    <option>Nunca fumei</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="imc" class="mb-1">IMC:</label>
                <input type="text" name="imc" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="Hba1c" class="mb-1">Nível de HbA1c:</label>
                <input type="text" name="Hba1c" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="glicose" class="mb-1">Nível de glicose no sangue:</label>
                <input type="text" name="glicose" class="form-control" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </div>
            
        </form>
    </div>
</main>