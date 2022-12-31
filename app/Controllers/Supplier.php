<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Config\Database;

class Supplier extends BaseController
{

	protected $db;
	protected $builder;
	protected $session;

	public function __construct()
	{
		$this->session = \Config\Services::session();
	    $this->db = \Config\Database::connect();
		$this->builder = $this->db->table('tb_supplier');
	}
	
	public function index()
	{
		$query = $this->builder->get();

		$data['query']   = $query;

		return view('supplier', $data);	
	}	

	public function form($id = false){

		if ($id) {
            $data['aksi'] = 'supplier/update/' . $id;
            $data['query'] = $this->builder->where('id', $id)->get()->getRow();

    

            return view('supplier-form', $data);
        } else {

            $data['aksi'] = 'supplier/insert';

            return view('supplier-form', $data);
        }

	}

	public function insert(){
		$data = [
            'nama_supp' => $this->request->getPost('supplier'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
        ];

        $success = $this->builder->insert($data);

        if ($success) {
			$this->session->setFlashdata('success', 'Berhasil disimpan');
            return redirect()->to(base_url('supplier'));
        }
	}

	public function update($id){
		$data = [
            'nama_supp' => $this->request->getPost('supplier'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
        ];

		$this->builder->set($data);
        $this->builder->where('id', $id);

        $success = $this->builder->update();

        if ($success) {
			$this->session->setFlashdata('success', 'Berhasil diubah');
            return redirect()->to(base_url('supplier'));
        }
	}

	public function hapus($id)
    {
        $this->builder->where('id', $id);
        $success = $this->builder->delete();

        if ($success) {
			$this->session->setFlashdata('success', 'Berhasil dihapus');
            return redirect()->to(base_url('supplier'));
        }
    }
		
}	
