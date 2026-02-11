<?php

function generatePassword($length, $useLower, $useUpper, $useNumbers, $useSymbols)
{
    $chars = '';

    if ($useLower) {
        $chars .= 'abcdefghijklmnopqrstuvwxyz';
    }
    if ($useUpper) {
        $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($useNumbers) {
        $chars .= '0123456789';
    }
    if ($useSymbols) {
        $chars .= '!@#$%^&*()_+-=';
    }

    if ($chars === '') {
        return '';
    }

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }

    return $password;
}
