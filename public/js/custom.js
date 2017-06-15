/**
 * Created by kevsa on 6/6/2017.
 */

function genera_tabla() {
    var tabla = document.getElementById("tabla");

    var fila = tabla.insertRow(1);
    var celda1 = fila.insertCell(0);
    var celda2 =  fila.insertCell(1);
    var celda3 =  fila.insertCell(2);
    var celda4 =  fila.insertCell(3);

    var group = document.getElementsByName("group")[0].value;
    var ta = document.getElementsByName("timesAttended")[0].value;
    var id = document.getElementsByName("carrer")[0].value;
    var v = document.getElementsByName("carrer")[0];
    var text = v.options[v.selectedIndex].text;

    
    celda1.innerHTML = id;
    celda2.innerHTML = text;
    celda3.innerHTML = group;
    celda4.innerHTML = ta;

}

