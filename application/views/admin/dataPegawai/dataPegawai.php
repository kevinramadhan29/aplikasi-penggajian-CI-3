<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <?= $this->session->flashdata('pesan') ?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?= base_url('admin/dataPegawai/tambahData') ?>"> <i class="fas fa-plus"></i> Tambah Data Pegawai</a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped mt-2">
            <tr>
                <th class="text-center">
                    No
                </th>
                <th class="text-center">
                    NIK
                </th>
                <th class="text-center">
                    Nama Pegawai
                </th>
                <th class="text-center">
                    Username
                </th>
                <th class="text-center">
                    Password
                </th>
                <th class="text-center">
                    Jenis Kelamin
                </th>
                <th class="text-center">
                    Jabatan
                </th>
                <th class="text-center">
                    Tanggal Masuk
                </th>
                <th class="text-center">
                    Status
                </th>
                <th class="text-center">
                    Foto
                </th>
                <th class="text-center">
                    Hak Akses
                </th>
                <th class="text-center">
                    Action
                </th>
            </tr>

            <?php $no = 1;
            foreach ($pegawai as $p) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $p->nik; ?></td>
                    <td><?= $p->nama_pegawai; ?></td>
                    <td><?= $p->username; ?></td>
                    <td><?= $p->password; ?></td>
                    <td><?= $p->jenis_kelamin; ?></td>
                    <td><?= $p->jabatan; ?></td>
                    <td><?= $p->tanggal_masuk; ?></td>
                    <td><?= $p->status; ?></td>
                    <td><img src="<?= base_url() . 'assets/img/' . $p->photo ?>" alt="" style="width: 75px;"></td>

                    <?php if ($p->hak_akses == '1') { ?>
                        <td>Admin</td>
                    <?php } else { ?>
                        <td>Pegawai</td>
                    <?php }; ?>


                    <td>
                        <center>

                            <!-- Update Data -->

                            <a href="<?= base_url('admin/dataPegawai/updateData/' . $p->id_pegawai); ?>" class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i></a>

                            <!-- Delete Data -->

                            <a onclick="return confirm('Yakin Hapus')" href="<?= base_url('admin/dataPegawai/hapusData/' . $p->id_pegawai); ?>" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i></a>


                        </center>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>