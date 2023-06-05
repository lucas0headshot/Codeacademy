const input = 'vai trabalhar';

const vowels = ['a', 'e', 'i', 'o', 'u'];

let resultArray = [];

for (let i = 0; i < input.length; i++){
  for (j = 0; j < vowels.length; j++){
    if (input[i] === vowels[j]){
      resultArray.push(vowels[j]);
      //console.log(vowels[j]);
    }
  }
  if (input[i] === 'e'){
      resultArray.push(input[i]);
  }

  if (input[i] === 'u'){
      resultArray.push(input[i]);
  }
  //console.log(i);
}

const resultString = resultArray.join();
console.log(resultString.toUpperCase());