<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
    <title><?= $title ?></title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: black;
        }
    </style>
</head>

<body>
    <center>
        <h1>PT. Indonesia Bangkrut</h1>
        <h2>Cetak Laporan Absensi</h2>
    </center>
    <?php $namaBulan = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

    $tahun1 = date('Y');
    foreach ($slipGaji as $s) :
        for ($i = 2020; $i < $tahun1 + 5; $i++) {


            if ($s->bulan == $namaBulan[0] . $i) {
                $nB = substr($s->bulan, 0, 7);
                $nT = substr($s->bulan, 7, 11);
            } elseif ($s->bulan == $namaBulan[1] . $i) {
                $nB = substr($s->bulan, 0, 8);
                $nT = substr($s->bulan, 8, 12);
            } elseif ($s->bulan == $namaBulan[2] . $i) {
                $nB = substr($s->bulan, 0, 5);
                $nT = substr($s->bulan, 5, 9);
            } elseif ($s->bulan == $namaBulan[3] . $i) {
                $nB = substr($s->bulan, 0, 5);
                $nT = substr($s->bulan, 5, 9);
            } elseif ($s->bulan == $namaBulan[4] . $i) {
                $nB = substr($s->bulan, 0, 3);
                $nT = substr($s->bulan, 3, 7);
            } elseif ($s->bulan == $namaBulan[5] . $i) {
                $nB = substr($s->bulan, 0, 4);
                $nT = substr($s->bulan, 4, 8);
            } elseif ($s->bulan == $namaBulan[6] . $i) {
                $nB = substr($s->bulan, 0, 4);
                $nT = substr($s->bulan, 4, 8);
            } elseif ($s->bulan == $namaBulan[7] . $i) {
                $nB = substr($s->bulan, 0, 6);
                $nT = substr($s->bulan, 6, 10);
            } elseif ($s->bulan == $namaBulan[8] . $i) {
                $nB = substr($s->bulan, 0, 9);
                $nT = substr($s->bulan, 9, 13);
            } elseif ($s->bulan == $namaBulan[9] . $i) {
                $nB = substr($s->bulan, 0, 7);
                $nT = substr($s->bulan, 7, 11);
            } elseif ($s->bulan == $namaBulan[10] . $i) {
                $nB = substr($s->bulan, 0, 8);
                $nT = substr($s->bulan, 8, 12);
            } elseif ($s->bulan == $namaBulan[11] . $i) {
                $nB = substr($s->bulan, 0, 8);
                $nT = substr($s->bulan, 8, 12);
            }
        }

    ?>


        <table class="tebal">
            <tr>
                <td>Nama Karyawan</td>
                <td>:</td>
                <td><?= $s->nama_pegawai; ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?= $s->nama_jabatan; ?></td>
            </tr>
            <tr>
                <td>Bulan</td>
                <td>:</td>
                <td><?= $nB; ?></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td><?= $nT; ?></td>
            </tr>
        </table>

        <table class="table table-bordered table-striped">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center">Jumlah</th>


            </tr>



            <?php
            $no = 1;
            foreach ($potongan as $p) :
                if ($p->potongan == "alfa") {
                    $alfa = $s->alfa * $p->jml_potongan;
                }
            endforeach; ?>

            <tr>
                <td><?= $no++; ?></td>
                <td>Gaji Pokok</td>
                <td><?= $s->gaji_pokok ?></td>
            </tr>
            <tr>
                <td><?= $no++; ?></td>
                <td>TJ . Transportasi</td>
                <td><?= $s->tj_transport ?></td>
            </tr>
            <tr>
                <td><?= $no++; ?></td>
                <td>TJ . Uang Makan</td>
                <td><?= $s->uang_makan ?></td>
            </tr>
            <tr>
                <td><?= $no++; ?></td>
                <td>Potongan</td>
                <td><?= $alfa ?></td>
            </tr>
            <tr>
                <td></td>
                <td class="text-right">Total Gaji</td>
                <td><?= $s->gaji_pokok + $s->tj_transport + $s->uang_makan - $alfa ?></td>
            </tr>

        </table>

    <?php endforeach; ?>

    <table style="width: 100%;">

        <tr>
            <td></td>
            <td>
                <p>Jambi, <?= date("d M Y"); ?><br> Finance</p>


                <br>
                <br>
                <p>_______________</p>
            </td>
            <td width="200px">
                <p>Jambi, <?= date("d M Y"); ?><br> Finance</p>


                <br>
                <br>
                <p>_______________</p>
            </td>
        </tr>
    </table>
</body>

</html>
<script>
    window.print();
</script>