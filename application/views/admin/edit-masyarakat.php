<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php foreach ($data_masyarakat as $dm) { ?>
        <form action="<?php echo base_url() . 'admin/update'; ?>" method="post">
            <div class="row">
                <div class="col-lg-8">

                    <p><?php echo $this->session->flashdata('msg') ?></p>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $dm->nik ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $dm->nama ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $dm->alamat ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $dm->tempat ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="<?php echo $dm->tanggallahir ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="jeniskelamin" id="jeniskelamin" aria-label="Example select with button addon">
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="agama" id="agama" aria-label="Example select with button addon">
                                <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">KongHuCu</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $dm->pekerjaan ?>" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="status" id="status" aria-label="Example select with button addon">
                                <option value="menikah">Menikah</option>
                                <option value="belum-menikah">Belum Menikah</option>
                                <option value="cerai">Cerai</option>
                                <option value="meninggal">Meninggal</option>

                            </select>

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