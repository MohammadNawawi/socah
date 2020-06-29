<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('admin/inputdatamap'); ?>
            <p><?php echo $this->session->flashdata('msg') ?></p>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama Tempat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="linkmap" class="col-sm-2 col-form-label">Link Map</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="linkmap" name="linkmap" required>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>

        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $id = 1; ?>
                        <?php
                        foreach ($data_map as $dm) {
                            ?>
                            <tr>

                                <td><?= $id; ?></td>
                                <td><?php echo $dm->nama ?></td>
                                <td><?php echo $dm->link ?></td>
                                <td>
                                    <?php echo anchor('admin/editmap/' . $dm->id, 'Edit'); ?>
                                    <?php echo anchor('admin/hapusmap/' . $dm->id, 'Hapus'); ?>
                                </td>

                                <!--<td> <?php echo anchor('admin/edit/' . $dm->nik, 'Edit'); ?>
                                                            <?php echo anchor('admin/hapus/' . $dm->nik, 'Hapus'); ?>
                                                        </td>-->

                            </tr>
                            <?php $id++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->