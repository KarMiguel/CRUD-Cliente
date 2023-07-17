document.addEventListener("DOMContentLoaded", function() {
   let formulario = document.getElementById("formulario");

    formulario.addEventListener("submit", function(event) {
      event.preventDefault(); 
  
      let nome = document.getElementById("nome").value;
      let dtNasc = document.getElementById("dtNasc").value;
      let telefone = document.getElementById("tel").value;
      let genero = document.querySelector("input[name='genero']:checked");
      let email = document.getElementById("email").value;
      let profissao = document.getElementById('profissao').value;

      let formatoEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      let emailValido = formatoEmail.test(email);
  
      if (nome === "" || dtNasc === "" || telefone === "" || genero === null || emailValido === "" || profissao === "" ) {
        alert("Por favor, preencha todos os campos corretamente.");
        return;
      } 
        alert("Cadastro realizado com sucesso!");
      
    });
  });
  

function mostrarAlerta(mensagem) {
  alert(mensagem);
}

function redirecionarPagina(url) {
  window.location.href = url;
}
