const formnumero = document.forms['formnumero'];

formnumero.addEventListener('submit', (event) => {
    event.preventDefault();
    const numeroInput = formnumero['numeroInput'].value;
    if ((numeroInput % 2) == 0) {
        document.getElementById('result')
            .innerHTML = 'Resultado= Es un numero par';
    } else {
        document.getElementById('result')
            .innerHTML = 'Resultado= Es un numero impar';
    }
});