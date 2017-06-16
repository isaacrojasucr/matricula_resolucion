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
    var celda5 =  fila.insertCell(4);

    var group = document.getElementsByName("group")[0].value;
    var ta = document.getElementsByName("timesAttended")[0].value;
    var id = document.getElementsByName("carrer")[0].value;
    var v = document.getElementsByName("carrer")[0];
    var text = v.options[v.selectedIndex].text;

    var idlocation = document.getElementsByName("location")[0].value;
    var vv = document.getElementsByName("location")[0];
    var textlocation = vv.options[vv.selectedIndex].text;

    
    celda1.innerHTML = id;
    celda2.innerHTML = text;
    celda3.innerHTML = group;
    celda4.innerHTML = ta;
    celda5.innerHTML = textlocation;

    var row = id + "_" + ta + "_" + group + "_" + idlocation;

    var row2 = "?" + id + "_" + ta + "_" + group + "_" + idlocation;

    var data = document.getElementById("t1").value;

    if(data === ""){
        document.getElementById("t1").value = row;

    }else{
        document.getElementById("t1").value = data + row2;


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

    var row = id + "_" + name + "_" + result + "_" + cycle ;

    var row2 = "?" + id + "_" + name + "_" + result + "_" + cycle ;

    var data = document.getElementById("t2").value;

    if(data === ""){
        document.getElementById("t2").value = row;

    }else{
        document.getElementById("t2").value = data + row2;


    }

}

function valform (text) {
    var courses = document.getElementById("t1").value;

    if(courses === ""){
        alert(text + "");
        return false;
    }

    return true;
}

