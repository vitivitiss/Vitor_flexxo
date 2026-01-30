let nomerecebe = document.getElementById("nomerecebe");
let emailrecebe = document.getElementById("emailrecebe");
let nomesaida = document.getElementById("nomesaida");
let emailsaida = document.getElementById("emailsaida");
let botao = document.getElementById("btn")

var value = 0

botao.addEventListener("click", function () {
    
    nomesaida.textContent = "você digitou: "+ nomerecebe.value;
    emailsaida.textContent = "você digitou: "+ emailrecebe.value;


} );
