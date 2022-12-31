<?php

namespace App\Controllers;

use App\Config\Database;
use App\Config\Services;
use App\Controllers\BaseController;

class Profil extends BaseController
{

    protected $db;
    protected $builder;
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('tb_perusahaan');
    }

    public function index()
    {
        $query = $this->builder->where('id', 1)->get()->getRow();

        $data['query'] = $query;

        return view('profil', $data);
    }

    public function update($id)
    {
        $img = $this->request->getFile('img_perusahaan');

        $data = [
            'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
            'alamat_perusahaan' => $this->request->getPost('alamat_perusahaan'),
            'no_hp_1' => $this->request->getPost('no_hp_1'),
            'no_hp_2' => $this->request->getPost('no_hp_2'),
        ];

        if($img->isValid()) {

            $data['img_perusahaan'] = $img->getName();
            $img->move(ROOTPATH . 'uploads', $data['img_perusahaan']);
        }

        $this->builder->set($data);
        $this->builder->where('id', $id);

        $success = $this->builder->update();

        if ($success) {
            $this->session->setFlashdata('success', 'Berhasil diubah');
            return redirect()->to(base_url('profil'));
        }
    }


}
