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
                                <h3 class="card-title fw-bolder text-gray-800 fs-2">Profil Perusahaan</h3>
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

                                <?php if (session()->getFlashdata('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->getFlashdata('success'); ?>
                                </div>
                                <?php endif; ?>

                                <form id="form-produk" class="form" method="post"
                                            action="<?= base_url('profil/update') .'/' .$query->id; ?>" enctype="multipart/form-data">

                                <div class="row mb-10">
                                    <div class="col-md-3">
                                        <img src="<?= base_url(). '/uploads/'. $query->img_perusahaan;?>"
                                            width="100%" height="200px">

                                            <input class="form-control form-control-solid" type="file" name="img_perusahaan" accept="image/png, image/jpeg, image/jpg">
                                    </div>

                                    <div class="col-md-9">

                                        

                                            <div class="row mb-8">

                                                <div class="col-md-12">
                                                    <label
                                                        class="d-flex align-items-center fs-6 fw-bold mb-2">Nama</label>
                                                    <input required type="text" class="form-control form-control-solid"
                                                        name="nama_perusahaan"
                                                        value="<?= isset($query)?$query->nama_perusahaan:''; ?>"
                                                        oninvalid="this.setCustomValidity('Perlu Diisi !')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>

                                            </div>

                                            <div class="row mb-8">
                                                <div class="col-md-12">
                                                    <label
                                                        class="d-flex align-items-center fs-6 fw-bold mb-2">Alamat</label>
                                                    <textarea class="form-control form-control-solid"
                                                        name="alamat_perusahaan" id="" cols="30"
                                                        rows="10"><?= isset($query)?$query->alamat_perusahaan:'-'; ?></textarea>
                                                </div>
                                            </div>


                                            <div class="row mb-8">

                                                <div class="col-md-6">
                                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">No. HP
                                                        1</label>
                                                    <input required type="text" class="form-control form-control-solid"
                                                        name="no_hp_1" value="<?= isset($query)?$query->no_hp_1:''; ?>"
                                                        oninvalid="this.setCustomValidity('Perlu Diisi !')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">No. HP
                                                        2</label>
                                                    <input required type="text" class="form-control form-control-solid"
                                                        name="no_hp_2" value="<?= isset($query)?$query->no_hp_2:''; ?>"
                                                        oninvalid="this.setCustomValidity('Perlu Diisi !')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>

                                            </div>

                                            <!--begin::Actions-->

                                            <div class="text-center">
                                                <button type="reset" id="kt_modal_new_target_cancel"
                                                    class="btn btn-light me-3">Cancel</button>
                                                <button type="submit" id="kt_modal_new_target_submit"
                                                    class="btn btn-primary">
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
    </div>
</div>

<?= $this->endSection() ?>
<!-- /.content -->


<!-- page script -->
<?= $this->section("pageScript") ?>
<script>

</script>


<?= $this->endSection() ?>