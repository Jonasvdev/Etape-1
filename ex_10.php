<?php

function my_get_args() {
    return array_slice(debug_backtrace()[0]['args'], 0);
}

?>