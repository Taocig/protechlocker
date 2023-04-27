<?php

namespace classe;

class Validate
{
    public static function ValidMail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public static function ValidCode($str)
    {
        if (preg_match('/^[0-9abcd]+$/', $str) && strlen($str) == 4) {
            return true;
        } else {
            return false;
        }
    }
}
