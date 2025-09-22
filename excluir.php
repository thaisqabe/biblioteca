<?php

include_once "pedaco.php";
require 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM livro WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);


if ($stmt->execute()) {
    echo "<div class='container'>
    
    <p class='lead text-center'>Livro excluído com sucesso!</p>
    
    </div>";
} else {
    echo "<div class='container'>
    
    <p class='lead text-center'>Erro ao excluir livro.</p>
    
    </div>";
}
?>

<div class="container2">
    <a href="listar.php" type="button" class="btn botao">Voltar</a>
<div>




</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>