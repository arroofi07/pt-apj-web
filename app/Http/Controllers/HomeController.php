<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $promoData = [
      [
        'video_url' => 'video/animasi1.mp4',
        'thumbnail' => 'images/banner-promosi.png',
        'title' => 'Tools Desain Grafis',
        'description' => 'kami menggunakan adobe photoshop, adobe illustrator, dan corel draw untuk membuat desain grafis yang menarik dan profesional',
        'link' => '/promo/lebaran',
      ],
      [
        'video_url' => 'video/animasi2.mp4',
        'thumbnail' => 'images/banner-promosi-2.png',
        'title' => 'Desain grafis',
        'description' => 'Desain logo, banner, poster, spanduk, dan lainnya. kami siap untuk membantu anda memenuhi kebutuhan digital anda !!!',
        'link' => '/promo/mahasiswa',
      ],
      // Tambahkan promo lain sesuai kebutuhan
    ];

    return view('home.home', compact('promoData'));
  }
}
