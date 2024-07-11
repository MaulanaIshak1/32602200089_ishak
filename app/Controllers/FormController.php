<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function submitForm()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'kelas' => $this->request->getPost('kelas'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'dosen_pengampu' => $this->request->getPost('dosen_pengampu'),
            'asisten_praktikum' => $this->request->getPost('asisten_praktikum'),
        ];

        return view('result', $data);
    }
}
