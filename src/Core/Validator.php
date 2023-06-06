<?php

namespace Core;
class Validator
{

    public static function validateString($value, $min = 1, $max = INF): bool
    {
        return strlen(trim($value)) >= $min && strlen(trim($value)) <= $max;
    }

    public static function validateEmail($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function matchPassword($password, $confirmed_password): bool
    {
        return $password === $confirmed_password;
    }

}