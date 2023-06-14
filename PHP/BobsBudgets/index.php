<?php

//Expenses
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];


//Math and output
$netIncome = (($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]));

$annualIncome = $netIncome - $socialSecurity;
$annualIncome -= $annualExpenses["vacations"] + $annualExpenses["carRepairs"];
echo "Annual income: ".$annualIncome;

$monthlyIncome = $annualIncome / 12;
$monthlyIncome -= $monthlyExpenses["rent"] + $monthlyExpenses["utilities"] + $monthlyExpenses["healthInsurance"];
echo "\n Monthly income: ".$monthlyIncome;

$weeklyIncome = $monthlyIncome / 4.33;
$weeklyIncome -= $weeklyExpenses["gas"] + $weeklyExpenses["food"] + $weeklyExpenses["entertainment"];
echo "\n Weekly income: ".$weeklyIncome;

$leftoverMoney = $weeklyIncome * 52;
echo "\nBob can save $leftoverMoney per year!";