<!-- Begin Page Content -->
<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="card" style="width: 60%;">
        <div class="card-body">
            <?php foreach ($pegawai as $p) : ?>
                <form action="<?= base_url('admin/dataPegawai/updateDataAksi'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input type="hidden" name="id_pegawai" class="form-control" value="<?= $p->id_pegawai; ?>">
                        <input type="number" name="nik" class="form-control" value="<?= $p->nik; ?>">
                        <?= form_error('nik', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" value="<?= $p->nama_pegawai; ?>">
                        <?= form_error('nama_pegawai', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" value="<?= $p->username; ?>">
                        <?= form_error('username', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control" value="<?= $p->password; ?>">
                        <?= form_error('password', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class=" form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="" class="form-control">
                            <option value="<?= $p->jenis_kelamin; ?>"><?= $p->jenis_kelamin; ?></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <select name="jabatan" id="" class="form-control">
                            <?php foreach ($jabatan as $j) : ?>
                                <option value="<?= $j->nama_jabatan; ?>"><?= $j->nama_jabatan; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('jenis_kelamin', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="">tanggal_masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control" value="<?= $p->tanggal_masuk; ?>">
                        <?= form_error('tanggal_masuk', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="<?= $p->status; ?>"><?= $p->status; ?></option>
                            <option value="Pegawai Tetap">Pegawai Tetap</option>
                            <option value="Pegawai Tidak Tetap">Pegawai Tidak Tetap</option>
                        </select>
                        <?= form_error('jenis_kelamin', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" name="photo" class="form-control">
                        <?= form_error('photo', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="">Hak Akses</label>
                        <select name="hak_akses" id="">

                            <?php if ($p->hak_akses == '1') {
                                echo "<option value='1'>Admin</option>";
                                echo "<option value='2'>Pegawai</option>";
                            } else {
                                echo "<option value='2'>Pegawai</option>";
                                echo "<option value='1'>Admin</option>";
                            } ?>



                        </select>
                        <?= form_error('hak_akses', '<div class="text-small text-danger"></div>') ?>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            <?php endforeach; ?>
        </div>

    </div>

</div>