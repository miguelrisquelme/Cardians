document.querySelector("#campoPesquisa").addEventListener("keyup", async(e) => {
    document.querySelector("#resultado").innerHTML = await fetch("buscar-cliente.php?campoPesquisa="+e.target.value)
        .then((data) => data.text())
        .then((html) => html)
    });