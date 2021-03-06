//add rows to table of the requested courses
//construct the hidden input that store the data
//param info (message)
function genera_tabla(info) {


    var obs = document.getElementsByName("observation")[0].value;
    var group = document.getElementsByName("group")[0].value;
    var ta = document.getElementsByName("timesAttended")[0].value;

    var id = document.getElementsByName("carrer")[0].value;
    var v = document.getElementsByName("carrer")[0];
    var text = v.options[v.selectedIndex].text;

    var idlocation = document.getElementsByName("location")[0].value;
    var vv = document.getElementsByName("location")[0];
    var textlocation = vv.options[vv.selectedIndex].text;

    var trys = document.getElementById("try").value;

    var trys = parseInt(trys);

    if(obs === ""){
        obs = "no observaciones";
    }



    if (group !== "" && ta !== ""){


        if( trys === 10){

            alert("No puede realizar mas de 10 solicitudes por proceso");

            return false;

        }else{

            var tabla = document.getElementById("tabla");

            var fila = tabla.insertRow(1);
            var celda1 = fila.insertCell(0);
            var celda2 =  fila.insertCell(1);
            var celda3 =  fila.insertCell(2);
            var celda4 =  fila.insertCell(3);
            var celda5 =  fila.insertCell(4);

            celda1.innerHTML = textlocation;
            celda2.innerHTML = text;
            celda3.innerHTML = ta;
            celda4.innerHTML = group;
            celda5.innerHTML = obs;

            var row = id + "_" + ta + "_" + group + "_" + idlocation+ "_" + obs;

            var row2 = "?" + id + "_" + ta + "_" + group + "_" + idlocation + "_" + obs;

            var data = document.getElementById("t1").value;

            if(data === "" ){

                document.getElementById("t1").value = row;

            }else{
                document.getElementById("t1").value = data + row2;

            }

            trys = trys + 1;

            document.getElementById("try").value = trys;

            document.getElementsByName("observation")[0].value = "";
            document.getElementsByName("group")[0].value = "";
            document.getElementsByName("timesAttended")[0].value = "";
        }




    }else{
        alert("" +info);
    }



}

//add rows to the table of requirements
//construct the hidden input that save the data
function genera_req(text) {


    var id = document.getElementsByName("subid")[0].value;
    var name = document.getElementsByName("subname")[0].value;
    var result = document.getElementsByName("result")[0].value;
    var cycle = document.getElementsByName("cycle")[0].value;

    if(id !== "" && name !== "" && result !== "" && cycle !== "" ){
        var tabla = document.getElementById("tabla2");

        var fila = tabla.insertRow(2);
        var celda1 = fila.insertCell(0);
        var celda2 =  fila.insertCell(1);
        var celda3 =  fila.insertCell(2);
        var celda4 =  fila.insertCell(3);
        
        celda1.innerHTML = id;
        celda2.innerHTML = name;
        celda3.innerHTML = result;
        celda4.innerHTML = cycle;

        var row = id + "-" + name + "_" + result + "_" + cycle ;

        var row2 = "?" + id + "-" + name + "_" + result + "_" + cycle ;

        var data = document.getElementById("t2").value;

        if(data === ""){
            document.getElementById("t2").value = row;

        }else{
            document.getElementById("t2").value = data + row2;


        }

        document.getElementsByName("subid")[0].value = "";
        document.getElementsByName("subname")[0].value ="";
        document.getElementsByName("result")[0].value = "";
        document.getElementsByName("cycle")[0].value =""; 
    }else{
        alert(''+text);
    }

    

}

//do the validations of the form
function valform (text, txt1) {
    var courses = document.getElementById("t1").value;

    if(courses === ""){
        alert(text + "");
        return false;
    }

    var requirements = document.getElementById("t2").value;
    if(requirements === ""){
        if (confirm(''+txt1)) {

        } else {
            return false;
        }
    }

    return true;
}

//change de tabs of the bootstrap tabs container
jQuery(document).ready(function ($) {
    $('#tabs').tab();
});

//do the graphic of spent time
function first(spent, left) {
    var pieData = [
        {
            value: spent,
            color: "#08088A",
            highlight: "#5882FA",
            label: "Dias Utilizados"
        },
        {
            value: left,
            color: "#088A08",
            highlight: "#01DF01",
            label: "Dias Restantes"
        }
    ];
    var ctx2 = document.getElementById("chart-area2").getContext("2d");

    window.myPie = new Chart(ctx2).Doughnut(pieData);
}

function second(ii,ie,em,ecn,rn,rh,lq,ef,te,tt) {


    var pieData = [
        {
            value: tt,
            color:"#848484",
            highlight: "#424242",
            label: "Procesadas"
        },
        {
            value: ii,
            color: "#FF0000",
            highlight: "#B40404",
            label: "II"
        },
        {
            value: ie,
            color: "#FF8000",
            highlight: "#B45F04",
            label: "IE"
        },
        {
            value: em,
            color: "#FFFF00",
            highlight: "#AEB404",
            label: "EM"
        },
        {
            value: ecn,
            color: "#80FF00",
            highlight: "#5FB404",
            label: "RN"
        }
        ,
        {
            value: rn,
            color: "#00FFBF",
            highlight: "#04B486",
            label: "CN"
        }
        ,
        {
            value: lq,
            color: "#00BFFF",
            highlight: "#0489B1",
            label: "LQ"
        },
        {
            value: rh,
            color: "#0000FF",
            highlight: "#0404B4",
            label: "EN"
        },
        {
            value: ef,
            color: "#8000FF",
            highlight: "#5F04B4",
            label: "RH"
        },
        {
            value: te,
            color: "#FF00FF",
            highlight: "#B404AE",
            label: "TE"
        }
    ];


    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myPie = new Chart(ctx).Pie(pieData);
}
