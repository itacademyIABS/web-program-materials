<?php

function get_hour($time) {
    $exploded = explode(":", $time);
    return intval($exploded[0]);
}
