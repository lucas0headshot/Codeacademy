const getUserChoice = userInput => {
  if ((userInput === 'rock') || (userInput === 'paper') || (userInput === 'scissors')){
    return userInput;
  } else {
    console.log('Invalid choice!');
  }
  
  userInput = userInput.toLowerCase();
}

const getComputerChoice = () => {
  const number = parseInt(Math.floor(Math.random() * 3));

  switch (number){
    case 0:
      return 'rock';
      break;
    
    case 1:
      return 'paper';
      break;
    
    case 2:
      return 'scissors';
      break;
  }
}

const determineWinner = function (userChoice, computerChoice){
  if (userChoice === computerChoice){
    return 'Tie';
  } else if (userChoice === 'rock'){
    if (computerChoice === 'paper'){
      return 'Computer won!';
    } else {
      return 'User won!';
    }
  } else if (userChoice === 'paper'){
    if (computerChoice === 'scissors'){
      return 'Computer won!';
    } else {
      return 'User won!';
    }
  } else if (userChoice === 'scissors'){
    if (computerChoice === 'rock'){
      return 'Computer won!';
    } else {
      return 'User won!';
    }
  } else if (userChoice === 'bomb'){
    return 'UsEr WoN!'
  }
} 

const playGame = () => {
  const userChoice = getUserChoice('rock');

  const computerChoice = getComputerChoice();

  console.log(userChoice + ' | ' + computerChoice);
  console.log(determineWinner(userChoice, computerChoice));
}

playGame();