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
                                <h3 class="card-title fw-bolder text-gray-800 fs-2">Supplier</h3>
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

                                <form id="form-produk" class="form" method="post" action="<?= base_url($aksi); ?>">

                                    <div class="row mb-8">

                                        <div class="col-md-12">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">Nama</label>
                                            <input required type="text" class="form-control form-control-solid"
                                                placeholder="Masukkan nama supplier" name="supplier"
                                                value="<?= isset($query)?$query->nama_supp:''; ?>"
                                            oninvalid="this.setCustomValidity('supplier perlu Diisi !')"
                                            oninput="this.setCustomValidity('')">
                                        </div>



                                    </div>

                                    <div class="row mb-8">
                                        <div class="col-md-12">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">Alamat</label>
                                            <textarea class="form-control form-control-solid"
                                                placeholder="Keterangan supplier." name="alamat" id="" cols="30"
                                                rows="10"><?= isset($query)?$query->alamat:'-'; ?></textarea>
                                        </div>
                                    </div>


                                    <div class="row mb-8">

                                        <div class="col-md-12">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">No. HP</label>
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Masukkan nomor handphone." name="no_hp"
                                                value="<?= isset($query)?$query->no_hp:'-'; ?>">
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