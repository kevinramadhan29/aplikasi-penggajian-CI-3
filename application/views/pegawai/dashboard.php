<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="alert alert-success font-weight-bold mb-4">
        Selamat datang , anda Login sebagai pegawai.
    </div>

    <div class="card" style="margin-bottom: 120px;">
        <div class="card-header font-weight-bold bg-primary text-white">
            Data Pegawai
        </div>
    </div>

    <?php foreach ($pegawai as $p) : ?>


        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <img style="width: 250px;" src="<?= base_url('assets/img/' . $p->photo) ?>" alt="">
                </div>
                <div class="col-md-7">

                    <table class="table">
                        <tr>
                            <td>Nama Pegawai</td>
                            <td>:</td>
                            <td><?= $p->nama_pegawai ?></td>
                        </tr>
                        <tr>
                            <td>jabatan</td>
                            <td>:</td>
                            <td><?= $p->jabatan ?></td>
                        </tr>
                        <tr>
                            <td>tanggal Masuk</td>
                            <td>:</td>
                            <td><?= $p->tanggal_masuk ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><?= $p->status ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>