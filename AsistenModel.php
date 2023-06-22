<?php

namespace App\Models;
use CodeIgniter\Model;
class AsistenModel extends Model
{

    protected $table = 'asisten';
    protected $allowedFields = ['nim', 'nama', 'praktikum', 'ipk'];
    protected $primaryKey = 'nim';
    protected $useAutoIncrement = false;

    public function getAsisten($nama = false)
    {
        if ($nama == false) {
            return $this->findAll();
        }
        return $this->where(['nama' => $nama])->first();
    }
 
    public function simpan($record)
    {
        $this->save([
            'nim' => $record['nim'],
            'nama' => $record['nama'],
            'praktikum' => $record['praktikum'],
            'ipk' => $record['ipk'],
        ]);
    }

    public function ambil($nim)
    {

        return $this->where(['nim' => $nim])->first();
    }

    public function hapus($nim)
    {
        $this->where(['nim' => $nim])->delete();
    }

    public function ubah($data)
    {
        $this->save([
            'nim' => $data['nim'],
            'nama' => $data['nama'],
            'praktikum' => $data['praktikum'],
            'ipk' => $data['ipk'],]);
    }
}
