<?php
  $numeros = array(1, 1, 1, 2, 3);  
  array_pop($numeros); 

  $ultimo[] = end($numeros); 
  array_pop($numeros);
  
  $penultimoValor[] = end($numeros); 
  array_pop($numeros);

  $stringUltimo = implode(',', $ultimo);
  $stringPenultimo = implode(',', $penultimoValor);


  echo "O ultimo valor é ".$stringUltimo;
  echo " O penultimo valor é ".$stringPenultimo;


  if($stringUltimo > $stringPenultimo) {
    echo "  true";
  } else {
    echo "  false";
  }


?>


