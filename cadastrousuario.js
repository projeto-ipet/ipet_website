$('.ui.form')
  .form({
    fields: {
      name: {
        identifier: 'name',
         rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque um nome'
             
          }
        ]
      },
      email: {
        identifier  : 'confirmacaoemail',
        rules: [
          {
            type   : 'match[email]',
            prompt : 'Por favor, coloque o mesmo email no campo confirmação de email'
          }
        ]
      },
       match: {
        identifier  : 'match2',
        rules: [
          {
            type   : 'match[match1]',
            prompt : 'Por favor, coloque a mesma senha no campo confirmação de senha'
          }
        ]
      },
       confirmacaosenha: {
        identifier  : 'confirmacaosenha',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor, coloque a confirmação da sua senha'
          }
        ]
      },
        confirmacaoemail: {
        identifier  : 'confirmacaosemail',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor, coloque a confirmação do email'
          }
        ]
      },
        senha: {
        identifier: 'senha',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque sua senha'
          },
          {
            type   : 'minLength[8]',
            prompt : 'Sua senha deve ter pelo menos {ruleValue} caracteres '
          }
        ]
      },
        apelido: {
        identifier: 'apelido',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque um apelido'
          }
        ]
      },
      sobrenome: {
        identifier: 'sobrenome',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque seu sobrenome'
          }
        ]
      },
      telefone: {
        identifier: 'telefone',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque um telefone'
          },
           {
            type   : 'number',
            prompt : 'Por favor digite um numero de telefone valido ao invés de letras'
          }
        ]
      },
      cpf: {
        identifier: 'cpf',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque seu cpf'
          },
          {
            type   : 'minLength[14]',
            prompt : 'Seu cnpj deve ter pelo menos {ruleValue} caracteres '
          },
          
        ]
      },
            
      terms: {
        identifier: 'terms',
        rules: [
          {
            type   : 'checked',
            prompt : 'Você deve concordar com os termos e condições'
          }
        ]
      }
    }
  })
;


