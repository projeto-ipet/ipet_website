<p class="textoazul">Dados do Usuario</p>
            <div class="two fields">
                <div class="field">
                  <label for="name">Apelido*</label>
                  <input class="form-control" id="apelido"  placeholder="Apelido" name="apelido" type="text">
            </div>

             <div class="field">
                  <label for="fantasia">Nome* </label>
                  <input class="form-control" id="name" placeholder="Nome " name="name" type="text">
             </div>

            <div class="field">
                  <label for="fantasia">Sobrenome* </label>
                  <input class="form-control" id="sobrenome" placeholder="Sobrenome" name="sobrenome" type="text">
             </div>
                </div>

         <div class="field">
          <label for="cpf">CPF *</label>
          <input id="cpf" class="form-control" placeholder="Cpf" name="cpf" type="text" maxlength="14" onKeyPress="MascaraCPF(form.cpf);"
          onBlur="ValidarCPF(form.cpf);">
        </div>

         <div class="field">
        
     
         
        </div>



        <div class="two fields">
            <div class="field">
            <label for="senha">Senha*</label>
              <input type="password" id="senha" placeholder="Senha" name="match1" type="text" onkeyup="javascript:verifica()" >
              <table id="mostra"></table>
            </div>
            <div class="field">
              <label for="confirmacaosenha">Confirme sua senha*</label>
              <input type="password" placeholder="Confirme sua enha" id="confirmacaosenha" name="match2" type="text" >
            </div>
          </div>
            

          <div class="two fields">
            <div class="field">
            <label for="email">Email*</label>
              <input type="email" id="email" placeholder="Email" name="email" type="text"  >
              <table id="mostra"></table>
            </div>
            <div class="field">
              <label for="confirmacaosenha">Confirme seu Email*</label>
              <input type="email" id="confirmacaoemail" placeholder="Confirme seu email" name="confirmacaoemail" type="text" >
            </div>
          </div>