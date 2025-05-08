
        alert ("Hola mundo");
        console.log("Mensaje en consola");
        //variable, tipo de dato, valor;
    var nombre = "Juan"; //puede cambiarse
    let apellido = "Pérez"; //puede cambiarse
    const pi = 3.14; //no puede cambiarse
    //pi = 3.1416; //error, no se puede cambiar el valor de una constante
    let akt = undefined; //no se ha inicializado
    let jobs = null;
    jobs = ["a","b","c"]; //Flexible
    jobs = Array(5); //array vacío de 5 elementos

    let persona = {
        nombre: "Juan",
        apellido: "Pérez",
        edad: 30,
        saludar: function() {
            console.log("Hola, soy " + this.nombre);
        }
    };
    console.log(persona.nombre); // Juan
    console.log(persona.nombre+""+persona.apellido); 
    console.log(`Nombre: ${persona.nombre}${persona.apellido}`); 

    let ejemplo= ['a', "malo", 1, true, null, undefined, {nombre: "Juan", apellido: "Pérez"}, [1,2,3]];
    console.log(ejemplo[0]); // a
    console.log(nombre.toUpperCase()); // JUAN

    val=true; //booleano
    if (val=true) {
        console.log("Es verdadero");
    } else {
        console.log("Es falso");
    }

    let categoria = "A";
    switch (categoria) {
        case "A":
            console.log("Categoría A");
            break;
        case "B":
            console.log("Categoría B");
            break;
        default:
            console.log("Categoría desconocida");
            break;
    }

    let numero = [1,2,3,4,5];
    for (let index = 0; index < numero.length; index++) {
        console.log(numero[index]);
    }
    for (let index in numero) { //toma el índice de cada elemento
        console.log(numero[index]);
    }
    for (let valor of numero) { //toma el valor de cada elemento
        console.log(valor);
    }


    let i = 0;
    while (i < 5) {
        console.log(i);
        i++;
    }

    i = 0;
    do {
        console.log(i);
        i++;
    } while (i < 5);

//callback
    numero.forEach((valor, posicion)=> {
        console.log(`${valor} en la posición ${posicion}`); 
    });
    //callback= función que se pasa como argumento a otra función

    function saludar() {
        console.log('Hola');
    }
    saludar(); //llamada a la función

    function saludar2(nombre) {
        console.log(`Hola ${nombre}`);
    }
    saludar2('Juan'); //llamada a la función con argumento

    function getSaludo(nombre) {
        return "Hola " + nombre;
    }

    const saludar4 = function(nombre) {
        return "Hola " + nombre;
    };
    console.log(saludar4("Juan")); // Hola Juan
    //función anónima, se asigna a una variable

    const saludar5 = (nombre) => {
        return "Hola " + nombre;
    };
    console.log(saludar5("Juan")); // Hola Juan
    //función flecha, se asigna a una variable
    //se puede omitir el return si es una sola línea

