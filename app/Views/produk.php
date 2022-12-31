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
                                <h3 class="card-title fw-bolder text-gray-800 fs-2">Produk</h3>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <div class="my-1">
                                        <button type="button" class="btn btn-sm btn-rounded btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                            <i class="fa-solid fa-file-excel"></i></i>Import Data
                                        </button>
                                    </div>

                                    <div class="my-1">
                                        <a href="<?= base_url('produk/form') ?>"
                                            class="btn btn-sm btn-rounded btn-success"><i
                                                class="fa-solid fa-plus"></i>Tambah Data</a>

                                    </div>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-0">
                                <!--begin::Table-->

                                <?php if (session()->getFlashdata('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->getFlashdata('success'); ?>
                                </div>
                                <?php endif; ?>

                                <div class="table-responsive">
                                    <table class="table align-middle table-row-bordered table-row-dashed gy-5"
                                        id="produk-table">
                                        <thead>

                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                                <th>No.</th>
                                                <th class="min-w-200px px-0">Nama dan Merk</th>
                                                <th class="min-w-125px">Harga</th>
                                                <th class="min-w-125px">Stok dan Satuan</th>
                                                <th class="text-end pe-2 min-w-70px">Action</th>
                                            </tr>
                                            <!--end::Table row-->

                                        </thead>
                                        <!--begin::Table body-->
                                        <tbody>

                                            <?php 
                                            
                                            $i=1;

                                            foreach ($query->getResult() as $row) { 
                                        
                                        ?>

                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Author=-->
                                                <td class="p-0">
                                                    <?= $i; ?>
                                                </td>
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Logo-->
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img alt="" class="w-25px"
                                                                    src="<?= base_url(). '/uploads/'. $row->img_barang;?>" />
                                                            </span>
                                                        </div>
                                                        <!--end::Logo-->
                                                        <div class="ps-3">
                                                            <a href="#"
                                                                class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">
                                                                <?= $row->nama_barang; ?>
                                                            </a>
                                                            <span class="text-gray-400 fw-bold d-block">
                                                                <?= $row->kode; ?>
                                                            </span>
                                                            <span class="text-gray-400 fw-bold d-block">
                                                                <?= $row->merk_barang; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </td>

                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">

                                                        <div class="ps-3">
                                                            <span
                                                                class="text-gray-800 fw-bold fs-5 text-hover-primary mb-1">Jual:</a>

                                                                <span class="text-gray-400 fw-bold d-block">Rp.
                                                                    <?= rp($row->harga_jual); ?>
                                                                </span>

                                                                <span
                                                                    class="text-gray-800 fw-bold fs-5 text-hover-primary mb-1">Beli:</a>

                                                                    <span class="text-gray-400 fw-bold d-block">Rp.
                                                                        <?= rp($row->harga_beli); ?>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">

                                                        <div class="ps-3">
                                                            <span class="text-gray-800 fs-5 text-hover-primary mb-1">
                                                                <?= rp($row->stok); ?></a>

                                                                <span class="text-gray-400 fw-bold d-block">
                                                                    <?= $row->satuan; ?>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!--begin::Action=-->
                                                <td class="pe-0 text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-overflow="true"
                                                        data-kt-menu-placement="bottom-start">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-2x">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                    rx="4" fill="black" />
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black" />
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black" />
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                                Aksi</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="<?= base_url('produk/form').'/'.$row->id; ?>"
                                                                class="menu-link px-3"><i
                                                                    class="far fa-solid fa-pen-to-square text-warning"></i>Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="<?= base_url('produk/hapus').'/'.$row->id; ?>"
                                                                class="menu-link px-3"><i
                                                                    class="far fa-sharp fa-solid fa-trash text-danger"></i>Hapus</a>
                                                        </div>
                                                        <!--end::Menu item-->


                                                    </div>
                                                    <!--end::Menu 3-->
                                                </td>
                                                <!--end::Action=-->
                                            </tr>
                                            <!--end::Table row-->

                                            <?php 
                                            $i++;
                                            } 
                                        ?>

                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>

                                <!-- <div class="row"> -->


                                <!-- </div> -->
                                <!--end::Table-->
                            </div>
                            <!--end::Body-->

                            <div class="card-footer"></div>
                        </div>
                        <!--end::Table Widget 1-->
                    </div>
                    <!--end::Col-->

                </div>
                <!--end::Row-->

            </div>
            <!--end::Card body-->

            
        </div>





    </div>
</div>

<!-- BEGIN::MODAL -->
<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Import Data</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-1"></span>
                </div>
                <!--end::Close-->
            </div>

            <form action="<?= base_url('produk/import') ?>" method="post"
                                        enctype="multipart/form-data">
            <div class="modal-body">
                <input class="form-control form-control-solid" type="file" name="fileexcel"
                                            required accept=".xls, .xlsx">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- END::MODAL -->

<?= $this->endSection() ?>
<!-- /.content -->


<!-- page script -->
<?= $this->section("pageScript") ?>

<!-- <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->
<script src="<?= base_url('assets/js/datatables.bundle.js') ?>"></script>
<script>

    $(document).ready(function () {
        $('#produk-table').DataTable();
    });

</script>


<?= $this->endSection() ?>