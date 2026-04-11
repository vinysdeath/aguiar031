

let celsius = Number(prompt("digite a temperatura em celsius:"));
let fahrenheit = (celsius * 1.8) + 32;

let dia = Number(prompt("digite o dia:"));
let mes = Number(prompt("digite o mes:"));

let corpo = document.getElementById("corpo");
let txtCelsius = document.getElementById("resultadoCelsius");
let txtFahrenheit = document.getElementById("resultadoFahrenheit");
let txtStatus = document.getElementById("status");
let txtResultado = document.getElementById("resultadomes");

txtCelsius.innerText = "Temperatura em Celsius: " + celsius + "°C";
txtFahrenheit.innerText = "Temperatura em Fahrenheit: " + fahrenheit.toFixed(1) + "°F";

let temperatura = "";

if (celsius < 15) {
    temperatura = "frio";
    txtStatus.innerText = "Está frio";
}
else if (celsius >= 15 && celsius < 26) {
    temperatura = "morno";
    txtStatus.innerText = "Está agradável";
}
else {
    temperatura = "quente";
    txtStatus.innerText = "Está quente";
}
corpo.classList.add(temperatura);

txtResultado = document.getElementById("resultadomes");

let estacao = "";

if ((mes === 12 && dia >= 21) || (mes === 1) || (mes === 2) || (mes === 3 && dia <= 20)) {
    estacao = "verao";
    txtResultado.innerText = "É verão";
} else if ((mes === 3 && dia >= 21) || (mes === 4) || (mes === 5) || (mes === 6 && dia <= 20)) {
    estacao = "outono";
    txtResultado.innerText = "É outono";
} else if ((mes === 6 && dia >= 21) || (mes === 7) || (mes === 8) || (mes === 9 && dia <= 22)) {
    estacao = "inverno";
    txtResultado.innerText = "É inverno";
} else if ((mes === 9 && dia >= 23) || (mes === 10) || (mes === 11) || (mes === 12 && dia <= 20)) {
    estacao = "primavera";
    txtResultado.innerText = "É primavera";
} else {
    txtResultado.innerText = "Data inválida!";
}

corpo.classList.add(estacao);