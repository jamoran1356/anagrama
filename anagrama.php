<?php
/*
 * Escribe una función que reciba dos palabras (String) y retorne
 * verdadero o falso (Bool) según sean o no anagramas.
 * - Un Anagrama consiste en formar una palabra reordenando TODAS
 *   las letras de otra palabra inicial.
 * - NO hace falta comprobar que ambas palabras existan.
 * - Dos palabras exactamente iguales no son anagrama.
 */

 function anagrama($str1, $str2){
    
   $bool = count_chars($str1,1) === count_chars($str2,1);
   if ($bool==1){
    $msg = "true";
    return $msg;
   } else {
    $msg = "false";
    return $msg;
   }  
  
 }

 echo anagrama("nada", "adan"); //devuelve true
 echo anagrama("casa", "anda"); //devuelve false


?>