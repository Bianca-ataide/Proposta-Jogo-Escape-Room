<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <script src="js/game3.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Desafio 3</title>
</head>

<body>

    <h1>Do You Wanna Play a Game?</h1>

    <main>
        <div class="container-sm">
            <p>Para obter a chave do desafio execute o código Python abaixo. O corrija caso necessário.</p>
            <pre>

            import random

            def str_xor(secret, key):
                new_key = key
                i = 0
            while len(new_key) < len(secret):
            new_key = new_key + key[i]
                    i = (i + 1) % len(key)        
                return "".join([chr(ord(secret_c) ^ ord(new_key_c)) for (secret_c,new_key_c) in zip(secret,new_key)])


            flag_enc = chr(0x32) + chr(0x27) + chr(0x08) + chr(0x09) + chr(0x25) + chr(0x21) + chr(0x23) + chr(0x35) + chr(0x68) + chr(0x18) + chr(0x31) + chr(0x46) + chr(0x09) + chr(0x5f) + chr(0x1f) + chr(0x10) + chr(0x3b) + chr(0x1b) + chr(0x55) + chr(0x1a) + chr(0x34) + chr(0x5d) + chr(0x51) + chr(0x40) + chr(0x54) + chr(0x09) + chr(0x05) + chr(0x04) + chr(0x57) + chr(0x1b) + chr(0x11) + chr(0x31) + chr(0x0e) + chr(0x51) + chr(0x5c) + chr(0x44) + chr(0x51) + chr(0x0a) + chr(0x5b) + chr(0x5a) + chr(0x19)

            
                flag = str_xor(flag_enc, 'enkidu')

                if flag == "":
            print('Houve um problema.')
            else:
            print('Correto! Essa é a flag: ' + flag)


        </pre>
            <p>Ou faça o download clicando no link</p>
            <a href="desafios/game3.py" download="game3.py">Download</a>
        </div>
    </main>

    <footer>
        <form id="incantation-container" name="container" action="jogo4.php" method="post">
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