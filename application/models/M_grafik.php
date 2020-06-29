<?php
class M_grafik extends CI_Model
{

    function tampil_data()
    {
        return $this->db->get('data');
    }

    public function status_menikah()
    {
        $query = "SELECT * FROM data_masyarakat WHERE sts='menikah'";
        return  $this->db->query($query)->result_array();
    }
}
