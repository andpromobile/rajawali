<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Config\Database;

class Customer extends BaseController
{

	protected $db;
	protected $builder;
	protected $session;

	public function __construct()
	{
		$this->session = \Config\Services::session();
	    $this->db = \Config\Database::connect();
		$this->builder = $this->db->table('tb_pelanggan');
	}
	
	public function index()
	{
		$query = $this->builder->get();

		$data['query']   = $query;

		return view('customer', $data);	
	}	

	public function form($id = false){

		if ($id) {
            $data['aksi'] = 'customer/update/' . $id;
            $data['query'] = $this->builder->where('id', $id)->get()->getRow();

    

            return view('customer-form', $data);
        } else {

            $data['aksi'] = 'customer/insert';

            return view('customer-form', $data);
        }

	}

	public function insert(){
		$data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
        ];

        $success = $this->builder->insert($data);

        if ($success) {
			$this->session->setFlashdata('success', 'Berhasil disimpan');
            return redirect()->to(base_url('customer'));
        }
	}

	public function update($id){
		$data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
        ];

		$this->builder->set($data);
        $this->builder->where('id', $id);

        $success = $this->builder->update();

        if ($success) {
			$this->session->setFlashdata('success', 'Berhasil diubah');
            return redirect()->to(base_url('customer'));
        }
	}

	public function hapus($id)
    {
        $this->builder->where('id', $id);
        $success = $this->builder->delete();

        if ($success) {
			$this->session->setFlashdata('success', 'Berhasil dihapus');
            return redirect()->to(base_url('customer'));
        }
    }

    public function import_xl()
		{
			$file_excel = $this->request->getFile('fileexcel');
			$ext = $file_excel->getClientExtension();
			if($ext == 'xls') {
				$render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
			} else {
				$render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			$spreadsheet = $render->load($file_excel);
	
			$data = $spreadsheet->getActiveSheet()->toArray();
			foreach($data as $x => $row) {
				if ($x == 0) {
					continue;
				}
				
				
				$nama = $row[0];
				$alamat = $row[1];
                $nomor_hp = $row[2];

                $data = [
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'nomor_hp' => $nomor_hp,
                ];
	
				$this->builder->insert($data);
                $this->session->setFlashdata('success', 'Berhasil import excel');
			
		}
			
			return redirect()->to('/customer');
		}
		
}	
