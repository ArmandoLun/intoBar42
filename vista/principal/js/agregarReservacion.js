var fechada = new Date();
fechada.setHours(fechada.getHours()-3);
document.getElementById("fecha").min = fechada.toISOString().split("T")[0];
fechada.setDate(fechada.getDate() + 30);
document.getElementById("fecha").max = fechada.toISOString().split("T")[0];

const ajustarCuadritos = () => {
    var cuadritos = document.getElementById("diagrama").getElementsByClassName("b");

    for (var x = 0; x < cuadritos.length; x++) {
        cuadritos[x].style.height = cuadritos[x].clientWidth + "px";
    }
}
ajustarCuadritos();
window.onresize = ajustarCuadritos;