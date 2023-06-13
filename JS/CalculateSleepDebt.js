const getSleepHours = (day) => day === 'monday' ? 8 : 9; 

const getActualSleepHours = () => getSleepHours('sunday') + getSleepHours('monday') + getSleepHours('tuesday')  + getSleepHours('wednesday') + getSleepHours('thursday') + getSleepHours('friday') + getSleepHours('saturday');

const getIdealSleepHours = () => {
  const idealHours = 9;
  return idealHours * 7;
}

const calculateSleepDebt = () => {
  const actualSleepHours = getActualSleepHours();
  const idealSleepHours = getIdealSleepHours();

  if (actualSleepHours === idealSleepHours){
    return 'Wow, u´re sleeping ' + (actualSleepHours) + ' hours, perfecetly!';
  } else if (actualSleepHours > idealSleepHours){
    return 'U`re sleeping '+ (actualSleepHours) + ' hours, that´s too much!';
  } else {
    return 'U´re sleeping just ' + (actualSleepHours - idealSleepHours) + ' hours. U need some rest...';
  }
}

console.log(calculateSleepDebt());