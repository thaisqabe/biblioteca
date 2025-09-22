<?php
require 'conexao.php';
$titulo = $_POST['titulo_excluir'];
$sql = "DELETE FROM produtos WHERE titulo = :titulo";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':titulo', $titulo, PDO::PARAM_STR);
if ($stmt->execute()) {
echo "Produto excluído com sucesso!";
} else {
echo "Erro ao excluir produto.";
}
?>