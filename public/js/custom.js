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

    var row = id + "_" + ta + "_" + group ;

    var row2 = "? " + id + "_" + ta + "_" + group ;

    var data = document.getElementsByName("t1")[0].value;

    if(data == ""){
        document.getElementsByName("t1")[0].value = row;
    }else{
        
    }





}

function genera_req() {
    var tabla = document.getElementById("tabla2");

    var fila = tabla.insertRow(2);
    var celda1 = fila.insertCell(0);
    var celda2 =  fila.insertCell(1);
    var celda3 =  fila.insertCell(2);
    var celda4 =  fila.insertCell(3);

    var id = document.getElementsByName("subid")[0].value;
    var name = document.getElementsByName("subname")[0].value;
    var result = document.getElementsByName("result")[0].value;
    var cycle = document.getElementsByName("carrer")[0].value;


    celda1.innerHTML = id;
    celda2.innerHTML = name;
    celda3.innerHTML = result;
    celda4.innerHTML = cycle;

}

