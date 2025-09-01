<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>
<body>
    <section class="">
    <?php
        include_once "pedaco.php";
    ?>
    <p class="lead text-center">

Bem-vindo à Biblioteca! Aqui você pode cadastrar novos livros, visualizar a lista completa da biblioteca, atualizar informações de títulos já cadastrados e excluir o que não for mais necessário.
A plataforma oferece uma gestão completa e simples dos livros no banco de dados. Organize e mantenha sua biblioteca sempre atualizada!</p>
    <div class=" text-center container indexc " role="group" aria-label="Basic example">
       
                <a href="listar.php" type="button" class="btn botao btn-lg botoes">Lista de Livros</a>
                <a href="form_cadastro.php" type="button" class="btn botao btn-lg botoes">Cadastrar Livros</a>
    </div>

    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</html>