<?php
function currency_format($number, $suffix = 'đ'){
    return number_format($number).$suffix;
}

function date_time_format($date) {
    return date("d/m/Y", $date);
}