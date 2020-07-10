<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

    private $_table = 'tbl_siswa';

    public function entry_data($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function update_data($data, $id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->update($this->_table, $data);
    }

    public function get_siswa()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function get_siswa_by_id()
    {
        $id = $this->uri->segment(3);
        return $this->db->get_where($this->_table, ['id_siswa' => $id])->row_array();
    }

    public function del_siswa_by_id()
    {
        $id = $this->uri->segment(3);
        return $this->db->delete($this->_table, ['id_siswa' => $id]);
    }

}

/* End of file M_siswa.php */
