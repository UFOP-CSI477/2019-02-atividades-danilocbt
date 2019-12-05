

function validar(campo) {
  let n = campo.value;
  if ( n.length == 0 ||  isNaN( parseFloat(n) ) ) {
    // Erro
    alert('Informe o valor corretamente, por favor!')
    // window.alert("Informe o valor corretamente!");
    campo.value = "";
    campo.focus();
    return false;
  }
  // Correto
  return true;
}
