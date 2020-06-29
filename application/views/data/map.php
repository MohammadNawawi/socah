<style>
    .google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }

    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">

        <?php
        foreach ($map as $m) {
            ?>
            <!--<div class="col-lg-6">
                                                                    <!-- Collapsable Card Example -->
            <!--<div class="card shadow mb-2">
                                                                        <!-- Card Header - Accordion -->
            <!--<a href="#<?php echo $m->nama ?>" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="fa" aria-controls="collapseCardExample">
                                                                            <h6 class="m-0 font-weight-bold text-primary"><?php echo $m->nama ?></h6>
                                                                        </a>
                                                                        <!-- Card Content - Collapse -->
            <!--<div class="collapse" id="<?php echo $m->nama ?>">
                                                                            <div class="card-body">
                                                                                <div class="google-maps">
                                                                                    <?php echo $m->link ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
        <?php } ?>




    </div>-->

        <?php
        foreach ($map as $m) {
            ?>
            <div class="col-lg-3">
                <center>
                    <button type="button" class="btn btn-success mt-3 btn-lg btn-block" data-toggle="modal" data-target="#<?php echo $m->nama ?>">
                        <?php echo $m->nama ?>
                    </button>
                </center>
                <!-- Modal -->
                <div class="modal fade" id="<?php echo $m->nama ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $m->nama ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="google-maps">
                                    <?php echo $m->link ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
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