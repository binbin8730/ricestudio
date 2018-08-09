<?php

function route_class()
{
    return str_replace('.','-',Route::currentRouteName());
}

function display_container()
{
    $array['root'] = 'root';
    return !isset($array[Route::currentRouteName()]);
}
