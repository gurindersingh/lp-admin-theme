<?php

/*=== MenuClass ===*/
function adminMenuClass($name, $path)
{
    $path = str_replace('admin/', '', $path);

    if ($path == $name)
        return 'active';

    return '';
}