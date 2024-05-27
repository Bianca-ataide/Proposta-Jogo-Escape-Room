<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <script src="js/game5.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Desafio 5</title>
</head>

<body>

    <h1>Do You Wanna Play a Game?</h1>

    <main>
        <div class="container-sm">
            <p>Para obter a chave do desafio execute o código Python abaixo</p>
            <pre class="col-xs-2">


            import random
            import sys

            def str_xor(secret, key):
                new_key = key
                i = 0
                while len(new_key) < len(secret):
                    new_key = new_key + key[i]
                    i = (i + 1) % len(key)        
                return "".join([chr(ord(secret_c) ^ ord(new_key_c)) for (secret_c,new_key_c) in zip(secret,new_key)])


            flag_enc = chr(0x12) + chr(0x17) + chr(0x08) + chr(0x11) + chr(0x01) + chr(0x96) + chr(0x42) + chr(0x15) + chr(0x5c) + chr(0x01) + chr(0x57) + chr(0x2a) + chr(0x17) + chr(0x5e) + chr(0x5f) + chr(0x0d) + chr(0x19) + chr(0x39) + chr(0x5b) + chr(0x5e) + chr(0x36) + chr(0x53) + chr(0x07) + chr(0x51) + chr(0x18) + chr(0x58) + chr(0x05) + chr(0x57) + chr(0x11) + chr(0x3a) + chr(0x0f) + chr(0x0e) + chr(0x59) + chr(0x06) + chr(0x4d) + chr(0x55) + chr(0x0c) + chr(0x0f) + chr(0x14)


            def print_flag():
            flag = str_xor(flag_enc, 'enkidu')
            print(flag)


            def print_encouragement():
            encouragements = ['Você consegue!', 'Continue!', 
                                'Olhe o quão longe já chegou!']
            choice = random.choice(range(0, len(encouragements)))
            print('\n-----------------------------------------------------')
            print(encouragements[choice])
            print('-----------------------------------------------------\n\n')



            def main():

            print(
            '''
            |￣￣￣￣￣￣￣￣|
            |  Olá!         |
            |               |
            |               |
            |               |
            |＿＿＿＿＿＿＿＿| 
            ∧＿∧   ||
            (   ´ω` )  ||
            / 　　づ
            '''
            )
            print('Bem-vindo ao jogo!\n\n')
            
            while True:
                print('a) Monstrar encorajamento.')
                print('b) Mostrar flag.')
                print('c) Sair\n')
                choice = input('Escolha uma opção: (a/b/c) ')
                
                if choice == 'a':
                print_encouragement()
                
                elif choice == 'b':
                print('\nOpa! Parece que algo está faltando!\n\n')
                
                elif choice == 'c':
                sys.exit(0)
                
                else:
                print('\nOpção inválida "' + choice + '", selecione uma opção "a", "b" ou "c"\n\n')



            if __name__ == "__main__":
            main()



        </pre>
            <p>Ou faça o download clicando no link</p>
            <a href="desafios/game4.py" download="game4.py">Download</a>
        </div>
    </main>

    <footer>
        <form id="incantation-container" name="container" action="jogo6.php" method="post">
            $&gt; <input type="text" id="incantation" name="incantation" autocomplete="off" autocorrect="off"
                autocapitalize="off" spellcheck="false" autofocus />
        </form>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>