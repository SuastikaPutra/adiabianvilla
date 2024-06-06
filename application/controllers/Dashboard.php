<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('customer_model');
        $this->load->model('M_dashboard');
    }

    public function main()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        } else {
            $data = [
                'title' => 'Adi Abian Villa Dashboard',
                'header' => 'dashboard/header',
                'navbar' => 'dashboard/navbar',
                'sidebar' => 'dashboard/sidebar',
                'content' => 'dashboard/test',
                'footer' => 'dashboard/footer',
                'script' => 'dashboard/script'
            ];
            $this->load->view('dashboard/main', $data);
        }
    }

    public function userdata()
    {
        $customer = $this->customer_model->get_data_tamu();
        $data = [
            'title' => 'Guest Data',
            'header' => 'partials/header',
            'content' => 'partials/dashboard/allDataCustomer',
            'customer' => $customer,
        ];

        $this->load->view('partials/main', $data);
    }


    public function index()
    {
        $kamar = $this->M_dashboard->get_status_ketersediaan();
        $data = [
            'title' => 'Calendar',
            'header' => 'partials/header',
            'content' => 'dashboard/main',
            'script' => 'partials/script',
            'kamar' => $kamar,
        ];
        $this->load->view('partials/main', $data);
    }
    public function ubah_status($id_kamar)
    {
        $this->M_dashboard->ubah_status_kamar($id_kamar, 0);
        redirect('dashboard/statusketersediaan');
    }
    public function ada_status($id_kamar)
    {
        $this->M_dashboard->ubah_status_kamar($id_kamar, 1);
        redirect('dashboard/statusketersediaan');
    }
    public function test()
    {
        $this->load->view('dashboard/main');
    }

    public function statusketersediaan()
    {
        $kamar = $this->M_dashboard->get_kamar();
        $data = [
            'title' => 'Adi Abian Villa Dashboard',
            'header' => 'dashboard/header',
            'navbar' => 'dashboard/navbar',
            'sidebar' => 'dashboard/sidebar',
            'content' => 'dashboard/statuskamar',
            'footer' => 'dashboard/footer',
            'script' => 'dashboard/script',
            'kamar' => $kamar
        ];
        $this->load->view('dashboard/main', $data);
    }
    public function detailketersediaan()
    {
        
    }

}

/* End of file Controllername.php */
