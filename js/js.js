const input = document.querySelector('.login_input');

const button = document.querySelector('.botao');

const form = document.querySelector('.classe1');

const validar = ({target}) =>{
    if (target.value.length > 2) 
    {
        button.removeAttribute('disabled');
        return;
    }
    
        button.setAttribute('disabled', '');
}

const enviar = (event) => {
    event.preventDefault();
    console.log('carregando...');
    console.log(input.value);
    localStorage.setItem('jogador',input.value);
    sessionStorage.setItem('pontuacao', 0);
    window.location = 'page/jogo.html';
}

input.addEventListener('input',validar);
form.addEventListener('submit',enviar);