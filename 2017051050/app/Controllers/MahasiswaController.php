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

        return view('pages\list' , $data);
    }
    public function create(){
        $data = [
            'title' => 'Create Mahasiswa'
        ];
        return view('pages\create' , $data);

    }
    public function store()
    {
        $mahasiswaModel = new Mahasiswa();
        $data=[
            'NPM' => $this->request->getPost('NPM'),
            'Nama'=> $this->request->getPost('Nama'),
            'Alamat'=>$this->request->getPost('Alamat'),
            'Deskripsi'=>$this->request->getPost('Deskripsi')
        ];

        $mahasiswaModel->save($data);
        return redirect()->to('/mahasiswa');

    }
    public function delete($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswaModel->delete($id);
    
        return redirect()->to('/mahasiswa');
    
    }
    public function edit($id){
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->find($id);

        $data = [
            'title' => ' Edit Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];
        return view('pages/edit', $data);
    }
    public function update($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $data=[
            'NPM' => $this->request->getVar('NPM'),
            'Nama'=> $this->request->getVar('Nama'),
            'Alamat'=>$this->request->getVar('Alamat'),
            'Deskripsi'=>$this->request->getVar('Deskripsi')
        ];

        $mahasiswaModel->update($id, $data);
        return redirect()->to('/mahasiswa');

    }
}