<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
        <link rel="shortcut icon" href="Img/CalcFav.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="CSS/CalcCSS.css" type="text/css">
    </head>
    <body>

        <div class="container">
            <!--
            Main Div for the calculator 
            -->
            <fieldset id="container">
                <form action="PHP/CalcPHP.php" method="POST" name="calculator">

                    <input id="display" type="text" name="display" readonly>

                    <input class="button digits" type="button" value="7" onclick="calculator.display.value += '7'">
                    <input class="button digits" type="button" value="8" onclick="calculator.display.value += '8'">
                    <input class="button digits" type="button" value="9" onclick="calculator.display.value += '9'">
                    <input class="button funcButtons" type="button" value="+" onclick="calculator.display.value += ' + '">
                    <br>
                    <input class="button digits" type="button" value="4" onclick="calculator.display.value += '4'">
                    <input class="button digits" type="button" value="5" onclick="calculator.display.value += '5'">
                    <input class="button digits" type="button" value="6" onclick="calculator.display.value += '6'">
                    <input class="button funcButtons" type="button" value="-" onclick="calculator.display.value += ' - '">
                    <br>
                    <input class="button digits" type="button" value="1" onclick="calculator.display.value += '1'">
                    <input class="button digits" type="button" value="2" onclick="calculator.display.value += '2'">
                    <input class="button digits" type="button" value="3" onclick="calculator.display.value += '3'">
                    <input class="button funcButtons" type="button" value="x" onclick="calculator.display.value += ' * '">
                    <br>
                    <input id="clearButton" class="button" type="button" value="C" onclick="calculator.display.value = ''">
                    <input class="button digits" type="button" value="0" onclick="calculator.display.value += '0'">
                    <!-- Submit button that creates the AJAX Call to complete the functionality -->
                    <input class="button funcButtons submit" type="button" value="=" onclick="Calculate(calculator.display.value)">
                    <input class="button funcButtons" type="button" value="/" onclick="calculator.display.value += ' / '">
                </form>
            </fieldset>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="JS/CalcScript.js"></script>
    </body>
</html>
