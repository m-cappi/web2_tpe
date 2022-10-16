"use-strict";
const form = document.querySelector("#form");

form.addEventListener("submit", calcular);

async function calcular(e) {
    e.preventDefault();
    const data = new FormData(form);
    let title = data.get("title");
    let author = data.get("author");

    let url = `${title}/${author}`;
    console.log(url);

    //window.location.href = url;

    let res = await fetch(url).then((r) => r.text());
    let resultadoNode = document.querySelector("#resultado");
    resultadoNode.innerHTML = res;
}
