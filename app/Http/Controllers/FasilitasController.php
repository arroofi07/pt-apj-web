<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class FasilitasController extends Controller
{
  private $fasilitasData;

  public function __construct()
  {
    $this->initializeFasilitasData();
  }

  private function initializeFasilitasData()
  {
    $this->fasilitasData = [
      [
        'nama' => 'Mesin Cutting Stiker',
        'deskripsi' => 'Mesin cutting stiker untuk memotong stiker dengan presisi tinggi dan dengan desain yang diinginkan.',
        'gambar' => 'mesin-cutting.jpg',
        'kategori' => 'layanan-cutting'
      ],
      [
        'nama' => 'Mesin Inneo 1100 ',
        'deskripsi' => 'Untuk pencetakan buku (1 warna) dan fotocopy tanpa minimal cetak.',
        'gambar' => 'mesin-inneo.jpg',
        'kategori' => 'layanan-cutting'
      ],
      [
        'nama' => 'Mesin Printer Outdoot (HP Designjet T770)',
        'deskripsi' => 'Untuk pembuatan banner dan poster menggunakan bahan albatros',
        'gambar' => 'mesin-outdot.jpg',
        'kategori' => 'layanan-cutting'
      ],
      [
        'nama' => 'Mesin GTO 46',
        'deskripsi' => 'Khusus  untuk cetakan separasi / warna',
        'gambar' => 'mesin-gto.jpg',
        'kategori' => 'layanan-cutting'
      ],
      [
        'nama' => 'Mesin COLLATOR RISO TC5100',
        'deskripsi' => 'Mesin yang digunakan untuk menyusun halaman buku yang telah dicetak',
        'gambar' => 'mesin-collator.png',
        'kategori' => 'layanan-cutting'
      ],
      [
        'nama' => 'Mesin Printer AllWIN Konica C512i',
        'deskripsi' => 'Mesin ini dapat digunakan untuk mencetak / Print segala macam Media Bahan Outdoor',
        'gambar' => 'mesin-allwin.jpg',
        'kategori' => 'layanan-cutting'
      ],
      [
        'nama' => 'Mesin Besty',
        'deskripsi' => 'Mesin yang digunakan untuk cetakan hitam/putih (1 warna)',
        'gambar' => 'mesin-besty.png',
        'kategori' => 'layanan-cutting'
      ],
      [
        'nama' => 'Mesin Doosan',
        'deskripsi' => 'Mesin yang digunakan untuk cetakan hitam/putih (1 warna)',
        'gambar' => 'mesin-doosan.png',
        'kategori' => 'layanan-cutting'
      ],
    ];
  }

  public function index()
  {
    return view('fasilitas.fasilitas', [
      'fasilitasData' => $this->fasilitasData
    ]);
  }
}
