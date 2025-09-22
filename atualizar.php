<?php
include_once "pedaco.php";
    require 'conexao.php';
    $id = $_GET['id'];
    $novo_titulo=$_POST['novo_titulo'];
    $novo_genero=$_POST['novo_genero'];
    $novo_autor=$_POST['novo_autor'];
    $novo_ano=$_POST['novo_ano'];
    $novo_paginas=$_POST['novo_paginas'];


    $sql = "UPDATE livro 
    SET titulo = :novo_titulo, 
        genero = :novo_genero,
        autor = :novo_autor,
        ano = :novo_ano,
        paginas = :novo_paginas
    WHERE id = :id";






    $stmt = $pdo->prepare($sql);


    $stmt->bindParam(':novo_titulo', $novo_titulo);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':novo_genero', $novo_genero);
    $stmt->bindParam(':novo_autor', $novo_autor);
    $stmt->bindParam(':novo_ano', $novo_ano);
    $stmt->bindParam(':novo_paginas', $novo_paginas);
    


    if ($stmt->execute()) {
        echo "<div class='container'>
    
    <p class='lead text-center'>Livro atualizado com sucesso!</p>
    
    </div>";
    } else {
        echo "<div class='container'>
    
    <p class='lead text-center'>Erro ao atualizar o livro.</p>
    
    </div>";
    }
?>

<div class="container2">
    <a href="listar.php" type="button" class="btn botao">Voltar</a>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>