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
        require 'conexao.php';

        include_once "pedaco.php";



    ?>







    <h2 class="mt-3 mb-3">Lista de Livros disponíveis</h2>

    <div class="container ">
        <table class="table  ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Autor</th>  
                    <th scope="col">Ano</th>
                    <th scope="col">Páginas</th>
                    
                </tr>
            </thead>

            <tbody>

            <?php
                $sql = "SELECT * FROM livro";
                $stmt = $pdo->query($sql);
                while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {

                    echo "<tr>";
                    echo "<th scope='row'>" .$livro['id']."</th>";
                    echo "<td>" . $livro['ititulod'] ." </td>";
                    echo "<td>". $livro['genero'] ."</td>";
                    echo "<td>" . $livro['autor'] ."</td>";
                    echo "<td>". $livro['ano'] ."</td>";
                    echo "<td>". $livro['paginas'] ."</td>";
                    echo "</tr>";
    }
?>


                <tr>
                    <th scope="row">1</th>
                    <td>Dom Casmurro</td>
                    <td>Romance</td>
                    <td>Machado de Assis</td>
                    <td>1900</td>
                    <td>338</td>

                </tr>
             <tr>
                    <th scope="row">2</th>
                    <td>Dom Casmurro</td>
                    <td>Romance</td>
                    <td>Machado de Assis</td>
                    <td>1900</td>
                    <td>338</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Dom Casmurro</td>
                    <td>Romance</td>
                    <td>Machado de Assis</td>
                    <td>1900</td>
                    <td>338</td>

                </tr>
              
            </tbody>
        </table>

</div>


<div class="container2">
    <a href="index.php" type="button" class="btn botao">Voltar</a>
</div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</html>