$('.ui.form')
    .form({
        fields: {
            email: {
                identifier: 'emailLogin',
                rules: [
                {
                  type   : 'empty',
                  prompt : 'Por favor preencha com um email valido'

                }
                ]                
            },
            senha: {
                identifier: 'senha',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Por favor preencha com sua senha'
                    }
                ]
            }             
        }
    });

