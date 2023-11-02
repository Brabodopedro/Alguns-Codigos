import itertools

# Defina os caracteres que deseja usar (números e letras)
caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'

# Senha que você deseja encontrar
senha_desejada = 'senha_alvo'

comprimento_combinacao = 1  # Comece com uma possibilidade

while True:
    # Gere todas as combinações possíveis do comprimento atual
    combinacoes = itertools.product(caracteres, repeat=comprimento_combinacao)
    
    for combinacao in combinacoes:
        senha = ''.join(combinacao)
        
        if senha == senha_desejada:
            print(f'Senha encontrada: {senha}')
            break
        else:
            print(f'Tentando senha: {senha}')
    
    if senha == senha_desejada:
        break
    
    # Incremente o comprimento da combinação para a próxima tentativa
    comprimento_combinacao += 1
