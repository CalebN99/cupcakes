<?php

$name = $_POST['name'];

if (isset($_POST['name'])) {
    $name= $_POST['name'];
} else {
    echo "<br>Error!! Name is required...";
    return;
}

if (isset($_POST['flavor'])) {
    $cupcakes = $_POST['flavor'];
    if (count($cupcakes) < 1) {
        echo "<br>Error!! At least one cupcake required";
    }
} else {
    echo "<br>Error!! Cupcakes required...";
    return;
}


$COST = 3.50;
$TOTAL = $COST * count($cupcakes);
if($name)
echo "<h1>Thank you, $name, for your order!</h1>";
echo "<p>Order Summary:</p>";
echo "<ul>";
foreach($cupcakes as $cake) {
    echo "<li> $cake </li>";
}
echo "</ul>";



echo "<p>Total: $$TOTAL</p>";

