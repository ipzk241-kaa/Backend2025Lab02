<?php
function my_sin($x) {
    return sin($x);
}

function my_cos($x) {
    return cos($x);
}

function my_tg($x) {
    return tan($x);
}

function my_pow($x, $y) {
    return pow($x, $y);
}

function my_factorial($x) {
    if ($x <= 1) return 1;
    return $x * my_factorial($x - 1);
}
?>