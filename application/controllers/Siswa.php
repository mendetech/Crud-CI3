<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends Admin_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_siswa', 'siswa');
    }
    

    public function index()
    {
        $this->vars['siswa']    = $this->siswa->get_siswa();
        $this->vars['title']    = 'Data Siswa';
        $this->vars['content']  = 'siswa/read_siswa';
        $this->load->view('tmp/index', $this->vars);
    }

    public function created()
    {
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
        
        if ($this->form_validation->run() == FALSE) {
            $this->vars['title']    = 'Tambah Data Siswa';
            $this->vars['content']  = 'siswa/create_siswa';
            $this->load->view('tmp/index', $this->vars);
        } else {
            $this->_save_data_siswa();
        }
        
    }

    private function _save_data_siswa()
    {
        if(isset($_POST['submit'])){
            $nama       = $this->input->post('nama_siswa', TRUE);
            $jurusan    = $this->input->post('jurusan', TRUE);
            $nisn       = $this->input->post('nisn', TRUE);
            $data = [
                'nama_siswa' => $nama,
                'jurusan'   => $jurusan,
                'nisn'      => $nisn,
                'created_at' => date('Y-m-d')
            ];
        }
        $this->siswa->entry_data($data);
        redirect('siswa');
    }

    public function updated()
    {
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
        
        if ($this->form_validation->run() == FALSE) {
            $this->vars['siswa']    = $this->siswa->get_siswa_by_id();
            $this->vars['title']    = 'Perbarui Data Siswa';
            $this->vars['content']  = 'siswa/update_siswa';
            $this->load->view('tmp/index', $this->vars);
        } else {
            $this->_save_update_siswa();
        }
        
    }

    private function _save_update_siswa()
    {
        if(isset($_POST['submit'])){
            $id_siswa   = $this->input->post('id_siswa', TRUE);
            $nama       = $this->input->post('nama_siswa', TRUE);
            $jurusan    = $this->input->post('jurusan', TRUE);
            $nisn       = $this->input->post('nisn', TRUE);
            $data = [
                'id_siswa' => $id_siswa,
                'nama_siswa' => $nama,
                'jurusan'   => $jurusan,
                'nisn'      => $nisn,
                'created_at' => date('Y-m-d')
            ];
        }
        $this->siswa->update_data($data, $id_siswa);
        redirect('siswa');
    }

    public function deleted()
    {
        $this->siswa->del_siswa_by_id();
        redirect('siswa');
    }

}

/* End of file Siswa.php */
