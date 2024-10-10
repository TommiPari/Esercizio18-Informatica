<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $filmArray = ['Inside Out', 'Oceania', 'Frozen', 'Up!', 'Cars'];
        echo '<label for="filmPreferito">Seleziona il tuo film preferito: </label>';
        echo '<select name="filmPreferito">';
        for ($i=1; $i<=count($filmArray); $i++) {
            echo "<option value='f$i'>". $filmArray[$i-1] ."</option>";
        }
        echo '</select>';
    ?>
</body>
</html>