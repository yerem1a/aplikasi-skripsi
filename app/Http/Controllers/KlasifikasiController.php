<?php

namespace App\Http\Controllers;

use App\Models\GejalaHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KlasifikasiController extends Controller
{
    public function index()
    {
        return view('klasifikasi');
    }

    public function klasifikasi(Request $request)
    {

        // dd($request);
        // Validasi request
    $data = $request->validate([
        'gejala' => 'required|array', // Periksa bahwa 'gejala' adalah sebuah array
        'gejala.*' => 'string', // Periksa bahwa setiap item dalam 'gejala' adalah string
    ]);

    // dd($data['gejala']);
    // Gabungkan gejala menjadi satu string untuk dikirim ke Flask
    $gejalaText = implode(' ', $data['gejala']);

    // Simpan gejala ke dalam tabel gejala_histories
    $gejalaHistory = new GejalaHistory();
    $gejalaHistory->gejala = $gejalaText;
    $gejalaHistory->save();


        // Kirim data ke Flask untuk klasifikasi
        $response = Http::post('http://localhost:5000/klasifikasi', [
            'features' =>  $data['gejala']
        ]);

        $hasil_klasifikasi = $response->json()['hasil_klasifikasi'];

        return view('hasil_klasifikasi', compact('hasil_klasifikasi'));
    }

    public function riwayatGejala()
    {
        // Ambil semua riwayat gejala dari tabel gejala_history
        $riwayat_gejala = GejalaHistory::all();
        return view('riwayat_gejala', compact('riwayat_gejala'));
    }
}
