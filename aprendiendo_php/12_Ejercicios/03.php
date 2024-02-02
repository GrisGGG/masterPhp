<?php
/**Programa que compureve que una variable este vacia
 * y si lo esta relllenarka con texto en mayusculas 
 * y en negrillas.
 */

 if(isset($_GET['numero'])){
    $numero = $_GET['numero'];
    echo $numero;
 }else{
    echo strtoupper('<strong>Texto</strong>');
 }
   

?>