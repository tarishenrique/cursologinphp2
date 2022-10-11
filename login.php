<?php include 'header.php' ?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <h2>Login</h2>

        <form action="includes/login.salvar.php" method="POST">

            <div>
                <input type="text" class="form-control" placeholder="Usuário ou Email" name="txtLogin">
            </div>

            <div>
                <input type="password" class="form-control" placeholder="Digite a senha" name="txtSenha">
            </div>

            <br>

            <button type="submit" name="botaoSubmit" class="btn btn-primary">Login</button>
        </form>

    </div>
</div>


<?php include 'footer.php'  ?>