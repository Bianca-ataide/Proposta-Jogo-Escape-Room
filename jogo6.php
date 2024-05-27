<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <script src="js/game6.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Desafio 6</title>
</head>

<body>

    <h1>Do You Wanna Play a Game?</h1>

    <main>
        <div class="container-sm">
            <p>Para obter a chave do desafio execute o código Python abaixo</p>
            <pre>

            import random

            def str_xor(secret, key):
                new_key = key
                i = 0
                while len(new_key) < len(secret):
                    new_key = new_key + key[i]
                    i = (i + 1) % len(key)        
                return "".join([chr(ord(secret_c) ^ ord(new_key_c)) for (secret_c,new_key_c) in zip(secret,new_key)])


            flag_enc = chr(0x15) + chr(0x27) + chr(0x18) + chr(0x96) + chr(0x55) + chr(0x21) + chr(0x23) + chr(0x27) + chr(0x5f) + chr(0x75) + chr(0x98) + chr(0x2a) + chr(0x1c) + chr(0x5e) + chr(0x1e) + chr(0x1b) + chr(0x3b) + chr(0x17) + chr(0x10c) + chr(0x5b) + chr(0x58) + chr(0x91) + chr(0x3b) + chr(0x42) + chr(0x53) + chr(0x5c)+ chr(0x00) + chr(0x13) + chr(0x0d) + chr(0x5e) + chr(0x50) + chr(0x4d)


            num = random.choice(range(10,101))

            print('Qual o valor de ' + str(num) + ' na base decimal?')

            ans = input('Resposta: ')

            try:
            ans_num = int(ans, base=2)
            
            if ans_num == num:
                flag = str_xor(flag_enc, 'enkidu')
                print('Correto! Essa é a flag: ' + flag)
            else:
                print(str(ans_num) + ' e ' + str(num) + ' não são iguais.')
            
            except ValueError:
            print('A base decimal deve conter apenas 0s e 1s.')


        </pre>
            <p>Ou faça o download clicando no link</p>
            <a href="desafios/game5.py" download="game5.py">Download</a>
        </div>
    </main>

    <footer>
        <form id="incantation-container" name="container" action="jogo7.php" method="post">
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