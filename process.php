<?php

$name = $_POST['name'];

$cupcakes = $_POST['flavor[]'];

echo implode(", ", $cupcakes);

echo $name;

