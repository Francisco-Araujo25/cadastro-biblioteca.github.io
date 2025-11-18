<?php 
//cadastro de livros
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];
$editora = $_POST['editora'];

$isbn    = $_POST['isbn'];
//Livro e cópia

$copia = $_POST['valor_copia'];
$idLivro = $_POST['numero_Id'];

$emprestavel = $_POST['emprestavel']; // valores esperados: 'sim' ou 'nao'
$tipo_uso = $_POST['tipo_uso']; // valores: 'emprestimo' ou 'consulta'


$sala = $_POST['sala_livro'];
$estante = $_POST['estante_livro'];

echo "<h1>Livro cadastrado!</h1>";
echo "Título: $titulo <br>";
echo "Autor: $autor <br>";
echo "Ano: $ano <br>";
echo "Editora: $editora <br>";
?>