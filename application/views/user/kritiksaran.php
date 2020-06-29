<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('user/inputkritiksaran'); ?>
            <p><?php echo $this->session->flashdata('msg') ?></p>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="subjek" class="col-sm-2 col-form-label">Subjek</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Perihal atau Subjek" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="kritiksaran" class="col-sm-2 col-form-label">Kritik/Saran</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="kritiksaran" name="kritiksaran" placeholder="Kritik atau Saran" required></textarea>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->