<?php

function validate($input){
    $inputText = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
    $inputText = trim($inputText);
    $inputText = ucwords($inputText);
    return $inputText;
}
