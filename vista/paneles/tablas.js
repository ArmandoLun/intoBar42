const enlace_tabla = document.getElementById("enlaces-tabla");
var pag, tabla_filtrada = datos_tabla, max_pag;

const inicializar = ()=>{
    for(var x=0; x<datos_tabla.length; x++){
        datos_tabla[x]["seleccionado"] = false;
    }

    pag = 0;
    max_pag = Math.ceil(tabla_filtrada.length/10)-1;
    cargar_tabla();
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
    var tabla = document.querySelector("table tbody");
    enlace_tabla.innerHTML = "";
    if(pag > 0) enlace_tabla.innerHTML += "<a onclick='retroceder_pag()'><<</a>";
    enlace_tabla.innerHTML += ""+(pag+1);
    if(pag < max_pag) enlace_tabla.innerHTML += "<a onclick='avanzar_pag()'>>></a>";

    tabla.innerHTML = cabecera_tabla;

    for(var i=10*pag; i<10*(pag+1) && i<tabla_filtrada.length; i++){
        var fila, existe_sel = (document.getElementById("SelAll") != null);

        if(i%2 == 0) fila = "<tr style='background-color: #eee'>";
        else fila = "<tr style='background-color: #white'>";

        if(existe_sel){
            fila += "<td><input type='checkbox' class='sel' onclick='marcarUno(this)'";
            if(tabla_filtrada[i]["seleccionado"]) fila += "checked";
            fila += "></td>";
        }

        if(typeof img !== "undefined"){
            fila += "<td width='50px'><img src='"+img[0]+tabla_filtrada[i][img[1]]+img[2]+
            "' width='50px' height='50px'></td>";
        }
        
        for(var x=0; x<datos.length; x++) fila += "<td>"+tabla_filtrada[i][datos[x]]+"</td>";

        fila += "</tr>";
        tabla.innerHTML += fila;
        comprobarMarcas();
    }
}

const marcarUno = (checkbox)=>{
    var checkboxes = document.getElementsByClassName("sel");
    
    for(var x=0; x<checkboxes.length; x++){
        if(checkboxes[x] == checkbox){
            tabla_filtrada[x+(pag*10)]["seleccionado"] = checkbox.checked;
            break;
        }
    }

    comprobarMarcas();
}

const marcarTodos = (checkbox)=>{
    var checkboxes = document.getElementsByClassName("sel");

    for(var x=0; x<tabla_filtrada.length; x++){
        tabla_filtrada[x]["seleccionado"] = checkbox.checked;
    }

    for(var x=0; x<checkboxes.length; x++){
        checkboxes[x].checked = checkbox.checked;
    }
}

const comprobarMarcas = ()=>{
    var todos_marcados = true;

    for(var x=0; x<tabla_filtrada.length; x++){
        if(!tabla_filtrada[x]["seleccionado"]) todos_marcados = false;
    }

    document.getElementById("SelAll").checked = todos_marcados;
}

const accion_en_lote = ()=>{
    var accion = document.getElementById("accion_lote").value;

    if(accion != ""){
        function loop(actual, fin){
            if(tabla_filtrada[actual]["seleccionado"]){
                var xhr = new XMLHttpRequest();
                xhr.open("GET", acciones_lote[accion][0]+tabla_filtrada[actual][acciones_lote[accion][1]]);
                xhr.send();
                xhr.onloadend = ()=>{
                    if(actual+1 < fin) loop(actual+1, fin);
                    else location.href = location.href;
                }
            }
            else if(actual+1 < fin) loop(actual+1, fin);
            else location.href = location.href;
        }

        loop(0, tabla_filtrada.length);
    }
}

const cambiar_valor = ()=>{
    var valor = document.getElementById("cambio_valor").value;

    if(valor != ""){
        function loop(actual, fin){
            if(tabla_filtrada[actual]["seleccionado"]){
                var xhr = new XMLHttpRequest();
                xhr.open("GET", accion_cambiar[0]+tabla_filtrada[actual][accion_cambiar[1]]+accion_cambiar[2]+
                valor);
                xhr.send();
                xhr.onloadend = ()=>{
                    if(actual+1 < fin) loop(actual+1, fin);
                    else location.href = location.href;
                }
            }
            else if(actual+1 < fin) loop(actual+1, fin);
            else location.href = location.href;
        }

        loop(0, tabla_filtrada.length);
    }
}

const filtrar = ()=>{
    tabla_filtrada = [];

    for(var x=0; x<datos_tabla.length; x++){
        if(datos_tabla[x][filtro].includes(document.getElementById("filtrar").value)){
            tabla_filtrada.push(datos_tabla[x]);
        };
    }

    inicializar();
}

inicializar();