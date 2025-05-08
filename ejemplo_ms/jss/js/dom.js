// document.getElementById('titulo')
// .textContent = 'Hola Mundo';

//document.getElementById('titulo').innerHTML = '<h1>Hola <i>PEPE</i></h1>';

document.getElementById('saludarBtn')
.addEventListener('click', () => { //identifico el evento click
    console.log('Click del botón saludar');

    const nombre = document.getElementById('nmInput') 
    //asigno el valor del input a la variable nombre
    .value; //obtengo el valor del input
    document.getElementById('titulo')
    .textContent = 'Hola ' + nombre;
});

const saludarForm= document.forms['saludarForm']; 
//entro al forms con nombre saludarForm y lo asigno a la variable saludarForm

const nombreerror = document.getElementById('nombreerror');
//asigno el formulario a la variable saludarForm
nombreerror.style.color = "#ff0000";

const nombrelb = document.getElementById('nombrelb');


//entro al forms con nombre saludarForm y lo asigno a la variable saludarForm
saludarForm.addEventListener('submit', (event) => { 
    //identifico lo que se envia con submit
    event.preventDefault(); 
    //evito que el formulario se envie y recargue la pagina
    const nombreInput = saludarForm['nombre'].value;
    //entro al formulario y busco el input con nombre nombre y
    // le asigno el valor con .value a la variable nombreInput

    if (!nombreInput){ //si no existe el error
        nombreerror.style.display = 'block';
        nombrelb.classList.add('tachao');
    } else {
    document.getElementById('titulo')
    .innerText = `Hola ${nombreInput}!!`;
    nombreerror.style.display = 'none';
    nombrelb.classList.remove('tachao');
    //si existe el error lo oculto y le quito la clase tachao
    }
});

// es lo mismo a una funcion: function nombreKeyDown(){}
const nombreKeyUp = ()=> {
    const nombreInput = saludarForm['nombre'].value;
    if (!nombreInput){ //si no existe el error
        nombreerror.style.display = 'block';
        nombrelb.classList.add('tachao');
    } else {
    document.getElementById('titulo')
    .innerText = `Hola ${nombreInput}!!`;
    nombreerror.style.display = 'none';
    nombrelb.classList.remove('tachao');
    //si existe el error lo oculto y le quito la clase tachao
    }
}

