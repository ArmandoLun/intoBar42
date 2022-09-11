tabla = document.querySelector("table tbody");
const enlace_tabla = document.getElementById("enlaces-tabla"), max_pag = Math.ceil(datos_tabla.length/10)-1;
var pag = 0;

for(var x=0; x<datos_tabla.length; x++){
    datos_tabla[x]["seleccionado"] = false;
}

const avanzar_pag = ()=>{
    if(pag < max_pag) pag++;
    cargar_tabla();
}

const retroceder_pag = ()=>{
    if(pag > 0) pag--;
    cargar_tabla();
}

const cargar_tabla = ()=>{
    enlace_tabla.innerHTML = "";
    if(pag > 0) enlace_tabla.innerHTML += "<a onclick='retroceder_pag()'><<</a>";
    enlace_tabla.innerHTML += ""+(pag+1);
    if(pag < max_pag) enlace_tabla.innerHTML += "<a onclick='avanzar_pag()'>>></a>";

    tabla.innerHTML = cabecera_tabla;

    for(var i=10*pag; i<10*(pag+1) && i<datos_tabla.length; i++){
        var fila;

        if(i%2 == 0) fila = "<tr style='background-color: #eee'>";
        else fila = "<tr style='background-color: #white'>";

        fila += "<td><input type='checkbox' class='sel' onclick='marcarUno(this)'";
        
        if(datos_tabla[i]["seleccionado"]) fila += "checked";

        fila += "></td>";
        
        if(typeof img !== "undefined"){
            fila += "<td width='50px'><img src='"+img[0]+datos_tabla[i][img[1]]+"' height='50px'></td>";
        }
        
        for(var x=0; x<datos.length; x++) fila += "<td>"+datos_tabla[i][datos[x]]+"</td>";

        fila += "</tr>";
        tabla.innerHTML += fila;
        comprobarMarcas();
    }
}

const marcarUno = (checkbox)=>{
    var checkboxes = document.getElementsByClassName("sel");
    
    for(var x=0; x<checkboxes.length; x++){
        if(checkboxes[x] == checkbox){
            datos_tabla[x+(pag*10)]["seleccionado"] = checkbox.checked;
            break;
        }
    }

    comprobarMarcas();
}

const marcarTodos = (checkbox)=>{
    var checkboxes = document.getElementsByClassName("sel");

    for(var x=0; x<datos_tabla.length; x++){
        datos_tabla[x]["seleccionado"] = checkbox.checked;
    }

    for(var x=0; x<checkboxes.length; x++){
        checkboxes[x].checked = checkbox.checked;
    }
}

const comprobarMarcas = ()=>{
    var todos_marcados = true;

    for(var x=0; x<datos_tabla.length; x++){
        if(!datos_tabla[x]["seleccionado"]) todos_marcados = false;
    }

    document.getElementById("SelAll").checked = todos_marcados;
}
        
cargar_tabla();