<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$equation = $_GET["equation"]; /* Get the array from the AJAX */
$answer = '';

if (preg_match('/(\d+)(?:\s*)([\+\-\*\/])(?:\s*)(\d+)/', $equation, $matches) !== FALSE) {
    $operator = $matches[2];
    /*
      Switch case in order to do the basic functions of the Calculator,
     * It can also be do my making the functions for each functionality.
     * e.g.
     * func_Multiplication (Num1,Num2) and so on with the other functionalities.
     * But to use the javascript in the Calculator App I used the AJAX.
     */
    switch ($operator) {
        case '+': /* Addition */
            $answer = $matches[1] + $matches[3];
            break;
        case '-': /* Subtraction */
            $answer = $matches[1] - $matches[3];
            break;
        case '*': /* Multiplication */
            $answer = $matches[1] * $matches[3];
            break;
        case '/': /* Division */
            $zeroCheck = $matches[3];
            if ($zeroCheck == '0') { /* To check the divide by zero case */
                $answer = '-1';
                break;
            } else {
                $answer = $matches[1] / $matches[3];
            }

            break;
    }

    echo $answer;
}
