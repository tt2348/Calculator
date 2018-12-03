/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function Calculate(value) {
    var dataVal = value;  /* assigning equation expression to variable*/
    $.ajax({ /* AJAX Call */
        type: 'GET',
        url: 'PHP/CalcPHP.php',
        dataType: "json",
        data: {equation: dataVal}, /* Sending the equation */
        success: function (data) {
            if (data == "-1") {
                //declare another variable just to clarify the inifinity issue
                var Infdata = "Infinity";
                $("#display").val(Infdata);
            } else {
                $("#display").val(data);
            }


        }
    });
}