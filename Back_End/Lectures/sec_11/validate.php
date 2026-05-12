<?php

$validates = [

    'first_name' =>
        [
            'filter' => FILTER_VALIDATE_REGEXP,
            'error' => "invalid first name",
            'options' =>
                [
                    'regexp' => '/^[a-zA-Z\s]{1,50}$/'
                ]
        ],

    'last_name' =>
        [
            'filter' => FILTER_VALIDATE_REGEXP,
            'error' => "invalid last name",
            'options' =>
                [
                    'regexp' => '/^[a-zA-Z\s]{1,50}$/'
                ]
        ],

    'email' =>
        [
            'filter' => FILTER_VALIDATE_EMAIL,
            'error' => "invalid email",
        ],

    'gender' =>
        [
            'filter' => FILTER_VALIDATE_REGEXP,
            'error' => "invalid gender",
            'options' =>
                [
                    'regexp' => '/^(male|female)$/i'
                ]
        ],

    'money' =>
        [
            'filter' => FILTER_VALIDATE_FLOAT,
            'error' => "invalid money",
            'options' =>
                [
                    'min_range' => 0
                ]
        ],

    'city' =>
        [
            'filter' => FILTER_VALIDATE_REGEXP,
            'error' => "invalid city",
            'options' =>
                [
                    'regexp' => '/^[a-zA-Z\s]{1,50}$/'
                ]
        ],

    'country' =>
        [
            'filter' => FILTER_VALIDATE_REGEXP,
            'error' => "invalid country",
            'options' =>
                [
                    'regexp' => '/^[a-zA-Z\s]{1,50}$/'
                ]
        ],

];