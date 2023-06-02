let raceNumber = Math.floor(Math.random() * 1000);

const registeredEarly = true;

let age = 19;

if (registeredEarly && age > 18){
  raceNumber += 1000;
}

if (registeredEarly && age > 18){
  console.log(`Race start at 9:30 am, your number is: ${raceNumber}`);
} else if (!registeredEarly && age > 18){
  console.log(`Late adults run at 11:00 am, your number is: ${raceNumber}`);
} else if (age < 18){
  console.log(`Youth registrants run at 12:30 pm, your number is: ${raceNumber}`);
} else {
  console.log(`See the registration desk`)
}