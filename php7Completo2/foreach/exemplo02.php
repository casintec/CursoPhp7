<?php

  //Video Aula 23
  //Estruturas de Controle e Laços de Repetição
  //Foreach

?>
<form>
  <input type="text" name="nome"/>
  <input type="date" name="nascimento"/>
  <input type="submit" value="Enviar"/>  
</form>

<?php

  if(isset($_GET)){
    foreach ($_GET as $key => $value) {

      echo 'Nome do Campo: '.$key.'<br>';
      echo 'Valor do Campo: '.$value.'<br>';
      echo "<hr>";

    }
  }

?>