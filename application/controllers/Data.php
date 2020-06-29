<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
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
        $data['title'] = 'Grafik Masyarakat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        //$data['data'] = $this->m_grafik->get_data();

        $data['menikah'] = $this->m_data->menikah()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/index', $data);
        $this->load->view('templates/footer');
    }
    public function grafikrekapitulasi()
    {
        $data['title'] = 'Grafik Rekapitulasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        //$data['data'] = $this->m_grafik->get_data();

        $data['menikah'] = $this->m_data->menikah()->result();

        $data['total_lakilaki'] = $this->m_data->hitungJumlahlakilaki();
        $data['total_perempuan'] = $this->m_data->hitungJumlahPerempuan();
        $data['jumlahwajibktpl'] = $this->m_data->jumlahwajibktpl();
        $data['jumlahwajibktpp'] = $this->m_data->jumlahwajibktpp();

        $data['jumlahelktpl'] = $this->m_data->jumlahelktpl();
        $data['jumlahelktpp'] = $this->m_data->jumlahelktpp();

        $data['jumlahkepkel'] = $this->m_data->jumlahkepkeluarga();
        $data['jumlahkk'] = $this->m_data->jumlahkk();

        $data['socah'] = $this->m_data->socah();
        $data['keleyan'] = $this->m_data->keleyan();
        $data['bilaporah'] = $this->m_data->bilaporah();
        $data['parseh'] = $this->m_data->parseh();
        $data['jaddih'] = $this->m_data->jaddih();
        $data['buluh'] = $this->m_data->buluh();
        $data['junganyar'] = $this->m_data->junganyar();
        $data['dakiring'] = $this->m_data->dakiring();
        $data['petaonan'] = $this->m_data->petaonan();
        $data['pernajuh'] = $this->m_data->pernajuh();
        $data['sanggraagung'] = $this->m_data->sanggraagung();


        $data['socah2'] = $this->m_data->socah2();
        $data['keleyan2'] = $this->m_data->keleyan2();
        $data['bilaporah2'] = $this->m_data->bilaporah2();
        $data['parseh2'] = $this->m_data->parseh2();
        $data['jaddih2'] = $this->m_data->jaddih2();
        $data['buluh2'] = $this->m_data->buluh2();
        $data['junganyar2'] = $this->m_data->junganyar2();
        $data['dakiring2'] = $this->m_data->dakiring2();
        $data['petaonan2'] = $this->m_data->petaonan2();
        $data['pernajuh2'] = $this->m_data->pernajuh2();
        $data['sanggraagung2'] = $this->m_data->sanggraagung2();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/index2', $data);
        $this->load->view('templates/footer');
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
        $this->load->view('user/data-masyarakat', $data);
        $this->load->view('templates/footer');
    }

    public function map()
    {
        $data['title'] = 'Map';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['map'] = $this->m_data->tampil_map()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/map', $data);
        $this->load->view('templates/footer');
    }
    public function lakiprenstra()
    {
        $data['title'] = 'Lakip-Renstra';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        //$data['map'] = $this->m_data->tampil_map()->result();

        $data['file'] = $this->m_data->view()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/lakib_renstra', $data);
        $this->load->view('templates/footer');
    }


}
