const team = {
  _players: [ 
    {firstName: 'Lucas', lastName: 'Ronchi', age: 18},
    {firstName: 'CCC', lastName: 'DDD', age: 21},
    {firstName: 'AA', lastName: 'B', age: 20}
  ],
  _games: [
    {opponent: 'AA', teamPoints: 1, opponentPoints: 2},
    {opponent: 'CCC', teamPoints: 1, opponentPoints: 1},
    {opponent: 'Lucas', teamPoints: 1, opponentPoints: 0}
  ],

  get players(){
    return this._players;
  },

  get games(){
    return this._games;
  },

  addPlayer(newFirstName, newLastName, newAge){
    let player = {
      firstName: newFirstName, 
      lastName: newLastName, 
      age: newAge
    };

    this._players.push(player);
  },

  addGame(newOpponent, newTeamPoints, newOpponentPoints){
    let game = {
      opponent: newOpponent,
      teamPoints: newTeamPoints,
      opponentPoints: newOpponentPoints
    };

    this._games.push(game);
  } 
};

team.addPlayer('Bugs', 'bunny', 76);
team.addGame('Titans', 100, 98);
console.log(team._players);
console.log(team._games);