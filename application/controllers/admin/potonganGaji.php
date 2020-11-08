<?php
class potonganGaji extends CI_Controller
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
        $data['title'] = "Atur Potongan Gaji";

        // ! data jabatan setelah get data merupakan nama table pada database

        $data['potongan'] = $this->penggajianModel->getData('potongan_gaji')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/potonganGaji/potonganGaji', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah Potongan Gaji";
        // ! data jabatan setelah get data merupakan nama table pada database
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/potonganGaji/tambahPotonganGaji', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $potongan = $this->input->post('potongan');
            $jml_potongan = $this->input->post('jml_potongan');

            $data = [
                'potongan' => $potongan,
                'jml_potongan' => $jml_potongan

            ];

            $this->penggajianModel->insertData($data, 'potongan_gaji');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/potonganGaji');
        }
    }

    public function updateData($id)
    {
        $data['potongan'] = $this->db->query("SELECT * FROM potongan_gaji WHERE id='$id'")->result();
        $data['title'] = "Update Data Potongan Gaji";

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/potonganGaji/updatePotonganGaji', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
        } else {
            $id = $this->input->post('id');
            $potongan = $this->input->post('potongan');
            $jml_potongan = $this->input->post('jml_potongan');

            $data = [
                'potongan' => $potongan,
                'jml_potongan' => $jml_potongan

            ];

            $where = array(
                'id' => $id
            );

            $this->penggajianModel->updateData('potongan_gaji', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diupdate!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/potonganGaji');
        }
    }

    public function hapusData($id)
    {
        $where = array(
            'id' => $id
        );

        $this->penggajianModel->hapusData($where, 'potongan_gaji');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/potonganGaji');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('potongan', 'nama jabatan', 'required');
        $this->form_validation->set_rules('jml_potongan', 'gaji pokok', 'required');
    }
}
