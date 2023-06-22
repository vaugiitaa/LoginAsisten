<?php

namespace App\Controllers;
use App\Models\AsistenModel;
use App\Models\LoginModel;

class AsistenController extends BaseController
{
    protected $asistenModel,  $loginModel; 
    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->asistenModel = new AsistenModel();
    }
    
    public function index()
    {
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $data = [
                'title' => 'Asisten',
                'asisten' => $this->asistenModel->getAsisten(),
                'username' => $username
            ];
            return view('AsistenView', $data);
    }
}

    public function simpan()
    {
        helper('form');      
        if (!$this->request->is('post')) {
            return view('/asisten/simpan');
        }   
        $post = $this->request->getPost([
            'nim',
            'nama',
            "praktikum",
            "ipk"
        ]);      
        $model = model(AsistenModel::class);
        $model->simpan($post);
        return view('/asisten/successSimpan');
    }

    public function update()
    {
        if (!$this->request->is('post')) {
            return view('/asisten/update');
        }

        $post = $this->request->getPost([
            'nim',
            'nama',
            'praktikum',
            'ipk'
        ]);

        $this->asistenModel->ubah($post);
        return redirect()->to('/asisten');
    }

    public function delete()
    {
        helper('form');
        if (!$this->request->is('post')) {
            return view('/asisten/delete');
        }
    $nim = $this->request->getPost('nim');
        $this->asistenModel->hapus($nim);
        return redirect()->to(base_url('/asisten'));
        
    }
    public function search()
    {

        if (!$this->request->is('post')) {

            return view('/asisten/search');
        }
        $nim = $this->request->getPost(['key']);

        $model = model(AsistenModel::class);
        $asisten = $model->ambil($nim['key']);

        $data = ['hasil' => $asisten];
        return view('asisten/search', $data);
    }

    public function login()
    {
        $session = session();
        if ($session->has('username')) {
            return redirect()->to(base_url('asisten'));
        }
        $data = [
            'title' => 'Login | Web Nata'
        ];
        return view('/login/loginpage', $data);
    }

    public function cekLogin()
    {
        $post = $this->request->getPost(['username', 'password']);
        $cek = $this->loginModel->cekLogin($post);
        if ($cek > 0) {
            $session = session();
            $session->set('username', $post['username']);
            return redirect()->to(base_url('asisten'));
        } else {
            session()->setFlashdata('salah', 'Username atau Password salah!!!');
            return redirect()->to(base_url('login'));
        }
    }
    
    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return view('login');
    }
}