<!Doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <script src="js/comentarios.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Apresentação do Jogo</title>
</head>

<body>
    <?php
    include ("includes/header.php");
    ?>

    <main>
        <span id="msgAlerta"></span>
        <!-- um caixa de mensagem para carregar mensagens de erro -->
        <div class="container-sm">
            <h2>Do You Wanna Play a Game?</h2>
            <p class="text-xs-center">
                Do You Wanna Play a Game? é um jogo do tipo escape room.
                Consiste basicamente em desafios, alguns envolvendo conceitos de
                programação simples, em que o usuário deve entender o que o
                desafio pede e retornar no espaço adequado o texto correspondente
                a resposta ao desafio.
                Os primeiros desafios são bem simples para que se entenda a dinâmica do jogo.
                Uma vez que todos os desafios sejam cumpridos o jogador consegue escapar da sala.
            </p>
        </div>
        <div class="container-sm">
            <h2>Como jogar?</h2>
            <p class="text-xs-center">
                Cada fase possui um desafio (podendo envolver código ou não).
                A ideia é que o jogador entenda o problema e descubra como conseguir a chave.
                Os arquivos ficam disponíveis para download abaixo do enunciado através do link.
                A chave deve ser inserida no espaço indicado.
                Cada desafio vale 20 pontos.
                A cada tentativa falha são decrementados 2 pontos do total do desafio.
                </p>
        </div>
    </main>
    <div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/jogo1.PNG" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="img/jogo7.PNG" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="img/deafio.PNG" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
        </div>
    </div>

    <div class="container-sm">
        <h3>Deixe seu comentário</h3>
        <form id="comment" name="comment" action="enviarComentario.php" method="post">

            <div class="form-group col-xs-6">
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome">
                </p>

            </div>
            <div class="form-group col-xs-3">
                <label for="comentario">Escreva uma mensagem</label>
                <textarea id="comentario" name="comentario" class="form-control w-100 p-3" maxlength="1000">
                    </textarea>
            </div>
            <span class="required" id='commen'></span>

            <button type="submit">Comentar</button>
        </form>
        <hr>
        <div class="container-sm">
            <h3><b>Comentários</b></h3>
            <table class="table table-striped table-hover">
                <tr>
                    <th class=" col-xs-6"></th>
                    <th class=" col-xs-6"></th>
                </tr>
                <?php
                require "conexao.php";
                $pdo = mysqlConnect();

                try {
                    $sql = <<<SQL
                            SELECT nome, comentario
                            FROM comentarios
                            SQL;

                    $stmt = $pdo->query($sql);
                } catch (Exception $e) {
                    exit('Falha ao executar SQL: ' . $e->getMessage());
                }
                while ($row = $stmt->fetch()) {
                    $nome = htmlspecialchars($row['nome']);
                    $comentario = htmlspecialchars($row['comentario']);

                    echo <<<HTML
        <tr>
          <td class=" col-xs-6">$nome</td> 
          <td class=" col-xs-6">$comentario</td>
        </tr>      
        HTML;
                }
                ?>
            </table>
        </div>


    </div>
    <?php
    include ("includes/footer.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>