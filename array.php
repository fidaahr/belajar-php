<?php

// $pegawai = [
//     [
//         "Ima",
//         "10089",
//         "Imaini89@gmail.com",
//         "Security",
//         [
//             "malam 12",
//             "pagi 8",
//             "sore 4"]
//     ],

//     [
//         "Fani",
//         "10098",
//         "Fanian98@gmail.com",
//         "Security",
//         [
//             "pagi 8",
//             "sore 4",
//             "malam 12"]
//     ]
// ];

// echo $pegawai [0][4][1];

$pegawai2 = [
    [
    "nama" => "Ima",
    "email" => "Imamaah89@gmail.com",
    "nopegawai" => 10089,
    "pekerjaan" => "security",
    "shift" => [
            "malam" => 12,
            "pagi" => 8,
            "sore" => 4
            ]
    ],

    [
        "nama" => "Fani",
        "email" => "Fanibong98@gmail.com",
        "nopegawai" => 10098,
        "pekerjaan" => "security",
        "shift" => [
            "pagi" => 9,
            "sore" => 5,
            "malam" => 11
            ]
    ]
];

    echo $pegawai2 [0]["shift"]["malam"];

?>