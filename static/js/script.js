async function carregarProductes(idCategoria) {
    const resposta = await fetch(`index.php?accio=llistar-productes&categoria_id=${idCategoria}`)
    const productes = await resposta.text()
    let contingut = document.getElementById("caca")
    contingut.innerHTML = productes
}

async function carregarDetallProducte(idProducte) {
    const resposta = await fetch(`index.php?accio=detall-producte&id=${idProducte}`)
    const producte = await resposta.text()
    let contingut = document.getElementById("caca")
    contingut.innerHTML = producte
}