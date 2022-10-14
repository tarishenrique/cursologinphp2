<?php include 'header.php' ?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <h2>Cadastrar usuário</h2>

        <form action="includes/signup.salvar.php" method="POST">

            <div>
                <input type="text" class="form-control" placeholder="Nome Completo:" name="txtNome">
            </div>
            <div>
                <input type="text" class="form-control" placeholder="Email:" name="txtEmail">
            </div>
            <div>
                <input type="text" class="form-control" placeholder="Usuário" name="txtUsuario">
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Digite a senha" name="txtSenha">
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Repita a senha" name="txtSenhaRepete">
            </div>
            <br>

            <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php

        if (isset($_GET["error"])) {

            if ($_GET["error"] == "emptyinput") {
                echo "<h1>Preencha todos os campos</h1>";
            } else if ($_GET["error"] == "invalidusuario") {
                echo "<h1>Escolha um usuário válido</h1>";
            } else if ($_GET["error"] == "invalidemail") {
                echo "<h1>Escolha um email válido</h1>";
            } else if ($_GET["error"] == "senhasnaoiguais") {
                echo "<h1>As senhas não são iguais</h1>";
            } else if ($_GET["error"] == "usuariojaexiste") {
                echo "<h1>Nome de usuário já existe, por favor escolha outro login</h1>";
            } else if ($_GET["error"] == "falhanostmt") {
                echo "<h1>Aconteceu um erro inesperado, tente novamente</h1>";
            } else if ($_GET["error"] == "nenhum") {
                echo "<h1>Usuário cadastrado com sucesso</h1>";
            }
        }
        ?>

    </div>
</div>


<?php include 'footer.php'  ?>