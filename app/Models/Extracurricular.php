<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular
{
    private static $extra = [
        [
            "id" => 1,
            "nama" => "Basket",
            "nama_pembina" => "Pembina 1",
            "description" => "Lempar bola ke ring",
        ],
        [
            "id" => 2,
            "nama" => "Futsal",
            "nama_pembina" => "Pembina 2",
            "description" => "Menendang bola ke gawang",
        ],
        [
            "id" => 3,
            "nama" => "Ping Pong",
            "nama_pembina" => "Pembina 3",
            "description" => "Menangkis bola kecill di atas",
        ],
        [
            "id" => 4,
            "nama" => "Musik",
            "nama_pembina" => "Pembina 4",
            "description" => "Berlatih memainkan nada nada",
        ],
        [
            "id" => 5,
            "nama" => "Renang",
            "nama_pembina" => "Pembina 5",
            "description" => "Menyemplungkan diri dan bertahan agar tidak tenggelam",
        ],

    ];

    public static function all()
    {
        return self::$extra;
    }
}
