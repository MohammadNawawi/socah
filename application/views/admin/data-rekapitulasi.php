<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>

            <?php endif; ?>


            <?= $this->session->flashdata('message'); ?>


            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newData">Tambah Data</a>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Desa</th>
                        <th scope="col">Penduduk [L]</th>
                        <th scope="col">Penduduk [P]</th>
                        <th scope="col">Kepala Keluarga</th>
                        <th scope="col">Penduduk KK</th>
                        <th scope="col">Wajib KTP[L]</th>
                        <th scope="col">Wajib KTP[P]</th>
                        <th scope="col">Elektronik KTP[L]</th>
                        <th scope="col">Elektronik KTP[P]</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                <?php $id = 1; ?>
                <?php
                        foreach ($data_rekapitulasi as $dm) {
                            ?>
                            <tr>
                                
                                <td><?= $id; ?></td>
                                <td><?php echo $dm->nama_desa ?></td>
                                <td><?php echo $dm->pend_l ?></td>
                                <td><?php echo $dm->pend_p ?></td>
                                <td><?php echo $dm->kep_keluarga ?></td>
                                <td><?php echo $dm->pend_kk ?></td>
                                <td><?php echo $dm->wajib_ktp_l ?></td>
                                <td><?php echo $dm->wajib_ktp_p ?></td>
                                <td><?php echo $dm->el_ktp_l ?></td>
                                <td><?php echo $dm->el_ktp_p ?></td>
                                <td> <?php echo anchor('admin/editrekap/' . $dm->id, 'Edit'); ?>
                                    <?php echo anchor('admin/hapusrekap/' . $dm->id, 'Hapus'); ?>
                                </td>

                            </tr>
                            <?php $id++; ?>
                        <?php } ?>
                </tbody>
            </table>



        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="newData" tabindex="-1" role="dialog" aria-labelledby="newDataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newDataLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('admin/datarekapitulasi'); ?>" method="post">
            <!--<form action="<?= base_url('menu/submenu'); ?>" method="post">-->
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_desa" name="nama_desa" placeholder="Nama Desa">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pend_l" name="pend_l" placeholder="Jumlah Penduduk Laki-laki">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pend_p" name="pend_p" placeholder="Jumlah Penduduk Perempuan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kep_keluarga" name="kep_keluarga" placeholder="Jumlah Kepala Keluarga">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" id="pend_kk" name="pend_kk" placeholder="Jumlah Penduduk Ber KK">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="wajib_ktp_l" name="wajib_ktp_l" placeholder="Jumlah Wajib KTP Laki-laki">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="wajib_ktp_p" name="wajib_ktp_p" placeholder="Jumlah Wajib KTP Perempuan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="el_ktp_l" name="el_ktp_l" placeholder="Jumlah Elektronik KTP Laki_laki">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="el_ktp_p" name="el_ktp_p" placeholder="Jumlah Elektronik KTP Perempuan">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>