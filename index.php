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


// -----------------------------------------------
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

// -----------------------------------------------

class BasketItems {
    private $name;
    private $price;
    private $amount;
    private $type;
function __construct(string $name, float $price, float $amount, string $type) {
    $this->name = $name;
    $this->price = $price;
    $this->amount = $amount;
    $this->type = $type;
}
function calcPrice(): float {
    $totalPrice = $this->price * $this->amount;
    return $totalPrice;
}
function calcFruitTax(): float {
    return ($this->price * $this->amount)*0.06;
}
function calcWineTax(): float {
    return ($this->price * $this->amount)*0.21;
}
function calcDiscount50(): float {
    return $this->price/2;
}
}
$banana = new BasketItems("banana", 1, 6, "fruit");
$apple = new BasketItems("apple", 1.5, 3, "fruit");
$bottleOfWine = new BasketItems("bottleOfWine", 10, 2, "drink");


$totalBananaPrice = $banana->calcPrice();
$totalApplePrice = $apple->calcPrice();
$totalWinePrice = $bottleOfWine->calcPrice();

$appleTax = $apple->calcFruitTax();
$bananaTax = $banana->calcFruitTax();
$wineTax = $bottleOfWine->calcWineTax();



$totalPrice = $totalBananaPrice + $totalApplePrice + $totalWinePrice;
echo "<br>The total price of a fruit basket is: €$totalPrice.";

$totalTax = $wineTax + $bananaTax + $appleTax;

echo "<br>The total tax on a fruit basket is: €$totalTax.";

// Use Case #2
// Consider the same basket as in use case 1. The shop owner wants to have a way 
// to have 50% off every fruit. Can you find a way to implement the discount once,
// and re-use it efficiently for every fruit?

