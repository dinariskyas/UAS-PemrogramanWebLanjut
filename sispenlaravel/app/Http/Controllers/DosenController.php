<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class DosenController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function getDosen()
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Dosen');
        $response = $request->getBody();

        $dosen = json_decode($response, true);
        return view('dosen', ['dosen' => $dosen]);
    }

    public function detailDosen($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Dosen?id_dosen=' . $id);
        $response = $request->getBody();
        $dosen['dosen'] = json_decode($response, true);

        return view('detaildosen', ['dosen' => $dosen]);
    }
}
