<?php
    $users = [
        "test@mail.ru" => [
            "NAME" => "test_name_1",
            "SURNAME" => "test_surname_1",
            "PASSWORD" => "test_password_1"
        ],
        "test@yandex.ru" => [
            "NAME" => "test_name_2",
            "SURNAME" => "test_surname_2",
            "PASSWORD" => "test_password_2"
        ],
    ];

    $result_msg = "";

    if (array_key_exists(trim($_POST['email']), $users)) {
        $result_msg = "reg failed";
    } else {
        $result_msg = "reg succeed";
    }

    $log = date('Y-m-d H:i:s') . "  " . $result_msg;
    file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);

    echo $result_msg;