<?php
class ubahPassword extends CI_controller
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
        $data['title'] = "Ubah Password";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/ubahPassword/ubahPassword', $data);
        $this->load->view('templates_admin/footer');
    }

    public function ubahPasswordAksi()
    {

        $passBaru = $this->input->post('passBaru');
        $ulangPass = $this->input->post('ulangPass');

        $this->form_validation->set_rules('passBaru', 'Password Baru', 'required|matches[ulangPass]');
        $this->form_validation->set_rules('ulangPass', 'Ulang Password', 'required');

        if ($this->form_validation->run() != FALSE) {
            $data   =  ['password' => md5($passBaru)];
            $id     =  ['id_pegawai' => $this->session->userdata('id_pegawai')];


            $this->penggajianModel->updateData('data_pegawai', $data, $id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Password berhasil diupdate!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('welcome');
        } else {
            $data['title'] = "Ubah Password";
            $this->load->view('templates_admin/header', $data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/ubahPassword/ubahPassword', $data);
            $this->load->view('templates_admin/footer');
        }
    }
}
