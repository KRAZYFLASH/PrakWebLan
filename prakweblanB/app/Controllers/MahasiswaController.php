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
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];

        return view('templat/header', $data)
        . view('mahasiswa/list', $data)
        . view('templat/footer');
    }

    public function create(){
        $data = [
            'title' => 'Create Mahasiswa'
        ];

        return view('templat/header', $data)
        . view('mahasiswa/create' . $data)
        . view('templat/footer');
    }
}