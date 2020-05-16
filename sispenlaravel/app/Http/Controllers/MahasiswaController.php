<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        return view('home2');
    }

    public function getMahasiswa()
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Mahasiswa');
        $response = $request->getBody();

        $mahasiswa = json_decode($response, true);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function detailMahasiswa($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Mahasiswa?id_mahasiswa=' . $id);
        $response = $request->getBody();
        $mahasiswa['mahasiswa'] = json_decode($response, true);

        return view('detailmahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
