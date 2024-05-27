document.addEventListener('DOMContentLoaded', () => {
    document.forms.comentarios.onsubmit = validaForm;
});

function validaForm(e) {
    let form = e.target;
    let formValido = true;
    console.log("início da função validaForm!");

    const spanComentario = form.comentario.nextElementSibling;

    spanComentario.textContent = "";


    if (form.comentario.value.trim() === "") {
        spanComentario.textContent = "Caixa de comentários deve ser preenchida!";
        formValido = false;
    }


    if (!formValido) {
        e.preventDefault();
    }

}


