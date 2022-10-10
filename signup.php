<?php include 'header.php' ?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <h2>Cadastrar usuário</h2>

        <form action="signup.salvar.php" method="POST">

            <div>
                <input type="text" class="form-control" placeholder="Nome Completo:" name="txtNome">
            </div>
            <div>
                <input type="text" class="form-control" placeholder="Email:" name="txtEmail">
            </div>
            <div>
                <input type="text" class="form-control" placeholder="Usuário" name="txtUid">
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Digite a senha" name="txtSenha">
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Repita a senha" name="txtSenhaRepete">
            </div>
            <br>

            <button type="submit" name="botaoSubmit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
</div>


<?php include 'footer.php'  ?>