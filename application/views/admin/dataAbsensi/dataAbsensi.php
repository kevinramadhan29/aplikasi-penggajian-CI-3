<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <?php
    if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
        $bulan = $_GET['bulan'];
        $tahun = $_GET['tahun'];
        $bulanTahun = $bulan . $tahun;
    } else {
        $bulan = date('F');
        $tahun = date('Y');
        $bulanTahun = $bulan . $tahun;
    }
    ?>

    <div class="card mb-3">
        <div class="card-header bg-primary text-white">
            Filter Data Absensi Pegawai
        </div>
        <div class="card-body">
            <form class="form-inline">
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="mr-2">Bulan</label>
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

                <div class="form-group mb-2 ml-3">
                    <label for="staticEmail2 " class="mr-2">Tahun</label>
                    <select class="form-control" name="tahun" id="">
                        <option value="">--Pilih Tahun--</option>
                        <?php $tahun1 = date('Y');
                        for ($i = 2020; $i < $tahun1 + 5; $i++) { ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php }; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary ml-auto"><i class="fas fa-eye"></i> Tampilkan Data</button>
                <a href="<?= base_url('admin/dataAbsensi/inputAbsensi') ?>" class="btn btn-success ml-1"><i class="fas fa-plus"></i>Input Kehadiran</a>
            </form>
        </div>
    </div>



    <div class="alert alert-info">
        Menampilkan Data Kehadiran Pegawai Bulan: <span class=" font-weight-bold"><?= $bulan; ?></span> Tahun: <span class=" font-weight-bold"><?= $tahun; ?></span>
    </div>

    <?php
    $jml_data = count($absensi);
    if ($jml_data > 0) { ?>
        <table class="table table-bordered table-striped">
            <tr>
                <td class="text-center">No</td>
                <td class="text-center">NIk</td>
                <td class="text-center">Nama Pegawai</td>
                <td class="text-center">Jenis Kelamin</td>
                <td class="text-center">Jabatan</td>
                <td class="text-center">Hadir</td>
                <td class="text-center">Sakit</td>
                <td class="text-center">Alpha</td>
            </tr>

            <?php $no = 1;
            foreach ($absensi as $a) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $a->nik; ?></td>
                    <td><?= $a->nama_pegawai; ?></td>
                    <td><?= $a->jenis_kelamin; ?></td>
                    <td><?= $a->jabatan; ?></td>
                    <td><?= $a->jumlah_hadir; ?></td>
                    <td><?= $a->sakit; ?></td>
                    <td><?= $a->alfa; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php } else { ?>
        <span class="badge badge-danger"><i class="fas fa-info-circle"></i>Data Masih kosong, silahkan input data kehadiran pada bulan dan tahun yang anda pilih.</span>
    <?php } ?>
</div>