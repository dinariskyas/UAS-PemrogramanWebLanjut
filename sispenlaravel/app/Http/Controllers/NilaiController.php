<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class NilaiController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function getNilai()
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Nilai');
        $response = $request->getBody();

        $nilai = json_decode($response, true);
        return view('nilai', ['nilai' => $nilai]);
    }

    public function detailNilai($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Nilai?id_nilai=' . $id);
        $response = $request->getBody();
        $nilai['nilai'] = json_decode($response, true);

        return view('detailnilai', ['nilai' => $nilai]);
    }
}
