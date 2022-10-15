<?php include 'header.php' ?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <h2>Login</h2>

        <form action="includes/login.salvar.php" method="POST">

            <div>
                <input type="text" class="form-control" placeholder="Usuário ou Email" name="txtUsuario">
            </div>

            <div>
                <input type="password" class="form-control" placeholder="Digite a senha" name="txtSenha">
            </div>

            <br>

            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>

        <?php

        if (isset($_GET["error"])) {

            if ($_GET["error"] == "emptyinput") {
                echo "<h1>Preencha todos os campos</h1>";
            } else if ($_GET["error"] == "loginincorreto") {
                echo "<h1>Informações de login incorretas</h1>";
            }
        }
        ?>

    </div>
</div>


<?php include 'footer.php'  ?>