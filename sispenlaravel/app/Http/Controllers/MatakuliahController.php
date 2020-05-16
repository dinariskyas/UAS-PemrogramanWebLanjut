<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function getMatakuliah()
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Matakuliah');
        $response = $request->getBody();

        $matakuliah = json_decode($response, true);
        return view('matakuliah', ['matakuliah' => $matakuliah]);
    }

    public function detailMatakuliah($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Matakuliah?id_matakuliah=' . $id);
        $response = $request->getBody();
        $matakuliah['matakuliah'] = json_decode($response, true);

        return view('detailmatakuliah', ['matakuliah' => $matakuliah]);
    }
}
