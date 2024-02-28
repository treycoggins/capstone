<?php
class Validate
{
    public static function isValidComment(string $value, $min = 1, $max = 1000): bool
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    public static function isNumber($number, $min = 0, $max = 100): bool
    {
        return ($number >= $min and $number <= $max);
    }

    public static function isText(string $string, int $min = 0, int $max = 1000): bool
    {
        $length = mb_strlen($string);
        return ($length >= $min and $length <= $max);
    }

    public static function isEmail($email): bool
    {
        return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false;
    }

    public static function isPassword($password)
    {
        if (
            mb_strlen($password) >= 8                     // Length 8 or more chars
            and preg_match('/[A-Z]/', $password)             // Contains uppercase A-Z
            and preg_match('/[a-z]/', $password)             // Contains lowercase a-z
            and preg_match('/[0-9]/', $password)             // Contains 0-9
        ) {
            return true;                                     // Passed all tests
        }
        return false;                                      // Invalid password
    }
}
