<?php

function luasLingkaran($r) {
    return 3.14 * $r * $r;
}

function kelilingLingkaran($r) {
    return 2 * 3.14 * $r;
}

function luasPersegi($panjang, $lebar) {
    return $panjang * $lebar;
}

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo number_format(luasPersegi($i / 3, $i / 5), 2);
    } elseif ($i % 3 == 0) {
        echo number_format(luasLingkaran($i / 3), 2);
    } elseif ($i % 5 == 0) {
        echo number_format(kelilingLingkaran($i / 5), 2);
    } else {
        echo number_format($i, 2);
    }
    echo "\n";
}

?>
