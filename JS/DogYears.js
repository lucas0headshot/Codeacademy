let myAge = 18;
//Variável que armazena minha idade

let earlyYears = 2;
//Variável que armazena os primeiros dois anos

earlyYears += 10.5;

let laterYears = myAge - 2;
//Variável que armazena os anos seguintes, tendo em mente que os 2 primeiros anos equivalem a 21 anos de cachorro

laterYears *= 4;
//Multiplica laterYears por 4

console.log(earlyYears);
console.log(laterYears);

let myAgeInDogYears = earlyYears + laterYears;
//Armazena minha idade de cachorro

let myName = 'Lucas'.toLowerCase();
//Armazena meu nome em letras minúsculas

console.log(`My name is ${myName}. I am ${myAge} years old in human years which is ${myAgeInDogYears} years old in dog years.`);
//Printa meu nome, minha idade e minha idade em anos de cachorro

