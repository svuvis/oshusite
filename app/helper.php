<?php

function set_active($path, $active = 'active') {

    return call_user_func_array('Request::is', (array)$path) ? $active : '';

};

function splitByWords($text, $splitLength = 200)
{
    // explode the text into an array of words
    $wordArray = explode(' ', $text);

    // Too many words
    if( sizeof($wordArray) > $splitLength )
    {
        // Split words into two arrays
        $firstWordArray = array_slice($wordArray, 0, $splitLength);
        $lastWordArray = array_slice($wordArray, $splitLength+1, sizeof($wordArray));

        // Turn array back into two split strings
        $firstString = implode(' ', $firstWordArray);
        $lastString = implode(' ', $lastWordArray);
        return array($firstString, $lastString);
    }
    // if our array is under the limit, just send it straight back
    return array($text);
}