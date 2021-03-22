<?php

function format_price(float $price) {
    return number_format(ceil($price), 0, ',', ' ') . ' ₽';
}
