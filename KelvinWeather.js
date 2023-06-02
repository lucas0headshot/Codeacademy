const kelvin = 293;
//Constante que armazena a temperaturas em Kelvin

const celsius = kelvin - 273;
//Constante que armazena as temperatura em Celsius

let fahrenheit = celsius * (9 / 5) + 32;
let newton = celsius * (33 / 100);
Math.round(fahrenheit);
//Variável que armazena a temperatura em fahrenheit / Arredonda a temperatura

newton = Math.floor(newton);
fahrenheit = Math.floor(fahrenheit);
//Arredonda a temperatura em fahrenheit

console.log(`The temperature is ${fahrenheit} degrees Fahrenheit.`);
console.log(`The temperature is ${newton} in scale of Newton.`);