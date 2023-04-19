<?php 

function generatePw($pwLength) {
    $alphanumericChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+=;:<>/?'";
    $password = "";

    for ($i = 0; $i < $pwLength; $i++) {

        $password .= $alphanumericChars[rand(0, strlen($alphanumericChars) - 1)];

    }

    return $password;
}

?>