//definir variables
let contactos=[];
const form=document.forms['formulario'];
const table=document.getElementById('contactostable');
const crearBtn=document.getElementById('crearBtn');
const modalForm=document.getElementsByClassName('modal')[0];
//definir metodos
const saveContactos=()=>{

    const contacto={
        nombre: form['Nombre'].value,
        email: form['Correo'].value,
        telefono: form['Numero'].value,
    }
    contactos.push(contacto);
    showContactos();
};

const showContactos=()=>{
  const rows = contactos.map((contacto, index)=>{
    return `
        <tr>
            <td>${Number(index+1)}</td>
            <td>${contacto.nombre}</td>
            <td>${contacto.email}</td>
            <td>${contacto.telefono}</td>
        </tr>
    `;
  }).join('');
  const tbody= table.getElementsByTagName('tbody')[0];
  tbody.innerHTML=rows;
}

const nombreKeyUp=()=>{
    const val =form['Nombre'].value;
    const nombreError=document.getElementById('nombreError');
    if(!val){
        nombreError.style.display='block';
    }
}
//definir eventos
form.addEventListener('submit', (e)=>{
    e.preventDefault();
    saveContactos();
    form.reset();
    modalForm.classList.add('cerrar-modal');
});

crearBtn.addEventListener('click', ()=>{
    form.reset();
    modalForm.classList.remove('cerrar-modal');
});