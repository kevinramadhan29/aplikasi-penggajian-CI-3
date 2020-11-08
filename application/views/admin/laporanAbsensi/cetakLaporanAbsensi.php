<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    foreach ($cetakGaji as $s) :

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
    endforeach;
    ?>

    <table>
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
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Nik</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Hadir</th>
            <th class="text-center">Alfa</th>
            <th class="text-center">Sakit</th>

        </tr>



        <?php
        $no = 1;
        foreach ($potongan as $p) :
            $alfa = $p->jml_potongan;
        endforeach;
        foreach ($cetakGaji as $g) :
            $potongan = $g->alfa * $alfa;
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $g->nama_pegawai; ?></td>
                <td><?= $g->nik; ?></td>
                <td><?= $g->nama_jabatan; ?></td>
                <td><?= $g->jumlah_hadir; ?></td>
                <td><?= $g->alfa; ?></td>
                <td><?= $g->sakit; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

    <table style="width: 100%;">
        <tr>
            <td></td>
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