<?php

namespace App\Controllers;

use App\Config\Database;
use App\Config\Services;
use App\Controllers\BaseController;

class Produk extends BaseController
{

    protected $db;
    protected $builder;
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('tb_produk');
    }

    public function index()
    {
        $query = $this->builder->select('tb_produk.*, tb_satuan.satuan')->join('tb_satuan', 'tb_produk.satuan_id = tb_satuan.id')->get();

        $data['query'] = $query;

        return view('produk', $data);
    }

    public function form($id = false)
    {
        $opsi = $this->db->table('tb_satuan')->get();

        if ($id) {
            $data['aksi'] = 'produk/update/' . $id;
            $data['query'] = $this->builder->where('id', $id)->get()->getRow();

            $data['opsi'] = $opsi;

            return view('produk-form', $data);
        } else {

            $data['aksi'] = 'produk/insert';
            $data['opsi'] = $opsi;

            return view('produk-form', $data);
        }

    }

    public function insert()
    {
        $img = $this->request->getFile('img_barang');

        $data = [
            'kode' => $this->request->getPost('kode'),
            'merk_barang' => $this->request->getPost('merk_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'satuan_id' => $this->request->getPost('satuan_id'),
            'stok' => $this->request->getPost('stok'),
            'harga_jual' => $this->request->getPost('harga_jual'),
            'harga_beli' => $this->request->getPost('harga_beli'),
        ];

        if($img->isValid()) {

            $data['img_barang'] = $img->getName();
            $img->move(ROOTPATH . 'uploads', $data['img_barang']);
        }

        $success = $this->builder->insert($data);

        if ($success) {

            $this->session->setFlashdata('success', 'Berhasil disimpan');
            return redirect()->to(base_url('produk'));
        }
    }

    public function update($id)
    {
        $img = $this->request->getFile('img_barang');

        $data = [
            'kode' => $this->request->getPost('kode'),
            'merk_barang' => $this->request->getPost('merk_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'satuan_id' => $this->request->getPost('satuan_id'),
            'stok' => $this->request->getPost('stok'),
            'harga_jual' => $this->request->getPost('harga_jual'),
            'harga_beli' => $this->request->getPost('harga_beli'),
        ];

        if($img->isValid()) {

            $data['img_barang'] = $img->getName();
            $img->move(ROOTPATH . 'uploads', $data['img_barang']);
        }

        $this->builder->set($data);
        $this->builder->where('id', $id);

        $success = $this->builder->update();

        if ($success) {
            $this->session->setFlashdata('success', 'Berhasil diubah');
            return redirect()->to(base_url('produk'));
        }
    }

    public function hapus($id)
    {
        $this->builder->where('id', $id);
        $success = $this->builder->delete();

        if ($success) {
            $this->session->setFlashdata('success', 'Berhasil dihapus');
            return redirect()->to(base_url('produk'));
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
				
				$kode = $row[0];
				$merk_barang = $row[1];
				$nama_barang = $row[2];
                $satuan_id = $row[3];
				$stok = $row[4];
				$harga_jual = $row[5];
                $harga_beli = $row[6];

                $data = [
                    'kode' => $kode,
                    'merk_barang' => $merk_barang,
                    'nama_barang' => $nama_barang,
                    'satuan_id' => $satuan_id,
                    'stok' => $stok,
                    'harga_jual' => $harga_jual,
                    'harga_beli' => $harga_beli,
                ];
	
				$this->builder->insert($data);
                $this->session->setFlashdata('success', 'Berhasil import excel');
			
		}
			
			return redirect()->to('/produk');
		}

}
