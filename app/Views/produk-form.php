<?= $this->extend("layout/master") ?>

<?= $this->section("content") ?>

<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <div class="card card-page">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xxl-12">
                        <!--begin::Table Widget 1-->
                        <div class="card card-xxl-stretch">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5 pb-3">
                                <!--begin::Card title-->
                                <h3 class="card-title fw-bolder text-gray-800 fs-2">Tambah Data Produk</h3>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <div class="my-1">

                                    </div>
                                </div>
                                <!--end::Card toolbar-->
                                
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-0">

                                

                                <form id="form-produk" method="post" class="form" action="<?= base_url($aksi); ?>" enctype="multipart/form-data">

                                    <div class="row mb-8">

                                        <div class="col-md-4">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">Kode Produk</label>
                                            <input required type="text" class="form-control form-control-solid" 
                                            placeholder="Masukkan Kode Produk. Contoh: K-001" name="kode" value="<?= isset($query)?$query->kode:''; ?>"
                                            oninvalid="this.setCustomValidity('Kode Produk perlu Diisi !')"
                                            oninput="this.setCustomValidity('')">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">Nama</label>
                                            <input required type="text" class="form-control form-control-solid" 
                                            placeholder="Masukkan Nama Produk." name="nama_barang" value="<?= isset($query)?$query->nama_barang:''; ?>"
                                            oninvalid="this.setCustomValidity('Nama Produk perlu Diisi !')"
                                            oninput="this.setCustomValidity('')">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">Merk</label>
                                            <input type="text" class="form-control form-control-solid" 
                                            placeholder="Masukkan Merk." name="merk_barang" value="<?= isset($query)?$query->merk_barang:'-'; ?>">
                                        </div>

                                    </div>


                                    <div class="row mb-8">

                                        <div class="col-md-6">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">Stok</label>
                                            <input required type="text" class="form-control form-control-solid" 
                                            placeholder="Masukan Nilai Stok." name="stok" value="<?= isset($query)?$query->stok:''; ?>"
                                            oninvalid="this.setCustomValidity('Stok perlu Diisi !')"
                                            oninput="this.setCustomValidity('')">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">Satuan</label>
                                            <!-- <input type="text" class="form-control form-control-solid" placeholder="Masukkan Satuan. Contoh: Kg" name="satuan_id"> -->
                                            <select name="satuan_id" class="form-control form-control-solid" placeholder="Masukkan Satuan. Contoh: Kg">
                                                <?php foreach ($opsi->getResult() as $row) { ?>
                                                    <option value="<?= $row->id ?>"><?= $row->satuan ?></option>;
                                                <?php }?>                                                   
                                                
                                            </select>
                                        </div>

                                    </div>


                                    <div class="row mb-8">

                                        <div class="col-md-6">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">Harga Jual</label>
                                            <input required type="text" class="form-control form-control-solid" 
                                            placeholder="Masukan Harga Jual." name="harga_jual" value="<?= isset($query)?$query->harga_jual:''; ?>"
                                            oninvalid="this.setCustomValidity('Harga Jual perlu Diisi !')"
                                            oninput="this.setCustomValidity('')">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">Harga Beli</label>
                                            <input required type="text" class="form-control form-control-solid" 
                                            placeholder="Masukkan Harga Beli." name="harga_beli" value="<?= isset($query)?$query->harga_beli:''; ?>"
                                            oninvalid="this.setCustomValidity('Harga Beli perlu Diisi !')"
                                            oninput="this.setCustomValidity('')">
                                        </div>

                                    </div>
                                   
                                   <div class="row mb-8">

                                    <div class="col-md-12">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">Gambar Produk</label>
                                        <input class="form-control form-control-solid" type="file" name="img_barang" accept="image/png, image/jpeg, image/jpg">
                                    </div>

                                   </div>
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" id="kt_modal_new_target_cancel"
                                            class="btn btn-light me-3">Cancel</button>
                                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<!-- /.content -->


<!-- page script -->
<?= $this->section("pageScript") ?>
<script>

</script>


<?= $this->endSection() ?>