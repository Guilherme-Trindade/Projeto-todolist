<?php
include "cabecalho.php"
?>

<?php
   require_once "models/Tarefas.php";

   $novaTarefa = new Tarefas($_POST['titulo'], $_POST['descricao']);
   $nomeArq = "Tarefas.json";

   if(!file_exists($nomeArq)){
       $tarefas = [];
       $arq = fopen($nomeArq, "w") or die ("Problemas com formacão de novas tarefas.");
   }else{
    $arq = fopen($nomeArq, "r+") or die ("Problemas com formacão de novas tarefas.");
    $conteudo = fread($arq, filesize($nomeArq));
    $contatos = json_decode($conteudo);
    rewind($arq);
   }

   array_push($tarefas, $novaTarefa);
   fwrite($arq, json_encode($tarefas));
   fclose($arq);

   session_start();
   $_SESSION['TarefaCriada'] = $novaTarefa->titulo;
   header('Location: Paginainicial.php');

?>
<?php
include "rodape.php"
?>