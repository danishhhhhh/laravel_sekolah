<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students
{
    private static $student = [
        [
            "id" => 1,
            "nis" => "04974",
            "nama" => "Daffa",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jl. Contoh 123",
        ],
        [
            "id" => 2,
            "nis" => "04967",
            "nama" => "Fardan",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jl. Contoh 456",
        ],
        [
            "id" => 3,
            "nis" => "04978",
            "nama" => "Zikri",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jl. Latihan 123",
        ],
        [
            "id" => 4,
            "nis" => "04975",
            "nama" => "Aifan",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jl. Test 456",
        ],
        [
            "id" => 5,
            "nis" => "04984",
            "nama" => "Deka",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jl. Test 123",
        ],
    ];

    public static function all()
    {
        return self::$student;
    }
}
