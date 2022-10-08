<?php include 'header.php' ?>

<div class="row">
    <div class="col">
        <h2>Cadastrar usuário</h2>

        <form action="signup.inc.php" method="POST">

            <div class="col-lg-3">
                <label class="form-label">Usuário:</label>
                <input type="text" class="form-control" id="usuario" placeholder="Digite seu login" name="txtUsuario">
            </div>
            <div class="col-lg-3">
                <label class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="txtSenha">
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
</div>


<?php include 'footer.php'  ?>