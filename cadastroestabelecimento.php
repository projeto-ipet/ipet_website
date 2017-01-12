<?php require_once 'cabecalho.php'  ?>

<section class="container text-center">
<div class="ui horizontal divider">Conte-nos sobre você</div>
<form class="ui form segment">
  
  <p class="textoazul">Dados do Estabelecimento</p>
  <div class="two fields">
    <div class="field">
      <label for="name">Razão social *</label>
      <input id="name" placeholder="Primeiro Nome" maxlength="40" name="name" type="text">
    </div>

     <div class="field">
      <label for="fantasia">Nome fantasia</label>
      <input  id="fantasia" placeholder="Nome fantasia" maxlength="40" name="fantasia" type="text">
    </div>
     </div>

     <div class="field">
      <label for="telefone">Telefone do Estabelecimento *</label>
      <input id="telefone" placeholder="Telefone" name="telefone" onKeyPress="MascaraTelefone(form.telefone);" type="text" maxlength="15">
    </div>

     <div class="field">
      <label for="cnpj" >CNPJ *</label>
      <input id="cnpj" placeholder="cnpj" name="cnpj" type="text"  onKeyPress="MascaraCNPJ(form.cnpj);" 
maxlength="18" onBlur="ValidarCNPJ(form.cnpj);" >
    </div>

    
    <div class="inline fields">
    <div class="eight wide field">
      <label for="endereco">Endereço do Estabelecimento *</label>
      <input id="endereco" type="text" name="endereco" placeholder="Rua/numero">
    </div>
    <div class="three wide field">
      <input type="text" name="bairro" maxlength="20" placeholder="bairro">
    </div>
    <div class="five wide field">
      <input type="text" name="cidade" maxlength="20" placeholder="cidade">
    </div>
    <div class="five wide field">
      <input type="text" name="estado" maxlength="20" placeholder="Estado">
    </div>
    <div class="five wide field">
      <input type="text"  name="cep" maxlength="20" placeholder="Cep" onKeyPress="MascaraCep(form.cep);"
 maxlength="10" onBlur="ValidaCep(form.cep)">
    </div>


  </div>



  <p class="textoazul">Questionário de Experiência</p>
  <div class="two fields">
    <div class="field">
      <label for="tempoentregas">Há quanto tempo faz entregas? *</label>
      <input id="tempoentregas" placeholder="Há quanto tempo faz entregas?" maxlength="30" name="tempoEntregas" type="text">
    </div>

     <div class="field">
      <label for="entregaMes">Quantidade média de entregas por mês? * </label>
      <input id="entregaMes" placeholder="Quantidade média de entregas por mês?" maxlength="30" name="mediaEntrega" type="text">
    </div>
     </div>

     <div class="field">
      <label for="veiculosentrega" >Quantidade de veículos para entrega?  *</label>
      <input id="veiculosentrega" placeholder="Quantidade de veículos para entrega?"  maxlength="30" name="qntdVeiculos" type="text">
    </div>

     <div class="field">
      <label for="quantidadeentrega">Tempo médio de entrega*</label>
      <input id="quantidadeentrega"  placeholder="Tempo médio de entrega" maxlength="30" name="tempoMedioEntregas" type="text">
    </div>

    <!--
    <p class="textoazul">Dados do Responsável</p>
  <div class="two fields">
    <div class="field">
      <label>Há quanto tempo faz entregas? *</label>
      <input placeholder="Primeiro Nome" name="name" type="text">
    </div>

     <div class="field">
      <label>Quantidade média de entregas por mês? * </label>
      <input placeholder="Primeiro Nome" name="fantasia" type="text">
    </div>
     </div>

     <div class="field">
      <label>Quantidade de veículos para entrega?  *</label>
      <input placeholder="Primeiro Nome" name="telefone" type="text">
    </div>

     <div class="field">
      <label>Tempo médio de entrega*</label>
      <input placeholder="Primeiro Nome" name="cnpj" type="text">
    </div>
  -->
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
    <script src="js/cadEstabelecimento/cadastroestabelecimento.js"></script>
  
  

   

    
</body>

</html>