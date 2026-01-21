let cidaderecebe = document.getElementById("cidaderecebe");
let numerorecebe = document.getElementById("numerorecebe");
let bairrorecebe = document.getElementById("bairrorecebe");
let CEPrecebe = document.getElementById("CEPrecebe");
let complementorecebe = document.getElementById("complementorecebe");

let cidadesaida = document.getElementById("cidadesaida");
let numerosaida = document.getElementById("numerosaida");
let bairrosaida = document.getElementById("bairrosaida");
let CEPsaida = document.getElementById("CEPsaida");
let complementosaida = document.getElementById("complementosaida");



let botao = document.getElementById("btn")

var value = 0

botao.addEventListener("click", function () {
    
    cidadesaida.textContent = "você digitou: "+ cidaderecebe.value;
    numerosaida.textContent = "você digitou: "+ numerorecebe.value;
    bairrosaida.textContent = "você digitou: "+ bairrorecebe.value;
    CEPsaida.textContent = "você digitou: "+ CEPrecebe.value;
    complementosaida.textContent = "você digitou: "+ complementorecebe.value;
   


} );
