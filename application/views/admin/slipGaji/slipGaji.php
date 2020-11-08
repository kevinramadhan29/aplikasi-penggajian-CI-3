<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>
    <div class="card mx-auto" style="width: 35%;">
        <div class="card-header bg-primary text-white text-center">
            Filter Slip Gaji
        </div>

        <form action="<?= base_url('admin/slipGaji/cetakSlipGaji') ?>" method="POST">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-6 col-form-label">Bulan</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="bulan" id="">
                            <option value="">--Pilih Bulan--</option>
                            <?php
                            $namaBulan = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                            $noBulan = 1;
                            for ($index = 0; $index < 12; $index++) { ?>
                                <option value="<?= $namaBulan[$index]; ?>"><?= $namaBulan[$index]; ?></option>
                            <?php }; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-6 col-form-label">Tahun</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="tahun" id="">
                            <option value="">--Pilih Tahun--</option>
                            <?php $tahun = date('Y');
                            for ($i = 2020; $i < $tahun + 5; $i++) { ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php }; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-6 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="nama_pegawai" id="">
                            <?php foreach ($slipGaji as $s) : ?>
                                <option value="<?= $s->nama_pegawai; ?>"><?= $s->nama_pegawai; ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                </div>


                <button type="submit" class="btn btn-primary text-center" style="width: 100%;"><i class="fas fa-print"></i>Cetak Laporan Gaji</button>
            </div>
        </form>
    </div>
</div>