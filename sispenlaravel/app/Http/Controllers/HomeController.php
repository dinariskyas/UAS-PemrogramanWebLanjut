<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function userGetMahasiswa()
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Mahasiswa');
        $response = $request->getBody();

        $mahasiswa = json_decode($response, true);
        return view('user.mahasiswauser', ['mahasiswa' => $mahasiswa]);
    }

    public function detailMahasiswa($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Mahasiswa?id_mahasiswa=' . $id);
        $response = $request->getBody();
        $mahasiswa['mahasiswa'] = json_decode($response, true);

        return view('user.detailmahasiswauser', ['mahasiswa' => $mahasiswa]);
    }

    public function tambahMahasiswa()
    {
        return view('user.tambahmahasiswa');
    }

    public function simpanMahasiswa(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/CI/sistem_penilaian/Api/Mahasiswa', [
            'form_params' => [
                'nim' => $request->nim,
                'nama' => $request->nama,
                'jeniskelamin' => $request->jeniskelamin,
                'alamat' => $request->alamat,
                'jurusan' => $request->jurusan
            ]
        ]);
        return view('user.simpanMahasiswa', ['data' => $request]);
    }

    public function userDeleteMahasiswa($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/CI/sistem_penilaian/Api/Mahasiswa', [
            'form_params' => [
                'id_mahasiswa' => $id
            ]
        ]);

        return redirect('/home/mahasiswauser')->with(['error' => 'Data Berhasil Dihapus']);
    }

    public function userEditMahasiswa($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Mahasiswa?id_mahasiswa=' . $id);
        $response = $request->getBody();
        $mahasiswa = json_decode($response, true);

        return view('user.editmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function userUpdateMahasiswa(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/CI/sistem_penilaian/Api/Mahasiswa', [
            'form_params' => [
                'id_mahasiswa' => $request->id_mahasiswa,
                'nim' => $request->nim,
                'nama' => $request->nama,
                'jeniskelamin' => $request->jeniskelamin,
                'alamat' => $request->alamat,
                'jurusan' => $request->jurusan
            ]
        ]);
        return redirect('/home/userDetailMahasiswa/' . $request->id_mahasiswa)->with(['success' => 'Data Mahasiswa Berhasil Diedit']);
    }

    public function userGetMatakuliah()
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Matakuliah');
        $response = $request->getBody();

        $matakuliah = json_decode($response, true);
        return view('user.matakuliahuser', ['matakuliah' => $matakuliah]);
    }

    public function detailMatakuliah($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Matakuliah?id_matakuliah=' . $id);
        $response = $request->getBody();
        $matakuliah['matakuliah'] = json_decode($response, true);

        return view('user.detailmatakuliahuser', ['matakuliah' => $matakuliah]);
    }

    public function tambahMatakuliah()
    {
        return view('user.tambahmatakuliah');
    }

    public function simpanMatakuliah(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/CI/sistem_penilaian/Api/Matakuliah', [
            'form_params' => [
                'kode_mk' => $request->kode_mk,
                'matakuliah' => $request->matakuliah,
                'sks' => $request->sks
            ]
        ]);
        return view('user.simpanMatakuliah', ['data' => $request]);
    }

    public function userDeleteMatakuliah($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/CI/sistem_penilaian/Api/Matakuliah', [
            'form_params' => [
                'id_matakuliah' => $id
            ]
        ]);

        return redirect('/home/matakuliahuser')->with(['error' => 'Data Berhasil Dihapus']);
    }

    public function userEditMatakuliah($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Matakuliah?id_matakuliah=' . $id);
        $response = $request->getBody();
        $matakuliah = json_decode($response, true);

        return view('user.editmatakuliah', ['matakuliah' => $matakuliah]);
    }

    public function userUpdateMatakuliah(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/CI/sistem_penilaian/Api/Matakuliah', [
            'form_params' => [
                'id_matakuliah' => $request->id_matakuliah,
                'kode_mk' => $request->kode_mk,
                'matakuliah' => $request->matakuliah,
                'sks' => $request->sks
            ]
        ]);
        return redirect('/home/userDetailMatakuliah/' . $request->id_matakuliah)->with(['success' => 'Data Mahasiswa Berhasil Diedit']);
    }

    public function userGetDosen()
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Dosen');
        $response = $request->getBody();

        $dosen = json_decode($response, true);
        return view('user.dosenuser', ['dosen' => $dosen]);
    }

    public function detailDosen($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Dosen?id_dosen=' . $id);
        $response = $request->getBody();
        $dosen['dosen'] = json_decode($response, true);

        return view('user.detaildosenuser', ['dosen' => $dosen]);
    }

    public function tambahDosen()
    {
        return view('user.tambahdosen');
    }

    public function simpanDosen(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/CI/sistem_penilaian/Api/Dosen', [
            'form_params' => [
                'nip' => $request->nip,
                'nama_dosen' => $request->nama_dosen,
                'jeniskelamin' => $request->jeniskelamin,
                'alamat' => $request->alamat,
                'email' => $request->email
            ]
        ]);
        return view('user.simpanDosen', ['data' => $request]);
    }

    public function userDeleteDosen($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/CI/sistem_penilaian/Api/Dosen', [
            'form_params' => [
                'id_dosen' => $id
            ]
        ]);

        return redirect('/home/dosenuser')->with(['error' => 'Data Berhasil Dihapus']);
    }

    public function userEditDosen($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Dosen?id_dosen=' . $id);
        $response = $request->getBody();
        $dosen = json_decode($response, true);

        return view('user.editdosen', ['dosen' => $dosen]);
    }

    public function userUpdateDosen(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/CI/sistem_penilaian/Api/Dosen', [
            'form_params' => [
                'id_dosen' => $request->id_dosen,
                'nip' => $request->nip,
                'nama_dosen' => $request->nama_dosen,
                'jeniskelamin' => $request->jeniskelamin,
                'alamat' => $request->alamat,
                'email' => $request->email
            ]
        ]);
        return redirect('/home/userDetailDosen/' . $request->id_dosen)->with(['success' => 'Data Dosen Berhasil Diedit']);
    }

    public function userGetNilai()
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Nilai');
        $response = $request->getBody();

        $nilai = json_decode($response, true);
        return view('user.nilaiuser', ['nilai' => $nilai]);
    }

    public function detailNilai($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/CI/sistem_penilaian/Api/Nilai?id_nilai=' . $id);
        $response = $request->getBody();
        $nilai['nilai'] = json_decode($response, true);

        return view('user.detailnilaiuser', ['nilai' => $nilai]);
    }

    public function tambahNilai()
    {
        $client = new Client();
        $request1 = $client->get('http://localhost/CI/sistem_penilaian/Api/Mahasiswa');
        $response1 = $request1->getBody();
        $request2 = $client->get('http://localhost/CI/sistem_penilaian/Api/Dosen');
        $response2 = $request2->getBody();
        $request3 = $client->get('http://localhost/CI/sistem_penilaian/Api/Matakuliah');
        $response3 = $request3->getBody();
        $mahasiswa = json_decode($response1, true);
        $dosen = json_decode($response2, true);
        $matakuliah = json_decode($response3, true);
        return view('user.tambahnilai', ['mahasiswa' => $mahasiswa, 'dosen' => $dosen, 'matakuliah' => $matakuliah]);
    }

    public function simpanNilai(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/CI/sistem_penilaian/Api/Nilai', [
            'form_params' => [
                'id_nilai' => $request->id_nilai,
                'id_dosen' => $request->id_dosen,
                'id_matakuliah' => $request->id_matakuliah,
                'id_mahasiswa' => $request->id_mahasiswa,
                'nilai' => $request->nilai
            ]
        ]);
        return redirect('/home/nilaiuser')->with(['success' => 'Data Nilai Berhasil Ditambahkan']);
    }

    public function userDeleteNilai($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/CI/sistem_penilaian/Api/Nilai', [
            'form_params' => [
                'id_nilai' => $id
            ]
        ]);

        return redirect('/home/nilaiuser')->with(['error' => 'Data Nilai Berhasil Dihapus']);
    }
    public function userEditNilai($id)
    {
        $client = new Client();
        $request1 = $client->get('http://localhost/CI/sistem_penilaian/Api/Dosen');
        $response1 = $request1->getBody();
        $request2 = $client->get('http://localhost/CI/sistem_penilaian/Api/Matakuliah');
        $response2 = $request2->getBody();
        $request3 = $client->get('http://localhost/CI/sistem_penilaian/Api/Mahasiswa');
        $response3 = $request3->getBody();
        $request4 = $client->get('http://localhost/CI/sistem_penilaian/Api/Nilai?id_nilai=' . $id);
        $response4 = $request4->getBody();
        $nilai = json_decode($response4, true);

        $dosen = json_decode($response1,  true);
        $matakuliah = json_decode($response2, true);
        $mahasiswa = json_decode($response3, true);
        return view('user.editnilai', ['dosen' => $dosen, 'nilai' => $nilai, 'matakuliah' => $matakuliah, 'mahasiswa' => $mahasiswa]);
    }

    public function userUpdateNilai(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/CI/sistem_penilaian/Api/Nilai', [
            'form_params' => [
                'id_nilai' => $request->id_nilai,
                'id_dosen' => $request->id_dosen,
                'id_matakuliah' => $request->id_matakuliah,
                'id_mahasiswa' => $request->id_mahasiswa,
                'nilai' => $request->nilai
            ]
        ]);
        return redirect('/home/userDetailNilai/' . $request->id_nilai)->with(['success' => 'Data Nilai Berhasil Diedit']);
    }
}
