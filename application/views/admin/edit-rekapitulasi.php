<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php foreach ($data_rekapitulasi as $dr) { ?>
        <form action="<?php echo base_url() . 'admin/updaterekap'; ?>" method="post">
            <div class="row">
                <div class="col-lg-8">

                    <p><?php echo $this->session->flashdata('msg') ?></p>
                    <div class="form-group row">
                        <label for="nama_desa" class="col-sm-2 col-form-label">Nama Desa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_desa" name="nama_desa" value="<?php echo $dr->nama_desa ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_l" class="col-sm-2 col-form-label">Penduduk Laki-laki</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pend_l" name="pend_l" value="<?php echo $dr->pend_l ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_p" class="col-sm-2 col-form-label">Penduduk Perempuan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pend_p" name="pend_p" value="<?php echo $dr->pend_p ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kep_keluarga" class="col-sm-2 col-form-label">Kepala Keluarga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kep_keluarga" name="kep_keluarga" value="<?php echo $dr->kep_keluarga ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_kk" class="col-sm-2 col-form-label">Penduduk ber KK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pend_kk" name="pend_kk" value="<?php echo $dr->pend_kk ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="wajib_ktp_l" class="col-sm-2 col-form-label">Penduduk Wajib KTP Laki-Laki</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="wajib_ktp_l" name="wajib_ktp_l" value="<?php echo $dr->wajib_ktp_l ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="wajib_ktp_p" class="col-sm-2 col-form-label">Penduduk Wajib KTP Perempuan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="wajib_ktp_p" name="wajib_ktp_p" value="<?php echo $dr->wajib_ktp_p ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="el_ktp_l" class="col-sm-2 col-form-label">Penduduk KTP Elektronik Laki-laki</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="el_ktp_l" name="el_ktp_l" value="<?php echo $dr->el_ktp_l ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="el_ktp_p" class="col-sm-2 col-form-label">Penduduk KTP Elektronik Laki-laki</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="el_ktp_p" name="el_ktp_p" value="<?php echo $dr->el_ktp_p ?>" required>
                        </div>
                    </div>
                    
                    

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
        </form>
    <?php } ?>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->