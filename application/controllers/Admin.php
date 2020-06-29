<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_grafik');
        $this->load->model('m_data');
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['total_masyarakat'] = $this->m_data->hitungJumlahMasyarakat();
        $data['total_user'] = $this->m_data->hitungJumlahUser();
        $data['total_kritiksaran'] = $this->m_data->hitungJumlahKritiksaran();
        $data['data_kritiksaran'] = $this->m_data->tampil_kritiksaran()->result();
        $data['log'] = $this->m_data->log()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'RoleAccess';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id

        ];

        $result = $this->db->get_where('user_access_menu', $data);


        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        helper_log("edit", "Mengubah Akses");

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Change!</div>');
    }

    public function dataMasyarakat()
    {
        $data['title'] = 'Data Masyarakat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['data_masyarakat'] = $this->m_data->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data-masyarakat', $data);
        $this->load->view('templates/footer');
    }

    public function inputmasyarakat()
    {
        $data['title'] = 'Input Data Masyarakat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|is_unique[data_masyarakat.nik]', [
            'is_unique' => 'NIK ini telah di Inputkan!'
        ]);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/input-masyarakat', $data);
        $this->load->view('templates/footer');
    }

    public function inputData()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|is_unique[data_masyarakat.nik]', [
            'is_unique' => 'NIK ini telah di Inputkan!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('msg', '<div class="alert text-center alert-danger" role="alert">Data Telah Ada!</div>');
            redirect('admin/inputmasyarakat');
        } else {
            $nik = $this->input->post('nik');
            $nama = $this->input->post('name');
            $alamat = $this->input->post('alamat');
            $tempat = $this->input->post('tempat');
            $tanggallahir = $this->input->post('tanggallahir');
            $jeniskelamin = $this->input->post('jeniskelamin');
            $agama = $this->input->post('agama');
            $pekerjaan = $this->input->post('pekerjaan');
            $status = $this->input->post('status');


            $data = array(
                'nik' => $nik,
                'nama' => $nama,
                'alamat' => $alamat,
                'tempat' => $tempat,
                'tanggallahir' => $tanggallahir,
                'jenis_kelamin' => $jeniskelamin,
                'agama' => $agama,
                'pekerjaan' => $pekerjaan,
                'sts' => $status
            );

            helper_log("add", "Menambah data Masyarakat");

            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('nik', 'Nik', 'required|trim|is_unique[data_masyarakat.nik]', [
                'is_unique' => 'NIK ini telah di Inputkan!'
            ]);
            $this->form_validation->set_rules('nik', 'Name', 'required|trim');

            $this->m_data->input_data($data, 'data_masyarakat');
            $this->session->set_flashdata('msg', '<div class="alert text-center alert-success" role="alert">Data Telah Dimasukkan!</div>');
            redirect('admin/inputmasyarakat');
        }
    }

    public function hapus($nik)
    {
        $where = array('nik' => $nik);
        $this->m_data->hapus_data($where, 'data_masyarakat');

        helper_log("hapus", "Menghapus Data Masyarakat");
        redirect('admin/datamasyarakat');
    }
    public function hapusrekap($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'data_rekapitulasi');

        helper_log("hapus", "Menghapus Data Rekapitulasi");
        redirect('admin/datarekapitulasi');
    }

    public function edit($nik)
    {
        $data['title'] = 'Edit Masyarakat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('nik' => $nik);
        $data['data_masyarakat'] = $this->m_data->edit_data($where, 'data_masyarakat')->result();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit-masyarakat', $data);
        $this->load->view('templates/footer');
    }

    public function editrekap($id)
    {
        $data['title'] = 'Edit Rekapitulasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('id' => $id);
        $data['data_rekapitulasi'] = $this->m_data->edit_data($where, 'data_rekapitulasi')->result();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit-rekapitulasi', $data);
        $this->load->view('templates/footer');
    }

    function update()
    {
        $nik = $this->input->post('nik');
        $name = $this->input->post('name');
        $alamat = $this->input->post('alamat');
        $tempat = $this->input->post('tempat');
        $tanggallahir = $this->input->post('tanggallahir');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $agama = $this->input->post('agama');
        $pekerjaan = $this->input->post('pekerjaan');
        $status = $this->input->post('status');

        $data = array(
            'nik' => $nik,
            'nama' => $name,
            'alamat' => $alamat,
            'tempat' => $tempat,
            'tanggallahir' => $tanggallahir,
            'jenis_kelamin' => $jeniskelamin,
            'agama' => $agama,
            'pekerjaan' => $pekerjaan,
            'sts' => $status
        );

        $where = array(
            'nik' => $nik
        );

        $this->m_data->update_data($where, $data, 'data_masyarakat');
        helper_log("edit", "Edit Data Masyarakat");

        redirect('admin/datamasyarakat');
    }

    function updaterekap()
    {
        $nama_desa = $this->input->post('nama_desa');
        $pend_l = $this->input->post('pend_l');
        $pend_p = $this->input->post('pend_p');
        $kep_keluarga = $this->input->post('kep_keluarga');
        $pend_kk = $this->input->post('pend_kk');
        $wajib_ktp_l = $this->input->post('wajib_ktp_l');
        $wajib_ktp_p = $this->input->post('wajib_ktp_p');
        $el_ktp_l = $this->input->post('el_ktp_l');
        $el_ktp_p = $this->input->post('el_ktp_p');

        $data = array(
            'nama_desa' => $nama_desa,
            'pend_l' => $pend_l,
            'pend_p' => $pend_p,
            'kep_keluarga' => $kep_keluarga,
            'pend_kk' => $pend_kk,
            'wajib_ktp_l' => $wajib_ktp_l,
            'wajib_ktp_p' => $wajib_ktp_p,
            'el_ktp_l' => $el_ktp_l,
            'el_ktp_p' => $el_ktp_p
        );

        $where = array(
            'nama_desa' => $nama_desa
        );

        $this->m_data->update_data($where, $data, 'data_rekapitulasi');
        helper_log("edit", "Edit Data Rekapitulasi");

        redirect('admin/datarekapitulasi');
    }

    public function inputmap()
    {
        $data['title'] = 'Input Map';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['data_map'] = $this->m_data->tampil_map()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/input-map', $data);
        $this->load->view('templates/footer');
    }

    public function inputdatamap()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('linkmap', 'Link', 'required|trim|is_unique[map.link]', [
            'is_unique' => 'Link ini telah di Inputkan!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('msg', '<div class="alert text-center alert-danger" role="alert">Map gagal dimasukkan!</div>');
            redirect('admin/inputmap');
        } else {
            $nama = $this->input->post('name');
            $link = $this->input->post('linkmap');

            $data = array(
                'nama' => $nama,
                'link' => $link
            );

            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('nik', 'Nik', 'required|trim|is_unique[data_masyarakat.nik]', [
                'is_unique' => 'NIK ini telah di Inputkan!'
            ]);
            $this->form_validation->set_rules('nik', 'Name', 'required|trim');

            $this->m_data->input_data($data, 'map');
            helper_log("add", "Menambah Map");
            $this->session->set_flashdata('msg', '<div class="alert text-center alert-success" role="alert">Map telah dimasukkan!</div>');
            redirect('admin/inputmap');
        }
    }

    public function hapusmap($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'map');
        helper_log("hapus", "Menghapus Map");
        redirect('admin/inputmap');
    }

    public function editmap($id)
    {
        $data['title'] = 'Edit Map';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('id' => $id);
        $data['data_map'] = $this->m_data->edit_data($where, 'map')->result();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit-map', $data);
        $this->load->view('templates/footer');
    }
    function updatemap()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $link = $this->input->post('linkmap');

        $data = array(
            'nama' => $name,
            'link' => $link

        );

        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where, $data, 'map');
        helper_log("edit", "Mengubah Map");
        redirect('admin/inputmap');
    }

    public function inputlakiprenstra()
    {
        $data['title'] = 'Input Lakip-Renstra';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['file'] = $this->m_data->view()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/input-lakibrenstra', $data);
        $this->load->view('templates/footer');
    }

    public function uploadlakibrenstra()
    {
        $config['upload_path']         = 'assets/file/lakiprenstra/';  // folder upload 
        $config['allowed_types']        = 'pdf|docx|doc'; // jenis file
        $config['max_size']             = 10000;
        //$config['max_width']            = 10000;
        //$config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) //sesuai dengan name pada form 
        {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Gagal Upload!</div>');
            redirect('admin/inputlakiprenstra');
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $file_lakibrenstra = $file['file_name'];
            

            $this->m_data->insert(array(
                'file' => $file_lakibrenstra,
                

            ));
            helper_log("add", "Menambah File LakipRenstra");
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Success!</div>');
            redirect('admin/inputlakiprenstra');
        }
    }

    public function hapusfile($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'lakib_renstra');
        helper_log("hapus", "Menghapus LakipRenstra");
        redirect('admin/inputlakiprenstra');
    }

    function action(){
        $this->load->library('excel');
$object = new PHPExcel();

$object->setActiveSheetIndex(0);

$table_columns = array("NIK","NAMA","ALAMAT","TEMPAT","TANGGAL LAHIR","JENIS KELAMIN","AGAMA", "PEKERJAAN","STATUS");
$column = 0;

foreach ($table_columns as $field) {
    $object->getActiveSheet()->setCellValueByColumnAndRow($column,1,$field);
    $column++;
}


$data_masyarakat = $this->m_data->tampil_data()->result();
$excel_row = 2;

foreach ($data_masyarakat as $row) {
    $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row, $row->nik);
    $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row, $row->nama);
    $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row, $row->alamat);
    $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row, $row->tempat);
    $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row, $row->tanggallahir);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row, $row->jenis_kelamin);
    $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row, $row->agama);
    $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row, $row->pekerjaan);
    $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row, $row->sts);

    $excel_row++;
}

