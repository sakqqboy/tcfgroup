
    <?php



    $x = [1, 2, 3, 4, 5];

    foreach ($x as $index => $y) {
        echo 'position' . $index . ' = ' . $y . '<br>';
    }

    $x = [];
    $i = 0;
    $position = 0;
    $value = 1;

    while ($i < 50) {
        $x[$position] = $value;

        $i++;
        $position++;
        $value++;
    }
    foreach ($x as $index => $y) {
        echo 'position' . $index . '=' . $y . '<br>';
    }


    ?>

