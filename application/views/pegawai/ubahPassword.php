<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>
    <!-- Form ganti nama -->
    <form method="POST" action="<?= base_url('pegawai/ubahPassword/ubahPasswordAksi'); ?>">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Password Baru</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" value="" name="passBaru">
                <?= form_error('passBaru', '<div class="text-small text-danger"></div>') ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Ulangi Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" name="ulangPass">
                <?= form_error('ulangPass', '<div class="text-small text-danger"></div>') ?>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>