$object_writer = PHPExcel_IOFactory::createWriter($object,'Excel5');
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Data Masyarakat.xls"');
$object_writer->save('php://output');

    }

    public function datarekapitulasi(){
        $data['title'] = 'Data Rekapitulasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['data_rekapitulasi'] = $this->m_data->tampil_rekapitulasi()->result();

        //$data['file'] = $this->m_data->view()->result();
        $this->form_validation->set_rules('nama_desa', 'Nama_Desa', 'required');
        $this->form_validation->set_rules('pend_l', 'Penduduk Laki-laki', 'required');
        $this->form_validation->set_rules('pend_p', 'Penduduk Perempuan', 'required');
        $this->form_validation->set_rules('kep_keluarga', 'Kepala Keluarga', 'required');
        $this->form_validation->set_rules('pend_kk', 'Penduduk KK', 'required');
        $this->form_validation->set_rules('wajib_ktp_l', 'Wajib KTP Laki-laki', 'required');
        $this->form_validation->set_rules('wajib_ktp_p', 'Wajib KTP Perempuan', 'required');
        $this->form_validation->set_rules('el_ktp_l', 'Elektronik KTP Laki-laki', 'required');
        $this->form_validation->set_rules('el_ktp_p', 'Elektronik KTP Perempuan', 'required');


        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data-rekapitulasi', $data);
        $this->load->view('templates/footer');
    } else {
        $data = [
            'nama_desa' => $this->input->post('nama_desa'),
            'pend_l' => $this->input->post('pend_l'),
            'pend_p' => $this->input->post('pend_p'),
            'kep_keluarga' => $this->input->post('kep_keluarga'),
            'pend_kk' => $this->input->post('pend_kk'),
            'wajib_ktp_l' => $this->input->post('wajib_ktp_l'),
            'wajib_ktp_p' => $this->input->post('wajib_ktp_p'),
            'el_ktp_l' => $this->input->post('el_ktp_l'),
            'el_ktp_p' => $this->input->post('el_ktp_p')
        ];

        helper_log("add", "Menambah data Rekapitulasi");
        $this->db->insert('data_rekapitulasi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Ditambahkan!</div>');
        redirect('admin/datarekapitulasi');
    }
    }

}
