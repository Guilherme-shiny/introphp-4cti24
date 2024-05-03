<?php 
 /*estrutura de repetição para trabalhar com array */
 $mendes = array(
    "PAGUE OQUE VC ME DÉVE!",
    "PAGUE AGORA !",
    "SEU CALOTEIRO!"
     "ksksks!");
FOREACH($mendes as $view){
    echo $view;
}
?>
<hr>
<?php
$meses = array(
    'Janeiro' => 1,
    'Fevereiro' => 2,
    'Março' => 3,
    'Abril' => 4,
);
foreach($meses as $chave => $valor){
    echo ' O mês' . $chave . ' é' . $valor .'<br>';
}
?>
 

 