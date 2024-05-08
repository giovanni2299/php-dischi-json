<?php


$disc = [
    [
        "title" => "New Jersey",
        "author" => "Bon Jovi",
    ],
    [
        "title" => "Live at Wembley 86",
        "author" => "Queen",
    ],
    [
        "title" => "Ten\"s Summoner\"s Tales",
        "author" => "Sting",
    ],
    [
        "title" => "Steve Gadd band",
        "author" => "Steve Gadd Band",
    ],
    [
        "title" => "Brave new World",
        "author" => "Iron Maiden",
    ],
    [
        "title" => "One more car, one more rider",
        "author" => "Eric Clapton",
    ]
];

header('Content-type: application/json');

$response = [
    'results' => $disc,
    'sucses' => true
];

echo json_encode($response);
