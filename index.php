<?php
/* Use Case #1
A basket contains the following things:

Banana's (6 pieces, costing €1 each)
Apples (3 pieces, costing €1.5 each)
Bottles of wine (2 bottles, costing €10 each)
Without using classes, do the following in your code:

Calculate the total price
Calculate how much of the total price is tax (fruit goes at 6%, wine is 21%)
Next, do the same with classes. What style do you prefer? Do you notice any difference in time needed to code, structure or readability? From now on, if nothing is stated specifically, it's recommended to use classes.
*/

$bananasQuantity = 6;
$bananasPrice = 1;

$applesQuantity = 3;
$applesPrice = 1.5;

$wineBottleQuantity = 2;
$wineBottlePrice = 10;

$totalBananaPrice = $bananasQuantity * $bananasPrice;
$totalApplePrice = $applesPrice * $applesQuantity;
$totalWineBottlePrice = $wineBottlePrice * $wineBottleQuantity;

// Tax Calc

$totalFruitPrice = $totalApplePrice + $totalBananaPrice;
$fruitTax = $totalFruitPrice * 0.06;
$wineTax = $totalWineBottlePrice * 0.21;
$totalTax = $fruitTax + $wineTax;

$totalPriceOfFruitBasket = $totalApplePrice + $totalBananaPrice + $totalWineBottlePrice;

echo "The total price of a fruit basket is € $totalPriceOfFruitBasket.<br>";
echo "The total tax on a fruit basket is € $totalTax.";