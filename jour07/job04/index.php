<?php 
    function calcul($a, $b, $operations) {
        switch ($operations) {
            case '+':
                echo " La somme de $a et $b égal à "  . ($a + $b);
                break;
            case '-':
                echo " La soustraction de $a et $b égal à "  . ($a - $b);
                break;
            case '*':
                echo " La multiplication de $a et $b égal à "  . ($a * $b);
                break;
            case '/':
                echo " La somme de $a et $b égal à "  . ($a / $b);
                break;
            case '%':
                echo " Le modulo de $a et $b égal à "  . ($a % $b);
                break;
            default:
                echo "verifier votre operation!!!";
                break;
        }
    }
    calcul(450,250,"%");
?>