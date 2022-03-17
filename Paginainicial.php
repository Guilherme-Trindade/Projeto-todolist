<?php
include "cabecalho.php"
?>

<h1>Nova Tarefa</h1>
<form action = "Database.php" method = "POST">
    <label for="titulo">Nome da tarefa:</label>
    <input type="text" id="titulo" name= "titulo" placeholder="Nome da Tarefa"> <br><br>
    <label for="descricao">Descrição:</label><br>
    <input type="text" id="descricao" name= "descricao" placeholder="Descreva aqui sua tarefa">
    <input type="submit" value="Salvar Tarefa">
</form>

<?php
session_start();
if(isset($_SESSION['TarefaCriada'])){
    echo "<p>Tarefa ". $_SESSION['TarefaCriada'] . " criada com sucesso </p>";
    unset($_SESSION['TarefaCriada']);
}
session_destroy();
include "rodape.php"
?>