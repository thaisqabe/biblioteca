
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