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

        return view('templates/header', $data)
            . view('pages\list' , $data)
            . view('templates/footer');
    }
    public function create(){
        $data = [
            'title' => 'Create Mahasiswa'
        ];
        return view('templates/header', $data)
            . view('pages\create' , $data)
            . view('templates/footer');

    }
    public function store()
    {
        $mahasiswaModel = new Mahasiswa();
        $data=[
            'NPM' => $this->request->getPost('NPM'),
            'Nama'=> $this->request->getPost('Nama'),
            'Alamat'=>$this->request->getPost('Alamat')
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
            'title' => ' Edit Mahasiswa'
        ];
        return view('templates/header', $data)
            . view('pages/edit' , $mahasiswa)
            . view('templates/footer');
    }
    public function update($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $data=[
            'NPM' => $this->request->getVar('NPM'),
            'Nama'=> $this->request->getVar('Nama'),
            'Alamat'=>$this->request->getVar('Alamat')
        ];

        $mahasiswaModel->update($id, $data);
        return redirect()->to('/mahasiswa');

    }
}