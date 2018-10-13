<?php
include '../components/Validator.php';

$reg_exp = [
    "name" => "/^\\w+$/",
    "password" => "/^[\\w\\s]{6,10}$/",
];

$errors = Validator::checkFields($_POST, $reg_exp);

include '../validation.view.php';