


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
