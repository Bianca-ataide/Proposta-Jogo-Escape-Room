<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/valida.js"></script>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulario de Contato</title>
</head>

<body>
    <?php
    include ("includes/header.php");
    ?>
    <h1>$&gt;Formulário para contato</h1>
    <main>
        <h6 style='color:red'>Campos com * são obrigatórios!</h6>
        <span id="msgAlerta"></span>
        <form id="contato" name="contato" action="enviarFormulario.php" method="post">

            <div class="form-group col-xs-6">
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome">
                    <span class="required"></span>
                </p>

            </div>

            <div class="form-group col-xs-6">
                <p>
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu email">
                    <span class="required"></span>
                </p>

            </div>
            <div class="form-group col-xs-3">
                <fieldset id="radio">
                    <legend class="required">Você recomendaria o jogo a um amigo?</legend>
                    <div>
                        <input type="radio" id="sim" name="recomend" value="sim">
                        <label for="sim">Sim</label>
                    </div>
                    <div></div>
                    <input type="radio" id="nao" name="recomend" value="nao">
                    <label for="nao">Não</label>
                    
            </div>
            <span id='checkRadio'></span>
            </fieldset>
            
            </div>
            <div class="form-check col-xs-3 checkbox">
                <fieldset>
                    <legend class="required">Qual(is) fases achou mais interessante(s):</legend>
                    <div>
                        <input type="checkbox" class="form-check-input" id="corrCod" name="fases[0]" value="corrCod">
                        <label for="corrCod">Correção de código</label>
                    </div>

                    <div>
                        <input type="checkbox" class="form-check-input" id="cripto" name="fases[1]" value="cripto">
                        <label for="cripto">Criptografia</label>
                    </div>

                    <div>
                        <input type="checkbox" class="form-check-input" id="converteBin" name="fases[2]" value="converteBin">
                        <label for="converteBin">Converter número</label>
                    </div>

                    <div>
                        <input type="checkbox" class="form-check-input" id="bonus" name="fases[3]" value="desafio">
                        <label for="bonus">Desafio</label>
                    </div>

                </fieldset>
                <span id='checkBox'></span>
            </div>
            <div class="form-group col-xs-3">
                <fieldset>
                    <legend>Motivo do Contato:</legend>
                    <select  class="form-control" name="motivo">
                        <option value="">Selecione uma opção</option>
                        <option value="Dúvidas">Dúvidas</option>
                        <option value="Sugestões">Sugestões</option>
                        <option value="Reclamação">Reclamações</option>
                    </select>
                </fieldset>
            </div>
            <div class="form-group col-xs-3">
                <label for="texto">Escreva uma mensagem</label>
                <textarea name="texto" class="form-control w-100 p-3" maxlength="1000">
                    </textarea>
            </div>
            <button type="submit">Confirmar</button>
        </form>


        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </main>

    <?php
    include ("includes/footer.php");
    ?>

</body>

</html>