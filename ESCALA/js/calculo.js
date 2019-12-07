
function converter(){

  let amplitude = document.dados.amplitude;
  let intervalo = document.dados.intervalo;

  if(validar(amplitude) && validar(intervalo)){
    let res = Math.log10(parseFloat(amplitude.value)) + 3 * Math.log10(8 * parseFloat(intervalo.value)) - 2.92;

    if (res < 3.5){
      document.dados.resultado.value = "MAGNITUDE: " + res + " Causas: Geralmente não sentido, mas gravado.";

    }
    else if (res >= 3.5 && res <= 5.4)
    {
      document.dados.resultado.value = "MAGNITUDE: " + res + " Causas: Às vezes sentido, mas raramente causa danos.";

    }
    else if (res >=5.5 && res <= 6.0)
    {
      document.dados.resultado.value = "MAGNITUDE: " + res + " Causas: No máximo causa pequenos danos a prédios bem construídos, mas pode danificar seriamente casas mal construídas em regiões próximas.";

    }
    else if (res >= 6.1 && res <= 6.9)
    {
      document.dados.resultado.value = "MAGNITUDE: " + res + " Causas: Pode ser destrutivo em áreas em torno de até 100 km do epicentro.";

    }
    else if (res >= 7.0 && res <= 7.9)
    {
      document.dados.resultado.value = "MAGNITUDE: " + res + " Causas: Grande terremoto. Pode causar sérios danos numa grande faixa.";

    }
    else if (res > 8)
    {
      document.dados.resultado.value = "MAGNITUDE: " + res + " Causas: Enorme terremoto. Pode causa graves danos em muitas áreas mesmo que estejam a centenas de quilômetros.";

    }

    // var terremoto = "• Magnitude:\n" + res + "\n\n• Efeitos:\n" + efeito;

    // $("textarea[name='resultado']").val(terremoto);

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
