const objeto= {propiedad1: 1, propiedad2: 2};
delete objeto.propiedad1;
console.log(objeto);
objeto.propiedad1= 3;
console.log(objeto);
delete objeto.propiedad1;
const ordenado = {propiedad1: 3, objeto};
console.log(ordenado);
const ordenado2 = {propiedad1: 3, ...objeto};
console.log(ordenado2);
const objeto2 = {"tipo": "IOT", propiedad2: 6};
const fusion = Object.assign({}, ordenado2, objeto2);
console.log(fusion);
const composicion ={ordenado2, objeto2};
console.log(composicion);
const composicion2 = {obj1: ordenado2, obj2: objeto2};
console.log(composicion2);
Object.entries(composicion2).forEach(([key, value])=>{
    console.log(`key: ${key}, value: ${value.tipo}`);
});
Object.values(composicion2).forEach(value=>{
    console.log(`value: ${value.propiedad2}`);
})
Object.entries(composicion2).forEach(([key, value])=>{
    console.log(`key: ${key}, value: ${value.tipo}`);
    Object.entries(value).forEach(([keyI, valueI])=>{
        console.log(`keyI: ${keyI}, value: ${valueI}`);
    });
});