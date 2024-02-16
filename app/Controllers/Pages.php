<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      "tittle" => "Web | Irwan Programmer",
      "tes" => ["satu", "dua", "tiga"],
    ];
    return view("pages/home", $data);
  }
  public function about()
  {
    $data = [
      "tittle" => "Tentang Kita",
    ];
    return view("pages/about", $data);
  }
  public function contact()
  {
    $data = [
      "tittle" => "Kontak Kita",
      "alamat" => [
        [
          "tipe" => "rumah",
          "alamat" => "Jl. Ciliwung",
          "kota" => "Jember",
        ],
        [
          "tipe" => "kantor",
          "alamat" => "Jl. Kramat",
          "kota" => "Bondowoso",
        ],
      ],
    ];
    return view("pages/contact", $data);
  }
}
