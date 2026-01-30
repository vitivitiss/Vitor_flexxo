let campo = document.getElementById("campo");
let saida = document.getElementById("saida");



campo.addEventListener("input", function() {
    
    saida.textContent = "você digitou: "+ campo.value;

} );
