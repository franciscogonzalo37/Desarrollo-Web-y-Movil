//respuestaAPI = apicall(); // GET 

const respuestaAPI= {
    "status": 200,
    "message": "Productos obtenidos correctamente",
    "data":[
        {
            "id":1,
            "nombre": "Teclado",
            "precio": 4590
        },
        {
            "id":2,
            "nombre": "Mouse",
            "precio": 6000
        }
    ]
};

respuestaAPI.data.forEach((producto)=>{
    console.log(`${producto.nombre} - $${producto.precio}`)
})

let variable1= null;
console.log(typeof(variable1));
variable1= {};
console.log(typeof(variable1));
// null y llaves siempre van a ser objetos. Lo que esté dentro de este va a tener otro tipo de valor.

let variable2= NaN;
console.log(typeof(variable2));
