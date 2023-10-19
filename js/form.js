document.addEventListener("DOMContentLoaded", function() {
  let btnCadastrar = document.getElementById("btnCadastrar");

  btnCadastrar.addEventListener("click", function(event) {
    event.preventDefault();


    let nome = document.getElementById("nome").value;
    let dtNasc = document.getElementById("dtNasc").value;
    let telefone = document.getElementById("telefone").value;
    let genero = document.querySelector("input[name='genero']:checked");
    let email = document.getElementById("email").value;
    let profissao = document.getElementById('profissao').value;

    let formatoEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let emailValido = formatoEmail.test(email);

    if (nome === "" || dtNasc === "" || telefone === "" || genero === null || email === "" || !emailValido || profissao === "") {
      alert("Por favor, preencha todos os campos corretamente.");
      return;
    }

    alert("Cadastro Concluído!!");
  });
});


function confirmarApagar(id) {
     if (window.confirm("Deseja apagar este cliente?")) {
         window.location.href = "listar.php?id=" + id + "&opcao=sim";
    }
}


function aplicarMascara(input) {
  let valor = input.value.replace(/\D/g, '');
  
  if (valor.length >= 10) {
      input.value = '(' + valor.slice(0, 2) + ') ' + valor.slice(2, 7) + '-' + valor.slice(7, 11);
  } else {
      input.value = '(' + valor.slice(0, 2) + ') ' + valor.slice(2, 6) + '-' + valor.slice(6, 10);
  }
}
