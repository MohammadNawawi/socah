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
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tempat</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Pekerjaan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tempat</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Pekerjaan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                        foreach ($data_masyarakat as $dm) {
                            ?>
                            <tr>
                                <td><?php echo $dm->nik ?></td>
                                <td><?php echo $dm->nama ?></td>
                                <td><?php echo $dm->alamat ?></td>
                                <td><?php echo $dm->tempat ?></td>
                                <td><?php echo $dm->tanggallahir ?></td>
                                <td><?php echo $dm->jenis_kelamin ?></td>
                                <td><?php echo $dm->agama ?></td>
                                <td><?php echo $dm->pekerjaan ?></td>
                                <td><?php echo $dm->sts ?></td>
                                <td> <?php echo anchor('admin/edit/' . $dm->nik, 'Edit'); ?>
                                    <?php echo anchor('admin/hapus/' . $dm->nik, 'Hapus'); ?>
                                </td>

                            </tr>

                        <?php } ?>
                    </tbody>
                </table>

                <div align="center">
                <form method="POST" action="<?php echo base_url();?>admin/action">
                <input type="submit" name="export" class="btn btn-success" value="Export">
                </form>
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