<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Config\Database;

class Satuan extends BaseController
{

	protected $db;
	protected $builder;
	protected $session;

	public function __construct()
	{
		$this->session = \Config\Services::session();
	    $this->db = \Config\Database::connect();
		$this->builder = $this->db->table('tb_satuan');
	}
	
	public function index()
	{
		$query = $this->builder->get();

		$data['query']   = $query;

		return view('satuan', $data);	
	}	

	public function form($id = false){

		if ($id) {
            $data['aksi'] = 'satuan/update/' . $id;
            $data['query'] = $this->builder->where('id', $id)->get()->getRow();

    

            return view('satuan-form', $data);
        } else {

            $data['aksi'] = 'satuan/insert';

            return view('satuan-form', $data);
        }

	}

	public function insert(){
		$data = [
            'satuan' => $this->request->getPost('satuan'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $success = $this->builder->insert($data);

        if ($success) {
			$this->session->setFlashdata('success', 'Berhasil disimpan');
            return redirect()->to(base_url('satuan'));
        }
	}

	public function update($id){
		$data = [
            'satuan' => $this->request->getPost('satuan'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

		$this->builder->set($data);
        $this->builder->where('id', $id);

        $success = $this->builder->update();

        if ($success) {
			$this->session->setFlashdata('success', 'Berhasil diubah');
            return redirect()->to(base_url('satuan'));
        }
	}

	public function hapus($id)
    {
        $this->builder->where('id', $id);
        $success = $this->builder->delete();

        if ($success) {
			$this->session->setFlashdata('success', 'Berhasil dihapus');
            return redirect()->to(base_url('satuan'));
        }
    }
		
}	
