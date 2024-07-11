<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }
    public function index()
    {
        $all = $this->db->findAll();

        $data = [
            'mahasiswa' => $all
        ];
        return view('crud/view', $data);
    }


    public function tambah()
    {
        if(isset($_POST['nim'])){

            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $prodi = $_POST['prodi'];
            $universitas = $_POST['universitas'];
            $nomor_handphone = $_POST['nomor_handphone'];

            $upload = [
                'nim' => $nim,
                'nama' => $nama,
                'prodi' => $prodi,
                'universitas' => $universitas,
                'nomor_handphone' => $nomor_handphone

            ];

            $this->db->insert($upload);

            return redirect()->to(base_url('crud'));
        }else{
            return view('crud/upload');
        }
    }
    
    public function edit($id)
    {
        try {
            $data = [
                'edit' => $this->db->find($id)
            ];
        } catch (\Exception $e) {
            return view('errors/database_error', ['message' => $e->getMessage()]);
        }
        return view('crud/edit', $data);
    }

    public function editan()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
            'universitas' => $this->request->getPost('universitas'),
            'nomor_handphone' => $this->request->getPost('nomor_handphone')
        ];

        $nim = $this->request->getPost('nim');

        try {
            if ($this->db->update($nim, $data)) {
                return redirect()->to('/crud')->with('success', 'Data berhasil diupdate');
            } else {
                return redirect()->back()->withInput()->with('error', 'Gagal mengupdate data');
            }
        } catch (\Exception $e) {
            return view('errors/database_error', ['message' => $e->getMessage()]);
        }
    }

    
    public function hapus($id)
    {
        $nim = $id;
        $this->db->delete($nim);
        return redirect()->to('/crud');
    }
}