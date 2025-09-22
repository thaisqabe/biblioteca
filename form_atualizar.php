
    <?php
        include_once "pedaco.php";


        // echo "valor do  id: " . $id;

            $id = $_GET['id'];


    ?>

    <h2>Formulário para atualização de livros</h2>

    <div class="container container2">

    <form class="form" action="atualizar.php?id=<?php echo $id;?>" method="POST">

        <?php

            require 'conexao.php';
            $sql = "SELECT * FROM livro where id = $id";
            $stmt = $pdo->query($sql);
            $livro = $stmt->fetch(PDO::FETCH_ASSOC);



            // while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //         echo "Título: " . $livro['titulo'] . "<br>";
            //         echo "Gênero: " . $livro['genero'] . "<br>";
            //         echo "Autor: " . $livro['autor'] . "<br><br>";

            //         echo "Ano: " . $livro['ano'] . "<br>";

            //         echo "Páginas: " . $livro['paginas'] . "<br><br>";
            // }
    ?>
    

        <div class="mb-3">
            <label for="" class="form-label" >Título: </label>
            <input type="text" value="<?php echo $livro['titulo']?>"

            name="novo_titulo" class="form-control" id="" aria-describedby="" >

        </div>
 
        <div class="mb-3">
            <label for="" class="form-label" >Gênero:</label>

            <input type="text" value="<?php echo $livro['genero']?>" name="novo_genero" class="form-control" id="" aria-describedby="" >
        </div>

        <div class="mb-3">

            <label for="" class="form-label" >Autor:</label>

            <input type="text" value="<?php echo $livro['autor']?>" name="novo_autor" class="form-control" id="" aria-describedby="" >
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Ano:</label>

            <input type="number" value="<?php echo $livro['ano']?>" name="novo_ano" class="form-control" id="" aria-describedby="" >
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Páginas:</label>
            
            <input type="number" value="<?php echo $livro['paginas']?>" name="novo_paginas" class="form-control" id="" aria-describedby="" >
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