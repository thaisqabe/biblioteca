<?php
    include_once 'pedaco.php';
    require 'conexao.php';
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $paginas = $_POST['paginas'];

    $sql = "INSERT INTO livro (titulo, genero, autor, ano, paginas) VALUES (:titulo, :genero, :autor, :ano, :paginas)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':paginas', $paginas);

if ($stmt->execute()) {
    echo "
    <div class='container'>
    
    <p class='lead text-center'>Livro inserido com sucesso!</p>
    
    </div>";
} else {
    echo "<div class='container'>
    
    <p class='lead text-center'>Erro ao inserir livro.</p>
    
    </div>";
}
?>

<div class="container2">
    <a href="listar.php" type="button" class="btn botao">Voltar</a>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>