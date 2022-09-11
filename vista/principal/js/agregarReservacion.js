var fecha = new Date();
document.getElementById("fecha").min = fecha.toISOString().split("T")[0];
fecha.setDate(fecha.getDate() + 30);
document.getElementById("fecha").max = fecha.toISOString().split("T")[0];

const ajustarCuadritos = () => {
    var cuadritos = document.getElementById("diagrama").getElementsByClassName("b");

    for (var x = 0; x < cuadritos.length; x++) {
        cuadritos[x].style.height = cuadritos[x].clientWidth + "px";
    }
}
ajustarCuadritos();
window.onresize = ajustarCuadritos;