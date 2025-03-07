<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class LayananController extends Controller
{
  private $layananData;

  public function __construct()
  {
    $this->initializeLayananData();
  }

  private function initializeLayananData()
  {
    $this->layananData = [
      [
        'nama' => 'Cetak Buku',
        'deskripsi' => 'Layanan cetak buku dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/book.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Y-Banner',
        'deskripsi' => 'Desain logo adalah proses penciptaan logo untuk keperluan promosi, iklan, atau komunikasi visual.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/y-banner.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Roll Up-Banner',
        'deskripsi' => 'Layanan cetak roll up banner dengan kualitas terbaik.',
        'harga' => 'Rp 150.000',
        'gambar' => '/image-service/roll-up-banner.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Spanduk',
        'deskripsi' => 'Layanan cetak spanduk dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/spanduk.png',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Sertifikat / Piagam',
        'deskripsi' => 'Layanan cetak sertifikat dan piagam dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/sertifikat.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Penerbitan Buku ISBN',
        'deskripsi' => 'Layanan penerbitan buku ISBN dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/penerbitan.jpg',
        'kategori' => 'penerbitan-buku'
      ],
      [
        'nama' => 'Undangan',
        'deskripsi' => 'Layanan cetak undangan dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/undangan.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Neon Box',
        'deskripsi' => 'Layanan cetak neon box dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/neon-box.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Note Book',
        'deskripsi' => 'Layanan cetak note book dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/note-book.jpeg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Leaflet/Brosur',
        'deskripsi' => 'Layanan cetak leaflet/brosur dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/leaflet.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Poster',
        'deskripsi' => 'Layanan cetak poster dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/poster.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Map Ijazah',
        'deskripsi' => 'Layanan cetak map ijazah dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/map.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Sampul Raport',
        'deskripsi' => 'Layanan cetak sampul raport dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/sampul-raport.jpeg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Print Kertas A3+,A0,A1 dan A2',
        'deskripsi' => 'Layanan cetak print kertas A3+,A0,A1 dan A2 dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/paper.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Id Card',
        'deskripsi' => 'Layanan cetak id card dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/kartu-nama.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Kalender',
        'deskripsi' => 'Layanan cetak kalender dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/kalender.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Amplop',
        'deskripsi' => 'Layanan cetak amplop dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/amplop.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Kop Surat',
        'deskripsi' => 'Layanan cetak kop surat dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/kop-surat.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Kwitansi',
        'deskripsi' => 'Layanan cetak kwitansi dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/kwitansi.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Baliho',
        'deskripsi' => 'Layanan cetak baliho dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/baliho.jpg',
        'kategori' => 'layanan-cetak'
      ],
      [
        'nama' => 'Blanko',
        'deskripsi' => 'Layanan cetak blanko dengan kualitas terbaik.',
        'harga' => 'Rp 100.000',
        'gambar' => '/image-service/blanko.jpeg',
        'kategori' => 'layanan-cetak'
      ],
    ];

    // Add asset() to image paths
    $this->layananData = array_map(function ($item) {
      $item['gambar'] = asset($item['gambar']);
      return $item;
    }, $this->layananData);
  }

  private function paginate($items, $perPage = 9, $page = null)
  {
    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);
    return new LengthAwarePaginator(
      $items->forPage($page, $perPage),
      $items->count(),
      $perPage,
      $page,
      ['path' => Paginator::resolveCurrentPath()]
    );
  }

  public function index()
  {
    $layananData = $this->paginate($this->layananData);
    return view('layanan.layanan', [
      'layananData' => $layananData,
      'activeCategory' => 'semua'
    ]);
  }

  public function search(Request $request)
  {
    $search = $request->input('search');
    $category = $request->input('category', 'semua');

    $filteredData = $this->layananData;

    if ($category !== 'semua') {
      $filteredData = array_filter($filteredData, function ($item) use ($category) {
        return $item['kategori'] === $category;
      });
    }

    if ($search) {
      $filteredData = array_filter($filteredData, function ($item) use ($search) {
        return stripos($item['nama'], $search) !== false ||
          stripos($item['deskripsi'], $search) !== false;
      });
    }

    $layananData = $this->paginate($filteredData);
    return view('layanan.layanan', [
      'layananData' => $layananData,
      'activeCategory' => $category
    ]);
  }

  public function filter($category = 'semua')
  {
    $filteredData = $this->layananData;
    if ($category !== 'semua') {
      $filteredData = array_filter($filteredData, function ($item) use ($category) {
        return $item['kategori'] === $category;
      });
    }

    $layananData = $this->paginate($filteredData);
    return view('layanan.layanan', [
      'layananData' => $layananData,
      'activeCategory' => $category
    ]);
  }
}
