<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();

        $data = [
            'title' => 'mahasiswa',
            'mahasiswa' => $mahasiswa
        ];

        return view('templates/header', $data)
        . view('pages/create',$data)
        . view('templates/footer');
    }
}
