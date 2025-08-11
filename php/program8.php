<?php
function deal($costA, $sizeA, $costB, $sizeB) {
    // Calculate cost per liter for both drinks
    $costPerLitreA = $costA / $sizeA;
    $costPerLitreB = $costB / $sizeB;

    echo "Cost per litre of Drink A: Rs. " . round($costPerLitreA, 2) . "<br>";
    echo "Cost per litre of Drink B: Rs. " . round($costPerLitreB, 2) . "<br>";

    // Compare and choose the best deal
    if ($costPerLitreA < $costPerLitreB) {
        echo "Drink A is cheaper. ✅";
    } elseif ($costPerLitreA > $costPerLitreB) {
        echo "Drink B is cheaper. ✅";
    } else {
        echo "Both drinks cost the same per litre.";
    }
}

// Given values
deal(25, 11, 23, 9);
?>
