<?php require_once 'cabecalho.php' ?> 
<section class="container text-center">
   <div class="ui horizontal divider">Conte-nos sobre você</div>
     <form name="teste" id="teste" onsubmit="return false" class="ui form segment">      

        <?php require_once 'usuario.php' ?>
        
            <div class="inline field">
            <div class="ui checkbox">
              <input id="checkbox" type="checkbox" name="terms">
              <label for="checkbox">Eu aceito os termos e condições</label>
            </div>
          </div>




  <div class="ui primary submit button">Cadastrar</div>
  <div class="ui error message"></div>
</form>
 </section>



   <!-- toda parte do rodape ta nesse arquivo-->
    <section id="contato" class="contact fundoazul">
        <div class="container">
            <h2 class="text-muted"><i class="fa fa-heart"></i> Compartilhe com seus amigos!</h2>
            <ul class="list-inline list-social">
                <li class="social-twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-google-plus">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </section>

    <!-- rodape do site -->

    <footer>
        <div class="container">
            <p>&copy; 2017 Tram. All Rights Reserved.</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Privacidade</a>
                </li>
                <li>
                    <a href="#">Termos</a>
                </li>
                <li>
                    <a href="#">Perguntas</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>

    <!-- validação form-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script src="js/semantic.min.js"></script>
    <script src="js/cadUsuario/cadastrousuario.js"></script>
  

   

    
</body>

</html>
