document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("form-modificado").addEventListener("submit", function(event){
        // Impede o envio do formulário padrão
        event.preventDefault();
        // Oculta a div do formulário
        document.querySelector(".form-floating").classList.add("d-none");
        // Exibe a div de resultado
        document.getElementById("div-resultado").classList.remove("d-none");
    });
});
