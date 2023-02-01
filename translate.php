<?php
$langs = ['ru', 'en'];
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if (!in_array($lang, $langs, FALSE)) {
    $lang = 'en';
}

$translates_json = file_get_contents(dirname(__FILE__) . '/translates.json');
$decoded_json = json_decode($translates_json, false);
$lang_options = $decoded_json->$lang;

function translate(String $var)
{
    global $lang_options;
    if ($lang_options->$var == null) {
        echo "NOT TRANSLATED";
    } else {
        echo $lang_options->$var;
    }
}