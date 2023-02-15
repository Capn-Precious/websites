<?php

function dd() {
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';
}

function utlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}
