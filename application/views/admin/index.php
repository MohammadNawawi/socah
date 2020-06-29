<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Content Row -->
    <div class="row">

        <!--Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Data Masyarakat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_masyarakat; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_user; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info border-bottom-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Kritki/Saran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_kritiksaran; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comment fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Log</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-dark" id="dataTableLog" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>User</th>
                            <th>Deskripsi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($log as $l) {  ``
                            ?>
                            <tr>

                                <td><?php echo $l->log_time ?></td>
                                <td><?php echo $l->log_user ?></td>
                                <td><?php echo $l->log_desc ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Comment</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Subjek</th>
                            <th>Kritik/Saran</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data_kritiksaran as $dk) {
                            ?>
                            <tr>

                                <td><?php echo $dk->email ?></td>

                                <td><?php echo $dk->subjek ?></td>

                                <td>
                                    <div class="toast" data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true" style="width:100%;">
                                        <div class="toast-header">
                                            <i class="fas fa-comment mr-2 text-gray-300"></i>
                                            <strong class="mr-auto">Comment</strong>
                                            <small class="text-muted"><?php echo date('d F Y', $dk->date_created); ?></small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            <?php echo $dk->kritiksaran ?>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo anchor('user/hapuscomment/' . $dk->id, 'Hapus'); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>






</div>
</div>





<!-- Bootstrap core JavaScript-->
<!--<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>-->
<!--<script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

<!-- Core plugin JavaScript-->
<!--<script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>-->

<!-- Custom scripts for all pages-->
<!--<script src="<?= base_url('assets'); ?>/vendor/js/sb-admin-2.min.js"></script>-->

<!-- Page level plugins -->
<!--<script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.min.js"></script>-->

<!-- Custom styles for this template-->
<!--<link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">-->

<!--<script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.min.js"></script>-->
<!--<script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.js"></script>-->

