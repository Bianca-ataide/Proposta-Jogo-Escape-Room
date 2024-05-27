let tries = 0;
let pontuacaoT = 20;

document.addEventListener('DOMContentLoaded', () => {
    document.forms.container.onsubmit = validaForm;
    
});

function validaForm(e) {
    let form = e.target;
    let formValido = true;
    if (form.incantation.value !== "{d0_u_w4nn4_pl4y_4_g4m3}") {
        formValido=false;
        form.incantation.value = '';
        if (pontuacaoT != 0) {
            tries= tries+1;
            pontuacaoT = pontuacaoT - 2 * tries;
        }
    }

    if (!formValido) {
        e.preventDefault();
    } else{
        let p = sessionStorage.getItem('pontuacao');
        let v = parseInt(p,10) + pontuacaoT;
        console.log(v);
        sessionStorage.setItem('pontuacao', v);
    }
}

