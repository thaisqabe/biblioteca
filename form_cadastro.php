<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

</head>
<body>
    <section>
    <?php
        include_once "pedaco.php";
    ?>

    <h2>Formulário para cadastro de livros</h2>

    <div class="container container2">

    <form class="form" action="inserir.php" method="POST">
        <div class="mb-3">
            <input type="text" name="titulo" class="form-control" id="" aria-describedby="" placeholder="Digite o título do livro">
        </div>
 
        <div class="mb-3">
            <input type="text" name="genero" class="form-control" id="" aria-describedby="" placeholder="Digite gênero do livro">
        </div>

        <div class="mb-3">
            <input type="text" name="autor" class="form-control" id="" aria-describedby="" placeholder="Digite o autor do livro">
        </div>

        <div class="mb-3">
            <input type="number" name="ano" class="form-control" id="" aria-describedby="" placeholder="Digite o ano do livro">
        </div>

        <div class="mb-3">
            <input type="number" name="paginas" class="form-control" id="" aria-describedby="" placeholder="Digite o número de páginas do livro">
        </div>
        <div class="container2">
        <button type="submit" class="btn botao">Cadastrar</button>
        </div>

    </form>

    </div>
    <div class="container2">
        <a href="index.php" type="button" class="btn botao">Voltar</a>
    <div>

</section>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</html>