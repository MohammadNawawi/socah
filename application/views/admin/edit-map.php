<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php foreach ($data_map as $dm) { ?>
        <form action="<?php echo base_url() . 'admin/updatemap'; ?>" method="post">
            <div class="row">
                <div class="col-lg-8">

                    <p><?php echo $this->session->flashdata('msg') ?></p>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $dm->id ?>" required>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $dm->nama ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="linkmap" class="col-sm-2 col-form-label">Link Map</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="linkmap" name="linkmap" required></textarea>
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