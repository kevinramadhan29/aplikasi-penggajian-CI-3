<?php
class DataAbsensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('hak_akses') != 1) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
                </div>');
            redirect('welcome');
        }
    }

    public function index()
    {
        $data['title'] = "Data Absensi Pegawai";

        if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $bulanTahun = $bulan . $tahun;
        } else {
            $bulan = date('F');
            $tahun = date('Y');
            $bulanTahun = $bulan . $tahun;
        }


        // ! data jabatan setelah get data merupakan nama table pada database
        $data['absensi'] = $this->db->query("SELECT data_kehadiran.*,
        data_pegawai.nama_pegawai,
        data_pegawai.jenis_kelamin,
        data_pegawai.jabatan
        FROM data_kehadiran
        INNER JOIN data_pegawai ON data_kehadiran.nik=data_pegawai.nik
        INNER JOIN data_jabatan ON data_pegawai.jabatan=data_jabatan.nama_jabatan
        WHERE data_kehadiran.bulan='$bulanTahun'
        ORDER BY data_pegawai.nama_pegawai ASC")->result();

        // $data['absensi'] = $this->penggajianModel->getData('data_kehadiran')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataAbsensi/dataAbsensi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function inputAbsensi()
    {
        if ($this->input->post('submit', TRUE) == 'submit') {
            $post = $this->input->post();
            foreach ($post['bulan'] as $key => $value) :
                if ($post['bulan'][$key] != '' || $post['nik'][$key] != '') {
                    $simpan[] = [
                        'bulan'         => $post['bulan'][$key],
                        'nik'           => $post['nik'][$key],
                        'nama_pegawai'  => $post['nama_pegawai'][$key],
                        'jenis_kelamin' => $post['jenis_kelamin'][$key],
                        'jabatan'       => $post['jabatan'][$key],
                        'jumlah_hadir'  => $post['jumlah_hadir'][$key],
                        'sakit'         => $post['sakit'][$key],
                        'alfa'          => $post['alfa'][$key],
                    ];
                }
            endforeach;
            $this->penggajianModel->insertBatch('data_kehadiran', $simpan);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/dataAbsensi');
        }
        $data['title'] = "Input Data Absensi Pegawai";
        if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $bulanTahun = $bulan . $tahun;
        } else {
            $bulan = date('F');
            $tahun = date('Y');
            $bulanTahun = $bulan . $tahun;
        }
        $data['input_absensi'] = $this->db->query("SELECT data_pegawai.*,data_jabatan.nama_jabatan FROM data_pegawai
        INNER JOIN data_jabatan ON data_pegawai.jabatan=data_jabatan.nama_jabatan
        WHERE NOT EXISTS(SELECT * FROM data_kehadiran 
        WHERE bulan='$bulanTahun' AND data_pegawai.nik=data_kehadiran.nik) 
        ORDER BY data_pegawai.nama_pegawai ASC")->result();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataAbsensi/tambahDataAbsensi', $data);
        $this->load->view('templates_admin/footer');
    }
}
