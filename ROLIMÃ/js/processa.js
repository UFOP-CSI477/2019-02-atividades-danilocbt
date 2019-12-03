var cadastrar = function() {
  // pegar dos dados
  let nome = document.getElementById("nome").value
  let largada = document.getElementById("largada").value
  let tempo = document.getElementById("tempo").value

    // inserir na tabela
    let tabelaBody = document.getElementById("corpo")

    let tr = document.createElement("tr")

    let tdNome = document.createElement("td")
    let tdLargada = document.createElement("td")
    let tdTempo = document.createElement("td")
    let tdGanhador = document.createElement("td")

    tdNome.textContent = nome
    tdLargada.textContent = largada
    tdTempo.textContent = tempo
    tdGanhador.textContent = "?"

    tr.appendChild(tdLargada)
    tr.appendChild(tdNome)
    tr.appendChild(tdTempo)
    tr.appendChild(tdGanhador)
    tabelaBody.appendChild(tr)

    // limpa a tela
    document.getElementById("nome").value = ""
    document.getElementById("largada").value = ""
    document.getElementById("tempo").value = ""

}

function limparTabela(){
  let tabelaBody = document.getElementById("corpo").innerHTML = ""
}

function ordenar(){
  let corpoTabela = document.getElementById("corpo")
  let linhas = corpoTabela.getElementsByTagName("tr")
  let arrayJogadores = []

  for(let i = 0; i < linhas.length; i++) {
    let tds = linhas[i].getElementsByTagName("td")
    arrayJogadores.push({largada: tds[0].textContent, nome: tds[1].textContent, tempo: tds[2].textContent})
  }

  arrayJogadores.sort(function(obj1, obj2){
    return obj1.tempo - obj2.tempo
  })

  // limpa a tabela
  let tabelaBody = document.getElementById("corpo")
  tabelaBody.innerHTML = ""

  // laço de ordenação
  for(let i = 0; i < arrayJogadores.length; i++) {
    //Criando elemento e colocando na tabela
    let tr = document.createElement("tr")

    // Criando as tds
    let tdLargada = document.createElement("td")
    let tdNome = document.createElement("td")
    let tdTempo = document.createElement("td")
    let tdGanhador = document.createElement("td")

    //Colocando conteudo nas tds
    tdLargada.textContent = arrayJogadores[i].largada
    tdNome.textContent = arrayJogadores[i].nome
    tdTempo.textContent = arrayJogadores[i].tempo
    tdGanhador.textContent = i == 0 ? "Sim" : "Não"
    tdGanhador.style.backgroundColor = i == 0 ? "green" : "red"
    tdGanhador.style.color = "white"

    //Colocando as tds dentro do tr
    tr.appendChild(tdLargada)
    tr.appendChild(tdNome)
    tr.appendChild(tdTempo)
    tr.appendChild(tdGanhador)

    //Inserindo linha por linha na tabela ordenadamente
    tabelaBody.appendChild(tr)
  }


}
