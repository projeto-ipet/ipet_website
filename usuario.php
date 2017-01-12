<p class="textoazul">Dados do Usuario</p>
            <div class="two fields">
                <div class="field">
                  <label for="name">Apelido</label>
                  <input class="form-control" id="apelido"  placeholder="Apelido" maxlength="20" name="apelido" type="text">
            </div>

             <div class="field">
                  <label for="fantasia">Nome* </label>
                  <input class="form-control" id="name" placeholder="Nome" maxlength="20" name="name" type="text">
             </div>

            <div class="field">
                  <label for="fantasia">Sobrenome* </label>
                  <input class="form-control" id="sobrenome" placeholder="Sobrenome" maxlength="20" name="sobrenome" type="text">
             </div>
                </div>

         <div class="field">
          <label for="cpf">CPF *</label>
          <input id="cpf" class="form-control" placeholder="Cpf" name="cpf" type="text" maxlength="14" onKeyPress="MascaraCPF(form.cpf);"
          onBlur="validaCPF();">
        </div>

         <div class="field">
        
     
         
        </div>



        <div class="two fields">
            <div class="field">
            <label for="senha">Senha*</label>
              <input type="password" id="senha" placeholder="Senha" name="match1" maxlength="14" type="text" onkeyup="javascript:verifica()" >
              <table id="mostra"></table>
            </div>
            <div class="field">
              <label for="confirmacaosenha">Confirme sua senha*</label>
              <input type="password" placeholder="Confirme sua enha" id="confirmacaosenha" maxlength="14" name="match2" type="text" >
            </div>
          </div>
            

          <div class="two fields">
            <div class="field">
             <table>
              <tr>
              <td>
              <label for="email">E-mail: *</label>
              <input id="email_id" type="email" name="email" onblur="validacaoEmail(form.email)" placeholder="Email" maxlength="60" size='65'>
              </td>
              <td>
              <div id="msgemail"></div>
              </td>
              </tr>
            </table>
            </div>
            <div class="field">
              <label for="confirmacaoemail">Confirme seu Email*</label>
              <input type="email" id="confirmacaoemail_id" placeholder="Confirme seu email" maxlength="50" name="confirmacaoemail" type="text" >
            </div>
          </div>

                  
         
          