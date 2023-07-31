<?php

// Answer to task
// I assume that you will be using the php cli to run this


require 'vendor/autoload.php';

use jc21\CliTable;

function displayTable($transactions, $users)
{
    $newArr = array_map(function($transaction, $user) {
        return [
            "id" => $user['id'],
            "type" => $transaction['type'],
            "name" => $user['name']
        ];
    }, $transactions, $users);

    // $newArr = [];
    // for($i = 0; $i < count($users); $i++) {
    //     $newArr[] = [
    //         "id" => $i,
    //         "type" => $transactions[$i]['type'],
    //         "name" => $users[$i]['name']
    //     ];
    // }

    $table = new CliTable;
    $table->setTableColor('blue');
    $table->setHeaderColor('cyan');
    $table->addField('id', 'id', false, 'white');
    $table->addField('type', 'type', false, 'white');
    $table->addField('name', 'name', false, 'white');
    $table->injectData($newArr);
    $table->display();
}

$transactions = [
    [
        "id" => 1,
        "type" => "cash",
        "agent_id" => 2,
        "created_at" => "2020-01-31 08:22:53"
    ],
    [
        "id" => 2,
        "type" => "credit",
        "agent_id" => 3,
        "created_at" => "2020-04-01 09:43:22"
    ],
    [
        "id" => 3,
        "type" => "cash",
        "agent_id" => 1,
        "created_at" => "2020-06-04 03:56:12"
    ]
];

$users = [
    [
        "id" => 1,
        "name" => "Mike Ross",
        "updated_at" => "2020-01-30 12:11:43"
    ],
    [
        "id" => 2,
        "name" => "Tedd Mosby",
        "updated_at" => "2020-02-06 09:27:13"
    ],
    [
        "id" => 3,
        "name" => "Peter Parker",
        "updated_at" => "2020-06-04 03:56:12"
    ]
];

displayTable($transactions, $users);