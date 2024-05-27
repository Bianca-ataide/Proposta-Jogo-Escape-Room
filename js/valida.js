document.addEventListener('DOMContentLoaded', () => {
    document.forms.contato.onsubmit = validaForm;
});

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function validaForm(e) {
    let form = e.target;
    let formValido = true;
    console.log("início da função validaForm!");


    var radio = document.querySelector('input[name="recomend"]:checked');
    const spanUsuario = form.nome.nextElementSibling;
    const spanEmail = form.email.nextElementSibling;
    const spanRadio = document.getElementById('checkRadio');
    const spanCheck = document.getElementById('checkBox');

    spanUsuario.textContent = "";
    spanEmail.textContent = "";
    // spanRadio.textContent = "";


    if (form.nome.value === "") {
        spanUsuario.textContent = "Nome deve ser preenchido!";
        formValido = false;
    }

    if (form.email.value === "") {
        spanEmail.textContent = "E-mail deve ser preenchido!";
        formValido = false;
    } else if (!validateEmail(form.email.value)) {
        spanEmail.textContent = "E-mail inválido!";
        formValido = false;
    }

    if (!$("input[name='recomend']:checked").length) {
        spanRadio.textContent = "Nenhuma opção selecionada";
        formValido = false;
    }

    let checkBoxes = document.querySelectorAll("input[type='checkbox']");
    let noCheckedBoxes = true
    let check = []
    for (i = 0; i< checkBoxes.length; ++i) {
        if(checkBoxes[i].checked) {
            check.push(checkBoxes[i].value);
            noCheckedBoxes = false
        }
    }
    if(noCheckedBoxes) {
        spanCheck.textContent = "Nenhuma opção marcada";
        formValido = false;
    }

    if (!formValido) {
        e.preventDefault();
    }
    else{
        e.preventDefault();
        Swal.fire({
            title: "Deseja submeter formulário?",
            text: "Nome: " + form.nome.value +"\nEmail: "+ form.email.value + "\nVocê recomendaria o jogo a um amigo?" + radio.value + "\nCheckbox: " + check.join() + "\nMotivo do contato: " + form.motivo.value + "\nMensagem" + form.texto.value,
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Confirmar",
            denyButtonText: 'Limpar',
            cancelButtonText:'Alterar'
          }).then((result) => {
            if (result.isConfirmed) {
              form.submit();
            }else if(result.isDenied){
                $("#contato").trigger("reset");
                return false;
            } else{
                return false;
            }
          });
    }

}








