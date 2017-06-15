/**
 * Created by kevsa on 6/6/2017.
 */


$(document).ready(function(){
    /**
     * Funcion para añadir una nueva columna en la tabla
     */
    $("#add").click(function(){
        var tds=$("#tabla tr:first td").length;
        var trs=$("#tabla tr").length;

        var nuevaFila="<tr>";

        var group = document.getElementsByName("group")[0].value;
        var TA = document.getElementsByName("group")[0].value
        var carrer = document.getElementsByName("group")[0].value

        nuevaFila+="<td>columna "+(1)+" Añadida con jquery</td>";
        nuevaFila+="<td>columna "+(2)+" Añadida con jquery</td>";
        nuevaFila+="<td>columna "+(3)+" Añadida con jquery</td>";

        nuevaFila+="<td>"+(trs+1)+" columnas";
        nuevaFila+="</tr>";
        $("#tabla").append(nuevaFila);


    });
});