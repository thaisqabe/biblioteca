<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">

</head>
<body>
    <section>
    <?php
        include_once "pedaco.php";


        $id = $_GET['id'];
        // echo "valor do  id: " . $id;

        include_once 'conexao.php';


    ?>

    <h2>Formulário para atualização de livros</h2>

    <div class="container container2">

    <form class="form" action="#" method="POST">

        <?php
            $sql = "SELECT * FROM livro where id = $id";
            $stmt = $pdo->query($sql);
            while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "Título: " . $livro['titulo'] . "<br>";
                    echo "Gênero: " . $livro['genero'] . "<br>";
                    echo "Autor: " . $livro['autor'] . "<br><br>";

                    echo "Ano: " . $livro['ano'] . "<br>";

                    echo "Páginas: " . $livro['paginas'] . "<br><br>";
            }
    ?>
    

        <div class="mb-3">
            <input type="text" value=
            "
            <?php
                echo $livro['titulo']

            ?>
            "

            name="titulo" class="form-control" id="" aria-describedby="" >
        </div>
 
        <div class="mb-3">
            <input type="text" name="genero" class="form-control" id="" aria-describedby="" >
        </div>

        <div class="mb-3">
            <input type="text" name="autor" class="form-control" id="" aria-describedby="" >
        </div>

        <div class="mb-3">
            <input type="text" name="ano" class="form-control" id="" aria-describedby="" >
        </div>

        <div class="mb-3">
            <input type="text" name="paginas" class="form-control" id="" aria-describedby="" >
        </div>
        <div class="container2">
        <button type="submit" class="btn botao">Atualizar</button>
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