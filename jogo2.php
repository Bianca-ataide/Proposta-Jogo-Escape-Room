<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <script src="js/game2.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Desafio 2</title>
    
</head>
<body>

<h1>Do You Wanna Play a Game?</h1>

<main>
<div class="container-sm">
        <p>Para obter a chave do desafio execute o código Python abaixo. O corrija caso necessário.</p>
        <pre>
            import random

            def str_xor(secret, key):
                #extend key to secret length
                new_key = key
                i = 0
                while len(new_key) < len(secret):
                    new_key = new_key + key[i]
                    i = (i + 1) % len(key)        
                return "".join([chr(ord(secret_c) ^ ord(new_key_c)) for (secret_c,new_key_c) in zip(secret,new_key)])


            print('H1_5TR4NG3R{' + chr(0x25) + chr(0x64) + chr(0x97) + chr(0x66) + chr(0x99) + chr(0x61) + chr(0x36) + chr(0x37) + chr(0x32) + '}')

        </pre>
        <p>Ou faça o download clicando no link</p>
        <a href="desafios/game2.py" download="game2.py">Download</a>
                </div>
</main>

<footer>
    <form id="incantation-container" name="container" action="jogo3.php" method="post">
        $&gt; <input type="text" id="incantation" name="incantation" autocomplete="off" autocorrect="off" autocapitalize="off"
            spellcheck="false" autofocus/>
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