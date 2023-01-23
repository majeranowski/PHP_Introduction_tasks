<?php
 
 /*Bob just got a new job and needs help figuring out his budget!
He has a salary, annual expenses, monthly expenses, and weekly expenses. 
He wants to know how much of his salary he can plan to save over the course of a year.
Using operations on ordered and associative arrays 
 */
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:

$netIncome = [$incomeSegments[0][0] * $incomeSegments[0][1], $incomeSegments[1][0] * $incomeSegments[1][1], $incomeSegments[2][0] * $incomeSegments[2][1]];

$netIncome = $netIncome[0] + $netIncome[1] + $netIncome[2];

$annualIncome = $netIncome - $socialSecurity;

$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];

$monthlyIncome = $annualIncome / 12;

$monthlyIncome -= $monthlyExpenses['rent'];
$monthlyIncome -= $monthlyExpenses['utilities'];
$monthlyIncome -= $monthlyExpenses['healthInsurance'];

$weeklyIncome = $monthlyIncome / 4.33;

$weeklyExpenses = ["gas" => 25, "food" => 90, "entertainment" => 47];

$weeklyIncome -= $weeklyExpenses['gas'] + $weeklyExpenses['food'] + $weeklyExpenses['entertainment'];

$savings = $weeklyIncome * 52;
echo "Savings: ";
print_r(round($savings, 2));
echo "\n";
print_r(round($weeklyIncome, 2));
echo "\n";
print_r(round($monthlyIncome, 2));
echo "\n";
print_r($annualIncome);