<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php echo $this->session->flashdata('msg') ?>
    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('admin/uploadlakibrenstra'); ?>
            <div class="form-group row">
                <div class="col-sm-2">File</div>
                <div class="col-sm-10">
                    <div class="row">
                    
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" name="file" required>
                                <label class="custom-file-label" for="file">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Upload</button>
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
                            <th>#</th>
                            <th>File</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>File</th>
                            <th>Action</th>
                            
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $id = 1; ?>
                        <?php
                        foreach ($file as $f) {
                            ?>
                            <tr>

                                <td><?= $id; ?></td>
                                <td><a target="_blank" type="application/file" href="<?= base_url('assets/file/lakiprenstra/') . $f->file;?> "><?php echo $f->file ?></a> </td>
                                
                               <td>
                    
                                    <?php echo anchor('admin/hapusfile/' . $f->id, 'Hapus'); ?>
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