<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd($data): void // dump and die
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
};
