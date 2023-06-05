let secretMessage = ['Learning', 'is', 'not', 'about', 'what', 'you', 'get', 'easily', 'the', 'first', 'time,', 'it', 'is', 'about', 'what', 'you', 'can', 'figure', 'out.', '-2015,', 'Chris', 'Pine,', 'Learn', 'JavaScript'];

console.log(secretMessage.length);

secretMessage.pop();

console.log(secretMessage.length);

secretMessage.push('to', 'program');

function findWord(word) {
  return function(currentValue) {
    return currentValue === word;
  };
}

secretMessage[secretMessage.findIndex(findWord, 'easily')] = 'right';

secretMessage.shift();

secretMessage.unshift('Programing');

secretMessage.splice(6, 5,'know');

console.log(secretMessage.join());