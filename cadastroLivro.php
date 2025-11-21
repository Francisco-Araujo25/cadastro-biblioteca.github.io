<?php 

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];
$editora = $_POST['editora'];

$isbn    = $_POST['isbn'];


$copia = $_POST['valor_copia'];


$emprestavel = $_POST['emprestavel']; // 'sim' ou 'nao'


echo "<h1>Livro cadastrado!</h1>";
echo "Título: $titulo <br>";
echo "Autor: $autor <br>";
echo "Ano: $ano <br>";
echo "Editora: $editora <br>";
?>