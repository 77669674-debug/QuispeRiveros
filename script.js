function multiplicar(){

    let n1 = document.getElementById("num1").value;
    let n2 = document.getElementById("num2").value;

    let resultado = n1 * n2;

    document.getElementById("resultado").innerHTML =
    "Resultado: " + resultado;
}

function factorial(){

    let num = document.getElementById("numeroFactorial").value;

    fetch("operaciones.php?factorial=" + num)
    .then(res => res.text())
    .then(data => {

        document.getElementById("resultadoFactorial").innerHTML = data;

    });

}

function sumaCuadrados(){

    fetch("operaciones.php?cuadrados=5")
    .then(res => res.text())
    .then(data => {

        document.getElementById("resultadoCuadrados").innerHTML = data;

    });

}