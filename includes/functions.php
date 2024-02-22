<?php
function dd($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}
function flatten_array($array)
{
    $result = [];
    foreach ($array as $key => $value) {
        // Check if the value is an array
        if (is_array($value)) {
            // If it's an array, recursively flatten it
            $flattened = flatten_array($value);
            $result = array_merge($result, $flattened);
        } else {
            // If not an array, add it to result with its key
            $result[$key] = $value;
        }
    }
    return $result;
}
