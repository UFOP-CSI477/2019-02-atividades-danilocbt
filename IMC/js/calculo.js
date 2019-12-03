function calculoImc(){

   let massa = document.dados.massa;
   let altura = document.dados.altura;

   if(validar(massa) && validar(altura)){
     let res = parseFloat(massa.value) / (parseFloat(altura.value)/100 * parseFloat(altura.value)/100);

     // retorna o imc
     document.dados.imc.value = res;

     // retorna a classificação do imc
     if(res < 18.5){
       document.dados.classificacao.value = "Subnutrição";
     }else if (res >=18.5 && res < 25) {
       document.dados.classificacao.value = "Peso saudável";
     }else if (res >=25 && res < 30) {
       document.dados.classificacao.value = "Sobrepeso";
     }else if (res >=30 && res < 35) {
       document.dados.classificacao.value = "Obesidade grau 1";
     }else if (res >=35 && res < 40) {
       document.dados.classificacao.value = "Obesidade grau 2";
     }else if (res >=40) {
       document.dados.classificacao.value = "Obesidade grau 3";
     }

     // retorna o intervalo de peso ideal
     let p1 = 18.5 * (parseFloat(altura.value)/100 * parseFloat(altura.value)/100);
     let p2 = 24.9 * (parseFloat(altura.value)/100 * parseFloat(altura.value)/100);
     document.dados.imcIdeal.value = "Peso ideal: " + p1 + " kg à " + p2 + " kg";

   }
}


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
