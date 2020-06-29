<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

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
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>File</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $id = 1; ?>
                        <?php
                        foreach ($file as $f) {
                            ?>
                            <tr>

                                <td><?= $id; ?></td>
                                <td><a target="_blank" type="application/file" href="<?= base_url('assets/file/lakiprenstra/') . $f->file;?> "><h6><?php echo $f->file  ?></h6></a> </td>
                                
                               <!-- <td>
                                    <?php echo anchor('admin/editmap/' . $dm->id, 'Edit'); ?>
                                    <?php echo anchor('admin/hapusmap/' . $dm->id, 'Hapus'); ?>
                                </td>-->

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
</div>
<!-- /.container-fluid -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>