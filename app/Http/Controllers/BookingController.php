<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show($type)
    {
        $packages = [
            'personal' => [
            'title' => 'Personal Gallery',
            'description' => '
<ul>
    <li><strong>Make up artist profesional</strong></li>
    <li><strong>Pilihan baju</strong> sesuai tema</li>
    <li><strong>Sesi foto</strong> berkualitas tinggi</li>
    <li><strong>Opsi paket:</strong>
        <ul>
            <li>Foto mentahan saja: Rp 160.000</li>
            <li>Foto dicetak: Rp 270.000</li>
            <li>Paket lengkap dengan bingkai: Rp 470.000</li>
            <li>Tambahan Make Up Wow: +Rp 200.000</li>
        </ul>
    </li>
    <li>Cocok untuk portofolio, media sosial, atau kenang-kenangan pribadi</li>
    </ul>
    ',
            'price' => 'Mulai Rp 160.000',
            'image' => 'png/fotoSingle FOTU.jpg',
        ],
        'family' => [
            'title' => 'Family',
            'description' => '
    <ul>
    <li><strong>Pemilihan kostum keluarga</strong> sesuai tema</li>
    <li><strong>Styling sederhana</strong> untuk seluruh anggota keluarga</li>
    <li>Opsional tambahan properti atau latar khusus</li>
    <li>Harga mulai Rp 50.000 per orang</li>
    <li>Cocok untuk keluarga kecil maupun besar yang ingin kenangan berkesan</li>
    </ul>
    ',
            'price' => 'Mulai Rp 50.000 per orang',
            'image' => 'png/PaketKeluarga.jpg',
        ],
        'maternity' => [
            'title' => 'Maternity & Baby',
            'description' => '
    <ul>
    <li><strong>Penyewaan pakaian bayi sampai dewasa:</strong> Rp 35.000 per kostum</li>
    <li>Pilihan baju adat Jawa, kebaya, gaun, atau modern</li>
    <li>Sesi foto profesional dengan pencahayaan eksklusif</li>
    <li>Opsional cetak foto sesuai permintaan</li>
    <li>Memberikan kenangan manis dan abadi</li>
    </ul>
    ',
            'price' => 'Mulai Rp 600.000',
            'image' => 'png/PaketBayi.jpg',
        ],
        'prewedding' => [
            'title' => 'Prewedding',
            'description' => '
    <ul>
    <li>Make up pengantin profesional</li>
    <li>Pilihan baju adat atau modern</li>
    <li>Sesi foto profesional</li>
    <li><strong>Opsi paket dan harga:</strong>
        <ul>
            <li>1 roll foto + cetak album 4R: Rp 400.000</li>
            <li>Model book lengkap: Rp 1.000.000</li>
            <li>Paket tambahan: album cetak + bingkai foto</li>
        </ul>
    ',
            'price' => 'Mulai Rp 400.000',
            'image' => 'png/PaketPengantin.jpg',
        ],
        ];

        if (!isset($packages[$type])) {
            abort(404);
        }

        $data = $packages[$type];

        return view('booking.show', compact('data'));
    }
}
