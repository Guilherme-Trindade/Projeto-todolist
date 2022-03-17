<?php
include "cabecalho.php"
?>

<?php
    class Tarefas{
       public $titulo;
       public $descricao;

       public function __construct($titulo, $descricao){
           $this->titulo = $titulo;
           $this->descricao = $descricao;

        }
   }
?>
<?php
include "rodape.php"
?>