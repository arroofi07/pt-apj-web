<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class TeamController extends Controller
{
  public function index()
  {
    $executiveTeam = [
      [
        'position' => 'KOMISARIS',
        'name' => 'Dr. Indraddin, S.Sos., M.Si.',
        'title' => 'KOMISARIS',
        'bio' => 'Visionary leader with over 15 years of industry experience driving growth and innovation.',
        'images' => 'indra.jpg'
      ],
      [
        'position' => 'DIREKTUR',
        'name' => 'Lazwardi Rosyad',
        'title' => 'DIREKTUR',
        'bio' => 'Technology enthusiast with expertise in emerging technologies and digital transformation.',
        'images' => 'lazwardi.jpg'

      ],
    ];

    $departments = [
      'binder' => [
        'icon' => 'fa-code',
        'description' => 'Membuat produk cetak dengan kualitas tinggi dan efisien.',
        'positions' => ['binder']
      ],
      'desain' => [
        'icon' => 'fa-paint-brush',
        'description' => 'Membuat desain grafis yang menarik dan profesional.',
        'positions' => ['setting', 'desain', 'grafis']
      ],
      'keuangan' => [
        'icon' => 'fa-money-bill',
        'description' => 'Membuat laporan keuangan yang akurat dan terpercaya.',
        'positions' => ['keuangan']
      ],
      'operasional' => [
        'icon' => 'fa-users',
        'description' => 'Mengatur dan mengelola operasional perusahaan.',
        'positions' => ['operasional']
      ],
      'percetakan' => [
        'icon' => 'fa-print',
        'description' => 'Membuat produk cetak dengan kualitas tinggi dan efisien.',
        'positions' => ['percetakan']
      ],





    ];

    $teamMembers = [
      [
        'name' => 'MISNAWATI',
        'image' => 'misnawati.jpg',
        'department' => 'binder',
        'position' => 'binder',
        'nama-jabatan' => 'BINDER',
        'bio' => 'Passionate developer with expertise in full-stack development and cloud architecture.'
      ],
      [
        'name' => 'NURWATNI',
        'image' => 'nurwatni.jpg',
        'department' => 'binder',
        'position' => 'binder',
        'nama-jabatan' => 'BINDER',
        'bio' => 'Creative designer focused on creating intuitive and engaging user experiences.'
      ],
      [
        'name' => 'ELMAWATI',
        'image' => 'elmawati.jpg',
        'department' => 'binder',
        'position' => 'binder',
        'nama-jabatan' => 'BINDER',
        'bio' => 'Strategic marketer with a passion for data-driven campaign optimization.'
      ],
      [
        'name' => 'ZISKA NOFRI HANDAYANI',
        'image' => 'ziska.jpg',
        'department' => 'keuangan',
        'position' => 'ADM DAN KEUANGAN',
        'nama-jabatan' => 'ADM DAN KEUANGAN',
        'bio' => 'Dedicated to helping clients achieve their business objectives through technology solutions.'
      ],
      [
        'name' => 'LYDIA AYU WULANDARI, A.Md.',
        'image' => 'lydia.jpg',
        'department' => 'keuangan',
        'position' => 'keuangan',
        'nama-jabatan' => 'KO ADM DAN KEUANGAN',
        'bio' => 'Infrastructure specialist with expertise in cloud automation and CI/CD pipelines.'
      ],
      [
        'name' => 'WAHYUDI',
        'image' => 'wahyudi.jpg',
        'department' => 'percetakan',
        'position' => 'percetakan',
        'nama-jabatan' => 'KO. OP MESIN CETAK GTO 46',
        'bio' => 'Creative artist specializing in brand identity and visual storytelling.'
      ],
      [
        'name' => 'SEBAYU',
        'image' => 'sebayu.jpg',
        'department' => 'percetakan',
        'position' => 'percetakan',
        'nama-jabatan' => 'OP. MESIN CETAK DOZAN',
        'bio' => 'Content expert with a knack for creating engaging and impactful narratives.'
      ],
      [
        'name' => 'JERY JANUARIA',
        'image' => 'jery.jpg',
        'department' => 'operasional',
        'position' => 'operasional',
        'nama-jabatan' => 'OPERASIONAL DAN KEUANGAN',
        'bio' => 'Customer-focused professional dedicated to delivering exceptional support experiences.'
      ],
      [
        'name' => 'RIRI KUSMAWATI, S.Si',
        'image' => 'riri.jpg',
        'department' => 'operasional',
        'position' => 'operasional',
        'nama-jabatan' => 'DIREKTUR OPERASIONAL',
        'bio' => 'Customer-focused professional dedicated to delivering exceptional support experiences.'
      ],
      [
        'name' => 'NOVRIWANDI',
        'image' => 'novri.jpg',
        'department' => 'percetakan',
        'position' => 'percetakan',
        'nama-jabatan' => 'OP. MESIN CETAK BESTY',
        'bio' => 'Customer-focused professional dedicated to delivering exceptional support experiences.'
      ],
      [
        'name' => 'VINO VERNANDES',
        'image' => 'vino.jpg',
        'department' => 'binder',
        'position' => 'binder',
        'nama-jabatan' => 'KO. BINDER',
        'bio' => 'Customer-focused professional dedicated to delivering exceptional support experiences.'
      ],
      [
        'name' => 'HENDRA GUNAWAN',
        'image' => 'hendra.jpg',
        'department' => 'percetakan',
        'position' => 'percetakan',
        'nama-jabatan' => 'OP. MESIN HIGH FREKUENSI',
        'bio' => 'Customer-focused professional dedicated to delivering exceptional support experiences.'
      ],
      [
        'name' => 'SYAMASUL HIDAYAT',
        'image' => 'dayat.jpg',
        'department' => 'desain',
        'position' => 'desain',
        'nama-jabatan' => 'KO. SETTING / DESAIN GRAFIS',
        'bio' => 'Customer-focused professional dedicated to delivering exceptional support experiences.'
      ],
      [
        'name' => 'IKHSANUL ANWAR, S.Ds.',
        'image' => 'ikhsanul.jpg',
        'department' => 'desain',
        'position' => 'desain',
        'nama-jabatan' => 'SETTING / DESAIN GRAFIS',
        'bio' => 'Customer-focused professional dedicated to delivering exceptional support experiences.'
      ],
      [
        'name' => 'RINNY EFFENDI',
        'image' => 'rinny.jpg',
        'department' => 'binder',
        'position' => 'binder',
        'nama-jabatan' => 'BINDER',
        'bio' => 'Customer-focused professional dedicated to delivering exceptional support experiences.'
      ],
    ];

    return view('team.team', compact('executiveTeam', 'departments', 'teamMembers'));
  }
}
