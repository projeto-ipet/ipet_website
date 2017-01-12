<?php require_once 'cabecalho.php'; ?>

<section class="container text-center">
    <div class="ui horizontal divider">Faça login para utilizar o sistema</div>
    <form class="form ui col-md-4 col-md-offset-4" method="post">
        <div class="center-block">   
            <div class="field">
                <label for="email">Email</label>
                <input required id="emailLogin" name="email" type="email" onblur="validacaoEmail(form.email)" placeholder="ex: carlos@uol.com" maxlength="40" size="60">
            </div>
            <div class="field">
                <label for="senha">Senha</label>
                <input required id="senha" name="senha" type="password">
            </div>

            <button onclick="validacaoEmail(form.email)" class="ui primary submit button">Login</button>
            <a href="index.php" class="ui default submit button">Cancelar</a>
        </div>
        <div id="msgemail"></div>
    </form>
</section>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<script src="js/semantic.min.js"></script>
<script src="js/validar.js"></script>
<script src="js/new-age.min.js"></script>
<script src="js/login.js"></script>

<?php require_once 'rodape.php'; ?>