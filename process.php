<?php

// Caleb Norris
// April 7th, 2022
// Form to take in a users order of cupcakes, requiring their name, and desired cupcake flavors
// On Submission, it will take user to a confirmed order page, displaying their order and total cost

// Validating and grabbing name input
if (isset($_POST['name'])) {
    $name= $_POST['name'];
    if (empty($name)) {
        echo "<br> Name is required...";
        return;
    }
} else {
    echo "<br>Error!! Name is required...";
    return;
}

// Validating and grabbing cupcake flavors input
if (isset($_POST['flavor'])) {
    $cupcakes = $_POST['flavor'];
    if (count($cupcakes) < 1) {
        echo "<br>Error!! At least one cupcake required";
        return;
    }
} else {
    echo "<br>Error!! Cupcakes required...";
    return;
}

// Calculating total cost
$COST = 3.50;
$TOTAL = $COST * count($cupcakes);


echo "<h1>Thank you, $name, for your order!</h1>";
echo "<p>Order Summary:</p>";
echo "<ul>";

// Looping and displaying each flavor submitted
foreach($cupcakes as $cake) {
    echo "<li> $cake </li>";
}
echo "</ul>";


$TOTAL = number_format($TOTAL, 2, '.', '');


echo "<p>Total: $$TOTAL</p>";

