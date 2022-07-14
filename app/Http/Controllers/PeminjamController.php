<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function lihat_data_peminjam(){
    $peminjam = ['Anthonia',
                'Audisheren',
                'Jessu',
                'Stefana',
                'Nisrina'
    ];
    return view('pinjam_buku/lihat_data_peminjam', compact('peminjam'));
    }
}

