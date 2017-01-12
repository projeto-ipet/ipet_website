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
      fantasia: {
        identifier: 'fantasia',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque um nome fantasia'
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
      cnpj: {
        identifier: 'cnpj',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque um cnpj'
          },
          {
            type   : 'minLength[14]',
            prompt : 'Seu cnpj deve ter pelo menos {ruleValue} caracteres '
          },
           {
            type   : 'number',
            prompt : 'Por favor digite um numero de cnpj valido ao invés de letras'
          }

        ]
      },
      endereco: {
        identifier: 'endereco',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque seu endereço'
          },
        ]
      },

      bairro: {
        identifier: 'bairro',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque seu bairro'
          },
        ]
      },
      cidade: {
        identifier: 'cidade',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque sua cidade'
          },
        ]
      },
      estado: {
        identifier: 'estado',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque seu estado'
          },
        ]
      },
      cep: {
        identifier: 'cep',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque seu cep'
          },          
           {
            type   : 'number',
            prompt : 'Por favor digite um numero de cep valido'
          }
        ]
      },
      telefone: {
        identifier: 'telefone',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque uma telefone'
          },
          {
            type   : 'minLength[9]',
            prompt : 'Seu telefone deve ter pelo menos {ruleValue} caracteres + seu DDD'
          },
          {
            type   : 'number',
            prompt : 'Por favor digite um numero ao invés de letras'
          }
        ]
      },  
       tempoEntregas: {
        identifier  : 'tempoEntregas',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque há quando tempo faz entregas'
          }
        ]
      },
       mediaEntrega: {
        identifier  : 'mediaEntrega',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque uma quantidade media de entregas ao mês'
          }
        ]
      },
       qntdVeiculos: {
        identifier  : 'qntdVeiculos',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque uma quantidade de veiculos para entrega'
          }
        ]
      },
       tempoMedioEntregas: {
        identifier  : 'tempoMedioEntregas',
        rules: [
          {
            type   : 'empty',
            prompt : 'Por favor coloque um tempo médio entrega'
          }
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


