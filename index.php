<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1><br>
    <form>
        <label>Your name:</label>
        <input type="text" name="name"><br>
        <label>Cupcake flavors:</label><br>
        <input type="checkbox" name="flavor[]" value="Tiramisu"> Tiramisu<br>
        <input type="checkbox" name="flavor[]" value="Lemon Drop"> Lemon Drop<br>
        <input type="checkbox" name="flavor[]" value="Red Velvet"> Red Velvet<br>
        <input type="checkbox" name="flavor[]" value="Salted Caramel Cupcake"> Salted Caramel Cupcake<br>
        <input type="checkbox" name="flavor[]" value="Carrot Walnut"> Carrot Walnut<br>
        <input type="checkbox" name="flavor[]" value="Whiskey Maple Bacon"> Whiskey Maple Bacon<br>
        <input type="checkbox" name="flavor[]" value="The Grasshopper"> The Grasshopper<br>

        <button type="submit" >Submit</button>
    </form>
</body>
</html>
