<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <table class="table table-striped table-bordered table-responsive">
        <tr>
            <th>Bulan/Tahun</th>
            <th>Gaji Pokok</th>
            <th>Tj. Transportasi</th>
            <th>Uang Makan</th>
            <th>Potongan Gaji</th>
            <th>Total Gaji</th>
            <th>Cetak Slip Gaji</th>
        </tr>

        <?php
        $no = 1;
        foreach ($potongan as $p) :
            if ($p->potongan == 'alfa') {
                $alfa = $p->jml_potongan;
            }
        endforeach;
        foreach ($gaji as $g) :
            $potongan = $g->alfa * $alfa;

        ?>
            <tr>
                <td><?= $g->bulan ?></td>
                <td><?= "Rp " . number_format($g->gaji_pokok, 0, ',', '.') ?>,00</td>
                <td><?= "Rp " . number_format($g->tj_transport, 0, ',', '.') ?>,00</td>
                <td><?= "Rp " . number_format($g->uang_makan, 0, ',', '.') ?>,00</td>
                <td><?= "Rp " . number_format($potongan, 0, ',', '.') ?>,00</td>
                <td><?= "Rp " . number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan, 0, ',', '.') ?>,00</td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?= base_url('pegawai/dataGaji/cetakSlip/' . $g->id_kehadiran) ?>"><i class="fas fa-print"></i></a>
                    </center>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>

</div>